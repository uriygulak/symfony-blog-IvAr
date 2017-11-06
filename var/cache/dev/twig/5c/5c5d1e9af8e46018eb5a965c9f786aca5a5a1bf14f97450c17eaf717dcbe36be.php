<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_3dac9b7a7409bed7d30a03d5c40b31143f041c0a5ac8e16cdf1d670dacd9efff extends Twig_Template
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
        $__internal_68e8f264d061e378a8b1777d5f964eafe3a3f5ea636073942cca3d77a142b3e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e8f264d061e378a8b1777d5f964eafe3a3f5ea636073942cca3d77a142b3e6->enter($__internal_68e8f264d061e378a8b1777d5f964eafe3a3f5ea636073942cca3d77a142b3e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_e0306fa8cc5bcb89576b0a957cbc207d876b621d178f4d635e5956b9c7431904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0306fa8cc5bcb89576b0a957cbc207d876b621d178f4d635e5956b9c7431904->enter($__internal_e0306fa8cc5bcb89576b0a957cbc207d876b621d178f4d635e5956b9c7431904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_68e8f264d061e378a8b1777d5f964eafe3a3f5ea636073942cca3d77a142b3e6->leave($__internal_68e8f264d061e378a8b1777d5f964eafe3a3f5ea636073942cca3d77a142b3e6_prof);

        
        $__internal_e0306fa8cc5bcb89576b0a957cbc207d876b621d178f4d635e5956b9c7431904->leave($__internal_e0306fa8cc5bcb89576b0a957cbc207d876b621d178f4d635e5956b9c7431904_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
