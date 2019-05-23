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

/* account.twig */
class __TwigTemplate_e2fae2d111f4a7524d06615ea68adf93a601d7bca118607e912ce1aa0ec2011c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'script' => [$this, 'block_script'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'script_bottom' => [$this, 'block_script_bottom'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("template.twig", "account.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Interface de partie";
    }

    // line 3
    public function block_script($context, array $blocks = [])
    {
        echo "<script src=\"public/js/Songs.js\"></script>";
    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        echo "Ici, plusieurs onglets permettront de passer plus facilement d'une fonctionnalité à l'autre";
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "
<div id=\"accountChange\">
\t<h2>Modifier votre mot de passe :</h2>
\t<form method=\"post\" action=\"?action=accountChangePassword\" id=\"changePassword\">
\t<label for=\"actualPassword\">Mot de passe actuel</label>
\t<input type=\"text\" name=\"actualPassword\" id=\"actualPassword\" /><br />
\t<label for=\"newPassword\">Nouveau mot de passe</label>
\t<input type=\"text\" name=\"newPassword\" id=\"newPassword\" /><br />
\t<label for=\"confirmPassword\">Confirmer le mot de passe</label>
\t<input type=\"text\" name=\"confirmPassword\" id=\"confirmPassword\" /><br />
\t<input type=\"submit\" value=\"Confirmer\">
\t</form>
</div>

";
    }

    // line 23
    public function block_script_bottom($context, array $blocks = [])
    {
        // line 24
        echo "<script>var AllSongs = new AllSongs();</script>
";
    }

    public function getTemplateName()
    {
        return "account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 24,  82 => 23,  64 => 6,  61 => 5,  55 => 4,  49 => 3,  43 => 2,  33 => 1,);
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
{% block title %}Interface de partie{% endblock %}
{% block script %}<script src=\"public/js/Songs.js\"></script>{% endblock %}
{% block header %}Ici, plusieurs onglets permettront de passer plus facilement d'une fonctionnalité à l'autre{% endblock %}
{% block content %}

<div id=\"accountChange\">
\t<h2>Modifier votre mot de passe :</h2>
\t<form method=\"post\" action=\"?action=accountChangePassword\" id=\"changePassword\">
\t<label for=\"actualPassword\">Mot de passe actuel</label>
\t<input type=\"text\" name=\"actualPassword\" id=\"actualPassword\" /><br />
\t<label for=\"newPassword\">Nouveau mot de passe</label>
\t<input type=\"text\" name=\"newPassword\" id=\"newPassword\" /><br />
\t<label for=\"confirmPassword\">Confirmer le mot de passe</label>
\t<input type=\"text\" name=\"confirmPassword\" id=\"confirmPassword\" /><br />
\t<input type=\"submit\" value=\"Confirmer\">
\t</form>
</div>

{% endblock %}


{% block script_bottom %}
<script>var AllSongs = new AllSongs();</script>
{% endblock %}
", "account.twig", "C:\\wamp64\\www\\appliJDR\\src\\view\\account.twig");
    }
}
