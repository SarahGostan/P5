<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* accueil.twig */
class __TwigTemplate_c9b86f3a0208d35d456687f1e816b03d69112049d8042f73c2f9feb4e3e7c21d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("template.twig", "accueil.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Accueil";
    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        // line 9
        if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 10
            echo "


\t<h2>Mes parties récentes</h2>


";
        } else {
            // line 17
            echo "<p> Bienvenue sur l'Ecran du MJ !<br>

Créez des parties personnalisées pour vos séances, et plongez vos joueurs dans une ambiance plus réaliste grâce à une selection de <a href=\"\">sons d'ambiance</a>.<br />
Pas le temps de créez vos parties ? Essayez l'une de nos <a href=\"\">parties prédéfinies</a> à thèmes ! </p>
<button id=\"accountCreate\">CRÉER VOTRE COMPTE</button>
";
        }
        // line 23
        echo "

<div id=\"predefGames\">
\t<p>Ici, une liste des dernières games prédéfinies en exemple</p>
\t<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
  </ol>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img class=\"d-block w-100\" src=\"public/images/carousel_1.png\" alt=\"First slide\">
\t\t\t<a href='index.php'>
\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t<h5>Partie démo 1</h5>
\t\t\t\t\t<p>Bla bla bla</p>
\t\t\t\t</div>
\t\t\t</a>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block w-100\" src=\"public/images/carousel_2.png\" alt=\"Second slide\">
\t\t\t<a href='index.php'>
\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t<h5>Partie démo 2</h5>
\t\t\t\t\t<p>Bla bla bla</p>
\t\t\t\t</div>
\t\t\t</a>
    </div>
    <a href='index.php'>
\t\t<div class=\"carousel-item\">
      <img class=\"d-block w-100\" src=\"public/images/carousel_3.png\" alt=\"Third slide\">
\t\t\t<a href='index.php'>
\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t<h5>Partie démo 3</h5>
\t\t\t\t\t<p>Bla bla bla</p>
\t\t\t\t</div>
\t\t\t</a>
    </div>
\t\t<div class=\"carousel-item\">
\t\t\t<img class=\"d-block w-100\" src=\"public/images/carousel_2.png\" alt=\"Forth slide\">
\t\t\t<a href='index.php'>
\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t<h5>Partie démo 4</h5>
\t\t\t\t\t<p>Bla bla bla</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
</div>


<p>Besoin d'aide ? <a href=\"index.php?action=guide\">Suivez le guide</a></p>
</div>

";
    }

    public function getTemplateName()
    {
        return "accueil.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  66 => 17,  57 => 10,  55 => 9,  52 => 8,  47 => 5,  41 => 2,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'template.twig' %}
{% block title %}Accueil{% endblock %}


{% block header %}
{% endblock %}

{% block content %}
{% if id is not null %}



\t<h2>Mes parties récentes</h2>


{% else %}
<p> Bienvenue sur l'Ecran du MJ !<br>

Créez des parties personnalisées pour vos séances, et plongez vos joueurs dans une ambiance plus réaliste grâce à une selection de <a href=\"\">sons d'ambiance</a>.<br />
Pas le temps de créez vos parties ? Essayez l'une de nos <a href=\"\">parties prédéfinies</a> à thèmes ! </p>
<button id=\"accountCreate\">CRÉER VOTRE COMPTE</button>
{% endif %}


<div id=\"predefGames\">
\t<p>Ici, une liste des dernières games prédéfinies en exemple</p>
\t<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
    <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
\t\t<li data-target=\"#carouselExampleIndicators\" data-slide-to=\"3\"></li>
  </ol>
  <div class=\"carousel-inner\">
    <div class=\"carousel-item active\">
      <img class=\"d-block w-100\" src=\"public/images/carousel_1.png\" alt=\"First slide\">
\t\t\t<a href='index.php'>
\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t<h5>Partie démo 1</h5>
\t\t\t\t\t<p>Bla bla bla</p>
\t\t\t\t</div>
\t\t\t</a>
    </div>
    <div class=\"carousel-item\">
      <img class=\"d-block w-100\" src=\"public/images/carousel_2.png\" alt=\"Second slide\">
\t\t\t<a href='index.php'>
\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t<h5>Partie démo 2</h5>
\t\t\t\t\t<p>Bla bla bla</p>
\t\t\t\t</div>
\t\t\t</a>
    </div>
    <a href='index.php'>
\t\t<div class=\"carousel-item\">
      <img class=\"d-block w-100\" src=\"public/images/carousel_3.png\" alt=\"Third slide\">
\t\t\t<a href='index.php'>
\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t<h5>Partie démo 3</h5>
\t\t\t\t\t<p>Bla bla bla</p>
\t\t\t\t</div>
\t\t\t</a>
    </div>
\t\t<div class=\"carousel-item\">
\t\t\t<img class=\"d-block w-100\" src=\"public/images/carousel_2.png\" alt=\"Forth slide\">
\t\t\t<a href='index.php'>
\t\t\t\t<div class=\"carousel-caption d-none d-md-block\">
\t\t\t\t\t<h5>Partie démo 4</h5>
\t\t\t\t\t<p>Bla bla bla</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
  </div>
  <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Previous</span>
  </a>
  <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
    <span class=\"sr-only\">Next</span>
  </a>
</div>
</div>


<p>Besoin d'aide ? <a href=\"index.php?action=guide\">Suivez le guide</a></p>
</div>

{% endblock %}
", "accueil.twig", "C:\\wamp64\\www\\appliJDR\\src\\view\\accueil.twig");
    }
}
