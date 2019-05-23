<?php

/* erreur.twig */
class __TwigTemplate_6ef68d4db28f83884f3c6126e0c39f4ca752563f57c64a92a3132bf0f4ca1f9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "erreur.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        echo "Page introuvable";
    }

    // line 3
    public function block_content($context, array $blocks = array())
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
        return array (  38 => 4,  35 => 3,  29 => 2,  11 => 1,);
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
{% block title %}Page introuvable{% endblock %}
{% block content %}
{{ errorMessage|raw }}
<p>On dirait que vous vous êtes perdus en chemin... <a href=\"index.php\">Revenez plutôt à l'index !</a></p>;

{% endblock %}

", "erreur.twig", "C:\\wamp64\\www\\appliJDR\\view\\erreur.twig");
    }
}
