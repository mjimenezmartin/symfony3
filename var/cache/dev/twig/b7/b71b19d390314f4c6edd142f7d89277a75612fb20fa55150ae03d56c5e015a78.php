<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_ee3662a9f05ebff7234dc4b710f154a176d0624a4826999636991f328bd00a25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c045a8654381cd731fa1da828bc2ea434219aca16fb8ae025fec11e0b1585bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c045a8654381cd731fa1da828bc2ea434219aca16fb8ae025fec11e0b1585bf->enter($__internal_0c045a8654381cd731fa1da828bc2ea434219aca16fb8ae025fec11e0b1585bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_dcfeac7c7b67a0163d0e982e7365b44821a1cb6545b2ecbe80e175137b505ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcfeac7c7b67a0163d0e982e7365b44821a1cb6545b2ecbe80e175137b505ba1->enter($__internal_dcfeac7c7b67a0163d0e982e7365b44821a1cb6545b2ecbe80e175137b505ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_0c045a8654381cd731fa1da828bc2ea434219aca16fb8ae025fec11e0b1585bf->leave($__internal_0c045a8654381cd731fa1da828bc2ea434219aca16fb8ae025fec11e0b1585bf_prof);

        
        $__internal_dcfeac7c7b67a0163d0e982e7365b44821a1cb6545b2ecbe80e175137b505ba1->leave($__internal_dcfeac7c7b67a0163d0e982e7365b44821a1cb6545b2ecbe80e175137b505ba1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
