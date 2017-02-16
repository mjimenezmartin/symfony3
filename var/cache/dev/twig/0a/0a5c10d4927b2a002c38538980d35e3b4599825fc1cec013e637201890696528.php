<?php

/* @Blog/entrada/index.html.twig */
class __TwigTemplate_737602f9e408333c32311c733c39c7147b3b77188bd6ed97bcb2a38c2e172b6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "@Blog/entrada/index.html.twig", 1);
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
        $__internal_a00ab1263d421d0afdae17c941f3af0a7caa4c17701513fb4fa27493d87ce691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00ab1263d421d0afdae17c941f3af0a7caa4c17701513fb4fa27493d87ce691->enter($__internal_a00ab1263d421d0afdae17c941f3af0a7caa4c17701513fb4fa27493d87ce691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/entrada/index.html.twig"));

        $__internal_cf20f5ee6d22d5b48a68b80bce7499d553592c6690fc070b1be5c675ca27e4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf20f5ee6d22d5b48a68b80bce7499d553592c6690fc070b1be5c675ca27e4b2->enter($__internal_cf20f5ee6d22d5b48a68b80bce7499d553592c6690fc070b1be5c675ca27e4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/entrada/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a00ab1263d421d0afdae17c941f3af0a7caa4c17701513fb4fa27493d87ce691->leave($__internal_a00ab1263d421d0afdae17c941f3af0a7caa4c17701513fb4fa27493d87ce691_prof);

        
        $__internal_cf20f5ee6d22d5b48a68b80bce7499d553592c6690fc070b1be5c675ca27e4b2->leave($__internal_cf20f5ee6d22d5b48a68b80bce7499d553592c6690fc070b1be5c675ca27e4b2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0c8157277b5af7ce419250e35eacb07020e33e535f1529ff3518dcad91b4cc37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c8157277b5af7ce419250e35eacb07020e33e535f1529ff3518dcad91b4cc37->enter($__internal_0c8157277b5af7ce419250e35eacb07020e33e535f1529ff3518dcad91b4cc37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_08216e4941fb9879bf3c08ac17e40b6bc3360d456aacc3990ab2d8036b7e7b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08216e4941fb9879bf3c08ac17e40b6bc3360d456aacc3990ab2d8036b7e7b81->enter($__internal_08216e4941fb9879bf3c08ac17e40b6bc3360d456aacc3990ab2d8036b7e7b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t<div class=\"col-lg-12\">
\t<h2>Todas las entradas</h2>
\t<hr>
\t<a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_add_entrada");
        echo "\" class=\"btn btn-success\">Añadir entrada</a>
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
\t\t\t\t<th>Imagen</th>
\t\t\t\t<th>Título</th>
\t\t\t\t<th>Contenido</th>
\t\t\t\t<th>Categoría</th>
\t\t\t\t<th>Etiquetas</th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entradas"]) ? $context["entradas"] : $this->getContext($context, "entradas")));
        foreach ($context['_seq'] as $context["_key"] => $context["entrada"]) {
            // line 23
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute($context["entrada"], "image", array()))), "html", null, true);
            echo "\" alt=\"Imagen no disponible\" style=\"max-width: 50px;\"></td>
\t\t\t\t\t<td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrada"], "titulo", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entrada"], "contenido", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entrada"], "categoria", array()), "nombre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entrada"], "entradaEtiqueta", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["etiqueta_repo"]) {
                // line 30
                echo "\t\t\t\t\t\t    ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["etiqueta_repo"], "etiqueta", array()), "nombre", array()), "html", null, true);
                echo " <br>
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['etiqueta_repo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t\t\t\t\t</td>
\t\t\t\t\t";
            // line 34
            echo "\t\t\t\t\t";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["entrada"], "usuario", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
                // line 35
                echo "\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete_entrada", array("id" => $this->getAttribute($context["entrada"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></a>
\t\t\t\t\t\t<a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_update_entrada", array("id" => $this->getAttribute($context["entrada"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 40
            echo "\t\t\t\t\t";
            // line 41
            echo "\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t</tbody>
\t\t</table>
\t\t";
        // line 45
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) > 1)) {
            // line 46
            echo "\t\t\t";
            $context["page"] = ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1);
            // line 47
            echo "\t\t";
        }
        // line 48
        echo "\t\t<ul class=\"pagination\">
\t\t\t<li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\">&laquo;</a></li>
\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 51
            echo "\t\t\t    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage", array("page" => $context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t";
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) < (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
            // line 54
            echo "\t\t\t";
            $context["page"] = ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) + 1);
            // line 55
            echo "\t\t";
        }
        // line 56
        echo "\t\t\t<li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_homepage", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\">&raquo;</a></li>
