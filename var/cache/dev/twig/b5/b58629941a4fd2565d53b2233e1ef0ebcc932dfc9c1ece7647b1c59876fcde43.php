<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8786c884846b571d7917471a333405ef43207999291ba4cbeffca50057cb6a33 extends Twig_Template
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
        $__internal_18f5180f9dc604242e8f178ba50f161196b551297dfec691fd3aa9a832285fcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18f5180f9dc604242e8f178ba50f161196b551297dfec691fd3aa9a832285fcb->enter($__internal_18f5180f9dc604242e8f178ba50f161196b551297dfec691fd3aa9a832285fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_701170b1733b67837b5e883d6dec5f7155a2c3d6d6c07bf3deb4eaf2b628f557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701170b1733b67837b5e883d6dec5f7155a2c3d6d6c07bf3deb4eaf2b628f557->enter($__internal_701170b1733b67837b5e883d6dec5f7155a2c3d6d6c07bf3deb4eaf2b628f557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_18f5180f9dc604242e8f178ba50f161196b551297dfec691fd3aa9a832285fcb->leave($__internal_18f5180f9dc604242e8f178ba50f161196b551297dfec691fd3aa9a832285fcb_prof);

        
        $__internal_701170b1733b67837b5e883d6dec5f7155a2c3d6d6c07bf3deb4eaf2b628f557->leave($__internal_701170b1733b67837b5e883d6dec5f7155a2c3d6d6c07bf3deb4eaf2b628f557_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
