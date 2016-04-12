<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_023685e79b24ed854cb36147570de8039adf69fa3877bf64ee284b825fcc79ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_e51939c853ffe3da7b591ecab98aee8e2a876f6ff8485558db5023245a7014af = $this->env->getExtension("native_profiler");
        $__internal_e51939c853ffe3da7b591ecab98aee8e2a876f6ff8485558db5023245a7014af->enter($__internal_e51939c853ffe3da7b591ecab98aee8e2a876f6ff8485558db5023245a7014af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e51939c853ffe3da7b591ecab98aee8e2a876f6ff8485558db5023245a7014af->leave($__internal_e51939c853ffe3da7b591ecab98aee8e2a876f6ff8485558db5023245a7014af_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6ca81fdf9e0ec9b8d1313eec7196cad8f9fd5590a0089be875fe43626ac5b38 = $this->env->getExtension("native_profiler");
        $__internal_f6ca81fdf9e0ec9b8d1313eec7196cad8f9fd5590a0089be875fe43626ac5b38->enter($__internal_f6ca81fdf9e0ec9b8d1313eec7196cad8f9fd5590a0089be875fe43626ac5b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f6ca81fdf9e0ec9b8d1313eec7196cad8f9fd5590a0089be875fe43626ac5b38->leave($__internal_f6ca81fdf9e0ec9b8d1313eec7196cad8f9fd5590a0089be875fe43626ac5b38_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d687158feea9ac6dce136f204202b8fd57643d65ba42b6adb98d310bf012c93 = $this->env->getExtension("native_profiler");
        $__internal_3d687158feea9ac6dce136f204202b8fd57643d65ba42b6adb98d310bf012c93->enter($__internal_3d687158feea9ac6dce136f204202b8fd57643d65ba42b6adb98d310bf012c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d687158feea9ac6dce136f204202b8fd57643d65ba42b6adb98d310bf012c93->leave($__internal_3d687158feea9ac6dce136f204202b8fd57643d65ba42b6adb98d310bf012c93_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a97a5163bf8ca40c1b5ad272b7cb74fa0fe0f6fb841438e14f9a206c09bb2a2 = $this->env->getExtension("native_profiler");
        $__internal_5a97a5163bf8ca40c1b5ad272b7cb74fa0fe0f6fb841438e14f9a206c09bb2a2->enter($__internal_5a97a5163bf8ca40c1b5ad272b7cb74fa0fe0f6fb841438e14f9a206c09bb2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5a97a5163bf8ca40c1b5ad272b7cb74fa0fe0f6fb841438e14f9a206c09bb2a2->leave($__internal_5a97a5163bf8ca40c1b5ad272b7cb74fa0fe0f6fb841438e14f9a206c09bb2a2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
