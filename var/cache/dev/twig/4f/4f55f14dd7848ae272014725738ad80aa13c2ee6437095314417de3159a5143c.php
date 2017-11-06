<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d9997e02530486a8c69d6bdaeedda434894c94a81c6d9f15ed7afb2ff70cace5 extends Twig_Template
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
        $__internal_37d4d7e86904d0cb480e0659eb0cbd6eee1be6af0a1d55b16ea13b428102d507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37d4d7e86904d0cb480e0659eb0cbd6eee1be6af0a1d55b16ea13b428102d507->enter($__internal_37d4d7e86904d0cb480e0659eb0cbd6eee1be6af0a1d55b16ea13b428102d507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_c80149298a3fb79214380b85a39185b417d6c546388fb038d4341279e2d9d2c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c80149298a3fb79214380b85a39185b417d6c546388fb038d4341279e2d9d2c4->enter($__internal_c80149298a3fb79214380b85a39185b417d6c546388fb038d4341279e2d9d2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_37d4d7e86904d0cb480e0659eb0cbd6eee1be6af0a1d55b16ea13b428102d507->leave($__internal_37d4d7e86904d0cb480e0659eb0cbd6eee1be6af0a1d55b16ea13b428102d507_prof);

        
        $__internal_c80149298a3fb79214380b85a39185b417d6c546388fb038d4341279e2d9d2c4->leave($__internal_c80149298a3fb79214380b85a39185b417d6c546388fb038d4341279e2d9d2c4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
