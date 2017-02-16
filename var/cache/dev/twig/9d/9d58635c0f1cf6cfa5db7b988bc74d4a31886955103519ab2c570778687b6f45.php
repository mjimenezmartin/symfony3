<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a69ee566054d5bc8c594bc79611bef820340809b99124635a73d2cbe92b34cb1 extends Twig_Template
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
        $__internal_35ab4d0785125d52d5590bacfb86b8fe313bbbd57545f5702c617355adedfc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ab4d0785125d52d5590bacfb86b8fe313bbbd57545f5702c617355adedfc6f->enter($__internal_35ab4d0785125d52d5590bacfb86b8fe313bbbd57545f5702c617355adedfc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b9efdfddc77db59b53623f37acd571d22d7eed3bb77279e0a0edc39649fcd820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9efdfddc77db59b53623f37acd571d22d7eed3bb77279e0a0edc39649fcd820->enter($__internal_b9efdfddc77db59b53623f37acd571d22d7eed3bb77279e0a0edc39649fcd820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_35ab4d0785125d52d5590bacfb86b8fe313bbbd57545f5702c617355adedfc6f->leave($__internal_35ab4d0785125d52d5590bacfb86b8fe313bbbd57545f5702c617355adedfc6f_prof);

        
        $__internal_b9efdfddc77db59b53623f37acd571d22d7eed3bb77279e0a0edc39649fcd820->leave($__internal_b9efdfddc77db59b53623f37acd571d22d7eed3bb77279e0a0edc39649fcd820_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
