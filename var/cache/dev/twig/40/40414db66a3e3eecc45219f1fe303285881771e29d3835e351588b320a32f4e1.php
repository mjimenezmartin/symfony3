<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_92934f20cb510fc10a3c6ab8bf224ba1a51685a538e0f60451e89666e9f77640 extends Twig_Template
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
        $__internal_accd4f48eb7c70cbf318bafe22717a34b2122b35089dd479764d6a4571d2e444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_accd4f48eb7c70cbf318bafe22717a34b2122b35089dd479764d6a4571d2e444->enter($__internal_accd4f48eb7c70cbf318bafe22717a34b2122b35089dd479764d6a4571d2e444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_1488c44d9e6f8ddf6e8184325099b45c29362a3e66b35f50007dcb4ee0038887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1488c44d9e6f8ddf6e8184325099b45c29362a3e66b35f50007dcb4ee0038887->enter($__internal_1488c44d9e6f8ddf6e8184325099b45c29362a3e66b35f50007dcb4ee0038887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_accd4f48eb7c70cbf318bafe22717a34b2122b35089dd479764d6a4571d2e444->leave($__internal_accd4f48eb7c70cbf318bafe22717a34b2122b35089dd479764d6a4571d2e444_prof);

        
        $__internal_1488c44d9e6f8ddf6e8184325099b45c29362a3e66b35f50007dcb4ee0038887->leave($__internal_1488c44d9e6f8ddf6e8184325099b45c29362a3e66b35f50007dcb4ee0038887_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
