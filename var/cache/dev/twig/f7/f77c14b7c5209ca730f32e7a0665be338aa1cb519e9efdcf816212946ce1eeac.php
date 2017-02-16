<?php

/* BlogBundle:categoria:update.html.twig */
class __TwigTemplate_96bbc30568b3e2d0027b8ab731546922f6a2a0b02f22ff30933228ab383f9ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:categoria:update.html.twig", 1);
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
        $__internal_a37b32901da8c818773013745624e97ec49c6e528b0c48b07d15190e4c436a9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a37b32901da8c818773013745624e97ec49c6e528b0c48b07d15190e4c436a9c->enter($__internal_a37b32901da8c818773013745624e97ec49c6e528b0c48b07d15190e4c436a9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:categoria:update.html.twig"));

        $__internal_ed728ec1afa6eb0826e10f3d79bd9646d2b0009e1662507275e4391a67ba1c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed728ec1afa6eb0826e10f3d79bd9646d2b0009e1662507275e4391a67ba1c31->enter($__internal_ed728ec1afa6eb0826e10f3d79bd9646d2b0009e1662507275e4391a67ba1c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:categoria:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a37b32901da8c818773013745624e97ec49c6e528b0c48b07d15190e4c436a9c->leave($__internal_a37b32901da8c818773013745624e97ec49c6e528b0c48b07d15190e4c436a9c_prof);

        
        $__internal_ed728ec1afa6eb0826e10f3d79bd9646d2b0009e1662507275e4391a67ba1c31->leave($__internal_ed728ec1afa6eb0826e10f3d79bd9646d2b0009e1662507275e4391a67ba1c31_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a946d4f326c9e2c59aa853ac15c7a83dff4dbf29895ae2864df3a8074661126b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a946d4f326c9e2c59aa853ac15c7a83dff4dbf29895ae2864df3a8074661126b->enter($__internal_a946d4f326c9e2c59aa853ac15c7a83dff4dbf29895ae2864df3a8074661126b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3065c36a8368e92654858b27b052da6dee8d897c32ab6c58ff90a13e6b2d2c30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3065c36a8368e92654858b27b052da6dee8d897c32ab6c58ff90a13e6b2d2c30->enter($__internal_3065c36a8368e92654858b27b052da6dee8d897c32ab6c58ff90a13e6b2d2c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"col-lg-4\">

    <h2>Modificar Categoria</h2>
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
        
        $__internal_3065c36a8368e92654858b27b052da6dee8d897c32ab6c58ff90a13e6b2d2c30->leave($__internal_3065c36a8368e92654858b27b052da6dee8d897c32ab6c58ff90a13e6b2d2c30_prof);

        
        $__internal_a946d4f326c9e2c59aa853ac15c7a83dff4dbf29895ae2864df3a8074661126b->leave($__internal_a946d4f326c9e2c59aa853ac15c7a83dff4dbf29895ae2864df3a8074661126b_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:categoria:update.html.twig";
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

    <h2>Modificar Categoria</h2>
    <hr>
\t{{form_start(form)}}
\t{{form_end(form)}}

</div>
<div class=\"clearfix\"></div>
{% endblock %}", "BlogBundle:categoria:update.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/categoria/update.html.twig");
    }
}
