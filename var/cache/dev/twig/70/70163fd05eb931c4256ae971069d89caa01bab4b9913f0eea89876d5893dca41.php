<?php

/* @Blog/Default/index.html.twig */
class __TwigTemplate_a1954f02e55ac851aaaece102a979b64aecfb4f98e3c67f0b9e3a3ca0c9bfd00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "@Blog/Default/index.html.twig", 1);
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
        $__internal_e469d2370152e8a4afcf6a6e8ffdca008050325e52f37bd624dd5f127a733998 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e469d2370152e8a4afcf6a6e8ffdca008050325e52f37bd624dd5f127a733998->enter($__internal_e469d2370152e8a4afcf6a6e8ffdca008050325e52f37bd624dd5f127a733998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/index.html.twig"));

        $__internal_167a08058cad59797112a51869a69fe1e9eb19d758c63a6247906418e2935b75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_167a08058cad59797112a51869a69fe1e9eb19d758c63a6247906418e2935b75->enter($__internal_167a08058cad59797112a51869a69fe1e9eb19d758c63a6247906418e2935b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Blog/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e469d2370152e8a4afcf6a6e8ffdca008050325e52f37bd624dd5f127a733998->leave($__internal_e469d2370152e8a4afcf6a6e8ffdca008050325e52f37bd624dd5f127a733998_prof);

        
        $__internal_167a08058cad59797112a51869a69fe1e9eb19d758c63a6247906418e2935b75->leave($__internal_167a08058cad59797112a51869a69fe1e9eb19d758c63a6247906418e2935b75_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e695b0d7a24fab3f95facb3b1d8b17aa9a43e1627a5a006f7c4a521c1cc6df81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e695b0d7a24fab3f95facb3b1d8b17aa9a43e1627a5a006f7c4a521c1cc6df81->enter($__internal_e695b0d7a24fab3f95facb3b1d8b17aa9a43e1627a5a006f7c4a521c1cc6df81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_365e1d6baba41b3d6b6744d4bd5435680c6e2417f03dc4ecf55ec4f47495cb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365e1d6baba41b3d6b6744d4bd5435680c6e2417f03dc4ecf55ec4f47495cb87->enter($__internal_365e1d6baba41b3d6b6744d4bd5435680c6e2417f03dc4ecf55ec4f47495cb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    
\t<h1>Hello World!</h1>

";
        
        $__internal_365e1d6baba41b3d6b6744d4bd5435680c6e2417f03dc4ecf55ec4f47495cb87->leave($__internal_365e1d6baba41b3d6b6744d4bd5435680c6e2417f03dc4ecf55ec4f47495cb87_prof);

        
        $__internal_e695b0d7a24fab3f95facb3b1d8b17aa9a43e1627a5a006f7c4a521c1cc6df81->leave($__internal_e695b0d7a24fab3f95facb3b1d8b17aa9a43e1627a5a006f7c4a521c1cc6df81_prof);

    }

    public function getTemplateName()
    {
        return "@Blog/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    
\t<h1>Hello World!</h1>

{% endblock %}
", "@Blog/Default/index.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
