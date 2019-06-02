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

/* getStarted.twig */
class __TwigTemplate_29a3b3eef8672ed22667f3b61631124af32089b8ff0949720e7c9dcf4d56d214 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template.twig", "getStarted.twig", 1);
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
        echo "<p>Bienvenue sur l'écran du MJ !<br />
  Cette application est destinée à aider les Maitres de Jeu à instaurer une ambiance prenante durant leurs séances de Jeu de Rôle. En cliquant sur <a href=\"http://localhost/appliJDR/index.php?action=jouer\">\"Mes parties\"</a>, vous pourrez préparer votre prochaine séance<br />
Aide :<br />
<a href=\"#\">Gérer les sons favoris</a></p>
<a href=\"#\">Créer une partie</a></p>
<a href=\"#\">Ajouter des bruitages à une partie</a>
<a href=\"#\">Ajouter des musiques d'ambiance à une partie</a></p>
<a href=\"#\">Lancer des dés</a></p>
<a href=\"#\">Gérer mon compte</a></p>
<a href=\"#\">FAQ</a></p>

";
    }

    public function getTemplateName()
    {
        return "getStarted.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  52 => 8,  47 => 5,  41 => 2,  31 => 1,);
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
<p>Bienvenue sur l'écran du MJ !<br />
  Cette application est destinée à aider les Maitres de Jeu à instaurer une ambiance prenante durant leurs séances de Jeu de Rôle. En cliquant sur <a href=\"http://localhost/appliJDR/index.php?action=jouer\">\"Mes parties\"</a>, vous pourrez préparer votre prochaine séance<br />
Aide :<br />
<a href=\"#\">Gérer les sons favoris</a></p>
<a href=\"#\">Créer une partie</a></p>
<a href=\"#\">Ajouter des bruitages à une partie</a>
<a href=\"#\">Ajouter des musiques d'ambiance à une partie</a></p>
<a href=\"#\">Lancer des dés</a></p>
<a href=\"#\">Gérer mon compte</a></p>
<a href=\"#\">FAQ</a></p>

{% endblock %}
", "getStarted.twig", "C:\\wamp64\\www\\appliJDR\\src\\view\\getStarted.twig");
    }
}
