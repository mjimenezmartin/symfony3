<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_6f4bc0f759ed38607076718c9f7a61ada348ccda9e24133059af06f3c4be33de extends Twig_Template
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
        $__internal_f71342fa19a7abc4aecbe0ff49d3ca707461bf294c98f636fe2faf3b205f2412 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71342fa19a7abc4aecbe0ff49d3ca707461bf294c98f636fe2faf3b205f2412->enter($__internal_f71342fa19a7abc4aecbe0ff49d3ca707461bf294c98f636fe2faf3b205f2412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_27e4bf01cef0ea01691220dba39b4089d671de824730375ae533ff837a69f32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27e4bf01cef0ea01691220dba39b4089d671de824730375ae533ff837a69f32f->enter($__internal_27e4bf01cef0ea01691220dba39b4089d671de824730375ae533ff837a69f32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f71342fa19a7abc4aecbe0ff49d3ca707461bf294c98f636fe2faf3b205f2412->leave($__internal_f71342fa19a7abc4aecbe0ff49d3ca707461bf294c98f636fe2faf3b205f2412_prof);

        
        $__internal_27e4bf01cef0ea01691220dba39b4089d671de824730375ae533ff837a69f32f->leave($__internal_27e4bf01cef0ea01691220dba39b4089d671de824730375ae533ff837a69f32f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
