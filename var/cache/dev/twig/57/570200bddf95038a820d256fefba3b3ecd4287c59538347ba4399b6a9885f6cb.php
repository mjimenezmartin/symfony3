<?php

/* BlogBundle:categoria:index.html.twig */
class __TwigTemplate_fe5e51981216c99fc6c76bd0003b019728c0e2080c49b3835ad0edf91f5da732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:categoria:index.html.twig", 1);
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
        $__internal_1a95cbbe0567b7adec4b37a4ce927eb975c96ec170e5dd4997e59d667d3b3573 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a95cbbe0567b7adec4b37a4ce927eb975c96ec170e5dd4997e59d667d3b3573->enter($__internal_1a95cbbe0567b7adec4b37a4ce927eb975c96ec170e5dd4997e59d667d3b3573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:categoria:index.html.twig"));

        $__internal_457c63de84dd15bf6e4d928921420979a271168e73277e8d591050a4aa58fa5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457c63de84dd15bf6e4d928921420979a271168e73277e8d591050a4aa58fa5d->enter($__internal_457c63de84dd15bf6e4d928921420979a271168e73277e8d591050a4aa58fa5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:categoria:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a95cbbe0567b7adec4b37a4ce927eb975c96ec170e5dd4997e59d667d3b3573->leave($__internal_1a95cbbe0567b7adec4b37a4ce927eb975c96ec170e5dd4997e59d667d3b3573_prof);

        
        $__internal_457c63de84dd15bf6e4d928921420979a271168e73277e8d591050a4aa58fa5d->leave($__internal_457c63de84dd15bf6e4d928921420979a271168e73277e8d591050a4aa58fa5d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a88cb34ff492b6106c3a322b382d3ff446e72983cd776386c5b10be0c5cc80c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88cb34ff492b6106c3a322b382d3ff446e72983cd776386c5b10be0c5cc80c7->enter($__internal_a88cb34ff492b6106c3a322b382d3ff446e72983cd776386c5b10be0c5cc80c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e1dfe32a261dc3d282d054e5ed4e9f525563fbfb6500779561d557f4d148b34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1dfe32a261dc3d282d054e5ed4e9f525563fbfb6500779561d557f4d148b34a->enter($__internal_e1dfe32a261dc3d282d054e5ed4e9f525563fbfb6500779561d557f4d148b34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e1dfe32a261dc3d282d054e5ed4e9f525563fbfb6500779561d557f4d148b34a->leave($__internal_e1dfe32a261dc3d282d054e5ed4e9f525563fbfb6500779561d557f4d148b34a_prof);

        
        $__internal_a88cb34ff492b6106c3a322b382d3ff446e72983cd776386c5b10be0c5cc80c7->leave($__internal_a88cb34ff492b6106c3a322b382d3ff446e72983cd776386c5b10be0c5cc80c7_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:categoria:index.html.twig";
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
{% endblock %}", "BlogBundle:categoria:index.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/categoria/index.html.twig");
    }
}
