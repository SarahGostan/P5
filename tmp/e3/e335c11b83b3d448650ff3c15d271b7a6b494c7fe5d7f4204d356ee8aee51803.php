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

/* ingame.twig */
class __TwigTemplate_46972291605a20009d966c44ca7d03d85e96e8c152250262b7decd077d542b23 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("template.twig", "ingame.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        echo "Interface de partie";
    }

    // line 4
    public function block_script($context, array $blocks = [])
    {
        // line 5
        echo "<script src=\"public/js/Ingame.js\"></script>
<script src=\"public/js/Manage.js\"></script>
<script src=\"public/js/VideoPlayer.js\"></script>
<script src=\"public/js/Songs.js\"></script>

";
    }

    // line 11
    public function block_header($context, array $blocks = [])
    {
        // line 12
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["gameInfos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["gameInfos"]) {
            // line 13
            echo "\t\t<h2 id=\"gameTitle\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gameInfos"], "name", [], "array"), "html", null, true);
            echo "</h2>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gameInfos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        // line 19
        echo "
<div id=\"ingameContent\">


";
        // line 24
        echo "
\t<section id=\"ambianceSongContainer\" class=\"ingameContainer\">
\t\t\t<div id='ambianceSong' class=\"ingame\">

\t\t\t\t<div class='sectionContent' id=\"ambianceSongContent\">

";
        // line 30
        if ((((isset($context["gamesInfos"]) ? $context["gamesInfos"] : null) === true) && ((isset($context["sessionId"]) ? $context["sessionId"] : null) != 0))) {
            // line 31
            echo "\t\t\t\t\t<form action=\"?action=sons\" id='songSearchForm' method=\"post\">
\t\t\t\t\t\t\t<label for=\"songTerm\">Rechercher un son</label>
\t\t\t\t\t\t\t<input type=text name=\"songTerm\" id=\"songTerm\">
\t\t\t\t\t\t\t<input type=\"submit\" id=\"searchASong\" value=\"Rechercher\">
\t\t\t\t\t\t\t<div id=\"resultSongSearch\"></div>
\t\t\t\t\t\t</form>
";
        }
        // line 38
        echo "\t\t\t";
        if ((isset($context["gameSongs"]) ? $context["gameSongs"] : null)) {
            // line 39
            echo "
\t\t\t";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["gameSongs"]);
            foreach ($context['_seq'] as $context["_key"] => $context["gameSongs"]) {
                // line 41
                echo "\t\t\t<div id=\"song";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gameSongs"], "id", [], "array"), "html", null, true);
                echo "\">
\t\t\t\t";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["gameSongs"], "name", [], "array"), "html", null, true);
                echo "
\t\t\t\t<audio class=\"songInGame\" src=\"public/songs/";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["gameSongs"], "access", [], "array"), "html", null, true);
                echo "\" controls></audio>
\t\t\t\t";
                // line 44
                if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                    echo "<button class=\"removeSongFromGame\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gameSongs"], "id", [], "array"), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["gameId"]) ? $context["gameId"] : null), "html", null, true);
                    echo "\">Supprimer</button>";
                }
                // line 45
                echo "\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gameSongs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "

\t\t\t";
        } else {
            // line 50
            echo "\t\t\tVotre liste de sons est vide ! Ajoutez en <a href=\"?action=allsongs\">ici</a>
\t\t\t";
        }
        // line 52
        echo "\t\t</div>

\t\t</div>
\t</section>

";
        // line 58
        echo "

\t\t<section id=\"ambianceMusiqueContainer\" class=\"ingameContainer\">
\t\t\t<div id=\"ambianceMusique\" class=\"ingame\">
\t\t\t\t\t<div class='sectionContent' id=\"ambianceMusiqueContent\">
\t\t ";
        // line 63
        if ((((isset($context["gamesInfos"]) ? $context["gamesInfos"] : null) === true) && ((isset($context["sessionId"]) ? $context["sessionId"] : null) != 0))) {
            // line 64
            echo "\t\t\t\t<span>Pour ajouter une vidéo youtube, ajoutez l'identifiant de la vidéo (ex : dQw4w9WgXcQ) ci-dessous</span>
\t\t\t\t<form id=\"videoAdd\" action=\"index.php?action=accountAddVideo\" method=\"post\">
\t\t\t\t\t<input type=\"texte\" name=\"videoLink\" id=\"videoLink\" required>
\t\t\t\t\t<input type=\"hidden\" name=\"gameId\" id=\"gameId\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["gameId"]) ? $context["gameId"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"submit\" id=\"addVideoLink\" value=\"Ajouter\">
\t\t\t\t</form>
\t\t\t ";
        }
        // line 71
        echo "
