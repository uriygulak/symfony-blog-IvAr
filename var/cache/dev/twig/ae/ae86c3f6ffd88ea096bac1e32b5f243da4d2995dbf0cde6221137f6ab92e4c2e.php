<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b6f233a35f9c63cbe07b00cd70fc07e26001ead1657a2ab7efdda353f49b7658 extends Twig_Template
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
        $__internal_c6281e26f08119b517d94e7736b02c362b88a95263ae368acd1401ec08a165b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6281e26f08119b517d94e7736b02c362b88a95263ae368acd1401ec08a165b5->enter($__internal_c6281e26f08119b517d94e7736b02c362b88a95263ae368acd1401ec08a165b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_b1138ff8c38a8a8b5f3561c651872c2793c1ec13c99e93890c108ad8b2506045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1138ff8c38a8a8b5f3561c651872c2793c1ec13c99e93890c108ad8b2506045->enter($__internal_b1138ff8c38a8a8b5f3561c651872c2793c1ec13c99e93890c108ad8b2506045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c6281e26f08119b517d94e7736b02c362b88a95263ae368acd1401ec08a165b5->leave($__internal_c6281e26f08119b517d94e7736b02c362b88a95263ae368acd1401ec08a165b5_prof);

        
        $__internal_b1138ff8c38a8a8b5f3561c651872c2793c1ec13c99e93890c108ad8b2506045->leave($__internal_b1138ff8c38a8a8b5f3561c651872c2793c1ec13c99e93890c108ad8b2506045_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
