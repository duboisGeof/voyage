<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_13fc3a05799fe2fdeca89e1f26f96e6edd0a57147bb59f67f2255d15851a3f0f extends Twig_Template
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
        $__internal_cd4aa2ca63b4d1d39c21d9a96b1dddb09b11207e31e5e166861f5438414c0912 = $this->env->getExtension("native_profiler");
        $__internal_cd4aa2ca63b4d1d39c21d9a96b1dddb09b11207e31e5e166861f5438414c0912->enter($__internal_cd4aa2ca63b4d1d39c21d9a96b1dddb09b11207e31e5e166861f5438414c0912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_cd4aa2ca63b4d1d39c21d9a96b1dddb09b11207e31e5e166861f5438414c0912->leave($__internal_cd4aa2ca63b4d1d39c21d9a96b1dddb09b11207e31e5e166861f5438414c0912_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
