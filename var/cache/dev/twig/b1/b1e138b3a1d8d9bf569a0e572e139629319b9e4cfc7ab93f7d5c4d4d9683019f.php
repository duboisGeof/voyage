<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_4872336571a42273748d7b8fb55dc0ae4f4757e8e41c5a9fd31919ae04c1bb8f extends Twig_Template
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
        $__internal_addbd27fc47d67d4dc560a1c84425134997fbf18f6a1500a41bdb5a43b3ba9e2 = $this->env->getExtension("native_profiler");
        $__internal_addbd27fc47d67d4dc560a1c84425134997fbf18f6a1500a41bdb5a43b3ba9e2->enter($__internal_addbd27fc47d67d4dc560a1c84425134997fbf18f6a1500a41bdb5a43b3ba9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_addbd27fc47d67d4dc560a1c84425134997fbf18f6a1500a41bdb5a43b3ba9e2->leave($__internal_addbd27fc47d67d4dc560a1c84425134997fbf18f6a1500a41bdb5a43b3ba9e2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
