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

/* inscription.twig */
class __TwigTemplate_0f3312745d31520858d624fc45f82b28413d932f894d1055a5a477fec634cf71 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("template.twig", "inscription.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Inscription";
    }

    // line 4
    public function block_script($context, array $blocks = [])
    {
    }

    // line 6
    public function block_header($context, array $blocks = [])
    {
        echo "Inscription";
    }

    // line 8
    public function block_content($context, array $blocks = [])
    {
        // line 9
        echo "
<form id=\"formLogin\" action = \"index.php?action=signup\" method=\"post\" >
\t\t<h2>Inscription</h2>
\t\t<label for=\"mail\">Email</label>
\t\t<input type=\"email\" name=\"mail\" id=\"mail\" /><br />
\t\t<label for=\"password\">Mot de passe</label>
\t\t<input type=\"password\" name=\"password\" id=\"password\" /><br />
\t\t<input type=\"submit\" value = \"Envoyer\"/>
\t</form>

";
    }

    public function getTemplateName()
    {
        return "inscription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  59 => 8,  53 => 6,  48 => 4,  42 => 2,  32 => 1,);
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
{% block title %}Inscription{% endblock %}

{% block script %}{% endblock %}

{% block header %}Inscription{% endblock %}

{% block content %}

<form id=\"formLogin\" action = \"index.php?action=signup\" method=\"post\" >
\t\t<h2>Inscription</h2>
\t\t<label for=\"mail\">Email</label>
\t\t<input type=\"email\" name=\"mail\" id=\"mail\" /><br />
\t\t<label for=\"password\">Mot de passe</label>
\t\t<input type=\"password\" name=\"password\" id=\"password\" /><br />
\t\t<input type=\"submit\" value = \"Envoyer\"/>
\t</form>

{% endblock %}", "inscription.twig", "C:\\wamp64\\www\\appliJDR\\src\\view\\inscription.twig");
    }
}
