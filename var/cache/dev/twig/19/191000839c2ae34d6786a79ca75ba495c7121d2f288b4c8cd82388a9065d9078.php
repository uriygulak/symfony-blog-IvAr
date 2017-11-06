<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_474fdf81342910e2c16597ec0560804ec9a40d5a76152337d4630aa7e47a6aca extends Twig_Template
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
        $__internal_c2819becb803a50bec0ae3f99d518014592ec4c6b42498d324902bdd980f6234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2819becb803a50bec0ae3f99d518014592ec4c6b42498d324902bdd980f6234->enter($__internal_c2819becb803a50bec0ae3f99d518014592ec4c6b42498d324902bdd980f6234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_248b038d1119c61503050010a17f74b94deba1c37f3742b25d64961941c02de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248b038d1119c61503050010a17f74b94deba1c37f3742b25d64961941c02de8->enter($__internal_248b038d1119c61503050010a17f74b94deba1c37f3742b25d64961941c02de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_c2819becb803a50bec0ae3f99d518014592ec4c6b42498d324902bdd980f6234->leave($__internal_c2819becb803a50bec0ae3f99d518014592ec4c6b42498d324902bdd980f6234_prof);

        
        $__internal_248b038d1119c61503050010a17f74b94deba1c37f3742b25d64961941c02de8->leave($__internal_248b038d1119c61503050010a17f74b94deba1c37f3742b25d64961941c02de8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
