<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_9a1178eb3e317fcb25767c6da14b20a18f48a8fefd71dc52b3ffdbe92d3fd0f0 extends Twig_Template
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
        $__internal_d6be51f8c9830b009d3c8e4cba68feeb3308a8365c3257ac220333802ecf5305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6be51f8c9830b009d3c8e4cba68feeb3308a8365c3257ac220333802ecf5305->enter($__internal_d6be51f8c9830b009d3c8e4cba68feeb3308a8365c3257ac220333802ecf5305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_fe37b7cd5bbb4feb5af1459f1a3c8043934584300ffadb60808ca8e8cf21c126 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe37b7cd5bbb4feb5af1459f1a3c8043934584300ffadb60808ca8e8cf21c126->enter($__internal_fe37b7cd5bbb4feb5af1459f1a3c8043934584300ffadb60808ca8e8cf21c126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d6be51f8c9830b009d3c8e4cba68feeb3308a8365c3257ac220333802ecf5305->leave($__internal_d6be51f8c9830b009d3c8e4cba68feeb3308a8365c3257ac220333802ecf5305_prof);

        
        $__internal_fe37b7cd5bbb4feb5af1459f1a3c8043934584300ffadb60808ca8e8cf21c126->leave($__internal_fe37b7cd5bbb4feb5af1459f1a3c8043934584300ffadb60808ca8e8cf21c126_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
