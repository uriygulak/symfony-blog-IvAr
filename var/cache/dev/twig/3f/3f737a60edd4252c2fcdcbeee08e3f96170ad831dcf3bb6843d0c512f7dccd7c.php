<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_43a8ba4919bebbb89148111448a42654498087b1a3f19e4b9e32078af410d70c extends Twig_Template
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
        $__internal_9186f2a298f65e2f2cb2abedf71baa2a0ce00d91463949ed89e3799bcf1daee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9186f2a298f65e2f2cb2abedf71baa2a0ce00d91463949ed89e3799bcf1daee0->enter($__internal_9186f2a298f65e2f2cb2abedf71baa2a0ce00d91463949ed89e3799bcf1daee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b58c178f7351620dfce6b605f348517cf1547d741a5cdf64030606e2f3fb2bbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58c178f7351620dfce6b605f348517cf1547d741a5cdf64030606e2f3fb2bbd->enter($__internal_b58c178f7351620dfce6b605f348517cf1547d741a5cdf64030606e2f3fb2bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_9186f2a298f65e2f2cb2abedf71baa2a0ce00d91463949ed89e3799bcf1daee0->leave($__internal_9186f2a298f65e2f2cb2abedf71baa2a0ce00d91463949ed89e3799bcf1daee0_prof);

        
        $__internal_b58c178f7351620dfce6b605f348517cf1547d741a5cdf64030606e2f3fb2bbd->leave($__internal_b58c178f7351620dfce6b605f348517cf1547d741a5cdf64030606e2f3fb2bbd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
