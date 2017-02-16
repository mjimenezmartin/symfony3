<?php

/* BlogBundle:Categoria:categoria.html.twig */
class __TwigTemplate_49a56bd05cb4fe0ff203d5d54cfc8ca8e0ff3a001fc071e471dafe93ae71fdbd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Categoria:categoria.html.twig", 1);
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
        $__internal_ca2489ef9b64dadd13881a714ad31d86e6dff612ca9802f8b9b9f025d7233dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca2489ef9b64dadd13881a714ad31d86e6dff612ca9802f8b9b9f025d7233dd1->enter($__internal_ca2489ef9b64dadd13881a714ad31d86e6dff612ca9802f8b9b9f025d7233dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Categoria:categoria.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca2489ef9b64dadd13881a714ad31d86e6dff612ca9802f8b9b9f025d7233dd1->leave($__internal_ca2489ef9b64dadd13881a714ad31d86e6dff612ca9802f8b9b9f025d7233dd1_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cf04fb0231f0905c0e9f809203e82e9f896770d8f949f1be60d32290124fd73c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf04fb0231f0905c0e9f809203e82e9f896770d8f949f1be60d32290124fd73c->enter($__internal_cf04fb0231f0905c0e9f809203e82e9f896770d8f949f1be60d32290124fd73c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_see_categoria", array("id" => $this->getAttribute((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")), "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\">&laquo;</a></li>
\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 51
            echo "\t\t\t    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_see_categoria", array("id" => $this->getAttribute((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")), "id", array()), "page" => $context["i"])), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_see_categoria", array("id" => $this->getAttribute((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")), "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\">&raquo;</a></li>
\t\t</ul>
\t</div>
\t<div class=\"clearfix\"></div>
";
        
        $__internal_cf04fb0231f0905c0e9f809203e82e9f896770d8f949f1be60d32290124fd73c->leave($__internal_cf04fb0231f0905c0e9f809203e82e9f896770d8f949f1be60d32290124fd73c_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Categoria:categoria.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 56,  191 => 55,  188 => 54,  185 => 53,  174 => 51,  170 => 50,  166 => 49,  163 => 48,  160 => 47,  157 => 46,  155 => 45,  151 => 43,  144 => 41,  142 => 40,  136 => 37,  132 => 36,  129 => 35,  126 => 34,  123 => 32,  114 => 30,  110 => 29,  105 => 27,  101 => 26,  97 => 25,  93 => 24,  90 => 23,  86 => 22,  75 => 13,  69 => 12,  58 => 10,  53 => 9,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t\t<li><a href=\"{{path('blog_see_categoria', {'id':categorias.id,'page':page})}}\">&laquo;</a></li>
\t\t\t{% for i in 1..pages %}
\t\t\t    <li><a href=\"{{path('blog_see_categoria', {'id':categorias.id,'page':i})}}\">{{i}}</a></li>
\t\t\t{% endfor %}
\t\t{% if page < pages %}
\t\t\t{% set page = page+1 %}
\t\t{% endif %}
\t\t\t<li><a href=\"{{path('blog_see_categoria', {'id':categorias.id,'page':page})}}\">&raquo;</a></li>
\t\t</ul>
\t</div>
\t<div class=\"clearfix\"></div>
{% endblock %}", "BlogBundle:Categoria:categoria.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/Categoria/categoria.html.twig");
    }
}
