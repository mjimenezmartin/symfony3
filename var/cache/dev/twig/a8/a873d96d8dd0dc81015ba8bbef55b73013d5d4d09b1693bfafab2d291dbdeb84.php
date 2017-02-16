<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0aef1a1af80a8b501974cdb8b9ef3c50ae3d0cd5f5304733d56d954cb2d62fd5 extends Twig_Template
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
        $__internal_bbf1854e12fe50d17b2eeff6b5f8e7d4efc6f036c508ff45c819f3be0552e596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf1854e12fe50d17b2eeff6b5f8e7d4efc6f036c508ff45c819f3be0552e596->enter($__internal_bbf1854e12fe50d17b2eeff6b5f8e7d4efc6f036c508ff45c819f3be0552e596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_eaecd3d080ab1f4b7c67e4a86c296b9cc323effe76a947f56efea753a896ed31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaecd3d080ab1f4b7c67e4a86c296b9cc323effe76a947f56efea753a896ed31->enter($__internal_eaecd3d080ab1f4b7c67e4a86c296b9cc323effe76a947f56efea753a896ed31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_bbf1854e12fe50d17b2eeff6b5f8e7d4efc6f036c508ff45c819f3be0552e596->leave($__internal_bbf1854e12fe50d17b2eeff6b5f8e7d4efc6f036c508ff45c819f3be0552e596_prof);

        
        $__internal_eaecd3d080ab1f4b7c67e4a86c296b9cc323effe76a947f56efea753a896ed31->leave($__internal_eaecd3d080ab1f4b7c67e4a86c296b9cc323effe76a947f56efea753a896ed31_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
