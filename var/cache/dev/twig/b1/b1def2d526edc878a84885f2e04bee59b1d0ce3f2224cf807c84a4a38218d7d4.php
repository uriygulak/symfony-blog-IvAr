<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_92d09a900be8462e5dc42f917e0534283c8e46401f961a7f9ef3b44326e9cbb1 extends Twig_Template
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
        $__internal_cb0dfd77ebdd9ea116716b52547b1ca6c9cff6bb869089bcefbac0aa342df16f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb0dfd77ebdd9ea116716b52547b1ca6c9cff6bb869089bcefbac0aa342df16f->enter($__internal_cb0dfd77ebdd9ea116716b52547b1ca6c9cff6bb869089bcefbac0aa342df16f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_06c05755f6c0964f28b4aed373d2d313ec958f15788496b80f2fba5f0e66d5c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c05755f6c0964f28b4aed373d2d313ec958f15788496b80f2fba5f0e66d5c3->enter($__internal_06c05755f6c0964f28b4aed373d2d313ec958f15788496b80f2fba5f0e66d5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_cb0dfd77ebdd9ea116716b52547b1ca6c9cff6bb869089bcefbac0aa342df16f->leave($__internal_cb0dfd77ebdd9ea116716b52547b1ca6c9cff6bb869089bcefbac0aa342df16f_prof);

        
        $__internal_06c05755f6c0964f28b4aed373d2d313ec958f15788496b80f2fba5f0e66d5c3->leave($__internal_06c05755f6c0964f28b4aed373d2d313ec958f15788496b80f2fba5f0e66d5c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
