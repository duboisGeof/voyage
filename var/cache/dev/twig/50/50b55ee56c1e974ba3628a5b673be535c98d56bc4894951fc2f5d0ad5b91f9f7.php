<?php

/* layout.html.twig */
class __TwigTemplate_7533fcda8d675c2ef51765be069d810515b439c8279618f8bb20b3098aae92b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_369ba7111c81d8b1aa11b521686a0a862eccfaff8751f50295c0770c998819de = $this->env->getExtension("native_profiler");
        $__internal_369ba7111c81d8b1aa11b521686a0a862eccfaff8751f50295c0770c998819de->enter($__internal_369ba7111c81d8b1aa11b521686a0a862eccfaff8751f50295c0770c998819de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <head>
        <meta charset=\"utf-8\">

        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/css/base.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/css/flexslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        
        <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery-ui.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.flexslider.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.selectnav.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.twitter.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.easing.1.3.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.contact.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.isotope.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.layerslider.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.jcarousel.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.fancybox.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.caroufredsel.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/custom.js"), "html", null, true);
        echo "\" ></script>
        

    </head>
    <body>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 96
        echo "
    </body>
</html>";
        
        $__internal_369ba7111c81d8b1aa11b521686a0a862eccfaff8751f50295c0770c998819de->leave($__internal_369ba7111c81d8b1aa11b521686a0a862eccfaff8751f50295c0770c998819de_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_c49e752bf86843b6f541da55865a8c72bd62a5ea756d83a15ccbcb2570a25b53 = $this->env->getExtension("native_profiler");
        $__internal_c49e752bf86843b6f541da55865a8c72bd62a5ea756d83a15ccbcb2570a25b53->enter($__internal_c49e752bf86843b6f541da55865a8c72bd62a5ea756d83a15ccbcb2570a25b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Voyage";
        
        $__internal_c49e752bf86843b6f541da55865a8c72bd62a5ea756d83a15ccbcb2570a25b53->leave($__internal_c49e752bf86843b6f541da55865a8c72bd62a5ea756d83a15ccbcb2570a25b53_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b05afb3c56c6aaee3c5f3620b8a16d026984768f3a25667e94e4157f636e086 = $this->env->getExtension("native_profiler");
        $__internal_2b05afb3c56c6aaee3c5f3620b8a16d026984768f3a25667e94e4157f636e086->enter($__internal_2b05afb3c56c6aaee3c5f3620b8a16d026984768f3a25667e94e4157f636e086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 78
        echo "            
            ";
        // line 79
        $this->displayBlock('navigation', $context, $blocks);
        // line 94
        echo "
        ";
        
        $__internal_2b05afb3c56c6aaee3c5f3620b8a16d026984768f3a25667e94e4157f636e086->leave($__internal_2b05afb3c56c6aaee3c5f3620b8a16d026984768f3a25667e94e4157f636e086_prof);

    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        $__internal_015fb7e87ecc2b29bb100c9b4511b19eec07dffc7c70dc0e83d4955da91a49f2 = $this->env->getExtension("native_profiler");
        $__internal_015fb7e87ecc2b29bb100c9b4511b19eec07dffc7c70dc0e83d4955da91a49f2->enter($__internal_015fb7e87ecc2b29bb100c9b4511b19eec07dffc7c70dc0e83d4955da91a49f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 33
        echo "
                <header id=\"header\">

                    <!-- Logo -->
                    <div class=\"ten columns\">
                        <div id=\"logo\">
                            <h1><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("Voyage_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/logo.png"), "html", null, true);
        echo "\" alt=\"Nevia Premium Template\" /></a></h1>

                            <div id=\"tagline\">Tout L'immobilier à Mâcon</div>
                            <div class=\"clearfix\"></div>
                        </div>
                    </div>

                    <!-- Social / Contact -->
                    <div class=\"six columns\">

                        <!-- Social Icons -->
                        <ul class=\"social-icons\">
                            <li class=\"twitter\"><a href=\"#\">Twitter</a></li>
                            <li class=\"facebook\"><a href=\"#\">Facebook</a></li>
                            <li class=\"dribbble\"><a href=\"#\">Dribbble</a></li>
                            <li class=\"linkedin\"><a href=\"#\">LinkedIn</a></li>
                            <li class=\"rss\"><a href=\"#\">RSS</a></li>
                        </ul>

                        <div class=\"clearfix\"></div>

                        <!-- Contact Details -->
                        <div class=\"contact-details\">Contact 03 85 22 09 08</div>

                        <div class=\"clearfix\"></div>

                        <!-- Search -->
                        <nav class=\"top-search\">
                            <form action=\"http://vasterad.com/themes/nevia/404-page.html\" method=\"get\">
                                <button class=\"search-btn\"></button>
                                <input class=\"search-field\" type=\"text\" onblur=\"if (this.value == '')
                                        this.value = 'Search';\" onfocus=\"if (this.value == 'Search')
                                                    this.value = '';\" value=\"Search\" />
                            </form>
                        </nav>

                    </div>
                </header>
            ";
        
        $__internal_015fb7e87ecc2b29bb100c9b4511b19eec07dffc7c70dc0e83d4955da91a49f2->leave($__internal_015fb7e87ecc2b29bb100c9b4511b19eec07dffc7c70dc0e83d4955da91a49f2_prof);

    }

    // line 79
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_377b2a2eb57ed06cc36125a8066af24027f00614b406408be0fe95e5d47f98dc = $this->env->getExtension("native_profiler");
        $__internal_377b2a2eb57ed06cc36125a8066af24027f00614b406408be0fe95e5d47f98dc->enter($__internal_377b2a2eb57ed06cc36125a8066af24027f00614b406408be0fe95e5d47f98dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 80
        echo "                <nav id=\"navigation\" class=\"style-1\">

            <div class=\"left-corner\"></div>
            <div class=\"right-corner\"></div>

            <ul class=\"menu\" id=\"responsive\">

                <li><a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("Voyage_accueil");
        echo "\" id=\"current\"><i class=\"halflings white home\"></i> Accueil</a></li>
                <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("Voyage_destination");
        echo "\" ><i class=\"halflings white home\"></i> Destination</a></li>
                <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("Voyage_circuit");
        echo "\" ><i class=\"halflings white home\"></i> Circuit</a></li>
                <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("Voyage_sejour");
        echo "\" ><i class=\"halflings white home\"></i> Sejour</a></li>
            </ul>
        </nav>
            ";
        
        $__internal_377b2a2eb57ed06cc36125a8066af24027f00614b406408be0fe95e5d47f98dc->leave($__internal_377b2a2eb57ed06cc36125a8066af24027f00614b406408be0fe95e5d47f98dc_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 90,  242 => 89,  238 => 88,  234 => 87,  225 => 80,  219 => 79,  171 => 39,  163 => 33,  157 => 32,  149 => 94,  147 => 79,  144 => 78,  141 => 32,  135 => 31,  123 => 6,  114 => 96,  112 => 31,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  56 => 14,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  33 => 6,  26 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/* */
/*         <title>{% block title %}Voyage{% endblock %}</title>*/
/* */
/*         <link href="{{ asset('bundles/voyage/css/styles.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/voyage/css/base.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/voyage/css/responsive.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/voyage/css/flexslider.css') }}" rel="stylesheet">*/
/*         <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">*/
/*         */
/*         <script src="{{ asset('bundles/voyage/scripts/jquery.min.js') }}" ></script>*/
/*         <script src="{{ asset('bundles/voyage/scripts/jquery-ui.min.js') }}" ></script>*/
/*         <script src="{{ asset('bundles/voyage/scripts/jquery.flexslider.js') }}" ></script>*/
/*         <script src="{{ asset('bundles/voyage/scripts/jquery.selectnav.js') }}" ></script>*/
/*         <script src="{{ asset('bundles/voyage/scripts/jquery.twitter.js') }}" ></script>*/
/*         <script src="{{ asset('bundles/voyage/scripts/jquery.easing.1.3.js') }}" ></script>*/
/*         <script src="{{ asset('bundles/voyage/scripts/jquery.contact.js') }}" ></script>*/
/*         <script src="{{ asset('bundles/voyage/scripts/jquery.isotope.min.js') }}" ></script>*/
/*         <script src="{{ asset('bundles/voyage/scripts/jquery.layerslider.min.js') }}" ></script>*/
/*         <script src="{{ asset('bundles/voyage/scripts/jquery.jcarousel.js') }}" ></script>*/
/*         <script src="{{ asset('bundles/voyage/scripts/jquery.fancybox.min.js') }}" ></script>*/
/*         <script src="{{ asset('bundles/voyage/scripts/jquery.caroufredsel.js') }}" ></script>*/
/*         <script src="{{ asset('bundles/voyage/scripts/custom.js') }}" ></script>*/
/*         */
/* */
/*     </head>*/
/*     <body>*/
/*         {% block body %}*/
/*             {% block header %}*/
/* */
/*                 <header id="header">*/
/* */
/*                     <!-- Logo -->*/
/*                     <div class="ten columns">*/
/*                         <div id="logo">*/
/*                             <h1><a href="{{ path('Voyage_accueil') }}"><img src="{{ asset('bundles/voyage/images/logo.png') }}" alt="Nevia Premium Template" /></a></h1>*/
/* */
/*                             <div id="tagline">Tout L'immobilier à Mâcon</div>*/
/*                             <div class="clearfix"></div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <!-- Social / Contact -->*/
/*                     <div class="six columns">*/
/* */
/*                         <!-- Social Icons -->*/
/*                         <ul class="social-icons">*/
/*                             <li class="twitter"><a href="#">Twitter</a></li>*/
/*                             <li class="facebook"><a href="#">Facebook</a></li>*/
/*                             <li class="dribbble"><a href="#">Dribbble</a></li>*/
/*                             <li class="linkedin"><a href="#">LinkedIn</a></li>*/
/*                             <li class="rss"><a href="#">RSS</a></li>*/
/*                         </ul>*/
/* */
/*                         <div class="clearfix"></div>*/
/* */
/*                         <!-- Contact Details -->*/
/*                         <div class="contact-details">Contact 03 85 22 09 08</div>*/
/* */
/*                         <div class="clearfix"></div>*/
/* */
/*                         <!-- Search -->*/
/*                         <nav class="top-search">*/
/*                             <form action="http://vasterad.com/themes/nevia/404-page.html" method="get">*/
/*                                 <button class="search-btn"></button>*/
/*                                 <input class="search-field" type="text" onblur="if (this.value == '')*/
/*                                         this.value = 'Search';" onfocus="if (this.value == 'Search')*/
/*                                                     this.value = '';" value="Search" />*/
/*                             </form>*/
/*                         </nav>*/
/* */
/*                     </div>*/
/*                 </header>*/
/*             {% endblock %}*/
/*             */
/*             {% block navigation %}*/
/*                 <nav id="navigation" class="style-1">*/
/* */
/*             <div class="left-corner"></div>*/
/*             <div class="right-corner"></div>*/
/* */
/*             <ul class="menu" id="responsive">*/
/* */
/*                 <li><a href="{{ path('Voyage_accueil') }}" id="current"><i class="halflings white home"></i> Accueil</a></li>*/
/*                 <li><a href="{{ path('Voyage_destination') }}" ><i class="halflings white home"></i> Destination</a></li>*/
/*                 <li><a href="{{ path('Voyage_circuit') }}" ><i class="halflings white home"></i> Circuit</a></li>*/
/*                 <li><a href="{{ path('Voyage_sejour') }}" ><i class="halflings white home"></i> Sejour</a></li>*/
/*             </ul>*/
/*         </nav>*/
/*             {% endblock %}*/
/* */
/*         {% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
