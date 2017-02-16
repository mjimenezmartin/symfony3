<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_bde4f0bffcf2ed548199a146a18cecc8d3d95f5aa9fd8e852ad8b6c97f8ee1bd extends Twig_Template
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
        $__internal_27ce55dcfebf5e7f7418c5c05ff2d4a1fc6c896138adf6d0fc4f4d4f4bcb4654 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ce55dcfebf5e7f7418c5c05ff2d4a1fc6c896138adf6d0fc4f4d4f4bcb4654->enter($__internal_27ce55dcfebf5e7f7418c5c05ff2d4a1fc6c896138adf6d0fc4f4d4f4bcb4654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_1cbdbbbb016dd97d71c35f96ce9bebceff0151b32ab51d3d70ff5dc583f305a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cbdbbbb016dd97d71c35f96ce9bebceff0151b32ab51d3d70ff5dc583f305a6->enter($__internal_1cbdbbbb016dd97d71c35f96ce9bebceff0151b32ab51d3d70ff5dc583f305a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_27ce55dcfebf5e7f7418c5c05ff2d4a1fc6c896138adf6d0fc4f4d4f4bcb4654->leave($__internal_27ce55dcfebf5e7f7418c5c05ff2d4a1fc6c896138adf6d0fc4f4d4f4bcb4654_prof);

        
        $__internal_1cbdbbbb016dd97d71c35f96ce9bebceff0151b32ab51d3d70ff5dc583f305a6->leave($__internal_1cbdbbbb016dd97d71c35f96ce9bebceff0151b32ab51d3d70ff5dc583f305a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
