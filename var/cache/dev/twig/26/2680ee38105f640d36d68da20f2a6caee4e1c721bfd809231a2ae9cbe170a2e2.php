<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_3bd85c7dc73f55e15d164a7f5bc533916374d9e79c1bd8d5d2cf300f129958b5 extends Twig_Template
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
        $__internal_7818b12b76c5f5da07a3c825d87cad8b11d902b9072a99681553d2c74091e428 = $this->env->getExtension("native_profiler");
        $__internal_7818b12b76c5f5da07a3c825d87cad8b11d902b9072a99681553d2c74091e428->enter($__internal_7818b12b76c5f5da07a3c825d87cad8b11d902b9072a99681553d2c74091e428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_7818b12b76c5f5da07a3c825d87cad8b11d902b9072a99681553d2c74091e428->leave($__internal_7818b12b76c5f5da07a3c825d87cad8b11d902b9072a99681553d2c74091e428_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
