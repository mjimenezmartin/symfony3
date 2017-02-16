<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_2cbaea0b85bd5e4e618a9446c674b7da20718e2ee6a64b3b38279ea7335c4306 extends Twig_Template
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
        $__internal_032257c1a4aa2a8176fa3594a7e00a3b8cab0fbdf8bfb8d86ad2e6a3df24a7aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_032257c1a4aa2a8176fa3594a7e00a3b8cab0fbdf8bfb8d86ad2e6a3df24a7aa->enter($__internal_032257c1a4aa2a8176fa3594a7e00a3b8cab0fbdf8bfb8d86ad2e6a3df24a7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_8e528c214baa66e69592f25482f5fdb86f47949ad4c654c3e28fe80f643b510e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e528c214baa66e69592f25482f5fdb86f47949ad4c654c3e28fe80f643b510e->enter($__internal_8e528c214baa66e69592f25482f5fdb86f47949ad4c654c3e28fe80f643b510e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_032257c1a4aa2a8176fa3594a7e00a3b8cab0fbdf8bfb8d86ad2e6a3df24a7aa->leave($__internal_032257c1a4aa2a8176fa3594a7e00a3b8cab0fbdf8bfb8d86ad2e6a3df24a7aa_prof);

        
        $__internal_8e528c214baa66e69592f25482f5fdb86f47949ad4c654c3e28fe80f643b510e->leave($__internal_8e528c214baa66e69592f25482f5fdb86f47949ad4c654c3e28fe80f643b510e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
