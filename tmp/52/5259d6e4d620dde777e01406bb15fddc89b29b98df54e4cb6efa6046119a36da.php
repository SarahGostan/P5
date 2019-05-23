<?php

/* parties_gestionnaire.twig */
class __TwigTemplate_4e493156c9cd5519287b14eab074bccef9d65df087c686125fa8aeebffacd86b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "parties_gestionnaire.twig", 1);
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
        echo "Parties";
    }

    // line 3
    public function block_script($context, array $blocks = array())
    {
        echo "<script src=\"public/js/Manage.js\"></script><script src=\"public/js/Songs.js\"></script>
";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        // line 10
        echo "<div id=\"gamesManager\">
\t<div id=\"games\">
\t\t<h2>Mes parties</h2>
\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["gamesInfos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["gamesInfos"]) {
            // line 14
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gamesInfos"], "icone", array(), "array"), "html", null, true);
            echo "\" alt=\"icone\" id=\"icone\">
\t\t\t\t<a class=\"linkGame\" href=\"?action=ingame&id=";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["gamesInfos"], "game_id", array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gamesInfos"], "name", array(), "array"), "html", null, true);
            echo "</a>
\t\t\t\t<a href=\"index.php?action=accountsupressgame&id=";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["gamesInfos"], "game_id", array(), "array"), "html", null, true);
            echo "\">Supprimer cette partie</a>

\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gamesInfos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
\t\t\t<div>
\t\t\t<form method=\"post\" action=\"?action=accountnewgame\" id=\"newGameForm\" enctype=\"multipart/form-data\">
\t\t\t\t<h3>Créer une partie</h3>
\t\t\t\t<label for=\"gameName\">Nommer la partie</label>
\t\t\t\t<input type=\"varchar\" name=\"gameName\" id=\"gameName\" required>
\t\t\t\t<label for=\"image\">Ajouter une icone à votre partie</label>
\t\t\t\t<input type=\"file\" name=\"image\" id=\"image\">
\t\t\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"64000\">
\t\t\t\t<input type=\"submit\" value=\"Créer la partie\">
\t\t\t\t</form>


\t\t</div>
\t</div>
\t<div id=\"favoris\">
\t\t";
        // line 35
        if ((isset($context["favSongs"]) ? $context["favSongs"] : null)) {
            // line 36
            echo "
\t\t\t";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["favSongs"]);
            foreach ($context['_seq'] as $context["_key"] => $context["favSongs"]) {
                // line 38
                echo "\t\t\t\t<div class=\"favSongs\">
\t\t\t\t<div>\t<p>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["favSongs"], "name", array(), "array"), "html", null, true);
                echo "</p>
\t\t\t\t\t<audio class=\"songInFav\" src=\"public/songs/";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["favSongs"], "access", array(), "array"), "html", null, true);
                echo "\" controls></audio>
\t\t\t\t</div>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>Ajouter à :</legend>

\t\t\t\t\t\t\t";
                // line 45
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["gamesInfos"]);
                foreach ($context['_seq'] as $context["_key"] => $context["gamesInfos"]) {
                    // line 46
                    echo "\t\t\t\t\t\t\t\t<button id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["favSongs"], "id", array(), "array"), "html", null, true);
                    echo "\" class=\"addSongToGame\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gamesInfos"], "game_id", array(), "array"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gamesInfos"], "name", array(), "array"), "html", null, true);
                    echo "</button>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gamesInfos'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                echo "\t\t\t\t\t\t</fieldset>
\t\t\t\t<button class=\"removeSong\" id=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["favSongs"], "id", array(), "array"), "html", null, true);
                echo "\"></button>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favSongs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "

\t\t\t";
        } else {
            // line 55
            echo "\t\t\t\tVotre liste de sons favoris est vide ! Ajoutez en <a href=\"?action=allsongs\">ici</a>
\t\t\t";
        }
        // line 57
        echo "\t</div>









";
    }

    // line 69
    public function block_script_bottom($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "parties_gestionnaire.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 69,  162 => 57,  158 => 55,  153 => 52,  144 => 49,  141 => 48,  128 => 46,  124 => 45,  116 => 40,  112 => 39,  109 => 38,  105 => 37,  102 => 36,  100 => 35,  82 => 19,  73 => 16,  67 => 15,  62 => 14,  58 => 13,  53 => 10,  50 => 9,  45 => 6,  38 => 3,  32 => 2,  11 => 1,);
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
{% block title %}Parties{% endblock %}
{% block script %}<script src=\"public/js/Manage.js\"></script><script src=\"public/js/Songs.js\"></script>
{% endblock %}

{% block header %}
{% endblock %}

{% block content %}
<div id=\"gamesManager\">
\t<div id=\"games\">
\t\t<h2>Mes parties</h2>
\t\t{% for gamesInfos in gamesInfos %}
\t\t\t\t<img src=\"{{ gamesInfos['icone'] }}\" alt=\"icone\" id=\"icone\">
\t\t\t\t<a class=\"linkGame\" href=\"?action=ingame&id={{ gamesInfos['game_id'] }}\">{{ gamesInfos['name'] }}</a>
\t\t\t\t<a href=\"index.php?action=accountsupressgame&id={{ gamesInfos['game_id'] }}\">Supprimer cette partie</a>

\t\t\t{% endfor %}

\t\t\t<div>
\t\t\t<form method=\"post\" action=\"?action=accountnewgame\" id=\"newGameForm\" enctype=\"multipart/form-data\">
\t\t\t\t<h3>Créer une partie</h3>
\t\t\t\t<label for=\"gameName\">Nommer la partie</label>
\t\t\t\t<input type=\"varchar\" name=\"gameName\" id=\"gameName\" required>
\t\t\t\t<label for=\"image\">Ajouter une icone à votre partie</label>
\t\t\t\t<input type=\"file\" name=\"image\" id=\"image\">
\t\t\t\t<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"64000\">
\t\t\t\t<input type=\"submit\" value=\"Créer la partie\">
\t\t\t\t</form>


\t\t</div>
\t</div>
\t<div id=\"favoris\">
\t\t{% if favSongs %}

\t\t\t{% for favSongs in favSongs %}
\t\t\t\t<div class=\"favSongs\">
\t\t\t\t<div>\t<p>{{ favSongs['name'] }}</p>
\t\t\t\t\t<audio class=\"songInFav\" src=\"public/songs/{{ favSongs['access'] }}\" controls></audio>
\t\t\t\t</div>
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<legend>Ajouter à :</legend>

\t\t\t\t\t\t\t{% for gamesInfos in gamesInfos %}
\t\t\t\t\t\t\t\t<button id=\"{{favSongs['id']}}\" class=\"addSongToGame\" name=\"{{gamesInfos['game_id']}}\">{{ gamesInfos['name'] }}</button>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</fieldset>
\t\t\t\t<button class=\"removeSong\" id=\"{{ favSongs['id'] }}\"></button>
\t\t\t\t</div>
\t\t\t{% endfor %}


\t\t\t{% else %}
\t\t\t\tVotre liste de sons favoris est vide ! Ajoutez en <a href=\"?action=allsongs\">ici</a>
\t\t\t{% endif %}
\t</div>









{% endblock %}

{% block script_bottom %}
{% endblock %}
", "parties_gestionnaire.twig", "C:\\wamp64\\www\\appliJDR\\view\\parties_gestionnaire.twig");
    }
}
