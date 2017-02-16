<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_ecaa9841c2ca1ebe484fd61435f15766a6116436bfc8e61441a97fcfa5691f71 extends Twig_Template
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
        $__internal_b9c28bfc493f0dbc9058d449414be5b64f52dbf101045c2b2a2526fbb5bf9314 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c28bfc493f0dbc9058d449414be5b64f52dbf101045c2b2a2526fbb5bf9314->enter($__internal_b9c28bfc493f0dbc9058d449414be5b64f52dbf101045c2b2a2526fbb5bf9314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_657897a75fcc413b07a3f0bdb3fd92af0dbd48a19c056a3b1858ef2eec76c9f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_657897a75fcc413b07a3f0bdb3fd92af0dbd48a19c056a3b1858ef2eec76c9f2->enter($__internal_657897a75fcc413b07a3f0bdb3fd92af0dbd48a19c056a3b1858ef2eec76c9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_b9c28bfc493f0dbc9058d449414be5b64f52dbf101045c2b2a2526fbb5bf9314->leave($__internal_b9c28bfc493f0dbc9058d449414be5b64f52dbf101045c2b2a2526fbb5bf9314_prof);

        
        $__internal_657897a75fcc413b07a3f0bdb3fd92af0dbd48a19c056a3b1858ef2eec76c9f2->leave($__internal_657897a75fcc413b07a3f0bdb3fd92af0dbd48a19c056a3b1858ef2eec76c9f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
