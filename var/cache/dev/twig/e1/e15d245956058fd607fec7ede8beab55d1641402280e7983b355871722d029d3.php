<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_57a77df7e7c79a89a3cbd49a03940414a35e9f3f586533bd4e527bb2b3e34da4 extends Twig_Template
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
        $__internal_97c5831418717154ad3f805914c65b150bad3204fbd02d1b5419e942eacfaa45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c5831418717154ad3f805914c65b150bad3204fbd02d1b5419e942eacfaa45->enter($__internal_97c5831418717154ad3f805914c65b150bad3204fbd02d1b5419e942eacfaa45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_6ac1294e590ea790db2773f474c2868a25f3e95529ffaa3a6371c1c78d691ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac1294e590ea790db2773f474c2868a25f3e95529ffaa3a6371c1c78d691ca0->enter($__internal_6ac1294e590ea790db2773f474c2868a25f3e95529ffaa3a6371c1c78d691ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_97c5831418717154ad3f805914c65b150bad3204fbd02d1b5419e942eacfaa45->leave($__internal_97c5831418717154ad3f805914c65b150bad3204fbd02d1b5419e942eacfaa45_prof);

        
        $__internal_6ac1294e590ea790db2773f474c2868a25f3e95529ffaa3a6371c1c78d691ca0->leave($__internal_6ac1294e590ea790db2773f474c2868a25f3e95529ffaa3a6371c1c78d691ca0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
