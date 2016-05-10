<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_9e05e53e7b87dd710678753c6a8fb2039fb12335a27fe17ceb7c9a7a83803d63 extends Twig_Template
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
        $__internal_129b16fe0f952f400898f372de73a59ae46d28db5cb730530aea0f6521a93062 = $this->env->getExtension("native_profiler");
        $__internal_129b16fe0f952f400898f372de73a59ae46d28db5cb730530aea0f6521a93062->enter($__internal_129b16fe0f952f400898f372de73a59ae46d28db5cb730530aea0f6521a93062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_129b16fe0f952f400898f372de73a59ae46d28db5cb730530aea0f6521a93062->leave($__internal_129b16fe0f952f400898f372de73a59ae46d28db5cb730530aea0f6521a93062_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
