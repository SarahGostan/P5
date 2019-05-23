<?php

/* songsbykeyword.twig */
class __TwigTemplate_0f222a2788180d11305383030fd6686a8b6c8bc5e3977ecd53c02d1b0fe0a84b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "songsbykeyword.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'script_bottom' => array($this, 'block_script_bottom'),
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
        echo "Interface de partie";
    }

    // line 3
    public function block_script($context, array $blocks = array())
    {
        echo "<script src=\"public/js/Songs.js\"></script>";
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "name", array(), "array"), "html", null, true);
            echo "</h5>
\t\t\t\t\t";
            // line 22
            if (twig_in_filter($this->getAttribute($context["allSongs"], "id", array(), "array"), (isset($context["favSongs"]) ? $context["favSongs"] : null))) {
                // line 23
                echo "\t\t\t\t\t\t";
                if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                    // line 24
                    echo "\t\t\t\t\t\t\t<button class=\"removeSong\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "id", array(), "array"), "html", null, true);
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
                    echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "id", array(), "array"), "html", null, true);
                    echo "\"></button></span>
\t\t\t\t\t  ";
                }
                // line 30
                echo "\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t<audio src=\"public/songs/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "access", array(), "array"), "html", null, true);
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
    public function block_script_bottom($context, array $blocks = array())
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
        return array (  128 => 45,  125 => 44,  118 => 36,  106 => 31,  103 => 30,  97 => 28,  94 => 27,  91 => 26,  85 => 24,  82 => 23,  80 => 22,  75 => 21,  71 => 20,  64 => 16,  52 => 6,  49 => 5,  44 => 4,  38 => 3,  32 => 2,  11 => 1,);
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
", "songsbykeyword.twig", "C:\\wamp64\\www\\appliJDR\\view\\songsbykeyword.twig");
    }
}
