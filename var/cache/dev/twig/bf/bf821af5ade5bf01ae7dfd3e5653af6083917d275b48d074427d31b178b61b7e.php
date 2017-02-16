<?php

/* BlogBundle:etiqueta:add.html.twig */
class __TwigTemplate_2eedb794fc26b67cbfa58d385f56a2b3f84192e53afdfab0fc93af285f0dfae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:etiqueta:add.html.twig", 1);
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
        $__internal_b5f6e3ec6295d49f59e69c74ca4835a6162a6b1f457c747c61b2b2e23445a8cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5f6e3ec6295d49f59e69c74ca4835a6162a6b1f457c747c61b2b2e23445a8cb->enter($__internal_b5f6e3ec6295d49f59e69c74ca4835a6162a6b1f457c747c61b2b2e23445a8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:etiqueta:add.html.twig"));

        $__internal_1b4c03a61f52290928b1b2889ac3b71a06b0f2fb8ca9f91585b6e77163da5d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4c03a61f52290928b1b2889ac3b71a06b0f2fb8ca9f91585b6e77163da5d8e->enter($__internal_1b4c03a61f52290928b1b2889ac3b71a06b0f2fb8ca9f91585b6e77163da5d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:etiqueta:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f6e3ec6295d49f59e69c74ca4835a6162a6b1f457c747c61b2b2e23445a8cb->leave($__internal_b5f6e3ec6295d49f59e69c74ca4835a6162a6b1f457c747c61b2b2e23445a8cb_prof);

        
        $__internal_1b4c03a61f52290928b1b2889ac3b71a06b0f2fb8ca9f91585b6e77163da5d8e->leave($__internal_1b4c03a61f52290928b1b2889ac3b71a06b0f2fb8ca9f91585b6e77163da5d8e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b9f2163ed27e99b3e2bf29eb282345c46db4837b79c48c9b78cc223751ab0346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f2163ed27e99b3e2bf29eb282345c46db4837b79c48c9b78cc223751ab0346->enter($__internal_b9f2163ed27e99b3e2bf29eb282345c46db4837b79c48c9b78cc223751ab0346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7324c6cdd790bf8e8bb398f9de5f156116e0f8b161552da0d1e12e788df0452e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7324c6cdd790bf8e8bb398f9de5f156116e0f8b161552da0d1e12e788df0452e->enter($__internal_7324c6cdd790bf8e8bb398f9de5f156116e0f8b161552da0d1e12e788df0452e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"col-lg-4\">

    <h2>Añadir Etiquetas</h2>
    <hr>
\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
<div class=\"clearfix\"></div>
";
        
        $__internal_7324c6cdd790bf8e8bb398f9de5f156116e0f8b161552da0d1e12e788df0452e->leave($__internal_7324c6cdd790bf8e8bb398f9de5f156116e0f8b161552da0d1e12e788df0452e_prof);

        
        $__internal_b9f2163ed27e99b3e2bf29eb282345c46db4837b79c48c9b78cc223751ab0346->leave($__internal_b9f2163ed27e99b3e2bf29eb282345c46db4837b79c48c9b78cc223751ab0346_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:etiqueta:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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

    <h2>Añadir Etiquetas</h2>
    <hr>
\t{{form_start(form)}}
\t{{form_end(form)}}

</div>
<div class=\"clearfix\"></div>
{% endblock %}
", "BlogBundle:etiqueta:add.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/etiqueta/add.html.twig");
    }
}
