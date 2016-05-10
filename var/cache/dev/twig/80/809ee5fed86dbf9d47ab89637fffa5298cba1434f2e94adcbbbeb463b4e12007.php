<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_20952b215ab5de39b19728ba9d0cca07effc3e992ef30d3c69b65bdaf26f7590 extends Twig_Template
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
        $__internal_4d3ecfa3925de6e1d5e10dddfdf34e0dfa5e518dcd82a8d4c158ca9922553af5 = $this->env->getExtension("native_profiler");
        $__internal_4d3ecfa3925de6e1d5e10dddfdf34e0dfa5e518dcd82a8d4c158ca9922553af5->enter($__internal_4d3ecfa3925de6e1d5e10dddfdf34e0dfa5e518dcd82a8d4c158ca9922553af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_4d3ecfa3925de6e1d5e10dddfdf34e0dfa5e518dcd82a8d4c158ca9922553af5->leave($__internal_4d3ecfa3925de6e1d5e10dddfdf34e0dfa5e518dcd82a8d4c158ca9922553af5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
