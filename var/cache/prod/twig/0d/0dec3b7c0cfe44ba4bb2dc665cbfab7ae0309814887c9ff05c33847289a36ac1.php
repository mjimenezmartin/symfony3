<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_71af07c1a0a09464f7027192f32ca7c8031452d23aa9689cdfd9f353b72d5155 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_450ee7064c643815e59bbc4d250766de80e9b8d660afe8af1fa505b4051ebdb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450ee7064c643815e59bbc4d250766de80e9b8d660afe8af1fa505b4051ebdb8->enter($__internal_450ee7064c643815e59bbc4d250766de80e9b8d660afe8af1fa505b4051ebdb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>
\t\t";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t</title>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t
</head>
<body>
\t<header>
\t\t<nav class=\"navbar navbar-default\">
\t\t  <div class=\"container-fluid\">
\t\t    <!-- Brand and toggle get grouped for better mobile display -->
\t\t    <div class=\"navbar-header\">
\t\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t        <span class=\"sr-only\">Toggle navigation</span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t      </button>
\t\t      <a class=\"navbar-brand\" href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage");
        echo "\">Blog Symfony3!!</a>
\t\t    </div>

\t\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t      <ul class=\"nav navbar-nav\">
\t\t      \t";
        // line 32
        $this->displayBlock('menu', $context, $blocks);
        // line 47
        echo "\t\t      </ul>
\t\t      
\t\t      <ul class=\"nav navbar-nav navbar-right\">
\t\t      \t<li><a href=\"#\">
\t\t      \t\t";
        // line 51
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 52
            echo "\t\t\t\t\t\tBienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
            echo "
\t\t      \t\t";
        }
        // line 54
        echo "\t\t      \t</a></li>
\t\t        <li class=\"dropdown\">
\t\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span><span class=\"caret\"></span></a>
\t\t          <ul class=\"dropdown-menu\">\t            
\t\t            ";
        // line 58
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 59
            echo "\t\t            \t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Entrar</a></li>
\t\t        \t";
        } else {
            // line 61
            echo "\t\t        \t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index_etiqueta");
            echo "\">Etiquetas</a></li>
\t\t        \t\t<li><a href=\"";
            // line 62
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index_categoria");
            echo "\">Categorias</a></li>
\t\t        \t\t<li role=\"separator\" class=\"divider\"></li>
\t\t            \t<li><a href=\"";
            // line 64
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a></li>
\t\t            ";
        }
        // line 66
        echo "\t\t            <li><a href=\"#\">Ayuda</a></li>
