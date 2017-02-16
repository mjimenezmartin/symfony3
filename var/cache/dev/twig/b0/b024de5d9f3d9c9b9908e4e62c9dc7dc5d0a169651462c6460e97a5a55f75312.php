<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_ece01d796cb16ebaaf10051a18912e97cc4c807b97fbacc811262e6bdb8157d9 extends Twig_Template
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
        $__internal_294d14d6063603dbce03d7df77808fe2446ea0e00a6f75a9b54a2675efc1c3a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_294d14d6063603dbce03d7df77808fe2446ea0e00a6f75a9b54a2675efc1c3a0->enter($__internal_294d14d6063603dbce03d7df77808fe2446ea0e00a6f75a9b54a2675efc1c3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $__internal_fab51c48c239c8c1a06e4b852a5b9c4946b61d560c60eb71bb78d508367c977e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fab51c48c239c8c1a06e4b852a5b9c4946b61d560c60eb71bb78d508367c977e->enter($__internal_fab51c48c239c8c1a06e4b852a5b9c4946b61d560c60eb71bb78d508367c977e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

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
        
        $__internal_294d14d6063603dbce03d7df77808fe2446ea0e00a6f75a9b54a2675efc1c3a0->leave($__internal_294d14d6063603dbce03d7df77808fe2446ea0e00a6f75a9b54a2675efc1c3a0_prof);

        
        $__internal_fab51c48c239c8c1a06e4b852a5b9c4946b61d560c60eb71bb78d508367c977e->leave($__internal_fab51c48c239c8c1a06e4b852a5b9c4946b61d560c60eb71bb78d508367c977e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c164feb8838a06a4ebe9fd4a45fe47fed0ee9a4641ee42c1396521b5a0e25c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c164feb8838a06a4ebe9fd4a45fe47fed0ee9a4641ee42c1396521b5a0e25c2b->enter($__internal_c164feb8838a06a4ebe9fd4a45fe47fed0ee9a4641ee42c1396521b5a0e25c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_878cf3d8fd623f996bb91590c13b013d34fb965ba48801ef3280cf8ecc5c551d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878cf3d8fd623f996bb91590c13b013d34fb965ba48801ef3280cf8ecc5c551d->enter($__internal_878cf3d8fd623f996bb91590c13b013d34fb965ba48801ef3280cf8ecc5c551d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Blog con Symfony3 ";
        
        $__internal_878cf3d8fd623f996bb91590c13b013d34fb965ba48801ef3280cf8ecc5c551d->leave($__internal_878cf3d8fd623f996bb91590c13b013d34fb965ba48801ef3280cf8ecc5c551d_prof);

        
        $__internal_c164feb8838a06a4ebe9fd4a45fe47fed0ee9a4641ee42c1396521b5a0e25c2b->leave($__internal_c164feb8838a06a4ebe9fd4a45fe47fed0ee9a4641ee42c1396521b5a0e25c2b_prof);

    }

    // line 32
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a8236bf28ce91cf8b6306d67ba4573df5b8c77db2515eac477c20e89d8598c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8236bf28ce91cf8b6306d67ba4573df5b8c77db2515eac477c20e89d8598c8c->enter($__internal_a8236bf28ce91cf8b6306d67ba4573df5b8c77db2515eac477c20e89d8598c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b1abe938afc50e7dd36f92271c2778366dff2bb953efbde3aac89f190fbcac38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1abe938afc50e7dd36f92271c2778366dff2bb953efbde3aac89f190fbcac38->enter($__internal_b1abe938afc50e7dd36f92271c2778366dff2bb953efbde3aac89f190fbcac38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 33
        echo "\t\t      \t<li class=\"active dropdown\">
\t\t      \t\t";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('BlogBundle\Extensions\Twig\Helpers')->getCategorias(), "html", null, true);
        echo "
\t\t      \t</li>
\t\t        <li><a href=\"#\">Link</a></li>
\t\t      \t";
        
        $__internal_b1abe938afc50e7dd36f92271c2778366dff2bb953efbde3aac89f190fbcac38->leave($__internal_b1abe938afc50e7dd36f92271c2778366dff2bb953efbde3aac89f190fbcac38_prof);

        
        $__internal_a8236bf28ce91cf8b6306d67ba4573df5b8c77db2515eac477c20e89d8598c8c->leave($__internal_a8236bf28ce91cf8b6306d67ba4573df5b8c77db2515eac477c20e89d8598c8c_prof);

    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        $__internal_f9967d461874f6ed5f9607716a8dac84dd5ef1aff68fc37eb06e5dc52e9c27dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9967d461874f6ed5f9607716a8dac84dd5ef1aff68fc37eb06e5dc52e9c27dc->enter($__internal_f9967d461874f6ed5f9607716a8dac84dd5ef1aff68fc37eb06e5dc52e9c27dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c6464d49f82f1dc56b4022d612347fb18f47790be8589648387390b8284b9e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6464d49f82f1dc56b4022d612347fb18f47790be8589648387390b8284b9e2a->enter($__internal_c6464d49f82f1dc56b4022d612347fb18f47790be8589648387390b8284b9e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 67
        echo "\t\t\tCONTENT DEFAULT
\t\t";
        
        $__internal_c6464d49f82f1dc56b4022d612347fb18f47790be8589648387390b8284b9e2a->leave($__internal_c6464d49f82f1dc56b4022d612347fb18f47790be8589648387390b8284b9e2a_prof);

        
        $__internal_f9967d461874f6ed5f9607716a8dac84dd5ef1aff68fc37eb06e5dc52e9c27dc->leave($__internal_f9967d461874f6ed5f9607716a8dac84dd5ef1aff68fc37eb06e5dc52e9c27dc_prof);

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
        return array (  194 => 67,  185 => 66,  171 => 34,  168 => 33,  159 => 32,  141 => 7,  125 => 69,  123 => 66,  112 => 57,  107 => 55,  102 => 53,  97 => 52,  91 => 50,  89 => 49,  83 => 45,  77 => 43,  75 => 42,  69 => 38,  67 => 32,  58 => 26,  38 => 8,  36 => 7,  28 => 1,);
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
