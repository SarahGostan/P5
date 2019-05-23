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
class __TwigTemplate_29970159c41b085944c904ade4892512c0be21388163e10d6ecdb3ae04ad8e1d extends \Twig\Template
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
</div>
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
</div>
</div>

{% endblock %}
", "accueil.twig", "C:\\wamp64\\www\\appliJDR\\view\\accueil.twig");
    }
}
