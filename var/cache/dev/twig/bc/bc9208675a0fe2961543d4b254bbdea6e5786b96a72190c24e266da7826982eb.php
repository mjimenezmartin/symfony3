<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_7f5a6386e837d3451f81f34bbe449ae85d11822a6f184b2a475176a3afc92d3d extends Twig_Template
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
        $__internal_dfa317fbfb5cb2471641565657978f6bf8a42fad5adeef14dd613779aff1b08b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa317fbfb5cb2471641565657978f6bf8a42fad5adeef14dd613779aff1b08b->enter($__internal_dfa317fbfb5cb2471641565657978f6bf8a42fad5adeef14dd613779aff1b08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_d7dd142ac8002fbbb16703aabc2388d31b7321ff4e5296b7b9b402db7f6b73bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7dd142ac8002fbbb16703aabc2388d31b7321ff4e5296b7b9b402db7f6b73bd->enter($__internal_d7dd142ac8002fbbb16703aabc2388d31b7321ff4e5296b7b9b402db7f6b73bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_dfa317fbfb5cb2471641565657978f6bf8a42fad5adeef14dd613779aff1b08b->leave($__internal_dfa317fbfb5cb2471641565657978f6bf8a42fad5adeef14dd613779aff1b08b_prof);

        
        $__internal_d7dd142ac8002fbbb16703aabc2388d31b7321ff4e5296b7b9b402db7f6b73bd->leave($__internal_d7dd142ac8002fbbb16703aabc2388d31b7321ff4e5296b7b9b402db7f6b73bd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
