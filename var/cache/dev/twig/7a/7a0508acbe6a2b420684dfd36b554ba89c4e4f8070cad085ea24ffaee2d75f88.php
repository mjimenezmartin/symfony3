<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_b28e028706ca163b911312bfe68d9e2c1a47095241229c74ed5c30e9428bee75 extends Twig_Template
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
        $__internal_1d6e96f8344bdff31e2e564c38c65089a90ffe3802ed9b7156ecade52fb2ede8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6e96f8344bdff31e2e564c38c65089a90ffe3802ed9b7156ecade52fb2ede8->enter($__internal_1d6e96f8344bdff31e2e564c38c65089a90ffe3802ed9b7156ecade52fb2ede8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_33203ec193914d8e82e9b1fb7fa86d48663ac5ac08c92dacdb90c79d36725feb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33203ec193914d8e82e9b1fb7fa86d48663ac5ac08c92dacdb90c79d36725feb->enter($__internal_33203ec193914d8e82e9b1fb7fa86d48663ac5ac08c92dacdb90c79d36725feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_1d6e96f8344bdff31e2e564c38c65089a90ffe3802ed9b7156ecade52fb2ede8->leave($__internal_1d6e96f8344bdff31e2e564c38c65089a90ffe3802ed9b7156ecade52fb2ede8_prof);

        
        $__internal_33203ec193914d8e82e9b1fb7fa86d48663ac5ac08c92dacdb90c79d36725feb->leave($__internal_33203ec193914d8e82e9b1fb7fa86d48663ac5ac08c92dacdb90c79d36725feb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
