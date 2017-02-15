<?php

/* BlogBundle:Entrada:add.html.twig */
class __TwigTemplate_fc5a50086ba73512ae5c812749fa82340cff6fee41db771b96b6726cced0ba33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Entrada:add.html.twig", 1);
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
        $__internal_a7fe66e97d2f93824a0c01c174b2bc5f897e37289d116bc389e7bb54852e9863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7fe66e97d2f93824a0c01c174b2bc5f897e37289d116bc389e7bb54852e9863->enter($__internal_a7fe66e97d2f93824a0c01c174b2bc5f897e37289d116bc389e7bb54852e9863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Entrada:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7fe66e97d2f93824a0c01c174b2bc5f897e37289d116bc389e7bb54852e9863->leave($__internal_a7fe66e97d2f93824a0c01c174b2bc5f897e37289d116bc389e7bb54852e9863_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_843582b7311a7d8627c0cb87606710204b02c11cdc9caae43246bb31c34da15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_843582b7311a7d8627c0cb87606710204b02c11cdc9caae43246bb31c34da15f->enter($__internal_843582b7311a7d8627c0cb87606710204b02c11cdc9caae43246bb31c34da15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_843582b7311a7d8627c0cb87606710204b02c11cdc9caae43246bb31c34da15f->leave($__internal_843582b7311a7d8627c0cb87606710204b02c11cdc9caae43246bb31c34da15f_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Entrada:add.html.twig";
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

    <h2>Añadir Entradas</h2>
    <hr>
\t{{form_start(form, {'enctype':'multipart/form-data'} )}}
\t{{form_end(form)}}

</div>
<div class=\"clearfix\"></div>
{% endblock %}
", "BlogBundle:Entrada:add.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/Entrada/add.html.twig");
    }
}
