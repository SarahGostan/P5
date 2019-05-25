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
        <link href=\"public/style.css\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
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


\t\t";
        // line 20
        $this->displayBlock('script', $context, $blocks);
        // line 21
        echo "

    </head>
\t<body>


\t\t<header id=\"header\">

\t\t<a href=\"index.php\" id=\"title\"><img src=\"public/images/resize_logo.png\" alt=\"logo\" /><h1><div id=\"ecran\">L'ecran</div><div id=\"du\">du</div><div id=\"mj\">MJ</div></h1></a>
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
        // line 44
        if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 45
            echo "\t\t\t<li class=\"links\" id=\"accountMenu\">
        <a href=\"?action=account\">
          <span class)\"icon\"><i class=\"fas fa-user-circle\"></i>
          </span><span>Mon compte</span>
        </a>
      </li>
\t\t\t";
        }
        // line 52
        echo "\t\t</ul>
\t</nav>

\t<div id=\"connexion\">
\t";
        // line 56
        if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 57
            echo "\t<a href=\"index?action=logout\">Déconnexion</a>
\t";
        } else {
            // line 59
            echo "\t<a href=\"index?action=login\">Connexion</a>
\t<a href=\"index?action=inscription\">Inscription</a>

\t";
        }
        // line 63
        echo "\t</div>
\t\t\t";
        // line 64
        $this->displayBlock('message', $context, $blocks);
        // line 65
        echo "\t\t\t\t";
        $this->displayBlock('header', $context, $blocks);
        // line 66
        echo "\t\t</header>

\t\t <div id=\"content\">
\t\t\t";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "\t\t</div>

\t\t<footer>

\t\t</footer>


<script src=\"public/js/main.js\"></script>
";
        // line 78
        $this->displayBlock('script_bottom', $context, $blocks);
        // line 79
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

    // line 64
    public function block_message($context, array $blocks = [])
    {
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
    }

    // line 65
    public function block_header($context, array $blocks = [])
    {
    }

    // line 69
    public function block_content($context, array $blocks = [])
    {
    }

    // line 78
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
        return array (  176 => 78,  171 => 69,  166 => 65,  160 => 64,  155 => 20,  150 => 5,  143 => 79,  141 => 78,  131 => 70,  129 => 69,  124 => 66,  121 => 65,  119 => 64,  116 => 63,  110 => 59,  106 => 57,  104 => 56,  98 => 52,  89 => 45,  87 => 44,  62 => 21,  60 => 20,  42 => 5,  36 => 1,);
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
        <link href=\"public/style.css\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
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


\t\t{% block script %}{% endblock %}


    </head>
\t<body>


\t\t<header id=\"header\">

\t\t<a href=\"index.php\" id=\"title\"><img src=\"public/images/resize_logo.png\" alt=\"logo\" /><h1><div id=\"ecran\">L'ecran</div><div id=\"du\">du</div><div id=\"mj\">MJ</div></h1></a>
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
\t<a href=\"index?action=login\">Connexion</a>
\t<a href=\"index?action=inscription\">Inscription</a>

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
