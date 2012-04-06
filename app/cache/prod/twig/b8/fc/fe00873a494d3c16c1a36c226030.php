<?php

/* DMCMainBundle::layout.html.twig */
class __TwigTemplate_b8fcfe00873a494d3c16c1a36c226030 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'jqueryDocumentReady' => array($this, 'block_jqueryDocumentReady'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "\t
        <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t<div class=\"container\">
\t<div id=\"header\">
\t";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 58
        echo "\t</div>
\t
        ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 65
        echo "\t
\t<div id=\"footer\">
\t\t";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "\t</div>
\t</div>
        ";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "\t\t<script type=\"text/javascript\">
\t\t\tjQuery(document).ready(function() {
\t\t\t\t";
        // line 78
        $this->displayBlock('jqueryDocumentReady', $context, $blocks);
        // line 80
        echo "\t\t\t});
\t\t</script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Dessine moi un cadeau";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dmcmain/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t\t<!--<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dmcmain/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />-->
\t\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dmcmain/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t";
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 18
        echo "\t\t<div class=\"navbar navbar-fixed-top\">
\t\t\t<div class=\"navbar-inner barreMenuSup\">
\t\t\t\t<div class=\"container\">
\t\t\t\t    <ul class=\"nav\">
\t\t\t\t\t    <a class=\"brand\" href=\"#\">
\t\t\t\t\t\t\t<img class=\"logoPrincipal\" src=\"http://dessinemoiuncadeau.com/img/logo3.png\" alt=\"Dessine moi un cadeau\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accueil</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"nav pull-right\">
\t\t\t\t\t\t<li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contact"), "html", null, true);
        echo "\">Contact</a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("quisommesnous"), "html", null, true);
        echo "\">Qui sommes-nous?</a></li>
\t\t\t\t\t\t<li class=\"dropdown\">
\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
\t\t\t\t\t\t\t\tPlus d'infos
\t\t\t\t\t\t\t\t<b class=\"caret\"></b>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Action</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"divider\"></li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">Separated link</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        // line 61
        echo "\t\t
\t\t
\t\t
\t\t";
    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        // line 68
        echo "\t\tfooter
\t\t";
    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        // line 73
        echo "\t\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dmcmain/js/jquery-1.7.1.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dmcmain/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
\t\t";
    }

    // line 78
    public function block_jqueryDocumentReady($context, array $blocks = array())
    {
        // line 79
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "DMCMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
