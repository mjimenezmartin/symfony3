<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_4a24cb6dc3edb7ff106782de8ae5e61137f8b44ed1f82b0a24d8e4902c05d2d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1daeaa0fbd77c8ce9f8cba857d9cdfccf05ed7ca6c4a2a1da78eb56e16d805e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1daeaa0fbd77c8ce9f8cba857d9cdfccf05ed7ca6c4a2a1da78eb56e16d805e5->enter($__internal_1daeaa0fbd77c8ce9f8cba857d9cdfccf05ed7ca6c4a2a1da78eb56e16d805e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_23097bfb7d8302b248ffe53430d1ccab16fda9804326dbd2be5000c53835f3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23097bfb7d8302b248ffe53430d1ccab16fda9804326dbd2be5000c53835f3e1->enter($__internal_23097bfb7d8302b248ffe53430d1ccab16fda9804326dbd2be5000c53835f3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1daeaa0fbd77c8ce9f8cba857d9cdfccf05ed7ca6c4a2a1da78eb56e16d805e5->leave($__internal_1daeaa0fbd77c8ce9f8cba857d9cdfccf05ed7ca6c4a2a1da78eb56e16d805e5_prof);

        
        $__internal_23097bfb7d8302b248ffe53430d1ccab16fda9804326dbd2be5000c53835f3e1->leave($__internal_23097bfb7d8302b248ffe53430d1ccab16fda9804326dbd2be5000c53835f3e1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f8bf3448ff2328caa89aa30cb4f311124db65c2fc9b74248d88516dfaa61b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8bf3448ff2328caa89aa30cb4f311124db65c2fc9b74248d88516dfaa61b3a->enter($__internal_1f8bf3448ff2328caa89aa30cb4f311124db65c2fc9b74248d88516dfaa61b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a7f0540617dc8884d58ffd8736f05e74aad174cee0ccea81039566fc4f5c7747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7f0540617dc8884d58ffd8736f05e74aad174cee0ccea81039566fc4f5c7747->enter($__internal_a7f0540617dc8884d58ffd8736f05e74aad174cee0ccea81039566fc4f5c7747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a7f0540617dc8884d58ffd8736f05e74aad174cee0ccea81039566fc4f5c7747->leave($__internal_a7f0540617dc8884d58ffd8736f05e74aad174cee0ccea81039566fc4f5c7747_prof);

        
        $__internal_1f8bf3448ff2328caa89aa30cb4f311124db65c2fc9b74248d88516dfaa61b3a->leave($__internal_1f8bf3448ff2328caa89aa30cb4f311124db65c2fc9b74248d88516dfaa61b3a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a99cfcbbf54963d52f926b103536ae997e4aedd709fba8861ac01960a059e4cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99cfcbbf54963d52f926b103536ae997e4aedd709fba8861ac01960a059e4cf->enter($__internal_a99cfcbbf54963d52f926b103536ae997e4aedd709fba8861ac01960a059e4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_30b6ff300fdc29caa8e96cd2aef00b9647d003ea3c8f22f373e5a8d6be0af04d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b6ff300fdc29caa8e96cd2aef00b9647d003ea3c8f22f373e5a8d6be0af04d->enter($__internal_30b6ff300fdc29caa8e96cd2aef00b9647d003ea3c8f22f373e5a8d6be0af04d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30b6ff300fdc29caa8e96cd2aef00b9647d003ea3c8f22f373e5a8d6be0af04d->leave($__internal_30b6ff300fdc29caa8e96cd2aef00b9647d003ea3c8f22f373e5a8d6be0af04d_prof);

        
        $__internal_a99cfcbbf54963d52f926b103536ae997e4aedd709fba8861ac01960a059e4cf->leave($__internal_a99cfcbbf54963d52f926b103536ae997e4aedd709fba8861ac01960a059e4cf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69e376514fabf802110a3f4b473d3d0980e9ee8b22a3b5316af4ed488edad7d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e376514fabf802110a3f4b473d3d0980e9ee8b22a3b5316af4ed488edad7d4->enter($__internal_69e376514fabf802110a3f4b473d3d0980e9ee8b22a3b5316af4ed488edad7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d2895bc1b0530e407fdab92bf317b50eeee02b09bfed5469d8b1ec6e051e604f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2895bc1b0530e407fdab92bf317b50eeee02b09bfed5469d8b1ec6e051e604f->enter($__internal_d2895bc1b0530e407fdab92bf317b50eeee02b09bfed5469d8b1ec6e051e604f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d2895bc1b0530e407fdab92bf317b50eeee02b09bfed5469d8b1ec6e051e604f->leave($__internal_d2895bc1b0530e407fdab92bf317b50eeee02b09bfed5469d8b1ec6e051e604f_prof);

        
        $__internal_69e376514fabf802110a3f4b473d3d0980e9ee8b22a3b5316af4ed488edad7d4->leave($__internal_69e376514fabf802110a3f4b473d3d0980e9ee8b22a3b5316af4ed488edad7d4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
