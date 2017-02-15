<?php

/* BlogBundle:etiqueta:add.html.twig */
class __TwigTemplate_5e24c92c7577d26213a2e3c9b9a5f546a96963b445ca43043b26b4b9167e85b1 extends Twig_Template
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
        $__internal_4e44ffd38c9b97c22d91bae3786f1e3a2a38b4dd982081188cdabd6bc03dcb92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e44ffd38c9b97c22d91bae3786f1e3a2a38b4dd982081188cdabd6bc03dcb92->enter($__internal_4e44ffd38c9b97c22d91bae3786f1e3a2a38b4dd982081188cdabd6bc03dcb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:etiqueta:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e44ffd38c9b97c22d91bae3786f1e3a2a38b4dd982081188cdabd6bc03dcb92->leave($__internal_4e44ffd38c9b97c22d91bae3786f1e3a2a38b4dd982081188cdabd6bc03dcb92_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_79e5ee5302475f3b79b061a5de8008500482315b8f8a4dc819e02d7a45ba37c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79e5ee5302475f3b79b061a5de8008500482315b8f8a4dc819e02d7a45ba37c2->enter($__internal_79e5ee5302475f3b79b061a5de8008500482315b8f8a4dc819e02d7a45ba37c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_79e5ee5302475f3b79b061a5de8008500482315b8f8a4dc819e02d7a45ba37c2->leave($__internal_79e5ee5302475f3b79b061a5de8008500482315b8f8a4dc819e02d7a45ba37c2_prof);

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
        return array (  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
