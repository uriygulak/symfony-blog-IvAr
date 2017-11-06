<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f67d2fc2f7a2285ee9e986e046017b1d8e54b71d0756e0ffdddbf5be77ea14a4 extends Twig_Template
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
        $__internal_d7b5a6cf74a817f01638e6f8d9a97b3b0f2aa1c96ff4fb96ed5d2cec682105da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7b5a6cf74a817f01638e6f8d9a97b3b0f2aa1c96ff4fb96ed5d2cec682105da->enter($__internal_d7b5a6cf74a817f01638e6f8d9a97b3b0f2aa1c96ff4fb96ed5d2cec682105da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_9bd46c8d50a537c2c0b798c181d39e925c3b5f359cbec1dd2d12a93e90407e06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd46c8d50a537c2c0b798c181d39e925c3b5f359cbec1dd2d12a93e90407e06->enter($__internal_9bd46c8d50a537c2c0b798c181d39e925c3b5f359cbec1dd2d12a93e90407e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d7b5a6cf74a817f01638e6f8d9a97b3b0f2aa1c96ff4fb96ed5d2cec682105da->leave($__internal_d7b5a6cf74a817f01638e6f8d9a97b3b0f2aa1c96ff4fb96ed5d2cec682105da_prof);

        
        $__internal_9bd46c8d50a537c2c0b798c181d39e925c3b5f359cbec1dd2d12a93e90407e06->leave($__internal_9bd46c8d50a537c2c0b798c181d39e925c3b5f359cbec1dd2d12a93e90407e06_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
