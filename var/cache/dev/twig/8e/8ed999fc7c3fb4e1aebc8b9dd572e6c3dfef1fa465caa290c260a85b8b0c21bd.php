<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_5575c748ccb78cf89acb847702e91d405ff856a33f5b6fad71cd0593a7c1a7fe extends Twig_Template
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
        $__internal_958b40a28e7a2570765ae43247948d7a065d52994de8dd66b53ef016c5e09589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_958b40a28e7a2570765ae43247948d7a065d52994de8dd66b53ef016c5e09589->enter($__internal_958b40a28e7a2570765ae43247948d7a065d52994de8dd66b53ef016c5e09589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_94899c6fb69288e0f85494023d14042bc629a8de3bdddb6857677dfab21ae3d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94899c6fb69288e0f85494023d14042bc629a8de3bdddb6857677dfab21ae3d1->enter($__internal_94899c6fb69288e0f85494023d14042bc629a8de3bdddb6857677dfab21ae3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_958b40a28e7a2570765ae43247948d7a065d52994de8dd66b53ef016c5e09589->leave($__internal_958b40a28e7a2570765ae43247948d7a065d52994de8dd66b53ef016c5e09589_prof);

        
        $__internal_94899c6fb69288e0f85494023d14042bc629a8de3bdddb6857677dfab21ae3d1->leave($__internal_94899c6fb69288e0f85494023d14042bc629a8de3bdddb6857677dfab21ae3d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
