<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_f64a4724956a2caf00c03cb76209f1b2b2d3a075757fb12e13f10d9667d15295 extends Twig_Template
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
        $__internal_2927880a82614f1241a2e1a06bc07b74b1db263b84f306ed2c8a3f70ca225e50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2927880a82614f1241a2e1a06bc07b74b1db263b84f306ed2c8a3f70ca225e50->enter($__internal_2927880a82614f1241a2e1a06bc07b74b1db263b84f306ed2c8a3f70ca225e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_590b51878669537fa1aa75c90a2cef5896e4d8c7798043e1a24e094aadabb96f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590b51878669537fa1aa75c90a2cef5896e4d8c7798043e1a24e094aadabb96f->enter($__internal_590b51878669537fa1aa75c90a2cef5896e4d8c7798043e1a24e094aadabb96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2927880a82614f1241a2e1a06bc07b74b1db263b84f306ed2c8a3f70ca225e50->leave($__internal_2927880a82614f1241a2e1a06bc07b74b1db263b84f306ed2c8a3f70ca225e50_prof);

        
        $__internal_590b51878669537fa1aa75c90a2cef5896e4d8c7798043e1a24e094aadabb96f->leave($__internal_590b51878669537fa1aa75c90a2cef5896e4d8c7798043e1a24e094aadabb96f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
