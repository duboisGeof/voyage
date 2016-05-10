<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_3abde8cf8130a7ab0f70f89918f260f9c88ce3f15e0f59eb52a820694fd4c66e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d1e7c33afeaf5bda4596af102076753d30c74c4d52bce565b97dadf9995ddd9 = $this->env->getExtension("native_profiler");
        $__internal_9d1e7c33afeaf5bda4596af102076753d30c74c4d52bce565b97dadf9995ddd9->enter($__internal_9d1e7c33afeaf5bda4596af102076753d30c74c4d52bce565b97dadf9995ddd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9d1e7c33afeaf5bda4596af102076753d30c74c4d52bce565b97dadf9995ddd9->leave($__internal_9d1e7c33afeaf5bda4596af102076753d30c74c4d52bce565b97dadf9995ddd9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b16e667bcda483638f3d769bf073cbcc1084c3630a75986d8b271302cdaf3d78 = $this->env->getExtension("native_profiler");
        $__internal_b16e667bcda483638f3d769bf073cbcc1084c3630a75986d8b271302cdaf3d78->enter($__internal_b16e667bcda483638f3d769bf073cbcc1084c3630a75986d8b271302cdaf3d78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b16e667bcda483638f3d769bf073cbcc1084c3630a75986d8b271302cdaf3d78->leave($__internal_b16e667bcda483638f3d769bf073cbcc1084c3630a75986d8b271302cdaf3d78_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
