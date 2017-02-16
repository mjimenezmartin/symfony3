<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f99bed85bdf353aeaf01c3825684e174f4c76089d0a019f23b2892810a0b0135 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce0cdb19dd1f323b6df1019af9ba97d97f83c5b839d9098cb0951581afb93562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce0cdb19dd1f323b6df1019af9ba97d97f83c5b839d9098cb0951581afb93562->enter($__internal_ce0cdb19dd1f323b6df1019af9ba97d97f83c5b839d9098cb0951581afb93562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_7d2a0286a837d8d0955eb4a40ece291ad430de2694d1e8efed73efe12a67d212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2a0286a837d8d0955eb4a40ece291ad430de2694d1e8efed73efe12a67d212->enter($__internal_7d2a0286a837d8d0955eb4a40ece291ad430de2694d1e8efed73efe12a67d212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_ce0cdb19dd1f323b6df1019af9ba97d97f83c5b839d9098cb0951581afb93562->leave($__internal_ce0cdb19dd1f323b6df1019af9ba97d97f83c5b839d9098cb0951581afb93562_prof);

        
        $__internal_7d2a0286a837d8d0955eb4a40ece291ad430de2694d1e8efed73efe12a67d212->leave($__internal_7d2a0286a837d8d0955eb4a40ece291ad430de2694d1e8efed73efe12a67d212_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
