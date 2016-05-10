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
        $__internal_413541c564e38d1aff1d02d25e9be8aa47f12ac46e5f1ded851d63297a80ca76 = $this->env->getExtension("native_profiler");
        $__internal_413541c564e38d1aff1d02d25e9be8aa47f12ac46e5f1ded851d63297a80ca76->enter($__internal_413541c564e38d1aff1d02d25e9be8aa47f12ac46e5f1ded851d63297a80ca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_413541c564e38d1aff1d02d25e9be8aa47f12ac46e5f1ded851d63297a80ca76->leave($__internal_413541c564e38d1aff1d02d25e9be8aa47f12ac46e5f1ded851d63297a80ca76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9955819f71c0bd5767cbb6d96b6b51d6c053f2be3b8d599a84e8e73c28b829a5 = $this->env->getExtension("native_profiler");
        $__internal_9955819f71c0bd5767cbb6d96b6b51d6c053f2be3b8d599a84e8e73c28b829a5->enter($__internal_9955819f71c0bd5767cbb6d96b6b51d6c053f2be3b8d599a84e8e73c28b829a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9955819f71c0bd5767cbb6d96b6b51d6c053f2be3b8d599a84e8e73c28b829a5->leave($__internal_9955819f71c0bd5767cbb6d96b6b51d6c053f2be3b8d599a84e8e73c28b829a5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5053c6e69025e2d3b9c9100648f23f915bfff48cd532be45edde07d34737dda1 = $this->env->getExtension("native_profiler");
        $__internal_5053c6e69025e2d3b9c9100648f23f915bfff48cd532be45edde07d34737dda1->enter($__internal_5053c6e69025e2d3b9c9100648f23f915bfff48cd532be45edde07d34737dda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5053c6e69025e2d3b9c9100648f23f915bfff48cd532be45edde07d34737dda1->leave($__internal_5053c6e69025e2d3b9c9100648f23f915bfff48cd532be45edde07d34737dda1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_67f20687737344638cfabe17ae7fda370fb2bd2a9765477bfc4b65c145c03bf1 = $this->env->getExtension("native_profiler");
        $__internal_67f20687737344638cfabe17ae7fda370fb2bd2a9765477bfc4b65c145c03bf1->enter($__internal_67f20687737344638cfabe17ae7fda370fb2bd2a9765477bfc4b65c145c03bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_67f20687737344638cfabe17ae7fda370fb2bd2a9765477bfc4b65c145c03bf1->leave($__internal_67f20687737344638cfabe17ae7fda370fb2bd2a9765477bfc4b65c145c03bf1_prof);

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
