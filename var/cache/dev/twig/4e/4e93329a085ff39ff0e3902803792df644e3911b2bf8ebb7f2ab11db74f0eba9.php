<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_ba4ed8363c76de3502ced99dc43cfbbf30b7e7d196e9a29db1d990cefd394de9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_2b551f964847053793aa396c09536571f1db41c2814ff30fa1b3ff9c68a47221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b551f964847053793aa396c09536571f1db41c2814ff30fa1b3ff9c68a47221->enter($__internal_2b551f964847053793aa396c09536571f1db41c2814ff30fa1b3ff9c68a47221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_a7963b4a028303565766ce5b54b6cc88cf63d8810913f661e09dc00f64bff101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7963b4a028303565766ce5b54b6cc88cf63d8810913f661e09dc00f64bff101->enter($__internal_a7963b4a028303565766ce5b54b6cc88cf63d8810913f661e09dc00f64bff101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b551f964847053793aa396c09536571f1db41c2814ff30fa1b3ff9c68a47221->leave($__internal_2b551f964847053793aa396c09536571f1db41c2814ff30fa1b3ff9c68a47221_prof);

        
        $__internal_a7963b4a028303565766ce5b54b6cc88cf63d8810913f661e09dc00f64bff101->leave($__internal_a7963b4a028303565766ce5b54b6cc88cf63d8810913f661e09dc00f64bff101_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_90114b0b050eda28a242315339624758396931371320bec33210a6c0a751b054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90114b0b050eda28a242315339624758396931371320bec33210a6c0a751b054->enter($__internal_90114b0b050eda28a242315339624758396931371320bec33210a6c0a751b054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b2207e935e1f8929f7d511791f85086968f0cc6c7e57ca32622bd9b3e9ea3d6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2207e935e1f8929f7d511791f85086968f0cc6c7e57ca32622bd9b3e9ea3d6f->enter($__internal_b2207e935e1f8929f7d511791f85086968f0cc6c7e57ca32622bd9b3e9ea3d6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b2207e935e1f8929f7d511791f85086968f0cc6c7e57ca32622bd9b3e9ea3d6f->leave($__internal_b2207e935e1f8929f7d511791f85086968f0cc6c7e57ca32622bd9b3e9ea3d6f_prof);

        
        $__internal_90114b0b050eda28a242315339624758396931371320bec33210a6c0a751b054->leave($__internal_90114b0b050eda28a242315339624758396931371320bec33210a6c0a751b054_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5e1d9aa2ba527001b5fe93c56cfac6cddab95346fc1b63a4c3cb109926c099b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5e1d9aa2ba527001b5fe93c56cfac6cddab95346fc1b63a4c3cb109926c099b->enter($__internal_f5e1d9aa2ba527001b5fe93c56cfac6cddab95346fc1b63a4c3cb109926c099b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3a0765173d33d1b8d730f3ddfdade19536a6b671cad05401cd62be716a9a1c48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a0765173d33d1b8d730f3ddfdade19536a6b671cad05401cd62be716a9a1c48->enter($__internal_3a0765173d33d1b8d730f3ddfdade19536a6b671cad05401cd62be716a9a1c48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3a0765173d33d1b8d730f3ddfdade19536a6b671cad05401cd62be716a9a1c48->leave($__internal_3a0765173d33d1b8d730f3ddfdade19536a6b671cad05401cd62be716a9a1c48_prof);

        
        $__internal_f5e1d9aa2ba527001b5fe93c56cfac6cddab95346fc1b63a4c3cb109926c099b->leave($__internal_f5e1d9aa2ba527001b5fe93c56cfac6cddab95346fc1b63a4c3cb109926c099b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8f4c3b2f9de98c9ea81b9d4fffb0717d964d216cba3fc18b81fcb017fbfb08a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8f4c3b2f9de98c9ea81b9d4fffb0717d964d216cba3fc18b81fcb017fbfb08a->enter($__internal_e8f4c3b2f9de98c9ea81b9d4fffb0717d964d216cba3fc18b81fcb017fbfb08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cbb1dc2c7bb28506632ee6aae16730a4ffeb9cc081b51e126543feda0642d29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbb1dc2c7bb28506632ee6aae16730a4ffeb9cc081b51e126543feda0642d29b->enter($__internal_cbb1dc2c7bb28506632ee6aae16730a4ffeb9cc081b51e126543feda0642d29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_cbb1dc2c7bb28506632ee6aae16730a4ffeb9cc081b51e126543feda0642d29b->leave($__internal_cbb1dc2c7bb28506632ee6aae16730a4ffeb9cc081b51e126543feda0642d29b_prof);

        
        $__internal_e8f4c3b2f9de98c9ea81b9d4fffb0717d964d216cba3fc18b81fcb017fbfb08a->leave($__internal_e8f4c3b2f9de98c9ea81b9d4fffb0717d964d216cba3fc18b81fcb017fbfb08a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
