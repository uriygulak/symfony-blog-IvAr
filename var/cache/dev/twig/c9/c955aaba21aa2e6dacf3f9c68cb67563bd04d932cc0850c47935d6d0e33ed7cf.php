<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_1a7fd2a3da7b53b8fe318ca359a31e9bfa9d928236123d7d38e625027f7dc1c4 extends Twig_Template
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
        $__internal_fe9656986ebefcc85da038faade6217fe96902a5322575dc869c81f61790c013 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe9656986ebefcc85da038faade6217fe96902a5322575dc869c81f61790c013->enter($__internal_fe9656986ebefcc85da038faade6217fe96902a5322575dc869c81f61790c013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_9a3a95f388607c365bdd1a6c4184b1c5125700d0ee7e1948a90ce9f4f77e524a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a3a95f388607c365bdd1a6c4184b1c5125700d0ee7e1948a90ce9f4f77e524a->enter($__internal_9a3a95f388607c365bdd1a6c4184b1c5125700d0ee7e1948a90ce9f4f77e524a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_fe9656986ebefcc85da038faade6217fe96902a5322575dc869c81f61790c013->leave($__internal_fe9656986ebefcc85da038faade6217fe96902a5322575dc869c81f61790c013_prof);

        
        $__internal_9a3a95f388607c365bdd1a6c4184b1c5125700d0ee7e1948a90ce9f4f77e524a->leave($__internal_9a3a95f388607c365bdd1a6c4184b1c5125700d0ee7e1948a90ce9f4f77e524a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
