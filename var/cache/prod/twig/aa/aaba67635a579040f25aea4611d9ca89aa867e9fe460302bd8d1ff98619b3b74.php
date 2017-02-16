<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_fcdd1c6e36f8f3d2a69b830121e1dcc58b50cdedae051415e5c58867cd88344d extends Twig_Template
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
        $__internal_9f90946c633912ec294719c995481c0bc556fff51b2c47853215a39399e376a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f90946c633912ec294719c995481c0bc556fff51b2c47853215a39399e376a2->enter($__internal_9f90946c633912ec294719c995481c0bc556fff51b2c47853215a39399e376a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

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
        // line 38
        echo "\t\t      </ul>
\t\t      
\t\t      <ul class=\"nav navbar-nav navbar-right\">
\t\t      \t<li><a href=\"#\">
\t\t      \t\t";
        // line 42
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 43
            echo "\t\t\t\t\t\tBienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
            echo "
\t\t      \t\t";
        }
        // line 45
        echo "\t\t      \t</a></li>
\t\t        <li class=\"dropdown\">
\t\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span><span class=\"caret\"></span></a>
\t\t          <ul class=\"dropdown-menu\">\t            
\t\t            ";
        // line 49
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 50
            echo "\t\t            \t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Entrar</a></li>
\t\t        \t";
        } else {
            // line 52
            echo "\t\t        \t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index_etiqueta");
            echo "\">Etiquetas</a></li>
\t\t        \t\t<li><a href=\"";
            // line 53
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index_categoria");
            echo "\">Categorias</a></li>
\t\t        \t\t<li role=\"separator\" class=\"divider\"></li>
\t\t            \t<li><a href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a></li>
\t\t            ";
        }
        // line 57
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
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "\t</section>
\t<footer>
\t\t<hr>
\t\tCurso de Symfony3
\t</footer>
</body>
</html>";
        
        $__internal_9f90946c633912ec294719c995481c0bc556fff51b2c47853215a39399e376a2->leave($__internal_9f90946c633912ec294719c995481c0bc556fff51b2c47853215a39399e376a2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d6116bceddf8c83528567cfca5249c565c4fd139cc2d63baa9790a2df2d6f5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6116bceddf8c83528567cfca5249c565c4fd139cc2d63baa9790a2df2d6f5db->enter($__internal_d6116bceddf8c83528567cfca5249c565c4fd139cc2d63baa9790a2df2d6f5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Blog con Symfony3 ";
        
        $__internal_d6116bceddf8c83528567cfca5249c565c4fd139cc2d63baa9790a2df2d6f5db->leave($__internal_d6116bceddf8c83528567cfca5249c565c4fd139cc2d63baa9790a2df2d6f5db_prof);

    }

    // line 32
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ce1b14f6d19990086968f41b3faaacf857d5196206bd83f517ab7986a3ea3bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1b14f6d19990086968f41b3faaacf857d5196206bd83f517ab7986a3ea3bf2->enter($__internal_ce1b14f6d19990086968f41b3faaacf857d5196206bd83f517ab7986a3ea3bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 33
        echo "\t\t      \t<li class=\"active dropdown\">
\t\t      \t\t";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('BlogBundle\Extensions\Twig\Helpers')->getCategorias(), "html", null, true);
        echo "
\t\t      \t</li>
\t\t        <li><a href=\"#\">Link</a></li>
\t\t      \t";
        
        $__internal_ce1b14f6d19990086968f41b3faaacf857d5196206bd83f517ab7986a3ea3bf2->leave($__internal_ce1b14f6d19990086968f41b3faaacf857d5196206bd83f517ab7986a3ea3bf2_prof);

    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        $__internal_81734dcddbbafa8f3dd6dca897fb918b0c6b05a32094e25a8a39cf9a24146559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81734dcddbbafa8f3dd6dca897fb918b0c6b05a32094e25a8a39cf9a24146559->enter($__internal_81734dcddbbafa8f3dd6dca897fb918b0c6b05a32094e25a8a39cf9a24146559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 67
        echo "\t\t\tCONTENT DEFAULT
\t\t";
        
        $__internal_81734dcddbbafa8f3dd6dca897fb918b0c6b05a32094e25a8a39cf9a24146559->leave($__internal_81734dcddbbafa8f3dd6dca897fb918b0c6b05a32094e25a8a39cf9a24146559_prof);

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
        return array (  173 => 67,  167 => 66,  156 => 34,  153 => 33,  147 => 32,  135 => 7,  122 => 69,  120 => 66,  109 => 57,  104 => 55,  99 => 53,  94 => 52,  88 => 50,  86 => 49,  80 => 45,  74 => 43,  72 => 42,  66 => 38,  64 => 32,  55 => 26,  35 => 8,  33 => 7,  25 => 1,);
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
\t\t      \t<li class=\"active dropdown\">
\t\t      \t\t{{getCategorias()}}
\t\t      \t</li>
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
