<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7871cdeb4333b63fc6e70ece5719522e6c5c446d6e3b9e429373041d3932b8b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5c303807b43cd3e8bc77998a147f804fec34430068311213967932d444c5933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c303807b43cd3e8bc77998a147f804fec34430068311213967932d444c5933->enter($__internal_f5c303807b43cd3e8bc77998a147f804fec34430068311213967932d444c5933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_344b8e9f16951ff6addbb0d89960b6234cf4446c49c94b3f2c96142181de6967 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_344b8e9f16951ff6addbb0d89960b6234cf4446c49c94b3f2c96142181de6967->enter($__internal_344b8e9f16951ff6addbb0d89960b6234cf4446c49c94b3f2c96142181de6967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5c303807b43cd3e8bc77998a147f804fec34430068311213967932d444c5933->leave($__internal_f5c303807b43cd3e8bc77998a147f804fec34430068311213967932d444c5933_prof);

        
        $__internal_344b8e9f16951ff6addbb0d89960b6234cf4446c49c94b3f2c96142181de6967->leave($__internal_344b8e9f16951ff6addbb0d89960b6234cf4446c49c94b3f2c96142181de6967_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_710ff8620c77f6b9d84e224d3ce78d86649a2625b235f577cb83bc15ff951159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_710ff8620c77f6b9d84e224d3ce78d86649a2625b235f577cb83bc15ff951159->enter($__internal_710ff8620c77f6b9d84e224d3ce78d86649a2625b235f577cb83bc15ff951159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd481d4a0e10021ad0fc42bb7a8d9179435140c89485b2f37faf75459cfde6a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd481d4a0e10021ad0fc42bb7a8d9179435140c89485b2f37faf75459cfde6a8->enter($__internal_dd481d4a0e10021ad0fc42bb7a8d9179435140c89485b2f37faf75459cfde6a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_dd481d4a0e10021ad0fc42bb7a8d9179435140c89485b2f37faf75459cfde6a8->leave($__internal_dd481d4a0e10021ad0fc42bb7a8d9179435140c89485b2f37faf75459cfde6a8_prof);

        
        $__internal_710ff8620c77f6b9d84e224d3ce78d86649a2625b235f577cb83bc15ff951159->leave($__internal_710ff8620c77f6b9d84e224d3ce78d86649a2625b235f577cb83bc15ff951159_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_0849e147194762703f7d61dee8bf3b8ee3abc294be3bd9c46787d656a0ccefe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0849e147194762703f7d61dee8bf3b8ee3abc294be3bd9c46787d656a0ccefe9->enter($__internal_0849e147194762703f7d61dee8bf3b8ee3abc294be3bd9c46787d656a0ccefe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6fbad6f99ff970183ab254d7f6a3f57af6ba42bf4a87eabbef3f61064cb6b193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fbad6f99ff970183ab254d7f6a3f57af6ba42bf4a87eabbef3f61064cb6b193->enter($__internal_6fbad6f99ff970183ab254d7f6a3f57af6ba42bf4a87eabbef3f61064cb6b193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6fbad6f99ff970183ab254d7f6a3f57af6ba42bf4a87eabbef3f61064cb6b193->leave($__internal_6fbad6f99ff970183ab254d7f6a3f57af6ba42bf4a87eabbef3f61064cb6b193_prof);

        
        $__internal_0849e147194762703f7d61dee8bf3b8ee3abc294be3bd9c46787d656a0ccefe9->leave($__internal_0849e147194762703f7d61dee8bf3b8ee3abc294be3bd9c46787d656a0ccefe9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f77125951c886b741573075f218f25e9e1c193401e7d9c5a8df8ed360dee3b3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f77125951c886b741573075f218f25e9e1c193401e7d9c5a8df8ed360dee3b3e->enter($__internal_f77125951c886b741573075f218f25e9e1c193401e7d9c5a8df8ed360dee3b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0e4ecf3bfa5d7c3ad89d9bd9837a26af0e3606186053c3f7963434c97ff9995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0e4ecf3bfa5d7c3ad89d9bd9837a26af0e3606186053c3f7963434c97ff9995->enter($__internal_f0e4ecf3bfa5d7c3ad89d9bd9837a26af0e3606186053c3f7963434c97ff9995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f0e4ecf3bfa5d7c3ad89d9bd9837a26af0e3606186053c3f7963434c97ff9995->leave($__internal_f0e4ecf3bfa5d7c3ad89d9bd9837a26af0e3606186053c3f7963434c97ff9995_prof);

        
        $__internal_f77125951c886b741573075f218f25e9e1c193401e7d9c5a8df8ed360dee3b3e->leave($__internal_f77125951c886b741573075f218f25e9e1c193401e7d9c5a8df8ed360dee3b3e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
