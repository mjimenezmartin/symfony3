<?php

/* ::layout.html.twig */
class __TwigTemplate_8260ced93ccdf07fac6243a5b0ef2a8ff246e0673d74a6370c8888d046ca1d56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a65e3377745e0a46a1eda2518648e2da5ef9f1e580b2dac8c51f7fd1e83c2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a65e3377745e0a46a1eda2518648e2da5ef9f1e580b2dac8c51f7fd1e83c2dc->enter($__internal_4a65e3377745e0a46a1eda2518648e2da5ef9f1e580b2dac8c51f7fd1e83c2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        $__internal_360f931676ac199be8e4fd1b735e4f35ded008c296d85b2aa12629e640be4d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360f931676ac199be8e4fd1b735e4f35ded008c296d85b2aa12629e640be4d36->enter($__internal_360f931676ac199be8e4fd1b735e4f35ded008c296d85b2aa12629e640be4d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style>
        \t.container{
        \t\tborder: 1px solid black;
        \t\twidth: 85%;
        \t\theight: 300px;
        \t}
        </style>
    </head>
    <body>
    \t<div class=\"container\">
        \t";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 21
        echo "        \t
       \t</div>
        ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "    </body>
</html>";
        
        $__internal_4a65e3377745e0a46a1eda2518648e2da5ef9f1e580b2dac8c51f7fd1e83c2dc->leave($__internal_4a65e3377745e0a46a1eda2518648e2da5ef9f1e580b2dac8c51f7fd1e83c2dc_prof);

        
        $__internal_360f931676ac199be8e4fd1b735e4f35ded008c296d85b2aa12629e640be4d36->leave($__internal_360f931676ac199be8e4fd1b735e4f35ded008c296d85b2aa12629e640be4d36_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c0f7b474507e089e1ebd0b4e98c8b878e0f2f0280764a93d4efb41e7cf01974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0f7b474507e089e1ebd0b4e98c8b878e0f2f0280764a93d4efb41e7cf01974->enter($__internal_7c0f7b474507e089e1ebd0b4e98c8b878e0f2f0280764a93d4efb41e7cf01974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71637d98dfb4f799ac89570121b6d7d9bdae5f1a7e41d35ecd0988dfd61fcb14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71637d98dfb4f799ac89570121b6d7d9bdae5f1a7e41d35ecd0988dfd61fcb14->enter($__internal_71637d98dfb4f799ac89570121b6d7d9bdae5f1a7e41d35ecd0988dfd61fcb14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " LAYOUT! ";
        
        $__internal_71637d98dfb4f799ac89570121b6d7d9bdae5f1a7e41d35ecd0988dfd61fcb14->leave($__internal_71637d98dfb4f799ac89570121b6d7d9bdae5f1a7e41d35ecd0988dfd61fcb14_prof);

        
        $__internal_7c0f7b474507e089e1ebd0b4e98c8b878e0f2f0280764a93d4efb41e7cf01974->leave($__internal_7c0f7b474507e089e1ebd0b4e98c8b878e0f2f0280764a93d4efb41e7cf01974_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50a4598677ad9ac6401f984b1420c67cea1ce7558019efe1f36a866ad1a33aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50a4598677ad9ac6401f984b1420c67cea1ce7558019efe1f36a866ad1a33aa5->enter($__internal_50a4598677ad9ac6401f984b1420c67cea1ce7558019efe1f36a866ad1a33aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b8a9c9cef7ad56ca0edb64a50a1c6ff83c8f8cfc8f09c007fdbe72c3200ae129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a9c9cef7ad56ca0edb64a50a1c6ff83c8f8cfc8f09c007fdbe72c3200ae129->enter($__internal_b8a9c9cef7ad56ca0edb64a50a1c6ff83c8f8cfc8f09c007fdbe72c3200ae129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b8a9c9cef7ad56ca0edb64a50a1c6ff83c8f8cfc8f09c007fdbe72c3200ae129->leave($__internal_b8a9c9cef7ad56ca0edb64a50a1c6ff83c8f8cfc8f09c007fdbe72c3200ae129_prof);

        
        $__internal_50a4598677ad9ac6401f984b1420c67cea1ce7558019efe1f36a866ad1a33aa5->leave($__internal_50a4598677ad9ac6401f984b1420c67cea1ce7558019efe1f36a866ad1a33aa5_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed1521cc647627d7c147d3471d171589866a2bca23878c64591be5867911bc2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1521cc647627d7c147d3471d171589866a2bca23878c64591be5867911bc2e->enter($__internal_ed1521cc647627d7c147d3471d171589866a2bca23878c64591be5867911bc2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6fbbbe78df8203a8232426da27a479236f3422fc53b08f7362a78545af68463f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbbbe78df8203a8232426da27a479236f3422fc53b08f7362a78545af68463f->enter($__internal_6fbbbe78df8203a8232426da27a479236f3422fc53b08f7362a78545af68463f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "        \t\tContenido por defecto
        \t";
        
        $__internal_6fbbbe78df8203a8232426da27a479236f3422fc53b08f7362a78545af68463f->leave($__internal_6fbbbe78df8203a8232426da27a479236f3422fc53b08f7362a78545af68463f_prof);

        
        $__internal_ed1521cc647627d7c147d3471d171589866a2bca23878c64591be5867911bc2e->leave($__internal_ed1521cc647627d7c147d3471d171589866a2bca23878c64591be5867911bc2e_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_64256eb695265f5c8e55c5aab7180782d96638d01b24ca9468c0e02867c7550b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64256eb695265f5c8e55c5aab7180782d96638d01b24ca9468c0e02867c7550b->enter($__internal_64256eb695265f5c8e55c5aab7180782d96638d01b24ca9468c0e02867c7550b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9c9769b2d4405af4d83c4a48427877f9c95d4d3d799a2a70ea0fbd3160b4954b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c9769b2d4405af4d83c4a48427877f9c95d4d3d799a2a70ea0fbd3160b4954b->enter($__internal_9c9769b2d4405af4d83c4a48427877f9c95d4d3d799a2a70ea0fbd3160b4954b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9c9769b2d4405af4d83c4a48427877f9c95d4d3d799a2a70ea0fbd3160b4954b->leave($__internal_9c9769b2d4405af4d83c4a48427877f9c95d4d3d799a2a70ea0fbd3160b4954b_prof);

        
        $__internal_64256eb695265f5c8e55c5aab7180782d96638d01b24ca9468c0e02867c7550b->leave($__internal_64256eb695265f5c8e55c5aab7180782d96638d01b24ca9468c0e02867c7550b_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 23,  119 => 19,  110 => 18,  93 => 6,  75 => 5,  64 => 24,  62 => 23,  58 => 21,  56 => 18,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %} LAYOUT! {% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
        <style>
        \t.container{
        \t\tborder: 1px solid black;
        \t\twidth: 85%;
        \t\theight: 300px;
        \t}
        </style>
    </head>
    <body>
    \t<div class=\"container\">
        \t{% block body %}
        \t\tContenido por defecto
        \t{% endblock %}
        \t
       \t</div>
        {% block javascripts %}{% endblock %}
    </body>
</html>", "::layout.html.twig", "F:\\xampp\\htdocs\\symfony3\\app/Resources\\views/layout.html.twig");
    }
}
