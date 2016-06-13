<?php

/* VoyageBundle:Layout:accueil.html.twig */
class __TwigTemplate_d9ef3747c102b09d0fc77216d382afdccf8f91a13f10cad457a2ac6b5fbb9e0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "VoyageBundle:Layout:accueil.html.twig", 1);
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
        $__internal_19d2ffac8f5e6a0e6f357303996b179188173f18413f38d4d0e7c98411dd6500 = $this->env->getExtension("native_profiler");
        $__internal_19d2ffac8f5e6a0e6f357303996b179188173f18413f38d4d0e7c98411dd6500->enter($__internal_19d2ffac8f5e6a0e6f357303996b179188173f18413f38d4d0e7c98411dd6500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VoyageBundle:Layout:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19d2ffac8f5e6a0e6f357303996b179188173f18413f38d4d0e7c98411dd6500->leave($__internal_19d2ffac8f5e6a0e6f357303996b179188173f18413f38d4d0e7c98411dd6500_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8783bde6657b987d246c5cc081c6c90dace8952160e2b2c6cbafea1e9439f4ae = $this->env->getExtension("native_profiler");
        $__internal_8783bde6657b987d246c5cc081c6c90dace8952160e2b2c6cbafea1e9439f4ae->enter($__internal_8783bde6657b987d246c5cc081c6c90dace8952160e2b2c6cbafea1e9439f4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <div class=\"carrousel\" id=\"big_carrousel\">
                    <div class=\"vignette\">
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

                    <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <div class=\"info\">info</div>
                    </div>

                    <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                        <div class=\"info\">info</div>
                    </div>

                    <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 223
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

                    <div class=\"vignette\">
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


                <h3>Top 3 des ventes</h3>
                
                     <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>
                        
                         <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>
                        
                         <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>

            </div>

        </div>
        <div class=\"clearfix\"></div>
        
         <div class=\"container floated grey \">
            <div class=\"blank floated grey\">


                <h3>Nouveautés</h3>
              
                   
                     <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>
                        
                         <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>
                        
                         <div class=\"vignette\">
                        <a href=\"#\">
                            <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                        </a>
                         <div class=\"info\">info</div>
                    </div>
            </div>

        </div>
        <div class=\"clearfix\"></div>

    </div>
    <!-- Content / End -->

</div>
<!-- Wrapper / End -->



";
        
        $__internal_8783bde6657b987d246c5cc081c6c90dace8952160e2b2c6cbafea1e9439f4ae->leave($__internal_8783bde6657b987d246c5cc081c6c90dace8952160e2b2c6cbafea1e9439f4ae_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_d47c654186ff6422efde37808009ab4822eea7bd33779632a79e1fa5682b0cf6 = $this->env->getExtension("native_profiler");
        $__internal_d47c654186ff6422efde37808009ab4822eea7bd33779632a79e1fa5682b0cf6->enter($__internal_d47c654186ff6422efde37808009ab4822eea7bd33779632a79e1fa5682b0cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $this->displayParentBlock("header", $context, $blocks);
        
        $__internal_d47c654186ff6422efde37808009ab4822eea7bd33779632a79e1fa5682b0cf6->leave($__internal_d47c654186ff6422efde37808009ab4822eea7bd33779632a79e1fa5682b0cf6_prof);

    }

    // line 23
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ec91551072e4b0bfc24fc89eef6c94428c181094d609b8cdc3bd293375e49a5e = $this->env->getExtension("native_profiler");
        $__internal_ec91551072e4b0bfc24fc89eef6c94428c181094d609b8cdc3bd293375e49a5e->enter($__internal_ec91551072e4b0bfc24fc89eef6c94428c181094d609b8cdc3bd293375e49a5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $this->displayParentBlock("navigation", $context, $blocks);
        
        $__internal_ec91551072e4b0bfc24fc89eef6c94428c181094d609b8cdc3bd293375e49a5e->leave($__internal_ec91551072e4b0bfc24fc89eef6c94428c181094d609b8cdc3bd293375e49a5e_prof);

    }

    public function getTemplateName()
    {
        return "VoyageBundle:Layout:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  446 => 23,  434 => 12,  409 => 298,  399 => 291,  389 => 284,  367 => 265,  357 => 258,  347 => 251,  323 => 230,  313 => 223,  303 => 216,  293 => 209,  283 => 202,  273 => 195,  263 => 188,  253 => 181,  243 => 174,  233 => 167,  223 => 160,  209 => 149,  189 => 132,  105 => 51,  98 => 47,  90 => 42,  82 => 37,  67 => 24,  65 => 23,  53 => 13,  51 => 12,  42 => 5,  36 => 4,  11 => 1,);
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
/*                 <div class="carrousel" id="big_carrousel">*/
/*                     <div class="vignette">*/
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
/*                     <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                         <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*                     <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/*                 </div>*/
/*                         */
/*                         <div id="pagination"></div>*/
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
/*                 <h3>Top 3 des ventes</h3>*/
/*                 */
/*                      <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/*                         */
/*                          <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/*                         */
/*                          <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         */
/*          <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/* */
/* */
/*                 <h3>Nouveautés</h3>*/
/*               */
/*                    */
/*                      <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/*                         */
/*                          <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
/*                         */
/*                          <div class="vignette">*/
/*                         <a href="#">*/
/*                             <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                         </a>*/
/*                          <div class="info">info</div>*/
/*                     </div>*/
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
/* */
/* {% endblock %}*/
