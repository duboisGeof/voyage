<?php

/* ::layout.html.twig */
class __TwigTemplate_3f4bc2ace2630f28ea407dee0f7401999905940ff637a29f05bb2973d192c7cb extends Twig_Template
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
        $__internal_b29bf4146cc1a2c5a7278cdfdfb1001cee658ae86598251135644bed9fb3ea99 = $this->env->getExtension("native_profiler");
        $__internal_b29bf4146cc1a2c5a7278cdfdfb1001cee658ae86598251135644bed9fb3ea99->enter($__internal_b29bf4146cc1a2c5a7278cdfdfb1001cee658ae86598251135644bed9fb3ea99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
        
        <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery-ui.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.flexslider.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.selectnav.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.twitter.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.easing.1.3.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.contact.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.isotope.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.layerslider.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.jcarousel.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.fancybox.min.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/jquery.caroufredsel.js"), "html", null, true);
        echo "\" ></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/custom.js"), "html", null, true);
        echo "\" ></script>
        

    </head>
    <body>
        ";
        // line 32
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "        
        <!-- Footer
================================================== -->

<!-- Footer / Start -->
<footer id=\"footer\">
    <!-- 960 Container -->
    <div class=\"container\">

        <!-- About -->
        <div class=\"four columns\">
            <img id=\"logo-footer\" src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"\" />
            <p><a href=\"http://www.geoffrey-dubois.fr/\">geoffrey-dubois.fr</a></p>
        </div>

        <!-- Contact Details -->
        <div class=\"four columns\">
            <h4>Contact</h4>
            <ul class=\"contact-details-alt\">
                <li><i class=\"halflings white map-marker\"></i> <p><strong>Addresse:</strong> 20 rue du val d'oise</p></li>
                <li><i class=\"halflings white user\"></i> <p><strong>Telephone:</strong> 06 16 31 34 27</p></li>
                <li><i class=\"halflings white envelope\"></i> <p><strong>Email:</strong> <a href=\"http://www.geoffrey-dubois.fr/\">geoffrey-dubois.fr</a></p></li>
            </ul>
        </div>

        <!-- Photo Stream -->
        <div class=\"four columns\">
            <h4>Photo</h4>
            <div class=\"flickr-widget\">
                <script type=\"text/javascript\" src=\"http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=48035108@N07\"></script>
                <div class=\"clearfix\"></div>
            </div>
        </div>



    </div>
    <!-- 960 Container / End -->

</footer>
<!-- Footer / End -->


<!-- Footer Bottom / Start  -->
<footer id=\"footer-bottom\">

    <!-- 960 Container -->
    <div class=\"container\">

        <!-- Copyrights -->
        <div class=\"eight columns\">
            <div class=\"copyright\">
                © Copyright 2016 by <a href=\"http://www.geoffrey-dubois.fr/\">geoffrey-dubois.fr</a>. Tout droit reserves.
            </div>
        </div>

        <!-- Menu -->
        <div class=\"eight columns\">
            <nav id=\"sub-menu\">
                <ul>
                    <li><a href=\"#\">FAQ's</a></li>
                    <li><a href=\"#\">Sitemap</a></li>
                    <li><a href=\"#\">Contact</a></li>
                </ul>
            </nav>
        </div>

    </div>
    <!-- 960 Container / End -->

</footer>
<!-- Footer Bottom / End -->

    </body>
