<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_106381100ca096094ec19a76bf49b8a44bc896a72f685beb71be075e7b303da6 extends Twig_Template
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
        $__internal_e28a69c643c8d0f8de0d732cc6504b484b98b79d5ee85c4fcf735be0f6a18b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e28a69c643c8d0f8de0d732cc6504b484b98b79d5ee85c4fcf735be0f6a18b4b->enter($__internal_e28a69c643c8d0f8de0d732cc6504b484b98b79d5ee85c4fcf735be0f6a18b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_bacf3a3d774f4a7daac69c566b59607fce4e34b613167091d585aa9088bd97e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bacf3a3d774f4a7daac69c566b59607fce4e34b613167091d585aa9088bd97e8->enter($__internal_bacf3a3d774f4a7daac69c566b59607fce4e34b613167091d585aa9088bd97e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e28a69c643c8d0f8de0d732cc6504b484b98b79d5ee85c4fcf735be0f6a18b4b->leave($__internal_e28a69c643c8d0f8de0d732cc6504b484b98b79d5ee85c4fcf735be0f6a18b4b_prof);

        
        $__internal_bacf3a3d774f4a7daac69c566b59607fce4e34b613167091d585aa9088bd97e8->leave($__internal_bacf3a3d774f4a7daac69c566b59607fce4e34b613167091d585aa9088bd97e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
