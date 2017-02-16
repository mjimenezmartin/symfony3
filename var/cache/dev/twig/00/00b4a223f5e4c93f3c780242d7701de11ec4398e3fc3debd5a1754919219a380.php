<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_3ec54ab04962f1e1769c45e2c26da82fa539ae6652c3062d65150d4aef0df4ff extends Twig_Template
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
        $__internal_1b69bbbd152c43a902028adceb173ba36606cbe82d769372b62d18ce0c0c707d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b69bbbd152c43a902028adceb173ba36606cbe82d769372b62d18ce0c0c707d->enter($__internal_1b69bbbd152c43a902028adceb173ba36606cbe82d769372b62d18ce0c0c707d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f58537024576363ba141da4615f40a25d57ec4c07096ad674c6488929dd5968b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58537024576363ba141da4615f40a25d57ec4c07096ad674c6488929dd5968b->enter($__internal_f58537024576363ba141da4615f40a25d57ec4c07096ad674c6488929dd5968b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1b69bbbd152c43a902028adceb173ba36606cbe82d769372b62d18ce0c0c707d->leave($__internal_1b69bbbd152c43a902028adceb173ba36606cbe82d769372b62d18ce0c0c707d_prof);

        
        $__internal_f58537024576363ba141da4615f40a25d57ec4c07096ad674c6488929dd5968b->leave($__internal_f58537024576363ba141da4615f40a25d57ec4c07096ad674c6488929dd5968b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
