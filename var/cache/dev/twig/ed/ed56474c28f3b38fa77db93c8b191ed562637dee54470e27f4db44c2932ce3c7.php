<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d4bb9a89f4359fe4abd0238c62c2157eb308ac75354ea698010f7286e25cddf8 extends Twig_Template
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
        $__internal_f9208ab629f21400b94c427015e44ad85b45c02e6536a9fae5d58f4fd89dd766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9208ab629f21400b94c427015e44ad85b45c02e6536a9fae5d58f4fd89dd766->enter($__internal_f9208ab629f21400b94c427015e44ad85b45c02e6536a9fae5d58f4fd89dd766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_937171ac939448f830eb50adff82197cb54d7118fe35c0b076d7b53ff8f9fbd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937171ac939448f830eb50adff82197cb54d7118fe35c0b076d7b53ff8f9fbd4->enter($__internal_937171ac939448f830eb50adff82197cb54d7118fe35c0b076d7b53ff8f9fbd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f9208ab629f21400b94c427015e44ad85b45c02e6536a9fae5d58f4fd89dd766->leave($__internal_f9208ab629f21400b94c427015e44ad85b45c02e6536a9fae5d58f4fd89dd766_prof);

        
        $__internal_937171ac939448f830eb50adff82197cb54d7118fe35c0b076d7b53ff8f9fbd4->leave($__internal_937171ac939448f830eb50adff82197cb54d7118fe35c0b076d7b53ff8f9fbd4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
