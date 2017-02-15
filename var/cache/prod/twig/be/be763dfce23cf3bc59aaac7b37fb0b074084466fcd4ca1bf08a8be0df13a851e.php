<?php

/* BlogBundle:Entrada:update.html.twig */
class __TwigTemplate_bc90b4472967bac15b6758f05c2b3d775e033545684a0b1dc539c997dc9ea73e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Entrada:update.html.twig", 1);
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
        $__internal_de99b4d8b135f522b8dfa56f14f95cf3b8b75f01775176bf3958cfbb83283eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de99b4d8b135f522b8dfa56f14f95cf3b8b75f01775176bf3958cfbb83283eaa->enter($__internal_de99b4d8b135f522b8dfa56f14f95cf3b8b75f01775176bf3958cfbb83283eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Entrada:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de99b4d8b135f522b8dfa56f14f95cf3b8b75f01775176bf3958cfbb83283eaa->leave($__internal_de99b4d8b135f522b8dfa56f14f95cf3b8b75f01775176bf3958cfbb83283eaa_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_000e2548cdaa8cc7df900a867fa06b555e97c745f6285e75991b10356aedf4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_000e2548cdaa8cc7df900a867fa06b555e97c745f6285e75991b10356aedf4b9->enter($__internal_000e2548cdaa8cc7df900a867fa06b555e97c745f6285e75991b10356aedf4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"col-lg-4\">

    <h2>Modificar Entrada ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrada"]) ? $context["entrada"] : $this->getContext($context, "entrada")), "titulo", array()), "html", null, true);
        echo "</h2>
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entrada"]) ? $context["entrada"] : $this->getContext($context, "entrada")), "image", array()))), "html", null, true);
        echo "\" alt=\"imagen\" style=\"width: 80px;\">
    <hr>
\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etiqueta", array()), 'widget', array("value" => (isset($context["etiquetas"]) ? $context["etiquetas"] : $this->getContext($context, "etiquetas"))));
        echo "
\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
<div class=\"clearfix\"></div>
";
        
        $__internal_000e2548cdaa8cc7df900a867fa06b555e97c745f6285e75991b10356aedf4b9->leave($__internal_000e2548cdaa8cc7df900a867fa06b555e97c745f6285e75991b10356aedf4b9_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Entrada:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  57 => 10,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
<div class=\"col-lg-4\">

    <h2>Modificar Entrada {{entrada.titulo}}</h2>
    <img src=\"{{ asset(\"uploads/\"~entrada.image)}}\" alt=\"imagen\" style=\"width: 80px;\">
    <hr>
\t{{form_start(form)}}
\t{{form_widget(form.etiqueta, {\"value\":etiquetas})}}
\t{{form_end(form)}}

</div>
<div class=\"clearfix\"></div>
{% endblock %}", "BlogBundle:Entrada:update.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/Entrada/update.html.twig");
    }
}
