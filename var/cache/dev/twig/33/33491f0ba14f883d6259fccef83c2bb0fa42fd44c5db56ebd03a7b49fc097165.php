<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b2a45a09c0af3f1011168c533a47d03bb7d39ab70c7b553db80305ef7c310819 extends Twig_Template
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
        $__internal_ecc2fe3c0e24d1868f13a469c141281e2123256d1273b5e4c5b9e842dacf9078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc2fe3c0e24d1868f13a469c141281e2123256d1273b5e4c5b9e842dacf9078->enter($__internal_ecc2fe3c0e24d1868f13a469c141281e2123256d1273b5e4c5b9e842dacf9078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_b542adfacda29e937305b91029887d3fc6adc0ffcedf3671f3b425a57440de1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b542adfacda29e937305b91029887d3fc6adc0ffcedf3671f3b425a57440de1d->enter($__internal_b542adfacda29e937305b91029887d3fc6adc0ffcedf3671f3b425a57440de1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ecc2fe3c0e24d1868f13a469c141281e2123256d1273b5e4c5b9e842dacf9078->leave($__internal_ecc2fe3c0e24d1868f13a469c141281e2123256d1273b5e4c5b9e842dacf9078_prof);

        
        $__internal_b542adfacda29e937305b91029887d3fc6adc0ffcedf3671f3b425a57440de1d->leave($__internal_b542adfacda29e937305b91029887d3fc6adc0ffcedf3671f3b425a57440de1d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4bea379612686891578117e5a66a48554603cc47c10e4a424609082ea4caf951 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bea379612686891578117e5a66a48554603cc47c10e4a424609082ea4caf951->enter($__internal_4bea379612686891578117e5a66a48554603cc47c10e4a424609082ea4caf951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7c7b798554d2108fc5fa2095c12cede7965a9217b4736589d19d1c9240d56af8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c7b798554d2108fc5fa2095c12cede7965a9217b4736589d19d1c9240d56af8->enter($__internal_7c7b798554d2108fc5fa2095c12cede7965a9217b4736589d19d1c9240d56af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7c7b798554d2108fc5fa2095c12cede7965a9217b4736589d19d1c9240d56af8->leave($__internal_7c7b798554d2108fc5fa2095c12cede7965a9217b4736589d19d1c9240d56af8_prof);

        
        $__internal_4bea379612686891578117e5a66a48554603cc47c10e4a424609082ea4caf951->leave($__internal_4bea379612686891578117e5a66a48554603cc47c10e4a424609082ea4caf951_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
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
", "@WebProfiler/Profiler/ajax_layout.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
