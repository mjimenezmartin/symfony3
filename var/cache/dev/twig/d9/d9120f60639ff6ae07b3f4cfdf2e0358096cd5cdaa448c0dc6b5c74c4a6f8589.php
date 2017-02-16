<?php

/* @Blog/etiqueta/index.html.twig */
class __TwigTemplate_1094c69d61161484d0824329b249cb3e79e20f020e9311fb2ccff113bd075593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "@Blog/etiqueta/index.html.twig", 1);
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
        $__internal_7cafce4fb141f932dba2ba7c8854838d3a13b63e26a7092a07b5bd5b5a46eadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cafce4fb141f932dba2ba7c8854838d3a13b63e26a7092a07b5bd5b5a46eadd->enter($__internal_7cafce4fb141f932dba2ba7c8854838d3a13b63e26a7092a07b5bd5b5a46eadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/etiqueta/index.html.twig"));

        $__internal_45a33feb0c57aaa73de94f899c6a3dcecb03b39ce2302fd5d1247b2446505ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45a33feb0c57aaa73de94f899c6a3dcecb03b39ce2302fd5d1247b2446505ada->enter($__internal_45a33feb0c57aaa73de94f899c6a3dcecb03b39ce2302fd5d1247b2446505ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/etiqueta/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cafce4fb141f932dba2ba7c8854838d3a13b63e26a7092a07b5bd5b5a46eadd->leave($__internal_7cafce4fb141f932dba2ba7c8854838d3a13b63e26a7092a07b5bd5b5a46eadd_prof);

        
        $__internal_45a33feb0c57aaa73de94f899c6a3dcecb03b39ce2302fd5d1247b2446505ada->leave($__internal_45a33feb0c57aaa73de94f899c6a3dcecb03b39ce2302fd5d1247b2446505ada_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_99e6e5f7a53aba28244e213a5b2384ebf8768be7020b587835e06a51a26ef34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99e6e5f7a53aba28244e213a5b2384ebf8768be7020b587835e06a51a26ef34e->enter($__internal_99e6e5f7a53aba28244e213a5b2384ebf8768be7020b587835e06a51a26ef34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7db91d5f602699f81133bd42eb677ac6172c90597b33282e34586590f7beade5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db91d5f602699f81133bd42eb677ac6172c90597b33282e34586590f7beade5->enter($__internal_7db91d5f602699f81133bd42eb677ac6172c90597b33282e34586590f7beade5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"col-lg-6\">
\t<h2>Todas las etiquetas</h2>
\t<hr>
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_add_etiqueta");
        echo "\" class=\"btn btn-success\">Añadir etiqueta</a>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["etiquetas"]) ? $context["etiquetas"] : $this->getContext($context, "etiquetas")));
        foreach ($context['_seq'] as $context["_key"] => $context["etiqueta"]) {
            // line 21
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["etiqueta"], "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["etiqueta"], "descripcion", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t";
            // line 25
            echo "\t\t\t\t\t<td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete_etiqueta", array("id" => $this->getAttribute($context["etiqueta"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></a></td>
\t\t\t\t\t";
            // line 27
            echo "\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiqueta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div class=\"clearfix\"></div>
";
        
        $__internal_7db91d5f602699f81133bd42eb677ac6172c90597b33282e34586590f7beade5->leave($__internal_7db91d5f602699f81133bd42eb677ac6172c90597b33282e34586590f7beade5_prof);

        
        $__internal_99e6e5f7a53aba28244e213a5b2384ebf8768be7020b587835e06a51a26ef34e->leave($__internal_99e6e5f7a53aba28244e213a5b2384ebf8768be7020b587835e06a51a26ef34e_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/etiqueta/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 29,  113 => 27,  108 => 25,  104 => 23,  100 => 22,  97 => 21,  93 => 20,  84 => 13,  78 => 12,  67 => 10,  62 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
\t<h2>Todas las etiquetas</h2>
\t<hr>
\t<a href=\"{{path(\"blog_add_etiqueta\")}}\" class=\"btn btn-success\">Añadir etiqueta</a>
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
\t\t\t\t{% for etiqueta in etiquetas %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{etiqueta.nombre}}</td>
\t\t\t\t\t<td>{{etiqueta.descripcion}}</td>
\t\t\t\t\t{# if etiqueta.entradaEtiqueta|length == 0 #}
\t\t\t\t\t<td><a href=\"{{path(\"blog_delete_etiqueta\", {\"id\":etiqueta.id}) }}\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></a></td>
\t\t\t\t\t{# endif #}
\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div class=\"clearfix\"></div>
{% endblock %}", "@Blog/etiqueta/index.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle\\Resources\\views\\etiqueta\\index.html.twig");
    }
}
