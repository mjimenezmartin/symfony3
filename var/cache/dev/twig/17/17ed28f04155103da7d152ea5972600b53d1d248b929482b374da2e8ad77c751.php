<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_b56624f76ae53e5d21ee46e6d5eaeeebbeea03d69879772a46fa951aad6151ba extends Twig_Template
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
        $__internal_ba0f16542db8a9be012284df3da7049a974fe038293c35b315fa9827a68d6c43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0f16542db8a9be012284df3da7049a974fe038293c35b315fa9827a68d6c43->enter($__internal_ba0f16542db8a9be012284df3da7049a974fe038293c35b315fa9827a68d6c43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_dc4911957900e034a30644bfc7000e1101edfed0fe8b8acaf1fc52a0930a74d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc4911957900e034a30644bfc7000e1101edfed0fe8b8acaf1fc52a0930a74d6->enter($__internal_dc4911957900e034a30644bfc7000e1101edfed0fe8b8acaf1fc52a0930a74d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_ba0f16542db8a9be012284df3da7049a974fe038293c35b315fa9827a68d6c43->leave($__internal_ba0f16542db8a9be012284df3da7049a974fe038293c35b315fa9827a68d6c43_prof);

        
        $__internal_dc4911957900e034a30644bfc7000e1101edfed0fe8b8acaf1fc52a0930a74d6->leave($__internal_dc4911957900e034a30644bfc7000e1101edfed0fe8b8acaf1fc52a0930a74d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
