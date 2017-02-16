<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_89fd11357ca347251a3cde2aec85276bdd4c7801a6779d53228780b5afd0a1cb extends Twig_Template
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
        $__internal_811fc5a051f342f828afbbe350642ca697254dd827dc36c62f928546e5e2780a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_811fc5a051f342f828afbbe350642ca697254dd827dc36c62f928546e5e2780a->enter($__internal_811fc5a051f342f828afbbe350642ca697254dd827dc36c62f928546e5e2780a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_6b4a5f94437ca33ee2825183bef3651dc054e4069ccf3cdce22652fbd95c0612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4a5f94437ca33ee2825183bef3651dc054e4069ccf3cdce22652fbd95c0612->enter($__internal_6b4a5f94437ca33ee2825183bef3651dc054e4069ccf3cdce22652fbd95c0612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_811fc5a051f342f828afbbe350642ca697254dd827dc36c62f928546e5e2780a->leave($__internal_811fc5a051f342f828afbbe350642ca697254dd827dc36c62f928546e5e2780a_prof);

        
        $__internal_6b4a5f94437ca33ee2825183bef3651dc054e4069ccf3cdce22652fbd95c0612->leave($__internal_6b4a5f94437ca33ee2825183bef3651dc054e4069ccf3cdce22652fbd95c0612_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
