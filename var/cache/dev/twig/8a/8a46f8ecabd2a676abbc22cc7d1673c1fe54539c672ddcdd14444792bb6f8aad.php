<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_99b6ad2b600d1dca0e4a14a98c83092e3984a66ff674da1ac91b63703cd1a547 extends Twig_Template
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
        $__internal_cecd2d7240d7066bc7cdda2b157077213364227ae0e36c143041775771ab32e9 = $this->env->getExtension("native_profiler");
        $__internal_cecd2d7240d7066bc7cdda2b157077213364227ae0e36c143041775771ab32e9->enter($__internal_cecd2d7240d7066bc7cdda2b157077213364227ae0e36c143041775771ab32e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_cecd2d7240d7066bc7cdda2b157077213364227ae0e36c143041775771ab32e9->leave($__internal_cecd2d7240d7066bc7cdda2b157077213364227ae0e36c143041775771ab32e9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
