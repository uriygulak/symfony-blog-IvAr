<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_b033fdbbbb4dab97b1aa6b45ce8db198a6e04fcc0fcd7d7cdcea29c33ae4d1ac extends Twig_Template
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
        $__internal_3d2560c7de5ba13a98d67c4a479fea95dc1345471e3be3cf82e1b25107ffe830 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2560c7de5ba13a98d67c4a479fea95dc1345471e3be3cf82e1b25107ffe830->enter($__internal_3d2560c7de5ba13a98d67c4a479fea95dc1345471e3be3cf82e1b25107ffe830_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_20be05a196e47fdd50883d462c103fa8c9da43722ca7cc3b817fc73721979e85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20be05a196e47fdd50883d462c103fa8c9da43722ca7cc3b817fc73721979e85->enter($__internal_20be05a196e47fdd50883d462c103fa8c9da43722ca7cc3b817fc73721979e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_3d2560c7de5ba13a98d67c4a479fea95dc1345471e3be3cf82e1b25107ffe830->leave($__internal_3d2560c7de5ba13a98d67c4a479fea95dc1345471e3be3cf82e1b25107ffe830_prof);

        
        $__internal_20be05a196e47fdd50883d462c103fa8c9da43722ca7cc3b817fc73721979e85->leave($__internal_20be05a196e47fdd50883d462c103fa8c9da43722ca7cc3b817fc73721979e85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
