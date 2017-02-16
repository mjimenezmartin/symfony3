<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_0b24f84840e96c00e69ad4ea02e46e64a576ed13effcfba52bfc5179a4b2935f extends Twig_Template
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
        $__internal_e82c37c02d7b377a211be789ee16eebe065d439b1ab0a3a54068d7f19fa4be56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e82c37c02d7b377a211be789ee16eebe065d439b1ab0a3a54068d7f19fa4be56->enter($__internal_e82c37c02d7b377a211be789ee16eebe065d439b1ab0a3a54068d7f19fa4be56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_03902abb6c76dff4cf8aa5c5b264054ad4b9bac994f24e9fdac7771a15225b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03902abb6c76dff4cf8aa5c5b264054ad4b9bac994f24e9fdac7771a15225b71->enter($__internal_03902abb6c76dff4cf8aa5c5b264054ad4b9bac994f24e9fdac7771a15225b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_e82c37c02d7b377a211be789ee16eebe065d439b1ab0a3a54068d7f19fa4be56->leave($__internal_e82c37c02d7b377a211be789ee16eebe065d439b1ab0a3a54068d7f19fa4be56_prof);

        
        $__internal_03902abb6c76dff4cf8aa5c5b264054ad4b9bac994f24e9fdac7771a15225b71->leave($__internal_03902abb6c76dff4cf8aa5c5b264054ad4b9bac994f24e9fdac7771a15225b71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
