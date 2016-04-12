<?php

/* base.html.twig */
class __TwigTemplate_b994e28f0811f746db64273fcba1da11c23ebf8a7c72c96b168ba92a45b17b80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66dd311bb43f105972df77d05e7e43ec166e336ef2a7c5bdbc59fc844f34966b = $this->env->getExtension("native_profiler");
        $__internal_66dd311bb43f105972df77d05e7e43ec166e336ef2a7c5bdbc59fc844f34966b->enter($__internal_66dd311bb43f105972df77d05e7e43ec166e336ef2a7c5bdbc59fc844f34966b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_66dd311bb43f105972df77d05e7e43ec166e336ef2a7c5bdbc59fc844f34966b->leave($__internal_66dd311bb43f105972df77d05e7e43ec166e336ef2a7c5bdbc59fc844f34966b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_adf05ae3fbfd2cffdcc3008e23e44ba2e7581f70339e45f9b21d7b2e6dac81d3 = $this->env->getExtension("native_profiler");
        $__internal_adf05ae3fbfd2cffdcc3008e23e44ba2e7581f70339e45f9b21d7b2e6dac81d3->enter($__internal_adf05ae3fbfd2cffdcc3008e23e44ba2e7581f70339e45f9b21d7b2e6dac81d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_adf05ae3fbfd2cffdcc3008e23e44ba2e7581f70339e45f9b21d7b2e6dac81d3->leave($__internal_adf05ae3fbfd2cffdcc3008e23e44ba2e7581f70339e45f9b21d7b2e6dac81d3_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d66e3584d92f9dd83376d622a5a0d7cf7330c507ef036428ff05e0d973924a83 = $this->env->getExtension("native_profiler");
        $__internal_d66e3584d92f9dd83376d622a5a0d7cf7330c507ef036428ff05e0d973924a83->enter($__internal_d66e3584d92f9dd83376d622a5a0d7cf7330c507ef036428ff05e0d973924a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d66e3584d92f9dd83376d622a5a0d7cf7330c507ef036428ff05e0d973924a83->leave($__internal_d66e3584d92f9dd83376d622a5a0d7cf7330c507ef036428ff05e0d973924a83_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8cac93a3db9f9962eb849d72de13692362ea9c0e1adf87d3675fdaf2827e5e6 = $this->env->getExtension("native_profiler");
        $__internal_b8cac93a3db9f9962eb849d72de13692362ea9c0e1adf87d3675fdaf2827e5e6->enter($__internal_b8cac93a3db9f9962eb849d72de13692362ea9c0e1adf87d3675fdaf2827e5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b8cac93a3db9f9962eb849d72de13692362ea9c0e1adf87d3675fdaf2827e5e6->leave($__internal_b8cac93a3db9f9962eb849d72de13692362ea9c0e1adf87d3675fdaf2827e5e6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c0ad15424f286fc799564da6890a94244583ddade20e767843bc7c4230994c70 = $this->env->getExtension("native_profiler");
        $__internal_c0ad15424f286fc799564da6890a94244583ddade20e767843bc7c4230994c70->enter($__internal_c0ad15424f286fc799564da6890a94244583ddade20e767843bc7c4230994c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c0ad15424f286fc799564da6890a94244583ddade20e767843bc7c4230994c70->leave($__internal_c0ad15424f286fc799564da6890a94244583ddade20e767843bc7c4230994c70_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
