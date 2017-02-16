<?php

/* @Mi/Default/index.html.twig */
class __TwigTemplate_8c310083daaae25dc7d17fd0b0d2e824ca541d91841f5dc2c2236696f438ba12 extends Twig_Template
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
        $__internal_82b210edff75ec98fb4cb7ac2f4afc21e5cc1d9d22854faa568e57925e2a2d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82b210edff75ec98fb4cb7ac2f4afc21e5cc1d9d22854faa568e57925e2a2d9e->enter($__internal_82b210edff75ec98fb4cb7ac2f4afc21e5cc1d9d22854faa568e57925e2a2d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Mi/Default/index.html.twig"));

        $__internal_aa9bd508f21d0bcb9d8f334b68d8a52900b37dab8946410b1b5c2371f40553fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9bd508f21d0bcb9d8f334b68d8a52900b37dab8946410b1b5c2371f40553fa->enter($__internal_aa9bd508f21d0bcb9d8f334b68d8a52900b37dab8946410b1b5c2371f40553fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Mi/Default/index.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "
";
        
        $__internal_82b210edff75ec98fb4cb7ac2f4afc21e5cc1d9d22854faa568e57925e2a2d9e->leave($__internal_82b210edff75ec98fb4cb7ac2f4afc21e5cc1d9d22854faa568e57925e2a2d9e_prof);

        
        $__internal_aa9bd508f21d0bcb9d8f334b68d8a52900b37dab8946410b1b5c2371f40553fa->leave($__internal_aa9bd508f21d0bcb9d8f334b68d8a52900b37dab8946410b1b5c2371f40553fa_prof);

    }

    public function getTemplateName()
    {
        return "@Mi/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION')}}
", "@Mi/Default/index.html.twig", "F:\\xampp\\htdocs\\symfony3\\src\\MiBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
