<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_877508cad7d200fcf78773b6eb6f491100e7815a9640bc823c2181189114503d extends Twig_Template
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
        $__internal_978f668130c24f4df7ed8db9181e164d11b851a2f9334e59fc2ad22c40d6b0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978f668130c24f4df7ed8db9181e164d11b851a2f9334e59fc2ad22c40d6b0ec->enter($__internal_978f668130c24f4df7ed8db9181e164d11b851a2f9334e59fc2ad22c40d6b0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_e958bb2e7a42c84e64835499ccc7e382d1deba52b46cdaedd6349e974514a84e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e958bb2e7a42c84e64835499ccc7e382d1deba52b46cdaedd6349e974514a84e->enter($__internal_e958bb2e7a42c84e64835499ccc7e382d1deba52b46cdaedd6349e974514a84e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_978f668130c24f4df7ed8db9181e164d11b851a2f9334e59fc2ad22c40d6b0ec->leave($__internal_978f668130c24f4df7ed8db9181e164d11b851a2f9334e59fc2ad22c40d6b0ec_prof);

        
        $__internal_e958bb2e7a42c84e64835499ccc7e382d1deba52b46cdaedd6349e974514a84e->leave($__internal_e958bb2e7a42c84e64835499ccc7e382d1deba52b46cdaedd6349e974514a84e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
