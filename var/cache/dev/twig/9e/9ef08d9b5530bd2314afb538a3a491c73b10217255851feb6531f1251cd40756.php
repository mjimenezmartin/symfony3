<?php

/* @Blog/categoria/add.html.twig */
class __TwigTemplate_594eec94f731e2cd210f87efd68904f557826ff0ec9eb8a12e3a3bced431f307 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "@Blog/categoria/add.html.twig", 1);
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
        $__internal_f2763697c6c3cbc9d9e75b5c221844e44397af6ef26d2d5cb3900f7c226340b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2763697c6c3cbc9d9e75b5c221844e44397af6ef26d2d5cb3900f7c226340b8->enter($__internal_f2763697c6c3cbc9d9e75b5c221844e44397af6ef26d2d5cb3900f7c226340b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/categoria/add.html.twig"));

        $__internal_9888efda1e08b1689fe17ff5e1e9b4e0937901c9607ae232c1ee2313cd5ca0c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9888efda1e08b1689fe17ff5e1e9b4e0937901c9607ae232c1ee2313cd5ca0c4->enter($__internal_9888efda1e08b1689fe17ff5e1e9b4e0937901c9607ae232c1ee2313cd5ca0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/categoria/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2763697c6c3cbc9d9e75b5c221844e44397af6ef26d2d5cb3900f7c226340b8->leave($__internal_f2763697c6c3cbc9d9e75b5c221844e44397af6ef26d2d5cb3900f7c226340b8_prof);

        
        $__internal_9888efda1e08b1689fe17ff5e1e9b4e0937901c9607ae232c1ee2313cd5ca0c4->leave($__internal_9888efda1e08b1689fe17ff5e1e9b4e0937901c9607ae232c1ee2313cd5ca0c4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_939af8f5a33e867ce20e0981f0d6d9342343c84cdaab764a00ce7d0ad38f1c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_939af8f5a33e867ce20e0981f0d6d9342343c84cdaab764a00ce7d0ad38f1c05->enter($__internal_939af8f5a33e867ce20e0981f0d6d9342343c84cdaab764a00ce7d0ad38f1c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e08c98d42f1291fd283d56c8abd836aafdbea5542f2fcb36fe864f44a6ca2b32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e08c98d42f1291fd283d56c8abd836aafdbea5542f2fcb36fe864f44a6ca2b32->enter($__internal_e08c98d42f1291fd283d56c8abd836aafdbea5542f2fcb36fe864f44a6ca2b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"col-lg-4\">

    <h2>Añadir Categorias</h2>
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
        
        $__internal_e08c98d42f1291fd283d56c8abd836aafdbea5542f2fcb36fe864f44a6ca2b32->leave($__internal_e08c98d42f1291fd283d56c8abd836aafdbea5542f2fcb36fe864f44a6ca2b32_prof);

        
        $__internal_939af8f5a33e867ce20e0981f0d6d9342343c84cdaab764a00ce7d0ad38f1c05->leave($__internal_939af8f5a33e867ce20e0981f0d6d9342343c84cdaab764a00ce7d0ad38f1c05_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/categoria/add.html.twig";
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

    <h2>Añadir Categorias</h2>
    <hr>
\t{{form_start(form)}}
\t{{form_end(form)}}

</div>
<div class=\"clearfix\"></div>
{% endblock %}
", "@Blog/categoria/add.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle\\Resources\\views\\categoria\\add.html.twig");
    }
}
