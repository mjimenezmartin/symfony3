<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_0cce7d00047b9b1ff7250b4e81fafc623d29413f20d7b8688fbcd88c1b4ed8ca extends Twig_Template
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
        $__internal_953fe5f995731e100cb003f854dd8cc0eb4ad1aa28d935c698519ce876de124a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953fe5f995731e100cb003f854dd8cc0eb4ad1aa28d935c698519ce876de124a->enter($__internal_953fe5f995731e100cb003f854dd8cc0eb4ad1aa28d935c698519ce876de124a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_6166b13c3d373a821ed2a1d15730e4715ce6b44e7aed02f5ae9454f580b69912 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6166b13c3d373a821ed2a1d15730e4715ce6b44e7aed02f5ae9454f580b69912->enter($__internal_6166b13c3d373a821ed2a1d15730e4715ce6b44e7aed02f5ae9454f580b69912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_953fe5f995731e100cb003f854dd8cc0eb4ad1aa28d935c698519ce876de124a->leave($__internal_953fe5f995731e100cb003f854dd8cc0eb4ad1aa28d935c698519ce876de124a_prof);

        
        $__internal_6166b13c3d373a821ed2a1d15730e4715ce6b44e7aed02f5ae9454f580b69912->leave($__internal_6166b13c3d373a821ed2a1d15730e4715ce6b44e7aed02f5ae9454f580b69912_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
