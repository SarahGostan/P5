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

/* allsongs.twig */
class __TwigTemplate_c8b737dbeaea47014e97b479cef6f92a3f5cfc78693c5abfb41a2f8654ea8c6f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template.twig", "allsongs.twig", 1);
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
\t\t<label for=\"songTerm\">Rechercher un son</label>
\t\t<input type=text name=\"songTerm\" id=\"songTerm\">
\t\t<input type=\"submit\" id=\"searchASong\" value=\"Rechercher\">
\t\t<div id=\"resultSongSearch\"></div>



\t\t<div id=\"thematics\">
\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["thematics"]);
        foreach ($context['_seq'] as $context["_key"] => $context["thematics"]) {
            // line 17
            echo "\t\t<a href=\"\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thematics"], "name", [], "array"), "html", null, true);
            echo "</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thematics'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t</div>

<div id=\"allSongs\">


\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["allSongs"]);
        foreach ($context['_seq'] as $context["_key"] => $context["allSongs"]) {
            // line 25
            echo "
\t<div class=\"songs\"><span class=\"songAdd\"><h5>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_name", [], "array"), "html", null, true);
            echo "</h5>
\t\t";
            // line 27
            if (twig_in_filter($this->getAttribute($context["allSongs"], "song_id", [], "array"), (isset($context["favSongs"]) ? $context["favSongs"] : null))) {
                // line 28
                echo "\t\t\t";
                if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                    // line 29
                    echo "\t\t\t\t<button class=\"removeSong\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_id", [], "array"), "html", null, true);
                    echo "\"></button></span>
\t\t\t";
                }
                // line 31
                echo "\t\t";
            } else {
                // line 32
                echo "\t\t\t";
                if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                    // line 33
                    echo "\t\t\t\t<button class=\"addSong\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_id", [], "array"), "html", null, true);
                    echo "\"></button></span>
\t\t\t";
                }
                // line 35
                echo "\t\t";
            }
            // line 36
            echo "\t\t<audio src=\"public/songs/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_access", [], "array"), "html", null, true);
            echo "\" controls></audio>
\t\t</div>





";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allSongs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "






\t\t\t<div class=\"songsInTheme\">
\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["allSongs"]);
        foreach ($context['_seq'] as $context["_key"] => $context["allSongs"]) {
            // line 53
            echo "\t\t\t";
            if (($this->getAttribute($context["allSongs"], "song_principal_theme", [], "array") == $this->getAttribute((isset($context["thematics"]) ? $context["thematics"] : null), "thematic_id", [], "array"))) {
                // line 54
                echo "\t\t\t\t<div class=\"songs\"><span class=\"songAdd\"><h5>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_name", [], "array"), "html", null, true);
                echo "</h5>
\t\t\t\t\t";
                // line 55
                if (twig_in_filter($this->getAttribute($context["allSongs"], "song_id", [], "array"), (isset($context["favSongs"]) ? $context["favSongs"] : null))) {
                    // line 56
                    echo "\t\t\t\t\t\t";
                    if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                        // line 57
                        echo "\t\t\t\t\t\t\t<button class=\"removeSong\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_id", [], "array"), "html", null, true);
                        echo "\"></button></span>
\t\t\t\t\t\t";
                    }
                    // line 59
                    echo "\t\t\t\t\t";
                } else {
                    // line 60
                    echo "\t\t\t\t\t\t";
                    if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                        // line 61
                        echo "\t\t\t\t\t\t\t<button class=\"addSong\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_id", [], "array"), "html", null, true);
                        echo "\"></button></span>
\t\t\t\t\t\t";
                    }
                    // line 63
                    echo "\t\t\t\t\t";
                }
                // line 64
                echo "\t\t\t\t\t<audio src=\"public/songs/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_access", [], "array"), "html", null, true);
                echo "\" controls></audio>
\t\t\t\t\t</div>
\t\t\t";
            }
            // line 67
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allSongs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "</div>
</div>



