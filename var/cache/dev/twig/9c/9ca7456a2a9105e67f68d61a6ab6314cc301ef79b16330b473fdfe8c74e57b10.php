<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_66869ba7eff9fd715468a31dfed603debc51a886aad83e18551ac236ba3e16e9 extends Twig_Template
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
        $__internal_3df4fa9c5c03048aa8b7fe754acc615b467b9c6b041a8e193b2ba0abccfec159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3df4fa9c5c03048aa8b7fe754acc615b467b9c6b041a8e193b2ba0abccfec159->enter($__internal_3df4fa9c5c03048aa8b7fe754acc615b467b9c6b041a8e193b2ba0abccfec159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_bd304c71195d15e409a3916ddbf52f6fd7e66deee90cf9fb73fa04f9f31c4b14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd304c71195d15e409a3916ddbf52f6fd7e66deee90cf9fb73fa04f9f31c4b14->enter($__internal_bd304c71195d15e409a3916ddbf52f6fd7e66deee90cf9fb73fa04f9f31c4b14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_3df4fa9c5c03048aa8b7fe754acc615b467b9c6b041a8e193b2ba0abccfec159->leave($__internal_3df4fa9c5c03048aa8b7fe754acc615b467b9c6b041a8e193b2ba0abccfec159_prof);

        
        $__internal_bd304c71195d15e409a3916ddbf52f6fd7e66deee90cf9fb73fa04f9f31c4b14->leave($__internal_bd304c71195d15e409a3916ddbf52f6fd7e66deee90cf9fb73fa04f9f31c4b14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
