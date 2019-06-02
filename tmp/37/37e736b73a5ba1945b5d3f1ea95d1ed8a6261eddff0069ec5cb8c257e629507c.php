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
class __TwigTemplate_625da49f841d05d51085002396e3796ee82ab5433a43c4af6cb940d994dacbff extends \Twig\Template
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
        echo "<script src=\"./public/js/Songs.js\"></script>";
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
<div id=\"songSearch\">
\t<form action=\"?action=allsongs\" id='songSearchForm' method=\"post\">
\t\t\t<label for=\"songTerm\">Rechercher un son</label>
\t\t\t<input type=text name=\"songTerm\" id=\"songTerm\" required>
\t\t\t<input type=\"submit\" id=\"searchASong\" value=\"Rechercher\">
\t</form>

\t<div id=\"resultSongSearch\" class='songs'></div>
</div>

\t\t<div id=\"thematics\">
\t\t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["thematics"]);
        foreach ($context['_seq'] as $context["_key"] => $context["thematics"]) {
            // line 19
            echo "\t\t<a href=\"?action=allsongs&songTerm=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thematics"], "name", [], "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thematics"], "name", [], "array"), "html", null, true);
            echo "</a>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thematics'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</div>

<div id=\"allSongs\">


\t";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["allSongs"]);
        foreach ($context['_seq'] as $context["_key"] => $context["allSongs"]) {
            // line 27
            echo "
\t<div class=\"songs\"><div class=\"songAdd\"><h5>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_name", [], "array"), "html", null, true);
            echo "</h5>
\t\t";
            // line 29
            if (twig_in_filter($this->getAttribute($context["allSongs"], "song_id", [], "array"), (isset($context["favSongs"]) ? $context["favSongs"] : null))) {
                // line 30
                echo "\t\t\t";
                if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                    // line 31
                    echo "\t\t\t\t<button class=\"removeSong\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_id", [], "array"), "html", null, true);
                    echo "\"></button></div>
\t\t\t";
                }
                // line 33
                echo "\t\t";
            } else {
                // line 34
                echo "\t\t\t";
                if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                    // line 35
                    echo "\t\t\t\t<button class=\"addSong\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_id", [], "array"), "html", null, true);
                    echo "\"></button></div>
\t\t\t";
                }
                // line 37
                echo "\t\t";
            }
            // line 38
            echo "\t\t<audio src=\"public/songs/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_access", [], "array"), "html", null, true);
            echo "\" controls></audio>
\t\t</div>





";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allSongs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "






\t\t\t<div class=\"songsInTheme\">
\t\t";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["allSongs"]);
        foreach ($context['_seq'] as $context["_key"] => $context["allSongs"]) {
            // line 55
            echo "\t\t\t";
            if (($this->getAttribute($context["allSongs"], "song_principal_theme", [], "array") == $this->getAttribute((isset($context["thematics"]) ? $context["thematics"] : null), "thematic_id", [], "array"))) {
                // line 56
                echo "\t\t\t\t<div class=\"songs\"><span class=\"songAdd\"><h5>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_name", [], "array"), "html", null, true);
                echo "</h5>
\t\t\t\t\t";
                // line 57
                if (twig_in_filter($this->getAttribute($context["allSongs"], "song_id", [], "array"), (isset($context["favSongs"]) ? $context["favSongs"] : null))) {
                    // line 58
                    echo "\t\t\t\t\t\t";
                    if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                        // line 59
                        echo "\t\t\t\t\t\t\t<button class=\"removeSong\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_id", [], "array"), "html", null, true);
                        echo "\"></button></span>
\t\t\t\t\t\t";
                    }
                    // line 61
                    echo "\t\t\t\t\t";
                } else {
                    // line 62
                    echo "\t\t\t\t\t\t";
                    if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                        // line 63
                        echo "\t\t\t\t\t\t\t<button class=\"addSong\" id=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_id", [], "array"), "html", null, true);
                        echo "\"></button></span>
