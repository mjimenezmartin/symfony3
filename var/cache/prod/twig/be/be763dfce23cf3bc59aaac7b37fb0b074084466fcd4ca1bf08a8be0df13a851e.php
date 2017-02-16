<?php

/* BlogBundle:Entrada:update.html.twig */
class __TwigTemplate_bc90b4472967bac15b6758f05c2b3d775e033545684a0b1dc539c997dc9ea73e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Entrada:update.html.twig", 1);
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
        $__internal_7b48b7f152c63a155514f383900264224661ba3f98d2f0c60bcca6259d8b07cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b48b7f152c63a155514f383900264224661ba3f98d2f0c60bcca6259d8b07cb->enter($__internal_7b48b7f152c63a155514f383900264224661ba3f98d2f0c60bcca6259d8b07cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Entrada:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b48b7f152c63a155514f383900264224661ba3f98d2f0c60bcca6259d8b07cb->leave($__internal_7b48b7f152c63a155514f383900264224661ba3f98d2f0c60bcca6259d8b07cb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_677e8b0917d381167cfca3b2406f2195dcfb5a061432aae74dff1f22fa26b75c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677e8b0917d381167cfca3b2406f2195dcfb5a061432aae74dff1f22fa26b75c->enter($__internal_677e8b0917d381167cfca3b2406f2195dcfb5a061432aae74dff1f22fa26b75c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_677e8b0917d381167cfca3b2406f2195dcfb5a061432aae74dff1f22fa26b75c->leave($__internal_677e8b0917d381167cfca3b2406f2195dcfb5a061432aae74dff1f22fa26b75c_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Entrada:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  57 => 10,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
{% endblock %}", "BlogBundle:Entrada:update.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/Entrada/update.html.twig");
    }
}
