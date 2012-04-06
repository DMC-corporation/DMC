<?php

/* DMCMainBundle::layoutBackOffice.html.twig */
class __TwigTemplate_ca90403a5232d214808287cddbbb3ed4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'logo' => array($this, 'block_logo'),
            'menu' => array($this, 'block_menu'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
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
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t<div id=\"bandeauSup\">
\t\t";
        // line 15
        $this->displayBlock('logo', $context, $blocks);
        // line 41
        echo "\t</div>
\t<div  class=\"row-fluid\">
\t\t<div class=\"span2\">
\t\t\t<div id=\"menu\" class=\"well\">
\t\t\t";
        // line 45
        $this->displayBlock('menu', $context, $blocks);
        // line 67
        echo "\t\t\t</div>
\t\t</div>
\t\t<div class=\"span10\">
\t\t\t<div id=\"body\">
\t\t\t\t";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "\t\t\t</div>
\t\t</div>
\t\t
\t</div>
\t<div class=\"row-fluid\">
\t\t<div id=\"footer\">
\t\t\t";
        // line 78
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "\t\t</div>
\t</div>
\t";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "DMC - BackOffice";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "\t\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dmcmain/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dmcmain/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dmcmain/css/style_backOffice.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
\t";
    }

    // line 15
    public function block_logo($context, array $blocks = array())
    {
        // line 16
        echo "\t\t<div class=\"navbar navbar-fixed-top\">
\t\t\t<div class=\"navbar-inner\">
\t\t\t  <div class=\"container\">
\t\t\t\t<a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
\t\t\t\t  <span class=\"icon-bar\"></span>

\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t  <span class=\"icon-bar\"></span>
\t\t\t\t</a>
\t\t\t\t<a class=\"brand\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backoffice"), "html", null, true);
        echo "\">Dessine moi un cadeau - Back Office</a>
\t\t\t\t<div class=\"nav-collapse\">
\t\t\t\t  <ul class=\"nav\">
\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html", null, true);
        echo "\">Accès Front Office</a></li>
\t\t\t\t  </ul>
\t\t\t\t  <form class=\"navbar-search pull-right\" action=\"\">
\t\t\t\t\t<input type=\"text\" class=\"search-query span2\" placeholder=\"Search\">
\t\t\t\t  </form>
\t\t\t\t  <ul class=\"nav pull-right\">
\t\t\t\t\t<li><a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\">Deconnexion</a></li>
\t\t\t\t  </ul>
\t\t\t\t</div><!-- /.nav-collapse -->
\t\t\t  </div>
\t\t\t</div><!-- /navbar-inner -->
\t\t  </div><!-- /navbar -->
\t\t";
    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t<li class=\"nav-header\">
\t\t\t\t\t\tMenu principal
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("backoffice"), "html", null, true);
        echo "\"><i class=\"icon-home\"></i>Accueil du backoffice</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article"), "html", null, true);
        echo "\"><i class=\"icon-gift\"></i>Gestion Article</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("categorie"), "html", null, true);
        echo "\"><i class=\"icon-shopping-cart\"></i>Gestion Catégorie</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil"), "html", null, true);
        echo "\"><i class=\"icon-user\"></i>Gestion des profils</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("question"), "html", null, true);
        echo "\"><i class=\"icon-folder-close\"></i>Gestion des questions</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t";
    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
    }

    // line 78
    public function block_footer($context, array $blocks = array())
    {
        // line 79
        echo "\t\t\t";
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DMCMainBundle::layoutBackOffice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
