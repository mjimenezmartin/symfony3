<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6586476b322aa31cbfb815fcaeb83a70ba04ea54a35808ae641a1faf2cce1a3f extends Twig_Template
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
        $__internal_f6e3511aa46c8ebe214742b06792a710c8fc7134595740c081f2f325be2a07a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e3511aa46c8ebe214742b06792a710c8fc7134595740c081f2f325be2a07a7->enter($__internal_f6e3511aa46c8ebe214742b06792a710c8fc7134595740c081f2f325be2a07a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2add8893e957f2a4449bb9ddab729e1bc82943520cb292b544ce210612a65dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2add8893e957f2a4449bb9ddab729e1bc82943520cb292b544ce210612a65dec->enter($__internal_2add8893e957f2a4449bb9ddab729e1bc82943520cb292b544ce210612a65dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f6e3511aa46c8ebe214742b06792a710c8fc7134595740c081f2f325be2a07a7->leave($__internal_f6e3511aa46c8ebe214742b06792a710c8fc7134595740c081f2f325be2a07a7_prof);

        
        $__internal_2add8893e957f2a4449bb9ddab729e1bc82943520cb292b544ce210612a65dec->leave($__internal_2add8893e957f2a4449bb9ddab729e1bc82943520cb292b544ce210612a65dec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
