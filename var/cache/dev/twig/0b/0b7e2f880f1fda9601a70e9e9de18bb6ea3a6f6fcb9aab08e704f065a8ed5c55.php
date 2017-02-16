<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_08a63089a5a8de80597c82cee858eb9903e5a157e68cda02d7c3b7eeddf99ab4 extends Twig_Template
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
        $__internal_3d8936a576cba3633b5833436ae9087039eb729bba4588b475ee8d42bc51eefa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d8936a576cba3633b5833436ae9087039eb729bba4588b475ee8d42bc51eefa->enter($__internal_3d8936a576cba3633b5833436ae9087039eb729bba4588b475ee8d42bc51eefa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_5672e88fed2dde00cbafb730895e98e6a0e9ef31db299a66ae2fedd1884fbb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5672e88fed2dde00cbafb730895e98e6a0e9ef31db299a66ae2fedd1884fbb45->enter($__internal_5672e88fed2dde00cbafb730895e98e6a0e9ef31db299a66ae2fedd1884fbb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_3d8936a576cba3633b5833436ae9087039eb729bba4588b475ee8d42bc51eefa->leave($__internal_3d8936a576cba3633b5833436ae9087039eb729bba4588b475ee8d42bc51eefa_prof);

        
        $__internal_5672e88fed2dde00cbafb730895e98e6a0e9ef31db299a66ae2fedd1884fbb45->leave($__internal_5672e88fed2dde00cbafb730895e98e6a0e9ef31db299a66ae2fedd1884fbb45_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
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
", "TwigBundle:Exception:traces.xml.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
