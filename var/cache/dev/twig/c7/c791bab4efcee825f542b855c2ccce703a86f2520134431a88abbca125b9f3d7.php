<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_98586140ec1c91e8e58cd333e95d8dfa7103ec482c73f6c72f11227a581462ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_fbf685f17b1208e2620a1c2fecb4987bdffad644cbc2e32eccbdc430a1ef14b3 = $this->env->getExtension("native_profiler");
        $__internal_fbf685f17b1208e2620a1c2fecb4987bdffad644cbc2e32eccbdc430a1ef14b3->enter($__internal_fbf685f17b1208e2620a1c2fecb4987bdffad644cbc2e32eccbdc430a1ef14b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fbf685f17b1208e2620a1c2fecb4987bdffad644cbc2e32eccbdc430a1ef14b3->leave($__internal_fbf685f17b1208e2620a1c2fecb4987bdffad644cbc2e32eccbdc430a1ef14b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5afec459522bd8703c887aa03352bd23808a5a4040a7706b8edb98d223b9262 = $this->env->getExtension("native_profiler");
        $__internal_c5afec459522bd8703c887aa03352bd23808a5a4040a7706b8edb98d223b9262->enter($__internal_c5afec459522bd8703c887aa03352bd23808a5a4040a7706b8edb98d223b9262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c5afec459522bd8703c887aa03352bd23808a5a4040a7706b8edb98d223b9262->leave($__internal_c5afec459522bd8703c887aa03352bd23808a5a4040a7706b8edb98d223b9262_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0e161c042f6a96699e6d435c7dbf1a9c03665bb497c0dd6254c3b6817784106 = $this->env->getExtension("native_profiler");
        $__internal_b0e161c042f6a96699e6d435c7dbf1a9c03665bb497c0dd6254c3b6817784106->enter($__internal_b0e161c042f6a96699e6d435c7dbf1a9c03665bb497c0dd6254c3b6817784106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b0e161c042f6a96699e6d435c7dbf1a9c03665bb497c0dd6254c3b6817784106->leave($__internal_b0e161c042f6a96699e6d435c7dbf1a9c03665bb497c0dd6254c3b6817784106_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
