<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_a073118d8a5547d810cdd606ad26d314e035614a867cb22e2212b97c9a4a8ae4 extends Twig_Template
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
        $__internal_c39d76f690bb1cd38369cc2ae20e8ac2deda06397517b0949ed9abab93c30786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c39d76f690bb1cd38369cc2ae20e8ac2deda06397517b0949ed9abab93c30786->enter($__internal_c39d76f690bb1cd38369cc2ae20e8ac2deda06397517b0949ed9abab93c30786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_06085ac74b31b3573cd0741dd68389155cb8daa5e2207f2ef1dd569e7b312272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06085ac74b31b3573cd0741dd68389155cb8daa5e2207f2ef1dd569e7b312272->enter($__internal_06085ac74b31b3573cd0741dd68389155cb8daa5e2207f2ef1dd569e7b312272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_c39d76f690bb1cd38369cc2ae20e8ac2deda06397517b0949ed9abab93c30786->leave($__internal_c39d76f690bb1cd38369cc2ae20e8ac2deda06397517b0949ed9abab93c30786_prof);

        
        $__internal_06085ac74b31b3573cd0741dd68389155cb8daa5e2207f2ef1dd569e7b312272->leave($__internal_06085ac74b31b3573cd0741dd68389155cb8daa5e2207f2ef1dd569e7b312272_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\attributes.html.php");
    }
}
