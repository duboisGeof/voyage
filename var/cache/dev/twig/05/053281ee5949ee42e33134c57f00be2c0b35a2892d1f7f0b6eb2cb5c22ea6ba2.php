<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e964f89b821e1d72077c8faaef9ca49be11b8148fe1a67e240eadb0921335568 extends Twig_Template
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
        $__internal_ebc4ebc01abf994844746b3bfe163fa6c4586f90fff3683e49e97d90d8231448 = $this->env->getExtension("native_profiler");
        $__internal_ebc4ebc01abf994844746b3bfe163fa6c4586f90fff3683e49e97d90d8231448->enter($__internal_ebc4ebc01abf994844746b3bfe163fa6c4586f90fff3683e49e97d90d8231448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ebc4ebc01abf994844746b3bfe163fa6c4586f90fff3683e49e97d90d8231448->leave($__internal_ebc4ebc01abf994844746b3bfe163fa6c4586f90fff3683e49e97d90d8231448_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
