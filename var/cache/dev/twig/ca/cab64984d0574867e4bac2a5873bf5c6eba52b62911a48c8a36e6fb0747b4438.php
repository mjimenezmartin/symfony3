<?php

/* AppBundle:Pruebas:form.html.twig */
class __TwigTemplate_717466b9f19fbcba314c3accdf3559d9c45ec0abc1b90da1aef170c01117f928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dcf32f2664a146404ce0cc00b6bf63aeb8907ee04aa5c3975adeb628fb751718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf32f2664a146404ce0cc00b6bf63aeb8907ee04aa5c3975adeb628fb751718->enter($__internal_dcf32f2664a146404ce0cc00b6bf63aeb8907ee04aa5c3975adeb628fb751718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pruebas:form.html.twig"));

        $__internal_e91f2a8315d3dc64cc669588b96ba91a86862533b1d928a38c309c096feebdbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91f2a8315d3dc64cc669588b96ba91a86862533b1d928a38c309c096feebdbd->enter($__internal_e91f2a8315d3dc64cc669588b96ba91a86862533b1d928a38c309c096feebdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pruebas:form.html.twig"));

        // line 1
        echo "<h2>Formulario con Symfony3</h2>
";
        // line 2
        if ((((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")) != null) && ((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")) != null))) {
            // line 3
            echo "\t<h3>";
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
            echo "</h3>
\t<h4>";
            // line 4
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            echo "</h4>
";
        }
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
\t<label for=\"titulo\">Titulo</label> ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'errors');
        echo "
\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "titulo", array()), 'widget');
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_dcf32f2664a146404ce0cc00b6bf63aeb8907ee04aa5c3975adeb628fb751718->leave($__internal_dcf32f2664a146404ce0cc00b6bf63aeb8907ee04aa5c3975adeb628fb751718_prof);

        
        $__internal_e91f2a8315d3dc64cc669588b96ba91a86862533b1d928a38c309c096feebdbd->leave($__internal_e91f2a8315d3dc64cc669588b96ba91a86862533b1d928a38c309c096feebdbd_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Pruebas:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  48 => 8,  44 => 7,  40 => 6,  35 => 4,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h2>Formulario con Symfony3</h2>
{% if (status != null) and (data != null) %}
\t<h3>{{status}}</h3>
\t<h4>{{dump(data)}}</h4>
{% endif %}
{{form_start(form, {'action':'','method':'POST'})}}
\t<label for=\"titulo\">Titulo</label> {{form_errors(form.titulo)}}
\t{{form_widget(form.titulo)}}
{{form_end(form)}}
", "AppBundle:Pruebas:form.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\AppBundle/Resources/views/Pruebas/form.html.twig");
    }
}
