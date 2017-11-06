<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_2bec3815133dbdfb9c8ea78f45a953f0df37b976cb9668c04d9908bab093f9af extends Twig_Template
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
        $__internal_80dba70b18a03c0159d6579112c14b61991208414c0b2dcdd1b329164255516f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80dba70b18a03c0159d6579112c14b61991208414c0b2dcdd1b329164255516f->enter($__internal_80dba70b18a03c0159d6579112c14b61991208414c0b2dcdd1b329164255516f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_fa32c3f4df1d982a31162961437597d4923fab71b933390a5e24b60ae5f68bba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa32c3f4df1d982a31162961437597d4923fab71b933390a5e24b60ae5f68bba->enter($__internal_fa32c3f4df1d982a31162961437597d4923fab71b933390a5e24b60ae5f68bba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_80dba70b18a03c0159d6579112c14b61991208414c0b2dcdd1b329164255516f->leave($__internal_80dba70b18a03c0159d6579112c14b61991208414c0b2dcdd1b329164255516f_prof);

        
        $__internal_fa32c3f4df1d982a31162961437597d4923fab71b933390a5e24b60ae5f68bba->leave($__internal_fa32c3f4df1d982a31162961437597d4923fab71b933390a5e24b60ae5f68bba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