\t\t\t\t";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["videos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["videos"]) {
            // line 73
            echo "\t\t\t\t<iframe id=\"videoPlayer\" type=\"text/html\" width=\"22%\" height=\"80\"
\t\t  \t src=\"http://www.youtube.com/embed/";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["videos"], "video_link", [], "array"), "html", null, true);
            echo "?enablejsapi=1&origin=http://localhost/appliJDR\"
\t\t\t\t frameborder=\"0\"></iframe>
\t\t\t\t ";
            // line 76
            if ((((isset($context["gamesInfos"]) ? $context["gamesInfos"] : null) === true) && ((isset($context["sessionId"]) ? $context["sessionId"] : null) != 0))) {
                // line 77
                echo "\t\t\t  <form id=\"videoRemove\" action=\"index.php?action=accountRemoveVideo\" method=\"post\">
\t\t\t\t\t<input type=\"hidden\" name=\"videoLink\" id=\"videoLink\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["videos"], "video_link", [], "array"), "html", null, true);
                echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"idGame\" id=\"idGame\" value=\"";
                // line 79
                echo twig_escape_filter($this->env, (isset($context["gameId"]) ? $context["gameId"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"videoId\" id=\"videoId\" value=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["videos"], "id", [], "array"), "html", null, true);
                echo "\">
\t\t\t\t\t<input type=\"submit\" id=\"removeVideo\" value=\"x\">
\t\t\t  </form>
\t\t\t\t ";
            }
            // line 84
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "\t\t\t</div>
\t\t</div>
\t\t</section>


";
        // line 91
        echo "

";
        // line 94
        echo "
";
        // line 96
        echo "
\t\t<section id=\"diceRollContainer\" class=\"ingameContainer\">
\t\t\t<div id=\"diceRoll\" class='ingame'>

\t\t\t</div>
\t\t</section>
</div>

<div id=\"gameOwner\">
\t<p>

\t</p>

</div>

\t\t<section id=\"blocNotes\">

\t\t\t\t<div id=\"notes\">
\t\t\t\t\t\t";
        // line 114
        if ((isset($context["blocNotes"]) ? $context["blocNotes"] : null)) {
            // line 115
            echo "\t\t\t\t<form  id=\"notesGameEdit\">
\t\t\t\t\t\t";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["blocNotes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["blocNotes"]) {
                // line 117
                echo "\t\t\t<fieldset id=\"fieldNotes\"  data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["blocNotes"], "id", [], "array"), "html", null, true);
                echo "\">
\t\t\t\t<legend name=\"title\" class=\"title\" id=\"notesTitle\">";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["blocNotes"], "title", [], "array"), "html", null, true);
                echo "</legend>
\t\t\t\t<div id=\"notesContent\">";
                // line 119
                echo $this->getAttribute($context["blocNotes"], "content", [], "array");
                echo "</strong></em></color></u></p></div>
\t\t\t</fieldset>

\t\t\t<fieldset id=\"fieldNotesEdit\"  data-id=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["blocNotes"], "id", [], "array"), "html", null, true);
                echo "\">
\t\t\t\t<input id=\"notesTitleEdit\" value='";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute($context["blocNotes"], "title", [], "array"), "html", null, true);
                echo "'>
\t\t\t\t<div class=\"container\" id=\"notesContentEdit\">";
                // line 124
                echo $this->getAttribute($context["blocNotes"], "content", [], "array");
                echo "</strong></em></color></u></p></div>
\t\t\t\t<div class=\"container javascript\" id=\"delta-container\"></div>
\t\t\t</fieldset>

\t\t\t<input type=\"button\" class=\"editNotes\" value =\"Sauvegarder\"/>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blocNotes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "\t\t\t</form>

\t\t\t";
        } else {
            // line 133
            echo "\t\t";
            if (((isset($context["sessionId"]) ? $context["sessionId"] : null) != 0)) {
                // line 134
                echo "\t\t\t<form id=\"newNote\" data-id='";
                echo twig_escape_filter($this->env, (isset($context["gameId"]) ? $context["gameId"] : null), "html", null, true);
                echo "'>
\t\t\t\t<input id=\"notesTitleEdit\" value=''>
\t\t\t\t<div class=\"container\" id=\"notesContentEdit\"></strong></em></color></u></p></div>
\t\t\t\t<div class=\"container javascript\" id=\"delta-container\"></div>

\t\t\t<input type=\"button\" id=\"createNewNote\" value =\"Sauvegarder\"/>
\t\t</form>
\t\t\t";
            }
            // line 142
            echo "\t\t\t\t\t\t<button id=\"switchEdit\">+</button>
\t\t\t";
        }
        // line 144
        echo "\t\t\t\t</div>



