<?php

/* @Voyage/Layout/accueil.html.twig */
class __TwigTemplate_60d551648def05f164d14ce459ea4114fd2a555f09cf861a2dfb8e2c726c0a95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@Voyage/Layout/accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    <div id=\"wrapper\">
        <div id=\"top-line\"></div>

        <!-- 960 Container -->
        <div class=\"container\">

            <!-- Header -->
            ";
        // line 12
        $this->displayBlock('header', $context, $blocks);
        // line 13
        echo "            <!-- Header / End -->

            <div class=\"clearfix\"></div>

        </div>
        <!-- 960 Container / End -->


        <!-- Navigation
        ================================================== -->
        ";
        // line 23
        $this->displayBlock('navigation', $context, $blocks);
        // line 24
        echo "        <div class=\"clearfix\"></div>


        <!-- Content
        ================================================== -->


        <!-- LayerSlider  -->
        <section id=\"layerslider-container\">\t
            <div id=\"layerslider\" style=\"width: 1020px; height: 450px; margin: 0 auto;\">

                <!-- Slide 1 -->
                <article class=\"ls-layer\" style=\"slideDelay: 10000; slidedirection: left;\">
                    <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" class=\"ls-bg\" alt=\"\">
                </article>

                <!-- Slide 2 -->
                <article class=\"ls-layer\" style=\"slideDelay: 10000; slidedirection: top;\">
                    <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" class=\"ls-bg\">
                </article>

                <!-- Slide 3 -->
                <article class=\"ls-layer\" style=\"slideDelay: 10000; slidedirection: right; \">
                    <img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/03.jpg"), "html", null, true);
        echo "\" class=\"ls-bg\">
                </article>

                <article class=\"ls-layer\" style=\"slideDelay: 10000; slidedirection: bottom;\">
                    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/04.jpg"), "html", null, true);
        echo "\" class=\"ls-bg\">
                </article>

            </div>\t\t\t\t\t
        </section>
        <!-- LayerSlider / End -->


        <!-- 960 Container -->
        <div class=\"container\">

            <!-- Icon Boxes -->
            <section class=\"icon-box-container\">

                <form class=\"form-inline\" role=\"form\" id=\"\" action=\"\" method=\"post\">
                    <h3>Rechercher votre séjour</h3><hr>
                        <label for=\"depart\">Au départ de : </label>
                        <div class=\"form-group\">
                            <select class=\"form-control\" name=\"category\">
                                <option value=\"\">Paris</option>
                                <option value=\"0\">Marseille</option>
                                <option value=\"1\">Bordeaux</option>
                                <option value=\"2\">Lille</option>
                            </select>           
                        </div>
                        
                        <label for=\"arrivé\">Destination : </label>
                        <div class=\"form-group\">
                            <select class=\"form-control\" name=\"category\">
                                <option value=\"\">New-York</option>
                                <option value=\"0\">Tokyo</option>
                                <option value=\"1\">Montreal</option>
                                <option value=\"2\">Le Caire</option>
                            </select>           
                        </div>
                        
                        <div class=\"form-group\">
                            <label for=\"date_debut\">Du :</label>
                            <input type=\"date\" max=\"2017-12-31\" min=\"2015-01-01\" name=\"date_debut\">
                        </div>
                        
                         <div class=\"form-group\">
                            <label for=\"date_fin\">Au :</label>
                            <input type=\"date\" max=\"2012-06-25\" min=\"2011-08-13\" name=\"date_fin\">
                        </div>
                        
                        <br>
                        
                        <div class=\"form-group\">
                            <label for=\"duree\">Durée :</label>
                            <input type=\"duree\" class=\"form-control\" id=\"duree\" placeholder=\"Durée\">
                        </div>
                        
                        
                        
                        <div class=\"form-group\">
                            <label for=\"prix\">Budget:</label>
                            <input type=\"prix\" class=\"form-control\" id=\"prix\" placeholder=\"Votre Budget\">
                        </div>
                </form>


            </section>
            <!-- Icon Boxes / End -->

        </div>
        <!-- 960 Container / End -->


        <!-- 960 Container -->
        <div class=\"container floated\">
            <div class=\"blank floated\">

               

                <!-- jCarousel -->
                <section class=\"jcarousel recent-work-jc\">
                    <h3>Nos promotions</h3>
                   <div class=\"image_carousel\">
