<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_f9dbd3650e5810d07e7a0ab64e3ec70f30bbb18239e8009425860cf6d178bd99 extends Twig_Template
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
        $__internal_fbb8dd7ab97ab2bad8ff6203c26c277ebd7da53eba367c152236540b87937066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb8dd7ab97ab2bad8ff6203c26c277ebd7da53eba367c152236540b87937066->enter($__internal_fbb8dd7ab97ab2bad8ff6203c26c277ebd7da53eba367c152236540b87937066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_7cb3488be81a3471cf2d3b178cb70b7c6ee618b1464ece71a1db2019c884f278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cb3488be81a3471cf2d3b178cb70b7c6ee618b1464ece71a1db2019c884f278->enter($__internal_7cb3488be81a3471cf2d3b178cb70b7c6ee618b1464ece71a1db2019c884f278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fbb8dd7ab97ab2bad8ff6203c26c277ebd7da53eba367c152236540b87937066->leave($__internal_fbb8dd7ab97ab2bad8ff6203c26c277ebd7da53eba367c152236540b87937066_prof);

        
        $__internal_7cb3488be81a3471cf2d3b178cb70b7c6ee618b1464ece71a1db2019c884f278->leave($__internal_7cb3488be81a3471cf2d3b178cb70b7c6ee618b1464ece71a1db2019c884f278_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
