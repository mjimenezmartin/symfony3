<?php

/* @App/Pruebas/partial.html.twig */
class __TwigTemplate_abbf0f52585b65bfcbb5b3adef3af584cf29056628b3a90a3207aaef23a1156e extends Twig_Template
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
        $__internal_dee62b99fa7737afb0c88603dccd6353410b1831615ef9904c2256eb1787af84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dee62b99fa7737afb0c88603dccd6353410b1831615ef9904c2256eb1787af84->enter($__internal_dee62b99fa7737afb0c88603dccd6353410b1831615ef9904c2256eb1787af84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Pruebas/partial.html.twig"));

        $__internal_e3b15eb049a3bad382299ab40c4787c8f5242084170f37e9d8dcd34fc802efd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b15eb049a3bad382299ab40c4787c8f5242084170f37e9d8dcd34fc802efd1->enter($__internal_e3b15eb049a3bad382299ab40c4787c8f5242084170f37e9d8dcd34fc802efd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Pruebas/partial.html.twig"));

        // line 1
        echo "<h1>Soy un Partial incluido en tu vista</h1>";
        
        $__internal_dee62b99fa7737afb0c88603dccd6353410b1831615ef9904c2256eb1787af84->leave($__internal_dee62b99fa7737afb0c88603dccd6353410b1831615ef9904c2256eb1787af84_prof);

        
        $__internal_e3b15eb049a3bad382299ab40c4787c8f5242084170f37e9d8dcd34fc802efd1->leave($__internal_e3b15eb049a3bad382299ab40c4787c8f5242084170f37e9d8dcd34fc802efd1_prof);

    }

    public function getTemplateName()
    {
        return "@App/Pruebas/partial.html.twig";
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
        return new Twig_Source("<h1>Soy un Partial incluido en tu vista</h1>", "@App/Pruebas/partial.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\AppBundle\\Resources\\views\\Pruebas\\partial.html.twig");
    }
}
