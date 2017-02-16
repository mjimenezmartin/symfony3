<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_2dd3dfacfbe9e4f4732a177cdd5705d4e08668b9abb187e20366dec658878de4 extends Twig_Template
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
        $__internal_ca106118f32cb4f317b30ed26e89ec36f4d6667c1999657d5889477af40b6699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca106118f32cb4f317b30ed26e89ec36f4d6667c1999657d5889477af40b6699->enter($__internal_ca106118f32cb4f317b30ed26e89ec36f4d6667c1999657d5889477af40b6699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7ba615fe928ca5ad89a557f7932e4fc5fb791de85fb5cf8a8d8adb587bb9fee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ba615fe928ca5ad89a557f7932e4fc5fb791de85fb5cf8a8d8adb587bb9fee1->enter($__internal_7ba615fe928ca5ad89a557f7932e4fc5fb791de85fb5cf8a8d8adb587bb9fee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_ca106118f32cb4f317b30ed26e89ec36f4d6667c1999657d5889477af40b6699->leave($__internal_ca106118f32cb4f317b30ed26e89ec36f4d6667c1999657d5889477af40b6699_prof);

        
        $__internal_7ba615fe928ca5ad89a557f7932e4fc5fb791de85fb5cf8a8d8adb587bb9fee1->leave($__internal_7ba615fe928ca5ad89a557f7932e4fc5fb791de85fb5cf8a8d8adb587bb9fee1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
