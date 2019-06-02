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

/* template.twig */
class __TwigTemplate_7488a4a94a14e6aff9e1ed58cd473ea0bd206c1c0b6f7ad373046ef09281fea8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'script' => [$this, 'block_script'],
            'message' => [$this, 'block_message'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'script_bottom' => [$this, 'block_script_bottom'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t\t<link href=\"public/style.css\" rel=\"stylesheet\" />
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/png\" href=\"public/images/head_resize.png\" />
\t\t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script src=\"https://cdn.quilljs.com/1.3.6/quill.js\"></script>
  \t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/languages/go.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"public/js/Template.js\"></script>

\t\t";
        // line 20
        $this->displayBlock('script', $context, $blocks);
        // line 21
        echo "

    </head>
\t<body>


\t\t<header id=\"header\">

\t\t<a href=\"index.php\" id=\"title\"><img src=\"public/images/resize_logo.png\" alt=\"logo\" />
      <div id=\"principalTitle\">
        <div id=\"ecran\" class\"ecranTitle\">L'ecran</div><div id=\"du\" class=\"ecranTitle\">du</div><div id=\"mj\" class=\"ecranTitle\">MJ</div>
      </div></a>
\t<nav>
\t\t<ul id=\"menu\">
\t\t\t<li class= \"links\" id=\"gamesMenu\">
        <a href=\"?action=jouer\">
          <span class=\"icon\"><i class=\"fas fa-dice\"></i></span>
          <span>Mes parties</span>
        </a>
      </li>
      <li class= \"links\" id=\"allSongsMenu\">
        <a href=\"?action=allsongs\">
          <span class=\"icon\"><i class=\"fas fa-microphone-alt\"></i></span>
          <span>Tous les sons</span>
        </a>
      </li>
\t\t\t";
        // line 47
        if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 48
            echo "\t\t\t<li class=\"links\" id=\"accountMenu\">
        <a href=\"?action=account\">
          <span class)\"icon\"><i class=\"fas fa-user-circle\"></i>
          </span><span>Mon compte</span>
        </a>
      </li>
\t\t\t";
        }
        // line 55
        echo "\t\t</ul>
\t</nav>

\t<div id=\"connexion\">
\t";
        // line 59
        if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 60
            echo "\t<a href=\"index?action=logout\">Déconnexion</a>
\t";
        } else {
            // line 62
            echo "  <a href=\"index?action=login\">Inscription</a>

  <div id=\"loginBox\">
  \t<button class=\"gestionButton\" data-form=\"loginForm\" id=\"loginButton\">Connexion<span class=\"caret\"><i class=\"fas fa-angle-down\"></i></span></button>
    <form id=\"loginForm\" class='hide' action=\"index.php?action=authenticize\" method=\"post\" >
    \t\t<label for=\"identifiant\">Identifiant</label>
    \t\t<input type=\"text\" name=\"identifiant\" id=\"identifiant\" /><br />
    \t\t<label for=\"password\">Mot de passe</label>
    \t\t<input type=\"password\" name=\"password\" id=\"password\" /><br />
    \t\t<input type=\"submit\" value = \"Envoyer\"/>
        <span><a href=\"?action=login\">Mot de passe oublié ?</a></span>
    \t</form>
  </div>

\t";
        }
        // line 77
        echo "\t</div>
\t\t\t";
        // line 78
        $this->displayBlock('message', $context, $blocks);
        // line 79
        echo "\t\t\t\t";
        $this->displayBlock('header', $context, $blocks);
        // line 80
        echo "\t\t</header>

\t\t <div id=\"content\">
\t\t\t";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "\t\t</div>

\t\t<footer>

\t\t</footer>


<script src=\"public/js/main.js\"></script>
";
        // line 92
        $this->displayBlock('script_bottom', $context, $blocks);
        // line 93
        echo "
