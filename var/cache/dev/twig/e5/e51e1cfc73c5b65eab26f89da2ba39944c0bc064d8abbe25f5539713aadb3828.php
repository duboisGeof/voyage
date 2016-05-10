<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_80b045f2940e83351544822861965078a8377fccfa2e172967fa919209a23426 extends Twig_Template
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
        $__internal_f2e2df05a471238e10d844ca143ef997edcfdcdd484f20d6454552b6af1fd3ef = $this->env->getExtension("native_profiler");
        $__internal_f2e2df05a471238e10d844ca143ef997edcfdcdd484f20d6454552b6af1fd3ef->enter($__internal_f2e2df05a471238e10d844ca143ef997edcfdcdd484f20d6454552b6af1fd3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f2e2df05a471238e10d844ca143ef997edcfdcdd484f20d6454552b6af1fd3ef->leave($__internal_f2e2df05a471238e10d844ca143ef997edcfdcdd484f20d6454552b6af1fd3ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
