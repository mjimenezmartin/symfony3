<?php

/* BlogBundle:categoria:add.html.twig */
class __TwigTemplate_67227e7e48d3b2ad9bd7c35ad8efe8a41ff4fce89d58706283a928194fbb56d8 extends Twig_Template
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
        $__internal_3604ae3a691835c490b0d9569301128e5e13b0f618194911b86add72c58f74e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3604ae3a691835c490b0d9569301128e5e13b0f618194911b86add72c58f74e5->enter($__internal_3604ae3a691835c490b0d9569301128e5e13b0f618194911b86add72c58f74e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:categoria:add.html.twig"));

        $__internal_d2045246fd48c5b289855fc567561bfd2f177c768404203bfa5ff9baa1ba478b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2045246fd48c5b289855fc567561bfd2f177c768404203bfa5ff9baa1ba478b->enter($__internal_d2045246fd48c5b289855fc567561bfd2f177c768404203bfa5ff9baa1ba478b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:categoria:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3604ae3a691835c490b0d9569301128e5e13b0f618194911b86add72c58f74e5->leave($__internal_3604ae3a691835c490b0d9569301128e5e13b0f618194911b86add72c58f74e5_prof);

        
        $__internal_d2045246fd48c5b289855fc567561bfd2f177c768404203bfa5ff9baa1ba478b->leave($__internal_d2045246fd48c5b289855fc567561bfd2f177c768404203bfa5ff9baa1ba478b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2af396178f1c2cb97836c332ac74a7f791043e4072de1a40352bb45369b1245c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af396178f1c2cb97836c332ac74a7f791043e4072de1a40352bb45369b1245c->enter($__internal_2af396178f1c2cb97836c332ac74a7f791043e4072de1a40352bb45369b1245c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_2043b06ab8c6e62ed679f63bceb9be6c9113765f5bd29e39a534f5d92df63835 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2043b06ab8c6e62ed679f63bceb9be6c9113765f5bd29e39a534f5d92df63835->enter($__internal_2043b06ab8c6e62ed679f63bceb9be6c9113765f5bd29e39a534f5d92df63835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2043b06ab8c6e62ed679f63bceb9be6c9113765f5bd29e39a534f5d92df63835->leave($__internal_2043b06ab8c6e62ed679f63bceb9be6c9113765f5bd29e39a534f5d92df63835_prof);

        
        $__internal_2af396178f1c2cb97836c332ac74a7f791043e4072de1a40352bb45369b1245c->leave($__internal_2af396178f1c2cb97836c332ac74a7f791043e4072de1a40352bb45369b1245c_prof);

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
", "BlogBundle:categoria:add.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/categoria/add.html.twig");
    }
}
