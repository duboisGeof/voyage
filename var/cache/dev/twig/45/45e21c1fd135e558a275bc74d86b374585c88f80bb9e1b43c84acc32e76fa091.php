<?php

/* VoyageBundle:Layout:search.html.twig */
class __TwigTemplate_5aa87cad1633e12c071057a709727e906a45738dc39704277e3985184504054b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "VoyageBundle:Layout:search.html.twig", 1);
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
        $__internal_d1d294d1de2066276265ac1481a862da632e9b48a937f45b5d5d47eb355b905b = $this->env->getExtension("native_profiler");
        $__internal_d1d294d1de2066276265ac1481a862da632e9b48a937f45b5d5d47eb355b905b->enter($__internal_d1d294d1de2066276265ac1481a862da632e9b48a937f45b5d5d47eb355b905b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VoyageBundle:Layout:search.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1d294d1de2066276265ac1481a862da632e9b48a937f45b5d5d47eb355b905b->leave($__internal_d1d294d1de2066276265ac1481a862da632e9b48a937f45b5d5d47eb355b905b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_72c23e273f96e4c36adeb970fa03b51343db8d3f7086ca7d9d036c3ae7f7ef17 = $this->env->getExtension("native_profiler");
        $__internal_72c23e273f96e4c36adeb970fa03b51343db8d3f7086ca7d9d036c3ae7f7ef17->enter($__internal_72c23e273f96e4c36adeb970fa03b51343db8d3f7086ca7d9d036c3ae7f7ef17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"wrapper\">

<!-- Header
================================================== -->
<div id=\"top-line\"></div>

<!-- 960 Container -->
<div class=\"container\">

            <!-- Header -->
            ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "            <!-- Header / End -->

\t<div class=\"clearfix\"></div>

</div>
<!-- 960 Container / End -->


<!-- Navigation
================================================== -->
 ";
        // line 25
        $this->displayBlock('navigation', $context, $blocks);
        // line 26
        echo "<div class=\"clearfix\"></div>


<!-- Content
================================================== -->
<div id=\"content\">


<!-- 960 Container -->
<div class=\"container floated\">

\t<!-- Page Content -->
\t<div class=\"eleven floated\">

\t\t<!-- Post -->
\t\t<article class=\"post\">

\t\t\t<figure class=\"post-img\">
\t\t\t\t<a href=\"blog-post.html\"><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" class=\"ls-bg\" alt=\"\"></a>
\t\t\t</figure>
\t\t\t
\t\t\t<section class=\"date\">
\t\t\t\t<span class=\"day\">28</span>
\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t</section>
\t\t\t
\t\t\t<section class=\"post-content\">

\t\t\t\t<header class=\"meta\">
\t\t\t\t\t<h2><a href=\"blog-post.html\">The Boating Life Begins With a Good Storm</a></h2>
\t\t\t\t\t<span><i class=\"halflings user\"></i>By <a href=\"#\">admin</a></span>
\t\t\t\t\t<span><i class=\"halflings tag\"></i><a href=\"#\">Boating</a>, <a href=\"#\">Recreation</a></span>
\t\t\t\t\t<span><i class=\"halflings comments\"></i>With <a href=\"#\">12 Comments</a></span>
\t\t\t\t</header>

\t\t\t\t<p>Maecenas dolor est, interdum a euismod eu, accumsan posuere nisl. Nam sed iaculis massa. Sed nisl lectus, tempor sed euismod quis, sollicitudin nec est. Suspendisse dignissim bibendum tempor. Nam erat felis, commodo sed semper commodo vel mauris suspendisse dignissim.</p>

\t\t\t\t<a href=\"blog-post.html\" class=\"button color\">Read More</a>
\t\t\t
\t\t\t</section>

\t\t</article>


\t\t<!-- Divider -->
\t\t<div class=\"line\"></div>


\t\t<!-- Post -->
\t\t<article class=\"post\">
\t\t\t
\t\t\t<section class=\"flexslider\">
\t\t\t\t<ul class=\"slides post-img\">
\t\t\t\t\t<li><a href=\"blog-post.html\"><img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" class=\"ls-bg\" alt=\"\"></a></li>
\t\t\t\t\t<li><a href=\"blog-post.html\"><img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/02.jpg"), "html", null, true);
        echo "\" class=\"ls-bg\" alt=\"\"></a></li>
\t\t\t\t\t<li><a href=\"blog-post.html\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/03.jpg"), "html", null, true);
        echo "\" class=\"ls-bg\" alt=\"\"></a></li>