\t<div id=\"foo1\">
\t\t<img src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/04.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
\t\t
\t</div>
\t<div class=\"clearfix\"></div>
</div>

                </section>
                <!-- jCarousel / End -->

            </div>
        </div>
        <!-- 960 Container / End -->


        <!-- 960 Container -->
        <div class=\"container\">

            <!-- Recent News -->
            <div class=\"eight columns\">

                <h3 class=\"margin-1\">News <span>/ Immobilier Macon.Net</span></h3>

                <div class=\"four columns alpha\">
                    <article class=\"recent-blog\">
                        <section class=\"date\">
                            <span class=\"day\">28</span>
                            <span class=\"month\">Dec</span>
                        </section>
                        <h4><a href=\"\">Immobilier Macon.Net Immobilier Macon.Net</a></h4>
                        <p>maison appartement terrain <span class=\"cut\">mâcon Immobilier Macon.Net</span></p>
                    </article>
                </div>

                <div class=\"four columns omega\">
                    <article class=\"recent-blog\">
                        <section class=\"date\">
                            <span class=\"day\">15</span>
                            <span class=\"month\">Dec</span>
                        </section>
                        <h4><a href=\"\">Immobilier Macon.Net</a></h4>
                        <p>Immobilier Macon.Net<span class=\"cut\">Immobilier Macon.Net</span></p>
                    </article>
                </div>

            </div>

            <!-- Testimonials -->
            <div class=\"eight columns\">

                <h3 class=\"margin-1\">Testimonials <span>/ What Our Clients Say</span></h3>

                <!-- Testimonial Rotator -->
                <section class=\"flexslider testimonial-slider\">
                    <ul class=\"slides\">
                        <li class=\"testimonial\">
                            <div class=\"testimonials\">Le site Immobilier Macon.Net est Agent Immobilier au coeur de Mâcon 71
                                <br/>Achetez mieux, Louez moins cher
                                </h1>
                                <div>Le site <b>Immobilier Macon.Net</b><b>est</b> basé à <b>Mâcon</b> dans le département de la <b>Saône-et-Loire</b> <b>71 </b>, vous souhaite la bienvenue sur son site.<br/>
                                    Depuis 15 ans, le site Immobilier Macon.Net vous propose la <b>vente</b> et l'<b>achat</b> de tous vos <b>biens immobiliers</b> tels que des <i>maisons, appartements </i>ou <i>commerces</i>.<br/><br/>
                                    Spécialistes de la<b> location</b>, nous vous proposons des <b>appartements à louer</b>. Afin de réussir vos projets immobiliers en toute sécurité !<br/>
                                    Nous proposons de la <b>gestion immobilière </b>pour toutes <b>transactions immobilières</b> et <b>transactions commerciales</b>.<br/><br/><b>Évaluation gratuite</b> pour vendre, <b>honoraires réduits </b>pour louer.<br/><br/>
                                    Contactez notre <b>agence immobilière Immobilier Macon.Net</b> à <b>Mâcon  et Charnay-lès-Mâcon </b> et les environs , pour de plus renseignements concernant vos <b>biens immobiliers contactez nous au 03 85 22 09 08</b>.</div>
                            </div>
                            <div class=\"testimonials-bg\"></div>
                            <div class=\"testimonials-author\">Mâcon<span>Immobilier Macon.Net</span></div>
                        </li>

                        <li class=\"testimonial\">
                            <div class=\"testimonials\">Immobilier Macon.Net Immobilier Macon.Net</div>
                            <div class=\"testimonials-bg\"></div>
                            <div class=\"testimonials-author\">Immobilier Macon.Net<span>Immobilier Macon.Net</span></div>
                        </li>

                        <li class=\"testimonial\">
                            <div class=\"testimonials\">Immobilier Macon.Net Immobilier Macon.Net</div>
                            <div class=\"testimonials-bg\"></div>
                            <div class=\"testimonials-author\">Immobilier Macon.Net<span>Immobilier Macon.Net</span></div>
                        </li>

                        <li class=\"testimonial\">
                            <div class=\"testimonials\">Immobilier Macon.Net</div>
                            <div class=\"testimonials-bg\"></div>
                            <div class=\"testimonials-author\">Immobilier Macon.Net <span>Immobilier Macon.Net</span></div>
                        </li>
                    </ul>
                </section>
                <!-- Testomonial Rotator / End -->

            </div>

        </div>
        <!-- 960 Container / End -->

    </div>
    <!-- Content / End -->

