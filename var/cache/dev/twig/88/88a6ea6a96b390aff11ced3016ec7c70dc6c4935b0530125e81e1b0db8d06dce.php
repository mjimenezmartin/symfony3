<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_daa8d31e9414b52b8a801ec77da634bc80b6f36bf5bbdb65cf12cf654a0e242e extends Twig_Template
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
        $__internal_05ffcc1f643ab80cda5b6f4921b94fabbf4908529f5a24033e0c15a6d4e4be5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05ffcc1f643ab80cda5b6f4921b94fabbf4908529f5a24033e0c15a6d4e4be5c->enter($__internal_05ffcc1f643ab80cda5b6f4921b94fabbf4908529f5a24033e0c15a6d4e4be5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_50fd6cacf33cf1d32687f0f1f69ba9220b104e57458e37ba58ba982c8e6abd96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50fd6cacf33cf1d32687f0f1f69ba9220b104e57458e37ba58ba982c8e6abd96->enter($__internal_50fd6cacf33cf1d32687f0f1f69ba9220b104e57458e37ba58ba982c8e6abd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_05ffcc1f643ab80cda5b6f4921b94fabbf4908529f5a24033e0c15a6d4e4be5c->leave($__internal_05ffcc1f643ab80cda5b6f4921b94fabbf4908529f5a24033e0c15a6d4e4be5c_prof);

        
        $__internal_50fd6cacf33cf1d32687f0f1f69ba9220b104e57458e37ba58ba982c8e6abd96->leave($__internal_50fd6cacf33cf1d32687f0f1f69ba9220b104e57458e37ba58ba982c8e6abd96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
