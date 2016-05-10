<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_a637fed092875a85ded8bc8d71dc6b20d7a8b3f286a872a83bc17e6aec012bad extends Twig_Template
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
        $__internal_fd2d5c59e9d06837f7e43d0283c7abb030c5ee582f3d4d44bcd12919d3a7d435 = $this->env->getExtension("native_profiler");
        $__internal_fd2d5c59e9d06837f7e43d0283c7abb030c5ee582f3d4d44bcd12919d3a7d435->enter($__internal_fd2d5c59e9d06837f7e43d0283c7abb030c5ee582f3d4d44bcd12919d3a7d435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_fd2d5c59e9d06837f7e43d0283c7abb030c5ee582f3d4d44bcd12919d3a7d435->leave($__internal_fd2d5c59e9d06837f7e43d0283c7abb030c5ee582f3d4d44bcd12919d3a7d435_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
