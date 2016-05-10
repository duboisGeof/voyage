<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_d3938230f2edf1322c29bf110811db8d02c52d9ca7868d72efd06739b447a08b extends Twig_Template
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
        $__internal_091b544ed01fb91a61b64939ea658a6853203be85e4a62a6dd8d243f8e78f979 = $this->env->getExtension("native_profiler");
        $__internal_091b544ed01fb91a61b64939ea658a6853203be85e4a62a6dd8d243f8e78f979->enter($__internal_091b544ed01fb91a61b64939ea658a6853203be85e4a62a6dd8d243f8e78f979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_091b544ed01fb91a61b64939ea658a6853203be85e4a62a6dd8d243f8e78f979->leave($__internal_091b544ed01fb91a61b64939ea658a6853203be85e4a62a6dd8d243f8e78f979_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
