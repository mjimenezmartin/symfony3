<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_ae5850700cf273bd6ee115a09aa3f4f33af43eaf524825ecce3a19208a30160c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Default:index.html.twig", 1);
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
        $__internal_43ce4f8fc64fddb3daff70fb3218c51b4a95bdc96e499cea5b381feb2924198d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43ce4f8fc64fddb3daff70fb3218c51b4a95bdc96e499cea5b381feb2924198d->enter($__internal_43ce4f8fc64fddb3daff70fb3218c51b4a95bdc96e499cea5b381feb2924198d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $__internal_5ee118d1d44106a744013e4bed907065b21c787347c5d150138417956bdda44c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ee118d1d44106a744013e4bed907065b21c787347c5d150138417956bdda44c->enter($__internal_5ee118d1d44106a744013e4bed907065b21c787347c5d150138417956bdda44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43ce4f8fc64fddb3daff70fb3218c51b4a95bdc96e499cea5b381feb2924198d->leave($__internal_43ce4f8fc64fddb3daff70fb3218c51b4a95bdc96e499cea5b381feb2924198d_prof);

        
        $__internal_5ee118d1d44106a744013e4bed907065b21c787347c5d150138417956bdda44c->leave($__internal_5ee118d1d44106a744013e4bed907065b21c787347c5d150138417956bdda44c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_16a6004f2a30c44ab71c2940f7fb003c3f652c987139087bdf17690eb219c167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a6004f2a30c44ab71c2940f7fb003c3f652c987139087bdf17690eb219c167->enter($__internal_16a6004f2a30c44ab71c2940f7fb003c3f652c987139087bdf17690eb219c167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3ee7d22820ef71f208e2eeb1ba0a55a92781cfc050f6ae96ed17ada4d7ad2fd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee7d22820ef71f208e2eeb1ba0a55a92781cfc050f6ae96ed17ada4d7ad2fd3->enter($__internal_3ee7d22820ef71f208e2eeb1ba0a55a92781cfc050f6ae96ed17ada4d7ad2fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
\t<h1>Hello World!</h1>

";
        
        $__internal_3ee7d22820ef71f208e2eeb1ba0a55a92781cfc050f6ae96ed17ada4d7ad2fd3->leave($__internal_3ee7d22820ef71f208e2eeb1ba0a55a92781cfc050f6ae96ed17ada4d7ad2fd3_prof);

        
        $__internal_16a6004f2a30c44ab71c2940f7fb003c3f652c987139087bdf17690eb219c167->leave($__internal_16a6004f2a30c44ab71c2940f7fb003c3f652c987139087bdf17690eb219c167_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    
\t<h1>Hello World!</h1>

{% endblock %}
", "BlogBundle:Default:index.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/Default/index.html.twig");
    }
}
