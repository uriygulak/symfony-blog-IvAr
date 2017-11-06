<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6bfdf1da10bfc6da47af2a12b918c6600c3c0ae99d970f8551ebd614328a4013 extends Twig_Template
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
        $__internal_b745d589122eceba9dc319a099869559f7cc8b3b16443acc2a1b1eb969f96ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b745d589122eceba9dc319a099869559f7cc8b3b16443acc2a1b1eb969f96ef8->enter($__internal_b745d589122eceba9dc319a099869559f7cc8b3b16443acc2a1b1eb969f96ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_afe06d47f0cce69377a2f8721b922116219907ad82820190d7aca5e144b23a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe06d47f0cce69377a2f8721b922116219907ad82820190d7aca5e144b23a61->enter($__internal_afe06d47f0cce69377a2f8721b922116219907ad82820190d7aca5e144b23a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b745d589122eceba9dc319a099869559f7cc8b3b16443acc2a1b1eb969f96ef8->leave($__internal_b745d589122eceba9dc319a099869559f7cc8b3b16443acc2a1b1eb969f96ef8_prof);

        
        $__internal_afe06d47f0cce69377a2f8721b922116219907ad82820190d7aca5e144b23a61->leave($__internal_afe06d47f0cce69377a2f8721b922116219907ad82820190d7aca5e144b23a61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
