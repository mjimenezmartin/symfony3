<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_21110ee72e5091de6222f49712be993fd045c87d8635072fa57ee1cb8d8f3dba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_32216bc947f46cfcd90a156b23c3dbca85e7de58b1dcd91ed1764fcc88bde5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32216bc947f46cfcd90a156b23c3dbca85e7de58b1dcd91ed1764fcc88bde5b4->enter($__internal_32216bc947f46cfcd90a156b23c3dbca85e7de58b1dcd91ed1764fcc88bde5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_aa1ca9ecb314d3b86a9d195b552e1f168b38f12f95db9779676350ceff0099e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa1ca9ecb314d3b86a9d195b552e1f168b38f12f95db9779676350ceff0099e3->enter($__internal_aa1ca9ecb314d3b86a9d195b552e1f168b38f12f95db9779676350ceff0099e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32216bc947f46cfcd90a156b23c3dbca85e7de58b1dcd91ed1764fcc88bde5b4->leave($__internal_32216bc947f46cfcd90a156b23c3dbca85e7de58b1dcd91ed1764fcc88bde5b4_prof);

        
        $__internal_aa1ca9ecb314d3b86a9d195b552e1f168b38f12f95db9779676350ceff0099e3->leave($__internal_aa1ca9ecb314d3b86a9d195b552e1f168b38f12f95db9779676350ceff0099e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3d663fa3b97ebed66a430744a91f49d098437d0699deed133af54c50c0636674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d663fa3b97ebed66a430744a91f49d098437d0699deed133af54c50c0636674->enter($__internal_3d663fa3b97ebed66a430744a91f49d098437d0699deed133af54c50c0636674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_452bdff33aabc77248e83768390233469065a3ba60798506c92e574f27d49565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452bdff33aabc77248e83768390233469065a3ba60798506c92e574f27d49565->enter($__internal_452bdff33aabc77248e83768390233469065a3ba60798506c92e574f27d49565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_452bdff33aabc77248e83768390233469065a3ba60798506c92e574f27d49565->leave($__internal_452bdff33aabc77248e83768390233469065a3ba60798506c92e574f27d49565_prof);

        
        $__internal_3d663fa3b97ebed66a430744a91f49d098437d0699deed133af54c50c0636674->leave($__internal_3d663fa3b97ebed66a430744a91f49d098437d0699deed133af54c50c0636674_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_25ffeb6b4b5dbd92dbf62856860dfc54abf856d5fc86fabeae0826850857214a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ffeb6b4b5dbd92dbf62856860dfc54abf856d5fc86fabeae0826850857214a->enter($__internal_25ffeb6b4b5dbd92dbf62856860dfc54abf856d5fc86fabeae0826850857214a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c062245feb3d407e0f80c2c7999b36224015c57d538cb0d2dbfd84fa850a3c8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c062245feb3d407e0f80c2c7999b36224015c57d538cb0d2dbfd84fa850a3c8d->enter($__internal_c062245feb3d407e0f80c2c7999b36224015c57d538cb0d2dbfd84fa850a3c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c062245feb3d407e0f80c2c7999b36224015c57d538cb0d2dbfd84fa850a3c8d->leave($__internal_c062245feb3d407e0f80c2c7999b36224015c57d538cb0d2dbfd84fa850a3c8d_prof);

        
        $__internal_25ffeb6b4b5dbd92dbf62856860dfc54abf856d5fc86fabeae0826850857214a->leave($__internal_25ffeb6b4b5dbd92dbf62856860dfc54abf856d5fc86fabeae0826850857214a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d15385268310ea7c100ce3a7cc6b23ce9a8fd4f576cc83017f7a6370e7fcd8ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15385268310ea7c100ce3a7cc6b23ce9a8fd4f576cc83017f7a6370e7fcd8ff->enter($__internal_d15385268310ea7c100ce3a7cc6b23ce9a8fd4f576cc83017f7a6370e7fcd8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_649f4f2109becbccda59b8971811a5d5e8004907363c66dbbb5f36f1d10a2875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649f4f2109becbccda59b8971811a5d5e8004907363c66dbbb5f36f1d10a2875->enter($__internal_649f4f2109becbccda59b8971811a5d5e8004907363c66dbbb5f36f1d10a2875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_649f4f2109becbccda59b8971811a5d5e8004907363c66dbbb5f36f1d10a2875->leave($__internal_649f4f2109becbccda59b8971811a5d5e8004907363c66dbbb5f36f1d10a2875_prof);

        
        $__internal_d15385268310ea7c100ce3a7cc6b23ce9a8fd4f576cc83017f7a6370e7fcd8ff->leave($__internal_d15385268310ea7c100ce3a7cc6b23ce9a8fd4f576cc83017f7a6370e7fcd8ff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