\t\t\t\t</ul>
\t\t\t</section>
\t\t\t
\t\t\t<section class=\"date\">
\t\t\t\t<span class=\"day\">14</span>
\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t</section>

\t\t\t<section class=\"post-content\">

\t\t\t\t<header class=\"meta\">
\t\t\t\t\t<h2><a href=\"blog-post.html\">Skiing to a Remote Retreat in the Canadian Rockies </a></h2>
\t\t\t\t\t<span><i class=\"halflings user\"></i>By <a href=\"#\">admin</a></span>
\t\t\t\t\t<span><i class=\"halflings tag\"></i><a href=\"#\">Mountains</a>, <a href=\"#\">Skiing</a></span>
\t\t\t\t\t<span><i class=\"halflings comments\"></i>With <a href=\"#\">12 Comments</a></span>
\t\t\t\t</header>

\t\t\t\t<p>Maecenas dolor est, interdum a euismod eu, accumsan posuere nisl. Nam sed iaculis massa. Sed nisl lectus, tempor sed euismod quis, sollicitudin nec est. Suspendisse dignissim bibendum tempor. Nam erat felis, commodo sed semper commodo vel mauris suspendisse dignissim.</p>

\t\t\t\t<a href=\"blog-post.html\" class=\"button color\">Read More</a>

\t\t\t</section>
\t
\t\t</article>


\t\t<!-- Divider -->
\t\t<div class=\"line\"></div>


\t\t<!-- Post -->
\t\t<article class=\"post\">

\t\t\t<figure class=\"post-img\">
\t\t\t\t<a href=\"blog-post.html\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/01.jpg"), "html", null, true);
        echo "\" class=\"ls-bg\" alt=\"\"></a>
\t\t\t</figure>
\t\t\t
\t\t\t<section class=\"date\">
\t\t\t\t<span class=\"day\">10</span>
\t\t\t\t<span class=\"month\">Dec</span>
\t\t\t</section>
\t\t\t
\t\t\t<section class=\"post-content\">

\t\t\t\t<header class=\"meta\">
\t\t\t\t\t<h2><a href=\"blog-post.html\">Visiting Tuscany Without the Crowds</a></h2>
\t\t\t\t\t<span><i class=\"halflings user\"></i>By <a href=\"#\">admin</a></span>
\t\t\t\t\t<span><i class=\"halflings tag\"></i><a href=\"#\">Nature</a>, <a href=\"#\">Tourism</a></span>
\t\t\t\t\t<span><i class=\"halflings comments\"></i>With <a href=\"#\">12 Comments</a></span>
\t\t\t\t</header>

\t\t\t\t<p>Maecenas dolor est, interdum a euismod eu, accumsan posuere nisl. Nam sed iaculis massa. Sed nisl lectus, tempor sed euismod quis, sollicitudin nec est. Suspendisse dignissim bibendum tempor. Nam erat felis, commodo sed semper commodo vel mauris suspendisse dignissim.</p>

\t\t\t\t<a href=\"blog-post.html\" class=\"button color\">Read More</a>

\t\t\t</section>

\t\t</article>

\t\t<!-- Divider -->
\t\t<div class=\"line\"></div>

\t\t<!-- Pagination -->
\t\t<nav class=\"pagination\">
\t\t\t<ul>
\t\t\t\t<li><a href=\"#\" class=\"current\">1</a></li>
\t\t\t\t<li><a href=\"#\">2</a></li>
\t\t\t\t<li><a href=\"#\">Next</a></li>
\t\t\t</ul>
\t\t\t<div class=\"clearfix\"></div>
\t\t</nav>

\t</div>
\t<!-- Content / End -->


\t<!-- Sidebar -->
\t<div class=\"four floated sidebar right\">
\t\t<div class=\"container\">

            <!-- Icon Boxes -->


            <form role=\"form\" id=\"\" action=\"\" method=\"post\">
                <h3>Affinez votre recherche</h3><hr>


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
\t</div>
\t<!-- Page Content / End -->

</div>
<!-- 960 Container / End -->

</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->

