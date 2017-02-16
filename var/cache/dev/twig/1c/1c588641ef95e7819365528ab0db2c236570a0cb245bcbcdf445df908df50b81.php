<?php

/* @Blog/categoria/index.html.twig */
class __TwigTemplate_33bcb7fc35c665edc6deb9ae81e22921140bb94b1f0e43ce8453cf11e902cb84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "@Blog/categoria/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49ab48e675cac2f064accabd1d24a619bd949404c51121e3627e159120c756ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ab48e675cac2f064accabd1d24a619bd949404c51121e3627e159120c756ae->enter($__internal_49ab48e675cac2f064accabd1d24a619bd949404c51121e3627e159120c756ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/categoria/index.html.twig"));

        $__internal_e38d7df4b4006b485d513302925bc0d14c8982ef0302b60dde56173c0f33835b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38d7df4b4006b485d513302925bc0d14c8982ef0302b60dde56173c0f33835b->enter($__internal_e38d7df4b4006b485d513302925bc0d14c8982ef0302b60dde56173c0f33835b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/categoria/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49ab48e675cac2f064accabd1d24a619bd949404c51121e3627e159120c756ae->leave($__internal_49ab48e675cac2f064accabd1d24a619bd949404c51121e3627e159120c756ae_prof);

        
        $__internal_e38d7df4b4006b485d513302925bc0d14c8982ef0302b60dde56173c0f33835b->leave($__internal_e38d7df4b4006b485d513302925bc0d14c8982ef0302b60dde56173c0f33835b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_db3754059a474f810f25a6e58cc8d0be230ea524d85d4b4c5e69d6dd9b90afcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3754059a474f810f25a6e58cc8d0be230ea524d85d4b4c5e69d6dd9b90afcf->enter($__internal_db3754059a474f810f25a6e58cc8d0be230ea524d85d4b4c5e69d6dd9b90afcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_86dbde243c46e735d31462ca86c09b3e1ba42d8fc65307cbafae4b1a54d98802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86dbde243c46e735d31462ca86c09b3e1ba42d8fc65307cbafae4b1a54d98802->enter($__internal_86dbde243c46e735d31462ca86c09b3e1ba42d8fc65307cbafae4b1a54d98802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"col-lg-6\">
\t<h2>Todas las categorias</h2>
\t<hr>
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_add_categoria");
        echo "\" class=\"btn btn-success\">Añadir categoria</a>
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 9
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 10
                echo "\t\t\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo " </div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t\t<table class=\"table table-bordered\">
\t\t\t<thead>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Descripción</th>
\t\t\t\t<th>Eliminar</th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
        foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
            // line 21
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["categoria"], "descripcion", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 25
            echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete_categoria", array("id" => $this->getAttribute($context["categoria"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></a>
\t\t\t\t\t\t<a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_update_categoria", array("id" => $this->getAttribute($context["categoria"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
\t\t\t\t\t</td>
\t\t\t\t\t";
            // line 30
            echo "\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div class=\"clearfix\"></div>
";
        
        $__internal_86dbde243c46e735d31462ca86c09b3e1ba42d8fc65307cbafae4b1a54d98802->leave($__internal_86dbde243c46e735d31462ca86c09b3e1ba42d8fc65307cbafae4b1a54d98802_prof);

        
        $__internal_db3754059a474f810f25a6e58cc8d0be230ea524d85d4b4c5e69d6dd9b90afcf->leave($__internal_db3754059a474f810f25a6e58cc8d0be230ea524d85d4b4c5e69d6dd9b90afcf_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/categoria/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 32,  120 => 30,  115 => 27,  111 => 26,  108 => 25,  104 => 23,  100 => 22,  97 => 21,  93 => 20,  84 => 13,  78 => 12,  67 => 10,  62 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BlogBundle::layout.html.twig' %}

{% block content %}
\t<div class=\"col-lg-6\">
\t<h2>Todas las categorias</h2>
\t<hr>
\t<a href=\"{{path(\"blog_add_categoria\")}}\" class=\"btn btn-success\">Añadir categoria</a>
\t{% for type, messages in app.session.flashbag().all() %}
\t\t{% for message in messages %}
\t\t\t<div class=\"alert alert-{{type}}\"> {{message}} </div>
\t\t{% endfor %}
\t{% endfor %}
\t\t<table class=\"table table-bordered\">
\t\t\t<thead>
\t\t\t\t<th>Nombre</th>
\t\t\t\t<th>Descripción</th>
\t\t\t\t<th>Eliminar</th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for categoria in categorias %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{categoria.nombre}}</td>
\t\t\t\t\t<td>{{categoria.descripcion}}</td>
\t\t\t\t\t{# if categoria.entradaCategoria|length == 0 #}
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{path(\"blog_delete_categoria\", {\"id\":categoria.id}) }}\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></a>
\t\t\t\t\t\t<a href=\"{{path(\"blog_update_categoria\", {\"id\":categoria.id}) }}\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
\t\t\t\t\t</td>
\t\t\t\t\t{# endif #}
\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div class=\"clearfix\"></div>
{% endblock %}", "@Blog/categoria/index.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle\\Resources\\views\\categoria\\index.html.twig");
    }
}
