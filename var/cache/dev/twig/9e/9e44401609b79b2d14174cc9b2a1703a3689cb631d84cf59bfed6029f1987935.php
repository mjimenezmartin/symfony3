<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d0efb78e7fd6dc4f57678e1d44c5373a689d71dfccd3e635ade8dd968824f017 extends Twig_Template
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
        $__internal_01342aaf34c8d408c67091b4df65c4b205af3332342612ad70d08662eb84c0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01342aaf34c8d408c67091b4df65c4b205af3332342612ad70d08662eb84c0d4->enter($__internal_01342aaf34c8d408c67091b4df65c4b205af3332342612ad70d08662eb84c0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_0094700105aca6a56aabe575dec070e74730a74ea879772e3e5bb44aa5e1ddf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0094700105aca6a56aabe575dec070e74730a74ea879772e3e5bb44aa5e1ddf9->enter($__internal_0094700105aca6a56aabe575dec070e74730a74ea879772e3e5bb44aa5e1ddf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_01342aaf34c8d408c67091b4df65c4b205af3332342612ad70d08662eb84c0d4->leave($__internal_01342aaf34c8d408c67091b4df65c4b205af3332342612ad70d08662eb84c0d4_prof);

        
        $__internal_0094700105aca6a56aabe575dec070e74730a74ea879772e3e5bb44aa5e1ddf9->leave($__internal_0094700105aca6a56aabe575dec070e74730a74ea879772e3e5bb44aa5e1ddf9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
", "@Twig/Exception/exception.css.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
