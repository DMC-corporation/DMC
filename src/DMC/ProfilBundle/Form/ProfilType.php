<?php

namespace DMC\ProfilBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProfilType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('type')
        ;
    }

    public function getName()
    {
        return 'dmc_profilbundle_profiltype';
    }
}
