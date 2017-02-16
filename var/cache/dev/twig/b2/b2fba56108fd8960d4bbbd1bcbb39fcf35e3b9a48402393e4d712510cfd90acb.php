<?php

/* layout.html.twig */
class __TwigTemplate_c0cf953f1fe1a85af2f3e3d57dba2dac05e4b19ef9e8cbd4fd8003c0c3099e92 extends Twig_Template
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
        $__internal_280589a2ceafc32f1b9cb0cdb352cf69101b82a9416b626c62024af3578e8f0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280589a2ceafc32f1b9cb0cdb352cf69101b82a9416b626c62024af3578e8f0c->enter($__internal_280589a2ceafc32f1b9cb0cdb352cf69101b82a9416b626c62024af3578e8f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_0afeb6cf0dcf392f89e452e11d5812d79a92f11a6c110490a28a0fb9cc7f8dc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0afeb6cf0dcf392f89e452e11d5812d79a92f11a6c110490a28a0fb9cc7f8dc2->enter($__internal_0afeb6cf0dcf392f89e452e11d5812d79a92f11a6c110490a28a0fb9cc7f8dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_280589a2ceafc32f1b9cb0cdb352cf69101b82a9416b626c62024af3578e8f0c->leave($__internal_280589a2ceafc32f1b9cb0cdb352cf69101b82a9416b626c62024af3578e8f0c_prof);

        
        $__internal_0afeb6cf0dcf392f89e452e11d5812d79a92f11a6c110490a28a0fb9cc7f8dc2->leave($__internal_0afeb6cf0dcf392f89e452e11d5812d79a92f11a6c110490a28a0fb9cc7f8dc2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8c9557d6fa43c0be548241d908cfc4bb1030d18d25e8b56f09731ac25634559 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8c9557d6fa43c0be548241d908cfc4bb1030d18d25e8b56f09731ac25634559->enter($__internal_b8c9557d6fa43c0be548241d908cfc4bb1030d18d25e8b56f09731ac25634559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fefb586fe05d54d85839959cfa85564c62caeb8b3558c76564efedaf93e4eb5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefb586fe05d54d85839959cfa85564c62caeb8b3558c76564efedaf93e4eb5f->enter($__internal_fefb586fe05d54d85839959cfa85564c62caeb8b3558c76564efedaf93e4eb5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " LAYOUT! ";
        
        $__internal_fefb586fe05d54d85839959cfa85564c62caeb8b3558c76564efedaf93e4eb5f->leave($__internal_fefb586fe05d54d85839959cfa85564c62caeb8b3558c76564efedaf93e4eb5f_prof);

        
        $__internal_b8c9557d6fa43c0be548241d908cfc4bb1030d18d25e8b56f09731ac25634559->leave($__internal_b8c9557d6fa43c0be548241d908cfc4bb1030d18d25e8b56f09731ac25634559_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4db2a83a4149bb743b8059190ab693108c27206f6411fde23b96c2a12d14fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4db2a83a4149bb743b8059190ab693108c27206f6411fde23b96c2a12d14fde->enter($__internal_f4db2a83a4149bb743b8059190ab693108c27206f6411fde23b96c2a12d14fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_381f5c9a37c285c945da0f51c40ef8809a2e79ac4f2291790c2d26a405adb284 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381f5c9a37c285c945da0f51c40ef8809a2e79ac4f2291790c2d26a405adb284->enter($__internal_381f5c9a37c285c945da0f51c40ef8809a2e79ac4f2291790c2d26a405adb284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_381f5c9a37c285c945da0f51c40ef8809a2e79ac4f2291790c2d26a405adb284->leave($__internal_381f5c9a37c285c945da0f51c40ef8809a2e79ac4f2291790c2d26a405adb284_prof);

        
        $__internal_f4db2a83a4149bb743b8059190ab693108c27206f6411fde23b96c2a12d14fde->leave($__internal_f4db2a83a4149bb743b8059190ab693108c27206f6411fde23b96c2a12d14fde_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3c28b187bacb82e55ccf8529445e8b248d672ce06089734e4b4618bebf4f56d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c28b187bacb82e55ccf8529445e8b248d672ce06089734e4b4618bebf4f56d->enter($__internal_a3c28b187bacb82e55ccf8529445e8b248d672ce06089734e4b4618bebf4f56d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc6d248c6b594a3c18dc1e119bf98be09e26a2ed21c8796946c229c6ada741ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6d248c6b594a3c18dc1e119bf98be09e26a2ed21c8796946c229c6ada741ef->enter($__internal_bc6d248c6b594a3c18dc1e119bf98be09e26a2ed21c8796946c229c6ada741ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "        \t\tContenido por defecto
        \t";
        
        $__internal_bc6d248c6b594a3c18dc1e119bf98be09e26a2ed21c8796946c229c6ada741ef->leave($__internal_bc6d248c6b594a3c18dc1e119bf98be09e26a2ed21c8796946c229c6ada741ef_prof);

        
        $__internal_a3c28b187bacb82e55ccf8529445e8b248d672ce06089734e4b4618bebf4f56d->leave($__internal_a3c28b187bacb82e55ccf8529445e8b248d672ce06089734e4b4618bebf4f56d_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_98a8ca4f8b8cb39a45decd8951453df7b6cfdb93fc26d8a18d57913220e5ae8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a8ca4f8b8cb39a45decd8951453df7b6cfdb93fc26d8a18d57913220e5ae8f->enter($__internal_98a8ca4f8b8cb39a45decd8951453df7b6cfdb93fc26d8a18d57913220e5ae8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_306fd186a2158d50f4465e796124cc0101e4af6af47ebce740e0d4e21e1742a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306fd186a2158d50f4465e796124cc0101e4af6af47ebce740e0d4e21e1742a4->enter($__internal_306fd186a2158d50f4465e796124cc0101e4af6af47ebce740e0d4e21e1742a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_306fd186a2158d50f4465e796124cc0101e4af6af47ebce740e0d4e21e1742a4->leave($__internal_306fd186a2158d50f4465e796124cc0101e4af6af47ebce740e0d4e21e1742a4_prof);

        
        $__internal_98a8ca4f8b8cb39a45decd8951453df7b6cfdb93fc26d8a18d57913220e5ae8f->leave($__internal_98a8ca4f8b8cb39a45decd8951453df7b6cfdb93fc26d8a18d57913220e5ae8f_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
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
</html>", "layout.html.twig", "F:\\xampp\\htdocs\\symfony3\\app\\Resources\\views\\layout.html.twig");
    }
}
