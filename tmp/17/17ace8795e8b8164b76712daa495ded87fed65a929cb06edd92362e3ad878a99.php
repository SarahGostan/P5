<?php

/* accueil.twig */
class __TwigTemplate_76102468d72f319690d2b30d12e56ec9603896f330a44021b10d30fa3f7af9d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "accueil.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Accueil";
    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
    }

    // line 8
    public function block_content($context, array $blocks = array())
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
        return array (  63 => 23,  55 => 17,  46 => 10,  44 => 9,  41 => 8,  36 => 5,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.twig' %}
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
