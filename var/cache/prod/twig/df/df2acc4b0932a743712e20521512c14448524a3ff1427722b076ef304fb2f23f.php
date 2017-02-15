<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_d04efc4475459f00dd625636d84ad5ce3ea6947b16f31a403b7576491ef14fc8 extends Twig_Template
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
        $__internal_7fc94f75e212c8642b644e0b0cfa2c64262fb50cb04e084e00739ce80a4c5b08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fc94f75e212c8642b644e0b0cfa2c64262fb50cb04e084e00739ce80a4c5b08->enter($__internal_7fc94f75e212c8642b644e0b0cfa2c64262fb50cb04e084e00739ce80a4c5b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fc94f75e212c8642b644e0b0cfa2c64262fb50cb04e084e00739ce80a4c5b08->leave($__internal_7fc94f75e212c8642b644e0b0cfa2c64262fb50cb04e084e00739ce80a4c5b08_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_c183508703ddf9b92ad0816aeabc5aa571995c82c4d3ba63452234f88a3e0b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c183508703ddf9b92ad0816aeabc5aa571995c82c4d3ba63452234f88a3e0b57->enter($__internal_c183508703ddf9b92ad0816aeabc5aa571995c82c4d3ba63452234f88a3e0b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
\t<h1>Hello World!</h1>

";
        
        $__internal_c183508703ddf9b92ad0816aeabc5aa571995c82c4d3ba63452234f88a3e0b57->leave($__internal_c183508703ddf9b92ad0816aeabc5aa571995c82c4d3ba63452234f88a3e0b57_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
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
