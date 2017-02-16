<?php

/* BlogBundle:categoria:update.html.twig */
class __TwigTemplate_323a99b1e5524ffeb5410ba15548229defde485b56d4d418c02e278e7e630a98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:categoria:update.html.twig", 1);
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
        $__internal_75fb83e47e46f86e41ee4e50304558211780f7d24c3e053d4755aeb7c29393ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75fb83e47e46f86e41ee4e50304558211780f7d24c3e053d4755aeb7c29393ed->enter($__internal_75fb83e47e46f86e41ee4e50304558211780f7d24c3e053d4755aeb7c29393ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:categoria:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75fb83e47e46f86e41ee4e50304558211780f7d24c3e053d4755aeb7c29393ed->leave($__internal_75fb83e47e46f86e41ee4e50304558211780f7d24c3e053d4755aeb7c29393ed_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2fbc1c45dda77864265b43b88cd643c92f22d957cabc029498e2d512040d106e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbc1c45dda77864265b43b88cd643c92f22d957cabc029498e2d512040d106e->enter($__internal_2fbc1c45dda77864265b43b88cd643c92f22d957cabc029498e2d512040d106e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_2fbc1c45dda77864265b43b88cd643c92f22d957cabc029498e2d512040d106e->leave($__internal_2fbc1c45dda77864265b43b88cd643c92f22d957cabc029498e2d512040d106e_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:categoria:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
{% endblock %}", "BlogBundle:categoria:update.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/categoria/update.html.twig");
    }
}
