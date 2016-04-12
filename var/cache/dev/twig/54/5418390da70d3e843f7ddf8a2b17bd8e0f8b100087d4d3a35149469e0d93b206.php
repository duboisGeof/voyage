<?php

/* VoyageBundle:Default:index.html.twig */
class __TwigTemplate_6fe736d6ca337b1ac3965bd06025baa1c0daf9153fc138a5ef20ac2cad4126d0 extends Twig_Template
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
        $__internal_b1ef7aae55f661f520726a979da2cf13a1d2e5f69b5a2e071502261aee552c7c = $this->env->getExtension("native_profiler");
        $__internal_b1ef7aae55f661f520726a979da2cf13a1d2e5f69b5a2e071502261aee552c7c->enter($__internal_b1ef7aae55f661f520726a979da2cf13a1d2e5f69b5a2e071502261aee552c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VoyageBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_b1ef7aae55f661f520726a979da2cf13a1d2e5f69b5a2e071502261aee552c7c->leave($__internal_b1ef7aae55f661f520726a979da2cf13a1d2e5f69b5a2e071502261aee552c7c_prof);

    }

    public function getTemplateName()
    {
        return "VoyageBundle:Default:index.html.twig";
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
/* Hello {{name}}!*/
/* */
