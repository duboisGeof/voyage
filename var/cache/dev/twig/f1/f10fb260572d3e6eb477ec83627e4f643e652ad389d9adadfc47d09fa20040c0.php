<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_44138a20693bbdf1c9190b7eb0119259e4866bf2a9ad02a8c01c436fe060f5ce extends Twig_Template
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
        $__internal_66aa167c00e7fb9ed9177b1526b62cb81f6d80c007dd20d399b3f296c9afd5fd = $this->env->getExtension("native_profiler");
        $__internal_66aa167c00e7fb9ed9177b1526b62cb81f6d80c007dd20d399b3f296c9afd5fd->enter($__internal_66aa167c00e7fb9ed9177b1526b62cb81f6d80c007dd20d399b3f296c9afd5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_66aa167c00e7fb9ed9177b1526b62cb81f6d80c007dd20d399b3f296c9afd5fd->leave($__internal_66aa167c00e7fb9ed9177b1526b62cb81f6d80c007dd20d399b3f296c9afd5fd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
