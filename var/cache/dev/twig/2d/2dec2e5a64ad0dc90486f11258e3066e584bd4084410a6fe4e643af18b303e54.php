<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6a1a6aefe6f2af44af0abc38d91aba373eb5bf24908edfc58036a75fbeddc90b extends Twig_Template
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
        $__internal_88ccfe1d5d38dbb032e9a215ea751fc10063810c1ff519f70ea0811ca8803c3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88ccfe1d5d38dbb032e9a215ea751fc10063810c1ff519f70ea0811ca8803c3f->enter($__internal_88ccfe1d5d38dbb032e9a215ea751fc10063810c1ff519f70ea0811ca8803c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_0be1ab967995e65323ba442b3bd06d9f3c66b03f28cac30184671a96a47cc250 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be1ab967995e65323ba442b3bd06d9f3c66b03f28cac30184671a96a47cc250->enter($__internal_0be1ab967995e65323ba442b3bd06d9f3c66b03f28cac30184671a96a47cc250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_88ccfe1d5d38dbb032e9a215ea751fc10063810c1ff519f70ea0811ca8803c3f->leave($__internal_88ccfe1d5d38dbb032e9a215ea751fc10063810c1ff519f70ea0811ca8803c3f_prof);

        
        $__internal_0be1ab967995e65323ba442b3bd06d9f3c66b03f28cac30184671a96a47cc250->leave($__internal_0be1ab967995e65323ba442b3bd06d9f3c66b03f28cac30184671a96a47cc250_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
