<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_44c0f1137d8fccd5f0f7983460ef07a595b3586925e537de506a4ef4c1e305be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e72e8da6eba862c74c2dccb9abacdbe12806c8c736ae87838b191877de0b0209 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72e8da6eba862c74c2dccb9abacdbe12806c8c736ae87838b191877de0b0209->enter($__internal_e72e8da6eba862c74c2dccb9abacdbe12806c8c736ae87838b191877de0b0209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_f890289e7904a069d78c35ce03b931a378ce0732b384d833ef2909c4c0e752dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f890289e7904a069d78c35ce03b931a378ce0732b384d833ef2909c4c0e752dc->enter($__internal_f890289e7904a069d78c35ce03b931a378ce0732b384d833ef2909c4c0e752dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72e8da6eba862c74c2dccb9abacdbe12806c8c736ae87838b191877de0b0209->leave($__internal_e72e8da6eba862c74c2dccb9abacdbe12806c8c736ae87838b191877de0b0209_prof);

        
        $__internal_f890289e7904a069d78c35ce03b931a378ce0732b384d833ef2909c4c0e752dc->leave($__internal_f890289e7904a069d78c35ce03b931a378ce0732b384d833ef2909c4c0e752dc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38a9d4c137ad7bad485e52b7c0565d7ca6c904e139ccbf831a62ac2f3f0c49ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a9d4c137ad7bad485e52b7c0565d7ca6c904e139ccbf831a62ac2f3f0c49ee->enter($__internal_38a9d4c137ad7bad485e52b7c0565d7ca6c904e139ccbf831a62ac2f3f0c49ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5809fbbea7f23597653d219cd6e3c47da89cdf58936452b67c7121c669043ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5809fbbea7f23597653d219cd6e3c47da89cdf58936452b67c7121c669043ae8->enter($__internal_5809fbbea7f23597653d219cd6e3c47da89cdf58936452b67c7121c669043ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_5809fbbea7f23597653d219cd6e3c47da89cdf58936452b67c7121c669043ae8->leave($__internal_5809fbbea7f23597653d219cd6e3c47da89cdf58936452b67c7121c669043ae8_prof);

        
        $__internal_38a9d4c137ad7bad485e52b7c0565d7ca6c904e139ccbf831a62ac2f3f0c49ee->leave($__internal_38a9d4c137ad7bad485e52b7c0565d7ca6c904e139ccbf831a62ac2f3f0c49ee_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad93e47a2b8539c1d0bee929e0d2bf06cb48661ffc8818d70207e534e5911bf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad93e47a2b8539c1d0bee929e0d2bf06cb48661ffc8818d70207e534e5911bf5->enter($__internal_ad93e47a2b8539c1d0bee929e0d2bf06cb48661ffc8818d70207e534e5911bf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd67a35640800fdbde0922853907f4e36b0d510e7e5c41fd968ea942e767763e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd67a35640800fdbde0922853907f4e36b0d510e7e5c41fd968ea942e767763e->enter($__internal_fd67a35640800fdbde0922853907f4e36b0d510e7e5c41fd968ea942e767763e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 11
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_fd67a35640800fdbde0922853907f4e36b0d510e7e5c41fd968ea942e767763e->leave($__internal_fd67a35640800fdbde0922853907f4e36b0d510e7e5c41fd968ea942e767763e_prof);

        
        $__internal_ad93e47a2b8539c1d0bee929e0d2bf06cb48661ffc8818d70207e534e5911bf5->leave($__internal_ad93e47a2b8539c1d0bee929e0d2bf06cb48661ffc8818d70207e534e5911bf5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  82 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
    <h1>{{ file }} <small>line {{ line }}</small></h1>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
