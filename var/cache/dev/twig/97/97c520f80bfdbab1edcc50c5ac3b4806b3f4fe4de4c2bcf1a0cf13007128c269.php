<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_964d048ad7d824e917408b6b3581403a9aa19ce8322beba65cf6e1fbefe8a344 extends Twig_Template
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
        $__internal_65870960ce855e921d4f9f3b5b1a70de54ed8b5feb798149497bf5e34dad87ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65870960ce855e921d4f9f3b5b1a70de54ed8b5feb798149497bf5e34dad87ef->enter($__internal_65870960ce855e921d4f9f3b5b1a70de54ed8b5feb798149497bf5e34dad87ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_5e283b07ff2f718e767d4fdcaa4536aef4f2562b67f79b50ddf6d90ab8828d95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e283b07ff2f718e767d4fdcaa4536aef4f2562b67f79b50ddf6d90ab8828d95->enter($__internal_5e283b07ff2f718e767d4fdcaa4536aef4f2562b67f79b50ddf6d90ab8828d95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_65870960ce855e921d4f9f3b5b1a70de54ed8b5feb798149497bf5e34dad87ef->leave($__internal_65870960ce855e921d4f9f3b5b1a70de54ed8b5feb798149497bf5e34dad87ef_prof);

        
        $__internal_5e283b07ff2f718e767d4fdcaa4536aef4f2562b67f79b50ddf6d90ab8828d95->leave($__internal_5e283b07ff2f718e767d4fdcaa4536aef4f2562b67f79b50ddf6d90ab8828d95_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
