<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2432f14b96ec1b4b525a9699ea8a8e6105415c5973a4d7673053b21ec83da8b1 extends Twig_Template
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
        $__internal_88b402bfba006f0e3198304dec4d6452d2f9bbadab654913d273f3ebad1a2f5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b402bfba006f0e3198304dec4d6452d2f9bbadab654913d273f3ebad1a2f5d->enter($__internal_88b402bfba006f0e3198304dec4d6452d2f9bbadab654913d273f3ebad1a2f5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_38820ae713a83c65f345b4d1b58088a95151cb687f34da1beff4268e81324e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38820ae713a83c65f345b4d1b58088a95151cb687f34da1beff4268e81324e25->enter($__internal_38820ae713a83c65f345b4d1b58088a95151cb687f34da1beff4268e81324e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_88b402bfba006f0e3198304dec4d6452d2f9bbadab654913d273f3ebad1a2f5d->leave($__internal_88b402bfba006f0e3198304dec4d6452d2f9bbadab654913d273f3ebad1a2f5d_prof);

        
        $__internal_38820ae713a83c65f345b4d1b58088a95151cb687f34da1beff4268e81324e25->leave($__internal_38820ae713a83c65f345b4d1b58088a95151cb687f34da1beff4268e81324e25_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
