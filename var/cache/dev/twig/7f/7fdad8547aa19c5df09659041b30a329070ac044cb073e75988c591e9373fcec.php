<?php

/* VoyageBundle:Layout:circuit.html.twig */
class __TwigTemplate_4fabc22c7d3f2251a92a7ed213bd37c911a95cb8a76b1586d82510f25908db1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "VoyageBundle:Layout:circuit.html.twig", 1);
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
        $__internal_cf8f6b08090227a7f9142b2eb086b40740e6783ddc0ee2f87032c3b84ecda8fe = $this->env->getExtension("native_profiler");
        $__internal_cf8f6b08090227a7f9142b2eb086b40740e6783ddc0ee2f87032c3b84ecda8fe->enter($__internal_cf8f6b08090227a7f9142b2eb086b40740e6783ddc0ee2f87032c3b84ecda8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VoyageBundle:Layout:circuit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf8f6b08090227a7f9142b2eb086b40740e6783ddc0ee2f87032c3b84ecda8fe->leave($__internal_cf8f6b08090227a7f9142b2eb086b40740e6783ddc0ee2f87032c3b84ecda8fe_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a72bc77b05c10369c740018ac0becbc9388333ca959571d80f2337bdeabadd5 = $this->env->getExtension("native_profiler");
        $__internal_2a72bc77b05c10369c740018ac0becbc9388333ca959571d80f2337bdeabadd5->enter($__internal_2a72bc77b05c10369c740018ac0becbc9388333ca959571d80f2337bdeabadd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div class=\"map\">
            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/bg_circuit.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" usemap=\"#Map\" />
        </div>
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

        <div class=\"container floated grey big_container\">
            <div class=\"blank floated grey\">
                <h3 class=\"text-left \">Nos Meilleurs Circuits</h3> 

                <div class=\"description\">
                    <p class=\"text-justify\">
                        Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.
                    </p>
                </div>

                <div class=\"vignette\">
                    <a href=\"#\">
                        <img src=\"";
        // line 119
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
        // line 129
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
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">
                        <h5>Information pays</h5>
                        <a href=\"#\">Lien promotion</a>
                        <p>prix promotion<span class=\"prix\">1500€</span></p>
                    </div>
                </div>

                <div class=\"vignette margin-top\">
                    <a href=\"#\">
                        <img src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">
                        <h5>Information pays</h5>
                        <a href=\"#\">Lien promotion</a>
                        <p>prix promotion<span class=\"prix\">1500€</span></p>
                    </div>
                </div>

                <div class=\"vignette margin-top\">
                    <a href=\"#\">
                        <img src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">
                        <h5>Information pays</h5>
                        <a href=\"#\">Lien promotion</a>
                        <p>prix promotion<span class=\"prix\">1500€</span></p>
                    </div>
                </div>

                <div class=\"vignette margin-top\">
                    <a href=\"#\">
                        <img src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">
                        <h5>Information pays</h5>
                        <a href=\"#\">Lien promotion</a>
                        <p>prix promotion<span class=\"prix\">1500€</span></p>
                    </div>
                </div>

            </div>

        </div>
        <div class=\"clearfix\"></div>


        <div class=\"container floated grey \">
            <div class=\"blank floated grey\">
                <h3 class=\"text-left \">Amerique Centrale</h3> 

                <div class=\"description\">
                    <p class=\"text-justify\">
                        Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.
                    </p>
                </div>
                <div class=\"block_vignette\">
                <div class=\"vignette four\">
                    <a href=\"#\">
                        <img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">
                        <h5>Amérique</h5>
                        <a href=\"#\">Lien promotion</a><br>
                        <a href=\"#\">Lien promotion</a><br>
                        <a href=\"#\">Lien promotion</a><br>
                    </div>
                </div>
                <div class=\"vignette four\">
                    <a href=\"#\">
                        <img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">
                        <h5>Europe</h5>
                        <a href=\"#\">Lien promotion</a><br>
                        <a href=\"#\">Lien promotion</a><br>
                        <a href=\"#\">Lien promotion</a><br>
                    </div>
                </div>
                <div class=\"vignette four \">
                    <a href=\"#\">
                        <img src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                     <div class=\"info\">
                        <h5>Afrique</h5>
                        <a href=\"#\">Lien promotion</a><br>
                        <a href=\"#\">Lien promotion</a><br>
                        <a href=\"#\">Lien promotion</a><br>
                    </div>
                </div>
                    
                <div class=\"vignette four \">
                    <a href=\"#\">
                        <img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                     <div class=\"info\">
                        <h5>Asie / Océanie</h5>
                        <a href=\"#\">Lien promotion</a><br>
                        <a href=\"#\">Lien promotion</a><br>
                        <a href=\"#\">Lien promotion</a><br>
                    </div>
                </div>
                </div>
            </div>

        </div>
        <div class=\"clearfix\"></div>















    </div>
    <!-- Content / End -->

</div>
<!-- Wrapper / End -->



";
        
        $__internal_2a72bc77b05c10369c740018ac0becbc9388333ca959571d80f2337bdeabadd5->leave($__internal_2a72bc77b05c10369c740018ac0becbc9388333ca959571d80f2337bdeabadd5_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_c0d72cbe64f737b8f1cbd4bb63aceceb805d199af4189db6286e924a4b3f74a9 = $this->env->getExtension("native_profiler");
        $__internal_c0d72cbe64f737b8f1cbd4bb63aceceb805d199af4189db6286e924a4b3f74a9->enter($__internal_c0d72cbe64f737b8f1cbd4bb63aceceb805d199af4189db6286e924a4b3f74a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $this->displayParentBlock("header", $context, $blocks);
        
        $__internal_c0d72cbe64f737b8f1cbd4bb63aceceb805d199af4189db6286e924a4b3f74a9->leave($__internal_c0d72cbe64f737b8f1cbd4bb63aceceb805d199af4189db6286e924a4b3f74a9_prof);

    }

    // line 23
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2e48457d55d873fe151bde6b07eea6354c966f445fba29a4c634ca9fc34efb83 = $this->env->getExtension("native_profiler");
        $__internal_2e48457d55d873fe151bde6b07eea6354c966f445fba29a4c634ca9fc34efb83->enter($__internal_2e48457d55d873fe151bde6b07eea6354c966f445fba29a4c634ca9fc34efb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $this->displayParentBlock("navigation", $context, $blocks);
        
        $__internal_2e48457d55d873fe151bde6b07eea6354c966f445fba29a4c634ca9fc34efb83->leave($__internal_2e48457d55d873fe151bde6b07eea6354c966f445fba29a4c634ca9fc34efb83_prof);

    }

    public function getTemplateName()
    {
        return "VoyageBundle:Layout:circuit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 23,  353 => 12,  308 => 233,  293 => 221,  279 => 210,  265 => 199,  235 => 172,  221 => 161,  207 => 150,  193 => 139,  180 => 129,  167 => 119,  78 => 33,  67 => 24,  65 => 23,  53 => 13,  51 => 12,  42 => 5,  36 => 4,  11 => 1,);
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
/*         <div class="map">*/
/*             <img src="{{ asset('bundles/voyage/images/bg_circuit.jpg') }}" alt="basketball" usemap="#Map" />*/
/*         </div>*/
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
/* */
/*         <div class="container floated grey big_container">*/
/*             <div class="blank floated grey">*/
/*                 <h3 class="text-left ">Nos Meilleurs Circuits</h3> */
/* */
/*                 <div class="description">*/
/*                     <p class="text-justify">*/
/*                         Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div class="vignette">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">*/
/*                         <h5>Information pays</h5>*/
/*                         <a href="#">Lien promotion</a>*/
/*                         <p>prix promotion<span class="prix">1500€</span></p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="vignette">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">*/
/*                         <h5>Information pays</h5>*/
/*                         <a href="#">Lien promotion</a>*/
/*                         <p>prix promotion<span class="prix">1500€</span></p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="vignette">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">*/
/*                         <h5>Information pays</h5>*/
/*                         <a href="#">Lien promotion</a>*/
/*                         <p>prix promotion<span class="prix">1500€</span></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="vignette margin-top">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">*/
/*                         <h5>Information pays</h5>*/
/*                         <a href="#">Lien promotion</a>*/
/*                         <p>prix promotion<span class="prix">1500€</span></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="vignette margin-top">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">*/
/*                         <h5>Information pays</h5>*/
/*                         <a href="#">Lien promotion</a>*/
/*                         <p>prix promotion<span class="prix">1500€</span></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="vignette margin-top">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">*/
/*                         <h5>Information pays</h5>*/
/*                         <a href="#">Lien promotion</a>*/
/*                         <p>prix promotion<span class="prix">1500€</span></p>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/* */
/* */
/*         <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/*                 <h3 class="text-left ">Amerique Centrale</h3> */
/* */
/*                 <div class="description">*/
/*                     <p class="text-justify">*/
/*                         Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.*/
/*                     </p>*/
/*                 </div>*/
/*                 <div class="block_vignette">*/
/*                 <div class="vignette four">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">*/
/*                         <h5>Amérique</h5>*/
/*                         <a href="#">Lien promotion</a><br>*/
/*                         <a href="#">Lien promotion</a><br>*/
/*                         <a href="#">Lien promotion</a><br>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="vignette four">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">*/
/*                         <h5>Europe</h5>*/
/*                         <a href="#">Lien promotion</a><br>*/
/*                         <a href="#">Lien promotion</a><br>*/
/*                         <a href="#">Lien promotion</a><br>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="vignette four ">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                      <div class="info">*/
/*                         <h5>Afrique</h5>*/
/*                         <a href="#">Lien promotion</a><br>*/
/*                         <a href="#">Lien promotion</a><br>*/
/*                         <a href="#">Lien promotion</a><br>*/
/*                     </div>*/
/*                 </div>*/
/*                     */
/*                 <div class="vignette four ">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                      <div class="info">*/
/*                         <h5>Asie / Océanie</h5>*/
/*                         <a href="#">Lien promotion</a><br>*/
/*                         <a href="#">Lien promotion</a><br>*/
/*                         <a href="#">Lien promotion</a><br>*/
/*                     </div>*/
/*                 </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
/* */
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
