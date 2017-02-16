<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_14a11c9fdde4a60318ffe24def0ba3cbf7632688503453f6ec983ddc01b8b097 extends Twig_Template
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
        $__internal_98870572fb6d453d3aa1c8767858af37f7e408cb55ffec06d8d59e131215ebc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98870572fb6d453d3aa1c8767858af37f7e408cb55ffec06d8d59e131215ebc8->enter($__internal_98870572fb6d453d3aa1c8767858af37f7e408cb55ffec06d8d59e131215ebc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_4ef95b951244ce54960cb95dc0400687d9d2f24fd84e043fb0a01eb76e022aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ef95b951244ce54960cb95dc0400687d9d2f24fd84e043fb0a01eb76e022aaa->enter($__internal_4ef95b951244ce54960cb95dc0400687d9d2f24fd84e043fb0a01eb76e022aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_98870572fb6d453d3aa1c8767858af37f7e408cb55ffec06d8d59e131215ebc8->leave($__internal_98870572fb6d453d3aa1c8767858af37f7e408cb55ffec06d8d59e131215ebc8_prof);

        
        $__internal_4ef95b951244ce54960cb95dc0400687d9d2f24fd84e043fb0a01eb76e022aaa->leave($__internal_4ef95b951244ce54960cb95dc0400687d9d2f24fd84e043fb0a01eb76e022aaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
