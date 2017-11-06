<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a40a6060e1adbd59aef8d786790e899ea0feb7bc866ea79c8b021c1d0e3332f3 extends Twig_Template
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
        $__internal_526a59d5837945f51d1407abc170e49161779182f06acf1e040b934837e9e666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526a59d5837945f51d1407abc170e49161779182f06acf1e040b934837e9e666->enter($__internal_526a59d5837945f51d1407abc170e49161779182f06acf1e040b934837e9e666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_929260e6584ae6bcecee7f0db055a0d5190bf53edcb3476f58410cc2e3c8de42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929260e6584ae6bcecee7f0db055a0d5190bf53edcb3476f58410cc2e3c8de42->enter($__internal_929260e6584ae6bcecee7f0db055a0d5190bf53edcb3476f58410cc2e3c8de42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_526a59d5837945f51d1407abc170e49161779182f06acf1e040b934837e9e666->leave($__internal_526a59d5837945f51d1407abc170e49161779182f06acf1e040b934837e9e666_prof);

        
        $__internal_929260e6584ae6bcecee7f0db055a0d5190bf53edcb3476f58410cc2e3c8de42->leave($__internal_929260e6584ae6bcecee7f0db055a0d5190bf53edcb3476f58410cc2e3c8de42_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
