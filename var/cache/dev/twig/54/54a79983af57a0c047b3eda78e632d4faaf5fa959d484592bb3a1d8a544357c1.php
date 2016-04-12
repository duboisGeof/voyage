<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fa2a70401294a3ebf288820ebfb47b00c5a05b1ca34f5a133509c4d27a51ddac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_15417fc23d4874851f9f446615d2a084b02e439655b17992a6be54967652bd92 = $this->env->getExtension("native_profiler");
        $__internal_15417fc23d4874851f9f446615d2a084b02e439655b17992a6be54967652bd92->enter($__internal_15417fc23d4874851f9f446615d2a084b02e439655b17992a6be54967652bd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15417fc23d4874851f9f446615d2a084b02e439655b17992a6be54967652bd92->leave($__internal_15417fc23d4874851f9f446615d2a084b02e439655b17992a6be54967652bd92_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8f28d0444259402fbf9e14c6cfe40b682a26d0f003aeb72baa9fc8925645b564 = $this->env->getExtension("native_profiler");
        $__internal_8f28d0444259402fbf9e14c6cfe40b682a26d0f003aeb72baa9fc8925645b564->enter($__internal_8f28d0444259402fbf9e14c6cfe40b682a26d0f003aeb72baa9fc8925645b564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8f28d0444259402fbf9e14c6cfe40b682a26d0f003aeb72baa9fc8925645b564->leave($__internal_8f28d0444259402fbf9e14c6cfe40b682a26d0f003aeb72baa9fc8925645b564_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7427616bcf4907653569b2972946dc7b3be80eb33fe2a0358c1bc813cc125ba9 = $this->env->getExtension("native_profiler");
        $__internal_7427616bcf4907653569b2972946dc7b3be80eb33fe2a0358c1bc813cc125ba9->enter($__internal_7427616bcf4907653569b2972946dc7b3be80eb33fe2a0358c1bc813cc125ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7427616bcf4907653569b2972946dc7b3be80eb33fe2a0358c1bc813cc125ba9->leave($__internal_7427616bcf4907653569b2972946dc7b3be80eb33fe2a0358c1bc813cc125ba9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_63a60ecf53e6647f538c61de9a6cfc5d9f059ad7b2874fed2d84e2fdbcedba67 = $this->env->getExtension("native_profiler");
        $__internal_63a60ecf53e6647f538c61de9a6cfc5d9f059ad7b2874fed2d84e2fdbcedba67->enter($__internal_63a60ecf53e6647f538c61de9a6cfc5d9f059ad7b2874fed2d84e2fdbcedba67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_63a60ecf53e6647f538c61de9a6cfc5d9f059ad7b2874fed2d84e2fdbcedba67->leave($__internal_63a60ecf53e6647f538c61de9a6cfc5d9f059ad7b2874fed2d84e2fdbcedba67_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
