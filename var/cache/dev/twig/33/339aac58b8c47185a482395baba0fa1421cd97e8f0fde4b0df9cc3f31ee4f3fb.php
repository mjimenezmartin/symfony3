<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_27418608618a05c3a85476579104580c74a7b1ebde2413238005074325ef2cf1 extends Twig_Template
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
        $__internal_5be00dd09ebc5faa2b8d8bbae29ef5a03049599bac4604814707efa00269af81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5be00dd09ebc5faa2b8d8bbae29ef5a03049599bac4604814707efa00269af81->enter($__internal_5be00dd09ebc5faa2b8d8bbae29ef5a03049599bac4604814707efa00269af81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_504d52d04a88d469d445de1550e28fd9c447276a34af920885ecac938c0f77c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504d52d04a88d469d445de1550e28fd9c447276a34af920885ecac938c0f77c7->enter($__internal_504d52d04a88d469d445de1550e28fd9c447276a34af920885ecac938c0f77c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_5be00dd09ebc5faa2b8d8bbae29ef5a03049599bac4604814707efa00269af81->leave($__internal_5be00dd09ebc5faa2b8d8bbae29ef5a03049599bac4604814707efa00269af81_prof);

        
        $__internal_504d52d04a88d469d445de1550e28fd9c447276a34af920885ecac938c0f77c7->leave($__internal_504d52d04a88d469d445de1550e28fd9c447276a34af920885ecac938c0f77c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