";
        
        $__internal_72c23e273f96e4c36adeb970fa03b51343db8d3f7086ca7d9d036c3ae7f7ef17->leave($__internal_72c23e273f96e4c36adeb970fa03b51343db8d3f7086ca7d9d036c3ae7f7ef17_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_4df8e8ae478f5115cea29ba3d9e0549487c45408a3d22762a38405f6148cd7fc = $this->env->getExtension("native_profiler");
        $__internal_4df8e8ae478f5115cea29ba3d9e0549487c45408a3d22762a38405f6148cd7fc->enter($__internal_4df8e8ae478f5115cea29ba3d9e0549487c45408a3d22762a38405f6148cd7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $this->displayParentBlock("header", $context, $blocks);
        
        $__internal_4df8e8ae478f5115cea29ba3d9e0549487c45408a3d22762a38405f6148cd7fc->leave($__internal_4df8e8ae478f5115cea29ba3d9e0549487c45408a3d22762a38405f6148cd7fc_prof);

    }

    // line 25
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_f5be153a4b6187cb0a9d0f7976570124c093863cfce03c475047209700f13c8c = $this->env->getExtension("native_profiler");
        $__internal_f5be153a4b6187cb0a9d0f7976570124c093863cfce03c475047209700f13c8c->enter($__internal_f5be153a4b6187cb0a9d0f7976570124c093863cfce03c475047209700f13c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $this->displayParentBlock("navigation", $context, $blocks);
        
        $__internal_f5be153a4b6187cb0a9d0f7976570124c093863cfce03c475047209700f13c8c->leave($__internal_f5be153a4b6187cb0a9d0f7976570124c093863cfce03c475047209700f13c8c_prof);

    }

    public function getTemplateName()
    {
        return "VoyageBundle:Layout:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 25,  304 => 14,  174 => 116,  136 => 81,  132 => 80,  128 => 79,  90 => 44,  70 => 26,  68 => 25,  56 => 15,  54 => 14,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* <div id="wrapper">*/
/* */
/* <!-- Header*/
/* ================================================== -->*/
/* <div id="top-line"></div>*/
/* */
/* <!-- 960 Container -->*/
/* <div class="container">*/
/* */
/*             <!-- Header -->*/
/*             {% block header %}{{ parent() }}{% endblock %}*/
/*             <!-- Header / End -->*/
/* */
/* 	<div class="clearfix"></div>*/
/* */
/* </div>*/
/* <!-- 960 Container / End -->*/
/* */
/* */
/* <!-- Navigation*/
/* ================================================== -->*/
/*  {% block navigation %}{{ parent() }}{% endblock %}*/
/* <div class="clearfix"></div>*/
/* */
/* */
/* <!-- Content*/
/* ================================================== -->*/
/* <div id="content">*/
/* */
/* */
/* <!-- 960 Container -->*/
/* <div class="container floated">*/
/* */
/* 	<!-- Page Content -->*/
/* 	<div class="eleven floated">*/
/* */
/* 		<!-- Post -->*/
/* 		<article class="post">*/
/* */
/* 			<figure class="post-img">*/
/* 				<a href="blog-post.html"><img src="{{ asset('bundles/voyage/images/01.jpg') }}" class="ls-bg" alt=""></a>*/
/* 			</figure>*/
/* 			*/
/* 			<section class="date">*/
/* 				<span class="day">28</span>*/
/* 				<span class="month">Dec</span>*/
/* 			</section>*/
/* 			*/
/* 			<section class="post-content">*/
/* */
/* 				<header class="meta">*/
/* 					<h2><a href="blog-post.html">The Boating Life Begins With a Good Storm</a></h2>*/
/* 					<span><i class="halflings user"></i>By <a href="#">admin</a></span>*/
/* 					<span><i class="halflings tag"></i><a href="#">Boating</a>, <a href="#">Recreation</a></span>*/
/* 					<span><i class="halflings comments"></i>With <a href="#">12 Comments</a></span>*/
/* 				</header>*/
/* */
/* 				<p>Maecenas dolor est, interdum a euismod eu, accumsan posuere nisl. Nam sed iaculis massa. Sed nisl lectus, tempor sed euismod quis, sollicitudin nec est. Suspendisse dignissim bibendum tempor. Nam erat felis, commodo sed semper commodo vel mauris suspendisse dignissim.</p>*/
/* */
/* 				<a href="blog-post.html" class="button color">Read More</a>*/
/* 			*/
/* 			</section>*/
/* */
/* 		</article>*/
/* */
/* */
/* 		<!-- Divider -->*/
/* 		<div class="line"></div>*/
/* */
/* */
/* 		<!-- Post -->*/
/* 		<article class="post">*/
/* 			*/
/* 			<section class="flexslider">*/
/* 				<ul class="slides post-img">*/
/* 					<li><a href="blog-post.html"><img src="{{ asset('bundles/voyage/images/01.jpg') }}" class="ls-bg" alt=""></a></li>*/
/* 					<li><a href="blog-post.html"><img src="{{ asset('bundles/voyage/images/02.jpg') }}" class="ls-bg" alt=""></a></li>*/
/* 					<li><a href="blog-post.html"><img src="{{ asset('bundles/voyage/images/03.jpg') }}" class="ls-bg" alt=""></a></li>*/
/* 				</ul>*/
/* 			</section>*/
/* 			*/
/* 			<section class="date">*/
/* 				<span class="day">14</span>*/
/* 				<span class="month">Dec</span>*/
/* 			</section>*/
/* */
/* 			<section class="post-content">*/
/* */
/* 				<header class="meta">*/
/* 					<h2><a href="blog-post.html">Skiing to a Remote Retreat in the Canadian Rockies </a></h2>*/
/* 					<span><i class="halflings user"></i>By <a href="#">admin</a></span>*/
/* 					<span><i class="halflings tag"></i><a href="#">Mountains</a>, <a href="#">Skiing</a></span>*/
/* 					<span><i class="halflings comments"></i>With <a href="#">12 Comments</a></span>*/
/* 				</header>*/
/* */
/* 				<p>Maecenas dolor est, interdum a euismod eu, accumsan posuere nisl. Nam sed iaculis massa. Sed nisl lectus, tempor sed euismod quis, sollicitudin nec est. Suspendisse dignissim bibendum tempor. Nam erat felis, commodo sed semper commodo vel mauris suspendisse dignissim.</p>*/
/* */
/* 				<a href="blog-post.html" class="button color">Read More</a>*/
/* */
/* 			</section>*/
/* 	*/
/* 		</article>*/
/* */
/* */
/* 		<!-- Divider -->*/
/* 		<div class="line"></div>*/
/* */
/* */
/* 		<!-- Post -->*/
/* 		<article class="post">*/
/* */
/* 			<figure class="post-img">*/
/* 				<a href="blog-post.html"><img src="{{ asset('bundles/voyage/images/01.jpg') }}" class="ls-bg" alt=""></a>*/
/* 			</figure>*/
/* 			*/
/* 			<section class="date">*/
/* 				<span class="day">10</span>*/
/* 				<span class="month">Dec</span>*/
/* 			</section>*/
/* 			*/
/* 			<section class="post-content">*/
/* */
/* 				<header class="meta">*/
/* 					<h2><a href="blog-post.html">Visiting Tuscany Without the Crowds</a></h2>*/
/* 					<span><i class="halflings user"></i>By <a href="#">admin</a></span>*/
/* 					<span><i class="halflings tag"></i><a href="#">Nature</a>, <a href="#">Tourism</a></span>*/
/* 					<span><i class="halflings comments"></i>With <a href="#">12 Comments</a></span>*/
/* 				</header>*/
/* */
/* 				<p>Maecenas dolor est, interdum a euismod eu, accumsan posuere nisl. Nam sed iaculis massa. Sed nisl lectus, tempor sed euismod quis, sollicitudin nec est. Suspendisse dignissim bibendum tempor. Nam erat felis, commodo sed semper commodo vel mauris suspendisse dignissim.</p>*/
/* */
/* 				<a href="blog-post.html" class="button color">Read More</a>*/
/* */
/* 			</section>*/
/* */
/* 		</article>*/
/* */
/* 		<!-- Divider -->*/
/* 		<div class="line"></div>*/
/* */
/* 		<!-- Pagination -->*/
/* 		<nav class="pagination">*/
/* 			<ul>*/
/* 				<li><a href="#" class="current">1</a></li>*/
/* 				<li><a href="#">2</a></li>*/
/* 				<li><a href="#">Next</a></li>*/
/* 			</ul>*/
/* 			<div class="clearfix"></div>*/
/* 		</nav>*/
/* */
/* 	</div>*/
/* 	<!-- Content / End -->*/
/* */
/* */
/* 	<!-- Sidebar -->*/
/* 	<div class="four floated sidebar right">*/
/* 		<div class="container">*/
/* */
/*             <!-- Icon Boxes -->*/
/* */
/* */
/*             <form role="form" id="" action="" method="post">*/
/*                 <h3>Affinez votre recherche</h3><hr>*/
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
/* 	</div>*/
/* 	<!-- Page Content / End -->*/
/* */
/* </div>*/
/* <!-- 960 Container / End -->*/
/* */
/* </div>*/
/* <!-- Content / End -->*/
/* */
/* </div>*/
/* <!-- Wrapper / End -->*/
/* */
/* {% endblock %}*/
