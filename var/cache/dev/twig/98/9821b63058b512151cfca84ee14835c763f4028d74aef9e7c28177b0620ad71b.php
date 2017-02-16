<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_e0cf402da5b3f114feaf272564a18bf25e66b423eb304f825bd533f2cf52efd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_2c56b1cbaa120deb4edee56e53537a8a1bba469e5641c70dce385c31f36b623f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c56b1cbaa120deb4edee56e53537a8a1bba469e5641c70dce385c31f36b623f->enter($__internal_2c56b1cbaa120deb4edee56e53537a8a1bba469e5641c70dce385c31f36b623f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_1d524fa495777b4ba863b04beaa325104443fabdb51b33c199c93d993a1eecb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d524fa495777b4ba863b04beaa325104443fabdb51b33c199c93d993a1eecb2->enter($__internal_1d524fa495777b4ba863b04beaa325104443fabdb51b33c199c93d993a1eecb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c56b1cbaa120deb4edee56e53537a8a1bba469e5641c70dce385c31f36b623f->leave($__internal_2c56b1cbaa120deb4edee56e53537a8a1bba469e5641c70dce385c31f36b623f_prof);

        
        $__internal_1d524fa495777b4ba863b04beaa325104443fabdb51b33c199c93d993a1eecb2->leave($__internal_1d524fa495777b4ba863b04beaa325104443fabdb51b33c199c93d993a1eecb2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea1d3efe3160fa7abb799e78354edba22cdf6e272260f0bd2e2cee00bf225a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea1d3efe3160fa7abb799e78354edba22cdf6e272260f0bd2e2cee00bf225a23->enter($__internal_ea1d3efe3160fa7abb799e78354edba22cdf6e272260f0bd2e2cee00bf225a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b2bb72a34e1894a0551862d0ebcf42118da33475891d31754a011a545704a42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2bb72a34e1894a0551862d0ebcf42118da33475891d31754a011a545704a42->enter($__internal_9b2bb72a34e1894a0551862d0ebcf42118da33475891d31754a011a545704a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9b2bb72a34e1894a0551862d0ebcf42118da33475891d31754a011a545704a42->leave($__internal_9b2bb72a34e1894a0551862d0ebcf42118da33475891d31754a011a545704a42_prof);

        
        $__internal_ea1d3efe3160fa7abb799e78354edba22cdf6e272260f0bd2e2cee00bf225a23->leave($__internal_ea1d3efe3160fa7abb799e78354edba22cdf6e272260f0bd2e2cee00bf225a23_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5fc01bba5c22e153b58e14b16587487729dafeab895f7dc7ffe0ee76e7f7ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5fc01bba5c22e153b58e14b16587487729dafeab895f7dc7ffe0ee76e7f7ef4->enter($__internal_a5fc01bba5c22e153b58e14b16587487729dafeab895f7dc7ffe0ee76e7f7ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_897cf267d3dcc1a600d4c76e9b2ce58292716ca20230432bfe101c5b5e50fd16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_897cf267d3dcc1a600d4c76e9b2ce58292716ca20230432bfe101c5b5e50fd16->enter($__internal_897cf267d3dcc1a600d4c76e9b2ce58292716ca20230432bfe101c5b5e50fd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_897cf267d3dcc1a600d4c76e9b2ce58292716ca20230432bfe101c5b5e50fd16->leave($__internal_897cf267d3dcc1a600d4c76e9b2ce58292716ca20230432bfe101c5b5e50fd16_prof);

        
        $__internal_a5fc01bba5c22e153b58e14b16587487729dafeab895f7dc7ffe0ee76e7f7ef4->leave($__internal_a5fc01bba5c22e153b58e14b16587487729dafeab895f7dc7ffe0ee76e7f7ef4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