\t\t</ul>
\t</div>
\t<div class=\"clearfix\"></div>
";
        
        $__internal_08216e4941fb9879bf3c08ac17e40b6bc3360d456aacc3990ab2d8036b7e7b81->leave($__internal_08216e4941fb9879bf3c08ac17e40b6bc3360d456aacc3990ab2d8036b7e7b81_prof);

        
        $__internal_0c8157277b5af7ce419250e35eacb07020e33e535f1529ff3518dcad91b4cc37->leave($__internal_0c8157277b5af7ce419250e35eacb07020e33e535f1529ff3518dcad91b4cc37_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/entrada/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 56,  200 => 55,  197 => 54,  194 => 53,  183 => 51,  179 => 50,  175 => 49,  172 => 48,  169 => 47,  166 => 46,  164 => 45,  160 => 43,  153 => 41,  151 => 40,  145 => 37,  141 => 36,  138 => 35,  135 => 34,  132 => 32,  123 => 30,  119 => 29,  114 => 27,  110 => 26,  106 => 25,  102 => 24,  99 => 23,  95 => 22,  84 => 13,  78 => 12,  67 => 10,  62 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
\t<div class=\"col-lg-12\">
\t<h2>Todas las entradas</h2>
\t<hr>
\t<a href=\"{{path(\"blog_add_entrada\")}}\" class=\"btn btn-success\">Añadir entrada</a>
\t{% for type, messages in app.session.flashbag().all() %}
\t\t{% for message in messages %}
\t\t\t<div class=\"alert alert-{{type}}\"> {{message}} </div>
\t\t{% endfor %}
\t{% endfor %}
\t\t<table class=\"table table-bordered\">
\t\t\t<thead>
\t\t\t\t<th>Imagen</th>
\t\t\t\t<th>Título</th>
\t\t\t\t<th>Contenido</th>
\t\t\t\t<th>Categoría</th>
\t\t\t\t<th>Etiquetas</th>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for entrada in entradas %}
\t\t\t\t<tr>
\t\t\t\t\t<td><img src=\"{{ asset(\"uploads/\"~entrada.image)}}\" alt=\"Imagen no disponible\" style=\"max-width: 50px;\"></td>
\t\t\t\t\t<td>{{entrada.titulo}}</td>
\t\t\t\t\t<td>{{entrada.contenido}}</td>
\t\t\t\t\t<td>{{entrada.categoria.nombre}}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% for etiqueta_repo in entrada.entradaEtiqueta %}
\t\t\t\t\t\t    {{etiqueta_repo.etiqueta.nombre}} <br>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</td>
\t\t\t\t\t{# VIENE DEL VIEW DE CATEGORIA - MODIFICAR if categoria.entradaCategoria|length == 0 #}
\t\t\t\t\t{% if (app.user.id is defined) and (entrada.usuario.id == app.user.id) %}
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{path(\"blog_delete_entrada\", {\"id\":entrada.id}) }}\" class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-trash\"></span></a>
\t\t\t\t\t\t<a href=\"{{path(\"blog_update_entrada\", {\"id\":entrada.id}) }}\" class=\"btn btn-warning\"><span class=\"glyphicon glyphicon-pencil\"></span></a>
\t\t\t\t\t</td>
\t\t\t\t\t{% endif %}
\t\t\t\t\t{# endif #}
\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t{% if page > 1 %}
\t\t\t{% set page = page-1 %}
\t\t{% endif %}
\t\t<ul class=\"pagination\">
\t\t\t<li><a href=\"{{path('blog_homepage', {'page':page})}}\">&laquo;</a></li>
\t\t\t{% for i in 1..pages %}
\t\t\t    <li><a href=\"{{path('blog_homepage', {'page':i})}}\">{{i}}</a></li>
\t\t\t{% endfor %}
\t\t{% if page < pages %}
\t\t\t{% set page = page+1 %}
\t\t{% endif %}
\t\t\t<li><a href=\"{{path('blog_homepage', {'page':page})}}\">&raquo;</a></li>
\t\t</ul>
\t</div>
\t<div class=\"clearfix\"></div>
{% endblock %}", "@Blog/entrada/index.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle\\Resources\\views\\entrada\\index.html.twig");
    }
}
