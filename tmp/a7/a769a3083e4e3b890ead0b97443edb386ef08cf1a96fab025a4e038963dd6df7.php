<?php

/* ingame.twig */
class __TwigTemplate_7e6606da2203ef51e7efd402a5f2039d74abf9ec3f36b7b5918fe55d59eb6f4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "ingame.twig", 1);
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

    // line 4
    public function block_script($context, array $blocks = array())
    {
        // line 5
        echo "<script src=\"public/js/Ingame.js\"></script>
<script src=\"public/js/Manage.js\"></script>
<script src=\"public/js/VideoPlayer.js\"></script>
<script src=\"public/js/Songs.js\"></script>
";
    }

    // line 10
    public function block_header($context, array $blocks = array())
    {
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["gameInfos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["gameInfos"]) {
            // line 11
            echo "\t\t\t\t<h2 id=\"gameTitle\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gameInfos"], "name", array(), "array"), "html", null, true);
            echo "</h2>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gameInfos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t\t";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "
<div id=\"ingameContent\">

\t\t<section id=\"ambianceSongContainer\" class=\"ingameContainer\">
\t\t\t<div id='ambianceSong' class=\"ingame\">

\t\t\t\t<div class='sectionContent' id=\"ambianceSongContent\">
\t\t\t\t\t<form action=\"?action=sons\" id='songSearchForm' method=\"post\">
\t\t\t\t\t\t\t<label for=\"songTerm\">Rechercher un son</label>
\t\t\t\t\t\t\t<input type=text name=\"songTerm\" id=\"songTerm\">
\t\t\t\t\t\t\t<input type=\"submit\" id=\"searchASong\" value=\"Rechercher\">
\t\t\t\t\t\t\t<div id=\"resultSongSearch\"></div>
\t\t\t\t\t\t</form>
\t\t\t";
        // line 28
        if ((isset($context["gameSongs"]) ? $context["gameSongs"] : null)) {
            // line 29
            echo "
\t\t\t";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["gameSongs"]);
            foreach ($context['_seq'] as $context["_key"] => $context["gameSongs"]) {
                // line 31
                echo "\t\t\t<div id=\"song";
                echo twig_escape_filter($this->env, $this->getAttribute($context["gameSongs"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["gameSongs"], "name", array(), "array"), "html", null, true);
                echo "
\t\t\t\t<audio class=\"songInGame\" src=\"public/songs/";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["gameSongs"], "access", array(), "array"), "html", null, true);
                echo "\" controls></audio>
\t\t\t\t";
                // line 34
                if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
                    echo "<button class=\"removeSongFromGame\" id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["gameSongs"], "id", array(), "array"), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, (isset($context["gameId"]) ? $context["gameId"] : null), "html", null, true);
                    echo "\">Supprimer</button>";
                }
                // line 35
                echo "\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gameSongs'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "

\t\t\t";
        } else {
            // line 40
            echo "\t\t\tVotre liste de sons est vide ! Ajoutez en <a href=\"?action=allsongs\">ici</a>
\t\t\t";
        }
        // line 42
        echo "\t\t</div>

\t\t</div>
\t\t</section>

\t\t<section id=\"ambianceMusiqueContainer\" class=\"ingameContainer\">
\t\t\t<div id=\"ambianceMusique\" class=\"ingame\">
\t\t\t\t\t<div class='sectionContent' id=\"ambianceMusiqueContent\">
\t\t ";
        // line 50
        if ((((isset($context["gamesInfos"]) ? $context["gamesInfos"] : null) === true) && ((isset($context["sessionId"]) ? $context["sessionId"] : null) != 0))) {
            // line 51
            echo "\t\t\t\t<span>Pour ajouter une vidéo youtube, ajoutez l'identifiant de la vidéo (ex : dQw4w9WgXcQ) ci-dessous</span>
\t\t\t\t<form id=\"videoAdd\" action=\"index.php?action=accountAddVideo\" method=\"post\">
\t\t\t\t\t<input type=\"texte\" name=\"videoLink\" id=\"videoLink\" required>
\t\t\t\t\t<input type=\"hidden\" name=\"gameId\" id=\"gameId\" value=\"";
            // line 54
            echo twig_escape_filter($this->env, (isset($context["gameId"]) ? $context["gameId"] : null), "html", null, true);
            echo "\">
\t\t\t\t\t<input type=\"submit\" id=\"addVideoLink\" value=\"Ajouter\">
\t\t\t\t</form>
\t\t\t ";
        }
        // line 58
        echo "
