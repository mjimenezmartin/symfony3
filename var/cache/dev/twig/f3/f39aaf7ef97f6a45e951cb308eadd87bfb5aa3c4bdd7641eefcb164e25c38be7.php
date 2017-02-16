<?php

/* @Blog/etiqueta/add.html.twig */
class __TwigTemplate_a60d7c59500d7c214a7fe6b63085583e8249d408599d106956066fb04c47a916 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "@Blog/etiqueta/add.html.twig", 1);
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
        $__internal_b678aeb30620b726a8b9adac1663ead35c606859f51e756dabdecb8f2eaf76bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b678aeb30620b726a8b9adac1663ead35c606859f51e756dabdecb8f2eaf76bc->enter($__internal_b678aeb30620b726a8b9adac1663ead35c606859f51e756dabdecb8f2eaf76bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/etiqueta/add.html.twig"));

        $__internal_eaa8ec66377f39c32155c70c599c431ebeb856c596447b7ede0bf2c1103ac912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaa8ec66377f39c32155c70c599c431ebeb856c596447b7ede0bf2c1103ac912->enter($__internal_eaa8ec66377f39c32155c70c599c431ebeb856c596447b7ede0bf2c1103ac912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/etiqueta/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b678aeb30620b726a8b9adac1663ead35c606859f51e756dabdecb8f2eaf76bc->leave($__internal_b678aeb30620b726a8b9adac1663ead35c606859f51e756dabdecb8f2eaf76bc_prof);

        
        $__internal_eaa8ec66377f39c32155c70c599c431ebeb856c596447b7ede0bf2c1103ac912->leave($__internal_eaa8ec66377f39c32155c70c599c431ebeb856c596447b7ede0bf2c1103ac912_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_01762f1490293ae9e428a802c4a2d6bb73e0c0957bc7b45c109de187effa5ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01762f1490293ae9e428a802c4a2d6bb73e0c0957bc7b45c109de187effa5ecf->enter($__internal_01762f1490293ae9e428a802c4a2d6bb73e0c0957bc7b45c109de187effa5ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_732a0a49089f0df8669903a796959e45ab3e4786c80df2734a9c48ebd85a3ca2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732a0a49089f0df8669903a796959e45ab3e4786c80df2734a9c48ebd85a3ca2->enter($__internal_732a0a49089f0df8669903a796959e45ab3e4786c80df2734a9c48ebd85a3ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_732a0a49089f0df8669903a796959e45ab3e4786c80df2734a9c48ebd85a3ca2->leave($__internal_732a0a49089f0df8669903a796959e45ab3e4786c80df2734a9c48ebd85a3ca2_prof);

        
        $__internal_01762f1490293ae9e428a802c4a2d6bb73e0c0957bc7b45c109de187effa5ecf->leave($__internal_01762f1490293ae9e428a802c4a2d6bb73e0c0957bc7b45c109de187effa5ecf_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/etiqueta/add.html.twig";
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
", "@Blog/etiqueta/add.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle\\Resources\\views\\etiqueta\\add.html.twig");
    }
}
