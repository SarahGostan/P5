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

/* login.twig */
class __TwigTemplate_b82769005016e1456edc0e58296c80135d1591dea38c7ecea2ce9fb5bfc031d7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'script' => [$this, 'block_script'],
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
        $this->parent = $this->loadTemplate("template.twig", "login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Identifiez vous";
    }

    // line 4
    public function block_script($context, array $blocks = [])
    {
    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        // line 8
        echo "<div id=\"loginBox\">
\t<form id=\"formLoginPage\" action =\"index.php?action=authenticize\" method=\"post\" >
\t\t\t<h2>Identification</h2>
\t\t\t<label for=\"identifiantPage\">Identifiant</label>
\t\t\t<input type=\"text\" name=\"identifiantPage\" id=\"identifiantPage\" /><br />
\t\t\t<label for=\"passwordLogin\">Mot de passe</label>
\t\t\t<input type=\"password\" name=\"passwordLogin\" id=\"passwordLogin\" /><br />
\t\t\t<input type=\"submit\" value = \"Envoyer\"/>
\t\t</form>
</div>

<div id=\"resetPasswordBox\">
\t<button class=\"gestionButton\" data-form=\"changePasswordForm\" id=\"resetPasswordButton\">Réinitialiser le mot de passe<span class=\"caret\"><i class=\"fas fa-angle-down\"></i></span></button>
\t<form id=\"changePasswordForm\" class=\"hide\" action=\"index.php?action=resetpassword\" method=\"post\" >
\t\t\t<h2>Réintialiser le mot de passe</h2>
\t\t\t<label for=\"mailPassChange\">Email</label>
\t\t\t<input type=\"email\" name=\"mailPassChange\" id=\"mailPassChange\" required /><br />
\t\t\t<input type=\"submit\" value = \"Envoyer\"/>
\t</form>
</div>

<div id=\"inscriptionBox\">
\t<button class=\"gestionButton\" data-form=\"formSignUp\" id=\"inscriptionButton\">Inscription<span class=\"caret\"><i class=\"fas fa-angle-down\"></i></span></button>
\t<form id=\"formSignUp\" action=\"index.php?action=signup\" method=\"post\" class='hide'>
\t\t\t<h2>Inscription</h2>
\t\t\t<label for=\"mailInscription\">Email</label>
\t\t\t<input type=\"email\" name=\"mailInscription\" id=\"mailInscription\" required /><br />
\t\t\t<label for=\"passwordInscription\">Mot de passe</label>
\t\t\t<input type=\"password\" name=\"passwordInscription\" id=\"passwordInscription\" required /><br />
\t\t\t<input type=\"submit\" value = \"Envoyer\"/>
\t\t</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 8,  52 => 7,  47 => 4,  41 => 2,  31 => 1,);
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
{% block title %}Identifiez vous{% endblock %}

{% block script %}{% endblock %}


{% block content %}
<div id=\"loginBox\">
\t<form id=\"formLoginPage\" action =\"index.php?action=authenticize\" method=\"post\" >
\t\t\t<h2>Identification</h2>
\t\t\t<label for=\"identifiantPage\">Identifiant</label>
\t\t\t<input type=\"text\" name=\"identifiantPage\" id=\"identifiantPage\" /><br />
\t\t\t<label for=\"passwordLogin\">Mot de passe</label>
\t\t\t<input type=\"password\" name=\"passwordLogin\" id=\"passwordLogin\" /><br />
\t\t\t<input type=\"submit\" value = \"Envoyer\"/>
\t\t</form>
</div>

<div id=\"resetPasswordBox\">
\t<button class=\"gestionButton\" data-form=\"changePasswordForm\" id=\"resetPasswordButton\">Réinitialiser le mot de passe<span class=\"caret\"><i class=\"fas fa-angle-down\"></i></span></button>
\t<form id=\"changePasswordForm\" class=\"hide\" action=\"index.php?action=resetpassword\" method=\"post\" >
\t\t\t<h2>Réintialiser le mot de passe</h2>
\t\t\t<label for=\"mailPassChange\">Email</label>
\t\t\t<input type=\"email\" name=\"mailPassChange\" id=\"mailPassChange\" required /><br />
\t\t\t<input type=\"submit\" value = \"Envoyer\"/>
\t</form>
</div>

<div id=\"inscriptionBox\">
\t<button class=\"gestionButton\" data-form=\"formSignUp\" id=\"inscriptionButton\">Inscription<span class=\"caret\"><i class=\"fas fa-angle-down\"></i></span></button>
\t<form id=\"formSignUp\" action=\"index.php?action=signup\" method=\"post\" class='hide'>
\t\t\t<h2>Inscription</h2>
\t\t\t<label for=\"mailInscription\">Email</label>
\t\t\t<input type=\"email\" name=\"mailInscription\" id=\"mailInscription\" required /><br />
\t\t\t<label for=\"passwordInscription\">Mot de passe</label>
\t\t\t<input type=\"password\" name=\"passwordInscription\" id=\"passwordInscription\" required /><br />
\t\t\t<input type=\"submit\" value = \"Envoyer\"/>
\t\t</form>
</div>

{% endblock %}
", "login.twig", "C:\\wamp64\\www\\appliJDR\\src\\view\\login.twig");
    }
}
