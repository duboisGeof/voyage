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
        $__internal_74fc470580cd0544ad74b7c55af769f2127bd1535f5146cbe553c9224a48ab0c = $this->env->getExtension("native_profiler");
        $__internal_74fc470580cd0544ad74b7c55af769f2127bd1535f5146cbe553c9224a48ab0c->enter($__internal_74fc470580cd0544ad74b7c55af769f2127bd1535f5146cbe553c9224a48ab0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74fc470580cd0544ad74b7c55af769f2127bd1535f5146cbe553c9224a48ab0c->leave($__internal_74fc470580cd0544ad74b7c55af769f2127bd1535f5146cbe553c9224a48ab0c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6a8cf88ac1e0d12cd6a2d8fbe9f0183ba64dc8cb40f3976e696c1c4bf59d8d8b = $this->env->getExtension("native_profiler");
        $__internal_6a8cf88ac1e0d12cd6a2d8fbe9f0183ba64dc8cb40f3976e696c1c4bf59d8d8b->enter($__internal_6a8cf88ac1e0d12cd6a2d8fbe9f0183ba64dc8cb40f3976e696c1c4bf59d8d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6a8cf88ac1e0d12cd6a2d8fbe9f0183ba64dc8cb40f3976e696c1c4bf59d8d8b->leave($__internal_6a8cf88ac1e0d12cd6a2d8fbe9f0183ba64dc8cb40f3976e696c1c4bf59d8d8b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccc40e83409a3443a18a6f352bfec91100ddfe4ad1d45e69da3edac04d486e92 = $this->env->getExtension("native_profiler");
        $__internal_ccc40e83409a3443a18a6f352bfec91100ddfe4ad1d45e69da3edac04d486e92->enter($__internal_ccc40e83409a3443a18a6f352bfec91100ddfe4ad1d45e69da3edac04d486e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ccc40e83409a3443a18a6f352bfec91100ddfe4ad1d45e69da3edac04d486e92->leave($__internal_ccc40e83409a3443a18a6f352bfec91100ddfe4ad1d45e69da3edac04d486e92_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02f79fd6684926a50daa29cea78859c28fbbc2b88f823953f13de4bf3102077a = $this->env->getExtension("native_profiler");
        $__internal_02f79fd6684926a50daa29cea78859c28fbbc2b88f823953f13de4bf3102077a->enter($__internal_02f79fd6684926a50daa29cea78859c28fbbc2b88f823953f13de4bf3102077a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_02f79fd6684926a50daa29cea78859c28fbbc2b88f823953f13de4bf3102077a->leave($__internal_02f79fd6684926a50daa29cea78859c28fbbc2b88f823953f13de4bf3102077a_prof);

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
