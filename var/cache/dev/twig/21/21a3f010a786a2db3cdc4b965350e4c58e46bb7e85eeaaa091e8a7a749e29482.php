<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_f4b9826d8531c0d53aa596655d08ab2e86e5436aa6bf7e0958e632203dd7971b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae888512ddd76f4356d523c85f2354a637e26c357229bd35efba83e8c9dc9f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae888512ddd76f4356d523c85f2354a637e26c357229bd35efba83e8c9dc9f31->enter($__internal_ae888512ddd76f4356d523c85f2354a637e26c357229bd35efba83e8c9dc9f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7a44ab0348e0186b0c626f528a8c8cbb637e0d22ee83e1f86a3ff3e72d08a24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a44ab0348e0186b0c626f528a8c8cbb637e0d22ee83e1f86a3ff3e72d08a24f->enter($__internal_7a44ab0348e0186b0c626f528a8c8cbb637e0d22ee83e1f86a3ff3e72d08a24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae888512ddd76f4356d523c85f2354a637e26c357229bd35efba83e8c9dc9f31->leave($__internal_ae888512ddd76f4356d523c85f2354a637e26c357229bd35efba83e8c9dc9f31_prof);

        
        $__internal_7a44ab0348e0186b0c626f528a8c8cbb637e0d22ee83e1f86a3ff3e72d08a24f->leave($__internal_7a44ab0348e0186b0c626f528a8c8cbb637e0d22ee83e1f86a3ff3e72d08a24f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24a9507851b41841e1798a6a98e9b3b10ce8b544be5e4ddf165777ada895b84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a9507851b41841e1798a6a98e9b3b10ce8b544be5e4ddf165777ada895b84c->enter($__internal_24a9507851b41841e1798a6a98e9b3b10ce8b544be5e4ddf165777ada895b84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7af3715b4c2fa1757a66786fac50c757e8b07f766d6f147f6a6af0053a5eb6a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7af3715b4c2fa1757a66786fac50c757e8b07f766d6f147f6a6af0053a5eb6a9->enter($__internal_7af3715b4c2fa1757a66786fac50c757e8b07f766d6f147f6a6af0053a5eb6a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7af3715b4c2fa1757a66786fac50c757e8b07f766d6f147f6a6af0053a5eb6a9->leave($__internal_7af3715b4c2fa1757a66786fac50c757e8b07f766d6f147f6a6af0053a5eb6a9_prof);

        
        $__internal_24a9507851b41841e1798a6a98e9b3b10ce8b544be5e4ddf165777ada895b84c->leave($__internal_24a9507851b41841e1798a6a98e9b3b10ce8b544be5e4ddf165777ada895b84c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d48ccdd74ad289c9214cd5059f4185d281485523697349f14420541faac4cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d48ccdd74ad289c9214cd5059f4185d281485523697349f14420541faac4cb4->enter($__internal_6d48ccdd74ad289c9214cd5059f4185d281485523697349f14420541faac4cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3ca40a4c44c7206f6128d12f80eada70c4ee8b3eb0bc90d7028842844e4d9a3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca40a4c44c7206f6128d12f80eada70c4ee8b3eb0bc90d7028842844e4d9a3b->enter($__internal_3ca40a4c44c7206f6128d12f80eada70c4ee8b3eb0bc90d7028842844e4d9a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_3ca40a4c44c7206f6128d12f80eada70c4ee8b3eb0bc90d7028842844e4d9a3b->leave($__internal_3ca40a4c44c7206f6128d12f80eada70c4ee8b3eb0bc90d7028842844e4d9a3b_prof);

        
        $__internal_6d48ccdd74ad289c9214cd5059f4185d281485523697349f14420541faac4cb4->leave($__internal_6d48ccdd74ad289c9214cd5059f4185d281485523697349f14420541faac4cb4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
