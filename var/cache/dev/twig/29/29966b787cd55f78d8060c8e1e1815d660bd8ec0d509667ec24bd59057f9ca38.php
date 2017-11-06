<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9052d7f9db30066c789c082a4178b5916a3062aa30506a21ec752c2ec61306d7 extends Twig_Template
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
        $__internal_9089cba98c900552bed9fb4c07c30a4229a72762929789a683e812c25b62006c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9089cba98c900552bed9fb4c07c30a4229a72762929789a683e812c25b62006c->enter($__internal_9089cba98c900552bed9fb4c07c30a4229a72762929789a683e812c25b62006c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_7fe8f1d539cb7982a72ba4dccec3046ae3e9b063db5189554529f23d1de0ded8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe8f1d539cb7982a72ba4dccec3046ae3e9b063db5189554529f23d1de0ded8->enter($__internal_7fe8f1d539cb7982a72ba4dccec3046ae3e9b063db5189554529f23d1de0ded8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_9089cba98c900552bed9fb4c07c30a4229a72762929789a683e812c25b62006c->leave($__internal_9089cba98c900552bed9fb4c07c30a4229a72762929789a683e812c25b62006c_prof);

        
        $__internal_7fe8f1d539cb7982a72ba4dccec3046ae3e9b063db5189554529f23d1de0ded8->leave($__internal_7fe8f1d539cb7982a72ba4dccec3046ae3e9b063db5189554529f23d1de0ded8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
