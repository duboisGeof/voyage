<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_5b8486cefd61ed9c84a144a68d47ec4b0f9c37ba69116e6cd1c25003fb4250ff extends Twig_Template
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
        $__internal_faf7a988912f42c3227ea166e65f455d45e9b494153968faf22adc122f196dd9 = $this->env->getExtension("native_profiler");
        $__internal_faf7a988912f42c3227ea166e65f455d45e9b494153968faf22adc122f196dd9->enter($__internal_faf7a988912f42c3227ea166e65f455d45e9b494153968faf22adc122f196dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_faf7a988912f42c3227ea166e65f455d45e9b494153968faf22adc122f196dd9->leave($__internal_faf7a988912f42c3227ea166e65f455d45e9b494153968faf22adc122f196dd9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
