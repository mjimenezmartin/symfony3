<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_c25541984b2356c5899f318423d35c468fe921045bde69bab94eee41be42a4b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6bc150204dd52318e86b149bab7563f1c4f578552fcaad6e4c8c76bf12219514 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc150204dd52318e86b149bab7563f1c4f578552fcaad6e4c8c76bf12219514->enter($__internal_6bc150204dd52318e86b149bab7563f1c4f578552fcaad6e4c8c76bf12219514_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_902dddc41dfacb99fe6d473763f786e7201544a4ca733906fcc5124f50556700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902dddc41dfacb99fe6d473763f786e7201544a4ca733906fcc5124f50556700->enter($__internal_902dddc41dfacb99fe6d473763f786e7201544a4ca733906fcc5124f50556700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6bc150204dd52318e86b149bab7563f1c4f578552fcaad6e4c8c76bf12219514->leave($__internal_6bc150204dd52318e86b149bab7563f1c4f578552fcaad6e4c8c76bf12219514_prof);

        
        $__internal_902dddc41dfacb99fe6d473763f786e7201544a4ca733906fcc5124f50556700->leave($__internal_902dddc41dfacb99fe6d473763f786e7201544a4ca733906fcc5124f50556700_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8cbe3b42cf9fc41413aae71a4a344fa36c93edb150eccbaf3caa4ae592d4f68b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cbe3b42cf9fc41413aae71a4a344fa36c93edb150eccbaf3caa4ae592d4f68b->enter($__internal_8cbe3b42cf9fc41413aae71a4a344fa36c93edb150eccbaf3caa4ae592d4f68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ddf8dd5f96da0a7c3207588daa1849d8dd5cc1b3ba584b356ec6e1177f70b4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddf8dd5f96da0a7c3207588daa1849d8dd5cc1b3ba584b356ec6e1177f70b4c6->enter($__internal_ddf8dd5f96da0a7c3207588daa1849d8dd5cc1b3ba584b356ec6e1177f70b4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ddf8dd5f96da0a7c3207588daa1849d8dd5cc1b3ba584b356ec6e1177f70b4c6->leave($__internal_ddf8dd5f96da0a7c3207588daa1849d8dd5cc1b3ba584b356ec6e1177f70b4c6_prof);

        
        $__internal_8cbe3b42cf9fc41413aae71a4a344fa36c93edb150eccbaf3caa4ae592d4f68b->leave($__internal_8cbe3b42cf9fc41413aae71a4a344fa36c93edb150eccbaf3caa4ae592d4f68b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
