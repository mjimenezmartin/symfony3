<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_37b437dd0f1fd94ff99c3f8caa08f2a3e2a2aa40dac99dc5bdab92383f0fc6d8 extends Twig_Template
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
        $__internal_732248695b4a2db753c3a5589ef2de2535abd91073f846a188dfb13694a1a9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_732248695b4a2db753c3a5589ef2de2535abd91073f846a188dfb13694a1a9f7->enter($__internal_732248695b4a2db753c3a5589ef2de2535abd91073f846a188dfb13694a1a9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_36d4c0be4169aba0c500b72ed5648e0dff273b44afc8d5a2e29112a7ca920d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36d4c0be4169aba0c500b72ed5648e0dff273b44afc8d5a2e29112a7ca920d1f->enter($__internal_36d4c0be4169aba0c500b72ed5648e0dff273b44afc8d5a2e29112a7ca920d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_732248695b4a2db753c3a5589ef2de2535abd91073f846a188dfb13694a1a9f7->leave($__internal_732248695b4a2db753c3a5589ef2de2535abd91073f846a188dfb13694a1a9f7_prof);

        
        $__internal_36d4c0be4169aba0c500b72ed5648e0dff273b44afc8d5a2e29112a7ca920d1f->leave($__internal_36d4c0be4169aba0c500b72ed5648e0dff273b44afc8d5a2e29112a7ca920d1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
