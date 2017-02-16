<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a9facf907bc0c203775d7f75eae65caf8e8d0381fa596a4cd3750903ccec19c7 extends Twig_Template
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
        $__internal_f64a69bda422e348c346cb902b74c4cbc8fb4117eae76a25245ceed7022d4bb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f64a69bda422e348c346cb902b74c4cbc8fb4117eae76a25245ceed7022d4bb6->enter($__internal_f64a69bda422e348c346cb902b74c4cbc8fb4117eae76a25245ceed7022d4bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_ef46792ea05d9b91eb3100771123b496e0893278733a3a5ef58d0abe31ea2704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef46792ea05d9b91eb3100771123b496e0893278733a3a5ef58d0abe31ea2704->enter($__internal_ef46792ea05d9b91eb3100771123b496e0893278733a3a5ef58d0abe31ea2704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f64a69bda422e348c346cb902b74c4cbc8fb4117eae76a25245ceed7022d4bb6->leave($__internal_f64a69bda422e348c346cb902b74c4cbc8fb4117eae76a25245ceed7022d4bb6_prof);

        
        $__internal_ef46792ea05d9b91eb3100771123b496e0893278733a3a5ef58d0abe31ea2704->leave($__internal_ef46792ea05d9b91eb3100771123b496e0893278733a3a5ef58d0abe31ea2704_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