</html>";
        
        $__internal_b29bf4146cc1a2c5a7278cdfdfb1001cee658ae86598251135644bed9fb3ea99->leave($__internal_b29bf4146cc1a2c5a7278cdfdfb1001cee658ae86598251135644bed9fb3ea99_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_15173c1a640eca1ddfd21f8c11de18ef657dfec4812c6f0a0ee71ff43e2dfc8f = $this->env->getExtension("native_profiler");
        $__internal_15173c1a640eca1ddfd21f8c11de18ef657dfec4812c6f0a0ee71ff43e2dfc8f->enter($__internal_15173c1a640eca1ddfd21f8c11de18ef657dfec4812c6f0a0ee71ff43e2dfc8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Voyage";
        
        $__internal_15173c1a640eca1ddfd21f8c11de18ef657dfec4812c6f0a0ee71ff43e2dfc8f->leave($__internal_15173c1a640eca1ddfd21f8c11de18ef657dfec4812c6f0a0ee71ff43e2dfc8f_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_48f3bb8016402b5860c5b6d8c28c7963c80b64f46dc41e1dca99150f5c87ed97 = $this->env->getExtension("native_profiler");
        $__internal_48f3bb8016402b5860c5b6d8c28c7963c80b64f46dc41e1dca99150f5c87ed97->enter($__internal_48f3bb8016402b5860c5b6d8c28c7963c80b64f46dc41e1dca99150f5c87ed97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "            ";
        $this->displayBlock('header', $context, $blocks);
        // line 79
        echo "            
            ";
        // line 80
        $this->displayBlock('navigation', $context, $blocks);
        // line 96
        echo "
        ";
        
        $__internal_48f3bb8016402b5860c5b6d8c28c7963c80b64f46dc41e1dca99150f5c87ed97->leave($__internal_48f3bb8016402b5860c5b6d8c28c7963c80b64f46dc41e1dca99150f5c87ed97_prof);

    }

    // line 33
    public function block_header($context, array $blocks = array())
    {
        $__internal_c1c31b55ae12f7e9f471fbba749a72b5dffb611fae12366c56555e7d19575eff = $this->env->getExtension("native_profiler");
        $__internal_c1c31b55ae12f7e9f471fbba749a72b5dffb611fae12366c56555e7d19575eff->enter($__internal_c1c31b55ae12f7e9f471fbba749a72b5dffb611fae12366c56555e7d19575eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Nevia Premium Template\" /></a></h1>

                            <div id=\"tagline\">Agence de Voyage</div>
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
        
        $__internal_c1c31b55ae12f7e9f471fbba749a72b5dffb611fae12366c56555e7d19575eff->leave($__internal_c1c31b55ae12f7e9f471fbba749a72b5dffb611fae12366c56555e7d19575eff_prof);

    }

    // line 80
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b9ca84188e05d1fb5f32197747ab5a33815253110acf4fc11038721539dd5f74 = $this->env->getExtension("native_profiler");
        $__internal_b9ca84188e05d1fb5f32197747ab5a33815253110acf4fc11038721539dd5f74->enter($__internal_b9ca84188e05d1fb5f32197747ab5a33815253110acf4fc11038721539dd5f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 81
        echo "                <nav id=\"navigation\" class=\"style-1\">

            <div class=\"left-corner\"></div>
            <div class=\"right-corner\"></div>
            ";
        // line 85
        $context["route"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
        // line 86
        echo "            <ul class=\"menu\" id=\"responsive\">
                <li ";
        // line 87
        echo ((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "Voyage_accueil")) ? ("id=\"current\"") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("Voyage_accueil");
        echo "\" ><i class=\"halflings white home\"></i> Accueil</a></li>
                <li ";
        // line 88
        echo ((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "Voyage_destination")) ? ("id=\"current\"") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("Voyage_destination");
        echo "\" ><i class=\"halflings white home\"></i> Destination</a></li>
                <li ";
        // line 89
        echo ((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "Voyage_circuit")) ? ("id=\"current\"") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("Voyage_circuit");
        echo "\" ><i class=\"halflings white home\"></i> Circuit</a></li>
                <li ";
        // line 90
        echo ((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "Voyage_sejour")) ? ("id=\"current\"") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("Voyage_sejour");
        echo "\" ><i class=\"halflings white home\"></i> Sejour</a></li>
                <li ";
        // line 91
        echo ((((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")) == "Voyage_contact")) ? ("id=\"current\"") : (""));
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("Voyage_contact");
        echo "\" ><i class=\"halflings white home\"></i> Contact</a></li>

            </ul>
        </nav>
        ";
        
        $__internal_b9ca84188e05d1fb5f32197747ab5a33815253110acf4fc11038721539dd5f74->leave($__internal_b9ca84188e05d1fb5f32197747ab5a33815253110acf4fc11038721539dd5f74_prof);

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
        return array (  339 => 91,  333 => 90,  327 => 89,  321 => 88,  315 => 87,  312 => 86,  310 => 85,  304 => 81,  298 => 80,  250 => 40,  242 => 34,  236 => 33,  228 => 96,  226 => 80,  223 => 79,  220 => 33,  214 => 32,  202 => 6,  131 => 109,  118 => 98,  116 => 32,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  76 => 19,  72 => 18,  68 => 17,  64 => 16,  60 => 15,  54 => 12,  50 => 11,  46 => 10,  42 => 9,  38 => 8,  33 => 6,  26 => 1,);
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
/*         <link href="{{ asset('bundles/voyage/css/icons.css') }}" rel="stylesheet">*/
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
/*                             <h1><a href="{{ path('Voyage_accueil') }}"><img src="{{ asset('bundles/voyage/images/logo.jpg') }}" alt="Nevia Premium Template" /></a></h1>*/
/* */
/*                             <div id="tagline">Agence de Voyage</div>*/
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
/*             {% set route = app.request.attributes.get('_route') %}*/
/*             <ul class="menu" id="responsive">*/
/*                 <li {{ route ==  'Voyage_accueil' ? 'id="current"' }}><a href="{{ path('Voyage_accueil') }}" ><i class="halflings white home"></i> Accueil</a></li>*/
/*                 <li {{ route ==  'Voyage_destination' ? 'id="current"' }}><a href="{{ path('Voyage_destination') }}" ><i class="halflings white home"></i> Destination</a></li>*/
/*                 <li {{ route ==  'Voyage_circuit' ? 'id="current"' }}><a href="{{ path('Voyage_circuit') }}" ><i class="halflings white home"></i> Circuit</a></li>*/
/*                 <li {{ route ==  'Voyage_sejour' ? 'id="current"' }}><a href="{{ path('Voyage_sejour') }}" ><i class="halflings white home"></i> Sejour</a></li>*/
/*                 <li {{ route ==  'Voyage_contact' ? 'id="current"' }}><a href="{{ path('Voyage_contact') }}" ><i class="halflings white home"></i> Contact</a></li>*/
/* */
/*             </ul>*/
/*         </nav>*/
/*         {% endblock %}*/
/* */
/*         {% endblock %}*/
/*         */
/*         <!-- Footer*/
/* ================================================== -->*/
/* */
/* <!-- Footer / Start -->*/
/* <footer id="footer">*/
/*     <!-- 960 Container -->*/
/*     <div class="container">*/
/* */
/*         <!-- About -->*/
/*         <div class="four columns">*/
/*             <img id="logo-footer" src="{{ asset('bundles/voyage/images/logo.jpg') }}" alt="" />*/
/*             <p><a href="http://www.geoffrey-dubois.fr/">geoffrey-dubois.fr</a></p>*/
/*         </div>*/
/* */
/*         <!-- Contact Details -->*/
/*         <div class="four columns">*/
/*             <h4>Contact</h4>*/
/*             <ul class="contact-details-alt">*/
/*                 <li><i class="halflings white map-marker"></i> <p><strong>Addresse:</strong> 20 rue du val d'oise</p></li>*/
/*                 <li><i class="halflings white user"></i> <p><strong>Telephone:</strong> 06 16 31 34 27</p></li>*/
/*                 <li><i class="halflings white envelope"></i> <p><strong>Email:</strong> <a href="http://www.geoffrey-dubois.fr/">geoffrey-dubois.fr</a></p></li>*/
/*             </ul>*/
/*         </div>*/
/* */
/*         <!-- Photo Stream -->*/
/*         <div class="four columns">*/
/*             <h4>Photo</h4>*/
/*             <div class="flickr-widget">*/
/*                 <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=48035108@N07"></script>*/
/*                 <div class="clearfix"></div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/* */
/*     </div>*/
/*     <!-- 960 Container / End -->*/
/* */
/* </footer>*/
/* <!-- Footer / End -->*/
/* */
/* */
/* <!-- Footer Bottom / Start  -->*/
/* <footer id="footer-bottom">*/
/* */
/*     <!-- 960 Container -->*/
/*     <div class="container">*/
/* */
/*         <!-- Copyrights -->*/
/*         <div class="eight columns">*/
/*             <div class="copyright">*/
/*                 © Copyright 2016 by <a href="http://www.geoffrey-dubois.fr/">geoffrey-dubois.fr</a>. Tout droit reserves.*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- Menu -->*/
/*         <div class="eight columns">*/
/*             <nav id="sub-menu">*/
/*                 <ul>*/
/*                     <li><a href="#">FAQ's</a></li>*/
/*                     <li><a href="#">Sitemap</a></li>*/
/*                     <li><a href="#">Contact</a></li>*/
/*                 </ul>*/
/*             </nav>*/
/*         </div>*/
/* */
/*     </div>*/
/*     <!-- 960 Container / End -->*/
/* */
/* </footer>*/
/* <!-- Footer Bottom / End -->*/
/* */
/*     </body>*/
/* </html>*/
