<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_7be53e056db39ea869db5cdf92b8ad25d0115cfee49befe964331c25a152db9f extends Twig_Template
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
        $__internal_982322917c8295f864150a7f20efbe44edb5525b3fe31223f4f68fa98f1c66e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_982322917c8295f864150a7f20efbe44edb5525b3fe31223f4f68fa98f1c66e8->enter($__internal_982322917c8295f864150a7f20efbe44edb5525b3fe31223f4f68fa98f1c66e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_52d689592f64724b0402bf339bea1b812be392ac67c54c0157fe51e6f294bd26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52d689592f64724b0402bf339bea1b812be392ac67c54c0157fe51e6f294bd26->enter($__internal_52d689592f64724b0402bf339bea1b812be392ac67c54c0157fe51e6f294bd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_982322917c8295f864150a7f20efbe44edb5525b3fe31223f4f68fa98f1c66e8->leave($__internal_982322917c8295f864150a7f20efbe44edb5525b3fe31223f4f68fa98f1c66e8_prof);

        
        $__internal_52d689592f64724b0402bf339bea1b812be392ac67c54c0157fe51e6f294bd26->leave($__internal_52d689592f64724b0402bf339bea1b812be392ac67c54c0157fe51e6f294bd26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
