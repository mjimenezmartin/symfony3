<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3bb3219831fc3a447115246e8d37587ac838725d39e281da80ffecd4ce12e2f5 extends Twig_Template
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
        $__internal_a99d72dacbf8238da9feb08fc92297b7571a5bf66f22b175499e440a1b9c6748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99d72dacbf8238da9feb08fc92297b7571a5bf66f22b175499e440a1b9c6748->enter($__internal_a99d72dacbf8238da9feb08fc92297b7571a5bf66f22b175499e440a1b9c6748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_de4dbe3662515fcfc189654b87b2ba17712e9c1dd74e91a40416985fbfced4d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4dbe3662515fcfc189654b87b2ba17712e9c1dd74e91a40416985fbfced4d7->enter($__internal_de4dbe3662515fcfc189654b87b2ba17712e9c1dd74e91a40416985fbfced4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a99d72dacbf8238da9feb08fc92297b7571a5bf66f22b175499e440a1b9c6748->leave($__internal_a99d72dacbf8238da9feb08fc92297b7571a5bf66f22b175499e440a1b9c6748_prof);

        
        $__internal_de4dbe3662515fcfc189654b87b2ba17712e9c1dd74e91a40416985fbfced4d7->leave($__internal_de4dbe3662515fcfc189654b87b2ba17712e9c1dd74e91a40416985fbfced4d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
