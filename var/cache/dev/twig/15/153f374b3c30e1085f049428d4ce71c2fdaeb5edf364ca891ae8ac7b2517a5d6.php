<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_38544c8d568a63265d4bc2a6ebff8ce61380eb69380c42234043534cc576d977 extends Twig_Template
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
        $__internal_79662c54e842c07e81f9cb86eb502721ac6d136dc2c5cc13f870346f47134abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79662c54e842c07e81f9cb86eb502721ac6d136dc2c5cc13f870346f47134abc->enter($__internal_79662c54e842c07e81f9cb86eb502721ac6d136dc2c5cc13f870346f47134abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_065a59ffc09c785bee7f29e236f71cedbd6930ba6d917749340803aa4ba6b726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_065a59ffc09c785bee7f29e236f71cedbd6930ba6d917749340803aa4ba6b726->enter($__internal_065a59ffc09c785bee7f29e236f71cedbd6930ba6d917749340803aa4ba6b726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_79662c54e842c07e81f9cb86eb502721ac6d136dc2c5cc13f870346f47134abc->leave($__internal_79662c54e842c07e81f9cb86eb502721ac6d136dc2c5cc13f870346f47134abc_prof);

        
        $__internal_065a59ffc09c785bee7f29e236f71cedbd6930ba6d917749340803aa4ba6b726->leave($__internal_065a59ffc09c785bee7f29e236f71cedbd6930ba6d917749340803aa4ba6b726_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_widget.html.php");
    }
}
