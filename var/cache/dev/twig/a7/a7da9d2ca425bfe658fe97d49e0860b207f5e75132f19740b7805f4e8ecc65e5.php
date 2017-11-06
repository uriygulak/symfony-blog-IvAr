<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_1a37618efb58b6bb9b230a34a82180c27dab6d046af4d0bbd1d9b6b5f0adf055 extends Twig_Template
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
        $__internal_04149215ad116386ebf6a017dffe9645d5b8a65e950a93b030a27cc5019cb852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04149215ad116386ebf6a017dffe9645d5b8a65e950a93b030a27cc5019cb852->enter($__internal_04149215ad116386ebf6a017dffe9645d5b8a65e950a93b030a27cc5019cb852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_ff398444df1de25b5b1e923e5369608c7742b71953516fa0bf2700aed883f348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff398444df1de25b5b1e923e5369608c7742b71953516fa0bf2700aed883f348->enter($__internal_ff398444df1de25b5b1e923e5369608c7742b71953516fa0bf2700aed883f348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_04149215ad116386ebf6a017dffe9645d5b8a65e950a93b030a27cc5019cb852->leave($__internal_04149215ad116386ebf6a017dffe9645d5b8a65e950a93b030a27cc5019cb852_prof);

        
        $__internal_ff398444df1de25b5b1e923e5369608c7742b71953516fa0bf2700aed883f348->leave($__internal_ff398444df1de25b5b1e923e5369608c7742b71953516fa0bf2700aed883f348_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
