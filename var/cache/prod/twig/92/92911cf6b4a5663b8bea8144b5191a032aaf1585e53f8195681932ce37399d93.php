<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_7be03925073f9a8b2eb3c92e99aea34ed01692ff91faa9997a45ac7b5eb6663f extends Twig_Template
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
        $__internal_8abd702432a2bb5338bb64d2f7d5481671df31a68f3fa229f07e80de35e03665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8abd702432a2bb5338bb64d2f7d5481671df31a68f3fa229f07e80de35e03665->enter($__internal_8abd702432a2bb5338bb64d2f7d5481671df31a68f3fa229f07e80de35e03665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

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
        // line 44
        echo "\t\t      </ul>
\t\t      
\t\t      <ul class=\"nav navbar-nav navbar-right\">
\t\t      \t<li><a href=\"#\">
\t\t      \t\t";
        // line 48
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 49
            echo "\t\t\t\t\t\tBienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombre", array()), "html", null, true);
            echo "
\t\t      \t\t";
        }
        // line 51
        echo "\t\t      \t</a></li>
\t\t        <li class=\"dropdown\">
\t\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span><span class=\"caret\"></span></a>
\t\t          <ul class=\"dropdown-menu\">\t            
\t\t            ";
        // line 55
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 56
            echo "\t\t            \t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
            echo "\">Entrar</a></li>
\t\t        \t";
        } else {
            // line 58
            echo "\t\t        \t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index_etiqueta");
            echo "\">Etiquetas</a></li>
\t\t        \t\t<li><a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_index_categoria");
            echo "\">Categorias</a></li>
\t\t        \t\t<li role=\"separator\" class=\"divider\"></li>
\t\t            \t<li><a href=\"";
            // line 61
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\">Salir</a></li>
\t\t            ";
        }
        // line 63
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
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 75
        echo "\t</section>
\t<footer>
\t\t<hr>
\t\tCurso de Symfony3
\t</footer>
</body>
</html>";
        
        $__internal_8abd702432a2bb5338bb64d2f7d5481671df31a68f3fa229f07e80de35e03665->leave($__internal_8abd702432a2bb5338bb64d2f7d5481671df31a68f3fa229f07e80de35e03665_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_af54a17e39a4098fdc18327c910a05a328c93c4ef9f430fa689f795a5483f306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af54a17e39a4098fdc18327c910a05a328c93c4ef9f430fa689f795a5483f306->enter($__internal_af54a17e39a4098fdc18327c910a05a328c93c4ef9f430fa689f795a5483f306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Blog con Symfony3 ";
        
        $__internal_af54a17e39a4098fdc18327c910a05a328c93c4ef9f430fa689f795a5483f306->leave($__internal_af54a17e39a4098fdc18327c910a05a328c93c4ef9f430fa689f795a5483f306_prof);

    }

    // line 32
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5091150dd3e4c684950ae1957c1c7df5d4e9f4550f3bfab0457ea00e05d6be6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5091150dd3e4c684950ae1957c1c7df5d4e9f4550f3bfab0457ea00e05d6be6->enter($__internal_b5091150dd3e4c684950ae1957c1c7df5d4e9f4550f3bfab0457ea00e05d6be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 33
        echo "\t\t      \t<li class=\"active dropdown\">
\t\t      \t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Categorias<span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">\t            
\t\t\t      \t\t";
        // line 36
        $context["categorias"] = $this->env->getExtension('BlogBundle\Extensions\Twig\Helpers')->getCategorias();
        // line 37
        echo "\t\t\t      \t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 38
            echo "\t\t\t      \t\t\t    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_see_categoria", array("id" => $this->getAttribute($context["categoria"], "id", array()))), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo " </a></li>
\t\t\t      \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t          \t</ul>
\t\t      \t</li>
\t\t        <li><a href=\"#\">Link</a></li>
\t\t      \t";
        
        $__internal_b5091150dd3e4c684950ae1957c1c7df5d4e9f4550f3bfab0457ea00e05d6be6->leave($__internal_b5091150dd3e4c684950ae1957c1c7df5d4e9f4550f3bfab0457ea00e05d6be6_prof);

    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        $__internal_0509b587038331c88020ac3c76e308528ecc7f70407fd8056282fb0203cb1f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0509b587038331c88020ac3c76e308528ecc7f70407fd8056282fb0203cb1f84->enter($__internal_0509b587038331c88020ac3c76e308528ecc7f70407fd8056282fb0203cb1f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 73
        echo "\t\t\tCONTENT DEFAULT
\t\t";
        
        $__internal_0509b587038331c88020ac3c76e308528ecc7f70407fd8056282fb0203cb1f84->leave($__internal_0509b587038331c88020ac3c76e308528ecc7f70407fd8056282fb0203cb1f84_prof);

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
        return array (  192 => 73,  186 => 72,  176 => 40,  165 => 38,  160 => 37,  158 => 36,  153 => 33,  147 => 32,  135 => 7,  122 => 75,  120 => 72,  109 => 63,  104 => 61,  99 => 59,  94 => 58,  88 => 56,  86 => 55,  80 => 51,  74 => 49,  72 => 48,  66 => 44,  64 => 32,  55 => 26,  35 => 8,  33 => 7,  25 => 1,);
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
\t\t      \t\t<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Categorias<span class=\"caret\"></span></a>
\t\t\t\t\t<ul class=\"dropdown-menu\">\t            
\t\t\t      \t\t{% set categorias = getCategorias() %}
\t\t\t      \t\t\t{% for categoria in categorias %}
\t\t\t      \t\t\t    <li><a href=\"{{path(\"blog_see_categoria\",{ \"id\": categoria.id})}}\"> {{categoria.nombre}} </a></li>
\t\t\t      \t\t\t{% endfor %}
\t\t          \t</ul>
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
