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

/* erreur.twig */
class __TwigTemplate_2dd0567e3ef99afbf955604bd4738819d40ac3716625c3f852d2e2c512c75b58 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $this->parent = $this->loadTemplate("template.twig", "erreur.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Page introuvable";
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo (isset($context["errorMessage"]) ? $context["errorMessage"] : null);
        echo "
<p>On dirait que vous vous êtes perdus en chemin... <a href=\"index.php\">Revenez plutôt à l'index !</a></p>;

";
    }

    public function getTemplateName()
    {
        return "erreur.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  46 => 3,  40 => 2,  30 => 1,);
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
{% block title %}Page introuvable{% endblock %}
{% block content %}
{{ errorMessage|raw }}
<p>On dirait que vous vous êtes perdus en chemin... <a href=\"index.php\">Revenez plutôt à l'index !</a></p>;

{% endblock %}

", "erreur.twig", "C:\\wamp64\\www\\appliJDR\\src\\view\\erreur.twig");
    }
}
