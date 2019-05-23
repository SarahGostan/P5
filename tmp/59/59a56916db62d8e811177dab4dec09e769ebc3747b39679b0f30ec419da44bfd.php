<?php

/* template.twig */
class __TwigTemplate_36f0342af531660fe366aafb7d6d4007ab594e9a328c1f3a1f61d7607b67982a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'script' => array($this, 'block_script'),
            'message' => array($this, 'block_message'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'script_bottom' => array($this, 'block_script_bottom'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
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
          <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/png\" href=\"public/images/head_resize.png\" />
\t\t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script src=\"https://cdn.quilljs.com/1.3.6/quill.js\"></script>
  \t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/languages/go.min.js\"></script>


\t\t";
        // line 18
        $this->displayBlock('script', $context, $blocks);
        // line 19
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
        // line 42
        if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 43
            echo "\t\t\t<li class=\"links\" id=\"accountMenu\">
        <a href=\"?action=account\">
          <span class)\"icon\"><i class=\"fas fa-user-circle\"></i>
          </span><span>Mon compte</span>
        </a>
      </li>
\t\t\t";
        }
        // line 50
        echo "\t\t</ul>
\t</nav>

\t<div id=\"connexion\">
\t";
        // line 54
        if ( !(null === (isset($context["id"]) ? $context["id"] : null))) {
            // line 55
            echo "\t<a href=\"index?action=logout\">Déconnexion</a>
\t";
        } else {
            // line 57
            echo "\t<a href=\"index?action=login\">Connexion</a>
\t<a href=\"index?action=inscription\">Inscription</a>

\t";
        }
        // line 61
        echo "\t</div>
\t\t\t";
        // line 62
        $this->displayBlock('message', $context, $blocks);
        // line 63
        echo "\t\t\t\t";
        $this->displayBlock('header', $context, $blocks);
        // line 64
        echo "\t\t</header>

\t\t <div id=\"content\">
\t\t\t";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "\t\t</div>

\t\t<footer>

\t\t</footer>


<script src=\"public/js/main.js\"></script>
";
        // line 76
        $this->displayBlock('script_bottom', $context, $blocks);
        // line 77
        echo "
\t</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 18
    public function block_script($context, array $blocks = array())
    {
    }

    // line 62
    public function block_message($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
    }

    // line 63
    public function block_header($context, array $blocks = array())
    {
    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
    }

    // line 76
    public function block_script_bottom($context, array $blocks = array())
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
        return array (  163 => 76,  158 => 67,  153 => 63,  147 => 62,  142 => 18,  137 => 5,  130 => 77,  128 => 76,  118 => 68,  116 => 67,  111 => 64,  108 => 63,  106 => 62,  103 => 61,  97 => 57,  93 => 55,  91 => 54,  85 => 50,  76 => 43,  74 => 42,  49 => 19,  47 => 18,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>{% block title %}{% endblock %}</title>
        <link href=\"public/style.css\" rel=\"stylesheet\" />
          <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
        <link href=\"https://cdn.quilljs.com/1.3.6/quill.snow.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.8.1/css/all.css\" integrity=\"sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf\" crossorigin=\"anonymous\">
        <link rel=\"icon\" type=\"image/png\" href=\"public/images/head_resize.png\" />
\t\t<script type=\"text/javascript\" src=\"https://code.jquery.com/jquery-3.3.1.min.js\"></script>
    <script src=\"https://cdn.quilljs.com/1.3.6/quill.js\"></script>
  \t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/languages/go.min.js\"></script>


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
", "template.twig", "C:\\wamp64\\www\\appliJDR\\view\\template.twig");
    }
}
