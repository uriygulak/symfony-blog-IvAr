<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_5bb381d2016f4fb31ed76213b789caa25a3f81b0f29e559643b0dd7ce9f134c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_edccf4b5e07b6becb90d0f440e135ff9cc289b4b88bf468e96718224ce9323b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edccf4b5e07b6becb90d0f440e135ff9cc289b4b88bf468e96718224ce9323b4->enter($__internal_edccf4b5e07b6becb90d0f440e135ff9cc289b4b88bf468e96718224ce9323b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_daa6feeb262ae596540eaec7427579536c641c781ff5b8bef46471daca99ec37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa6feeb262ae596540eaec7427579536c641c781ff5b8bef46471daca99ec37->enter($__internal_daa6feeb262ae596540eaec7427579536c641c781ff5b8bef46471daca99ec37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_edccf4b5e07b6becb90d0f440e135ff9cc289b4b88bf468e96718224ce9323b4->leave($__internal_edccf4b5e07b6becb90d0f440e135ff9cc289b4b88bf468e96718224ce9323b4_prof);

        
        $__internal_daa6feeb262ae596540eaec7427579536c641c781ff5b8bef46471daca99ec37->leave($__internal_daa6feeb262ae596540eaec7427579536c641c781ff5b8bef46471daca99ec37_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f68bf98fa488c28fa520324f0e425d224a0ff7758ad338ce3d4ab008ce63c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f68bf98fa488c28fa520324f0e425d224a0ff7758ad338ce3d4ab008ce63c8a->enter($__internal_6f68bf98fa488c28fa520324f0e425d224a0ff7758ad338ce3d4ab008ce63c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d6961defa98e1c7bb603dfb8a23aab3f05fe9b07f21ef565a2fb5b7542c31d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6961defa98e1c7bb603dfb8a23aab3f05fe9b07f21ef565a2fb5b7542c31d1->enter($__internal_0d6961defa98e1c7bb603dfb8a23aab3f05fe9b07f21ef565a2fb5b7542c31d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0d6961defa98e1c7bb603dfb8a23aab3f05fe9b07f21ef565a2fb5b7542c31d1->leave($__internal_0d6961defa98e1c7bb603dfb8a23aab3f05fe9b07f21ef565a2fb5b7542c31d1_prof);

        
        $__internal_6f68bf98fa488c28fa520324f0e425d224a0ff7758ad338ce3d4ab008ce63c8a->leave($__internal_6f68bf98fa488c28fa520324f0e425d224a0ff7758ad338ce3d4ab008ce63c8a_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a63a6404ae98b3e4f8cf3a833c7173e7caa1214b3fbccd4ae7cb1d1cc81016ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a63a6404ae98b3e4f8cf3a833c7173e7caa1214b3fbccd4ae7cb1d1cc81016ed->enter($__internal_a63a6404ae98b3e4f8cf3a833c7173e7caa1214b3fbccd4ae7cb1d1cc81016ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8c454433a4c8f951a6216ca65151807cae5b0bb1061864a90e4da6518d40104a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c454433a4c8f951a6216ca65151807cae5b0bb1061864a90e4da6518d40104a->enter($__internal_8c454433a4c8f951a6216ca65151807cae5b0bb1061864a90e4da6518d40104a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8c454433a4c8f951a6216ca65151807cae5b0bb1061864a90e4da6518d40104a->leave($__internal_8c454433a4c8f951a6216ca65151807cae5b0bb1061864a90e4da6518d40104a_prof);

        
        $__internal_a63a6404ae98b3e4f8cf3a833c7173e7caa1214b3fbccd4ae7cb1d1cc81016ed->leave($__internal_a63a6404ae98b3e4f8cf3a833c7173e7caa1214b3fbccd4ae7cb1d1cc81016ed_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3aa9727e1d9e88c4307f3a01d7688835d76fd154c7eb3fc9bed5c65441f76131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa9727e1d9e88c4307f3a01d7688835d76fd154c7eb3fc9bed5c65441f76131->enter($__internal_3aa9727e1d9e88c4307f3a01d7688835d76fd154c7eb3fc9bed5c65441f76131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3715df64719868b60fdbf9eb6516c63fec769936ff3a0903e363aa8ef362633a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3715df64719868b60fdbf9eb6516c63fec769936ff3a0903e363aa8ef362633a->enter($__internal_3715df64719868b60fdbf9eb6516c63fec769936ff3a0903e363aa8ef362633a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3715df64719868b60fdbf9eb6516c63fec769936ff3a0903e363aa8ef362633a->leave($__internal_3715df64719868b60fdbf9eb6516c63fec769936ff3a0903e363aa8ef362633a_prof);

        
        $__internal_3aa9727e1d9e88c4307f3a01d7688835d76fd154c7eb3fc9bed5c65441f76131->leave($__internal_3aa9727e1d9e88c4307f3a01d7688835d76fd154c7eb3fc9bed5c65441f76131_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
