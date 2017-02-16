<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_a77c2de94837810dfb7c6727cab77dac172ef559299b31d51091f749e6bf782c extends Twig_Template
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
        $__internal_884e863a0ec86dfb0f5e58dabcc0fb293100f7d94883611ec19d4d271b4aec50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_884e863a0ec86dfb0f5e58dabcc0fb293100f7d94883611ec19d4d271b4aec50->enter($__internal_884e863a0ec86dfb0f5e58dabcc0fb293100f7d94883611ec19d4d271b4aec50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_d89aafe827dac3740eb3e565f88ed58f37c5e99c6a8be15b385166f44db9af6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d89aafe827dac3740eb3e565f88ed58f37c5e99c6a8be15b385166f44db9af6d->enter($__internal_d89aafe827dac3740eb3e565f88ed58f37c5e99c6a8be15b385166f44db9af6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_884e863a0ec86dfb0f5e58dabcc0fb293100f7d94883611ec19d4d271b4aec50->leave($__internal_884e863a0ec86dfb0f5e58dabcc0fb293100f7d94883611ec19d4d271b4aec50_prof);

        
        $__internal_d89aafe827dac3740eb3e565f88ed58f37c5e99c6a8be15b385166f44db9af6d->leave($__internal_d89aafe827dac3740eb3e565f88ed58f37c5e99c6a8be15b385166f44db9af6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_widget_compound.html.php");
    }
}
