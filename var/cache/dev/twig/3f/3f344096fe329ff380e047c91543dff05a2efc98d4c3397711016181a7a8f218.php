<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_419b69951367b905e0fdece673f7a8a312b8bf71bd639514b34e3d0d42d41d5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f369f36b03b30536f0d68d721ba275c346644f0f50e28d9d70d8dc185853d4b0 = $this->env->getExtension("native_profiler");
        $__internal_f369f36b03b30536f0d68d721ba275c346644f0f50e28d9d70d8dc185853d4b0->enter($__internal_f369f36b03b30536f0d68d721ba275c346644f0f50e28d9d70d8dc185853d4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f369f36b03b30536f0d68d721ba275c346644f0f50e28d9d70d8dc185853d4b0->leave($__internal_f369f36b03b30536f0d68d721ba275c346644f0f50e28d9d70d8dc185853d4b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bcd64a57459bde477a883c36b1f937652e164e0d1784d0ac77639ce6c5c8d1fb = $this->env->getExtension("native_profiler");
        $__internal_bcd64a57459bde477a883c36b1f937652e164e0d1784d0ac77639ce6c5c8d1fb->enter($__internal_bcd64a57459bde477a883c36b1f937652e164e0d1784d0ac77639ce6c5c8d1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bcd64a57459bde477a883c36b1f937652e164e0d1784d0ac77639ce6c5c8d1fb->leave($__internal_bcd64a57459bde477a883c36b1f937652e164e0d1784d0ac77639ce6c5c8d1fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_12cb0105879f72c0f846b36b1f4f3533abd0efaa2b5271fd216bdcfbd529782b = $this->env->getExtension("native_profiler");
        $__internal_12cb0105879f72c0f846b36b1f4f3533abd0efaa2b5271fd216bdcfbd529782b->enter($__internal_12cb0105879f72c0f846b36b1f4f3533abd0efaa2b5271fd216bdcfbd529782b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_12cb0105879f72c0f846b36b1f4f3533abd0efaa2b5271fd216bdcfbd529782b->leave($__internal_12cb0105879f72c0f846b36b1f4f3533abd0efaa2b5271fd216bdcfbd529782b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69ae54cd856125c994e212baae64d61e662aa26e222ac82e13a4c1505c3610a8 = $this->env->getExtension("native_profiler");
        $__internal_69ae54cd856125c994e212baae64d61e662aa26e222ac82e13a4c1505c3610a8->enter($__internal_69ae54cd856125c994e212baae64d61e662aa26e222ac82e13a4c1505c3610a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_69ae54cd856125c994e212baae64d61e662aa26e222ac82e13a4c1505c3610a8->leave($__internal_69ae54cd856125c994e212baae64d61e662aa26e222ac82e13a4c1505c3610a8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
