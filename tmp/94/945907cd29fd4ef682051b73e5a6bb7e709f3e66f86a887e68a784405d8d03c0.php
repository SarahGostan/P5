<?php

/* login.twig */
class __TwigTemplate_e0b8c5426d018b0948c584101d1e0daabdde165132fa713816d0b18d31db109c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "login.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
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
        echo "Identifiez vous";
    }

    // line 4
    public function block_script($context, array $blocks = array())
    {
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        echo "Connexion";
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "
<form id=\"formLogin\" action = \"index.php?action=authenticize\" method=\"post\" >
\t\t<h2>Identification</h2>
\t\t<label for=\"identifiant\">Identifiant</label>
\t\t<input type=\"text\" name=\"identifiant\" id=\"identifiant\" /><br />
\t\t<label for=\"password\">Mot de passe</label>
\t\t<input type=\"password\" name=\"password\" id=\"password\" /><br />
\t\t<input type=\"submit\" value = \"Envoyer\"/>
\t</form>
<a href=\"?action=inscription\">S'inscrire</a>
<a href=\"?action=sendpassword\">Mot de passe oublié<a>

<form id=\"changePassword\" action = \"index.php?action=resetpassword\" method=\"post\" >
\t\t<h2>Réintialiser le mot de passe</h2>
\t\t<label for=\"mail\">Email</label>
\t\t<input type=\"email\" name=\"mail\" id=\"mail\" required /><br />
\t\t<input type=\"submit\" value = \"Envoyer\"/>
\t</form>

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
        return array (  51 => 9,  48 => 8,  42 => 6,  37 => 4,  31 => 2,  11 => 1,);
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
{% block title %}Identifiez vous{% endblock %}

{% block script %}{% endblock %}

{% block header %}Connexion{% endblock %}

{% block content %}

<form id=\"formLogin\" action = \"index.php?action=authenticize\" method=\"post\" >
\t\t<h2>Identification</h2>
\t\t<label for=\"identifiant\">Identifiant</label>
\t\t<input type=\"text\" name=\"identifiant\" id=\"identifiant\" /><br />
\t\t<label for=\"password\">Mot de passe</label>
\t\t<input type=\"password\" name=\"password\" id=\"password\" /><br />
\t\t<input type=\"submit\" value = \"Envoyer\"/>
\t</form>
<a href=\"?action=inscription\">S'inscrire</a>
<a href=\"?action=sendpassword\">Mot de passe oublié<a>

<form id=\"changePassword\" action = \"index.php?action=resetpassword\" method=\"post\" >
\t\t<h2>Réintialiser le mot de passe</h2>
\t\t<label for=\"mail\">Email</label>
\t\t<input type=\"email\" name=\"mail\" id=\"mail\" required /><br />
\t\t<input type=\"submit\" value = \"Envoyer\"/>
\t</form>

{% endblock %}", "login.twig", "C:\\wamp64\\www\\appliJDR\\view\\login.twig");
    }
}
