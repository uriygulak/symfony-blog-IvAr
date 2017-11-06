<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_331d45c5bf5e2c19e9cba6a28b6726f84212a37e218b190eec37ee09e703a77b extends Twig_Template
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
        $__internal_682f6999274056ae013da1c46d19b36460bf982d7f03baa3f5247e3c17c32ae4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_682f6999274056ae013da1c46d19b36460bf982d7f03baa3f5247e3c17c32ae4->enter($__internal_682f6999274056ae013da1c46d19b36460bf982d7f03baa3f5247e3c17c32ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_c5f8a65c061ef3086451de9d231af3db4a755ae6e0195049c1397aee61f57944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f8a65c061ef3086451de9d231af3db4a755ae6e0195049c1397aee61f57944->enter($__internal_c5f8a65c061ef3086451de9d231af3db4a755ae6e0195049c1397aee61f57944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_682f6999274056ae013da1c46d19b36460bf982d7f03baa3f5247e3c17c32ae4->leave($__internal_682f6999274056ae013da1c46d19b36460bf982d7f03baa3f5247e3c17c32ae4_prof);

        
        $__internal_c5f8a65c061ef3086451de9d231af3db4a755ae6e0195049c1397aee61f57944->leave($__internal_c5f8a65c061ef3086451de9d231af3db4a755ae6e0195049c1397aee61f57944_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
