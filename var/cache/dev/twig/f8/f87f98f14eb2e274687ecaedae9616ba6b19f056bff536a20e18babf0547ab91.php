<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_5d13d56eb6f972064b5c85b863193c5e423e2c3076eff9ce31bae3c8d131b35d extends Twig_Template
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
        $__internal_753cd4853b875e6428f2e34e8767289a696f88093ca3b6fd0b093a2c8b81609e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_753cd4853b875e6428f2e34e8767289a696f88093ca3b6fd0b093a2c8b81609e->enter($__internal_753cd4853b875e6428f2e34e8767289a696f88093ca3b6fd0b093a2c8b81609e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_aa55bc1c3771b21c2805b7ae2809e4c5ce1de5da72ef02f93013b8dd95a56370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa55bc1c3771b21c2805b7ae2809e4c5ce1de5da72ef02f93013b8dd95a56370->enter($__internal_aa55bc1c3771b21c2805b7ae2809e4c5ce1de5da72ef02f93013b8dd95a56370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_753cd4853b875e6428f2e34e8767289a696f88093ca3b6fd0b093a2c8b81609e->leave($__internal_753cd4853b875e6428f2e34e8767289a696f88093ca3b6fd0b093a2c8b81609e_prof);

        
        $__internal_aa55bc1c3771b21c2805b7ae2809e4c5ce1de5da72ef02f93013b8dd95a56370->leave($__internal_aa55bc1c3771b21c2805b7ae2809e4c5ce1de5da72ef02f93013b8dd95a56370_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
