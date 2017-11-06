<?php

/* ::base.html.twig */
class __TwigTemplate_ef6a598e82a5011af52d5b328f0cd2f8830bea5f4c88506ad9e23671aec9697a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a9d1116866b648b86c6c2d7fd2f70a1cca94c8c82a8ffe6fb2b55463c57af87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a9d1116866b648b86c6c2d7fd2f70a1cca94c8c82a8ffe6fb2b55463c57af87->enter($__internal_7a9d1116866b648b86c6c2d7fd2f70a1cca94c8c82a8ffe6fb2b55463c57af87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d8d65ace0cfe6d34eb41302dba2f62e8da005829718d88b663801099b76a603a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8d65ace0cfe6d34eb41302dba2f62e8da005829718d88b663801099b76a603a->enter($__internal_d8d65ace0cfe6d34eb41302dba2f62e8da005829718d88b663801099b76a603a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7a9d1116866b648b86c6c2d7fd2f70a1cca94c8c82a8ffe6fb2b55463c57af87->leave($__internal_7a9d1116866b648b86c6c2d7fd2f70a1cca94c8c82a8ffe6fb2b55463c57af87_prof);

        
        $__internal_d8d65ace0cfe6d34eb41302dba2f62e8da005829718d88b663801099b76a603a->leave($__internal_d8d65ace0cfe6d34eb41302dba2f62e8da005829718d88b663801099b76a603a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ede39e59a9db0614a7ea30d644cd628ad93e08d96913f07a145d41f3928402eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ede39e59a9db0614a7ea30d644cd628ad93e08d96913f07a145d41f3928402eb->enter($__internal_ede39e59a9db0614a7ea30d644cd628ad93e08d96913f07a145d41f3928402eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_da99965b3442ba5816576d57c62fed4a0e17de67ce194653d040a1a6224c8abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da99965b3442ba5816576d57c62fed4a0e17de67ce194653d040a1a6224c8abf->enter($__internal_da99965b3442ba5816576d57c62fed4a0e17de67ce194653d040a1a6224c8abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_da99965b3442ba5816576d57c62fed4a0e17de67ce194653d040a1a6224c8abf->leave($__internal_da99965b3442ba5816576d57c62fed4a0e17de67ce194653d040a1a6224c8abf_prof);

        
        $__internal_ede39e59a9db0614a7ea30d644cd628ad93e08d96913f07a145d41f3928402eb->leave($__internal_ede39e59a9db0614a7ea30d644cd628ad93e08d96913f07a145d41f3928402eb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d2b533d42cbb6f09f5f5f2f7cad296f3ec7c19b70451b89dbb98bbb3274d210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d2b533d42cbb6f09f5f5f2f7cad296f3ec7c19b70451b89dbb98bbb3274d210->enter($__internal_9d2b533d42cbb6f09f5f5f2f7cad296f3ec7c19b70451b89dbb98bbb3274d210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ab74577732e792a55009d438f7e7649efed05bf19d8bfa506488430744b38925 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab74577732e792a55009d438f7e7649efed05bf19d8bfa506488430744b38925->enter($__internal_ab74577732e792a55009d438f7e7649efed05bf19d8bfa506488430744b38925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ab74577732e792a55009d438f7e7649efed05bf19d8bfa506488430744b38925->leave($__internal_ab74577732e792a55009d438f7e7649efed05bf19d8bfa506488430744b38925_prof);

        
        $__internal_9d2b533d42cbb6f09f5f5f2f7cad296f3ec7c19b70451b89dbb98bbb3274d210->leave($__internal_9d2b533d42cbb6f09f5f5f2f7cad296f3ec7c19b70451b89dbb98bbb3274d210_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_87db64d39d700603484d7ac6a96de170acc262f0af1d7555a504f989ed7a0173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87db64d39d700603484d7ac6a96de170acc262f0af1d7555a504f989ed7a0173->enter($__internal_87db64d39d700603484d7ac6a96de170acc262f0af1d7555a504f989ed7a0173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_81bd194df4fff612ab70fc0d9ec4a28baffc082e6bdc6a0883a7f782e7b47c2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81bd194df4fff612ab70fc0d9ec4a28baffc082e6bdc6a0883a7f782e7b47c2e->enter($__internal_81bd194df4fff612ab70fc0d9ec4a28baffc082e6bdc6a0883a7f782e7b47c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_81bd194df4fff612ab70fc0d9ec4a28baffc082e6bdc6a0883a7f782e7b47c2e->leave($__internal_81bd194df4fff612ab70fc0d9ec4a28baffc082e6bdc6a0883a7f782e7b47c2e_prof);

        
        $__internal_87db64d39d700603484d7ac6a96de170acc262f0af1d7555a504f989ed7a0173->leave($__internal_87db64d39d700603484d7ac6a96de170acc262f0af1d7555a504f989ed7a0173_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9cd18e5af5b43092e07dc846646074d261847d9690b5d76478b3c1478703e341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd18e5af5b43092e07dc846646074d261847d9690b5d76478b3c1478703e341->enter($__internal_9cd18e5af5b43092e07dc846646074d261847d9690b5d76478b3c1478703e341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7051acdc522fd291fe3ad7ba3efa17cfd1e3bccd3e2dde2f33b59696b04e26cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7051acdc522fd291fe3ad7ba3efa17cfd1e3bccd3e2dde2f33b59696b04e26cb->enter($__internal_7051acdc522fd291fe3ad7ba3efa17cfd1e3bccd3e2dde2f33b59696b04e26cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7051acdc522fd291fe3ad7ba3efa17cfd1e3bccd3e2dde2f33b59696b04e26cb->leave($__internal_7051acdc522fd291fe3ad7ba3efa17cfd1e3bccd3e2dde2f33b59696b04e26cb_prof);

        
        $__internal_9cd18e5af5b43092e07dc846646074d261847d9690b5d76478b3c1478703e341->leave($__internal_9cd18e5af5b43092e07dc846646074d261847d9690b5d76478b3c1478703e341_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/uriy/www/symfony-blog-IvAr/app/Resources/views/base.html.twig");
    }
}