\t\t\t<div id=\"diceRollContent\">
\t\t\t<div id=\"diceResult\" class=\"roll\">
\t\t\t<div id=\"last\">
\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t<form id=\"roll\">
\t\t\t\t<input type=\"text\" name=\"diceNumber\" id=\"diceNumber\" required>
\t\t\t\t\tDés
\t\t\t\t<input type=\"text\" name=\"diceFaces\" id=\"diceFaces\" required>
\t\t\t\t<input type=\"button\" id=\"rollDices\" value=\"Jeter !\">
\t\t\t</form>
\t\t\t</div>
\t\t\t</div>

\t\t</section>



";
    }

    // line 171
    public function block_script_bottom($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "ingame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 171,  326 => 144,  322 => 142,  310 => 134,  307 => 133,  302 => 130,  290 => 124,  286 => 123,  282 => 122,  276 => 119,  272 => 118,  267 => 117,  263 => 116,  260 => 115,  258 => 114,  238 => 96,  235 => 94,  231 => 91,  224 => 85,  218 => 84,  211 => 80,  207 => 79,  203 => 78,  200 => 77,  198 => 76,  193 => 74,  190 => 73,  186 => 72,  183 => 71,  176 => 67,  171 => 64,  169 => 63,  162 => 58,  155 => 52,  151 => 50,  146 => 47,  139 => 45,  131 => 44,  127 => 43,  123 => 42,  118 => 41,  114 => 40,  111 => 39,  108 => 38,  99 => 31,  97 => 30,  89 => 24,  83 => 19,  80 => 18,  69 => 13,  64 => 12,  61 => 11,  52 => 5,  49 => 4,  43 => 2,  33 => 1,);
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

{% block script %}
<script src=\"public/js/Ingame.js\"></script>
<script src=\"public/js/Manage.js\"></script>
<script src=\"public/js/VideoPlayer.js\"></script>
<script src=\"public/js/Songs.js\"></script>

{% endblock %}
{% block header %}
\t{% for gameInfos in gameInfos %}
\t\t<h2 id=\"gameTitle\">{{ gameInfos['name'] }}</h2>
\t{% endfor %}
{% endblock %}


{% block content %}

<div id=\"ingameContent\">


{# ************* Section de gauche : liste de sons d'ambiance ************* #}

\t<section id=\"ambianceSongContainer\" class=\"ingameContainer\">
\t\t\t<div id='ambianceSong' class=\"ingame\">

\t\t\t\t<div class='sectionContent' id=\"ambianceSongContent\">

{% if gamesInfos is same as(true) and sessionId != 0 %}
\t\t\t\t\t<form action=\"?action=sons\" id='songSearchForm' method=\"post\">
\t\t\t\t\t\t\t<label for=\"songTerm\">Rechercher un son</label>
\t\t\t\t\t\t\t<input type=text name=\"songTerm\" id=\"songTerm\">
\t\t\t\t\t\t\t<input type=\"submit\" id=\"searchASong\" value=\"Rechercher\">
\t\t\t\t\t\t\t<div id=\"resultSongSearch\"></div>
\t\t\t\t\t\t</form>
{% endif %}
\t\t\t{% if gameSongs %}

\t\t\t{% for gameSongs in gameSongs %}
\t\t\t<div id=\"song{{ gameSongs['id'] }}\">
\t\t\t\t{{ gameSongs['name'] }}
\t\t\t\t<audio class=\"songInGame\" src=\"public/songs/{{ gameSongs['access'] }}\" controls></audio>
\t\t\t\t{% if id is not null %}<button class=\"removeSongFromGame\" id=\"{{ gameSongs['id'] }}\" name=\"{{ gameId }}\">Supprimer</button>{% endif %}
\t\t\t</div>
\t\t\t{% endfor %}


\t\t\t{% else %}
\t\t\tVotre liste de sons est vide ! Ajoutez en <a href=\"?action=allsongs\">ici</a>
\t\t\t{% endif %}
\t\t</div>

\t\t</div>
\t</section>

{# ************* Section du milieu : liste de musiques et vidéos ************* #}


\t\t<section id=\"ambianceMusiqueContainer\" class=\"ingameContainer\">
\t\t\t<div id=\"ambianceMusique\" class=\"ingame\">
\t\t\t\t\t<div class='sectionContent' id=\"ambianceMusiqueContent\">
\t\t {% if gamesInfos is same as(true) and sessionId != 0 %}
\t\t\t\t<span>Pour ajouter une vidéo youtube, ajoutez l'identifiant de la vidéo (ex : dQw4w9WgXcQ) ci-dessous</span>
\t\t\t\t<form id=\"videoAdd\" action=\"index.php?action=accountAddVideo\" method=\"post\">
\t\t\t\t\t<input type=\"texte\" name=\"videoLink\" id=\"videoLink\" required>
\t\t\t\t\t<input type=\"hidden\" name=\"gameId\" id=\"gameId\" value=\"{{ gameId }}\">
\t\t\t\t\t<input type=\"submit\" id=\"addVideoLink\" value=\"Ajouter\">
\t\t\t\t</form>
\t\t\t {% endif %}

\t\t\t\t{% for videos in videos %}
\t\t\t\t<iframe id=\"videoPlayer\" type=\"text/html\" width=\"22%\" height=\"80\"
\t\t  \t src=\"http://www.youtube.com/embed/{{ videos['video_link'] }}?enablejsapi=1&origin=http://localhost/appliJDR\"
\t\t\t\t frameborder=\"0\"></iframe>
\t\t\t\t {% if gamesInfos is same as(true) and sessionId != 0 %}
\t\t\t  <form id=\"videoRemove\" action=\"index.php?action=accountRemoveVideo\" method=\"post\">
\t\t\t\t\t<input type=\"hidden\" name=\"videoLink\" id=\"videoLink\" value=\"{{ videos['video_link'] }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"idGame\" id=\"idGame\" value=\"{{ gameId }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"videoId\" id=\"videoId\" value=\"{{ videos['id'] }}\">
\t\t\t\t\t<input type=\"submit\" id=\"removeVideo\" value=\"x\">
\t\t\t  </form>
\t\t\t\t {% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t\t</section>


{# ************* Section de droite : règles en accès rapide ************* #}


{# A DEVELOPPER #}

{# ************* Section du bas : feuilles de note et jet de dés ************* #}

\t\t<section id=\"diceRollContainer\" class=\"ingameContainer\">
\t\t\t<div id=\"diceRoll\" class='ingame'>

\t\t\t</div>
\t\t</section>
</div>

<div id=\"gameOwner\">
\t<p>

\t</p>

</div>

\t\t<section id=\"blocNotes\">

\t\t\t\t<div id=\"notes\">
\t\t\t\t\t\t{% if blocNotes %}
\t\t\t\t<form  id=\"notesGameEdit\">
\t\t\t\t\t\t{% for blocNotes in blocNotes %}
\t\t\t<fieldset id=\"fieldNotes\"  data-id=\"{{ blocNotes['id'] }}\">
\t\t\t\t<legend name=\"title\" class=\"title\" id=\"notesTitle\">{{ blocNotes['title'] }}</legend>
\t\t\t\t<div id=\"notesContent\">{{ blocNotes['content']|raw }}</strong></em></color></u></p></div>
\t\t\t</fieldset>

\t\t\t<fieldset id=\"fieldNotesEdit\"  data-id=\"{{ blocNotes['id'] }}\">
\t\t\t\t<input id=\"notesTitleEdit\" value='{{ blocNotes['title'] }}'>
\t\t\t\t<div class=\"container\" id=\"notesContentEdit\">{{ blocNotes['content']|raw }}</strong></em></color></u></p></div>
\t\t\t\t<div class=\"container javascript\" id=\"delta-container\"></div>
\t\t\t</fieldset>

\t\t\t<input type=\"button\" class=\"editNotes\" value =\"Sauvegarder\"/>
\t\t\t\t{% endfor %}
\t\t\t</form>

\t\t\t{% else %}
\t\t{% if\tsessionId != 0 %}
\t\t\t<form id=\"newNote\" data-id='{{ gameId }}'>
\t\t\t\t<input id=\"notesTitleEdit\" value=''>
\t\t\t\t<div class=\"container\" id=\"notesContentEdit\"></strong></em></color></u></p></div>
\t\t\t\t<div class=\"container javascript\" id=\"delta-container\"></div>

\t\t\t<input type=\"button\" id=\"createNewNote\" value =\"Sauvegarder\"/>
\t\t</form>
\t\t\t{% endif %}
\t\t\t\t\t\t<button id=\"switchEdit\">+</button>
\t\t\t{% endif %}
\t\t\t\t</div>



\t\t\t<div id=\"diceRollContent\">
\t\t\t<div id=\"diceResult\" class=\"roll\">
\t\t\t<div id=\"last\">
\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t<form id=\"roll\">
\t\t\t\t<input type=\"text\" name=\"diceNumber\" id=\"diceNumber\" required>
\t\t\t\t\tDés
\t\t\t\t<input type=\"text\" name=\"diceFaces\" id=\"diceFaces\" required>
\t\t\t\t<input type=\"button\" id=\"rollDices\" value=\"Jeter !\">
\t\t\t</form>
\t\t\t</div>
\t\t\t</div>

\t\t</section>



{% endblock %}


{% block script_bottom %}
{% endblock %}
", "ingame.twig", "C:\\wamp64\\www\\appliJDR\\src\\view\\ingame.twig");
    }
}
