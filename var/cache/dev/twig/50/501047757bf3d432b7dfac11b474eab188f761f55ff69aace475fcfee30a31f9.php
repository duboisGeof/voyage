<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c569a4ae92a554487184f30d97d20fda60ee9a6658e1b05839440b5487edc2ed extends Twig_Template
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
        $__internal_4b4530693135a7fc5aa2ae7e8a0322dd2ea9ced58a065edf3d060e1461225ef0 = $this->env->getExtension("native_profiler");
        $__internal_4b4530693135a7fc5aa2ae7e8a0322dd2ea9ced58a065edf3d060e1461225ef0->enter($__internal_4b4530693135a7fc5aa2ae7e8a0322dd2ea9ced58a065edf3d060e1461225ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4b4530693135a7fc5aa2ae7e8a0322dd2ea9ced58a065edf3d060e1461225ef0->leave($__internal_4b4530693135a7fc5aa2ae7e8a0322dd2ea9ced58a065edf3d060e1461225ef0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
