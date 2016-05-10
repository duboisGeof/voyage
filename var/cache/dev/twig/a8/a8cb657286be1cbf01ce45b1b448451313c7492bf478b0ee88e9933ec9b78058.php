<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_0d41108f9dc79a0f3f1f72eeeceb804d842d5445b78701a0eea5e5aaa1be50df extends Twig_Template
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
        $__internal_8dbdec7b5fa169a95d75bcf74b00a4ca0114271d1547a306b9f6fcf9c9bae72c = $this->env->getExtension("native_profiler");
        $__internal_8dbdec7b5fa169a95d75bcf74b00a4ca0114271d1547a306b9f6fcf9c9bae72c->enter($__internal_8dbdec7b5fa169a95d75bcf74b00a4ca0114271d1547a306b9f6fcf9c9bae72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8dbdec7b5fa169a95d75bcf74b00a4ca0114271d1547a306b9f6fcf9c9bae72c->leave($__internal_8dbdec7b5fa169a95d75bcf74b00a4ca0114271d1547a306b9f6fcf9c9bae72c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