</div>
<!-- Wrapper / End -->


<!-- Footer
================================================== -->

<!-- Footer / Start -->
<footer id=\"footer\">
    <!-- 960 Container -->
    <div class=\"container\">

        <!-- About -->
        <div class=\"four columns\">
            <img id=\"logo-footer\" src=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/portfolio/portfolio-06.jpg"), "html", null, true);
        echo "\" alt=\"\" />
            <p>Immobilier Macon.Net</p>

        </div>

        <!-- Contact Details -->
        <div class=\"four columns\">
            <h4>Contact</h4>
            <ul class=\"contact-details-alt\">
                <li><i class=\"halflings white map-marker\"></i> <p><strong>Addresse:</strong> 21 rue Gambetta 71000 MACON</p></li>
                <li><i class=\"halflings white user\"></i> <p><strong>Telephone:</strong> 03 85 22 09 08</p></li>
                <li><i class=\"halflings white envelope\"></i> <p><strong>Email:</strong> <a href=\"#\">Immobilier Macon.Net</a></p></li>
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
                © Copyright 2012 by <a href=\"#\">Immobilier Macon.Net</a>. Tout droit reserves.
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


<!-- Style Switcher
================================================== -->
<link href=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/css/switcher.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/switcher.js"), "html", null, true);
        echo "\" rel=\"javascript\"></script>

<section id=\"style-switcher\">
    <h2>Immobilier Macon.Net <a href=\"#\"></a></h2>
    <div>
        <h3>Immobilier Macon.Net</h3>
        <ul class=\"colors\" id=\"color1\">
            <li><a href=\"#\" class=\"blue\" title=\"Blue\"></a></li>
            <li><a href=\"#\" class=\"green\" title=\"Green\"></a></li>
            <li><a href=\"#\" class=\"orange\" title=\"Orange\"></a></li>
            <li><a href=\"#\" class=\"navy\" title=\"Navy\"></a></li>
            <li><a href=\"#\" class=\"yellow\" title=\"Yellow\"></a></li>
            <li><a href=\"#\" class=\"peach\" title=\"Peach\"></a></li>
            <li><a href=\"#\" class=\"beige\" title=\"Beige\"></a></li>
            <li><a href=\"#\" class=\"purple\" title=\"Purple\"></a></li>
            <li><a href=\"#\" class=\"red\" title=\"Red\"></a></li>
            <li><a href=\"#\" class=\"pink\" title=\"Pink\"></a></li>
            <li><a href=\"#\" class=\"celadon\" title=\"Celadon\"></a></li>
            <li><a href=\"#\" class=\"brown\" title=\"Brown\"></a></li>
            <li><a href=\"#\" class=\"cherry\" title=\"Cherry\"></a></li>
            <li><a href=\"#\" class=\"gray\" title=\"Gray\"></a></li>
            <li><a href=\"#\" class=\"dark\" title=\"Dark\"></a></li>
            <li><a href=\"#\" class=\"cyan\" title=\"Cyan\"></a></li>
            <li><a href=\"#\" class=\"olive\" title=\"Olive\"></a></li>
            <li><a href=\"#\" class=\"dirty-green\" title=\"Dirty Green\"></a></li>
        </ul>

        <h3>Menu</h3>
        <select id=\"menu-style\">
            <option value=\"1\">Style 1</option>
            <option value=\"2\">Style 2</option>
        </select>

        <h3>Immobilier Macon.Net</h3>
        <ul class=\"colors bg\" id=\"bg\">
            <li><a href=\"#\" class=\"bg1\"></a></li>
            <li><a href=\"#\" class=\"bg2\"></a></li>
            <li><a href=\"#\" class=\"bg3\"></a></li>
            <li><a href=\"#\" class=\"bg4\"></a></li>
            <li><a href=\"#\" class=\"bg5\"></a></li>
            <li><a href=\"#\" class=\"bg6\"></a></li>
            <li><a href=\"#\" class=\"bg7\"></a></li>
            <li><a href=\"#\" class=\"bg8\"></a></li>
            <li><a href=\"#\" class=\"bg9\"></a></li>
            <li><a href=\"#\" class=\"bg10\"></a></li>
            <li><a href=\"#\" class=\"bg11\"></a></li>
            <li><a href=\"#\" class=\"bg12\"></a></li>
            <li><a href=\"#\" class=\"bg13\"></a></li>
            <li><a href=\"#\" class=\"bg14\"></a></li>
            <li><a href=\"#\" class=\"bg15\"></a></li>
            <li><a href=\"#\" class=\"bg16\"></a></li>
            <li><a href=\"#\" class=\"bg17\"></a></li>
            <li><a href=\"#\" class=\"bg18\"></a></li>
        </ul>
    </div>

    <div id=\"reset\"><a href=\"#\" class=\"button color blue\">Reset</a></div>

