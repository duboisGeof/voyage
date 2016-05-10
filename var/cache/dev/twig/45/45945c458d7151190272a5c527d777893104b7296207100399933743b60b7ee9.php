<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_3d8d583de328cd42777c04c22e47741d024c7d3e9be979beb19fc16e55876713 extends Twig_Template
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
        $__internal_9d6f0b1505f792db3f2d547e54a321088cd22cdc302564e2016f32cfb44c5ccf = $this->env->getExtension("native_profiler");
        $__internal_9d6f0b1505f792db3f2d547e54a321088cd22cdc302564e2016f32cfb44c5ccf->enter($__internal_9d6f0b1505f792db3f2d547e54a321088cd22cdc302564e2016f32cfb44c5ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_9d6f0b1505f792db3f2d547e54a321088cd22cdc302564e2016f32cfb44c5ccf->leave($__internal_9d6f0b1505f792db3f2d547e54a321088cd22cdc302564e2016f32cfb44c5ccf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
