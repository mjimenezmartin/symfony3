<?php

/* BlogBundle:categoria:update.html.twig */
class __TwigTemplate_220a7d56b2ee862b9b0a514ac99cbcb19ecacefcf423cf96bea1115f43e04b36 extends Twig_Template
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
        $__internal_eac1e60f91acf46bebcda0393715a0b9ca8fbb1826cf542ba39b576e7d18ce54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac1e60f91acf46bebcda0393715a0b9ca8fbb1826cf542ba39b576e7d18ce54->enter($__internal_eac1e60f91acf46bebcda0393715a0b9ca8fbb1826cf542ba39b576e7d18ce54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:categoria:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eac1e60f91acf46bebcda0393715a0b9ca8fbb1826cf542ba39b576e7d18ce54->leave($__internal_eac1e60f91acf46bebcda0393715a0b9ca8fbb1826cf542ba39b576e7d18ce54_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d33a024b76e28fb53db91601ab6a07bb1a7f478a2155555e063f60280aa6b767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33a024b76e28fb53db91601ab6a07bb1a7f478a2155555e063f60280aa6b767->enter($__internal_d33a024b76e28fb53db91601ab6a07bb1a7f478a2155555e063f60280aa6b767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d33a024b76e28fb53db91601ab6a07bb1a7f478a2155555e063f60280aa6b767->leave($__internal_d33a024b76e28fb53db91601ab6a07bb1a7f478a2155555e063f60280aa6b767_prof);

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

    <h2>Modificar Categoria</h2>
    <hr>
\t{{form_start(form)}}
\t{{form_end(form)}}

</div>
<div class=\"clearfix\"></div>
{% endblock %}", "BlogBundle:categoria:update.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/categoria/update.html.twig");
    }
}
