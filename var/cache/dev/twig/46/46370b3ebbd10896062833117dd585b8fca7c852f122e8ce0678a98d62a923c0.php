<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_8b80adb9338105607039f313a2856d066d8cef22f533aa2350d29cd16cb1d358 extends Twig_Template
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
        $__internal_9b3b33b4cbca9e2d43f012fa9fb6ab8c4e1107cdfde30f765b3fde007c634a1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b3b33b4cbca9e2d43f012fa9fb6ab8c4e1107cdfde30f765b3fde007c634a1f->enter($__internal_9b3b33b4cbca9e2d43f012fa9fb6ab8c4e1107cdfde30f765b3fde007c634a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_2f795b3cb27a44c092aa833171b400d8dcb5d7fa9cc5b9a8aa049931071d4652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f795b3cb27a44c092aa833171b400d8dcb5d7fa9cc5b9a8aa049931071d4652->enter($__internal_2f795b3cb27a44c092aa833171b400d8dcb5d7fa9cc5b9a8aa049931071d4652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9b3b33b4cbca9e2d43f012fa9fb6ab8c4e1107cdfde30f765b3fde007c634a1f->leave($__internal_9b3b33b4cbca9e2d43f012fa9fb6ab8c4e1107cdfde30f765b3fde007c634a1f_prof);

        
        $__internal_2f795b3cb27a44c092aa833171b400d8dcb5d7fa9cc5b9a8aa049931071d4652->leave($__internal_2f795b3cb27a44c092aa833171b400d8dcb5d7fa9cc5b9a8aa049931071d4652_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/uriy/www/symfony-blog-IvAr/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
