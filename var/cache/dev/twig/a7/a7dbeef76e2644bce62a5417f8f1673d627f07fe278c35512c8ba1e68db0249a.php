<?php

/* BlogBundle:etiqueta:index.html.twig */
class __TwigTemplate_143165b455b9859d585a99a18dc6ae250bdb314c9a6e49d4267f4e3225a1deb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:etiqueta:index.html.twig", 1);
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
        $__internal_0da80fb2adbb1140f63782aea146d42744a096f686eaac3b6d0979c172092271 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0da80fb2adbb1140f63782aea146d42744a096f686eaac3b6d0979c172092271->enter($__internal_0da80fb2adbb1140f63782aea146d42744a096f686eaac3b6d0979c172092271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:etiqueta:index.html.twig"));

        $__internal_8c10cb4accae8b91d980d976606c69c215a69d37593c3d7dfbc2b20c69a6c05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c10cb4accae8b91d980d976606c69c215a69d37593c3d7dfbc2b20c69a6c05e->enter($__internal_8c10cb4accae8b91d980d976606c69c215a69d37593c3d7dfbc2b20c69a6c05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:etiqueta:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0da80fb2adbb1140f63782aea146d42744a096f686eaac3b6d0979c172092271->leave($__internal_0da80fb2adbb1140f63782aea146d42744a096f686eaac3b6d0979c172092271_prof);

        
        $__internal_8c10cb4accae8b91d980d976606c69c215a69d37593c3d7dfbc2b20c69a6c05e->leave($__internal_8c10cb4accae8b91d980d976606c69c215a69d37593c3d7dfbc2b20c69a6c05e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_3edca1f79ebddc6da40798700b27084d027af29e7ec31b4d93ec315dc7225943 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3edca1f79ebddc6da40798700b27084d027af29e7ec31b4d93ec315dc7225943->enter($__internal_3edca1f79ebddc6da40798700b27084d027af29e7ec31b4d93ec315dc7225943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b936dd22aaf48c1203de90c8aff71771a28b8de747256b206f18a4d634625faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b936dd22aaf48c1203de90c8aff71771a28b8de747256b206f18a4d634625faa->enter($__internal_b936dd22aaf48c1203de90c8aff71771a28b8de747256b206f18a4d634625faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b936dd22aaf48c1203de90c8aff71771a28b8de747256b206f18a4d634625faa->leave($__internal_b936dd22aaf48c1203de90c8aff71771a28b8de747256b206f18a4d634625faa_prof);

        
        $__internal_3edca1f79ebddc6da40798700b27084d027af29e7ec31b4d93ec315dc7225943->leave($__internal_3edca1f79ebddc6da40798700b27084d027af29e7ec31b4d93ec315dc7225943_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:etiqueta:index.html.twig";
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
{% endblock %}", "BlogBundle:etiqueta:index.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/etiqueta/index.html.twig");
    }
}
