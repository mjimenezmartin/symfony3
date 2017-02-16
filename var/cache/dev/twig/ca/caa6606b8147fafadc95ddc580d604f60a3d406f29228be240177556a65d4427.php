<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a3fde9299b67f1673bc7739f43105dc9b9aa9c91c8437b1fc84c42361061bd16 extends Twig_Template
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
        $__internal_13f40caac33b26191c0ab7d36598fed6cfa5499b93e4e0349f4987d35e9f7ff8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f40caac33b26191c0ab7d36598fed6cfa5499b93e4e0349f4987d35e9f7ff8->enter($__internal_13f40caac33b26191c0ab7d36598fed6cfa5499b93e4e0349f4987d35e9f7ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_289412dbb9ececbd8ca4a609b9f1c0ad6a198afc871080b14d8916d942740bfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_289412dbb9ececbd8ca4a609b9f1c0ad6a198afc871080b14d8916d942740bfa->enter($__internal_289412dbb9ececbd8ca4a609b9f1c0ad6a198afc871080b14d8916d942740bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_13f40caac33b26191c0ab7d36598fed6cfa5499b93e4e0349f4987d35e9f7ff8->leave($__internal_13f40caac33b26191c0ab7d36598fed6cfa5499b93e4e0349f4987d35e9f7ff8_prof);

        
        $__internal_289412dbb9ececbd8ca4a609b9f1c0ad6a198afc871080b14d8916d942740bfa->leave($__internal_289412dbb9ececbd8ca4a609b9f1c0ad6a198afc871080b14d8916d942740bfa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
