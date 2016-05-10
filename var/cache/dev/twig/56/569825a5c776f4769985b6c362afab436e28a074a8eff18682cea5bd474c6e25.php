<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bbfba612d585fa92d4fd395a0a5f10fb51da41f287f4f325fe28e7b9787669e4 extends Twig_Template
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
        $__internal_4f6eff9ef216d379bab5dbe24403817b093fe61176f02dad40dcacec10715055 = $this->env->getExtension("native_profiler");
        $__internal_4f6eff9ef216d379bab5dbe24403817b093fe61176f02dad40dcacec10715055->enter($__internal_4f6eff9ef216d379bab5dbe24403817b093fe61176f02dad40dcacec10715055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4f6eff9ef216d379bab5dbe24403817b093fe61176f02dad40dcacec10715055->leave($__internal_4f6eff9ef216d379bab5dbe24403817b093fe61176f02dad40dcacec10715055_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_74c58f2f493ed9b68f56a140afe169fc259037fbcab09b79d80c2244298b34e1 = $this->env->getExtension("native_profiler");
        $__internal_74c58f2f493ed9b68f56a140afe169fc259037fbcab09b79d80c2244298b34e1->enter($__internal_74c58f2f493ed9b68f56a140afe169fc259037fbcab09b79d80c2244298b34e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_74c58f2f493ed9b68f56a140afe169fc259037fbcab09b79d80c2244298b34e1->leave($__internal_74c58f2f493ed9b68f56a140afe169fc259037fbcab09b79d80c2244298b34e1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
