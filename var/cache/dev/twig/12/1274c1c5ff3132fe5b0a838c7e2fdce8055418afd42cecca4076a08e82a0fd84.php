<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_a330911f56c1bc4cfcb0c9f400f4a9133388e37e2d87b3fa9841acf0b83f427a extends Twig_Template
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
        $__internal_fee29952c9602040b287b98a65ec7c35e4ed61669e51c732f807e08c486bc7d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fee29952c9602040b287b98a65ec7c35e4ed61669e51c732f807e08c486bc7d9->enter($__internal_fee29952c9602040b287b98a65ec7c35e4ed61669e51c732f807e08c486bc7d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_9b1f192f6b9a933f9f53985d59790782201892a1d4cf0307ff5ffa27480a7350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1f192f6b9a933f9f53985d59790782201892a1d4cf0307ff5ffa27480a7350->enter($__internal_9b1f192f6b9a933f9f53985d59790782201892a1d4cf0307ff5ffa27480a7350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_fee29952c9602040b287b98a65ec7c35e4ed61669e51c732f807e08c486bc7d9->leave($__internal_fee29952c9602040b287b98a65ec7c35e4ed61669e51c732f807e08c486bc7d9_prof);

        
        $__internal_9b1f192f6b9a933f9f53985d59790782201892a1d4cf0307ff5ffa27480a7350->leave($__internal_9b1f192f6b9a933f9f53985d59790782201892a1d4cf0307ff5ffa27480a7350_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
