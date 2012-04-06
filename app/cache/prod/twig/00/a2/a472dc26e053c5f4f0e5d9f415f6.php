<?php

/* DMCMainBundle:Default:index.html.twig */
class __TwigTemplate_00a2a472dc26e053c5f4f0e5d9f415f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'jqueryDocumentReady' => array($this, 'block_jqueryDocumentReady'),
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
        echo "\t<link href=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css\" rel=\"stylesheet\" type=\"text/css\"/>
\t";
        // line 4
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dmcmain/css/style_index.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 7
    public function block_javascripts($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js\"></script>
\t<script>
\t\tfunction defineFourchettePrix(prixMin, prixMax){
\t\t\t\$( \"#slider-prix\" ).slider(\"option\", \"values\", [ prixMin, prixMax ]);
\t\t\t\$( \"#amountPrixMin\" ).html( prixMin);
\t\t\t\$( \"#amountPrixMax\" ).html( prixMax);
\t\t}
\t\t
\t\tfunction defineAge(age){
\t\t\t\$( \"#slider-age\" ).slider(\"option\", \"value\", age);
\t\t\t\$( \"#amountAge\" ).html( age);
\t\t}
\t\tfunction defineProfil(id, pourcentage){
\t\t\t\$( \"#slider-profil\"+id ).slider(\"option\", \"value\", pourcentage);
\t\t\t\$( \"#amountProfil\"+id ).html(pourcentage);
\t\t\t\$( \"#affichageBarProfil\"+id ).width(pourcentage+\"%\");
\t\t\tif(pourcentage<30){
\t\t\t\t\$( \"#barProfil\"+id ).removeClass(\"progress-success\");
\t\t\t\t\$( \"#barProfil\"+id ).removeClass(\"progress-danger\");
\t\t\t\t\$( \"#barProfil\"+id ).addClass(\"progress-danger\");
\t\t\t\t\$( \"#slider-profil\"+id ).removeClass(\"red\");
\t\t\t\t\$( \"#slider-profil\"+id ).removeClass(\"blue\");
\t\t\t\t\$( \"#slider-profil\"+id ).removeClass(\"green\");
\t\t\t\t\$( \"#slider-profil\"+id ).addClass(\"red\");
\t\t\t}else if(pourcentage>70){
\t\t\t\t\$( \"#barProfil\"+id ).removeClass(\"progress-success\");
\t\t\t\t\$( \"#barProfil\"+id ).removeClass(\"progress-danger\");
\t\t\t\t\$( \"#barProfil\"+id ).addClass(\"progress-success\");
\t\t\t\t\$( \"#slider-profil\"+id ).removeClass(\"red\");
\t\t\t\t\$( \"#slider-profil\"+id ).removeClass(\"blue\");
\t\t\t\t\$( \"#slider-profil\"+id ).removeClass(\"green\");
\t\t\t\t\$( \"#slider-profil\"+id ).addClass(\"green\");
\t\t\t}else{
\t\t\t\t\$( \"#barProfil\"+id ).removeClass(\"progress-success\");
\t\t\t\t\$( \"#barProfil\"+id ).removeClass(\"progress-danger\");
\t\t\t\t\$( \"#slider-profil\"+id ).removeClass(\"red\");
\t\t\t\t\$( \"#slider-profil\"+id ).removeClass(\"blue\");
\t\t\t\t\$( \"#slider-profil\"+id ).removeClass(\"green\");
\t\t\t\t\$( \"#slider-profil\"+id ).addClass(\"blue\");
\t\t\t}
\t\t}
\t\tfunction hideOrShow(id){
\t\t\tif(\$(\"#\"+id).is(\":visible\")){
\t\t\t\t\$(\"#\"+id).hide(\"blind\", { direction: \"vertical\" }, 500);
\t\t\t}else{
\t\t\t\t\$(\"#\"+id).show(\"blind\", { direction: \"vertical\" }, 500);
\t\t\t}
\t\t}\t\t\t\t
\t</script>
";
    }

    // line 59
    public function block_jqueryDocumentReady($context, array $blocks = array())
    {
        // line 60
        echo "\t";
        $this->displayParentBlock("jqueryDocumentReady", $context, $blocks);
        echo "
\t\$( \"#slider-prix\" ).slider({
\t\t\trange: true,
\t\t\tmin: 0,
\t\t\tmax: 500,
\t\t\tvalues: [ 0, 0 ],
\t\t\tslide: function( event, ui ) {
\t\t\t\tdefineFourchettePrix( ui.values[ 0 ], ui.values[ 1 ]);
\t\t\t}
\t\t});
\t
\t\$( \"#slider-age\" ).slider({
\t\t\trange: \"min\",
\t\t\tvalue: 1,
\t\t\tmin: 1,
\t\t\tmax: 99,
\t\t\tslide: function( event, ui ) {
\t\t\t\tdefineAge( ui.value );
\t\t\t}
\t\t});
\t\t
\t\$( 'div[id^=\"slider-profil\"]' ).slider({
\t\t\trange: \"min\",
\t\t\tvalue: 1,
\t\t\tmin: 1,
\t\t\tmax: 99,
\t\t\tslide: function( event, ui ) {
\t\t\t\tdefineProfil( \$(this).attr(\"id\").substr(13), ui.value );
\t\t\t}
\t\t});
\t\$(\"#controleModifManuelle\").click(function () {
\t\t
\t\tif(\$(\"#modificationManuelle\").is(\":visible\")){
\t\t\t\$(\"#controleModifManuelle\").html('+ De Profils');
\t\t}else{
\t\t\t\$(\"#controleModifManuelle\").html('- De Profils');
\t\t}
\t\thideOrShow('modificationManuelle');
\t});
\t
\t\$( '.sliderProfil' ).hover(
\t\tfunction() {
\t\t\t\$(this).children('div').children('.iconeModifProfil').show();
\t\t},
\t\tfunction() {
\t\t\t\$(this).children('div').children('.iconeModifProfil').hide();
\t\t});

\t
\t
\thideOrShow('modificationManuelle');
\tdefineFourchettePrix(10, 70);
\tdefineAge(25);
\tdefineProfil(1,90);
\tdefineProfil(2,50);
\tdefineProfil(3,10);
\tdefineProfil(4,5);
\tdefineProfil(5,90);
\tdefineProfil(6,30);
\t\t\t
";
    }

    // line 121
    public function block_title($context, array $blocks = array())
    {
        // line 122
        echo "    ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Accueil
";
    }

    // line 128
    public function block_body($context, array $blocks = array())
    {
        // line 129
        echo "<section id=\"pageIndex\">
\t<div class=\"row\" >
\t\t<div class=\"bordureGrise\">
\t\t\t<div class=\"row\" >
\t\t\t\t<div class=\"span6\">
\t\t\t\t\t<h3>Question</h3>\t\t\t\t  
\t\t\t\t\t<h2>Desrious est-il roux? il faut garder en tête qu'une question peut etre longue !</h2>
\t\t\t\t\t<br/>
\t\t\t\t\t<div class=\"btn-group center\" style=\"text-align:center\">
\t\t\t\t\t\t<button class=\"btn btn-primary btn-large\">Oui</button>
\t\t\t\t\t\t<button class=\"btn btn-primary btn-large\">Non, la réponse aussi peut etre longue</button>
\t\t\t\t\t\t<button class=\"btn btn-primary btn-large\">Lol</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"span3\">
\t\t\t\t\t<h3>Filtre Articles</h3>
\t\t\t\t\t<br/>
\t\t\t\t\t<p>
\t\t\t\t\t\t<label>Prix : entre <span id=\"amountPrixMin\">25</span>&euro; et <span id=\"amountPrixMax\">30</span>&euro;</label>
\t\t\t\t\t\t<div id=\"slider-prix\"></div>
\t\t\t\t\t</p>
\t\t\t\t\t<p>
\t\t\t\t\t\t<label>Age <span id=\"amountAge\">25</span> ans</label>
\t\t\t\t\t\t<div id=\"slider-age\"></div>
\t\t\t\t\t</p>\t
\t\t\t\t\t<p>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"male\" /> H
\t\t\t\t\t\t\t<input type=\"radio\" name=\"sex\" value=\"female\" /> F
\t\t\t\t\t</p>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"span3\">
\t\t\t\t\t<h3>Profil actuel :<i class=\"icon-search icon-white\"></i></h3> 
\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t\t\tRoux <span id=\"amountProfil1\">25</span>%
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid sliderProfil\">
\t\t\t\t\t\t\t<div class=\"span9\">
\t\t\t\t\t\t\t\t<div id=\"slider-profil1\" ></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t<div style=\"display: none\" class=\"iconeModifProfil\" >
\t\t\t\t\t\t\t\t\t<i class=\"icon-pencil\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-remove\"></i> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t\t\tChiant <span id=\"amountProfil2\">25</span>%
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid sliderProfil\">
\t\t\t\t\t\t\t<div class=\"span9\">
\t\t\t\t\t\t\t\t<div id=\"slider-profil2\" ></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t<div style=\"display: none\" class=\"iconeModifProfil\" >
\t\t\t\t\t\t\t\t\t<i class=\"icon-pencil\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-remove\"></i> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t\t\tMuscl&eacute; <span id=\"amountProfil3\">25</span>%
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row-fluid sliderProfil\">
\t\t\t\t\t\t\t<div class=\"span9\">
\t\t\t\t\t\t\t\t<div id=\"slider-profil3\" ></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span3\">
\t\t\t\t\t\t\t\t<div style=\"display: none\" class=\"iconeModifProfil\" >
\t\t\t\t\t\t\t\t\t<i class=\"icon-pencil\"></i>
\t\t\t\t\t\t\t\t\t<i class=\"icon-remove\"></i> 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>

\t<div id=\"empty\" style=\"height: 5px;\">
\t</div>
\t<div class=\"row\">
\t\t<div class=\"bordureGrise\">
\t\t\t<div id=\"BoutonManuelleProfil\">
\t\t\t\t
\t\t
\t\t\t<table style=\"width: 100%;\"> 
\t\t\t\t<tbody>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"width: 720px;\">
\t\t\t\t\t\t\t<h4>Modification manuelle des profils</h4>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div id=\"icone\">
\t\t\t\t\t\t\t\t<i class=\"icon-arrow-down\" ></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<div id=\"icone\">
\t\t\t\t\t\t\t\t<div id=\"controleModifManuelle\" class=\"btn btn-primary btn-mini\">+ De Profils</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t\t
\t\t\t</div>
\t\t\t<div id=\"modificationManuelle\">
\t\t\t\t<p>
\t\t\t\t\t<label>Egoiste <span id=\"amountProfil4\">25</span>%</label>
\t\t\t\t\t<div id=\"slider-profil4\"></div>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label>Geek <span id=\"amountProfil5\">25</span>%</label>
\t\t\t\t\t<div id=\"slider-profil5\"></div>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<label>Beau <span id=\"amountProfil6\">25</span>%</label>
\t\t\t\t\t<div id=\"slider-profil6\"></div>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>\t
\t</div>
\t<div class=\"row\">
\t<div class=\"span10 offset1\">
      <h2>Resultats de recherche</h2>
      <p>Voici la super selection.</p>
      <ul id=\"carouselCateg\" class=\"thumbnails\">
\t  ";
        // line 266
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 267
            echo "        <li class=\"span2\">
\t\t\t<div class=\"thumbnail\">
\t\t\t\t<img src=\"http://placehold.it/160x120\" alt=\"\">
\t\t\t\t<div class=\"caption\">
\t\t\t\t  <h5>Thumbnail label</h5>
\t\t\t\t  <p>Le produit pour les roux, chiant et pas musclé</p>
\t\t\t\t  <p><a class=\"btn btn-primary\" href=\"#\">Voir les produits</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</li>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 278
        echo "     </ul>
    </div>
  </div>
  
  
  
  
  
  

<div class=\"row\">
  <div class=\"span10 hero-unit\">
    Level 1 of column
    <div class=\"row\">
      <div class=\"span3\">Level toto</div>
      <div class=\"span3\">Level asdasd</div>
    </div>
  </div>
</div>




<form class=\"well\">
  <label>Label name</label>
  <input type=\"text\" class=\"span3\" placeholder=\"Type something�\">
  <span class=\"help-inline\">Associated help text!</span>
  <label class=\"checkbox\">
    <input type=\"checkbox\"> Check me out
  </label>
  <button type=\"submit\" class=\"btn\">Submit</button>
</form>





<div class=\"row-fluid\">
  <div class=\"span12\">
    Level 1 of column
    <div class=\"row-fluid\">
      <div class=\"span6\">Level 2alan</div>
      <div class=\"span6\">Level 2 toto</div>
    </div>
  </div>
</div>




\t<div class=\"row\">
\t
\t <div class=\"span12\">\t 
\t\t<h3>toto</h3>
\t </div>
\t</div>
\t 

\t<div class=\"row\">
\t\t<div class=\"span12\">
\t\t  <h2>Dessine moi un cadeau</h2>
\t\t  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus nec mauris nibh, sed varius erat. Sed sed ante nibh. Sed laoreet condimentum dui, nec ullamcorper magna ullamcorper pretium. Ut sagittis congue risus, nec sollicitudin lacus malesuada sed. Nulla facilisi. Vestibulum semper, tellus vitae fringilla aliquet, quam magna laoreet elit, at feugiat ante lorem eu augue. Quisque lobortis accumsan accumsan. .
\t\t  </p>
\t\t</div>
\t</div>
\t
  
  
  
  

</html>
";
    }

    public function getTemplateName()
    {
        return "DMCMainBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