\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["videos"]);
        foreach ($context['_seq'] as $context["_key"] => $context["videos"]) {
            // line 60
            echo "\t\t\t\t<iframe id=\"player\" type=\"text/html\" width=\"22%\" height=\"80\"
\t\t  \t src=\"http://www.youtube.com/embed/";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["videos"], "video_link", array(), "array"), "html", null, true);
            echo "?enablejsapi=1&origin=http://localhost/appliJDR\"
\t\t\t\t frameborder=\"0\"></iframe>
\t\t\t\t ";
            // line 63
            if ((((isset($context["gamesInfos"]) ? $context["gamesInfos"] : null) === true) && ((isset($context["sessionId"]) ? $context["sessionId"] : null) != 0))) {
                // line 64
                echo "\t\t\t  <form id=\"videoRemove\" action=\"index.php?action=accountRemoveVideo\" method=\"post\">
\t\t\t\t\t<input type=\"hidden\" name=\"videoLink\" id=\"videoLink\" value=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["videos"], "video_link", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"idGame\" id=\"idGame\" value=\"";
                // line 66
                echo twig_escape_filter($this->env, (isset($context["gameId"]) ? $context["gameId"] : null), "html", null, true);
                echo "\">
\t\t\t\t\t<input type=\"hidden\" name=\"videoId\" id=\"videoId\" value=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["videos"], (isset($context["id"]) ? $context["id"] : null), array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t\t<input type=\"submit\" id=\"removeVideo\" value=\"x\">
\t\t\t  </form>
\t\t\t\t ";
            }
            // line 71
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t</div>
\t\t</div>
\t\t</section>

\t\t<section id=\"diceRollContainer\" class=\"ingameContainer\">
\t\t\t<div id=\"diceRoll\" class='ingame'>
\t\t\t\t\t<div class='sectionContent' id=\"diceRollContent\">
\t\t\t<div id=\"diceResult\">
\t\t\t\t<div id=\"last\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<form id=\"roll\">
\t\t\t\t\t<input type=\"text\" name=\"diceNumber\" id=\"diceNumber\" required>
\t\t\t\t\t\tDés
\t\t\t\t\t<input type=\"text\" name=\"diceFaces\" id=\"diceFaces\" required>
\t\t\t\t  <input type=\"button\" id=\"rollDices\" value=\"Jeter !\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t</section>
</div>

<div id=\"gameOwner\">
\t<p>

\t</p>

</div>

\t\t<section id=\"blocNotes\">

\t\t\t\t<div class=\"notes\">
\t\t\t\t\t\t";
        // line 107
        if ((isset($context["blocNotes"]) ? $context["blocNotes"] : null)) {
            // line 108
            echo "\t\t\t\t<form  id=\"notesGameEdit\">

\t\t\t\t\t\t";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["blocNotes"]);
            foreach ($context['_seq'] as $context["_key"] => $context["blocNotes"]) {
                // line 111
                echo "\t\t\t<fieldset id=\"fieldNotes\"  data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["blocNotes"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t<legend name=\"title\" class=\"title\" id=\"notesTitle\">";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["blocNotes"], "title", array(), "array"), "html", null, true);
                echo "</legend>
\t\t\t\t<div id=\"notesContent\">";
                // line 113
                echo $this->getAttribute($context["blocNotes"], "content", array(), "array");
                echo "</strong></em></color></u></p></div>
\t\t\t</fieldset>

\t\t\t<fieldset id=\"fieldNotesEdit\"  data-id=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["blocNotes"], "id", array(), "array"), "html", null, true);
                echo "\">
\t\t\t\t<input id=\"notesTitleEdit\" value='";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["blocNotes"], "title", array(), "array"), "html", null, true);
                echo "'>
\t\t\t\t<div class=\"container\" id=\"notesContentEdit\">";
                // line 118
                echo $this->getAttribute($context["blocNotes"], "content", array(), "array");
                echo "</strong></em></color></u></p></div>
\t\t\t\t<div class=\"container javascript\" id=\"delta-container\"></div>
\t\t\t</fieldset>

\t\t\t<input type=\"button\" class=\"editNotes\" value =\"Sauvegarder\"/>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blocNotes'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "\t\t\t</form>

\t\t\t";
        } else {
            // line 127
            echo "<p>Aucun bloc note existant</p>
\t\t\t";
        }
        // line 129
        echo "\t\t\t\t\t\t<button id=\"switchEdit\">+</button>
\t\t\t\t</div>

\t\t\t\t





\t\t</section>