\t\t\t\t\t\t";
                    }
                    // line 65
                    echo "\t\t\t\t\t";
                }
                // line 66
                echo "\t\t\t\t\t<audio src=\"public/songs/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["allSongs"], "song_access", [], "array"), "html", null, true);
                echo "\" controls></audio>
\t\t\t\t\t</div>
\t\t\t";
            }
            // line 69
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['allSongs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "</div>
</div>


";
        // line 75
        if (((isset($context["pageNumber"]) ? $context["pageNumber"] : null) != 0)) {
            // line 76
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pageNumber"]) ? $context["pageNumber"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 77
                if (($context["i"] == (isset($context["page"]) ? $context["page"] : null))) {
                    // line 78
                    echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                    echo "
";
                } else {
                    // line 80
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
        } else {
            // line 84
            echo "<a href=\"?action=allsongs\">Tous les sons</a>
";
        }
        // line 86
        echo "</div>

";
    }

    // line 93
    public function block_script_bottom($context, array $blocks = [])
    {
        // line 94
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
        return array (  258 => 94,  255 => 93,  249 => 86,  245 => 84,  232 => 80,  227 => 78,  225 => 77,  221 => 76,  219 => 75,  213 => 71,  206 => 69,  199 => 66,  196 => 65,  190 => 63,  187 => 62,  184 => 61,  178 => 59,  175 => 58,  173 => 57,  168 => 56,  165 => 55,  161 => 54,  151 => 46,  136 => 38,  133 => 37,  127 => 35,  124 => 34,  121 => 33,  115 => 31,  112 => 30,  110 => 29,  106 => 28,  103 => 27,  99 => 26,  92 => 21,  81 => 19,  77 => 18,  63 => 6,  60 => 5,  55 => 4,  49 => 3,  43 => 2,  33 => 1,);
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
{% block script %}<script src=\"./public/js/Songs.js\"></script>{% endblock %}
{% block header %}{% endblock %}
{% block content %}

<div id=\"songSearch\">
\t<form action=\"?action=allsongs\" id='songSearchForm' method=\"post\">
\t\t\t<label for=\"songTerm\">Rechercher un son</label>
\t\t\t<input type=text name=\"songTerm\" id=\"songTerm\" required>
\t\t\t<input type=\"submit\" id=\"searchASong\" value=\"Rechercher\">
\t</form>

\t<div id=\"resultSongSearch\" class='songs'></div>
</div>

\t\t<div id=\"thematics\">
\t\t{% for thematics in thematics %}
\t\t<a href=\"?action=allsongs&songTerm={{ thematics['name']}}\">{{ thematics['name']}}</a>
\t\t{% endfor %}
\t\t</div>

<div id=\"allSongs\">


\t{% for allSongs in allSongs %}

\t<div class=\"songs\"><div class=\"songAdd\"><h5>{{ allSongs['song_name'] }}</h5>
\t\t{% if allSongs['song_id'] in favSongs %}
\t\t\t{% if id is not null %}
\t\t\t\t<button class=\"removeSong\" id=\"{{ allSongs['song_id'] }}\"></button></div>
\t\t\t{% endif %}
\t\t{% else %}
\t\t\t{% if id is not null %}
\t\t\t\t<button class=\"addSong\" id=\"{{ allSongs['song_id'] }}\"></button></div>
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


{% if pageNumber != 0 %}
{% for i in 1..pageNumber %}
{% if i == page %}
{{ i }}
{% else %}
<a href=\"?action=allsongs&page={{ i }}\">{{ i}}</a>
{% endif %}
{% endfor %}
{% else %}
<a href=\"?action=allsongs\">Tous les sons</a>
{% endif %}
</div>

{% endblock %}




{% block script_bottom %}

{% endblock %}
", "allsongs.twig", "C:\\wamp64\\www\\appliJDR\\src\\view\\allsongs.twig");
    }
}
