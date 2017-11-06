<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_fa3a378efa63daa82e750bbe166d9e2ce6fbfc6ac94cd6cee4bbf94d94d43f67 extends Twig_Template
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
        $__internal_932953600b754a277173764961f84f39e469e5f039c1433dd523899204232492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_932953600b754a277173764961f84f39e469e5f039c1433dd523899204232492->enter($__internal_932953600b754a277173764961f84f39e469e5f039c1433dd523899204232492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a44ff6d7c2c5309127e87efbb1f99584eb671de9daee631dbb77f9fd01aee378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44ff6d7c2c5309127e87efbb1f99584eb671de9daee631dbb77f9fd01aee378->enter($__internal_a44ff6d7c2c5309127e87efbb1f99584eb671de9daee631dbb77f9fd01aee378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_932953600b754a277173764961f84f39e469e5f039c1433dd523899204232492->leave($__internal_932953600b754a277173764961f84f39e469e5f039c1433dd523899204232492_prof);

        
        $__internal_a44ff6d7c2c5309127e87efbb1f99584eb671de9daee631dbb77f9fd01aee378->leave($__internal_a44ff6d7c2c5309127e87efbb1f99584eb671de9daee631dbb77f9fd01aee378_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
