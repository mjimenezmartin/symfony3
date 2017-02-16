<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_d819000493505bdcfa5987480355f3dbe3cce8e809de734198cd237fecd16612 extends Twig_Template
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
        $__internal_d0430921b50fe8308c7f0d0b72bbbcb53ef095916bf557712b33ff92c1c9022f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0430921b50fe8308c7f0d0b72bbbcb53ef095916bf557712b33ff92c1c9022f->enter($__internal_d0430921b50fe8308c7f0d0b72bbbcb53ef095916bf557712b33ff92c1c9022f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_c3802cee2dbbe2db44ff00e30dba8dfcb8fdc3b511235c5c4c27a17fd948d0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3802cee2dbbe2db44ff00e30dba8dfcb8fdc3b511235c5c4c27a17fd948d0fa->enter($__internal_c3802cee2dbbe2db44ff00e30dba8dfcb8fdc3b511235c5c4c27a17fd948d0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d0430921b50fe8308c7f0d0b72bbbcb53ef095916bf557712b33ff92c1c9022f->leave($__internal_d0430921b50fe8308c7f0d0b72bbbcb53ef095916bf557712b33ff92c1c9022f_prof);

        
        $__internal_c3802cee2dbbe2db44ff00e30dba8dfcb8fdc3b511235c5c4c27a17fd948d0fa->leave($__internal_c3802cee2dbbe2db44ff00e30dba8dfcb8fdc3b511235c5c4c27a17fd948d0fa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.atom.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
