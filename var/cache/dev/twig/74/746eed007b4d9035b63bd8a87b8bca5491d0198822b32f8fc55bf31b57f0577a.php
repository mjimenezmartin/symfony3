<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_fa7d12cba526cabcb043efbc41ef4cadd6d55c6fc8f7556c5a77176d12beba41 extends Twig_Template
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
        $__internal_f33a8367fc457d1ce976ae1ad14e048a0cdd0d2b41cdbb19cf88e63994dc7ff1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f33a8367fc457d1ce976ae1ad14e048a0cdd0d2b41cdbb19cf88e63994dc7ff1->enter($__internal_f33a8367fc457d1ce976ae1ad14e048a0cdd0d2b41cdbb19cf88e63994dc7ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_42ad12e64402788039034db64b36dd1e01b892a2ef000a66b269cf743901487e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ad12e64402788039034db64b36dd1e01b892a2ef000a66b269cf743901487e->enter($__internal_42ad12e64402788039034db64b36dd1e01b892a2ef000a66b269cf743901487e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_f33a8367fc457d1ce976ae1ad14e048a0cdd0d2b41cdbb19cf88e63994dc7ff1->leave($__internal_f33a8367fc457d1ce976ae1ad14e048a0cdd0d2b41cdbb19cf88e63994dc7ff1_prof);

        
        $__internal_42ad12e64402788039034db64b36dd1e01b892a2ef000a66b269cf743901487e->leave($__internal_42ad12e64402788039034db64b36dd1e01b892a2ef000a66b269cf743901487e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
