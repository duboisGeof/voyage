<?php

/* @Voyage/Layout/accueil.html.twig */
class __TwigTemplate_f2551cf693ec4448bb90ecb052d72cee4789b88a5e32eb2d2acf9f3bd5a7adcb extends Twig_Template
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
        $__internal_d1a3c27e66689602ddcf1aebd314435002dad688cb485b6baf40e7de80ccc14f = $this->env->getExtension("native_profiler");
        $__internal_d1a3c27e66689602ddcf1aebd314435002dad688cb485b6baf40e7de80ccc14f->enter($__internal_d1a3c27e66689602ddcf1aebd314435002dad688cb485b6baf40e7de80ccc14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Voyage/Layout/accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1a3c27e66689602ddcf1aebd314435002dad688cb485b6baf40e7de80ccc14f->leave($__internal_d1a3c27e66689602ddcf1aebd314435002dad688cb485b6baf40e7de80ccc14f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_23a8da029838977b4c27b0158f4d8b2f4aceb9e6f4804a6d86ca54343f576254 = $this->env->getExtension("native_profiler");
        $__internal_23a8da029838977b4c27b0158f4d8b2f4aceb9e6f4804a6d86ca54343f576254->enter($__internal_23a8da029838977b4c27b0158f4d8b2f4aceb9e6f4804a6d86ca54343f576254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"clearfix\"></div>
        <!-- LayerSlider / End -->


        <!-- 960 Container -->
        <div class=\"container\">

            <!-- Icon Boxes -->


            <form role=\"form\" id=\"\" action=\"\" method=\"post\">
                <h3>Rechercher votre séjour</h3><hr>


                <div class=\"form-group\">
                    <label for=\"depart\">Au départ de : </label>
                    <select class=\"form-control\" name=\"category\">
                        <option value=\"\">Paris</option>
                        <option value=\"0\">Marseille</option>
                        <option value=\"1\">Bordeaux</option>
                        <option value=\"2\">Lille</option>
                    </select>           
                </div>


                <div class=\"form-group\">
                    <label for=\"arrivé\">Destination : </label>
                    <select class=\"form-control\" name=\"category\">
                        <option value=\"\">New-York</option>
                        <option value=\"0\">Tokyo</option>
                        <option value=\"1\">Montreal</option>
                        <option value=\"2\">Le Caire</option>
                    </select>           
                </div>

                <div class=\"form-group\">
                    <label for=\"date_debut\">Du :</label>
                    <input class=\"form-control\" type=\"date\" max=\"2017-12-31\" min=\"2015-01-01\" name=\"date_debut\">
                </div>

                <div class=\"form-group\">
                    <label for=\"date_fin\">Au :</label>
                    <input class=\"form-control\" type=\"date\" max=\"2012-06-25\" min=\"2011-08-13\" name=\"date_fin\">
                </div>




                <div class=\"form-group\">
                    <label for=\"duree\">Durée :</label>
                    <input type=\"text\" class=\"form-control\" id=\"duree\" placeholder=\"Durée\">
                </div>



                <div class=\"form-group\">
                    <label for=\"prix\">Budget:</label>
                    <input type=\"text\" class=\"form-control\" id=\"prix\" placeholder=\"Votre Budget\">
                </div>


                <br>
                <button type=\"submit\" class=\"btn btn-success\">Rechercher</button>

            </form>

            <div class=\"clearfix\"></div>

            <!-- -->

        </div>
        <!-- 960 Container / End 
        
        
          <div class=\"slide\">
               
                                <img src=\"";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/04.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                     
                            <span class=\"info\">lol</span>
                        </div>
        
        
        
        -->

        <div class=\"container floated grey \">
            <div class=\"blank floated grey\">


                <h3>Nos promotions</h3>
                <div class=\"carrousel\" id=\"carrousel\">
                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <div class=\"info\">
                            <h5>Information pays</h5>
                            <a href=\"#\">Lien promotion</a>
                            <p>prix promotion<span class=\"prix\">1500€</span></p>
                        </div>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <div class=\"info\">info</div>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <div class=\"info\">info</div>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>
                </div>
                <div id=\"pagination\"></div>
            </div>

        </div>
        <div class=\"clearfix\"></div>


       <div class=\"container floated grey \">
            <div class=\"blank floated grey\">


                <h3>Nos promotions</h3>
                <div class=\"carrousel\" id=\"carrousel2\">
                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">loooooooooooooooooooool</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>
                </div>
                <div id=\"pagination\"></div>
            </div>

        </div>
        <div class=\"clearfix\"></div>
        
         <div class=\"container floated grey \">
            <div class=\"blank floated grey\">


                <h3>Nos promotions</h3>
                <div class=\"carrousel\" id=\"carrousel3\">
                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>

                    <div class=\"lol\">
                        <a href=\"#\">
                            <img src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <span class=\"info\">info</span>
                    </div>
                </div>
                <div id=\"pagination\"></div>
            </div>

        </div>
        <div class=\"clearfix\"></div>

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
        // line 451
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
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/css/switcher.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<script src=\"";
        // line 517
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
        
        $__internal_23a8da029838977b4c27b0158f4d8b2f4aceb9e6f4804a6d86ca54343f576254->leave($__internal_23a8da029838977b4c27b0158f4d8b2f4aceb9e6f4804a6d86ca54343f576254_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_183e587a70c963778d3ff72d71d0f4ba67ab3873f8a180cd5785b3d7c2b9efb6 = $this->env->getExtension("native_profiler");
        $__internal_183e587a70c963778d3ff72d71d0f4ba67ab3873f8a180cd5785b3d7c2b9efb6->enter($__internal_183e587a70c963778d3ff72d71d0f4ba67ab3873f8a180cd5785b3d7c2b9efb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $this->displayParentBlock("header", $context, $blocks);
        
        $__internal_183e587a70c963778d3ff72d71d0f4ba67ab3873f8a180cd5785b3d7c2b9efb6->leave($__internal_183e587a70c963778d3ff72d71d0f4ba67ab3873f8a180cd5785b3d7c2b9efb6_prof);

    }

    // line 23
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_46bc4b30b98512a1dffb1b27e0ca358c4c9373aea3fefd5ebe0c84475beb3d72 = $this->env->getExtension("native_profiler");
        $__internal_46bc4b30b98512a1dffb1b27e0ca358c4c9373aea3fefd5ebe0c84475beb3d72->enter($__internal_46bc4b30b98512a1dffb1b27e0ca358c4c9373aea3fefd5ebe0c84475beb3d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $this->displayParentBlock("navigation", $context, $blocks);
        
        $__internal_46bc4b30b98512a1dffb1b27e0ca358c4c9373aea3fefd5ebe0c84475beb3d72->leave($__internal_46bc4b30b98512a1dffb1b27e0ca358c4c9373aea3fefd5ebe0c84475beb3d72_prof);

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
        return array (  771 => 23,  759 => 12,  691 => 517,  687 => 516,  619 => 451,  588 => 423,  578 => 416,  568 => 409,  558 => 402,  548 => 395,  538 => 388,  528 => 381,  518 => 374,  508 => 367,  498 => 360,  488 => 353,  478 => 346,  456 => 327,  446 => 320,  436 => 313,  426 => 306,  416 => 299,  406 => 292,  396 => 285,  386 => 278,  376 => 271,  366 => 264,  356 => 257,  346 => 250,  323 => 230,  313 => 223,  303 => 216,  293 => 209,  283 => 202,  273 => 195,  263 => 188,  253 => 181,  243 => 174,  233 => 167,  223 => 160,  209 => 149,  189 => 132,  105 => 51,  98 => 47,  90 => 42,  82 => 37,  67 => 24,  65 => 23,  53 => 13,  51 => 12,  42 => 5,  36 => 4,  11 => 1,);
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
/*         <div class="clearfix"></div>*/
/*         <!-- LayerSlider / End -->*/
/* */
/* */
/*         <!-- 960 Container -->*/
/*         <div class="container">*/
/* */
/*             <!-- Icon Boxes -->*/
/* */
/* */
/*             <form role="form" id="" action="" method="post">*/
/*                 <h3>Rechercher votre séjour</h3><hr>*/
/* */
/* */
/*                 <div class="form-group">*/
/*                     <label for="depart">Au départ de : </label>*/
/*                     <select class="form-control" name="category">*/
/*                         <option value="">Paris</option>*/
/*                         <option value="0">Marseille</option>*/
/*                         <option value="1">Bordeaux</option>*/
/*                         <option value="2">Lille</option>*/
/*                     </select>           */
/*                 </div>*/
/* */
/* */
/*                 <div class="form-group">*/
/*                     <label for="arrivé">Destination : </label>*/
/*                     <select class="form-control" name="category">*/
/*                         <option value="">New-York</option>*/
/*                         <option value="0">Tokyo</option>*/
/*                         <option value="1">Montreal</option>*/
/*                         <option value="2">Le Caire</option>*/
/*                     </select>           */
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="date_debut">Du :</label>*/
/*                     <input class="form-control" type="date" max="2017-12-31" min="2015-01-01" name="date_debut">*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="date_fin">Au :</label>*/
/*                     <input class="form-control" type="date" max="2012-06-25" min="2011-08-13" name="date_fin">*/
/*                 </div>*/
/* */
/* */
/* */
/* */
/*                 <div class="form-group">*/
/*                     <label for="duree">Durée :</label>*/
/*                     <input type="text" class="form-control" id="duree" placeholder="Durée">*/
/*                 </div>*/
/* */
/* */
/* */
/*                 <div class="form-group">*/
/*                     <label for="prix">Budget:</label>*/
/*                     <input type="text" class="form-control" id="prix" placeholder="Votre Budget">*/
/*                 </div>*/
/* */
/* */
/*                 <br>*/
/*                 <button type="submit" class="btn btn-success">Rechercher</button>*/
/* */
/*             </form>*/
/* */
/*             <div class="clearfix"></div>*/
/* */
/*             <!-- -->*/
/* */
/*         </div>*/
/*         <!-- 960 Container / End */
/*         */
/*         */
/*           <div class="slide">*/
/*                */
/*                                 <img src="{{ asset('bundles/voyage/images/04.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                      */
/*                             <span class="info">lol</span>*/
/*                         </div>*/
/*         */
/*         */
/*         */
/*         -->*/
/* */
/*         <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/* */
/* */
/*                 <h3>Nos promotions</h3>*/
/*                 <div class="carrousel" id="carrousel">*/
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <div class="info">*/
/*                             <h5>Information pays</h5>*/
/*                             <a href="#">Lien promotion</a>*/
/*                             <p>prix promotion<span class="prix">1500€</span></p>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="pagination"></div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/* */
/* */
/*        <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/* */
/* */
/*                 <h3>Nos promotions</h3>*/
/*                 <div class="carrousel" id="carrousel2">*/
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">loooooooooooooooooooool</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="pagination"></div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         */
/*          <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/* */
/* */
/*                 <h3>Nos promotions</h3>*/
/*                 <div class="carrousel" id="carrousel3">*/
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/* */
/*                     <div class="lol">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <span class="info">info</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div id="pagination"></div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
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