\t\t          </ul>
\t\t        </li>
\t\t      </ul>
\t\t    </div><!-- /.navbar-collapse -->
\t\t  </div><!-- /.container-fluid -->
\t\t</nav>
\t</header>
\t<section id=\"content\">
\t\t";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "\t</section>
\t<footer>
\t\t<hr>
\t\tCurso de Symfony3
\t</footer>
</body>
</html>";
        
        $__internal_450ee7064c643815e59bbc4d250766de80e9b8d660afe8af1fa505b4051ebdb8->leave($__internal_450ee7064c643815e59bbc4d250766de80e9b8d660afe8af1fa505b4051ebdb8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb1e08bcd923cf00f94b293f818ce866542c86e106dce7562f25ed3b30698517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1e08bcd923cf00f94b293f818ce866542c86e106dce7562f25ed3b30698517->enter($__internal_cb1e08bcd923cf00f94b293f818ce866542c86e106dce7562f25ed3b30698517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Blog con Symfony3 ";
        
        $__internal_cb1e08bcd923cf00f94b293f818ce866542c86e106dce7562f25ed3b30698517->leave($__internal_cb1e08bcd923cf00f94b293f818ce866542c86e106dce7562f25ed3b30698517_prof);

    }

    // line 32
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8247db9a85d20ca46ecf76603cb71cbd6e6c2127c6f430c5195b5c25e93aafb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8247db9a85d20ca46ecf76603cb71cbd6e6c2127c6f430c5195b5c25e93aafb->enter($__internal_a8247db9a85d20ca46ecf76603cb71cbd6e6c2127c6f430c5195b5c25e93aafb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 33
        echo "\t\t      \t<li class=\"active\"><a href=\"#\">
\t\t      \t\t\t\t<div class=\"dropdown open\">
\t\t      \t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t      \t\t\t\t\t\tDropdown
\t\t      \t\t\t\t\t</button>
\t\t      \t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
\t\t      \t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t      \t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t      \t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t      \t\t\t\t\t</div>
\t\t      \t\t\t\t</div>
\t\t      \t</a></li>
\t\t        <li><a href=\"#\">Link</a></li>
\t\t      \t";
        
        $__internal_a8247db9a85d20ca46ecf76603cb71cbd6e6c2127c6f430c5195b5c25e93aafb->leave($__internal_a8247db9a85d20ca46ecf76603cb71cbd6e6c2127c6f430c5195b5c25e93aafb_prof);

    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        $__internal_466222fad7740a82e5535e192830946006d5741f2e8c332d59c8e96e53011471 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_466222fad7740a82e5535e192830946006d5741f2e8c332d59c8e96e53011471->enter($__internal_466222fad7740a82e5535e192830946006d5741f2e8c332d59c8e96e53011471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 76
        echo "\t\t\tCONTENT DEFAULT
\t\t";
        
        $__internal_466222fad7740a82e5535e192830946006d5741f2e8c332d59c8e96e53011471->leave($__internal_466222fad7740a82e5535e192830946006d5741f2e8c332d59c8e96e53011471_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 76,  173 => 75,  153 => 33,  147 => 32,  135 => 7,  122 => 78,  120 => 75,  109 => 66,  104 => 64,  99 => 62,  94 => 61,  88 => 59,  86 => 58,  80 => 54,  74 => 52,  72 => 51,  66 => 47,  64 => 32,  55 => 26,  35 => 8,  33 => 7,  25 => 1,);
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
<html lang=\"es\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>
\t\t{% block title %} Blog con Symfony3 {% endblock %}
\t</title>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js\"></script>
\t<link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t
</head>
<body>
\t<header>
\t\t<nav class=\"navbar navbar-default\">
\t\t  <div class=\"container-fluid\">
\t\t    <!-- Brand and toggle get grouped for better mobile display -->
\t\t    <div class=\"navbar-header\">
\t\t      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t        <span class=\"sr-only\">Toggle navigation</span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t        <span class=\"icon-bar\"></span>
\t\t      </button>
\t\t      <a class=\"navbar-brand\" href=\"{{path(\"blog_homepage\")}}\">Blog Symfony3!!</a>
\t\t    </div>

\t\t    <!-- Collect the nav links, forms, and other content for toggling -->
\t\t    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
\t\t      <ul class=\"nav navbar-nav\">
\t\t      \t{% block menu %}
\t\t      \t<li class=\"active\"><a href=\"#\">
\t\t      \t\t\t\t<div class=\"dropdown open\">
\t\t      \t\t\t\t\t<button class=\"btn btn-secondary dropdown-toggle\" type=\"button\" id=\"dropdownMenu1\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t      \t\t\t\t\t\tDropdown
\t\t      \t\t\t\t\t</button>
\t\t      \t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenu1\">
\t\t      \t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t      \t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t      \t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t      \t\t\t\t\t</div>
\t\t      \t\t\t\t</div>
\t\t      \t</a></li>
\t\t        <li><a href=\"#\">Link</a></li>
\t\t      \t{% endblock %}
\t\t      </ul>
\t\t      
\t\t      <ul class=\"nav navbar-nav navbar-right\">
\t\t      \t<li><a href=\"#\">
\t\t      \t\t{% if app.user != null %}
\t\t\t\t\t\tBienvenido, {{ app.user.nombre}}
\t\t      \t\t{% endif %}
\t\t      \t</a></li>
\t\t        <li class=\"dropdown\">
\t\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span><span class=\"caret\"></span></a>
\t\t          <ul class=\"dropdown-menu\">\t            
\t\t            {% if app.user == null %}
\t\t            \t<li><a href=\"{{path(\"login\")}}\">Entrar</a></li>
\t\t        \t{% else %}
\t\t        \t\t<li><a href=\"{{path(\"blog_index_etiqueta\")}}\">Etiquetas</a></li>
\t\t        \t\t<li><a href=\"{{path(\"blog_index_categoria\")}}\">Categorias</a></li>
\t\t        \t\t<li role=\"separator\" class=\"divider\"></li>
\t\t            \t<li><a href=\"{{path(\"logout\")}}\">Salir</a></li>
\t\t            {% endif %}
\t\t            <li><a href=\"#\">Ayuda</a></li>
\t\t          </ul>
\t\t        </li>
\t\t      </ul>
\t\t    </div><!-- /.navbar-collapse -->
\t\t  </div><!-- /.container-fluid -->
\t\t</nav>
\t</header>
\t<section id=\"content\">
\t\t{% block content %}
\t\t\tCONTENT DEFAULT
\t\t{% endblock %}
\t</section>
\t<footer>
\t\t<hr>
\t\tCurso de Symfony3
\t</footer>
</body>
</html>", "BlogBundle::layout.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/layout.html.twig");
    }
}
