<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_84497e8a69ff7fbb165cc284cedb74d7ede2775e45353184c450a0469bda60db extends Twig_Template
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
        $__internal_d2399eab47c375979ac964ac6e7b27cc57db275a66f818ff062e43d9178a0917 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2399eab47c375979ac964ac6e7b27cc57db275a66f818ff062e43d9178a0917->enter($__internal_d2399eab47c375979ac964ac6e7b27cc57db275a66f818ff062e43d9178a0917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a556fa021b5ede90b9d9b4fad546c5710a4b964407bbdbd9d1a15afd6e7d5638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a556fa021b5ede90b9d9b4fad546c5710a4b964407bbdbd9d1a15afd6e7d5638->enter($__internal_a556fa021b5ede90b9d9b4fad546c5710a4b964407bbdbd9d1a15afd6e7d5638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d2399eab47c375979ac964ac6e7b27cc57db275a66f818ff062e43d9178a0917->leave($__internal_d2399eab47c375979ac964ac6e7b27cc57db275a66f818ff062e43d9178a0917_prof);

        
        $__internal_a556fa021b5ede90b9d9b4fad546c5710a4b964407bbdbd9d1a15afd6e7d5638->leave($__internal_a556fa021b5ede90b9d9b4fad546c5710a4b964407bbdbd9d1a15afd6e7d5638_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
