<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_90f93b264cf8feb837d1fc4f0dccd3e1bf437600a0a28666e10424e5c3926883 extends Twig_Template
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
        $__internal_de867f9caf50911f9c8657c68fa9ef43ad91c0504fbaaf043a2155f67cf33538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de867f9caf50911f9c8657c68fa9ef43ad91c0504fbaaf043a2155f67cf33538->enter($__internal_de867f9caf50911f9c8657c68fa9ef43ad91c0504fbaaf043a2155f67cf33538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_96670b6e4488a91b1187ef26d4e3db751a11a92acab3a38f8e89fee7443cf092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96670b6e4488a91b1187ef26d4e3db751a11a92acab3a38f8e89fee7443cf092->enter($__internal_96670b6e4488a91b1187ef26d4e3db751a11a92acab3a38f8e89fee7443cf092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_de867f9caf50911f9c8657c68fa9ef43ad91c0504fbaaf043a2155f67cf33538->leave($__internal_de867f9caf50911f9c8657c68fa9ef43ad91c0504fbaaf043a2155f67cf33538_prof);

        
        $__internal_96670b6e4488a91b1187ef26d4e3db751a11a92acab3a38f8e89fee7443cf092->leave($__internal_96670b6e4488a91b1187ef26d4e3db751a11a92acab3a38f8e89fee7443cf092_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}
