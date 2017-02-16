<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_5a977944d71db8ea8f2377773b2a2b4e47c1891d11b58ba02ffe38bf8fb50ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
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
        $__internal_b9b1cf4eaea7c9c30a8ce25b5d5b4410078300702af18c79d467b8d06d31f0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b1cf4eaea7c9c30a8ce25b5d5b4410078300702af18c79d467b8d06d31f0b1->enter($__internal_b9b1cf4eaea7c9c30a8ce25b5d5b4410078300702af18c79d467b8d06d31f0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_2d4698c8a0af19ca9b65583a0e55bd490dfe6807c8caaa05becc570fced214f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4698c8a0af19ca9b65583a0e55bd490dfe6807c8caaa05becc570fced214f2->enter($__internal_2d4698c8a0af19ca9b65583a0e55bd490dfe6807c8caaa05becc570fced214f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b9b1cf4eaea7c9c30a8ce25b5d5b4410078300702af18c79d467b8d06d31f0b1->leave($__internal_b9b1cf4eaea7c9c30a8ce25b5d5b4410078300702af18c79d467b8d06d31f0b1_prof);

        
        $__internal_2d4698c8a0af19ca9b65583a0e55bd490dfe6807c8caaa05becc570fced214f2->leave($__internal_2d4698c8a0af19ca9b65583a0e55bd490dfe6807c8caaa05becc570fced214f2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ba60fc4ad612be5cbe7438e469070804ca1f37c281de1489930230a1069f8f2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba60fc4ad612be5cbe7438e469070804ca1f37c281de1489930230a1069f8f2e->enter($__internal_ba60fc4ad612be5cbe7438e469070804ca1f37c281de1489930230a1069f8f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6fefe0b20710a710331f67da13e1e6f79a5fe85be3b23d2cde8b18832538df76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fefe0b20710a710331f67da13e1e6f79a5fe85be3b23d2cde8b18832538df76->enter($__internal_6fefe0b20710a710331f67da13e1e6f79a5fe85be3b23d2cde8b18832538df76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6fefe0b20710a710331f67da13e1e6f79a5fe85be3b23d2cde8b18832538df76->leave($__internal_6fefe0b20710a710331f67da13e1e6f79a5fe85be3b23d2cde8b18832538df76_prof);

        
        $__internal_ba60fc4ad612be5cbe7438e469070804ca1f37c281de1489930230a1069f8f2e->leave($__internal_ba60fc4ad612be5cbe7438e469070804ca1f37c281de1489930230a1069f8f2e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0e201b89413d94fb799db00f7486ddf8215a98d873192767dd209cdcd496dae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0e201b89413d94fb799db00f7486ddf8215a98d873192767dd209cdcd496dae->enter($__internal_f0e201b89413d94fb799db00f7486ddf8215a98d873192767dd209cdcd496dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98413e8abe968232567479a58947db65c59fddd4dd493a9ead7b007d4e623878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98413e8abe968232567479a58947db65c59fddd4dd493a9ead7b007d4e623878->enter($__internal_98413e8abe968232567479a58947db65c59fddd4dd493a9ead7b007d4e623878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_98413e8abe968232567479a58947db65c59fddd4dd493a9ead7b007d4e623878->leave($__internal_98413e8abe968232567479a58947db65c59fddd4dd493a9ead7b007d4e623878_prof);

        
        $__internal_f0e201b89413d94fb799db00f7486ddf8215a98d873192767dd209cdcd496dae->leave($__internal_f0e201b89413d94fb799db00f7486ddf8215a98d873192767dd209cdcd496dae_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
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
", "WebProfilerBundle:Profiler:open.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
