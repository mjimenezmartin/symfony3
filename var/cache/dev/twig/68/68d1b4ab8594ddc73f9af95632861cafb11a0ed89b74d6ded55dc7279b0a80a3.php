<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_f68a382e6741a9b7ea81bba50151a51bf2be0bc6f9168d24d8327583006bc451 extends Twig_Template
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
        $__internal_f3bec7b25a6bbd0bc8ce873358be01dd166ab0e6712b3941d52d709c79e51171 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3bec7b25a6bbd0bc8ce873358be01dd166ab0e6712b3941d52d709c79e51171->enter($__internal_f3bec7b25a6bbd0bc8ce873358be01dd166ab0e6712b3941d52d709c79e51171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_fcbed3ee33f5d7d6446ff7e83c2fdba8b069e75561849488486fa410365c6364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcbed3ee33f5d7d6446ff7e83c2fdba8b069e75561849488486fa410365c6364->enter($__internal_fcbed3ee33f5d7d6446ff7e83c2fdba8b069e75561849488486fa410365c6364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_f3bec7b25a6bbd0bc8ce873358be01dd166ab0e6712b3941d52d709c79e51171->leave($__internal_f3bec7b25a6bbd0bc8ce873358be01dd166ab0e6712b3941d52d709c79e51171_prof);

        
        $__internal_fcbed3ee33f5d7d6446ff7e83c2fdba8b069e75561849488486fa410365c6364->leave($__internal_fcbed3ee33f5d7d6446ff7e83c2fdba8b069e75561849488486fa410365c6364_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
