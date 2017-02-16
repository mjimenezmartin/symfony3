<?php

/* @Blog/entrada/add.html.twig */
class __TwigTemplate_2dcad49a6920f9ab58abc972ad665fef6d29858f0488bbaa7ba93f970cbf2ee9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "@Blog/entrada/add.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b80a8ad6afbf0cc4852f7b369695e2b20b16cf448463b874de33a9e6b7008f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b80a8ad6afbf0cc4852f7b369695e2b20b16cf448463b874de33a9e6b7008f0->enter($__internal_7b80a8ad6afbf0cc4852f7b369695e2b20b16cf448463b874de33a9e6b7008f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/entrada/add.html.twig"));

        $__internal_8cc82a9e3457c21d19528470bc0c3de7dcc2ac3acb75bd33812f98a00e9f7ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cc82a9e3457c21d19528470bc0c3de7dcc2ac3acb75bd33812f98a00e9f7ff3->enter($__internal_8cc82a9e3457c21d19528470bc0c3de7dcc2ac3acb75bd33812f98a00e9f7ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/entrada/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b80a8ad6afbf0cc4852f7b369695e2b20b16cf448463b874de33a9e6b7008f0->leave($__internal_7b80a8ad6afbf0cc4852f7b369695e2b20b16cf448463b874de33a9e6b7008f0_prof);

        
        $__internal_8cc82a9e3457c21d19528470bc0c3de7dcc2ac3acb75bd33812f98a00e9f7ff3->leave($__internal_8cc82a9e3457c21d19528470bc0c3de7dcc2ac3acb75bd33812f98a00e9f7ff3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0cd12c7e8aa28446d8be0fd10f16b3fb4b75aed1e24fab0625efc59c63de0301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd12c7e8aa28446d8be0fd10f16b3fb4b75aed1e24fab0625efc59c63de0301->enter($__internal_0cd12c7e8aa28446d8be0fd10f16b3fb4b75aed1e24fab0625efc59c63de0301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f74a0c285851273c5adea47305a301f8f002beeb110149fcb1e2eeeb0b7b0cda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74a0c285851273c5adea47305a301f8f002beeb110149fcb1e2eeeb0b7b0cda->enter($__internal_f74a0c285851273c5adea47305a301f8f002beeb110149fcb1e2eeeb0b7b0cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"col-lg-4\">

    <h2>Añadir Entradas</h2>
    <hr>
\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("enctype" => "multipart/form-data"));
        echo "
\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
<div class=\"clearfix\"></div>
";
        
        $__internal_f74a0c285851273c5adea47305a301f8f002beeb110149fcb1e2eeeb0b7b0cda->leave($__internal_f74a0c285851273c5adea47305a301f8f002beeb110149fcb1e2eeeb0b7b0cda_prof);

        
        $__internal_0cd12c7e8aa28446d8be0fd10f16b3fb4b75aed1e24fab0625efc59c63de0301->leave($__internal_0cd12c7e8aa28446d8be0fd10f16b3fb4b75aed1e24fab0625efc59c63de0301_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/entrada/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'BlogBundle::layout.html.twig' %}

{% block content %}
<div class=\"col-lg-4\">

    <h2>Añadir Entradas</h2>
    <hr>
\t{{form_start(form, {'enctype':'multipart/form-data'} )}}
\t{{form_end(form)}}

</div>
<div class=\"clearfix\"></div>
{% endblock %}
", "@Blog/entrada/add.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle\\Resources\\views\\entrada\\add.html.twig");
    }
}
