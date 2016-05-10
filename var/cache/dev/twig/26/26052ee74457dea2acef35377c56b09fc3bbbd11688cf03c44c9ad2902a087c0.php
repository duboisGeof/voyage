<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f667153aad361dccdab899922a594d6a6ab1fa9e72d72c0a59ac8fb8627e7220 extends Twig_Template
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
        $__internal_159e9455f604f98c21e192d9e8157fd69fd6472f9814b5d73043c137387e72c5 = $this->env->getExtension("native_profiler");
        $__internal_159e9455f604f98c21e192d9e8157fd69fd6472f9814b5d73043c137387e72c5->enter($__internal_159e9455f604f98c21e192d9e8157fd69fd6472f9814b5d73043c137387e72c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_159e9455f604f98c21e192d9e8157fd69fd6472f9814b5d73043c137387e72c5->leave($__internal_159e9455f604f98c21e192d9e8157fd69fd6472f9814b5d73043c137387e72c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
