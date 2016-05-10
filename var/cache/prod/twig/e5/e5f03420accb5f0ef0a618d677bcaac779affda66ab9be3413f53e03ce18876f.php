<?php

/* ::layout.html.twig */
class __TwigTemplate_18900557ad003634bfd6de5fabacab4124b09a862da123da03c59d2aeb556268 extends Twig_Template
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
        
        <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>

    </head>
    <body>
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Voyage";
    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        // line 33
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "            
            ";
        // line 80
        $this->displayBlock('navigation', $context, $blocks);
        // line 95
        echo "
        ";
    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        // line 34
        echo "
                <header id=\"header\">

                    <!-- Logo -->
                    <div class=\"ten columns\">
                        <div id=\"logo\">
                            <h1><a href=\"";
        // line 40
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
    }

    // line 80
    public function block_navigation($context, array $blocks = array())
    {
        // line 81
        echo "                <nav id=\"navigation\" class=\"style-1\">

            <div class=\"left-corner\"></div>
            <div class=\"right-corner\"></div>

            <ul class=\"menu\" id=\"responsive\">

                <li><a href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("Voyage_accueil");
        echo "\" id=\"current\"><i class=\"halflings white home\"></i> Accueil</a></li>
                <li><a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("Voyage_destination");
        echo "\" ><i class=\"halflings white home\"></i> Destination</a></li>
                <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("Voyage_circuit");
        echo "\" ><i class=\"halflings white home\"></i> Circuit</a></li>
                <li><a href=\"";
        // line 91
        echo $this->env->getExtension('routing')->getPath("Voyage_sejour");
        echo "\" ><i class=\"halflings white home\"></i> Sejour</a></li>
            </ul>
        </nav>
            ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 91,  216 => 90,  212 => 89,  208 => 88,  199 => 81,  196 => 80,  151 => 40,  143 => 34,  140 => 33,  135 => 95,  133 => 80,  130 => 79,  127 => 33,  124 => 32,  118 => 6,  112 => 97,  110 => 32,  101 => 26,  97 => 25,  93 => 24,  89 => 23,  85 => 22,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  47 => 11,  43 => 10,  39 => 9,  35 => 8,  30 => 6,  23 => 1,);
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
/*         <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
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
