<?php

/* DMCUserBundle:Default:index.html.twig */
class __TwigTemplate_1c248ec40b90673c82c718d12ad752ea extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "DMCUserBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
