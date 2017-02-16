<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_33fe708f7c6c3870932fdc406740789b326bb11de8080549e1a9a1c4e1a3b9ed extends Twig_Template
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
        $__internal_696c712c3c563410807b65104eaa6060951c2f1300c1367e404cca05db8079da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_696c712c3c563410807b65104eaa6060951c2f1300c1367e404cca05db8079da->enter($__internal_696c712c3c563410807b65104eaa6060951c2f1300c1367e404cca05db8079da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_da8c2932929db425014cb144043ebe760f3c93a07814281116ac45d188b86f77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da8c2932929db425014cb144043ebe760f3c93a07814281116ac45d188b86f77->enter($__internal_da8c2932929db425014cb144043ebe760f3c93a07814281116ac45d188b86f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_696c712c3c563410807b65104eaa6060951c2f1300c1367e404cca05db8079da->leave($__internal_696c712c3c563410807b65104eaa6060951c2f1300c1367e404cca05db8079da_prof);

        
        $__internal_da8c2932929db425014cb144043ebe760f3c93a07814281116ac45d188b86f77->leave($__internal_da8c2932929db425014cb144043ebe760f3c93a07814281116ac45d188b86f77_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
