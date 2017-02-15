<?php

/* BlogBundle:user:login.html.twig */
class __TwigTemplate_421b943e7b1223a774c4a61c4f8c3893af117ca8b564357871d5cd88245c7d24 extends Twig_Template
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
        $__internal_b21b4e2e39e66f81f50d6446af61923344c95c30618e082a4a80868267dabe79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b21b4e2e39e66f81f50d6446af61923344c95c30618e082a4a80868267dabe79->enter($__internal_b21b4e2e39e66f81f50d6446af61923344c95c30618e082a4a80868267dabe79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:user:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b21b4e2e39e66f81f50d6446af61923344c95c30618e082a4a80868267dabe79->leave($__internal_b21b4e2e39e66f81f50d6446af61923344c95c30618e082a4a80868267dabe79_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6f283f5a3c41a93cb8cebfc18f260a95d2be801372c10ec51e5cae6446e0d10b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f283f5a3c41a93cb8cebfc18f260a95d2be801372c10ec51e5cae6446e0d10b->enter($__internal_6f283f5a3c41a93cb8cebfc18f260a95d2be801372c10ec51e5cae6446e0d10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6f283f5a3c41a93cb8cebfc18f260a95d2be801372c10ec51e5cae6446e0d10b->leave($__internal_6f283f5a3c41a93cb8cebfc18f260a95d2be801372c10ec51e5cae6446e0d10b_prof);

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
        return array (  117 => 39,  113 => 38,  110 => 37,  104 => 36,  93 => 34,  88 => 33,  84 => 32,  69 => 20,  64 => 18,  58 => 14,  52 => 10,  49 => 9,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
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
