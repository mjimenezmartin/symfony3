<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_23f8a1d5418df93210af5f7419e075512369ca9da32d2f640d7b3c699e212e8b extends Twig_Template
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
        $__internal_8c6912492fdf7681fb46f75422edaeba12e71e7329d93fcede3301e8fe1e17c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c6912492fdf7681fb46f75422edaeba12e71e7329d93fcede3301e8fe1e17c6->enter($__internal_8c6912492fdf7681fb46f75422edaeba12e71e7329d93fcede3301e8fe1e17c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_355a11367f4bb8f5dee1e4650f1c5f0e894d4ccb2a1ba313cca6f5cc292b3e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355a11367f4bb8f5dee1e4650f1c5f0e894d4ccb2a1ba313cca6f5cc292b3e76->enter($__internal_355a11367f4bb8f5dee1e4650f1c5f0e894d4ccb2a1ba313cca6f5cc292b3e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8c6912492fdf7681fb46f75422edaeba12e71e7329d93fcede3301e8fe1e17c6->leave($__internal_8c6912492fdf7681fb46f75422edaeba12e71e7329d93fcede3301e8fe1e17c6_prof);

        
        $__internal_355a11367f4bb8f5dee1e4650f1c5f0e894d4ccb2a1ba313cca6f5cc292b3e76->leave($__internal_355a11367f4bb8f5dee1e4650f1c5f0e894d4ccb2a1ba313cca6f5cc292b3e76_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
