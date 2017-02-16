<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_18d2f5c8a7cd981459e8fece869c02405bc34a4dc9435d5cab71fab11b54a3ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_63bd77f6a12a1cc4eca48ac0e8957e5ed6b1532b0ef4556aa5cd166805139ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63bd77f6a12a1cc4eca48ac0e8957e5ed6b1532b0ef4556aa5cd166805139ca2->enter($__internal_63bd77f6a12a1cc4eca48ac0e8957e5ed6b1532b0ef4556aa5cd166805139ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_e3953dcb804f01cb8c79a07302d1dccd908fa9bb3cc95f979577a40d4766e736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3953dcb804f01cb8c79a07302d1dccd908fa9bb3cc95f979577a40d4766e736->enter($__internal_e3953dcb804f01cb8c79a07302d1dccd908fa9bb3cc95f979577a40d4766e736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63bd77f6a12a1cc4eca48ac0e8957e5ed6b1532b0ef4556aa5cd166805139ca2->leave($__internal_63bd77f6a12a1cc4eca48ac0e8957e5ed6b1532b0ef4556aa5cd166805139ca2_prof);

        
        $__internal_e3953dcb804f01cb8c79a07302d1dccd908fa9bb3cc95f979577a40d4766e736->leave($__internal_e3953dcb804f01cb8c79a07302d1dccd908fa9bb3cc95f979577a40d4766e736_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_55b3f7b6840ed887fd0d9d388ab6c27119d86fcd6525530c78b2029ddbabfd11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55b3f7b6840ed887fd0d9d388ab6c27119d86fcd6525530c78b2029ddbabfd11->enter($__internal_55b3f7b6840ed887fd0d9d388ab6c27119d86fcd6525530c78b2029ddbabfd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_b772920c833d7ca4112d92c242561dc519603e1e6aa8b361502d8d98a2d34e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b772920c833d7ca4112d92c242561dc519603e1e6aa8b361502d8d98a2d34e01->enter($__internal_b772920c833d7ca4112d92c242561dc519603e1e6aa8b361502d8d98a2d34e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_b772920c833d7ca4112d92c242561dc519603e1e6aa8b361502d8d98a2d34e01->leave($__internal_b772920c833d7ca4112d92c242561dc519603e1e6aa8b361502d8d98a2d34e01_prof);

        
        $__internal_55b3f7b6840ed887fd0d9d388ab6c27119d86fcd6525530c78b2029ddbabfd11->leave($__internal_55b3f7b6840ed887fd0d9d388ab6c27119d86fcd6525530c78b2029ddbabfd11_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_21ad6b63413a0ddbcf8968ea7be5be80026d84fa249f853d324db57559277b18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21ad6b63413a0ddbcf8968ea7be5be80026d84fa249f853d324db57559277b18->enter($__internal_21ad6b63413a0ddbcf8968ea7be5be80026d84fa249f853d324db57559277b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9e4793917cb7f0c61606a7520d00c55efefa9d5e3e1aa80ca260d7bb2f31178d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e4793917cb7f0c61606a7520d00c55efefa9d5e3e1aa80ca260d7bb2f31178d->enter($__internal_9e4793917cb7f0c61606a7520d00c55efefa9d5e3e1aa80ca260d7bb2f31178d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_9e4793917cb7f0c61606a7520d00c55efefa9d5e3e1aa80ca260d7bb2f31178d->leave($__internal_9e4793917cb7f0c61606a7520d00c55efefa9d5e3e1aa80ca260d7bb2f31178d_prof);

        
        $__internal_21ad6b63413a0ddbcf8968ea7be5be80026d84fa249f853d324db57559277b18->leave($__internal_21ad6b63413a0ddbcf8968ea7be5be80026d84fa249f853d324db57559277b18_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
