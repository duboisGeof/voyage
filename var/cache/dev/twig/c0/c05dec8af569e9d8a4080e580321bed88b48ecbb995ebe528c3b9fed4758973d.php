<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_259825e20bf2e85d0509b23962e6d47edc4fed4202747c6084e4aaf7b5af4b1e extends Twig_Template
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
        $__internal_f5a4e17b13b0f25e03e0ca8ecee8aa1273a6b5a8d2ed0560710c17f16820f8a1 = $this->env->getExtension("native_profiler");
        $__internal_f5a4e17b13b0f25e03e0ca8ecee8aa1273a6b5a8d2ed0560710c17f16820f8a1->enter($__internal_f5a4e17b13b0f25e03e0ca8ecee8aa1273a6b5a8d2ed0560710c17f16820f8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_f5a4e17b13b0f25e03e0ca8ecee8aa1273a6b5a8d2ed0560710c17f16820f8a1->leave($__internal_f5a4e17b13b0f25e03e0ca8ecee8aa1273a6b5a8d2ed0560710c17f16820f8a1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