";
    }

    // line 144
    public function block_script_bottom($context, array $blocks = array())
    {
        // line 145
        echo "
";
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
        return array (  308 => 145,  305 => 144,  289 => 129,  285 => 127,  280 => 124,  268 => 118,  264 => 117,  260 => 116,  254 => 113,  250 => 112,  245 => 111,  241 => 110,  237 => 108,  235 => 107,  198 => 72,  192 => 71,  185 => 67,  181 => 66,  177 => 65,  174 => 64,  172 => 63,  167 => 61,  164 => 60,  160 => 59,  157 => 58,  150 => 54,  145 => 51,  143 => 50,  133 => 42,  129 => 40,  124 => 37,  117 => 35,  109 => 34,  105 => 33,  101 => 32,  96 => 31,  92 => 30,  89 => 29,  87 => 28,  72 => 15,  69 => 14,  65 => 13,  56 => 11,  49 => 10,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
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

{% block script %}
<script src=\"public/js/Ingame.js\"></script>
<script src=\"public/js/Manage.js\"></script>
<script src=\"public/js/VideoPlayer.js\"></script>
<script src=\"public/js/Songs.js\"></script>
{% endblock %}
{% block header %}\t\t\t{% for gameInfos in gameInfos %}
\t\t\t\t<h2 id=\"gameTitle\">{{ gameInfos['name'] }}</h2>
\t\t\t{% endfor %}
\t\t\t{% endblock %}
{% block content %}

<div id=\"ingameContent\">

\t\t<section id=\"ambianceSongContainer\" class=\"ingameContainer\">
\t\t\t<div id='ambianceSong' class=\"ingame\">

\t\t\t\t<div class='sectionContent' id=\"ambianceSongContent\">
\t\t\t\t\t<form action=\"?action=sons\" id='songSearchForm' method=\"post\">
\t\t\t\t\t\t\t<label for=\"songTerm\">Rechercher un son</label>
\t\t\t\t\t\t\t<input type=text name=\"songTerm\" id=\"songTerm\">
\t\t\t\t\t\t\t<input type=\"submit\" id=\"searchASong\" value=\"Rechercher\">
\t\t\t\t\t\t\t<div id=\"resultSongSearch\"></div>
\t\t\t\t\t\t</form>
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
\t\t</section>

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
\t\t\t\t<iframe id=\"player\" type=\"text/html\" width=\"22%\" height=\"80\"
\t\t  \t src=\"http://www.youtube.com/embed/{{ videos['video_link'] }}?enablejsapi=1&origin=http://localhost/appliJDR\"
\t\t\t\t frameborder=\"0\"></iframe>
\t\t\t\t {% if gamesInfos is same as(true) and sessionId != 0 %}
\t\t\t  <form id=\"videoRemove\" action=\"index.php?action=accountRemoveVideo\" method=\"post\">
\t\t\t\t\t<input type=\"hidden\" name=\"videoLink\" id=\"videoLink\" value=\"{{ videos['video_link'] }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"idGame\" id=\"idGame\" value=\"{{ gameId }}\">
\t\t\t\t\t<input type=\"hidden\" name=\"videoId\" id=\"videoId\" value=\"{{ videos[id] }}\">
\t\t\t\t\t<input type=\"submit\" id=\"removeVideo\" value=\"x\">
\t\t\t  </form>
\t\t\t\t {% endif %}
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t\t</section>

\t\t<section id=\"diceRollContainer\" class=\"ingameContainer\">
\t\t\t<div id=\"diceRoll\" class='ingame'>
\t\t\t\t\t<div class='sectionContent' id=\"diceRollContent\">
\t\t\t<div id=\"diceResult\">
\t\t\t\t<div id=\"last\">
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div>
\t\t\t\t<form id=\"roll\">
\t\t\t\t\t<input type=\"text\" name=\"diceNumber\" id=\"diceNumber\" required>
\t\t\t\t\t\tDés
\t\t\t\t\t<input type=\"text\" name=\"diceFaces\" id=\"diceFaces\" required>
\t\t\t\t  <input type=\"button\" id=\"rollDices\" value=\"Jeter !\">
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t</section>
</div>

<div id=\"gameOwner\">
\t<p>

\t</p>

</div>

\t\t<section id=\"blocNotes\">

\t\t\t\t<div class=\"notes\">
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
\t\t\t{% endfor %}
\t\t\t</form>

\t\t\t{% else %}
<p>Aucun bloc note existant</p>
\t\t\t{% endif %}
\t\t\t\t\t\t<button id=\"switchEdit\">+</button>
\t\t\t\t</div>

\t\t\t\t





\t\t</section>


{% endblock %}


{% block script_bottom %}

{% endblock %}
", "ingame.twig", "C:\\wamp64\\www\\appliJDR\\view\\ingame.twig");
    }
}
