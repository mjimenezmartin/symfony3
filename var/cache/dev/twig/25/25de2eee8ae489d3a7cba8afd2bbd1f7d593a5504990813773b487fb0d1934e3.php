<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_4a3cbe17b43cb14b59ee26d3a9471a15931cb5d2d159f2b324b4aacf4e21c7b0 extends Twig_Template
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
        $__internal_053eb21f1bf254f09f2055797d57790d1c5463aedd758c53641be0622782f953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053eb21f1bf254f09f2055797d57790d1c5463aedd758c53641be0622782f953->enter($__internal_053eb21f1bf254f09f2055797d57790d1c5463aedd758c53641be0622782f953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_b5d7a739a3a7330901d2a660b1298ba97398b8cabcd9cb007790ba35e3af0121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5d7a739a3a7330901d2a660b1298ba97398b8cabcd9cb007790ba35e3af0121->enter($__internal_b5d7a739a3a7330901d2a660b1298ba97398b8cabcd9cb007790ba35e3af0121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_053eb21f1bf254f09f2055797d57790d1c5463aedd758c53641be0622782f953->leave($__internal_053eb21f1bf254f09f2055797d57790d1c5463aedd758c53641be0622782f953_prof);

        
        $__internal_b5d7a739a3a7330901d2a660b1298ba97398b8cabcd9cb007790ba35e3af0121->leave($__internal_b5d7a739a3a7330901d2a660b1298ba97398b8cabcd9cb007790ba35e3af0121_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
