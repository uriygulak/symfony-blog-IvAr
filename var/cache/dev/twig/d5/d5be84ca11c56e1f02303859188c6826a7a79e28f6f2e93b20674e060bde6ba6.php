<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_4e3271903e33ece75271e854a17246dc43a169ac90a69a863843468c5ada6dd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d92f8cc1be15fdc5d2d28be26d421070e48b74349aa5db52dddcf7ab71868999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92f8cc1be15fdc5d2d28be26d421070e48b74349aa5db52dddcf7ab71868999->enter($__internal_d92f8cc1be15fdc5d2d28be26d421070e48b74349aa5db52dddcf7ab71868999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_22b0e1b1f980dee524dd2a349ac92c88b25e4036dacf146ee1d5b8985b6c36d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b0e1b1f980dee524dd2a349ac92c88b25e4036dacf146ee1d5b8985b6c36d6->enter($__internal_22b0e1b1f980dee524dd2a349ac92c88b25e4036dacf146ee1d5b8985b6c36d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92f8cc1be15fdc5d2d28be26d421070e48b74349aa5db52dddcf7ab71868999->leave($__internal_d92f8cc1be15fdc5d2d28be26d421070e48b74349aa5db52dddcf7ab71868999_prof);

        
        $__internal_22b0e1b1f980dee524dd2a349ac92c88b25e4036dacf146ee1d5b8985b6c36d6->leave($__internal_22b0e1b1f980dee524dd2a349ac92c88b25e4036dacf146ee1d5b8985b6c36d6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_abfcc140ab3ee6cfbf7e1586717ff47d79a1c821e9804bfd8c94aa1a5c73731c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abfcc140ab3ee6cfbf7e1586717ff47d79a1c821e9804bfd8c94aa1a5c73731c->enter($__internal_abfcc140ab3ee6cfbf7e1586717ff47d79a1c821e9804bfd8c94aa1a5c73731c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_33f23cc0a4ad3095b08efa6a626e85b20e1fbf401273290aa6e6ae9f61dc8816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f23cc0a4ad3095b08efa6a626e85b20e1fbf401273290aa6e6ae9f61dc8816->enter($__internal_33f23cc0a4ad3095b08efa6a626e85b20e1fbf401273290aa6e6ae9f61dc8816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_33f23cc0a4ad3095b08efa6a626e85b20e1fbf401273290aa6e6ae9f61dc8816->leave($__internal_33f23cc0a4ad3095b08efa6a626e85b20e1fbf401273290aa6e6ae9f61dc8816_prof);

        
        $__internal_abfcc140ab3ee6cfbf7e1586717ff47d79a1c821e9804bfd8c94aa1a5c73731c->leave($__internal_abfcc140ab3ee6cfbf7e1586717ff47d79a1c821e9804bfd8c94aa1a5c73731c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee1889527efb76023d0be7ae246a672b94df53bbe25b675ff6c9afc12ac6b9a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1889527efb76023d0be7ae246a672b94df53bbe25b675ff6c9afc12ac6b9a7->enter($__internal_ee1889527efb76023d0be7ae246a672b94df53bbe25b675ff6c9afc12ac6b9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4352911654f426cc01cf4e4e4c80435235539a4662a27c9e6d1fd54911b19d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4352911654f426cc01cf4e4e4c80435235539a4662a27c9e6d1fd54911b19d2b->enter($__internal_4352911654f426cc01cf4e4e4c80435235539a4662a27c9e6d1fd54911b19d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4352911654f426cc01cf4e4e4c80435235539a4662a27c9e6d1fd54911b19d2b->leave($__internal_4352911654f426cc01cf4e4e4c80435235539a4662a27c9e6d1fd54911b19d2b_prof);

        
        $__internal_ee1889527efb76023d0be7ae246a672b94df53bbe25b675ff6c9afc12ac6b9a7->leave($__internal_ee1889527efb76023d0be7ae246a672b94df53bbe25b675ff6c9afc12ac6b9a7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9fe1a53ffe0a06e0c10386883e0b5a2d7442b4855bbd2519d03c1e654be2475a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe1a53ffe0a06e0c10386883e0b5a2d7442b4855bbd2519d03c1e654be2475a->enter($__internal_9fe1a53ffe0a06e0c10386883e0b5a2d7442b4855bbd2519d03c1e654be2475a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1297d84bd76c7d07ad478f06aeb729ddc3aa9392e27c22d0dc7a874514c84f85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1297d84bd76c7d07ad478f06aeb729ddc3aa9392e27c22d0dc7a874514c84f85->enter($__internal_1297d84bd76c7d07ad478f06aeb729ddc3aa9392e27c22d0dc7a874514c84f85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1297d84bd76c7d07ad478f06aeb729ddc3aa9392e27c22d0dc7a874514c84f85->leave($__internal_1297d84bd76c7d07ad478f06aeb729ddc3aa9392e27c22d0dc7a874514c84f85_prof);

        
        $__internal_9fe1a53ffe0a06e0c10386883e0b5a2d7442b4855bbd2519d03c1e654be2475a->leave($__internal_9fe1a53ffe0a06e0c10386883e0b5a2d7442b4855bbd2519d03c1e654be2475a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
