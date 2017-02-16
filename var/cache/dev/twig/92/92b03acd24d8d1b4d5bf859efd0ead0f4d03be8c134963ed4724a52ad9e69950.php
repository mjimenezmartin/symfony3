<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_67c6f4a14e0212742a97eeaa0d7f1d4514de5a385770c09e2a633880da813443 extends Twig_Template
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
        $__internal_39480b1b86360dedf5199deec8d630a80a0657b0dcdfe2a68994b508c516da18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39480b1b86360dedf5199deec8d630a80a0657b0dcdfe2a68994b508c516da18->enter($__internal_39480b1b86360dedf5199deec8d630a80a0657b0dcdfe2a68994b508c516da18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ce1fa18f3c6d869bdd01311ac8d5c83eb6111d4c0da1fe8fd5ccfa01b291f181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1fa18f3c6d869bdd01311ac8d5c83eb6111d4c0da1fe8fd5ccfa01b291f181->enter($__internal_ce1fa18f3c6d869bdd01311ac8d5c83eb6111d4c0da1fe8fd5ccfa01b291f181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_39480b1b86360dedf5199deec8d630a80a0657b0dcdfe2a68994b508c516da18->leave($__internal_39480b1b86360dedf5199deec8d630a80a0657b0dcdfe2a68994b508c516da18_prof);

        
        $__internal_ce1fa18f3c6d869bdd01311ac8d5c83eb6111d4c0da1fe8fd5ccfa01b291f181->leave($__internal_ce1fa18f3c6d869bdd01311ac8d5c83eb6111d4c0da1fe8fd5ccfa01b291f181_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}
