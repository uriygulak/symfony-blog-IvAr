<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6fa66abe3f0702243da1b45c26971a0c6acaceb2457b5d3b3e084c9472948408 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b777b161af5014fc16b48e9479b0e843e78582c38a22f2cd96609a8ebf78032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b777b161af5014fc16b48e9479b0e843e78582c38a22f2cd96609a8ebf78032->enter($__internal_1b777b161af5014fc16b48e9479b0e843e78582c38a22f2cd96609a8ebf78032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_5d3682ce0d55f2a239776723f9d1bea43b1fa78898bbb90eec3c414dfaf539ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3682ce0d55f2a239776723f9d1bea43b1fa78898bbb90eec3c414dfaf539ce->enter($__internal_5d3682ce0d55f2a239776723f9d1bea43b1fa78898bbb90eec3c414dfaf539ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b777b161af5014fc16b48e9479b0e843e78582c38a22f2cd96609a8ebf78032->leave($__internal_1b777b161af5014fc16b48e9479b0e843e78582c38a22f2cd96609a8ebf78032_prof);

        
        $__internal_5d3682ce0d55f2a239776723f9d1bea43b1fa78898bbb90eec3c414dfaf539ce->leave($__internal_5d3682ce0d55f2a239776723f9d1bea43b1fa78898bbb90eec3c414dfaf539ce_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b654826820f8ec693286594abaa2203972823bbff1660e847f9e3977e19c2482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b654826820f8ec693286594abaa2203972823bbff1660e847f9e3977e19c2482->enter($__internal_b654826820f8ec693286594abaa2203972823bbff1660e847f9e3977e19c2482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8811d7f2bd021a91d8d2601da7dd114f78042880482fbda439304a0cfc65724b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8811d7f2bd021a91d8d2601da7dd114f78042880482fbda439304a0cfc65724b->enter($__internal_8811d7f2bd021a91d8d2601da7dd114f78042880482fbda439304a0cfc65724b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8811d7f2bd021a91d8d2601da7dd114f78042880482fbda439304a0cfc65724b->leave($__internal_8811d7f2bd021a91d8d2601da7dd114f78042880482fbda439304a0cfc65724b_prof);

        
        $__internal_b654826820f8ec693286594abaa2203972823bbff1660e847f9e3977e19c2482->leave($__internal_b654826820f8ec693286594abaa2203972823bbff1660e847f9e3977e19c2482_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_29cda8e99e11f972f38738122cded016a5b015139cec233c3eedd073a3d200d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29cda8e99e11f972f38738122cded016a5b015139cec233c3eedd073a3d200d9->enter($__internal_29cda8e99e11f972f38738122cded016a5b015139cec233c3eedd073a3d200d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b15dd6f03a183c70570327d0d96762687355ebe7193a2ee68be0403a86e3cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b15dd6f03a183c70570327d0d96762687355ebe7193a2ee68be0403a86e3cf8->enter($__internal_2b15dd6f03a183c70570327d0d96762687355ebe7193a2ee68be0403a86e3cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2b15dd6f03a183c70570327d0d96762687355ebe7193a2ee68be0403a86e3cf8->leave($__internal_2b15dd6f03a183c70570327d0d96762687355ebe7193a2ee68be0403a86e3cf8_prof);

        
        $__internal_29cda8e99e11f972f38738122cded016a5b015139cec233c3eedd073a3d200d9->leave($__internal_29cda8e99e11f972f38738122cded016a5b015139cec233c3eedd073a3d200d9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
