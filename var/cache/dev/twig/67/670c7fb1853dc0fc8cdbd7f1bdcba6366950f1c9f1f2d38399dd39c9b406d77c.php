<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_23606e7adefaf2780c0f32717e60bbcd1433c51e1baa9eac40fcc965c28584f5 extends Twig_Template
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
        $__internal_294d382e06e165bb1027249ea3842e91d735a702ca3f179eafb6aa62c1e65c14 = $this->env->getExtension("native_profiler");
        $__internal_294d382e06e165bb1027249ea3842e91d735a702ca3f179eafb6aa62c1e65c14->enter($__internal_294d382e06e165bb1027249ea3842e91d735a702ca3f179eafb6aa62c1e65c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_294d382e06e165bb1027249ea3842e91d735a702ca3f179eafb6aa62c1e65c14->leave($__internal_294d382e06e165bb1027249ea3842e91d735a702ca3f179eafb6aa62c1e65c14_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
