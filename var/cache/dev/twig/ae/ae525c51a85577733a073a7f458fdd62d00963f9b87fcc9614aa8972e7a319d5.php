<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_815378964d4215cc5d4563fd2e399fe4d71da5d561768a01c546b8a5532f44d8 extends Twig_Template
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
        $__internal_e685d2a4f139dba034fb93beccde3bb21d2a681b6f2349eacecffd8de7b9c540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e685d2a4f139dba034fb93beccde3bb21d2a681b6f2349eacecffd8de7b9c540->enter($__internal_e685d2a4f139dba034fb93beccde3bb21d2a681b6f2349eacecffd8de7b9c540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_a1f2232cc1b8a3c7b9e17271773d0e05ab9bdf7550ad39243eb06b9f690fdf49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1f2232cc1b8a3c7b9e17271773d0e05ab9bdf7550ad39243eb06b9f690fdf49->enter($__internal_a1f2232cc1b8a3c7b9e17271773d0e05ab9bdf7550ad39243eb06b9f690fdf49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_e685d2a4f139dba034fb93beccde3bb21d2a681b6f2349eacecffd8de7b9c540->leave($__internal_e685d2a4f139dba034fb93beccde3bb21d2a681b6f2349eacecffd8de7b9c540_prof);

        
        $__internal_a1f2232cc1b8a3c7b9e17271773d0e05ab9bdf7550ad39243eb06b9f690fdf49->leave($__internal_a1f2232cc1b8a3c7b9e17271773d0e05ab9bdf7550ad39243eb06b9f690fdf49_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
