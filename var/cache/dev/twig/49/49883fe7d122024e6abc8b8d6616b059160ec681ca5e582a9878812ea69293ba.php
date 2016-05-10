<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_3ad847bca5fa4bfb70fcb415703349c0c321ca609f61f136b25aae632aff9a95 extends Twig_Template
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
        $__internal_50596328f6a9cdcf01de841034fd883a96023fecbe999b5bf80e5665e13734cd = $this->env->getExtension("native_profiler");
        $__internal_50596328f6a9cdcf01de841034fd883a96023fecbe999b5bf80e5665e13734cd->enter($__internal_50596328f6a9cdcf01de841034fd883a96023fecbe999b5bf80e5665e13734cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_50596328f6a9cdcf01de841034fd883a96023fecbe999b5bf80e5665e13734cd->leave($__internal_50596328f6a9cdcf01de841034fd883a96023fecbe999b5bf80e5665e13734cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
