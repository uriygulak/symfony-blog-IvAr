<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c1666146a2f6eb159bbdc4ca849be12207a39249dc7ce8fa2f0b9315aa3c6506 extends Twig_Template
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
        $__internal_16212bccef2a3f2f6c77e4c20b14db352eb0302d888426f8f72b04811473e0e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16212bccef2a3f2f6c77e4c20b14db352eb0302d888426f8f72b04811473e0e4->enter($__internal_16212bccef2a3f2f6c77e4c20b14db352eb0302d888426f8f72b04811473e0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_f88d7ede194625012e728ef38b9310de9f5ebbfa65932b9e4cd9e2354f2d9e05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88d7ede194625012e728ef38b9310de9f5ebbfa65932b9e4cd9e2354f2d9e05->enter($__internal_f88d7ede194625012e728ef38b9310de9f5ebbfa65932b9e4cd9e2354f2d9e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_16212bccef2a3f2f6c77e4c20b14db352eb0302d888426f8f72b04811473e0e4->leave($__internal_16212bccef2a3f2f6c77e4c20b14db352eb0302d888426f8f72b04811473e0e4_prof);

        
        $__internal_f88d7ede194625012e728ef38b9310de9f5ebbfa65932b9e4cd9e2354f2d9e05->leave($__internal_f88d7ede194625012e728ef38b9310de9f5ebbfa65932b9e4cd9e2354f2d9e05_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
