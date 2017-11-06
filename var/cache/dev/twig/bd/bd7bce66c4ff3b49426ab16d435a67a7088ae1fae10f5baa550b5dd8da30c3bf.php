<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d063aa8a2cb55541c9f28c714a3206e681af99d9d202ec9c5fb957abf248f7cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_64cd9819677159d674d65723bb115b2d70684cadecdadee6858a7e287c8d1fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64cd9819677159d674d65723bb115b2d70684cadecdadee6858a7e287c8d1fc0->enter($__internal_64cd9819677159d674d65723bb115b2d70684cadecdadee6858a7e287c8d1fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_7d126b6424acfa5c4d0e14854fc50fe2b5dfb1565c6238f6ef712fd1488c707f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d126b6424acfa5c4d0e14854fc50fe2b5dfb1565c6238f6ef712fd1488c707f->enter($__internal_7d126b6424acfa5c4d0e14854fc50fe2b5dfb1565c6238f6ef712fd1488c707f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64cd9819677159d674d65723bb115b2d70684cadecdadee6858a7e287c8d1fc0->leave($__internal_64cd9819677159d674d65723bb115b2d70684cadecdadee6858a7e287c8d1fc0_prof);

        
        $__internal_7d126b6424acfa5c4d0e14854fc50fe2b5dfb1565c6238f6ef712fd1488c707f->leave($__internal_7d126b6424acfa5c4d0e14854fc50fe2b5dfb1565c6238f6ef712fd1488c707f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0ea1b235599c6353e300f60ab912322193099c9c6ba9208bd81f95a6692ca5ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea1b235599c6353e300f60ab912322193099c9c6ba9208bd81f95a6692ca5ca->enter($__internal_0ea1b235599c6353e300f60ab912322193099c9c6ba9208bd81f95a6692ca5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_78df7a000001fb35eb968cd9d20e7be2d2514c98ad9b88bffeabe3c56a94e6ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78df7a000001fb35eb968cd9d20e7be2d2514c98ad9b88bffeabe3c56a94e6ac->enter($__internal_78df7a000001fb35eb968cd9d20e7be2d2514c98ad9b88bffeabe3c56a94e6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_78df7a000001fb35eb968cd9d20e7be2d2514c98ad9b88bffeabe3c56a94e6ac->leave($__internal_78df7a000001fb35eb968cd9d20e7be2d2514c98ad9b88bffeabe3c56a94e6ac_prof);

        
        $__internal_0ea1b235599c6353e300f60ab912322193099c9c6ba9208bd81f95a6692ca5ca->leave($__internal_0ea1b235599c6353e300f60ab912322193099c9c6ba9208bd81f95a6692ca5ca_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c68f2605c4d174e88d5e62f736cf1f17c42d9839cc9d67570acba219785896f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c68f2605c4d174e88d5e62f736cf1f17c42d9839cc9d67570acba219785896f0->enter($__internal_c68f2605c4d174e88d5e62f736cf1f17c42d9839cc9d67570acba219785896f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4c84dba9e2eb28adb90e42814579b2b52d6660257e174e450b7efe69e2131369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c84dba9e2eb28adb90e42814579b2b52d6660257e174e450b7efe69e2131369->enter($__internal_4c84dba9e2eb28adb90e42814579b2b52d6660257e174e450b7efe69e2131369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4c84dba9e2eb28adb90e42814579b2b52d6660257e174e450b7efe69e2131369->leave($__internal_4c84dba9e2eb28adb90e42814579b2b52d6660257e174e450b7efe69e2131369_prof);

        
        $__internal_c68f2605c4d174e88d5e62f736cf1f17c42d9839cc9d67570acba219785896f0->leave($__internal_c68f2605c4d174e88d5e62f736cf1f17c42d9839cc9d67570acba219785896f0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
