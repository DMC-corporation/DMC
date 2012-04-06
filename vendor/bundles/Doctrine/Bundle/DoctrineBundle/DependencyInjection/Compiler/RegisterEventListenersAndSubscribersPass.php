<?php

/*
 * This file is part of the Doctrine Bundle
 *
 * The code was originally distributed inside the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 * (c) Doctrine Project, Benjamin Eberlei <kontakt@beberlei.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Doctrine\Bundle\DoctrineBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

class RegisterEventListenersAndSubscribersPass implements CompilerPassInterface
{
    private $container;
    private $connections;
    private $eventManagers;

    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('doctrine')) {
            return;
        }

        $this->container = $container;
        $this->connections = $container->getParameter('doctrine.connections');

        foreach ($container->findTaggedServiceIds('doctrine.event_subscriber') as $subscriberId => $instances) {
            $this->registerSubscriber($subscriberId, $instances);
        }

        foreach ($container->findTaggedServiceIds('doctrine.event_listener') as $listenerId => $instances) {
            $this->registerListener($listenerId, $instances);
        }
    }

    protected function registerSubscriber($subscriberId, $instances)
    {
        $connections = array();
        foreach ($instances as $attributes) {
            if (isset($attributes['connection'])) {
                $connections[] = $attributes['connection'];
            } else {
                $connections = array_keys($this->connections);
                break;
            }
        }

        foreach ($connections as $name) {
            $this->getEventManager($name, $subscriberId)->addMethodCall('addEventSubscriber', array(new Reference($subscriberId)));
        }
    }

    protected function registerListener($listenerId, $instances)
    {
        $connections = array();
        foreach ($instances as $attributes) {
            if (!isset($attributes['event'])) {
                throw new \InvalidArgumentException(sprintf('Doctrine event listener "%s" must specify the "event" attribute.', $listenerId));
            }

            if (isset($attributes['connection'])) {
                $cs = array($attributes['connection']);
            } else {
                $cs = array_keys($this->connections);
            }

            foreach ($cs as $connection) {
                if (!isset($connections[$connection]) || !is_array($connections[$connection])) {
                    $connections[$connection] = array();
                }
                $connections[$connection][] = $attributes['event'];
            }
        }

        foreach ($connections as $name => $events) {
            $this->getEventManager($name, $listenerId)->addMethodCall('addEventListener', array(
                array_unique($events),
                new Reference($listenerId),
            ));
        }
    }

    private function getEventManager($name, $listenerId = null)
    {
        if (null === $this->eventManagers) {
            $this->eventManagers = array();
            foreach ($this->connections as $n => $id) {
                $arguments = $this->container->getDefinition($id)->getArguments();
                $this->eventManagers[$n] = $this->container->getDefinition((string) $arguments[2]);
            }
        }

        if (!isset($this->eventManagers[$name])) {
            throw new \InvalidArgumentException(sprintf('Doctrine connection "%s" does not exist but is referenced in the "%s" event listener.', $name, $listenerId));
        }

        return $this->eventManagers[$name];
    }
}
