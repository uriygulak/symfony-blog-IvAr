<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d594441b1dcb60682f1726b7c2e883c4096dab329026bdda73fa109f8de9463f extends Twig_Template
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
        $__internal_1a93b7b1744539fe08bdb798c652bc6d29ddb6e43c13b268fc37c47e330e6544 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a93b7b1744539fe08bdb798c652bc6d29ddb6e43c13b268fc37c47e330e6544->enter($__internal_1a93b7b1744539fe08bdb798c652bc6d29ddb6e43c13b268fc37c47e330e6544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_b1b71be4393869cf43dbac8cea9ed1f758165febf5551e611d81f3341f9456fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b71be4393869cf43dbac8cea9ed1f758165febf5551e611d81f3341f9456fa->enter($__internal_b1b71be4393869cf43dbac8cea9ed1f758165febf5551e611d81f3341f9456fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1a93b7b1744539fe08bdb798c652bc6d29ddb6e43c13b268fc37c47e330e6544->leave($__internal_1a93b7b1744539fe08bdb798c652bc6d29ddb6e43c13b268fc37c47e330e6544_prof);

        
        $__internal_b1b71be4393869cf43dbac8cea9ed1f758165febf5551e611d81f3341f9456fa->leave($__internal_b1b71be4393869cf43dbac8cea9ed1f758165febf5551e611d81f3341f9456fa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
