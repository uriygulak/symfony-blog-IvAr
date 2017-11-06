<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_8020539636230066ee4f2cdfdbaafef45c1baea671c770ad4575d9ae6da66ab6 extends Twig_Template
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
        $__internal_f8c82f27edd85e6f74a0681a662c710f3bf8ce38e528f8fe4b0312b85c7f2ad3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8c82f27edd85e6f74a0681a662c710f3bf8ce38e528f8fe4b0312b85c7f2ad3->enter($__internal_f8c82f27edd85e6f74a0681a662c710f3bf8ce38e528f8fe4b0312b85c7f2ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_c29136a55de879370dbc72c46c46a6081d3a522907ca9bbc87618fd6579cda71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29136a55de879370dbc72c46c46a6081d3a522907ca9bbc87618fd6579cda71->enter($__internal_c29136a55de879370dbc72c46c46a6081d3a522907ca9bbc87618fd6579cda71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f8c82f27edd85e6f74a0681a662c710f3bf8ce38e528f8fe4b0312b85c7f2ad3->leave($__internal_f8c82f27edd85e6f74a0681a662c710f3bf8ce38e528f8fe4b0312b85c7f2ad3_prof);

        
        $__internal_c29136a55de879370dbc72c46c46a6081d3a522907ca9bbc87618fd6579cda71->leave($__internal_c29136a55de879370dbc72c46c46a6081d3a522907ca9bbc87618fd6579cda71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
