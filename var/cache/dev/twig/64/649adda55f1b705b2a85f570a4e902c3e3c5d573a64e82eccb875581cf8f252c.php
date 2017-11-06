<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_6c775e4c4ccdb3af11f3aa2031a382d5c0ed87f26f326c1f292fdbc62fcd4060 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_6c8136f73a0ff3bd03e8064b6f1646bf91f76edf30b7ed5a1003dab3645994b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c8136f73a0ff3bd03e8064b6f1646bf91f76edf30b7ed5a1003dab3645994b1->enter($__internal_6c8136f73a0ff3bd03e8064b6f1646bf91f76edf30b7ed5a1003dab3645994b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_72b5bf5973b4b7ae18c3e22009c052191d5cc9c1021e29b0229385dd77e4b439 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b5bf5973b4b7ae18c3e22009c052191d5cc9c1021e29b0229385dd77e4b439->enter($__internal_72b5bf5973b4b7ae18c3e22009c052191d5cc9c1021e29b0229385dd77e4b439_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c8136f73a0ff3bd03e8064b6f1646bf91f76edf30b7ed5a1003dab3645994b1->leave($__internal_6c8136f73a0ff3bd03e8064b6f1646bf91f76edf30b7ed5a1003dab3645994b1_prof);

        
        $__internal_72b5bf5973b4b7ae18c3e22009c052191d5cc9c1021e29b0229385dd77e4b439->leave($__internal_72b5bf5973b4b7ae18c3e22009c052191d5cc9c1021e29b0229385dd77e4b439_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_59e5371c983f9148e092e7edd85bc35d4e19948795e2690418bdd1e58ce26242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59e5371c983f9148e092e7edd85bc35d4e19948795e2690418bdd1e58ce26242->enter($__internal_59e5371c983f9148e092e7edd85bc35d4e19948795e2690418bdd1e58ce26242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d4bf6c8cec6649a649b7884619baec8ccbb79e79f22f98dcb454cf9f0062c5aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bf6c8cec6649a649b7884619baec8ccbb79e79f22f98dcb454cf9f0062c5aa->enter($__internal_d4bf6c8cec6649a649b7884619baec8ccbb79e79f22f98dcb454cf9f0062c5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d4bf6c8cec6649a649b7884619baec8ccbb79e79f22f98dcb454cf9f0062c5aa->leave($__internal_d4bf6c8cec6649a649b7884619baec8ccbb79e79f22f98dcb454cf9f0062c5aa_prof);

        
        $__internal_59e5371c983f9148e092e7edd85bc35d4e19948795e2690418bdd1e58ce26242->leave($__internal_59e5371c983f9148e092e7edd85bc35d4e19948795e2690418bdd1e58ce26242_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7947ca443b255d2f384acbc46a8f40053f428ebf393e04f1b8caab81ca3f06bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7947ca443b255d2f384acbc46a8f40053f428ebf393e04f1b8caab81ca3f06bc->enter($__internal_7947ca443b255d2f384acbc46a8f40053f428ebf393e04f1b8caab81ca3f06bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_35c3efccd73ecdaf040953edf8f50c5a308ca01bf13e48afe4cea1f11d13b217 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35c3efccd73ecdaf040953edf8f50c5a308ca01bf13e48afe4cea1f11d13b217->enter($__internal_35c3efccd73ecdaf040953edf8f50c5a308ca01bf13e48afe4cea1f11d13b217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_35c3efccd73ecdaf040953edf8f50c5a308ca01bf13e48afe4cea1f11d13b217->leave($__internal_35c3efccd73ecdaf040953edf8f50c5a308ca01bf13e48afe4cea1f11d13b217_prof);

        
        $__internal_7947ca443b255d2f384acbc46a8f40053f428ebf393e04f1b8caab81ca3f06bc->leave($__internal_7947ca443b255d2f384acbc46a8f40053f428ebf393e04f1b8caab81ca3f06bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_581efc8d35c1b98d7da72b9b01b11bc1ec122fc977a6b2fb2808ff0cbf09d100 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_581efc8d35c1b98d7da72b9b01b11bc1ec122fc977a6b2fb2808ff0cbf09d100->enter($__internal_581efc8d35c1b98d7da72b9b01b11bc1ec122fc977a6b2fb2808ff0cbf09d100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_28a2705e0037af4329991824f489673d937b0a0f2f2c8ddedd9d482dc3b3b7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a2705e0037af4329991824f489673d937b0a0f2f2c8ddedd9d482dc3b3b7db->enter($__internal_28a2705e0037af4329991824f489673d937b0a0f2f2c8ddedd9d482dc3b3b7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28a2705e0037af4329991824f489673d937b0a0f2f2c8ddedd9d482dc3b3b7db->leave($__internal_28a2705e0037af4329991824f489673d937b0a0f2f2c8ddedd9d482dc3b3b7db_prof);

        
        $__internal_581efc8d35c1b98d7da72b9b01b11bc1ec122fc977a6b2fb2808ff0cbf09d100->leave($__internal_581efc8d35c1b98d7da72b9b01b11bc1ec122fc977a6b2fb2808ff0cbf09d100_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
