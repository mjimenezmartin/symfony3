<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_52504d3098f0d16bf28aa5f662b6690c77629a6cb598186deb978bd6902b8fb6 extends Twig_Template
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
        $__internal_305635435aea41fdf2c8a234cbc4d82dbe6e1a7fcedcc6f15a00a8d3a32dbe3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305635435aea41fdf2c8a234cbc4d82dbe6e1a7fcedcc6f15a00a8d3a32dbe3d->enter($__internal_305635435aea41fdf2c8a234cbc4d82dbe6e1a7fcedcc6f15a00a8d3a32dbe3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_46f872980f563ac4aaf7301d768c23d5f740111340a16dc7b325c3f28c5830f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46f872980f563ac4aaf7301d768c23d5f740111340a16dc7b325c3f28c5830f1->enter($__internal_46f872980f563ac4aaf7301d768c23d5f740111340a16dc7b325c3f28c5830f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_305635435aea41fdf2c8a234cbc4d82dbe6e1a7fcedcc6f15a00a8d3a32dbe3d->leave($__internal_305635435aea41fdf2c8a234cbc4d82dbe6e1a7fcedcc6f15a00a8d3a32dbe3d_prof);

        
        $__internal_46f872980f563ac4aaf7301d768c23d5f740111340a16dc7b325c3f28c5830f1->leave($__internal_46f872980f563ac4aaf7301d768c23d5f740111340a16dc7b325c3f28c5830f1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
