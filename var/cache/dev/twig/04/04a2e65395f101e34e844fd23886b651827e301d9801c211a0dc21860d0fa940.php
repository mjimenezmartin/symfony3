<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_7ebda521e61448fa7c94f035e3b12aae92d8f3fa54155595690b2556f99fee48 extends Twig_Template
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
        $__internal_89c9ef23742a8f3a83a32f87c1ca234fe13bbad4fb7470a9eebad7b61acd4f43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c9ef23742a8f3a83a32f87c1ca234fe13bbad4fb7470a9eebad7b61acd4f43->enter($__internal_89c9ef23742a8f3a83a32f87c1ca234fe13bbad4fb7470a9eebad7b61acd4f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_8d45119148924055f132fc50390d52456f6a503e23b5640c3240280a203d2ab7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d45119148924055f132fc50390d52456f6a503e23b5640c3240280a203d2ab7->enter($__internal_8d45119148924055f132fc50390d52456f6a503e23b5640c3240280a203d2ab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_89c9ef23742a8f3a83a32f87c1ca234fe13bbad4fb7470a9eebad7b61acd4f43->leave($__internal_89c9ef23742a8f3a83a32f87c1ca234fe13bbad4fb7470a9eebad7b61acd4f43_prof);

        
        $__internal_8d45119148924055f132fc50390d52456f6a503e23b5640c3240280a203d2ab7->leave($__internal_8d45119148924055f132fc50390d52456f6a503e23b5640c3240280a203d2ab7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
