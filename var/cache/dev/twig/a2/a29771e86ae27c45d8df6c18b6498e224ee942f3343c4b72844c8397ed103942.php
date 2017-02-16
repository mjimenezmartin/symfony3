<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_01be84e425c46a2f085f7c20035bc01c25231c9dec51922f439fc5a707504c25 extends Twig_Template
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
        $__internal_6c5873d3549096cfb13965249e3d848ffd7d447e8a9fd4430c8d874334db884a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c5873d3549096cfb13965249e3d848ffd7d447e8a9fd4430c8d874334db884a->enter($__internal_6c5873d3549096cfb13965249e3d848ffd7d447e8a9fd4430c8d874334db884a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_71df64d7e05c97cc5fc253a3ad8fabde9a3776ca2f26939f110a7529b0b60dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71df64d7e05c97cc5fc253a3ad8fabde9a3776ca2f26939f110a7529b0b60dcf->enter($__internal_71df64d7e05c97cc5fc253a3ad8fabde9a3776ca2f26939f110a7529b0b60dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_6c5873d3549096cfb13965249e3d848ffd7d447e8a9fd4430c8d874334db884a->leave($__internal_6c5873d3549096cfb13965249e3d848ffd7d447e8a9fd4430c8d874334db884a_prof);

        
        $__internal_71df64d7e05c97cc5fc253a3ad8fabde9a3776ca2f26939f110a7529b0b60dcf->leave($__internal_71df64d7e05c97cc5fc253a3ad8fabde9a3776ca2f26939f110a7529b0b60dcf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
