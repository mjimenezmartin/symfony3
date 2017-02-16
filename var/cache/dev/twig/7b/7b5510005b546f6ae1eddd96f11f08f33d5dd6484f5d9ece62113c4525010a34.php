<?php

/* @Blog/categoria/update.html.twig */
class __TwigTemplate_3b19f2638baa0adba111e26ca9cba81c8cde37ca505b39a2bd7a6383ce6186a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "@Blog/categoria/update.html.twig", 1);
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
        $__internal_697cffe2ddb76b33b28c43017435574f466b967cd4a5f36304ced68a2022dd1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697cffe2ddb76b33b28c43017435574f466b967cd4a5f36304ced68a2022dd1a->enter($__internal_697cffe2ddb76b33b28c43017435574f466b967cd4a5f36304ced68a2022dd1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/categoria/update.html.twig"));

        $__internal_19a214052271e712226b78ca3f7243f1cae217debd2968c2d42e70c3f9bc6f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a214052271e712226b78ca3f7243f1cae217debd2968c2d42e70c3f9bc6f44->enter($__internal_19a214052271e712226b78ca3f7243f1cae217debd2968c2d42e70c3f9bc6f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/categoria/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_697cffe2ddb76b33b28c43017435574f466b967cd4a5f36304ced68a2022dd1a->leave($__internal_697cffe2ddb76b33b28c43017435574f466b967cd4a5f36304ced68a2022dd1a_prof);

        
        $__internal_19a214052271e712226b78ca3f7243f1cae217debd2968c2d42e70c3f9bc6f44->leave($__internal_19a214052271e712226b78ca3f7243f1cae217debd2968c2d42e70c3f9bc6f44_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8bd2074a9bfe620bf09490927bbce79d699687a0a14183d22506e871615d1aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bd2074a9bfe620bf09490927bbce79d699687a0a14183d22506e871615d1aba->enter($__internal_8bd2074a9bfe620bf09490927bbce79d699687a0a14183d22506e871615d1aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_077c3ab6290870970146e47b7153614b33dfa4501165fb4ace2dcdd7f90e59cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077c3ab6290870970146e47b7153614b33dfa4501165fb4ace2dcdd7f90e59cf->enter($__internal_077c3ab6290870970146e47b7153614b33dfa4501165fb4ace2dcdd7f90e59cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"col-lg-4\">

    <h2>Modificar Categoria</h2>
    <hr>
\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
<div class=\"clearfix\"></div>
";
        
        $__internal_077c3ab6290870970146e47b7153614b33dfa4501165fb4ace2dcdd7f90e59cf->leave($__internal_077c3ab6290870970146e47b7153614b33dfa4501165fb4ace2dcdd7f90e59cf_prof);

        
        $__internal_8bd2074a9bfe620bf09490927bbce79d699687a0a14183d22506e871615d1aba->leave($__internal_8bd2074a9bfe620bf09490927bbce79d699687a0a14183d22506e871615d1aba_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/categoria/update.html.twig";
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

    <h2>Modificar Categoria</h2>
    <hr>
\t{{form_start(form)}}
\t{{form_end(form)}}

</div>
<div class=\"clearfix\"></div>
{% endblock %}", "@Blog/categoria/update.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle\\Resources\\views\\categoria\\update.html.twig");
    }
}
