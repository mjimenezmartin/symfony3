<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_d1ad03e5b61044560a5b62b8baf7e5d304e4f74ed61e5d22464f908cf33634d0 extends Twig_Template
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
        $__internal_9d6a31b2213fc5157051d76251f1aab31bcf54035a1d40b093b102d952cb9cf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6a31b2213fc5157051d76251f1aab31bcf54035a1d40b093b102d952cb9cf6->enter($__internal_9d6a31b2213fc5157051d76251f1aab31bcf54035a1d40b093b102d952cb9cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_0b087aa5db94ed654a340febc631aa528b9a24608f78f6740bd7ba103e3e4087 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b087aa5db94ed654a340febc631aa528b9a24608f78f6740bd7ba103e3e4087->enter($__internal_0b087aa5db94ed654a340febc631aa528b9a24608f78f6740bd7ba103e3e4087_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_9d6a31b2213fc5157051d76251f1aab31bcf54035a1d40b093b102d952cb9cf6->leave($__internal_9d6a31b2213fc5157051d76251f1aab31bcf54035a1d40b093b102d952cb9cf6_prof);

        
        $__internal_0b087aa5db94ed654a340febc631aa528b9a24608f78f6740bd7ba103e3e4087->leave($__internal_0b087aa5db94ed654a340febc631aa528b9a24608f78f6740bd7ba103e3e4087_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
