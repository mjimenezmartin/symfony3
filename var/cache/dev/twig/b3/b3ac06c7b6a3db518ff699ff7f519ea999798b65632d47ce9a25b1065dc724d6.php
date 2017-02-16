<?php

/* base.html.twig */
class __TwigTemplate_48a37e1ae70c2d0f88504d56755ab6d05bbbc14f87cc4f97d2b34be4b3233aef extends Twig_Template
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
        $__internal_f3fb6090a79cacb8e10ad9cf3346d68918d5ab714c5f6763b3975c10cc8ebc80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3fb6090a79cacb8e10ad9cf3346d68918d5ab714c5f6763b3975c10cc8ebc80->enter($__internal_f3fb6090a79cacb8e10ad9cf3346d68918d5ab714c5f6763b3975c10cc8ebc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_f4f07b2fe8af99f740f8ef0daa164ccbafa6a4f5c7ba75c98cf2d0dc38d185c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4f07b2fe8af99f740f8ef0daa164ccbafa6a4f5c7ba75c98cf2d0dc38d185c2->enter($__internal_f4f07b2fe8af99f740f8ef0daa164ccbafa6a4f5c7ba75c98cf2d0dc38d185c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_f3fb6090a79cacb8e10ad9cf3346d68918d5ab714c5f6763b3975c10cc8ebc80->leave($__internal_f3fb6090a79cacb8e10ad9cf3346d68918d5ab714c5f6763b3975c10cc8ebc80_prof);

        
        $__internal_f4f07b2fe8af99f740f8ef0daa164ccbafa6a4f5c7ba75c98cf2d0dc38d185c2->leave($__internal_f4f07b2fe8af99f740f8ef0daa164ccbafa6a4f5c7ba75c98cf2d0dc38d185c2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3992c80505a5427a5ba0b14c1f69b8f85d15b8f4cd5db40a2b80880fd5cd4a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3992c80505a5427a5ba0b14c1f69b8f85d15b8f4cd5db40a2b80880fd5cd4a5->enter($__internal_e3992c80505a5427a5ba0b14c1f69b8f85d15b8f4cd5db40a2b80880fd5cd4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80adc731422cd703a95388d8c0bffda06a804d66f9b8ab8588125385b3cd64f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80adc731422cd703a95388d8c0bffda06a804d66f9b8ab8588125385b3cd64f1->enter($__internal_80adc731422cd703a95388d8c0bffda06a804d66f9b8ab8588125385b3cd64f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_80adc731422cd703a95388d8c0bffda06a804d66f9b8ab8588125385b3cd64f1->leave($__internal_80adc731422cd703a95388d8c0bffda06a804d66f9b8ab8588125385b3cd64f1_prof);

        
        $__internal_e3992c80505a5427a5ba0b14c1f69b8f85d15b8f4cd5db40a2b80880fd5cd4a5->leave($__internal_e3992c80505a5427a5ba0b14c1f69b8f85d15b8f4cd5db40a2b80880fd5cd4a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4398e0f8e1f50dde419c67d8ec9a9dd71e64b23007cc081b98c08dc19f80b700 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4398e0f8e1f50dde419c67d8ec9a9dd71e64b23007cc081b98c08dc19f80b700->enter($__internal_4398e0f8e1f50dde419c67d8ec9a9dd71e64b23007cc081b98c08dc19f80b700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1c5570976e47e2871aa5963ab8a10f92d3d78bafc35aa5d59e58cfddf56a2073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5570976e47e2871aa5963ab8a10f92d3d78bafc35aa5d59e58cfddf56a2073->enter($__internal_1c5570976e47e2871aa5963ab8a10f92d3d78bafc35aa5d59e58cfddf56a2073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1c5570976e47e2871aa5963ab8a10f92d3d78bafc35aa5d59e58cfddf56a2073->leave($__internal_1c5570976e47e2871aa5963ab8a10f92d3d78bafc35aa5d59e58cfddf56a2073_prof);

        
        $__internal_4398e0f8e1f50dde419c67d8ec9a9dd71e64b23007cc081b98c08dc19f80b700->leave($__internal_4398e0f8e1f50dde419c67d8ec9a9dd71e64b23007cc081b98c08dc19f80b700_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fb30a996d95b2a64d1164cc865493b453728b12263d34614a0d77ded819d8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb30a996d95b2a64d1164cc865493b453728b12263d34614a0d77ded819d8d5->enter($__internal_6fb30a996d95b2a64d1164cc865493b453728b12263d34614a0d77ded819d8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7aefbbbe7e8199865175af16a0b41fa1d3c9d85c9cbfc428489b7ec66d0513c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aefbbbe7e8199865175af16a0b41fa1d3c9d85c9cbfc428489b7ec66d0513c3->enter($__internal_7aefbbbe7e8199865175af16a0b41fa1d3c9d85c9cbfc428489b7ec66d0513c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7aefbbbe7e8199865175af16a0b41fa1d3c9d85c9cbfc428489b7ec66d0513c3->leave($__internal_7aefbbbe7e8199865175af16a0b41fa1d3c9d85c9cbfc428489b7ec66d0513c3_prof);

        
        $__internal_6fb30a996d95b2a64d1164cc865493b453728b12263d34614a0d77ded819d8d5->leave($__internal_6fb30a996d95b2a64d1164cc865493b453728b12263d34614a0d77ded819d8d5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e988599bc76cf4fc3620461f819e04bc4819c272d62876cb91d2b9e472be6003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e988599bc76cf4fc3620461f819e04bc4819c272d62876cb91d2b9e472be6003->enter($__internal_e988599bc76cf4fc3620461f819e04bc4819c272d62876cb91d2b9e472be6003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3ffae99df6402071198947fc4ad36eb311a3841cea718e9c4f7c99635c98673c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ffae99df6402071198947fc4ad36eb311a3841cea718e9c4f7c99635c98673c->enter($__internal_3ffae99df6402071198947fc4ad36eb311a3841cea718e9c4f7c99635c98673c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ffae99df6402071198947fc4ad36eb311a3841cea718e9c4f7c99635c98673c->leave($__internal_3ffae99df6402071198947fc4ad36eb311a3841cea718e9c4f7c99635c98673c_prof);

        
        $__internal_e988599bc76cf4fc3620461f819e04bc4819c272d62876cb91d2b9e472be6003->leave($__internal_e988599bc76cf4fc3620461f819e04bc4819c272d62876cb91d2b9e472be6003_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "F:\\xampp\\htdocs\\symfony3\\app\\Resources\\views\\base.html.twig");
    }
}
