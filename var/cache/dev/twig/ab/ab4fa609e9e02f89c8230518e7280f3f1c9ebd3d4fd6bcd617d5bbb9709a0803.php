<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_48ed8dbae6004846bcb77d5be27f87c07c0160ee8880ab968e4a6ecfdb4809ef extends Twig_Template
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
        $__internal_c30d303cdf828a52df8dfad16f1c1165cdf81d5d3f330246d27f89ea09b3a72a = $this->env->getExtension("native_profiler");
        $__internal_c30d303cdf828a52df8dfad16f1c1165cdf81d5d3f330246d27f89ea09b3a72a->enter($__internal_c30d303cdf828a52df8dfad16f1c1165cdf81d5d3f330246d27f89ea09b3a72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c30d303cdf828a52df8dfad16f1c1165cdf81d5d3f330246d27f89ea09b3a72a->leave($__internal_c30d303cdf828a52df8dfad16f1c1165cdf81d5d3f330246d27f89ea09b3a72a_prof);

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
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
