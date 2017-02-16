<?php

/* BlogBundle:user:login.html.twig */
class __TwigTemplate_6a3e1e77c4b56ee5439bd22b0eb44bacaa492fbc06f491fcd3c9cd27d71b8ad3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:user:login.html.twig", 1);
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
        $__internal_b826fb62770e4600eba28931c48b7c14288c4ce71de505cf9c2f09ab6b5ab536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b826fb62770e4600eba28931c48b7c14288c4ce71de505cf9c2f09ab6b5ab536->enter($__internal_b826fb62770e4600eba28931c48b7c14288c4ce71de505cf9c2f09ab6b5ab536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:user:login.html.twig"));

        $__internal_2fe2eaf4719e515ce9e09668baf9b0903caedf487309ee8b76c44cb416961fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fe2eaf4719e515ce9e09668baf9b0903caedf487309ee8b76c44cb416961fdb->enter($__internal_2fe2eaf4719e515ce9e09668baf9b0903caedf487309ee8b76c44cb416961fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:user:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b826fb62770e4600eba28931c48b7c14288c4ce71de505cf9c2f09ab6b5ab536->leave($__internal_b826fb62770e4600eba28931c48b7c14288c4ce71de505cf9c2f09ab6b5ab536_prof);

        
        $__internal_2fe2eaf4719e515ce9e09668baf9b0903caedf487309ee8b76c44cb416961fdb->leave($__internal_2fe2eaf4719e515ce9e09668baf9b0903caedf487309ee8b76c44cb416961fdb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_180e47e6f495518f1a9814abf081ae0d5acac9db2218628d5499b13da537a1fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180e47e6f495518f1a9814abf081ae0d5acac9db2218628d5499b13da537a1fb->enter($__internal_180e47e6f495518f1a9814abf081ae0d5acac9db2218628d5499b13da537a1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5f5960c8ba88e1735b2aa2500254d4c562a63411838372d9b66d835974639b19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5960c8ba88e1735b2aa2500254d4c562a63411838372d9b66d835974639b19->enter($__internal_5f5960c8ba88e1735b2aa2500254d4c562a63411838372d9b66d835974639b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 5
            echo "\t\t<strong>
\t\t\tEstas logueado como usuario normal
\t\t</strong>
\t";
        }
        // line 9
        echo "\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 10
            echo "\t\t<strong>
\t\t\tEstas logueado como usuario administrador
\t\t</strong>
\t";
        }
        // line 14
        echo "
    <div class=\"col-lg-4\">
\t\t<h2>Login de Usuario</h2>
\t\t<hr>
    \t<form action=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method=\"POST\">
\t\t\t<label for=\"email\">Email</label>
\t\t\t<input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t<label for=\"password\">Password</label>
\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\">
\t\t\t<br>
\t\t\t<input type=\"submit\" value=\"Entrar\" class=\"btn btn-success\">
\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"/login\">
\t\t</form>
    </div>

    <div class=\"col-lg-4\">
    \t<h2>Registro de Usuario</h2>
\t\t<hr>
\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 33
            echo "\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 34
                echo "\t\t\t\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo " </div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "\t\t    
    \t";
        // line 38
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
    \t";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
\t
\t<div class=\"clearfix\"></div>

";
        
        $__internal_5f5960c8ba88e1735b2aa2500254d4c562a63411838372d9b66d835974639b19->leave($__internal_5f5960c8ba88e1735b2aa2500254d4c562a63411838372d9b66d835974639b19_prof);

        
        $__internal_180e47e6f495518f1a9814abf081ae0d5acac9db2218628d5499b13da537a1fb->leave($__internal_180e47e6f495518f1a9814abf081ae0d5acac9db2218628d5499b13da537a1fb_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:user:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  122 => 38,  119 => 37,  113 => 36,  102 => 34,  97 => 33,  93 => 32,  78 => 20,  73 => 18,  67 => 14,  61 => 10,  58 => 9,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t{% if is_granted('ROLE_USER') %}
\t\t<strong>
\t\t\tEstas logueado como usuario normal
\t\t</strong>
\t{% endif %}
\t{% if is_granted('ROLE_ADMIN') %}
\t\t<strong>
\t\t\tEstas logueado como usuario administrador
\t\t</strong>
\t{% endif %}

    <div class=\"col-lg-4\">
\t\t<h2>Login de Usuario</h2>
\t\t<hr>
    \t<form action=\"{{path(\"login_check\")}}\" method=\"POST\">
\t\t\t<label for=\"email\">Email</label>
\t\t\t<input type=\"email\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\">
\t\t\t<label for=\"password\">Password</label>
\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\">
\t\t\t<br>
\t\t\t<input type=\"submit\" value=\"Entrar\" class=\"btn btn-success\">
\t\t\t<input type=\"hidden\" name=\"_target_path\" value=\"/login\">
\t\t</form>
    </div>

    <div class=\"col-lg-4\">
    \t<h2>Registro de Usuario</h2>
\t\t<hr>
\t\t{% for type, messages in app.session.flashbag().all() %}
\t\t\t{% for message in messages %}
\t\t\t\t<div class=\"alert alert-{{type}}\"> {{message}} </div>
\t\t\t{% endfor %}
\t\t{% endfor %}
\t\t    
    \t{{form_start(form, {'action':'', 'method':'POST'})}}
    \t{{form_end(form)}}
    </div>
\t
\t<div class=\"clearfix\"></div>

{% endblock %}
", "BlogBundle:user:login.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\BlogBundle/Resources/views/user/login.html.twig");
    }
}
