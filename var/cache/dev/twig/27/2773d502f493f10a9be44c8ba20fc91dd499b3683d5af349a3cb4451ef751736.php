<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_65aeff11fda51ab913ff128ab50f8533f3089d0a93213bbc5c16349991354e4a extends Twig_Template
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
        $__internal_ea7b7300c20be6be4d9b62d2ebc608afb9df776be0c384aedac1b0a7c717cf16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7b7300c20be6be4d9b62d2ebc608afb9df776be0c384aedac1b0a7c717cf16->enter($__internal_ea7b7300c20be6be4d9b62d2ebc608afb9df776be0c384aedac1b0a7c717cf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_0635e4c5250f31ff1cd05f8da586dc3702c730f0ce65011ce94aeafceecb479e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0635e4c5250f31ff1cd05f8da586dc3702c730f0ce65011ce94aeafceecb479e->enter($__internal_0635e4c5250f31ff1cd05f8da586dc3702c730f0ce65011ce94aeafceecb479e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ea7b7300c20be6be4d9b62d2ebc608afb9df776be0c384aedac1b0a7c717cf16->leave($__internal_ea7b7300c20be6be4d9b62d2ebc608afb9df776be0c384aedac1b0a7c717cf16_prof);

        
        $__internal_0635e4c5250f31ff1cd05f8da586dc3702c730f0ce65011ce94aeafceecb479e->leave($__internal_0635e4c5250f31ff1cd05f8da586dc3702c730f0ce65011ce94aeafceecb479e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
