<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_78b50f76306a8ef2a32b295125f77360f0b3fa8bdd2c8b725125ab0e52b37d8b extends Twig_Template
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
        $__internal_3baa070f44e6d748acf82759508c6e7934fb54571b5af1799f466e48ea0d1a8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3baa070f44e6d748acf82759508c6e7934fb54571b5af1799f466e48ea0d1a8d->enter($__internal_3baa070f44e6d748acf82759508c6e7934fb54571b5af1799f466e48ea0d1a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_00a13d9938efdb1f370d8fb40d7460cd3391480fad1ed67cec0b2fa9c4e824b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00a13d9938efdb1f370d8fb40d7460cd3391480fad1ed67cec0b2fa9c4e824b3->enter($__internal_00a13d9938efdb1f370d8fb40d7460cd3391480fad1ed67cec0b2fa9c4e824b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3baa070f44e6d748acf82759508c6e7934fb54571b5af1799f466e48ea0d1a8d->leave($__internal_3baa070f44e6d748acf82759508c6e7934fb54571b5af1799f466e48ea0d1a8d_prof);

        
        $__internal_00a13d9938efdb1f370d8fb40d7460cd3391480fad1ed67cec0b2fa9c4e824b3->leave($__internal_00a13d9938efdb1f370d8fb40d7460cd3391480fad1ed67cec0b2fa9c4e824b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
