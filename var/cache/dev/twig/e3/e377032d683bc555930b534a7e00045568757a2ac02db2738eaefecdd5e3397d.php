<?php

/* VoyageBundle:Layout:single.html.twig */
class __TwigTemplate_fcb93eeafe7835530b7c74ab638e613e7fb0b8d8d411c19392bf311e864a9e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "VoyageBundle:Layout:single.html.twig", 1);
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
        $__internal_0268d8f7d5dcf833166bbcf6d9ed46b3ede08a38b77b4daa6562307efecbfcb0 = $this->env->getExtension("native_profiler");
        $__internal_0268d8f7d5dcf833166bbcf6d9ed46b3ede08a38b77b4daa6562307efecbfcb0->enter($__internal_0268d8f7d5dcf833166bbcf6d9ed46b3ede08a38b77b4daa6562307efecbfcb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VoyageBundle:Layout:single.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0268d8f7d5dcf833166bbcf6d9ed46b3ede08a38b77b4daa6562307efecbfcb0->leave($__internal_0268d8f7d5dcf833166bbcf6d9ed46b3ede08a38b77b4daa6562307efecbfcb0_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_f693583c2f041ec09ae2f03aff8e20572d32a952d5a2d3700964210ac19344d9 = $this->env->getExtension("native_profiler");
        $__internal_f693583c2f041ec09ae2f03aff8e20572d32a952d5a2d3700964210ac19344d9->enter($__internal_f693583c2f041ec09ae2f03aff8e20572d32a952d5a2d3700964210ac19344d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <div id=\"content\">

            <!-- 960 Container -->
            <div class=\"container floated\">

                <div class=\"sixteen floated page-title\">

                    <h2>American Football <span>/ Single Project</span></h2>

                    <!-- Portfolio Navi -->
                    <div id=\"portfolio-navi\">
                        <ul>
                            <li><a class=\"prev\" href=\"#\"><b>←</b> Previous</a></li>
                            <li><a class=\"next\" href=\"#\">Next <b>→</b></a></li>
                        </ul>
                    </div>
                    <div class=\"clearfix\"></div>

                </div>

            </div>
            <!-- 960 Container / End -->

            <!-- Page Content -->
            <div class=\"page-content\">

                <div class=\"container\">
                    <div class=\"sixteen columns\">
                        <div class='carrousel' id='single_carrousel'>


                            <a href=\"#\">
                                <a href=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/vacance/01.jpeg"), "html", null, true);
        echo "\" rel=\"fancybox-gallery\" title=\"American Football\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/vacance/01.jpeg"), "html", null, true);
        echo "\" alt=\"\" /></a>                                </a>
                            <a href=\"#\">
                                <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/vacance/02.jpg"), "html", null, true);
        echo "\" rel=\"fancybox-gallery\" title=\"American Football\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/vacance/02.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a>                                </a>
                            </a>



                            <div class=\"clearfix\"></div>
                            <!-- Slider / End -->
                        </div>
                            <a class=\"prev2\" id=\"foo2_prev\" href=\"#\"><span>&nbsp;</span></a>
                            <a class=\"next2\" id=\"foo2_next\" href=\"#\"><span>&nbsp;</span></a>
                        <div id=\"pagination\"></div>
                    </div>

                </div>


                <!-- 960 Container -->
                <div class=\"container\" style=\"margin-top: 30px;\">

                    <div class=\"twelve columns\">
                        <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id ultricies vehicula ut id elit. Integer posuere erat ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur cras mattis consectetur purus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum idea ligula felis euismod semper. Donec lorem ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean eu leo quam. Pellentesque lore ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. </p>
                    </div>

                    <div class=\"four columns\">
                        <div class=\"project-info-container\">
                            <ul class=\"project-info\">
                                <li><strong>Client:</strong> Google</li>
                                <li><strong>Date:</strong> December 2012</li>
                                <li><a href=\"#\" class=\"button color launch\"> View Project</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- End 960 Container -->


                <div class=\"line\" style=\"margin: 20px 0 37px 0;\"></div>

                <!-- Related Works -->
                <div class=\"related-works\">

                    <!-- 960 Container -->
                    <div class=\"container\" style=\"margin-bottom: -10px;\">

                        <div class=\"sixteen columns\">
                            <h3 class=\"margin\">Idée de vacance</h3>
                        </div>

                        <div class=\"vignette\">
                            <a href=\"#\">
                                <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                            </a>
                            <div class=\"info\">info</div>
                        </div>

                        <div class=\"vignette\">
                            <a href=\"#\">
                                <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                            </a>
                            <div class=\"info\">info</div>
                        </div>

                        <!-- 1/4 Column -->
                        <div class=\"vignette\">
                            <a href=\"#\">
                                <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" alt=\"basketball\" width=\"140\" height=\"140\" />
                            </a>
                            <div class=\"info\">info</div>
                        </div>                        
                    </div>
                    <!-- End 960 Container -->

                </div>
                <!-- Related Works / End -->

            </div>
            <!-- Page Content / End -->

        </div>







    </div>
    <!-- Content / End -->

</div>
<!-- Wrapper / End -->



<!-- Footer Bottom / End -->
";
        
        $__internal_f693583c2f041ec09ae2f03aff8e20572d32a952d5a2d3700964210ac19344d9->leave($__internal_f693583c2f041ec09ae2f03aff8e20572d32a952d5a2d3700964210ac19344d9_prof);

    }

    // line 12
    public function block_header($context, array $blocks = array())
    {
        $__internal_aeaf1d23c16330c381295748e51b5d871630ce48197a4b0cfca79ae3ccc16a33 = $this->env->getExtension("native_profiler");
        $__internal_aeaf1d23c16330c381295748e51b5d871630ce48197a4b0cfca79ae3ccc16a33->enter($__internal_aeaf1d23c16330c381295748e51b5d871630ce48197a4b0cfca79ae3ccc16a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $this->displayParentBlock("header", $context, $blocks);
        
        $__internal_aeaf1d23c16330c381295748e51b5d871630ce48197a4b0cfca79ae3ccc16a33->leave($__internal_aeaf1d23c16330c381295748e51b5d871630ce48197a4b0cfca79ae3ccc16a33_prof);

    }

    // line 23
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_f20acf52be9fd5a154e77bdac34e604b083b60f8d402b89402c65108d6cab504 = $this->env->getExtension("native_profiler");
        $__internal_f20acf52be9fd5a154e77bdac34e604b083b60f8d402b89402c65108d6cab504->enter($__internal_f20acf52be9fd5a154e77bdac34e604b083b60f8d402b89402c65108d6cab504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $this->displayParentBlock("navigation", $context, $blocks);
        
        $__internal_f20acf52be9fd5a154e77bdac34e604b083b60f8d402b89402c65108d6cab504->leave($__internal_f20acf52be9fd5a154e77bdac34e604b083b60f8d402b89402c65108d6cab504_prof);

    }

    public function getTemplateName()
    {
        return "VoyageBundle:Layout:single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 23,  229 => 12,  191 => 130,  180 => 122,  170 => 115,  113 => 63,  106 => 61,  67 => 24,  65 => 23,  53 => 13,  51 => 12,  42 => 5,  36 => 4,  11 => 1,);
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
/*         <div id="content">*/
/* */
/*             <!-- 960 Container -->*/
/*             <div class="container floated">*/
/* */
/*                 <div class="sixteen floated page-title">*/
/* */
/*                     <h2>American Football <span>/ Single Project</span></h2>*/
/* */
/*                     <!-- Portfolio Navi -->*/
/*                     <div id="portfolio-navi">*/
/*                         <ul>*/
/*                             <li><a class="prev" href="#"><b>←</b> Previous</a></li>*/
/*                             <li><a class="next" href="#">Next <b>→</b></a></li>*/
/*                         </ul>*/
/*                     </div>*/
/*                     <div class="clearfix"></div>*/
/* */
/*                 </div>*/
/* */
/*             </div>*/
/*             <!-- 960 Container / End -->*/
/* */
/*             <!-- Page Content -->*/
/*             <div class="page-content">*/
/* */
/*                 <div class="container">*/
/*                     <div class="sixteen columns">*/
/*                         <div class='carrousel' id='single_carrousel'>*/
/* */
/* */
/*                             <a href="#">*/
/*                                 <a href="{{ asset('bundles/voyage/images/vacance/01.jpeg') }}" rel="fancybox-gallery" title="American Football"><img src="{{ asset('bundles/voyage/images/vacance/01.jpeg') }}" alt="" /></a>                                </a>*/
/*                             <a href="#">*/
/*                                 <a href="{{ asset('bundles/voyage/images/vacance/02.jpg') }}" rel="fancybox-gallery" title="American Football"><img src="{{ asset('bundles/voyage/images/vacance/02.jpg') }}" alt="" /></a>                                </a>*/
/*                             </a>*/
/* */
/* */
/* */
/*                             <div class="clearfix"></div>*/
/*                             <!-- Slider / End -->*/
/*                         </div>*/
/*                             <a class="prev2" id="foo2_prev" href="#"><span>&nbsp;</span></a>*/
/*                             <a class="next2" id="foo2_next" href="#"><span>&nbsp;</span></a>*/
/*                         <div id="pagination"></div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/* */
/*                 <!-- 960 Container -->*/
/*                 <div class="container" style="margin-top: 30px;">*/
/* */
/*                     <div class="twelve columns">*/
/*                         <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id ultricies vehicula ut id elit. Integer posuere erat ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur cras mattis consectetur purus.</p>*/
/*                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum idea ligula felis euismod semper. Donec lorem ullamcorper nulla non metus auctor fringilla. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean eu leo quam. Pellentesque lore ornare sem lacinia quam venenatis vestibulum. Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum. </p>*/
/*                     </div>*/
/* */
/*                     <div class="four columns">*/
/*                         <div class="project-info-container">*/
/*                             <ul class="project-info">*/
/*                                 <li><strong>Client:</strong> Google</li>*/
/*                                 <li><strong>Date:</strong> December 2012</li>*/
/*                                 <li><a href="#" class="button color launch"> View Project</a></li>*/
/*                             </ul>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*                 <!-- End 960 Container -->*/
/* */
/* */
/*                 <div class="line" style="margin: 20px 0 37px 0;"></div>*/
/* */
/*                 <!-- Related Works -->*/
/*                 <div class="related-works">*/
/* */
/*                     <!-- 960 Container -->*/
/*                     <div class="container" style="margin-bottom: -10px;">*/
/* */
/*                         <div class="sixteen columns">*/
/*                             <h3 class="margin">Idée de vacance</h3>*/
/*                         </div>*/
/* */
/*                         <div class="vignette">*/
/*                             <a href="#">*/
/*                                 <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                             </a>*/
/*                             <div class="info">info</div>*/
/*                         </div>*/
/* */
/*                         <div class="vignette">*/
/*                             <a href="#">*/
/*                                 <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                             </a>*/
/*                             <div class="info">info</div>*/
/*                         </div>*/
/* */
/*                         <!-- 1/4 Column -->*/
/*                         <div class="vignette">*/
/*                             <a href="#">*/
/*                                 <img src="{{ asset('bundles/voyage/images/02.jpg') }}" alt="basketball" width="140" height="140" />*/
/*                             </a>*/
/*                             <div class="info">info</div>*/
/*                         </div>                        */
/*                     </div>*/
/*                     <!-- End 960 Container -->*/
/* */
/*                 </div>*/
/*                 <!-- Related Works / End -->*/
/* */
/*             </div>*/
/*             <!-- Page Content / End -->*/
/* */
/*         </div>*/
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
/* <!-- Footer Bottom / End -->*/
/* {% endblock %}*/
