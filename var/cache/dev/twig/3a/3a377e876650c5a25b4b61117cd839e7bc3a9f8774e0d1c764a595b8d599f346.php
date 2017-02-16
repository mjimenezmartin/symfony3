<?php

/* ::base.html.twig */
class __TwigTemplate_ad4ed76a590f83ca6abb8cf16f038de6611e78dd9c8753d423e924c9b558b2d3 extends Twig_Template
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
        $__internal_44a829a8a8d4ed01bcbff1040afbb32623296a85d948a230f0f2f2a5ae0e32af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44a829a8a8d4ed01bcbff1040afbb32623296a85d948a230f0f2f2a5ae0e32af->enter($__internal_44a829a8a8d4ed01bcbff1040afbb32623296a85d948a230f0f2f2a5ae0e32af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_06882a97aa1caabb815a6f3a9ec6eb91af779985b91c03861ffb264dadb63948 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06882a97aa1caabb815a6f3a9ec6eb91af779985b91c03861ffb264dadb63948->enter($__internal_06882a97aa1caabb815a6f3a9ec6eb91af779985b91c03861ffb264dadb63948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_44a829a8a8d4ed01bcbff1040afbb32623296a85d948a230f0f2f2a5ae0e32af->leave($__internal_44a829a8a8d4ed01bcbff1040afbb32623296a85d948a230f0f2f2a5ae0e32af_prof);

        
        $__internal_06882a97aa1caabb815a6f3a9ec6eb91af779985b91c03861ffb264dadb63948->leave($__internal_06882a97aa1caabb815a6f3a9ec6eb91af779985b91c03861ffb264dadb63948_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b2e0e6c599a42352c264dda133af694f65387920fbdc426265aaed1e5cda6640 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2e0e6c599a42352c264dda133af694f65387920fbdc426265aaed1e5cda6640->enter($__internal_b2e0e6c599a42352c264dda133af694f65387920fbdc426265aaed1e5cda6640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fda5b65cc95a014f30cc19f38f8bbd1888e34b77599d206af9934fdb59606d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fda5b65cc95a014f30cc19f38f8bbd1888e34b77599d206af9934fdb59606d6c->enter($__internal_fda5b65cc95a014f30cc19f38f8bbd1888e34b77599d206af9934fdb59606d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fda5b65cc95a014f30cc19f38f8bbd1888e34b77599d206af9934fdb59606d6c->leave($__internal_fda5b65cc95a014f30cc19f38f8bbd1888e34b77599d206af9934fdb59606d6c_prof);

        
        $__internal_b2e0e6c599a42352c264dda133af694f65387920fbdc426265aaed1e5cda6640->leave($__internal_b2e0e6c599a42352c264dda133af694f65387920fbdc426265aaed1e5cda6640_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_36574613f364f8ddd7006cfca0178024da570eb3ca7e8e5831d98fbe70548cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36574613f364f8ddd7006cfca0178024da570eb3ca7e8e5831d98fbe70548cfb->enter($__internal_36574613f364f8ddd7006cfca0178024da570eb3ca7e8e5831d98fbe70548cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_00b00104780fdfd5655287a199ff6a1d546f8e14b419bc44ceeb709f476c651f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00b00104780fdfd5655287a199ff6a1d546f8e14b419bc44ceeb709f476c651f->enter($__internal_00b00104780fdfd5655287a199ff6a1d546f8e14b419bc44ceeb709f476c651f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_00b00104780fdfd5655287a199ff6a1d546f8e14b419bc44ceeb709f476c651f->leave($__internal_00b00104780fdfd5655287a199ff6a1d546f8e14b419bc44ceeb709f476c651f_prof);

        
        $__internal_36574613f364f8ddd7006cfca0178024da570eb3ca7e8e5831d98fbe70548cfb->leave($__internal_36574613f364f8ddd7006cfca0178024da570eb3ca7e8e5831d98fbe70548cfb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3399d28b517cbc399dab69947982a480f454b2424c9a8f728bf9bc4952978f92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3399d28b517cbc399dab69947982a480f454b2424c9a8f728bf9bc4952978f92->enter($__internal_3399d28b517cbc399dab69947982a480f454b2424c9a8f728bf9bc4952978f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62bd647930fa95c03e84ad11f2034a835c1fa704e7e87f2f0d8181138e6332ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62bd647930fa95c03e84ad11f2034a835c1fa704e7e87f2f0d8181138e6332ab->enter($__internal_62bd647930fa95c03e84ad11f2034a835c1fa704e7e87f2f0d8181138e6332ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_62bd647930fa95c03e84ad11f2034a835c1fa704e7e87f2f0d8181138e6332ab->leave($__internal_62bd647930fa95c03e84ad11f2034a835c1fa704e7e87f2f0d8181138e6332ab_prof);

        
        $__internal_3399d28b517cbc399dab69947982a480f454b2424c9a8f728bf9bc4952978f92->leave($__internal_3399d28b517cbc399dab69947982a480f454b2424c9a8f728bf9bc4952978f92_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_295a48f3b4d114c05bb1567b42a7ebac9de095bf3892b196e05d862368be273b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_295a48f3b4d114c05bb1567b42a7ebac9de095bf3892b196e05d862368be273b->enter($__internal_295a48f3b4d114c05bb1567b42a7ebac9de095bf3892b196e05d862368be273b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_25e7eccd47eedbdd5047201e5d124db314f99eaae6604542702ee0e068ab1493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e7eccd47eedbdd5047201e5d124db314f99eaae6604542702ee0e068ab1493->enter($__internal_25e7eccd47eedbdd5047201e5d124db314f99eaae6604542702ee0e068ab1493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_25e7eccd47eedbdd5047201e5d124db314f99eaae6604542702ee0e068ab1493->leave($__internal_25e7eccd47eedbdd5047201e5d124db314f99eaae6604542702ee0e068ab1493_prof);

        
        $__internal_295a48f3b4d114c05bb1567b42a7ebac9de095bf3892b196e05d862368be273b->leave($__internal_295a48f3b4d114c05bb1567b42a7ebac9de095bf3892b196e05d862368be273b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "F:\\xampp\\htdocs\\symfony3\\app/Resources\\views/base.html.twig");
    }
}
