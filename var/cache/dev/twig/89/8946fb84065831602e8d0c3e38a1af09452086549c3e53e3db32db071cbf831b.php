<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_073815f3cd835a445acb0c5fda9d18c4a54eefd2e68188cf4cf4e372fc84e1c1 extends Twig_Template
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
        $__internal_d2be731f0a05537084498a5ff37f870ddafb9fcf6b44e723949f191d54dfa49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2be731f0a05537084498a5ff37f870ddafb9fcf6b44e723949f191d54dfa49b->enter($__internal_d2be731f0a05537084498a5ff37f870ddafb9fcf6b44e723949f191d54dfa49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_4e6a1f28093ea05bbe04d65bbc75a6878b7b7d0c89bae1844d952195be577076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e6a1f28093ea05bbe04d65bbc75a6878b7b7d0c89bae1844d952195be577076->enter($__internal_4e6a1f28093ea05bbe04d65bbc75a6878b7b7d0c89bae1844d952195be577076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_d2be731f0a05537084498a5ff37f870ddafb9fcf6b44e723949f191d54dfa49b->leave($__internal_d2be731f0a05537084498a5ff37f870ddafb9fcf6b44e723949f191d54dfa49b_prof);

        
        $__internal_4e6a1f28093ea05bbe04d65bbc75a6878b7b7d0c89bae1844d952195be577076->leave($__internal_4e6a1f28093ea05bbe04d65bbc75a6878b7b7d0c89bae1844d952195be577076_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
