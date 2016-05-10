<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_a82efc7a452f838641cb7d83aba0a881698a74ac7097d2b17fc7a218c22c92cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1428ba3a360387fd5488db72182b08847e5d80b3b1747942c83479498105f70 = $this->env->getExtension("native_profiler");
        $__internal_b1428ba3a360387fd5488db72182b08847e5d80b3b1747942c83479498105f70->enter($__internal_b1428ba3a360387fd5488db72182b08847e5d80b3b1747942c83479498105f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1428ba3a360387fd5488db72182b08847e5d80b3b1747942c83479498105f70->leave($__internal_b1428ba3a360387fd5488db72182b08847e5d80b3b1747942c83479498105f70_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eef642464f9c54e795e7b83b64004227950a4d3df7366bc038a9fc56a821c6a1 = $this->env->getExtension("native_profiler");
        $__internal_eef642464f9c54e795e7b83b64004227950a4d3df7366bc038a9fc56a821c6a1->enter($__internal_eef642464f9c54e795e7b83b64004227950a4d3df7366bc038a9fc56a821c6a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_eef642464f9c54e795e7b83b64004227950a4d3df7366bc038a9fc56a821c6a1->leave($__internal_eef642464f9c54e795e7b83b64004227950a4d3df7366bc038a9fc56a821c6a1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ed1ed67efad9c097478978b42c27b48ad545fff4bad4871136ab40e7f4991e2 = $this->env->getExtension("native_profiler");
        $__internal_4ed1ed67efad9c097478978b42c27b48ad545fff4bad4871136ab40e7f4991e2->enter($__internal_4ed1ed67efad9c097478978b42c27b48ad545fff4bad4871136ab40e7f4991e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4ed1ed67efad9c097478978b42c27b48ad545fff4bad4871136ab40e7f4991e2->leave($__internal_4ed1ed67efad9c097478978b42c27b48ad545fff4bad4871136ab40e7f4991e2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_90237b110edab09a0f65f76c2674b6dfd3e262dcc099927502549576bef90af9 = $this->env->getExtension("native_profiler");
        $__internal_90237b110edab09a0f65f76c2674b6dfd3e262dcc099927502549576bef90af9->enter($__internal_90237b110edab09a0f65f76c2674b6dfd3e262dcc099927502549576bef90af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_90237b110edab09a0f65f76c2674b6dfd3e262dcc099927502549576bef90af9->leave($__internal_90237b110edab09a0f65f76c2674b6dfd3e262dcc099927502549576bef90af9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
