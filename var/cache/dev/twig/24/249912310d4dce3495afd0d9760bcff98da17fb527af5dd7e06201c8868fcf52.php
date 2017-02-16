<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_f8f201e0cb9b7e596f346c39287a544284cffbecb957ba56426456ed57a0a243 extends Twig_Template
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
        $__internal_f5cad4f37df6783b619c4b1cb0efa8a166b1335a8cebcef38add793011c10e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5cad4f37df6783b619c4b1cb0efa8a166b1335a8cebcef38add793011c10e72->enter($__internal_f5cad4f37df6783b619c4b1cb0efa8a166b1335a8cebcef38add793011c10e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ab2a826b25da2e640d5fdc1f9194bb9de2ed977970409524703826e3311816c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab2a826b25da2e640d5fdc1f9194bb9de2ed977970409524703826e3311816c4->enter($__internal_ab2a826b25da2e640d5fdc1f9194bb9de2ed977970409524703826e3311816c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f5cad4f37df6783b619c4b1cb0efa8a166b1335a8cebcef38add793011c10e72->leave($__internal_f5cad4f37df6783b619c4b1cb0efa8a166b1335a8cebcef38add793011c10e72_prof);

        
        $__internal_ab2a826b25da2e640d5fdc1f9194bb9de2ed977970409524703826e3311816c4->leave($__internal_ab2a826b25da2e640d5fdc1f9194bb9de2ed977970409524703826e3311816c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
