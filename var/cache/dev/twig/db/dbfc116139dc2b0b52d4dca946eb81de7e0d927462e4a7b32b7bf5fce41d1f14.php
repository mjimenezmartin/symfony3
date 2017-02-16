<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4b0622da805845a0daac3422473f0c5b4446acd14c550ca7f12eeb5acf4f8577 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_c692927240d176c6275667c446679d754235523693c1c8d6640e5aa035aa3beb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c692927240d176c6275667c446679d754235523693c1c8d6640e5aa035aa3beb->enter($__internal_c692927240d176c6275667c446679d754235523693c1c8d6640e5aa035aa3beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_46e05bf2d3e263c019a11a8b1e7d01e90a124b23739e3b97f87d6990a710e00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e05bf2d3e263c019a11a8b1e7d01e90a124b23739e3b97f87d6990a710e00c->enter($__internal_46e05bf2d3e263c019a11a8b1e7d01e90a124b23739e3b97f87d6990a710e00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c692927240d176c6275667c446679d754235523693c1c8d6640e5aa035aa3beb->leave($__internal_c692927240d176c6275667c446679d754235523693c1c8d6640e5aa035aa3beb_prof);

        
        $__internal_46e05bf2d3e263c019a11a8b1e7d01e90a124b23739e3b97f87d6990a710e00c->leave($__internal_46e05bf2d3e263c019a11a8b1e7d01e90a124b23739e3b97f87d6990a710e00c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_04f6580d8caeb766a754746f51dc11da4cdc583fbe93d2b14f95260ef8a5e7ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f6580d8caeb766a754746f51dc11da4cdc583fbe93d2b14f95260ef8a5e7ec->enter($__internal_04f6580d8caeb766a754746f51dc11da4cdc583fbe93d2b14f95260ef8a5e7ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b65c8b104f4431c56cc98353fab371a61329e5e5a650dc674d46cc060afeb688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65c8b104f4431c56cc98353fab371a61329e5e5a650dc674d46cc060afeb688->enter($__internal_b65c8b104f4431c56cc98353fab371a61329e5e5a650dc674d46cc060afeb688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b65c8b104f4431c56cc98353fab371a61329e5e5a650dc674d46cc060afeb688->leave($__internal_b65c8b104f4431c56cc98353fab371a61329e5e5a650dc674d46cc060afeb688_prof);

        
        $__internal_04f6580d8caeb766a754746f51dc11da4cdc583fbe93d2b14f95260ef8a5e7ec->leave($__internal_04f6580d8caeb766a754746f51dc11da4cdc583fbe93d2b14f95260ef8a5e7ec_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4307767d37edf3716b5049be59064c3a2e4f32bb7259415312b3577497a70f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4307767d37edf3716b5049be59064c3a2e4f32bb7259415312b3577497a70f50->enter($__internal_4307767d37edf3716b5049be59064c3a2e4f32bb7259415312b3577497a70f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_90b542fe39bcd1b12a66f590ab315883d034d764b6f5fa467f19bd9a3350fb98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b542fe39bcd1b12a66f590ab315883d034d764b6f5fa467f19bd9a3350fb98->enter($__internal_90b542fe39bcd1b12a66f590ab315883d034d764b6f5fa467f19bd9a3350fb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_90b542fe39bcd1b12a66f590ab315883d034d764b6f5fa467f19bd9a3350fb98->leave($__internal_90b542fe39bcd1b12a66f590ab315883d034d764b6f5fa467f19bd9a3350fb98_prof);

        
        $__internal_4307767d37edf3716b5049be59064c3a2e4f32bb7259415312b3577497a70f50->leave($__internal_4307767d37edf3716b5049be59064c3a2e4f32bb7259415312b3577497a70f50_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_948ceaa7e599cac8df635b13add14317dd507d4271a435e531a834de9df60ae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948ceaa7e599cac8df635b13add14317dd507d4271a435e531a834de9df60ae3->enter($__internal_948ceaa7e599cac8df635b13add14317dd507d4271a435e531a834de9df60ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_febe7afdec809a44846d37d198db1548f85fab3ec698e56e0fe4008c4ed647f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_febe7afdec809a44846d37d198db1548f85fab3ec698e56e0fe4008c4ed647f3->enter($__internal_febe7afdec809a44846d37d198db1548f85fab3ec698e56e0fe4008c4ed647f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_febe7afdec809a44846d37d198db1548f85fab3ec698e56e0fe4008c4ed647f3->leave($__internal_febe7afdec809a44846d37d198db1548f85fab3ec698e56e0fe4008c4ed647f3_prof);

        
        $__internal_948ceaa7e599cac8df635b13add14317dd507d4271a435e531a834de9df60ae3->leave($__internal_948ceaa7e599cac8df635b13add14317dd507d4271a435e531a834de9df60ae3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
