<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_11c062d47c59189a29e1b30778b877b4c4fe592165e7c543a47b4601f09f3ae3 extends Twig_Template
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
        $__internal_a7894e4862841b390dbce7e83216f6eb4acc5dfdb77d23ae153abfb338d92449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7894e4862841b390dbce7e83216f6eb4acc5dfdb77d23ae153abfb338d92449->enter($__internal_a7894e4862841b390dbce7e83216f6eb4acc5dfdb77d23ae153abfb338d92449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_57907fd89d3fc05d160e8cf8d3832a359fc9631cdf43b42fbb5fc3a432be6462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57907fd89d3fc05d160e8cf8d3832a359fc9631cdf43b42fbb5fc3a432be6462->enter($__internal_57907fd89d3fc05d160e8cf8d3832a359fc9631cdf43b42fbb5fc3a432be6462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_a7894e4862841b390dbce7e83216f6eb4acc5dfdb77d23ae153abfb338d92449->leave($__internal_a7894e4862841b390dbce7e83216f6eb4acc5dfdb77d23ae153abfb338d92449_prof);

        
        $__internal_57907fd89d3fc05d160e8cf8d3832a359fc9631cdf43b42fbb5fc3a432be6462->leave($__internal_57907fd89d3fc05d160e8cf8d3832a359fc9631cdf43b42fbb5fc3a432be6462_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
