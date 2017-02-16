<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_1be293c0e3f4a210436763263247c7f06aafeee22d0e2aa73aea6d290f88107e extends Twig_Template
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
        $__internal_64e3e91c5c57e1597e4591be6770167cd7eba134b128236e3815e6bd4345bf51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64e3e91c5c57e1597e4591be6770167cd7eba134b128236e3815e6bd4345bf51->enter($__internal_64e3e91c5c57e1597e4591be6770167cd7eba134b128236e3815e6bd4345bf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_97dec308ea38b32626d28f4d9dcdbf09d007b4a22b2f752009fe913c99b18cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97dec308ea38b32626d28f4d9dcdbf09d007b4a22b2f752009fe913c99b18cac->enter($__internal_97dec308ea38b32626d28f4d9dcdbf09d007b4a22b2f752009fe913c99b18cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_64e3e91c5c57e1597e4591be6770167cd7eba134b128236e3815e6bd4345bf51->leave($__internal_64e3e91c5c57e1597e4591be6770167cd7eba134b128236e3815e6bd4345bf51_prof);

        
        $__internal_97dec308ea38b32626d28f4d9dcdbf09d007b4a22b2f752009fe913c99b18cac->leave($__internal_97dec308ea38b32626d28f4d9dcdbf09d007b4a22b2f752009fe913c99b18cac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
