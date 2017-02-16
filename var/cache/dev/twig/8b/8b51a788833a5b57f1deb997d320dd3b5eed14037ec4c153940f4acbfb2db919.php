<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_561fbe48fbe98f05b9a8a04e860892b8ceece770330b0b2e3aefd324ca9db3f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5eb4f3f0241e8ce186844e31d0af2c562724a46496daab797b69039e6759dc58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5eb4f3f0241e8ce186844e31d0af2c562724a46496daab797b69039e6759dc58->enter($__internal_5eb4f3f0241e8ce186844e31d0af2c562724a46496daab797b69039e6759dc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_5620d3c13dc51276d8bf158b865b5c46ce45f7b157a1d3e57807190a2de5f557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5620d3c13dc51276d8bf158b865b5c46ce45f7b157a1d3e57807190a2de5f557->enter($__internal_5620d3c13dc51276d8bf158b865b5c46ce45f7b157a1d3e57807190a2de5f557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5eb4f3f0241e8ce186844e31d0af2c562724a46496daab797b69039e6759dc58->leave($__internal_5eb4f3f0241e8ce186844e31d0af2c562724a46496daab797b69039e6759dc58_prof);

        
        $__internal_5620d3c13dc51276d8bf158b865b5c46ce45f7b157a1d3e57807190a2de5f557->leave($__internal_5620d3c13dc51276d8bf158b865b5c46ce45f7b157a1d3e57807190a2de5f557_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d3b1be6a2bd60c13df1abd0d1a41835ba6ba9fe52ee4e943fe5f961702712743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b1be6a2bd60c13df1abd0d1a41835ba6ba9fe52ee4e943fe5f961702712743->enter($__internal_d3b1be6a2bd60c13df1abd0d1a41835ba6ba9fe52ee4e943fe5f961702712743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f306bd8ef5a9b1d25e78a6111fc8e042fb28300c21e960d64aea4124102f7ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f306bd8ef5a9b1d25e78a6111fc8e042fb28300c21e960d64aea4124102f7ef->enter($__internal_6f306bd8ef5a9b1d25e78a6111fc8e042fb28300c21e960d64aea4124102f7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_6f306bd8ef5a9b1d25e78a6111fc8e042fb28300c21e960d64aea4124102f7ef->leave($__internal_6f306bd8ef5a9b1d25e78a6111fc8e042fb28300c21e960d64aea4124102f7ef_prof);

        
        $__internal_d3b1be6a2bd60c13df1abd0d1a41835ba6ba9fe52ee4e943fe5f961702712743->leave($__internal_d3b1be6a2bd60c13df1abd0d1a41835ba6ba9fe52ee4e943fe5f961702712743_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
