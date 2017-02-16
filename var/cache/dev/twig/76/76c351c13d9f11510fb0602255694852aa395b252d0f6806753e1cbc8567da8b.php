<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f6f2920639e2cb31ffe92ee609ede4c3a52d1e8137290e3eaf6542ab70b15b47 extends Twig_Template
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
        $__internal_6a389773a5e76262c5eb120331f2c1e5c3f0ea2483e54a3f794433b9c88bcde0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a389773a5e76262c5eb120331f2c1e5c3f0ea2483e54a3f794433b9c88bcde0->enter($__internal_6a389773a5e76262c5eb120331f2c1e5c3f0ea2483e54a3f794433b9c88bcde0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_dae2432c3ff195c90a23639556b3721c4222835fbaa9a3256c0f081a785b416d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae2432c3ff195c90a23639556b3721c4222835fbaa9a3256c0f081a785b416d->enter($__internal_dae2432c3ff195c90a23639556b3721c4222835fbaa9a3256c0f081a785b416d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_6a389773a5e76262c5eb120331f2c1e5c3f0ea2483e54a3f794433b9c88bcde0->leave($__internal_6a389773a5e76262c5eb120331f2c1e5c3f0ea2483e54a3f794433b9c88bcde0_prof);

        
        $__internal_dae2432c3ff195c90a23639556b3721c4222835fbaa9a3256c0f081a785b416d->leave($__internal_dae2432c3ff195c90a23639556b3721c4222835fbaa9a3256c0f081a785b416d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
