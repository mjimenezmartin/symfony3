<?php

/* MiBundle:Default:index.html.twig */
class __TwigTemplate_5ab187d8c88c97ab603eeadb54997821b3d2a0d2d9f556b13fb14f1f58323771 extends Twig_Template
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
        $__internal_f35a44a2c265791cd1f066fd7ccf25721c0ef2fc72dba37e15d163f0e128e448 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35a44a2c265791cd1f066fd7ccf25721c0ef2fc72dba37e15d163f0e128e448->enter($__internal_f35a44a2c265791cd1f066fd7ccf25721c0ef2fc72dba37e15d163f0e128e448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiBundle:Default:index.html.twig"));

        $__internal_4d40f51c318c1ba86a55305c0e9342a2ab3fba019bdabab101f8aeab1802bbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d40f51c318c1ba86a55305c0e9342a2ab3fba019bdabab101f8aeab1802bbb1->enter($__internal_4d40f51c318c1ba86a55305c0e9342a2ab3fba019bdabab101f8aeab1802bbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MiBundle:Default:index.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "
";
        
        $__internal_f35a44a2c265791cd1f066fd7ccf25721c0ef2fc72dba37e15d163f0e128e448->leave($__internal_f35a44a2c265791cd1f066fd7ccf25721c0ef2fc72dba37e15d163f0e128e448_prof);

        
        $__internal_4d40f51c318c1ba86a55305c0e9342a2ab3fba019bdabab101f8aeab1802bbb1->leave($__internal_4d40f51c318c1ba86a55305c0e9342a2ab3fba019bdabab101f8aeab1802bbb1_prof);

    }

    public function getTemplateName()
    {
        return "MiBundle:Default:index.html.twig";
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
        return new Twig_Source("{{constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION')}}
", "MiBundle:Default:index.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\MiBundle/Resources/views/Default/index.html.twig");
    }
}
