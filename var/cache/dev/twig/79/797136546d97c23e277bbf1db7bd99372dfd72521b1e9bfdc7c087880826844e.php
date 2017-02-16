<?php

/* BlogBundle:entrada:add.html.twig */
class __TwigTemplate_e8ecbb6d0fcbd4e108d96896bbe8428a6e0d29641c9c795e5397afcf4f602323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:entrada:add.html.twig", 1);
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
        $__internal_6a2f819923279cb495ff7677e23d3931ecc9f950e0854549158af6bc47843075 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2f819923279cb495ff7677e23d3931ecc9f950e0854549158af6bc47843075->enter($__internal_6a2f819923279cb495ff7677e23d3931ecc9f950e0854549158af6bc47843075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:entrada:add.html.twig"));

        $__internal_306323f28941991cb13ecf52d0dd962f3be3580be157c087d892212d2cf54f4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306323f28941991cb13ecf52d0dd962f3be3580be157c087d892212d2cf54f4e->enter($__internal_306323f28941991cb13ecf52d0dd962f3be3580be157c087d892212d2cf54f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:entrada:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a2f819923279cb495ff7677e23d3931ecc9f950e0854549158af6bc47843075->leave($__internal_6a2f819923279cb495ff7677e23d3931ecc9f950e0854549158af6bc47843075_prof);

        
        $__internal_306323f28941991cb13ecf52d0dd962f3be3580be157c087d892212d2cf54f4e->leave($__internal_306323f28941991cb13ecf52d0dd962f3be3580be157c087d892212d2cf54f4e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_64d907c62a4fe2c7156eece8f2c458c73392335d942f013b6b48e18a7a1293b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d907c62a4fe2c7156eece8f2c458c73392335d942f013b6b48e18a7a1293b4->enter($__internal_64d907c62a4fe2c7156eece8f2c458c73392335d942f013b6b48e18a7a1293b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_ab0a5f9123aaab1e7cfd686c5afd4059f0803d070407673fe794d4c3fee8ee56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab0a5f9123aaab1e7cfd686c5afd4059f0803d070407673fe794d4c3fee8ee56->enter($__internal_ab0a5f9123aaab1e7cfd686c5afd4059f0803d070407673fe794d4c3fee8ee56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"col-lg-4\">

    <h2>Añadir Entradas</h2>
    <hr>
\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("enctype" => "multipart/form-data"));
        echo "
\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
<div class=\"clearfix\"></div>
";
        
        $__internal_ab0a5f9123aaab1e7cfd686c5afd4059f0803d070407673fe794d4c3fee8ee56->leave($__internal_ab0a5f9123aaab1e7cfd686c5afd4059f0803d070407673fe794d4c3fee8ee56_prof);

        
        $__internal_64d907c62a4fe2c7156eece8f2c458c73392335d942f013b6b48e18a7a1293b4->leave($__internal_64d907c62a4fe2c7156eece8f2c458c73392335d942f013b6b48e18a7a1293b4_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:entrada:add.html.twig";
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

    <h2>Añadir Entradas</h2>
    <hr>
\t{{form_start(form, {'enctype':'multipart/form-data'} )}}
\t{{form_end(form)}}

</div>
<div class=\"clearfix\"></div>
{% endblock %}
", "BlogBundle:entrada:add.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/entrada/add.html.twig");
    }
}
