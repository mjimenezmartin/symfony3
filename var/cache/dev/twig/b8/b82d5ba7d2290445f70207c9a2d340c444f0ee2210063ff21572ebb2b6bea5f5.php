<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_6347b592edb1433fdc84d15efbd7f4b0c8c7149c6b44424ed69dcd0fae91af3f extends Twig_Template
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
        $__internal_d2637174648fb966543bb004d06b2f48051713f9ae8768754b813e82a3e9b06b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2637174648fb966543bb004d06b2f48051713f9ae8768754b813e82a3e9b06b->enter($__internal_d2637174648fb966543bb004d06b2f48051713f9ae8768754b813e82a3e9b06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_b079f722993428a170cc5b7029ae58de3e735c6c3844f97bc3600e847c8d92df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b079f722993428a170cc5b7029ae58de3e735c6c3844f97bc3600e847c8d92df->enter($__internal_b079f722993428a170cc5b7029ae58de3e735c6c3844f97bc3600e847c8d92df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d2637174648fb966543bb004d06b2f48051713f9ae8768754b813e82a3e9b06b->leave($__internal_d2637174648fb966543bb004d06b2f48051713f9ae8768754b813e82a3e9b06b_prof);

        
        $__internal_b079f722993428a170cc5b7029ae58de3e735c6c3844f97bc3600e847c8d92df->leave($__internal_b079f722993428a170cc5b7029ae58de3e735c6c3844f97bc3600e847c8d92df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
