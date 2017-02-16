<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_57589ca8ebe41b387dfd90026c2d5040517684a73655e2d4eff322b6d7c90ba2 extends Twig_Template
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
        $__internal_97c1486589851cb10e700603e03204d05a56f6cc465e3f271012ac026a35c650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c1486589851cb10e700603e03204d05a56f6cc465e3f271012ac026a35c650->enter($__internal_97c1486589851cb10e700603e03204d05a56f6cc465e3f271012ac026a35c650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c7e8760a8fface065bf0cbb22e56ea890908fad68f373ef57b95ffdfc1b3db00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e8760a8fface065bf0cbb22e56ea890908fad68f373ef57b95ffdfc1b3db00->enter($__internal_c7e8760a8fface065bf0cbb22e56ea890908fad68f373ef57b95ffdfc1b3db00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_97c1486589851cb10e700603e03204d05a56f6cc465e3f271012ac026a35c650->leave($__internal_97c1486589851cb10e700603e03204d05a56f6cc465e3f271012ac026a35c650_prof);

        
        $__internal_c7e8760a8fface065bf0cbb22e56ea890908fad68f373ef57b95ffdfc1b3db00->leave($__internal_c7e8760a8fface065bf0cbb22e56ea890908fad68f373ef57b95ffdfc1b3db00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
