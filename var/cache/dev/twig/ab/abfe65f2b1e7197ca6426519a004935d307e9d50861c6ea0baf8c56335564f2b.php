<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9b291cd9f8af7becc3484f51122a5aebd6ca3518cc008668e0c015602566f9e5 extends Twig_Template
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
        $__internal_425c4d497215bc0f75ac3625ff8e44a6d0a2ba8e718a3e893b1f4bfa56bd3a3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_425c4d497215bc0f75ac3625ff8e44a6d0a2ba8e718a3e893b1f4bfa56bd3a3a->enter($__internal_425c4d497215bc0f75ac3625ff8e44a6d0a2ba8e718a3e893b1f4bfa56bd3a3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_01d8fd71c531103691ee224e88443c8f05b92a05ac9767ba089839acc02256b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d8fd71c531103691ee224e88443c8f05b92a05ac9767ba089839acc02256b5->enter($__internal_01d8fd71c531103691ee224e88443c8f05b92a05ac9767ba089839acc02256b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_425c4d497215bc0f75ac3625ff8e44a6d0a2ba8e718a3e893b1f4bfa56bd3a3a->leave($__internal_425c4d497215bc0f75ac3625ff8e44a6d0a2ba8e718a3e893b1f4bfa56bd3a3a_prof);

        
        $__internal_01d8fd71c531103691ee224e88443c8f05b92a05ac9767ba089839acc02256b5->leave($__internal_01d8fd71c531103691ee224e88443c8f05b92a05ac9767ba089839acc02256b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
