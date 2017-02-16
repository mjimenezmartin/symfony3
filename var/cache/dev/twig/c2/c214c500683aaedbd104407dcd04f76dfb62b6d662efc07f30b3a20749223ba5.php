<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_751249d9d9ebea29bc99b15afcdf691f3ce22178f523e90ff38a79c19e83fdca extends Twig_Template
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
        $__internal_2c2de4a2ec06e029e4b2c613d599e86ce1687f1ed1ebe15f6feabbc9c3c51761 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2de4a2ec06e029e4b2c613d599e86ce1687f1ed1ebe15f6feabbc9c3c51761->enter($__internal_2c2de4a2ec06e029e4b2c613d599e86ce1687f1ed1ebe15f6feabbc9c3c51761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9c7c15f858ca6d3b4d6b8861d5f0dfdd1c69f9c719596d9e8dbbcf300df3e767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7c15f858ca6d3b4d6b8861d5f0dfdd1c69f9c719596d9e8dbbcf300df3e767->enter($__internal_9c7c15f858ca6d3b4d6b8861d5f0dfdd1c69f9c719596d9e8dbbcf300df3e767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2c2de4a2ec06e029e4b2c613d599e86ce1687f1ed1ebe15f6feabbc9c3c51761->leave($__internal_2c2de4a2ec06e029e4b2c613d599e86ce1687f1ed1ebe15f6feabbc9c3c51761_prof);

        
        $__internal_9c7c15f858ca6d3b4d6b8861d5f0dfdd1c69f9c719596d9e8dbbcf300df3e767->leave($__internal_9c7c15f858ca6d3b4d6b8861d5f0dfdd1c69f9c719596d9e8dbbcf300df3e767_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
