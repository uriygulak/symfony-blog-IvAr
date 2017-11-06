<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_20604180161d0c253980ff4ca6c65c93f43d676d7815de689377ff771ff1960e extends Twig_Template
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
        $__internal_c20d2076b59b2ec86702b0315803e057ef7aaea3996119087e450fe1b3df2bf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20d2076b59b2ec86702b0315803e057ef7aaea3996119087e450fe1b3df2bf0->enter($__internal_c20d2076b59b2ec86702b0315803e057ef7aaea3996119087e450fe1b3df2bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_85b2d4665b4419681ac64ead036034ea6e58306ceadb07e28e48be32f6ec42c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b2d4665b4419681ac64ead036034ea6e58306ceadb07e28e48be32f6ec42c4->enter($__internal_85b2d4665b4419681ac64ead036034ea6e58306ceadb07e28e48be32f6ec42c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_c20d2076b59b2ec86702b0315803e057ef7aaea3996119087e450fe1b3df2bf0->leave($__internal_c20d2076b59b2ec86702b0315803e057ef7aaea3996119087e450fe1b3df2bf0_prof);

        
        $__internal_85b2d4665b4419681ac64ead036034ea6e58306ceadb07e28e48be32f6ec42c4->leave($__internal_85b2d4665b4419681ac64ead036034ea6e58306ceadb07e28e48be32f6ec42c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
