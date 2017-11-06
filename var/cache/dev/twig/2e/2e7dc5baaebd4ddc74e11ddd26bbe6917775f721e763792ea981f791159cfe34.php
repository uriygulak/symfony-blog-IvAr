<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_25f33fd65cdea225244a4fa5fe9ad30cf4bfdf4e2f3452fb019efa2435d6a7cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfa854cc6b93a896e27c8abd7d2ae18de75a8c36fe2f9ce2d3f1b6bd853dd3c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfa854cc6b93a896e27c8abd7d2ae18de75a8c36fe2f9ce2d3f1b6bd853dd3c2->enter($__internal_cfa854cc6b93a896e27c8abd7d2ae18de75a8c36fe2f9ce2d3f1b6bd853dd3c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_91050807ef2d325aebc38dc8aaf609f3779fd5cbdf0bed426471cf2aef78bae9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91050807ef2d325aebc38dc8aaf609f3779fd5cbdf0bed426471cf2aef78bae9->enter($__internal_91050807ef2d325aebc38dc8aaf609f3779fd5cbdf0bed426471cf2aef78bae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cfa854cc6b93a896e27c8abd7d2ae18de75a8c36fe2f9ce2d3f1b6bd853dd3c2->leave($__internal_cfa854cc6b93a896e27c8abd7d2ae18de75a8c36fe2f9ce2d3f1b6bd853dd3c2_prof);

        
        $__internal_91050807ef2d325aebc38dc8aaf609f3779fd5cbdf0bed426471cf2aef78bae9->leave($__internal_91050807ef2d325aebc38dc8aaf609f3779fd5cbdf0bed426471cf2aef78bae9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_16b0decd6c7470180bd1e79bda8779cf23bbaf73c9afac47d8d93752051f1eb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b0decd6c7470180bd1e79bda8779cf23bbaf73c9afac47d8d93752051f1eb8->enter($__internal_16b0decd6c7470180bd1e79bda8779cf23bbaf73c9afac47d8d93752051f1eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac76513270bf30db55389135789d710e6f6c64ecead32726c47336e0f20c3f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac76513270bf30db55389135789d710e6f6c64ecead32726c47336e0f20c3f15->enter($__internal_ac76513270bf30db55389135789d710e6f6c64ecead32726c47336e0f20c3f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ac76513270bf30db55389135789d710e6f6c64ecead32726c47336e0f20c3f15->leave($__internal_ac76513270bf30db55389135789d710e6f6c64ecead32726c47336e0f20c3f15_prof);

        
        $__internal_16b0decd6c7470180bd1e79bda8779cf23bbaf73c9afac47d8d93752051f1eb8->leave($__internal_16b0decd6c7470180bd1e79bda8779cf23bbaf73c9afac47d8d93752051f1eb8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
