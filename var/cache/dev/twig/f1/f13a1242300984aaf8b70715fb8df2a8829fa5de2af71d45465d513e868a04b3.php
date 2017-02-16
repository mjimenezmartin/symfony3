<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_b1626341273e6fa73f6a2d7c412f7d3bf64087a629131af3eb546f4b02db9340 extends Twig_Template
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
        $__internal_68d352914489632bc5d538ca8955ce576844d6ed0a410dcc354239fa66aa656a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d352914489632bc5d538ca8955ce576844d6ed0a410dcc354239fa66aa656a->enter($__internal_68d352914489632bc5d538ca8955ce576844d6ed0a410dcc354239fa66aa656a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_cde85e9d4b878bdb535491179cf3b4b466d02d63e8ea53ac2111c39a9d392e5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cde85e9d4b878bdb535491179cf3b4b466d02d63e8ea53ac2111c39a9d392e5b->enter($__internal_cde85e9d4b878bdb535491179cf3b4b466d02d63e8ea53ac2111c39a9d392e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_68d352914489632bc5d538ca8955ce576844d6ed0a410dcc354239fa66aa656a->leave($__internal_68d352914489632bc5d538ca8955ce576844d6ed0a410dcc354239fa66aa656a_prof);

        
        $__internal_cde85e9d4b878bdb535491179cf3b4b466d02d63e8ea53ac2111c39a9d392e5b->leave($__internal_cde85e9d4b878bdb535491179cf3b4b466d02d63e8ea53ac2111c39a9d392e5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
