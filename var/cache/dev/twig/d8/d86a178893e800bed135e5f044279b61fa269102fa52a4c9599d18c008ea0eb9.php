<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_82d94865b8bc774c13f5ebb9ff2abfad6837ed5c949c7dfb9a8d130b8e708058 extends Twig_Template
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
        $__internal_35044df91f8f0a9d2db5ed38d5365d94b066c3419d2cea0488fbac2363aa81ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35044df91f8f0a9d2db5ed38d5365d94b066c3419d2cea0488fbac2363aa81ea->enter($__internal_35044df91f8f0a9d2db5ed38d5365d94b066c3419d2cea0488fbac2363aa81ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_54297b04bcee6b1db7b545a7f1a2dd79a55cfd4c82b2b0bf5b9d50415192fb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54297b04bcee6b1db7b545a7f1a2dd79a55cfd4c82b2b0bf5b9d50415192fb36->enter($__internal_54297b04bcee6b1db7b545a7f1a2dd79a55cfd4c82b2b0bf5b9d50415192fb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_35044df91f8f0a9d2db5ed38d5365d94b066c3419d2cea0488fbac2363aa81ea->leave($__internal_35044df91f8f0a9d2db5ed38d5365d94b066c3419d2cea0488fbac2363aa81ea_prof);

        
        $__internal_54297b04bcee6b1db7b545a7f1a2dd79a55cfd4c82b2b0bf5b9d50415192fb36->leave($__internal_54297b04bcee6b1db7b545a7f1a2dd79a55cfd4c82b2b0bf5b9d50415192fb36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