\t</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
    }

    // line 20
    public function block_script($context, array $blocks = [])
    {
    }

    // line 78
    public function block_message($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
    }

    // line 79
    public function block_header($context, array $blocks = [])
    {
    }

    // line 83
    public function block_content($context, array $blocks = [])
    {
    }

    // line 92
    public function block_script_bottom($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 92,  185 => 83,  180 => 79,  174 => 78,  169 => 20,  164 => 5,  157 => 93,  155 => 92,  145 => 84,  143 => 83,  138 => 80,  135 => 79,  133 => 78,  130 => 77,  113 => 62,  109 => 60,  107 => 59,  101 => 55,  92 => 48,  90 => 47,  62 => 21,  60 => 20,  42 => 5,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>{% block title %}{% endblock %}</title>
\t\t<link href=\"public/style.css\" rel=\"stylesheet\" />
\t\t<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/png\" href=\"public/images/head_resize.png\" />
\t\t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script src=\"https://cdn.quilljs.com/1.3.6/quill.js\"></script>
  \t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/languages/go.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"public/js/Template.js\"></script>

\t\t{% block script %}{% endblock %}


    </head>
\t<body>


\t\t<header id=\"header\">

\t\t<a href=\"index.php\" id=\"title\"><img src=\"public/images/resize_logo.png\" alt=\"logo\" />
      <div id=\"principalTitle\">
        <div id=\"ecran\" class\"ecranTitle\">L'ecran</div><div id=\"du\" class=\"ecranTitle\">du</div><div id=\"mj\" class=\"ecranTitle\">MJ</div>
      </div></a>
\t<nav>
\t\t<ul id=\"menu\">
\t\t\t<li class= \"links\" id=\"gamesMenu\">
        <a href=\"?action=jouer\">
          <span class=\"icon\"><i class=\"fas fa-dice\"></i></span>
          <span>Mes parties</span>
        </a>
      </li>
      <li class= \"links\" id=\"allSongsMenu\">
        <a href=\"?action=allsongs\">
          <span class=\"icon\"><i class=\"fas fa-microphone-alt\"></i></span>
          <span>Tous les sons</span>
        </a>
      </li>
\t\t\t{% if id is not null %}
\t\t\t<li class=\"links\" id=\"accountMenu\">
        <a href=\"?action=account\">
          <span class)\"icon\"><i class=\"fas fa-user-circle\"></i>
          </span><span>Mon compte</span>
        </a>
      </li>
\t\t\t{% endif %}
\t\t</ul>
\t</nav>

\t<div id=\"connexion\">
\t{% if id is not null %}
\t<a href=\"index?action=logout\">Déconnexion</a>
\t{% else %}
  <a href=\"index?action=login\">Inscription</a>

  <div id=\"loginBox\">
  \t<button class=\"gestionButton\" data-form=\"loginForm\" id=\"loginButton\">Connexion<span class=\"caret\"><i class=\"fas fa-angle-down\"></i></span></button>
    <form id=\"loginForm\" class='hide' action=\"index.php?action=authenticize\" method=\"post\" >
    \t\t<label for=\"identifiant\">Identifiant</label>
    \t\t<input type=\"text\" name=\"identifiant\" id=\"identifiant\" /><br />
    \t\t<label for=\"password\">Mot de passe</label>
    \t\t<input type=\"password\" name=\"password\" id=\"password\" /><br />
    \t\t<input type=\"submit\" value = \"Envoyer\"/>
        <span><a href=\"?action=login\">Mot de passe oublié ?</a></span>
    \t</form>
  </div>

\t{% endif %}
\t</div>
\t\t\t{% block message %}{{ message }}{% endblock %}
\t\t\t\t{% block header %}{% endblock %}
\t\t</header>

\t\t <div id=\"content\">
\t\t\t{% block content %}{% endblock %}
\t\t</div>

\t\t<footer>

\t\t</footer>


<script src=\"public/js/main.js\"></script>
{% block script_bottom %}{% endblock %}

\t</body>
</html>
", "template.twig", "C:\\wamp64\\www\\appliJDR\\src\\view\\template.twig");
    }
}
