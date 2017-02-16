<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ec3e573abedf90df354f5205b57c57dd1238affc79088ea048cae601c6a127c1 extends Twig_Template
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
        $__internal_7d68c8c4b543c31cfdeaa9b1cadc805255085721ad1f42299ce5bdb96776bc70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d68c8c4b543c31cfdeaa9b1cadc805255085721ad1f42299ce5bdb96776bc70->enter($__internal_7d68c8c4b543c31cfdeaa9b1cadc805255085721ad1f42299ce5bdb96776bc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_ef7fcc4f35be9da71e7303dcfc7014f2978071e005619f33bc35f51d3d656b83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef7fcc4f35be9da71e7303dcfc7014f2978071e005619f33bc35f51d3d656b83->enter($__internal_ef7fcc4f35be9da71e7303dcfc7014f2978071e005619f33bc35f51d3d656b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7d68c8c4b543c31cfdeaa9b1cadc805255085721ad1f42299ce5bdb96776bc70->leave($__internal_7d68c8c4b543c31cfdeaa9b1cadc805255085721ad1f42299ce5bdb96776bc70_prof);

        
        $__internal_ef7fcc4f35be9da71e7303dcfc7014f2978071e005619f33bc35f51d3d656b83->leave($__internal_ef7fcc4f35be9da71e7303dcfc7014f2978071e005619f33bc35f51d3d656b83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
