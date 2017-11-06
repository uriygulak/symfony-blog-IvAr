<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_386cc72c687c4c373171fe66ee9af7f735eee19f02f6aee58b606f032e4f9d2a extends Twig_Template
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
        $__internal_45580550ff454545b6b3e64e726742bd04538b9751a56551fd0463cb057dca14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45580550ff454545b6b3e64e726742bd04538b9751a56551fd0463cb057dca14->enter($__internal_45580550ff454545b6b3e64e726742bd04538b9751a56551fd0463cb057dca14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_98133c035b07b0abb9ac72b7c9bbb15968d5874f86acc51aecea6d301e5acf5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98133c035b07b0abb9ac72b7c9bbb15968d5874f86acc51aecea6d301e5acf5d->enter($__internal_98133c035b07b0abb9ac72b7c9bbb15968d5874f86acc51aecea6d301e5acf5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_45580550ff454545b6b3e64e726742bd04538b9751a56551fd0463cb057dca14->leave($__internal_45580550ff454545b6b3e64e726742bd04538b9751a56551fd0463cb057dca14_prof);

        
        $__internal_98133c035b07b0abb9ac72b7c9bbb15968d5874f86acc51aecea6d301e5acf5d->leave($__internal_98133c035b07b0abb9ac72b7c9bbb15968d5874f86acc51aecea6d301e5acf5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
