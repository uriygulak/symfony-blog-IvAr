<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_a95b692defe8fe2e428dc4d6f362207f3e9b0c425e16f79fa17f27f9baf7ba4b extends Twig_Template
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
        $__internal_b8127daa5f802f656dedd8d9295728acc240062d2d6c64c12aed44c154692ab4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8127daa5f802f656dedd8d9295728acc240062d2d6c64c12aed44c154692ab4->enter($__internal_b8127daa5f802f656dedd8d9295728acc240062d2d6c64c12aed44c154692ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_d60961ffca66137e4097bcce2c26fadb73621fd3fa29a84fecfba87527d0722e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d60961ffca66137e4097bcce2c26fadb73621fd3fa29a84fecfba87527d0722e->enter($__internal_d60961ffca66137e4097bcce2c26fadb73621fd3fa29a84fecfba87527d0722e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b8127daa5f802f656dedd8d9295728acc240062d2d6c64c12aed44c154692ab4->leave($__internal_b8127daa5f802f656dedd8d9295728acc240062d2d6c64c12aed44c154692ab4_prof);

        
        $__internal_d60961ffca66137e4097bcce2c26fadb73621fd3fa29a84fecfba87527d0722e->leave($__internal_d60961ffca66137e4097bcce2c26fadb73621fd3fa29a84fecfba87527d0722e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
