<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_532ed04532213fc1c11b2b6177a1e8e53f64e8fe6f200cb1cd4659ce1a46b75e extends Twig_Template
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
        $__internal_70c3ac306f44db4f73a5042975aec1916fef2e0dba8575abe81183fa9a8702a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70c3ac306f44db4f73a5042975aec1916fef2e0dba8575abe81183fa9a8702a1->enter($__internal_70c3ac306f44db4f73a5042975aec1916fef2e0dba8575abe81183fa9a8702a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_9e1908789fe003e5beedc2b97f82490e55dd275c501d14012fd1c15978c1c774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e1908789fe003e5beedc2b97f82490e55dd275c501d14012fd1c15978c1c774->enter($__internal_9e1908789fe003e5beedc2b97f82490e55dd275c501d14012fd1c15978c1c774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_70c3ac306f44db4f73a5042975aec1916fef2e0dba8575abe81183fa9a8702a1->leave($__internal_70c3ac306f44db4f73a5042975aec1916fef2e0dba8575abe81183fa9a8702a1_prof);

        
        $__internal_9e1908789fe003e5beedc2b97f82490e55dd275c501d14012fd1c15978c1c774->leave($__internal_9e1908789fe003e5beedc2b97f82490e55dd275c501d14012fd1c15978c1c774_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
