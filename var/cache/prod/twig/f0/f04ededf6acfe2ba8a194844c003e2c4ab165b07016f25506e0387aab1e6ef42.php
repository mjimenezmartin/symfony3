<?php

/* BlogBundle:categoria:add.html.twig */
class __TwigTemplate_0752647705cfdd24ab029f4d2400927edf5fcb727f691e9326f627a85d266797 extends Twig_Template
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
        $__internal_be0bad99ad18caf831aa224af4edd5620a5715b07de15ebfaaeca9562ddde58f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0bad99ad18caf831aa224af4edd5620a5715b07de15ebfaaeca9562ddde58f->enter($__internal_be0bad99ad18caf831aa224af4edd5620a5715b07de15ebfaaeca9562ddde58f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:categoria:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be0bad99ad18caf831aa224af4edd5620a5715b07de15ebfaaeca9562ddde58f->leave($__internal_be0bad99ad18caf831aa224af4edd5620a5715b07de15ebfaaeca9562ddde58f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0f92801066a0a288ace454d7d37b6888551819292597bdb959accf79323f91d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f92801066a0a288ace454d7d37b6888551819292597bdb959accf79323f91d3->enter($__internal_0f92801066a0a288ace454d7d37b6888551819292597bdb959accf79323f91d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_0f92801066a0a288ace454d7d37b6888551819292597bdb959accf79323f91d3->leave($__internal_0f92801066a0a288ace454d7d37b6888551819292597bdb959accf79323f91d3_prof);

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
