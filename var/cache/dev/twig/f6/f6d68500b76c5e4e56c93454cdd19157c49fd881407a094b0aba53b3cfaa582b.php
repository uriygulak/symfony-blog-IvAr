<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_93bcbd5ac05f6797bb022beebea0b7855bd4b3c81d3be4158dcb2fe9bbe6976e extends Twig_Template
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
        $__internal_5279641001d6a5a541d495862cb34fcb4e2f033d8c84bf8219a9b2dbf43cd779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5279641001d6a5a541d495862cb34fcb4e2f033d8c84bf8219a9b2dbf43cd779->enter($__internal_5279641001d6a5a541d495862cb34fcb4e2f033d8c84bf8219a9b2dbf43cd779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_82271358a958f6cdaa5bb690a4b8a3fa6b759c62702d92c0dffde85483154336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82271358a958f6cdaa5bb690a4b8a3fa6b759c62702d92c0dffde85483154336->enter($__internal_82271358a958f6cdaa5bb690a4b8a3fa6b759c62702d92c0dffde85483154336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_5279641001d6a5a541d495862cb34fcb4e2f033d8c84bf8219a9b2dbf43cd779->leave($__internal_5279641001d6a5a541d495862cb34fcb4e2f033d8c84bf8219a9b2dbf43cd779_prof);

        
        $__internal_82271358a958f6cdaa5bb690a4b8a3fa6b759c62702d92c0dffde85483154336->leave($__internal_82271358a958f6cdaa5bb690a4b8a3fa6b759c62702d92c0dffde85483154336_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
