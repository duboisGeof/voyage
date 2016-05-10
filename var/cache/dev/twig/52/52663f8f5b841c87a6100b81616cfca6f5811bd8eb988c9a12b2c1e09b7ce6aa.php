<?php

/* VoyageBundle:Layout:destination.html.twig */
class __TwigTemplate_c4217c056e56ac4a8c0875c0a31ec9fc9bba55cae9422d3a29f8f596469c440c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "VoyageBundle:Layout:destination.html.twig", 1);
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
        $__internal_c9b3a9ba754c74822425d46beb64d4b81c8a5116e95d850abb3c28f289924785 = $this->env->getExtension("native_profiler");
        $__internal_c9b3a9ba754c74822425d46beb64d4b81c8a5116e95d850abb3c28f289924785->enter($__internal_c9b3a9ba754c74822425d46beb64d4b81c8a5116e95d850abb3c28f289924785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VoyageBundle:Layout:destination.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9b3a9ba754c74822425d46beb64d4b81c8a5116e95d850abb3c28f289924785->leave($__internal_c9b3a9ba754c74822425d46beb64d4b81c8a5116e95d850abb3c28f289924785_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0af089c95375819aa7244694a21437f22c2b7a4364f155fb14adf66657179ed = $this->env->getExtension("native_profiler");
        $__internal_a0af089c95375819aa7244694a21437f22c2b7a4364f155fb14adf66657179ed->enter($__internal_a0af089c95375819aa7244694a21437f22c2b7a4364f155fb14adf66657179ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/map.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" usemap=\"#Map\" />
            <map name=\"Map\">
                <area shape=\"rect\" coords=\"69,121,190,139\" href=\"#\" alt=\"amerique_nord\" id=\"amerique_nord\">
                <area shape=\"rect\" coords=\"0,202,130,223\" href=\"#\" alt=\"amerique_centrale\" id=\"amerique_centrale\">
                <area shape=\"rect\" coords=\"196,164,261,183\" href=\"#\" alt=\"caraibes\" id=\"caraibes\">
                <area shape=\"rect\" coords=\"178,267,289,288\" href=\"#\" alt=\"amerique_sud\" id=\"amerique_sud\">
                <area shape=\"rect\" coords=\"454,202,511,222\" href=\"#\" alt=\"afrique\" id=\"afrique\">
                <area shape=\"rect\" coords=\"506,154,601,174\" href=\"#\" alt=\"moyen_orient\" id=\"moyen_orient\">
                <area shape=\"rect\" coords=\"460,69,514,90\" href=\"#\" alt=\"europe\" id=\"europe\">
                <area shape=\"rect\" coords=\"687,121,720,140\" href=\"#\" alt=\"asie\" id=\"asie\" onmouseover=\"this.src='../images/asie.png';\">
                <area shape=\"rect\" coords=\"795,319,852,338\" href=\"#\" alt=\"oceanie\" id=\"oceanie\">
            </map>
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

        <div class=\"container floated grey \">
            <div class=\"blank floated grey\">
                <h3 class=\"text-left \">Amerique du Nord</h3> 

                <div class=\"description\">
                    <p class=\"text-justify\">
                        Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.
                    </p>
                </div>

                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 142
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
                <h3 class=\"text-left \">Amerique Centrale</h3> 

                <div class=\"description\">
                    <p class=\"text-justify\">
                        Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.
                    </p>
                </div>

                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 176
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
                <h3 class=\"text-left \">Amerique du Sud</h3> 

                <div class=\"description\">
                    <p class=\"text-justify\">
                        Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.
                    </p>
                </div>

                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 203
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
            </div>
                    
                    

        </div>
        <div class=\"clearfix\"></div>
        
        <div class=\"container floated grey \">
            <div class=\"blank floated grey\">
                <h3 class=\"text-left \">Caraibes</h3> 

                <div class=\"description\">
                    <p class=\"text-justify\">
                        Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.
                    </p>
                </div>

                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 244
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
                <h3 class=\"text-left \">Afrique</h3> 

                <div class=\"description\">
                    <p class=\"text-justify\">
                        Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.
                    </p>
                </div>

                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 277
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
                <h3 class=\"text-left \">Europe</h3> 

                <div class=\"description\">
                    <p class=\"text-justify\">
                        Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.
                    </p>
                </div>

                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 310
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
                <h3 class=\"text-left \">Moyen Orient</h3> 

                <div class=\"description\">
                    <p class=\"text-justify\">
                        Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.
                    </p>
                </div>

                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 343
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
                <h3 class=\"text-left \">Asie</h3> 

                <div class=\"description\">
                    <p class=\"text-justify\">
                        Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.
                    </p>
                </div>

                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 376
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
                <h3 class=\"text-left \">Oceanie</h3> 

                <div class=\"description\">
                    <p class=\"text-justify\">
                        Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.
                    </p>
                </div>

                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                    </a>
                    <div class=\"info\">info</div>
                </div>
                <div class=\"lol\">
                    <a href=\"#\">
                        <img src=\"";
        // line 409
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
        
        $__internal_a0af089c95375819aa7244694a21437f22c2b7a4364f155fb14adf66657179ed->leave($__internal_a0af089c95375819aa7244694a21437f22c2b7a4364f155fb14adf66657179ed_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_02285a8c93691b2606204aec982bb214d1daf3bcf5a458b4f846a6d9a6911f8e = $this->env->getExtension("native_profiler");
        $__internal_02285a8c93691b2606204aec982bb214d1daf3bcf5a458b4f846a6d9a6911f8e->enter($__internal_02285a8c93691b2606204aec982bb214d1daf3bcf5a458b4f846a6d9a6911f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $this->displayParentBlock("header", $context, $blocks);
        
        $__internal_02285a8c93691b2606204aec982bb214d1daf3bcf5a458b4f846a6d9a6911f8e->leave($__internal_02285a8c93691b2606204aec982bb214d1daf3bcf5a458b4f846a6d9a6911f8e_prof);

    }

    // line 23
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_df3655ef0caf6f84345dc48e9c8f494e5a7965ee399dfb2e48671f85ba58f696 = $this->env->getExtension("native_profiler");
        $__internal_df3655ef0caf6f84345dc48e9c8f494e5a7965ee399dfb2e48671f85ba58f696->enter($__internal_df3655ef0caf6f84345dc48e9c8f494e5a7965ee399dfb2e48671f85ba58f696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $this->displayParentBlock("navigation", $context, $blocks);
        
        $__internal_df3655ef0caf6f84345dc48e9c8f494e5a7965ee399dfb2e48671f85ba58f696->leave($__internal_df3655ef0caf6f84345dc48e9c8f494e5a7965ee399dfb2e48671f85ba58f696_prof);

    }

    public function getTemplateName()
    {
        return "VoyageBundle:Layout:destination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  572 => 23,  560 => 12,  535 => 409,  526 => 403,  517 => 397,  493 => 376,  484 => 370,  475 => 364,  451 => 343,  442 => 337,  433 => 331,  409 => 310,  400 => 304,  391 => 298,  367 => 277,  358 => 271,  349 => 265,  325 => 244,  316 => 238,  307 => 232,  281 => 209,  272 => 203,  263 => 197,  239 => 176,  230 => 170,  221 => 164,  196 => 142,  187 => 136,  178 => 130,  78 => 33,  67 => 24,  65 => 23,  53 => 13,  51 => 12,  42 => 5,  36 => 4,  11 => 1,);
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
/*             <img src="{{ asset('bundles/voyage/images/map.jpg') }}" alt="basketball" usemap="#Map" />*/
/*             <map name="Map">*/
/*                 <area shape="rect" coords="69,121,190,139" href="#" alt="amerique_nord" id="amerique_nord">*/
/*                 <area shape="rect" coords="0,202,130,223" href="#" alt="amerique_centrale" id="amerique_centrale">*/
/*                 <area shape="rect" coords="196,164,261,183" href="#" alt="caraibes" id="caraibes">*/
/*                 <area shape="rect" coords="178,267,289,288" href="#" alt="amerique_sud" id="amerique_sud">*/
/*                 <area shape="rect" coords="454,202,511,222" href="#" alt="afrique" id="afrique">*/
/*                 <area shape="rect" coords="506,154,601,174" href="#" alt="moyen_orient" id="moyen_orient">*/
/*                 <area shape="rect" coords="460,69,514,90" href="#" alt="europe" id="europe">*/
/*                 <area shape="rect" coords="687,121,720,140" href="#" alt="asie" id="asie" onmouseover="this.src='../images/asie.png';">*/
/*                 <area shape="rect" coords="795,319,852,338" href="#" alt="oceanie" id="oceanie">*/
/*             </map>*/
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
/*         <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/*                 <h3 class="text-left ">Amerique du Nord</h3> */
/* */
/*                 <div class="description">*/
/*                     <p class="text-justify">*/
/*                         Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
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
/* */
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/* */
/*         <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/*                 <h3 class="text-left ">Amerique du Sud</h3> */
/* */
/*                 <div class="description">*/
/*                     <p class="text-justify">*/
/*                         Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*             </div>*/
/*                     */
/*                     */
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         */
/*         <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/*                 <h3 class="text-left ">Caraibes</h3> */
/* */
/*                 <div class="description">*/
/*                     <p class="text-justify">*/
/*                         Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         */
/*         <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/*                 <h3 class="text-left ">Afrique</h3> */
/* */
/*                 <div class="description">*/
/*                     <p class="text-justify">*/
/*                         Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         */
/*         <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/*                 <h3 class="text-left ">Europe</h3> */
/* */
/*                 <div class="description">*/
/*                     <p class="text-justify">*/
/*                         Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         */
/*         <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/*                 <h3 class="text-left ">Moyen Orient</h3> */
/* */
/*                 <div class="description">*/
/*                     <p class="text-justify">*/
/*                         Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         */
/*         <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/*                 <h3 class="text-left ">Asie</h3> */
/* */
/*                 <div class="description">*/
/*                     <p class="text-justify">*/
/*                         Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         */
/*         <div class="container floated grey ">*/
/*             <div class="blank floated grey">*/
/*                 <h3 class="text-left ">Oceanie</h3> */
/* */
/*                 <div class="description">*/
/*                     <p class="text-justify">*/
/*                         Inter haec Orfitus praefecti potestate regebat urbem aeternam ultra modum delatae dignitatis sese efferens insolenter, vir quidem prudens et forensium negotiorum oppido gnarus, sed splendore liberalium doctrinarum minus quam nobilem decuerat institutus, quo administrante seditiones sunt concitatae graves ob inopiam vini: huius avidis usibus vulgus intentum ad motus asperos excitatur et crebros.*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
/*                 <div class="lol">*/
/*                     <a href="#">*/
/*                         <img src="{{ asset('bundles/voyage/images/01.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                     </a>*/
/*                     <div class="info">info</div>*/
/*                 </div>*/
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
