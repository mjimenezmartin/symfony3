<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8add74f2af1af879858722f66c716117ea276e03dd158b7360eaada7092dae3f extends Twig_Template
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
        $__internal_462ce5138d833487ff985833172aa26157f8744ae85eec1bf5a2a8ef5478428e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_462ce5138d833487ff985833172aa26157f8744ae85eec1bf5a2a8ef5478428e->enter($__internal_462ce5138d833487ff985833172aa26157f8744ae85eec1bf5a2a8ef5478428e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0a0b6c30b7e66a23537504fea08cb08c8b9385c2d7152494c22e4ad5f556fe90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0b6c30b7e66a23537504fea08cb08c8b9385c2d7152494c22e4ad5f556fe90->enter($__internal_0a0b6c30b7e66a23537504fea08cb08c8b9385c2d7152494c22e4ad5f556fe90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_462ce5138d833487ff985833172aa26157f8744ae85eec1bf5a2a8ef5478428e->leave($__internal_462ce5138d833487ff985833172aa26157f8744ae85eec1bf5a2a8ef5478428e_prof);

        
        $__internal_0a0b6c30b7e66a23537504fea08cb08c8b9385c2d7152494c22e4ad5f556fe90->leave($__internal_0a0b6c30b7e66a23537504fea08cb08c8b9385c2d7152494c22e4ad5f556fe90_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
