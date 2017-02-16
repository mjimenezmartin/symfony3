<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_04201cf7291882ec71386132d49f4dfa2dbbc7835537d03fbae6ce910dfcf67c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_9bb91226cbb328c11ab1f5037a666ac7d115fbee433cd873c6df415f8c1de7ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bb91226cbb328c11ab1f5037a666ac7d115fbee433cd873c6df415f8c1de7ea->enter($__internal_9bb91226cbb328c11ab1f5037a666ac7d115fbee433cd873c6df415f8c1de7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_cb549491abb64c6ee35861c47bc6dfbf302cfc6b81dab5939848a9da1ff7e1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb549491abb64c6ee35861c47bc6dfbf302cfc6b81dab5939848a9da1ff7e1ec->enter($__internal_cb549491abb64c6ee35861c47bc6dfbf302cfc6b81dab5939848a9da1ff7e1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bb91226cbb328c11ab1f5037a666ac7d115fbee433cd873c6df415f8c1de7ea->leave($__internal_9bb91226cbb328c11ab1f5037a666ac7d115fbee433cd873c6df415f8c1de7ea_prof);

        
        $__internal_cb549491abb64c6ee35861c47bc6dfbf302cfc6b81dab5939848a9da1ff7e1ec->leave($__internal_cb549491abb64c6ee35861c47bc6dfbf302cfc6b81dab5939848a9da1ff7e1ec_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0deda6c65c71ad4245715ab72f74abb2ab3de3c52a516ae65424adc678bdf32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0deda6c65c71ad4245715ab72f74abb2ab3de3c52a516ae65424adc678bdf32d->enter($__internal_0deda6c65c71ad4245715ab72f74abb2ab3de3c52a516ae65424adc678bdf32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_be11cc6111f2964fee6b1f81dfa0d951e0685cf1a6662bb1c7e4f9277a56f87c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be11cc6111f2964fee6b1f81dfa0d951e0685cf1a6662bb1c7e4f9277a56f87c->enter($__internal_be11cc6111f2964fee6b1f81dfa0d951e0685cf1a6662bb1c7e4f9277a56f87c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_be11cc6111f2964fee6b1f81dfa0d951e0685cf1a6662bb1c7e4f9277a56f87c->leave($__internal_be11cc6111f2964fee6b1f81dfa0d951e0685cf1a6662bb1c7e4f9277a56f87c_prof);

        
        $__internal_0deda6c65c71ad4245715ab72f74abb2ab3de3c52a516ae65424adc678bdf32d->leave($__internal_0deda6c65c71ad4245715ab72f74abb2ab3de3c52a516ae65424adc678bdf32d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
