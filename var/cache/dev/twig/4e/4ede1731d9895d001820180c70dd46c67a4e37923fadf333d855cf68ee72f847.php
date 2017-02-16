<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_e9bf40c8d9f73e0656cba46ccd69bbda51c877f776c68e15cc525f28956b2eb1 extends Twig_Template
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
        $__internal_980dde4ee0786eca52aa6c03541c30b7eb2a08d61c7f6d2ffc772df4961668fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980dde4ee0786eca52aa6c03541c30b7eb2a08d61c7f6d2ffc772df4961668fe->enter($__internal_980dde4ee0786eca52aa6c03541c30b7eb2a08d61c7f6d2ffc772df4961668fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_0d6a1f6424278d7650287c832101d0258495ee59ea772a02c249e255c3465abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6a1f6424278d7650287c832101d0258495ee59ea772a02c249e255c3465abd->enter($__internal_0d6a1f6424278d7650287c832101d0258495ee59ea772a02c249e255c3465abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_980dde4ee0786eca52aa6c03541c30b7eb2a08d61c7f6d2ffc772df4961668fe->leave($__internal_980dde4ee0786eca52aa6c03541c30b7eb2a08d61c7f6d2ffc772df4961668fe_prof);

        
        $__internal_0d6a1f6424278d7650287c832101d0258495ee59ea772a02c249e255c3465abd->leave($__internal_0d6a1f6424278d7650287c832101d0258495ee59ea772a02c249e255c3465abd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "F:\\xampp\\htdocs\\symfony3\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
