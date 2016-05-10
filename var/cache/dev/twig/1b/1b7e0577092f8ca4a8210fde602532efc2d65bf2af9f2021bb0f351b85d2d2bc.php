<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_99691b021c6d881af8a2abf9f57abda9caad88e2b4a1deff0c1dca9854bdb8fb extends Twig_Template
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
        $__internal_2f4de932d2d99320a85bb2ff7438f4e94fe485cc920772388a6b0abb877b1ac2 = $this->env->getExtension("native_profiler");
        $__internal_2f4de932d2d99320a85bb2ff7438f4e94fe485cc920772388a6b0abb877b1ac2->enter($__internal_2f4de932d2d99320a85bb2ff7438f4e94fe485cc920772388a6b0abb877b1ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2f4de932d2d99320a85bb2ff7438f4e94fe485cc920772388a6b0abb877b1ac2->leave($__internal_2f4de932d2d99320a85bb2ff7438f4e94fe485cc920772388a6b0abb877b1ac2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
