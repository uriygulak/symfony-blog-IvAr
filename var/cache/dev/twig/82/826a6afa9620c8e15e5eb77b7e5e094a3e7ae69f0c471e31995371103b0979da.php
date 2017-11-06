<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1b0e9c4b22c46743b968e7f0fadebeaacf90d92c6a7ce1c217e3b85c4e748aae extends Twig_Template
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
        $__internal_1cc134d9c7b356d4468a0611db20f458ce9c82bc35a8a7116c9456f565308040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc134d9c7b356d4468a0611db20f458ce9c82bc35a8a7116c9456f565308040->enter($__internal_1cc134d9c7b356d4468a0611db20f458ce9c82bc35a8a7116c9456f565308040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_6d68937db3d60344e56660cbf3a21995cf67ee74beab7b952508b8205074e98e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d68937db3d60344e56660cbf3a21995cf67ee74beab7b952508b8205074e98e->enter($__internal_6d68937db3d60344e56660cbf3a21995cf67ee74beab7b952508b8205074e98e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1cc134d9c7b356d4468a0611db20f458ce9c82bc35a8a7116c9456f565308040->leave($__internal_1cc134d9c7b356d4468a0611db20f458ce9c82bc35a8a7116c9456f565308040_prof);

        
        $__internal_6d68937db3d60344e56660cbf3a21995cf67ee74beab7b952508b8205074e98e->leave($__internal_6d68937db3d60344e56660cbf3a21995cf67ee74beab7b952508b8205074e98e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
