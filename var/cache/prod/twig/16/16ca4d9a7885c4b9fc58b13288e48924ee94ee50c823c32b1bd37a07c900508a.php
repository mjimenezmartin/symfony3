<?php

/* BlogBundle:categoria:add.html.twig */
class __TwigTemplate_b1cca999a663d09c38eb3ebf0bcd73879b9a925f74d07072d75b6cacbe0552d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:categoria:add.html.twig", 1);
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
        $__internal_8ac8d0502069c3a494e31d477337b92a8230e88733d4b236ed7e36db6ce34065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ac8d0502069c3a494e31d477337b92a8230e88733d4b236ed7e36db6ce34065->enter($__internal_8ac8d0502069c3a494e31d477337b92a8230e88733d4b236ed7e36db6ce34065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:categoria:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac8d0502069c3a494e31d477337b92a8230e88733d4b236ed7e36db6ce34065->leave($__internal_8ac8d0502069c3a494e31d477337b92a8230e88733d4b236ed7e36db6ce34065_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b85f6036950dca9a723425ea39a8980cdb951b476c9572a3cf62e22c3c88b9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85f6036950dca9a723425ea39a8980cdb951b476c9572a3cf62e22c3c88b9c8->enter($__internal_b85f6036950dca9a723425ea39a8980cdb951b476c9572a3cf62e22c3c88b9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b85f6036950dca9a723425ea39a8980cdb951b476c9572a3cf62e22c3c88b9c8->leave($__internal_b85f6036950dca9a723425ea39a8980cdb951b476c9572a3cf62e22c3c88b9c8_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:categoria:add.html.twig";
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

    <h2>Añadir Categorias</h2>
    <hr>
\t{{form_start(form)}}
\t{{form_end(form)}}

</div>
<div class=\"clearfix\"></div>
{% endblock %}
", "BlogBundle:categoria:add.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/categoria/add.html.twig");
    }
}
