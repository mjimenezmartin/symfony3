<?php

/* @App/Pruebas/index.html.twig */
class __TwigTemplate_fdc6b2bec7a1bdf03eeee28354e1da3ac60104e13c65744b29094b8098fc714b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@App/Pruebas/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0bf620efb26fd922e8972539dd916b7b608c22d57f92939bd737bbd59bf7bce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bf620efb26fd922e8972539dd916b7b608c22d57f92939bd737bbd59bf7bce8->enter($__internal_0bf620efb26fd922e8972539dd916b7b608c22d57f92939bd737bbd59bf7bce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Pruebas/index.html.twig"));

        $__internal_9e7a29c1b1396077d56d6ff0c10d33d2bd19108876d8a24e038e25a585e1d3e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e7a29c1b1396077d56d6ff0c10d33d2bd19108876d8a24e038e25a585e1d3e5->enter($__internal_9e7a29c1b1396077d56d6ff0c10d33d2bd19108876d8a24e038e25a585e1d3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Pruebas/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf620efb26fd922e8972539dd916b7b608c22d57f92939bd737bbd59bf7bce8->leave($__internal_0bf620efb26fd922e8972539dd916b7b608c22d57f92939bd737bbd59bf7bce8_prof);

        
        $__internal_9e7a29c1b1396077d56d6ff0c10d33d2bd19108876d8a24e038e25a585e1d3e5->leave($__internal_9e7a29c1b1396077d56d6ff0c10d33d2bd19108876d8a24e038e25a585e1d3e5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d46a86292e43714f281f558810e7e530e2141b2314bd61ca907a0bdc70d4767c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d46a86292e43714f281f558810e7e530e2141b2314bd61ca907a0bdc70d4767c->enter($__internal_d46a86292e43714f281f558810e7e530e2141b2314bd61ca907a0bdc70d4767c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_873087ad55b181c99c893dba36258ed737580ab3a8b527c97126889bca5ee6b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_873087ad55b181c99c893dba36258ed737580ab3a8b527c97126889bca5ee6b9->enter($__internal_873087ad55b181c99c893dba36258ed737580ab3a8b527c97126889bca5ee6b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        echo "
\t<hr>
\t";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frutas"]) ? $context["frutas"] : $this->getContext($context, "frutas")), "pera", array()), "html", null, true);
        echo "
\t";
        // line 7
        if (($this->getAttribute((isset($context["frutas"]) ? $context["frutas"] : $this->getContext($context, "frutas")), "pera", array()) == "de agua")) {
            // line 8
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frutas"]) ? $context["frutas"] : $this->getContext($context, "frutas")), "manzana", array()), "html", null, true);
            echo "
\t";
        }
        // line 10
        echo "\t<hr>
\t";
        // line 11
        $context["variable"] = "Hola Twig";
        // line 12
        echo "\t";
        echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : $this->getContext($context, "variable")), "html", null, true);
        echo "
\t<hr>
\t";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) > 0)) {
            // line 15
            echo "\t\t<ul>
\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 17
                echo "\t\t\t<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
                echo "</li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "\t\t</ul>
\t";
        }
        // line 21
        echo "\t<hr>

\t";
        // line 26
        echo "
\t";
        // line 27
        $context["fecha"] = twig_date_converter($this->env, "-2 days", "Europe/Madrid");
        // line 28
        echo "\t";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "H:i:s"), "html", null, true);
        echo "

\t<hr>
\t";
        // line 31
        echo twig_include($this->env, $context, "AppBundle:Pruebas:partial.html.twig");
        echo "
\t";
        // line 32
        echo twig_escape_filter($this->env, min(array(0 => 76, 1 => 99, 2 => 58)), "html", null, true);
        echo "
\t";
        // line 33
        echo twig_escape_filter($this->env, twig_random($this->env, array(0 => "batman", 1 => "robin", 2 => "yo", 3 => "tu")), "html", null, true);
        echo "
\t<hr>
\t\t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 25, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 36
            echo "\t\t\t";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "<br>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t<hr>
\t";
        // line 39
        echo $this->env->getExtension('AppBundle\Twig\HelperVistas')->generateTable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        echo "
\t<hr>
\t";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('AppBundle\Twig\FilterVistas')->addText("PoToma!", 2), "html", null, true);
        echo "
";
        
        $__internal_873087ad55b181c99c893dba36258ed737580ab3a8b527c97126889bca5ee6b9->leave($__internal_873087ad55b181c99c893dba36258ed737580ab3a8b527c97126889bca5ee6b9_prof);

        
        $__internal_d46a86292e43714f281f558810e7e530e2141b2314bd61ca907a0bdc70d4767c->leave($__internal_d46a86292e43714f281f558810e7e530e2141b2314bd61ca907a0bdc70d4767c_prof);

    }

    public function getTemplateName()
    {
        return "@App/Pruebas/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 41,  151 => 39,  148 => 38,  139 => 36,  135 => 35,  130 => 33,  126 => 32,  122 => 31,  115 => 28,  113 => 27,  110 => 26,  106 => 21,  102 => 19,  91 => 17,  87 => 16,  84 => 15,  82 => 14,  76 => 12,  74 => 11,  71 => 10,  65 => 8,  63 => 7,  59 => 6,  54 => 4,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}
{% block body %}
\t{{parent()}}
\t{{texto}}
\t<hr>
\t{{frutas.pera}}
\t{% if frutas.pera==\"de agua\" %}
\t\t{{frutas.manzana}}
\t{% endif %}
\t<hr>
\t{% set variable = \"Hola Twig\" %}
\t{{variable}}
\t<hr>
\t{% if productos|length > 0 %}
\t\t<ul>
\t\t{% for producto in productos %}
\t\t\t<li>{{ producto.nombre }} - {{ producto.precio }}</li>
\t\t{% endfor %}
\t\t</ul>
\t{% endif %}
\t<hr>

\t{#
\tEsto es un comentario de Twig así por la cara
\t#}

\t{% set fecha = date(\"-2 days\", \"Europe/Madrid\") %}
\t{{fecha|date('H:i:s')}}

\t<hr>
\t{{include('AppBundle:Pruebas:partial.html.twig')}}
\t{{ min([76,99,58]) }}
\t{{random([\"batman\",\"robin\",\"yo\",\"tu\"])}}
\t<hr>
\t\t{% for i in range(0,25,3) %}
\t\t\t{{ i }}<br>
\t\t{% endfor %}
\t<hr>
\t{{ generateTable(productos) |raw }}
\t<hr>
\t{{ \"PoToma!\" | addText(2)}}
{% endblock %}", "@App/Pruebas/index.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\AppBundle\\Resources\\views\\Pruebas\\index.html.twig");
    }
}
