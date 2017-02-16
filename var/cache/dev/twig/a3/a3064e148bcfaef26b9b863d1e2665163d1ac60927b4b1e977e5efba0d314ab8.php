<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2d43ec12c48e04ce18668fe157d7b9982e821b22b53a9ed7954769ed5e53eb71 extends Twig_Template
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
        $__internal_2c40e2c8885a68c935f3320ab6feeab8484854f3b84a84669b41055b094aa37f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c40e2c8885a68c935f3320ab6feeab8484854f3b84a84669b41055b094aa37f->enter($__internal_2c40e2c8885a68c935f3320ab6feeab8484854f3b84a84669b41055b094aa37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_36b814d66dd44a456d877c59959fe0bfb97dcb9fcf9bf1cafd03f18532ecd081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b814d66dd44a456d877c59959fe0bfb97dcb9fcf9bf1cafd03f18532ecd081->enter($__internal_36b814d66dd44a456d877c59959fe0bfb97dcb9fcf9bf1cafd03f18532ecd081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2c40e2c8885a68c935f3320ab6feeab8484854f3b84a84669b41055b094aa37f->leave($__internal_2c40e2c8885a68c935f3320ab6feeab8484854f3b84a84669b41055b094aa37f_prof);

        
        $__internal_36b814d66dd44a456d877c59959fe0bfb97dcb9fcf9bf1cafd03f18532ecd081->leave($__internal_36b814d66dd44a456d877c59959fe0bfb97dcb9fcf9bf1cafd03f18532ecd081_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
