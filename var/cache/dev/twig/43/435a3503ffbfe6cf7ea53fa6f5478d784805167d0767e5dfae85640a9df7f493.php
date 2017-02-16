<?php

/* BlogBundle:entrada:update.html.twig */
class __TwigTemplate_bc8fab66fb60d4a07c4495c7193155027a611d8d0b1e048ca38e910efd348323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:entrada:update.html.twig", 1);
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
        $__internal_8273d48afdda3e7ede9b8ae5185f5101854cf750b64c7fa111fcd129abe53935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8273d48afdda3e7ede9b8ae5185f5101854cf750b64c7fa111fcd129abe53935->enter($__internal_8273d48afdda3e7ede9b8ae5185f5101854cf750b64c7fa111fcd129abe53935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:entrada:update.html.twig"));

        $__internal_f08427b7b92d70ae9d4144d616ce86c9be91b53246eaa276ef64874ecd1f9467 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08427b7b92d70ae9d4144d616ce86c9be91b53246eaa276ef64874ecd1f9467->enter($__internal_f08427b7b92d70ae9d4144d616ce86c9be91b53246eaa276ef64874ecd1f9467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:entrada:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8273d48afdda3e7ede9b8ae5185f5101854cf750b64c7fa111fcd129abe53935->leave($__internal_8273d48afdda3e7ede9b8ae5185f5101854cf750b64c7fa111fcd129abe53935_prof);

        
        $__internal_f08427b7b92d70ae9d4144d616ce86c9be91b53246eaa276ef64874ecd1f9467->leave($__internal_f08427b7b92d70ae9d4144d616ce86c9be91b53246eaa276ef64874ecd1f9467_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_69e89fa12e8988374ebdabba88f4179141b8a34051f89e38d34712b3e9503766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e89fa12e8988374ebdabba88f4179141b8a34051f89e38d34712b3e9503766->enter($__internal_69e89fa12e8988374ebdabba88f4179141b8a34051f89e38d34712b3e9503766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6fa1119635611ef50a7f3cdd52e5451d3548c76c308610665de65e1714a3b212 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa1119635611ef50a7f3cdd52e5451d3548c76c308610665de65e1714a3b212->enter($__internal_6fa1119635611ef50a7f3cdd52e5451d3548c76c308610665de65e1714a3b212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6fa1119635611ef50a7f3cdd52e5451d3548c76c308610665de65e1714a3b212->leave($__internal_6fa1119635611ef50a7f3cdd52e5451d3548c76c308610665de65e1714a3b212_prof);

        
        $__internal_69e89fa12e8988374ebdabba88f4179141b8a34051f89e38d34712b3e9503766->leave($__internal_69e89fa12e8988374ebdabba88f4179141b8a34051f89e38d34712b3e9503766_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:entrada:update.html.twig";
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
{% endblock %}", "BlogBundle:entrada:update.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/entrada/update.html.twig");
    }
}
