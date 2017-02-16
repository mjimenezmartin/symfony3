<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cf25530b7ab829c9ce8028d959410d8c62fa89a614bbc876f0d31a59638977d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f25fce1371878fb98726ca9f22eac070a892ce654767128f6267cd2e85f96324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f25fce1371878fb98726ca9f22eac070a892ce654767128f6267cd2e85f96324->enter($__internal_f25fce1371878fb98726ca9f22eac070a892ce654767128f6267cd2e85f96324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_2a64b4566ebb8e0af20854c2574472e7f9cc41a84a7f8b3d5da384af1065091e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a64b4566ebb8e0af20854c2574472e7f9cc41a84a7f8b3d5da384af1065091e->enter($__internal_2a64b4566ebb8e0af20854c2574472e7f9cc41a84a7f8b3d5da384af1065091e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f25fce1371878fb98726ca9f22eac070a892ce654767128f6267cd2e85f96324->leave($__internal_f25fce1371878fb98726ca9f22eac070a892ce654767128f6267cd2e85f96324_prof);

        
        $__internal_2a64b4566ebb8e0af20854c2574472e7f9cc41a84a7f8b3d5da384af1065091e->leave($__internal_2a64b4566ebb8e0af20854c2574472e7f9cc41a84a7f8b3d5da384af1065091e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_222df17ce7bed3548c1468021700ca0377ce64acde57a06eb5bcc5c84f593774 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_222df17ce7bed3548c1468021700ca0377ce64acde57a06eb5bcc5c84f593774->enter($__internal_222df17ce7bed3548c1468021700ca0377ce64acde57a06eb5bcc5c84f593774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a66556b2defe4ab98f87614291ebc30966ff84165489385f28adedae5e60c421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a66556b2defe4ab98f87614291ebc30966ff84165489385f28adedae5e60c421->enter($__internal_a66556b2defe4ab98f87614291ebc30966ff84165489385f28adedae5e60c421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a66556b2defe4ab98f87614291ebc30966ff84165489385f28adedae5e60c421->leave($__internal_a66556b2defe4ab98f87614291ebc30966ff84165489385f28adedae5e60c421_prof);

        
        $__internal_222df17ce7bed3548c1468021700ca0377ce64acde57a06eb5bcc5c84f593774->leave($__internal_222df17ce7bed3548c1468021700ca0377ce64acde57a06eb5bcc5c84f593774_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aad292f0640d8e1ba5d46c76f337a9a13593cf78393aed0bd1788e5d2b60d117 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aad292f0640d8e1ba5d46c76f337a9a13593cf78393aed0bd1788e5d2b60d117->enter($__internal_aad292f0640d8e1ba5d46c76f337a9a13593cf78393aed0bd1788e5d2b60d117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7583220d36abd24ceebb33541bc19dde24bc7934d6ab608cff161ff392210b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7583220d36abd24ceebb33541bc19dde24bc7934d6ab608cff161ff392210b6->enter($__internal_e7583220d36abd24ceebb33541bc19dde24bc7934d6ab608cff161ff392210b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_e7583220d36abd24ceebb33541bc19dde24bc7934d6ab608cff161ff392210b6->leave($__internal_e7583220d36abd24ceebb33541bc19dde24bc7934d6ab608cff161ff392210b6_prof);

        
        $__internal_aad292f0640d8e1ba5d46c76f337a9a13593cf78393aed0bd1788e5d2b60d117->leave($__internal_aad292f0640d8e1ba5d46c76f337a9a13593cf78393aed0bd1788e5d2b60d117_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
