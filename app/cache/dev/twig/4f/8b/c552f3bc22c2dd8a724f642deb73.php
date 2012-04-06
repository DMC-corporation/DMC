<?php

/* DMCMainBundle:Default:backOffice.html.twig */
class __TwigTemplate_4f8bc552f3bc22c2dd8a724f642deb73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DMCMainBundle::layoutBackOffice.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Bienvenue sur le Back Office de fer !</h1>
\t<blockquote>
\tDessine moi un cadeau, le projet qui va nous rendre : 
\t</blockquote>
\t<h2>Riche</h2>
\t<img src=\"http://www.weddingplanninginstitute.com/blog/wp-content/uploads/2010/09/moneygift.jpg\" alt=\"lol\"/>
<h2>Beau</h2>
\t<img src=\"http://www.mimifroufrou.com/scentedsalamander/images/dior-homme-jude-law.jpg\" alt=\"lol\"/>
\t<h2>Plein de gonzesses</h2>
\t<img src=\"http://seohotstuff.com/wp-content/uploads/2011/04/Big-tits-girl-with-a-lot-of-money.jpg\" alt=\"lol\"/>
";
    }

    public function getTemplateName()
    {
        return "DMCMainBundle:Default:backOffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