</section>
<!-- Style Switcher / End -->
";
    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $this->displayParentBlock("header", $context, $blocks);
    }

    // line 23
    public function block_navigation($context, array $blocks = array())
    {
        $this->displayParentBlock("navigation", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "@Voyage/Layout/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 23,  431 => 12,  366 => 309,  362 => 308,  293 => 242,  179 => 131,  96 => 51,  89 => 47,  81 => 42,  73 => 37,  58 => 24,  56 => 23,  44 => 13,  42 => 12,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/*         <div id="top-line"></div>*/
/* */
/*         <!-- 960 Container -->*/
/*         <div class="container">*/
/* */
/*             <!-- Header -->*/
/*             {% block header %}{{ parent() }}{% endblock %}*/
/*             <!-- Header / End -->*/
/* */
/*             <div class="clearfix"></div>*/
/* */
/*         </div>*/
/*         <!-- 960 Container / End -->*/
/* */
/* */
/*         <!-- Navigation*/
/*         ================================================== -->*/
/*         {% block navigation %}{{ parent() }}{% endblock %}*/
/*         <div class="clearfix"></div>*/
/* */
/* */
/*         <!-- Content*/
/*         ================================================== -->*/
/* */
/* */
/*         <!-- LayerSlider  -->*/
/*         <section id="layerslider-container">	*/
/*             <div id="layerslider" style="width: 1020px; height: 450px; margin: 0 auto;">*/
/* */
/*                 <!-- Slide 1 -->*/
/*                 <article class="ls-layer" style="slideDelay: 10000; slidedirection: left;">*/
/*                     <img src="{{ asset('bundles/voyage/images/01.jpg') }}" class="ls-bg" alt="">*/
/*                 </article>*/
/* */
/*                 <!-- Slide 2 -->*/
/*                 <article class="ls-layer" style="slideDelay: 10000; slidedirection: top;">*/
/*                     <img src="{{ asset('bundles/voyage/images/02.jpg') }}" class="ls-bg">*/
/*                 </article>*/
/* */
/*                 <!-- Slide 3 -->*/
/*                 <article class="ls-layer" style="slideDelay: 10000; slidedirection: right; ">*/
/*                     <img src="{{ asset('bundles/voyage/images/03.jpg') }}" class="ls-bg">*/
/*                 </article>*/
/* */
/*                 <article class="ls-layer" style="slideDelay: 10000; slidedirection: bottom;">*/
/*                     <img src="{{ asset('bundles/voyage/images/04.jpg') }}" class="ls-bg">*/
/*                 </article>*/
/* */
/*             </div>					*/
/*         </section>*/
/*         <!-- LayerSlider / End -->*/
/* */
/* */
/*         <!-- 960 Container -->*/
/*         <div class="container">*/
/* */
/*             <!-- Icon Boxes -->*/
/*             <section class="icon-box-container">*/
/* */
/*                 <form class="form-inline" role="form" id="" action="" method="post">*/
/*                     <h3>Rechercher votre séjour</h3><hr>*/
/*                         <label for="depart">Au départ de : </label>*/
/*                         <div class="form-group">*/
/*                             <select class="form-control" name="category">*/
/*                                 <option value="">Paris</option>*/
/*                                 <option value="0">Marseille</option>*/
/*                                 <option value="1">Bordeaux</option>*/
/*                                 <option value="2">Lille</option>*/
/*                             </select>           */
/*                         </div>*/
/*                         */
/*                         <label for="arrivé">Destination : </label>*/
/*                         <div class="form-group">*/
/*                             <select class="form-control" name="category">*/
/*                                 <option value="">New-York</option>*/
/*                                 <option value="0">Tokyo</option>*/
/*                                 <option value="1">Montreal</option>*/
/*                                 <option value="2">Le Caire</option>*/
/*                             </select>           */
/*                         </div>*/
/*                         */
/*                         <div class="form-group">*/
/*                             <label for="date_debut">Du :</label>*/
/*                             <input type="date" max="2017-12-31" min="2015-01-01" name="date_debut">*/
/*                         </div>*/
/*                         */
/*                          <div class="form-group">*/
/*                             <label for="date_fin">Au :</label>*/
/*                             <input type="date" max="2012-06-25" min="2011-08-13" name="date_fin">*/
/*                         </div>*/
/*                         */
/*                         <br>*/
/*                         */
/*                         <div class="form-group">*/
/*                             <label for="duree">Durée :</label>*/
/*                             <input type="duree" class="form-control" id="duree" placeholder="Durée">*/
/*                         </div>*/
/*                         */
/*                         */
/*                         */
/*                         <div class="form-group">*/
/*                             <label for="prix">Budget:</label>*/
/*                             <input type="prix" class="form-control" id="prix" placeholder="Votre Budget">*/
/*                         </div>*/
/*                 </form>*/
/* */
/* */
/*             </section>*/
/*             <!-- Icon Boxes / End -->*/
/* */
/*         </div>*/
/*         <!-- 960 Container / End -->*/
/* */
/* */
/*         <!-- 960 Container -->*/
/*         <div class="container floated">*/
/*             <div class="blank floated">*/
/* */
/*                */
/* */
/*                 <!-- jCarousel -->*/
/*                 <section class="jcarousel recent-work-jc">*/
/*                     <h3>Nos promotions</h3>*/
/*                    <div class="image_carousel">*/
/* 	<div id="foo1">*/
/* 		<img src="{{ asset('bundles/voyage/images/04.jpg') }}" alt="basketball" width="140" height="140" />*/
/* 		*/
/* 	</div>*/
/* 	<div class="clearfix"></div>*/
/* </div>*/
/* */
/*                 </section>*/
/*                 <!-- jCarousel / End -->*/
/* */
/*             </div>*/
/*         </div>*/
/*         <!-- 960 Container / End -->*/
/* */
/* */
/*         <!-- 960 Container -->*/
/*         <div class="container">*/
/* */
/*             <!-- Recent News -->*/
/*             <div class="eight columns">*/
/* */
/*                 <h3 class="margin-1">News <span>/ Immobilier Macon.Net</span></h3>*/
/* */
/*                 <div class="four columns alpha">*/
/*                     <article class="recent-blog">*/
/*                         <section class="date">*/
/*                             <span class="day">28</span>*/
/*                             <span class="month">Dec</span>*/
/*                         </section>*/
/*                         <h4><a href="">Immobilier Macon.Net Immobilier Macon.Net</a></h4>*/
/*                         <p>maison appartement terrain <span class="cut">mâcon Immobilier Macon.Net</span></p>*/
/*                     </article>*/
/*                 </div>*/
/* */
/*                 <div class="four columns omega">*/
/*                     <article class="recent-blog">*/
/*                         <section class="date">*/
/*                             <span class="day">15</span>*/
/*                             <span class="month">Dec</span>*/
/*                         </section>*/
/*                         <h4><a href="">Immobilier Macon.Net</a></h4>*/
/*                         <p>Immobilier Macon.Net<span class="cut">Immobilier Macon.Net</span></p>*/
/*                     </article>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*             <!-- Testimonials -->*/
/*             <div class="eight columns">*/
/* */
/*                 <h3 class="margin-1">Testimonials <span>/ What Our Clients Say</span></h3>*/
/* */
/*                 <!-- Testimonial Rotator -->*/
/*                 <section class="flexslider testimonial-slider">*/
/*                     <ul class="slides">*/
/*                         <li class="testimonial">*/
/*                             <div class="testimonials">Le site Immobilier Macon.Net est Agent Immobilier au coeur de Mâcon 71*/
/*                                 <br/>Achetez mieux, Louez moins cher*/
/*                                 </h1>*/
/*                                 <div>Le site <b>Immobilier Macon.Net</b><b>est</b> basé à <b>Mâcon</b> dans le département de la <b>Saône-et-Loire</b> <b>71 </b>, vous souhaite la bienvenue sur son site.<br/>*/
/*                                     Depuis 15 ans, le site Immobilier Macon.Net vous propose la <b>vente</b> et l'<b>achat</b> de tous vos <b>biens immobiliers</b> tels que des <i>maisons, appartements </i>ou <i>commerces</i>.<br/><br/>*/
/*                                     Spécialistes de la<b> location</b>, nous vous proposons des <b>appartements à louer</b>. Afin de réussir vos projets immobiliers en toute sécurité !<br/>*/
/*                                     Nous proposons de la <b>gestion immobilière </b>pour toutes <b>transactions immobilières</b> et <b>transactions commerciales</b>.<br/><br/><b>Évaluation gratuite</b> pour vendre, <b>honoraires réduits </b>pour louer.<br/><br/>*/
/*                                     Contactez notre <b>agence immobilière Immobilier Macon.Net</b> à <b>Mâcon  et Charnay-lès-Mâcon </b> et les environs , pour de plus renseignements concernant vos <b>biens immobiliers contactez nous au 03 85 22 09 08</b>.</div>*/
/*                             </div>*/
/*                             <div class="testimonials-bg"></div>*/
/*                             <div class="testimonials-author">Mâcon<span>Immobilier Macon.Net</span></div>*/
/*                         </li>*/
/* */
/*                         <li class="testimonial">*/
/*                             <div class="testimonials">Immobilier Macon.Net Immobilier Macon.Net</div>*/
/*                             <div class="testimonials-bg"></div>*/
/*                             <div class="testimonials-author">Immobilier Macon.Net<span>Immobilier Macon.Net</span></div>*/
/*                         </li>*/
/* */
/*                         <li class="testimonial">*/
/*                             <div class="testimonials">Immobilier Macon.Net Immobilier Macon.Net</div>*/
/*                             <div class="testimonials-bg"></div>*/
/*                             <div class="testimonials-author">Immobilier Macon.Net<span>Immobilier Macon.Net</span></div>*/
/*                         </li>*/
/* */
/*                         <li class="testimonial">*/
/*                             <div class="testimonials">Immobilier Macon.Net</div>*/
/*                             <div class="testimonials-bg"></div>*/
/*                             <div class="testimonials-author">Immobilier Macon.Net <span>Immobilier Macon.Net</span></div>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </section>*/
/*                 <!-- Testomonial Rotator / End -->*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <!-- 960 Container / End -->*/
/* */
/*     </div>*/
/*     <!-- Content / End -->*/
/* */
/* </div>*/
/* <!-- Wrapper / End -->*/
/* */
/* */
/* <!-- Footer*/
/* ================================================== -->*/
/* */
/* <!-- Footer / Start -->*/
/* <footer id="footer">*/
/*     <!-- 960 Container -->*/
/*     <div class="container">*/
/* */
/*         <!-- About -->*/
/*         <div class="four columns">*/
/*             <img id="logo-footer" src="{{ asset('bundles/voyage/images/portfolio/portfolio-06.jpg') }}" alt="" />*/
/*             <p>Immobilier Macon.Net</p>*/
/* */
/*         </div>*/
/* */
/*         <!-- Contact Details -->*/
/*         <div class="four columns">*/
/*             <h4>Contact</h4>*/
/*             <ul class="contact-details-alt">*/
/*                 <li><i class="halflings white map-marker"></i> <p><strong>Addresse:</strong> 21 rue Gambetta 71000 MACON</p></li>*/
/*                 <li><i class="halflings white user"></i> <p><strong>Telephone:</strong> 03 85 22 09 08</p></li>*/
/*                 <li><i class="halflings white envelope"></i> <p><strong>Email:</strong> <a href="#">Immobilier Macon.Net</a></p></li>*/
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
/*                 © Copyright 2012 by <a href="#">Immobilier Macon.Net</a>. Tout droit reserves.*/
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
/* */
/* <!-- Style Switcher*/
/* ================================================== -->*/
/* <link href="{{ asset('bundles/voyage/css/switcher.css') }}" rel="stylesheet">*/
/* <script src="{{ asset('bundles/voyage/scripts/switcher.js') }}" rel="javascript"></script>*/
/* */
/* <section id="style-switcher">*/
/*     <h2>Immobilier Macon.Net <a href="#"></a></h2>*/
/*     <div>*/
/*         <h3>Immobilier Macon.Net</h3>*/
/*         <ul class="colors" id="color1">*/
/*             <li><a href="#" class="blue" title="Blue"></a></li>*/
/*             <li><a href="#" class="green" title="Green"></a></li>*/
/*             <li><a href="#" class="orange" title="Orange"></a></li>*/
/*             <li><a href="#" class="navy" title="Navy"></a></li>*/
/*             <li><a href="#" class="yellow" title="Yellow"></a></li>*/
/*             <li><a href="#" class="peach" title="Peach"></a></li>*/
/*             <li><a href="#" class="beige" title="Beige"></a></li>*/
/*             <li><a href="#" class="purple" title="Purple"></a></li>*/
/*             <li><a href="#" class="red" title="Red"></a></li>*/
/*             <li><a href="#" class="pink" title="Pink"></a></li>*/
/*             <li><a href="#" class="celadon" title="Celadon"></a></li>*/
/*             <li><a href="#" class="brown" title="Brown"></a></li>*/
/*             <li><a href="#" class="cherry" title="Cherry"></a></li>*/
/*             <li><a href="#" class="gray" title="Gray"></a></li>*/
/*             <li><a href="#" class="dark" title="Dark"></a></li>*/
/*             <li><a href="#" class="cyan" title="Cyan"></a></li>*/
/*             <li><a href="#" class="olive" title="Olive"></a></li>*/
/*             <li><a href="#" class="dirty-green" title="Dirty Green"></a></li>*/
/*         </ul>*/
/* */
/*         <h3>Menu</h3>*/
/*         <select id="menu-style">*/
/*             <option value="1">Style 1</option>*/
/*             <option value="2">Style 2</option>*/
/*         </select>*/
/* */
/*         <h3>Immobilier Macon.Net</h3>*/
/*         <ul class="colors bg" id="bg">*/
/*             <li><a href="#" class="bg1"></a></li>*/
/*             <li><a href="#" class="bg2"></a></li>*/
/*             <li><a href="#" class="bg3"></a></li>*/
/*             <li><a href="#" class="bg4"></a></li>*/
/*             <li><a href="#" class="bg5"></a></li>*/
/*             <li><a href="#" class="bg6"></a></li>*/
/*             <li><a href="#" class="bg7"></a></li>*/
/*             <li><a href="#" class="bg8"></a></li>*/
/*             <li><a href="#" class="bg9"></a></li>*/
/*             <li><a href="#" class="bg10"></a></li>*/
/*             <li><a href="#" class="bg11"></a></li>*/
/*             <li><a href="#" class="bg12"></a></li>*/
/*             <li><a href="#" class="bg13"></a></li>*/
/*             <li><a href="#" class="bg14"></a></li>*/
/*             <li><a href="#" class="bg15"></a></li>*/
/*             <li><a href="#" class="bg16"></a></li>*/
/*             <li><a href="#" class="bg17"></a></li>*/
/*             <li><a href="#" class="bg18"></a></li>*/
/*         </ul>*/
/*     </div>*/
/* */
/*     <div id="reset"><a href="#" class="button color blue">Reset</a></div>*/
/* */
/* </section>*/
/* <!-- Style Switcher / End -->*/
/* {% endblock %}*/
