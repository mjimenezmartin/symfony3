<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_23ccfc76708646e8d6e55492cb84a23a8660b7fc0c6158b3daeaaddb0fd4a7c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_bf8771bb2e0ce35307f8ad861290e910eb06e84638d4adac9587e513a6f8f6bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf8771bb2e0ce35307f8ad861290e910eb06e84638d4adac9587e513a6f8f6bc->enter($__internal_bf8771bb2e0ce35307f8ad861290e910eb06e84638d4adac9587e513a6f8f6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d2bc0f045801b516e5375a6d136bd3c98e9ee4f04a598740ec503ad189829e88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2bc0f045801b516e5375a6d136bd3c98e9ee4f04a598740ec503ad189829e88->enter($__internal_d2bc0f045801b516e5375a6d136bd3c98e9ee4f04a598740ec503ad189829e88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf8771bb2e0ce35307f8ad861290e910eb06e84638d4adac9587e513a6f8f6bc->leave($__internal_bf8771bb2e0ce35307f8ad861290e910eb06e84638d4adac9587e513a6f8f6bc_prof);

        
        $__internal_d2bc0f045801b516e5375a6d136bd3c98e9ee4f04a598740ec503ad189829e88->leave($__internal_d2bc0f045801b516e5375a6d136bd3c98e9ee4f04a598740ec503ad189829e88_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_266ffacacfcf5285f296da9fd80757d5431e7563d87cc965d8355ad035e569a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266ffacacfcf5285f296da9fd80757d5431e7563d87cc965d8355ad035e569a2->enter($__internal_266ffacacfcf5285f296da9fd80757d5431e7563d87cc965d8355ad035e569a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_64ff8b8522dc61156b77fbffd3e5d3c6f33261e51f3dbe078b6ebdc26b03d74f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64ff8b8522dc61156b77fbffd3e5d3c6f33261e51f3dbe078b6ebdc26b03d74f->enter($__internal_64ff8b8522dc61156b77fbffd3e5d3c6f33261e51f3dbe078b6ebdc26b03d74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_64ff8b8522dc61156b77fbffd3e5d3c6f33261e51f3dbe078b6ebdc26b03d74f->leave($__internal_64ff8b8522dc61156b77fbffd3e5d3c6f33261e51f3dbe078b6ebdc26b03d74f_prof);

        
        $__internal_266ffacacfcf5285f296da9fd80757d5431e7563d87cc965d8355ad035e569a2->leave($__internal_266ffacacfcf5285f296da9fd80757d5431e7563d87cc965d8355ad035e569a2_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7cc59996d40fad2bf09c82f09dc4377e9b2c1be06f25a6f83a8c87374f2144a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc59996d40fad2bf09c82f09dc4377e9b2c1be06f25a6f83a8c87374f2144a2->enter($__internal_7cc59996d40fad2bf09c82f09dc4377e9b2c1be06f25a6f83a8c87374f2144a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a3baf6786bae577b7cde0d2220f650e8b924265a518ebb698b597e4ce8463cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3baf6786bae577b7cde0d2220f650e8b924265a518ebb698b597e4ce8463cfa->enter($__internal_a3baf6786bae577b7cde0d2220f650e8b924265a518ebb698b597e4ce8463cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a3baf6786bae577b7cde0d2220f650e8b924265a518ebb698b597e4ce8463cfa->leave($__internal_a3baf6786bae577b7cde0d2220f650e8b924265a518ebb698b597e4ce8463cfa_prof);

        
        $__internal_7cc59996d40fad2bf09c82f09dc4377e9b2c1be06f25a6f83a8c87374f2144a2->leave($__internal_7cc59996d40fad2bf09c82f09dc4377e9b2c1be06f25a6f83a8c87374f2144a2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b782c47f7ab28fec8c111382427e781b58cf619a5453ed51e6bc678fd0a2d632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b782c47f7ab28fec8c111382427e781b58cf619a5453ed51e6bc678fd0a2d632->enter($__internal_b782c47f7ab28fec8c111382427e781b58cf619a5453ed51e6bc678fd0a2d632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef4af20ae39386de4c9a67c5145dbb593e4a1ac95cbd43a48c607adda16a5ba5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4af20ae39386de4c9a67c5145dbb593e4a1ac95cbd43a48c607adda16a5ba5->enter($__internal_ef4af20ae39386de4c9a67c5145dbb593e4a1ac95cbd43a48c607adda16a5ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_ef4af20ae39386de4c9a67c5145dbb593e4a1ac95cbd43a48c607adda16a5ba5->leave($__internal_ef4af20ae39386de4c9a67c5145dbb593e4a1ac95cbd43a48c607adda16a5ba5_prof);

        
        $__internal_b782c47f7ab28fec8c111382427e781b58cf619a5453ed51e6bc678fd0a2d632->leave($__internal_b782c47f7ab28fec8c111382427e781b58cf619a5453ed51e6bc678fd0a2d632_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
