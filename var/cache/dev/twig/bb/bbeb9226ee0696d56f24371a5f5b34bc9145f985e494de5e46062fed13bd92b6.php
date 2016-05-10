<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_37943c900fde30ff015b650f442ee168d54fd1841ea73f4710fc56e65b42a484 extends Twig_Template
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
        $__internal_61202ab108404d1089c3e88f7855e31d54f279bd14d57f3da8b0e5c246d99007 = $this->env->getExtension("native_profiler");
        $__internal_61202ab108404d1089c3e88f7855e31d54f279bd14d57f3da8b0e5c246d99007->enter($__internal_61202ab108404d1089c3e88f7855e31d54f279bd14d57f3da8b0e5c246d99007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_61202ab108404d1089c3e88f7855e31d54f279bd14d57f3da8b0e5c246d99007->leave($__internal_61202ab108404d1089c3e88f7855e31d54f279bd14d57f3da8b0e5c246d99007_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
