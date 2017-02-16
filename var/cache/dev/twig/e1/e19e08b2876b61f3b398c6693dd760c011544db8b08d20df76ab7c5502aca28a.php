<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_0a370132678642a6c65420866638907e1a3518f5cdde5f8c08ef2212e2a0bf4a extends Twig_Template
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
        $__internal_b4e52f29ffef214f3ec1c8e21d98a1e2bac7a5cb7f4729d05dc9dad8244ae019 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e52f29ffef214f3ec1c8e21d98a1e2bac7a5cb7f4729d05dc9dad8244ae019->enter($__internal_b4e52f29ffef214f3ec1c8e21d98a1e2bac7a5cb7f4729d05dc9dad8244ae019_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_091af8a8c4e0da3e464c22c52acb9f53dd96b8c1492d051149855fef260c1307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_091af8a8c4e0da3e464c22c52acb9f53dd96b8c1492d051149855fef260c1307->enter($__internal_091af8a8c4e0da3e464c22c52acb9f53dd96b8c1492d051149855fef260c1307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_b4e52f29ffef214f3ec1c8e21d98a1e2bac7a5cb7f4729d05dc9dad8244ae019->leave($__internal_b4e52f29ffef214f3ec1c8e21d98a1e2bac7a5cb7f4729d05dc9dad8244ae019_prof);

        
        $__internal_091af8a8c4e0da3e464c22c52acb9f53dd96b8c1492d051149855fef260c1307->leave($__internal_091af8a8c4e0da3e464c22c52acb9f53dd96b8c1492d051149855fef260c1307_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
