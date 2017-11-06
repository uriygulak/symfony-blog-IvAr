<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_2c0a50a619372b98dc5ec5c8378e81c3aebfa8516c3277e0dc074be8aff9bc04 extends Twig_Template
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
        $__internal_5f0a7a28e3e93436d05f0d0c3e390543704af1c510722ec060cd1bd6157ec248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f0a7a28e3e93436d05f0d0c3e390543704af1c510722ec060cd1bd6157ec248->enter($__internal_5f0a7a28e3e93436d05f0d0c3e390543704af1c510722ec060cd1bd6157ec248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e194e23cb2d8f25776d93a20749295051e4c6ff3a81718e02b89c790126eea40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e194e23cb2d8f25776d93a20749295051e4c6ff3a81718e02b89c790126eea40->enter($__internal_e194e23cb2d8f25776d93a20749295051e4c6ff3a81718e02b89c790126eea40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_5f0a7a28e3e93436d05f0d0c3e390543704af1c510722ec060cd1bd6157ec248->leave($__internal_5f0a7a28e3e93436d05f0d0c3e390543704af1c510722ec060cd1bd6157ec248_prof);

        
        $__internal_e194e23cb2d8f25776d93a20749295051e4c6ff3a81718e02b89c790126eea40->leave($__internal_e194e23cb2d8f25776d93a20749295051e4c6ff3a81718e02b89c790126eea40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
