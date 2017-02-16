<?php

/* @Blog/entrada/update.html.twig */
class __TwigTemplate_2d4568d79491221474e1693b304cb85d1e2eede34b0e86190b6991c158877a16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "@Blog/entrada/update.html.twig", 1);
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
        $__internal_e71495a15e38753e3a551bb22ac90c48c031b105b0fbb99383a7abc208f817d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71495a15e38753e3a551bb22ac90c48c031b105b0fbb99383a7abc208f817d8->enter($__internal_e71495a15e38753e3a551bb22ac90c48c031b105b0fbb99383a7abc208f817d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/entrada/update.html.twig"));

        $__internal_cf30e8ef24d88fe15a45ae59b495e6315b423d1800039fdff13e4ae168fb5994 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf30e8ef24d88fe15a45ae59b495e6315b423d1800039fdff13e4ae168fb5994->enter($__internal_cf30e8ef24d88fe15a45ae59b495e6315b423d1800039fdff13e4ae168fb5994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/entrada/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e71495a15e38753e3a551bb22ac90c48c031b105b0fbb99383a7abc208f817d8->leave($__internal_e71495a15e38753e3a551bb22ac90c48c031b105b0fbb99383a7abc208f817d8_prof);

        
        $__internal_cf30e8ef24d88fe15a45ae59b495e6315b423d1800039fdff13e4ae168fb5994->leave($__internal_cf30e8ef24d88fe15a45ae59b495e6315b423d1800039fdff13e4ae168fb5994_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_71b6acff378b6a293a53eb4ff44e570977416bf93ed3ab0b0ed162024ab7b8ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71b6acff378b6a293a53eb4ff44e570977416bf93ed3ab0b0ed162024ab7b8ba->enter($__internal_71b6acff378b6a293a53eb4ff44e570977416bf93ed3ab0b0ed162024ab7b8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_477f0c1e1364bf4df65d6a0e7e30250c40f808e5276e9367bafdc0e41eb79623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477f0c1e1364bf4df65d6a0e7e30250c40f808e5276e9367bafdc0e41eb79623->enter($__internal_477f0c1e1364bf4df65d6a0e7e30250c40f808e5276e9367bafdc0e41eb79623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<div class=\"col-lg-4\">

    <h2>Modificar Entrada ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrada"]) ? $context["entrada"] : $this->getContext($context, "entrada")), "titulo", array()), "html", null, true);
        echo "</h2>
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entrada"]) ? $context["entrada"] : $this->getContext($context, "entrada")), "image", array()))), "html", null, true);
        echo "\" alt=\"imagen\" style=\"width: 80px;\">
    <hr>
\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etiqueta", array()), 'widget', array("value" => trim((isset($context["etiquetas"]) ? $context["etiquetas"] : $this->getContext($context, "etiquetas")), ",")));
        echo "
\t";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

</div>
<div class=\"clearfix\"></div>
";
        
        $__internal_477f0c1e1364bf4df65d6a0e7e30250c40f808e5276e9367bafdc0e41eb79623->leave($__internal_477f0c1e1364bf4df65d6a0e7e30250c40f808e5276e9367bafdc0e41eb79623_prof);

        
        $__internal_71b6acff378b6a293a53eb4ff44e570977416bf93ed3ab0b0ed162024ab7b8ba->leave($__internal_71b6acff378b6a293a53eb4ff44e570977416bf93ed3ab0b0ed162024ab7b8ba_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/entrada/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 11,  66 => 10,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

    <h2>Modificar Entrada {{entrada.titulo}}</h2>
    <img src=\"{{ asset(\"uploads/\"~entrada.image)}}\" alt=\"imagen\" style=\"width: 80px;\">
    <hr>
\t{{form_start(form)}}
\t{{form_widget(form.etiqueta, {\"value\":etiquetas|trim(\",\")})}}
\t{{form_end(form)}}

</div>
<div class=\"clearfix\"></div>
{% endblock %}", "@Blog/entrada/update.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle\\Resources\\views\\entrada\\update.html.twig");
    }
}
