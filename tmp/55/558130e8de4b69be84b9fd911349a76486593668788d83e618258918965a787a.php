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

/* songsbykeyword.twig */
class __TwigTemplate_b82683cfcc94f7fa37bf88ec695edcb2992ab4063e6aedb7c41dbe84ba01d6a4 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template.twig", "songsbykeyword.twig", 1);
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
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        // line 6
        echo "

<form action=\"?action=sons\" id='songSearchForm' method=\"post\">
\t\t<label for=\"term\">Rechercher un son</label>
\t\t<input type=text name=\"term\" id=\"term\">
\t\t<input type=\"submit\" id=\"searchASong\" value=\"Rechercher\">
\t\t<div id=\"resultSongSearch\"></div>



<p>Ces résultats peuvent être en proche de votre recherche \"<b>";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["keyword"]) ? $context["keyword"] : null), "html", null, true);
        echo "</b>\"</p>
<div id=\"allSongs\">


\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["allSongs"]);
        foreach ($context['_seq'] as $context["_key"] => $context["allSongs"]) {
            // line 21
            echo "\t\t\t\t<div class=\"songs\"><span class=\"songAdd\"><h5>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "name", [], "array"), "html", null, true);
            echo "</h5>
\t\t\t\t\t";
            // line 22
            if (twig_in_filter($this->getAttribute($context["allSongs"], "id", [], "array"), (isset($context["favSongs"]) ? $context["favSongs"] : null))) {
                // line 23
                echo "\t\t\t\t\t\t";
                if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                    // line 24
                    echo "\t\t\t\t\t\t\t<button class=\"removeSong\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "id", [], "array"), "html", null, true);
                    echo "\"></button></span>
\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t";
            } else {
                // line 27
                echo "\t\t\t\t\t\t";
                if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                    // line 28
                    echo "\t\t\t\t\t\t\t<button class=\"addSong\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "id", [], "array"), "html", null, true);
                    echo "\"></button></span>
\t\t\t\t\t  ";
                }
                // line 30
                echo "\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t<audio src=\"public/songs/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "access", [], "array"), "html", null, true);
            echo "\" controls></audio>
\t\t\t\t\t</div>


";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allSongs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</div>


";
    }

    // line 44
    public function block_script_bottom($context, array $blocks = [])
    {
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "songsbykeyword.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 45,  136 => 44,  129 => 36,  117 => 31,  114 => 30,  108 => 28,  105 => 27,  102 => 26,  96 => 24,  93 => 23,  91 => 22,  86 => 21,  82 => 20,  75 => 16,  63 => 6,  60 => 5,  55 => 4,  49 => 3,  43 => 2,  33 => 1,);
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
{% block header %}{% endblock %}
{% block content %}


<form action=\"?action=sons\" id='songSearchForm' method=\"post\">
\t\t<label for=\"term\">Rechercher un son</label>
\t\t<input type=text name=\"term\" id=\"term\">
\t\t<input type=\"submit\" id=\"searchASong\" value=\"Rechercher\">
\t\t<div id=\"resultSongSearch\"></div>



<p>Ces résultats peuvent être en proche de votre recherche \"<b>{{ keyword }}</b>\"</p>
<div id=\"allSongs\">


\t\t{% for allSongs in allSongs %}
\t\t\t\t<div class=\"songs\"><span class=\"songAdd\"><h5>{{ allSongs['name'] }}</h5>
\t\t\t\t\t{% if allSongs['id'] in favSongs %}
\t\t\t\t\t\t{% if id is not null %}
\t\t\t\t\t\t\t<button class=\"removeSong\" id=\"{{ allSongs['id'] }}\"></button></span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% if id is not null %}
\t\t\t\t\t\t\t<button class=\"addSong\" id=\"{{ allSongs['id'] }}\"></button></span>
\t\t\t\t\t  {% endif %}
\t\t\t\t{% endif %}
\t\t\t\t\t<audio src=\"public/songs/{{ allSongs['access'] }}\" controls></audio>
\t\t\t\t\t</div>


{% endfor %}
</div>


{% endblock %}




{% block script_bottom %}

{% endblock %}
", "songsbykeyword.twig", "C:\\wamp64\\www\\appliJDR\\src\\view\\songsbykeyword.twig");
    }
}
