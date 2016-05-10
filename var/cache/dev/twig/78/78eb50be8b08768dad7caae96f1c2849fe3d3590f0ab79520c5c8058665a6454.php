<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_9676a08c202776e259f8799c5e4a2e42dac3d7ecb8b3eb1757cd3bd9dd42c157 extends Twig_Template
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
        $__internal_c3ddbb6497045ef1e8556c1644327992d8cba3be4544eea499e0c1ac994c0627 = $this->env->getExtension("native_profiler");
        $__internal_c3ddbb6497045ef1e8556c1644327992d8cba3be4544eea499e0c1ac994c0627->enter($__internal_c3ddbb6497045ef1e8556c1644327992d8cba3be4544eea499e0c1ac994c0627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c3ddbb6497045ef1e8556c1644327992d8cba3be4544eea499e0c1ac994c0627->leave($__internal_c3ddbb6497045ef1e8556c1644327992d8cba3be4544eea499e0c1ac994c0627_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
