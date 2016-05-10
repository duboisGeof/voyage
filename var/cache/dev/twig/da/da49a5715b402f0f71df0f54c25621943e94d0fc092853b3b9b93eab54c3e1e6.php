<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2a650c16158925dcee4ba83dce4436a5dad1abdcad0e3dc6b6313b05fc126d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_35969d799f7832bff93449319d75037fbec5f5df23f57c149b749a7765eac45b = $this->env->getExtension("native_profiler");
        $__internal_35969d799f7832bff93449319d75037fbec5f5df23f57c149b749a7765eac45b->enter($__internal_35969d799f7832bff93449319d75037fbec5f5df23f57c149b749a7765eac45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35969d799f7832bff93449319d75037fbec5f5df23f57c149b749a7765eac45b->leave($__internal_35969d799f7832bff93449319d75037fbec5f5df23f57c149b749a7765eac45b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ff91c711d3f56b319784975c2fa7a8bb90021c7f302d4fcc51a9ff949c89110 = $this->env->getExtension("native_profiler");
        $__internal_4ff91c711d3f56b319784975c2fa7a8bb90021c7f302d4fcc51a9ff949c89110->enter($__internal_4ff91c711d3f56b319784975c2fa7a8bb90021c7f302d4fcc51a9ff949c89110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_4ff91c711d3f56b319784975c2fa7a8bb90021c7f302d4fcc51a9ff949c89110->leave($__internal_4ff91c711d3f56b319784975c2fa7a8bb90021c7f302d4fcc51a9ff949c89110_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4fb3c085adecaefc09cf6942ee7baf63b8723e433972a350cb57f6311514e8d7 = $this->env->getExtension("native_profiler");
        $__internal_4fb3c085adecaefc09cf6942ee7baf63b8723e433972a350cb57f6311514e8d7->enter($__internal_4fb3c085adecaefc09cf6942ee7baf63b8723e433972a350cb57f6311514e8d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4fb3c085adecaefc09cf6942ee7baf63b8723e433972a350cb57f6311514e8d7->leave($__internal_4fb3c085adecaefc09cf6942ee7baf63b8723e433972a350cb57f6311514e8d7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
