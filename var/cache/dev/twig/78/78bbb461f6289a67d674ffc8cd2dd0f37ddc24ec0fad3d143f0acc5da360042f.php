<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_ab5e1d0a47b638fa05a6884a541cbd01a7a9d38dac65acb5a71846b6de0045fc extends Twig_Template
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
        $__internal_5d837a800d32aba73b70916e3d278db0990946038078d77e4cc6d58272928cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d837a800d32aba73b70916e3d278db0990946038078d77e4cc6d58272928cae->enter($__internal_5d837a800d32aba73b70916e3d278db0990946038078d77e4cc6d58272928cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_99f5adf04b6c2519d26ee9a35055c3d8386f8c06d9376d2e297d701c67cb729b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f5adf04b6c2519d26ee9a35055c3d8386f8c06d9376d2e297d701c67cb729b->enter($__internal_99f5adf04b6c2519d26ee9a35055c3d8386f8c06d9376d2e297d701c67cb729b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5d837a800d32aba73b70916e3d278db0990946038078d77e4cc6d58272928cae->leave($__internal_5d837a800d32aba73b70916e3d278db0990946038078d77e4cc6d58272928cae_prof);

        
        $__internal_99f5adf04b6c2519d26ee9a35055c3d8386f8c06d9376d2e297d701c67cb729b->leave($__internal_99f5adf04b6c2519d26ee9a35055c3d8386f8c06d9376d2e297d701c67cb729b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
