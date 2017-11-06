<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_8d79c55f328140ddd7570c93b34f5d78e97bc2816749ba598f6029733736d299 extends Twig_Template
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
        $__internal_85c280a940ac2d4f8b4550d00b0a91c86f1550f3df031b4720960a844e8b4568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c280a940ac2d4f8b4550d00b0a91c86f1550f3df031b4720960a844e8b4568->enter($__internal_85c280a940ac2d4f8b4550d00b0a91c86f1550f3df031b4720960a844e8b4568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_d03670efd03f70076ad98986b1496d3b27adefd1d36ef1c89e9970252defd264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d03670efd03f70076ad98986b1496d3b27adefd1d36ef1c89e9970252defd264->enter($__internal_d03670efd03f70076ad98986b1496d3b27adefd1d36ef1c89e9970252defd264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_85c280a940ac2d4f8b4550d00b0a91c86f1550f3df031b4720960a844e8b4568->leave($__internal_85c280a940ac2d4f8b4550d00b0a91c86f1550f3df031b4720960a844e8b4568_prof);

        
        $__internal_d03670efd03f70076ad98986b1496d3b27adefd1d36ef1c89e9970252defd264->leave($__internal_d03670efd03f70076ad98986b1496d3b27adefd1d36ef1c89e9970252defd264_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