";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pageNumber"]) ? $context["pageNumber"] : null)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 75
            if (($context["i"] == (isset($context["page"]) ? $context["page"] : null))) {
                // line 76
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
";
            } else {
                // line 78
                echo "<a href=\"?action=allsongs&page=";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "</div>

";
    }

    // line 88
    public function block_script_bottom($context, array $blocks = [])
    {
        // line 89
        echo "
";
    }

    public function getTemplateName()
    {
        return "allsongs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 89,  245 => 88,  239 => 81,  227 => 78,  222 => 76,  220 => 75,  216 => 74,  209 => 69,  202 => 67,  195 => 64,  192 => 63,  186 => 61,  183 => 60,  180 => 59,  174 => 57,  171 => 56,  169 => 55,  164 => 54,  161 => 53,  157 => 52,  147 => 44,  132 => 36,  129 => 35,  123 => 33,  120 => 32,  117 => 31,  111 => 29,  108 => 28,  106 => 27,  102 => 26,  99 => 25,  95 => 24,  88 => 19,  79 => 17,  75 => 16,  63 => 6,  60 => 5,  55 => 4,  49 => 3,  43 => 2,  33 => 1,);
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
\t\t<label for=\"songTerm\">Rechercher un son</label>
\t\t<input type=text name=\"songTerm\" id=\"songTerm\">
\t\t<input type=\"submit\" id=\"searchASong\" value=\"Rechercher\">
\t\t<div id=\"resultSongSearch\"></div>



\t\t<div id=\"thematics\">
\t\t{% for thematics in thematics %}
\t\t<a href=\"\">{{ thematics['name']}}</a>
\t\t{% endfor %}
\t\t</div>

<div id=\"allSongs\">


\t{% for allSongs in allSongs %}

\t<div class=\"songs\"><span class=\"songAdd\"><h5>{{ allSongs['song_name'] }}</h5>
\t\t{% if allSongs['song_id'] in favSongs %}
\t\t\t{% if id is not null %}
\t\t\t\t<button class=\"removeSong\" id=\"{{ allSongs['song_id'] }}\"></button></span>
\t\t\t{% endif %}
\t\t{% else %}
\t\t\t{% if id is not null %}
\t\t\t\t<button class=\"addSong\" id=\"{{ allSongs['song_id'] }}\"></button></span>
\t\t\t{% endif %}
\t\t{% endif %}
\t\t<audio src=\"public/songs/{{ allSongs['song_access'] }}\" controls></audio>
\t\t</div>





{% endfor %}







\t\t\t<div class=\"songsInTheme\">
\t\t{% for allSongs in allSongs %}
\t\t\t{% if allSongs['song_principal_theme'] == thematics['thematic_id'] %}
\t\t\t\t<div class=\"songs\"><span class=\"songAdd\"><h5>{{ allSongs['song_name'] }}</h5>
\t\t\t\t\t{% if allSongs['song_id'] in favSongs %}
\t\t\t\t\t\t{% if id is not null %}
\t\t\t\t\t\t\t<button class=\"removeSong\" id=\"{{ allSongs['song_id'] }}\"></button></span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% else %}
\t\t\t\t\t\t{% if id is not null %}
\t\t\t\t\t\t\t<button class=\"addSong\" id=\"{{ allSongs['song_id'] }}\"></button></span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t{% endif %}
\t\t\t\t\t<audio src=\"public/songs/{{ allSongs['song_access'] }}\" controls></audio>
\t\t\t\t\t</div>
\t\t\t{% endif %}

{% endfor %}
</div>
</div>



{% for i in 1..pageNumber %}
{% if i == page %}
{{ i }}
{% else %}
<a href=\"?action=allsongs&page={{ i }}\">{{ i}}</a>
{% endif %}
{% endfor %}
</div>

{% endblock %}




{% block script_bottom %}

{% endblock %}
", "allsongs.twig", "C:\\wamp64\\www\\appliJDR\\view\\allsongs.twig");
    }
}
