<?php

/* AppBundle:Pruebas:partial.html.twig */
class __TwigTemplate_14121b16120ddfbc77b34d24aa051d65890c492be16b95a8aa2862154c33177a extends Twig_Template
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
        $__internal_376430366c33cc8da6d7ea5f11e61b2824b5c313c0044cfa0dd86913665a9007 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_376430366c33cc8da6d7ea5f11e61b2824b5c313c0044cfa0dd86913665a9007->enter($__internal_376430366c33cc8da6d7ea5f11e61b2824b5c313c0044cfa0dd86913665a9007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pruebas:partial.html.twig"));

        $__internal_9ca66f56b24e6673a1ffbf283ae69e03a07e301ae6e5f15941cb1b90c2a0c828 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca66f56b24e6673a1ffbf283ae69e03a07e301ae6e5f15941cb1b90c2a0c828->enter($__internal_9ca66f56b24e6673a1ffbf283ae69e03a07e301ae6e5f15941cb1b90c2a0c828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pruebas:partial.html.twig"));

        // line 1
        echo "<h1>Soy un Partial incluido en tu vista</h1>";
        
        $__internal_376430366c33cc8da6d7ea5f11e61b2824b5c313c0044cfa0dd86913665a9007->leave($__internal_376430366c33cc8da6d7ea5f11e61b2824b5c313c0044cfa0dd86913665a9007_prof);

        
        $__internal_9ca66f56b24e6673a1ffbf283ae69e03a07e301ae6e5f15941cb1b90c2a0c828->leave($__internal_9ca66f56b24e6673a1ffbf283ae69e03a07e301ae6e5f15941cb1b90c2a0c828_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Pruebas:partial.html.twig";
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
        return new Twig_Source("<h1>Soy un Partial incluido en tu vista</h1>", "AppBundle:Pruebas:partial.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\AppBundle/Resources/views/Pruebas/partial.html.twig");
    }
}
