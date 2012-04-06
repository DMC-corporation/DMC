<?php

/* DMCCategorieBundle:Categorie:frontAffichage.html.twig */
class __TwigTemplate_4b1d636617ef669e73338663c31e91de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DMCMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dmccategorie/css/style_frontCategorie.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Categorie
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"section\">
\t<div class=\"row\">
\t\t<div id=\"divBandeauPrincipal\" class=\"span12\">
\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span3\">
\t\t\t\t\t<div class=\"bordureGrise\">
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<label>Prix : entre <span id=\"amountPrixMin\">25</span>&euro; et <span id=\"amountPrixMax\">30</span>&euro;</label>
\t\t\t\t\t\t\t<h3>Gros Menager</h3>\t\t\t\t  
\t\t\t\t\t\t\t<h2>Refrigirateur</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span8\">
\t\t\t\t\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t\t\t\t\t<li class=\"span2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://icons.iconarchive.com/icons/heylove/vintage/128/vintage-fridge-green-icon.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t\t\t\t\t<li class=\"span1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://icons.iconarchive.com/icons/heylove/vintage/128/vintage-fridge-green-icon.png\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"span1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"http://storage3d.com/storage/2010.05/bb547056b953b798973664629f38fdb4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</li>\t\t\t\t  
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t\t\t  <li class=\"span1\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t  <img src=\"http://www.max-models.eu/wp-content/uploads/2012/02/Whirpool-fridge-3d-model.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </li>
\t\t\t\t\t\t\t  <li class=\"margeGauchePourLes3Thumbails span1\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t  <img src=\"http://icons.iconarchive.com/icons/heylove/vintage/128/vintage-fridge-green-icon.png\" alt=\"\">\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </li>
\t\t\t\t\t\t\t  <li class=\"margeGauchePourLes3Thumbails span1\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t  <img src=\"http://icons.iconarchive.com/icons/heylove/vintage/128/vintage-fridge-green-icon.png\" alt=\"\">\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t  </li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t\t\t<i class=\"icon-info-sign\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span8\">
\t\t\t\t\t\t\t\t<h5>ID Code : 254f5gf51</h5>\t\t
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t\t\t<i class=\"icon-heart\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span8\">
\t\t\t\t\t\t\t\t<h5>Ajouter aux favoris</h5>\t
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t\t\t<i class=\"icon-trash\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span8\">
\t\t\t\t\t\t\t\t<h5>Ce cadeau vous deplait</h5>\t
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t\t\t<i class=\"icon-tags\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span8\">
\t\t\t\t\t\t\t\t<h5>Signaler un abus</h5>\t
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"span9\">
\t\t\t\t\t<div class=\"bordureGrise\">
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t<h3>Gros Menager</h3>\t\t\t\t  
\t\t\t\t\t\t\t\t<h2>Refrégirateur</h2>
\t\t\t\t\t\t\t\t<img src=\"http://www.everydayminimalist.com/wp-content/uploads/2010/08/fridge.jpg\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t<p class=\"bordureGrise\">
\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sapien ligula, sodales vel pulvinar quis, mattis non eros. Ut condimentum laoreet nunc. Morbi blandit erat nec purus tincidunt ac luctus quam dignissim. Integer sed lacus lorem, id hendrerit quam. Nullam sed lorem sapien, vi magna posuere hendrerit. Duis posuere neque tellus. Proin facilisis interdum dignissim.<br/>

Integer commodo imperdiet aliquam. Donec dapibus, tortor quis suscipit dignistum lorem ultrices. Nullam placerat condimentum dolor, id sollicitudin sem consequat commodo.<br/>

\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t
\t</div>
\t<div id=\"empty\" style=\"height: 18px;\">
\t</div>
\t<div class=\"row\">
\t\t<div id=\"divBandeauPrincipal\" class=\"span12\">\t
\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span3\">
\t\t\t\t\t<h2>Legende</h2>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"span2\">
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t\t<i class=\"icon-heart\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t<h5>Legende</h5>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"span2\">
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t\t<i class=\"icon-flag\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t<h5>Legende</h5>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"span2\">
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t\t<i class=\"icon-screenshot\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t<h5>Legende</h5>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t
\t\t\t\t<div class=\"span2\">
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span2\">
\t\t\t\t\t\t\t<i class=\"icon-eye-open\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t<h5>Legende</h5>
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>\t\t
\t\t</div>
\t</div>
\t</div>
\t<div id=\"empty\" style=\"height: 18px;\">
\t</div>
\t<div class=\"row\">
\t\t<div id=\"divBandeauPrincipal\" class=\"span12\">\t
\t\t\t<div class=\"row-fluid\">
\t\t\t\t<div class=\"span12\">
\t\t\t\t\t<h5>Information Partenaire</h5>\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t<h2>Darty</h2>
\t\t\t\t\t\t<h5>Partenaire De DessinemoiUN DOKA depuis le 18/02/12</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t<h5>C de la balle</h5>
\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t\t\t<li class=\"span2\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"http://www.darty.com/res3/views_mobile/common/img/big_logo.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>\t\t\t\t  
\t\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t<h5>Darty possede 356 Articles commeALAN</h5>\t\t\t\t\t\t
\t\t\t\t\t\t<ul class=\"thumbnails\">
\t\t\t\t\t\t\t<li class=\"span1\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"http://www.darty.com/res3/views_mobile/common/img/big_logo.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"span1\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"http://www.darty.com/res3/views_mobile/common/img/big_logo.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"span1\">
\t\t\t\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t\t\t\t<img src=\"http://www.darty.com/res3/views_mobile/common/img/big_logo.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>\t\t\t\t
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>\t\t\t\t\t
\t\t\t</div>\t\t
\t\t</div>
\t</div>
\t
\t
\t<div class=\"row\">
\t\t<div class=\"span10 offset1\">
\t\t  <h2>Resultats de recherche</h2>
\t\t  <p>Voici la super selection.</p>
\t\t\t  <ul id=\"carouselCateg\" class=\"thumbnails\">
\t\t\t  ";
        // line 235
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 236
            echo "\t\t\t\t<li class=\"span8\">
\t\t\t\t\t<div class=\"thumbnail\">
\t\t\t\t\t\t<img src=\"http://placehold.it/160x120\" alt=\"\">
\t\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t  <h5>Thumbnail label</h5>
\t\t\t\t\t\t  <p>Le produit pour les roux, chiant et pas musclé</p>
\t\t\t\t\t\t  <p><a class=\"btn btn-primary\" href=\"#\">Voir les produits</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 247
        echo "\t\t\t </ul>
\t\t</div>
\t</div>
\t
\t
\t
</div>
";
    }

    public function getTemplateName()
    {
        return "DMCCategorieBundle:Categorie:frontAffichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
