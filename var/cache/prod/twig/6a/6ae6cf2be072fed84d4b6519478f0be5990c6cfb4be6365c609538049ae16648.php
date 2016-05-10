<?php

/* VoyageBundle:Layout:destination.html.twig */
class __TwigTemplate_dc344f5dbb1e6ce7b95614d5d2c5ddb781b4d39f857e39358a1e15f521532c4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "VoyageBundle:Layout:destination.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
        echo "<div id=\"wrapper\">

<!-- Header
================================================== -->
<div id=\"top-line\"></div>

<!-- 960 Container -->
<div class=\"container\">

\t<!-- Header -->
\t<header id=\"header\">

\t\t<!-- Logo -->
\t\t<div class=\"ten columns\">
\t\t\t<div id=\"logo\">
\t\t\t\t<h1><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("Voyage_accueil");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/logo.png"), "html", null, true);
        echo "\" alt=\"Nevia Premium Template\" /></a></h1>
                                
\t\t\t\t<div id=\"tagline\">Template Without Compromises!</div>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Social / Contact -->
\t\t<div class=\"six columns\">

\t\t\t<!-- Social Icons -->
\t\t\t<ul class=\"social-icons\">
\t\t\t\t<li class=\"twitter\"><a href=\"#\">Twitter</a></li>
\t\t\t\t<li class=\"facebook\"><a href=\"#\">Facebook</a></li>
\t\t\t\t<li class=\"dribbble\"><a href=\"#\">Dribbble</a></li>
\t\t\t\t<li class=\"linkedin\"><a href=\"#\">LinkedIn</a></li>
\t\t\t\t<li class=\"rss\"><a href=\"#\">RSS</a></li>
\t\t\t</ul>

\t\t\t<div class=\"clearfix\"></div>

\t\t\t<!-- Contact Details -->
\t\t\t<div class=\"contact-details\">Contact Phone: +48 880 440 110</div>

\t\t\t<div class=\"clearfix\"></div>

\t\t\t<!-- Search -->
\t\t\t<nav class=\"top-search\">
\t\t\t\t<form action=\"http://vasterad.com/themes/nevia/404-page.html\" method=\"get\">
\t\t\t\t\t<button class=\"search-btn\"></button>
\t\t\t\t\t<input class=\"search-field\" type=\"text\" onblur=\"if(this.value=='')this.value='Search';\" onfocus=\"if(this.value=='Search')this.value='';\" value=\"Search\" />
\t\t\t\t</form>
\t\t\t</nav>

\t\t</div>
\t</header>
\t<!-- Header / End -->

\t<div class=\"clearfix\"></div>

</div>
<!-- 960 Container / End -->


<!-- Navigation
================================================== -->
<nav id=\"navigation\" class=\"style-1\">

<div class=\"left-corner\"></div>
<div class=\"right-corner\"></div>

<ul class=\"menu\" id=\"responsive\">

\t<li><a href=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("Voyage_accueil");
        echo "\" ><i class=\"halflings white home\"></i> Accueil</a></li>
        <li><a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("Voyage_destination");
        echo "\" id=\"current\" ><i class=\"halflings white home\"></i> Destination</a></li>
        <li><a href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("Voyage_circuit");
        echo "\" ><i class=\"halflings white home\"></i> Circuit</a></li>
        <li><a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("Voyage_sejour");
        echo "\" ><i class=\"halflings white home\"></i> Sejour</a></li>

\t

\t

\t

\t

\t
</ul>
</nav>
<div class=\"clearfix\"></div>



<!-- Content
================================================== -->
<div id=\"content\">


<!-- 960 Container -->
<div class=\"container floated\">

\t<div class=\"sixteen floated page-title\">

\t\t<h2>Our Blog</h2>

\t\t<nav id=\"breadcrumbs\">
\t\t\t<ul>
\t\t\t\t<li>You are here:</li>
\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t<li>Blog</li>
\t\t\t</ul>
\t\t</nav>

\t</div>

</div>
<!-- 960 Container / End -->


<!-- 960 Container -->
<div class=\"container floated\">

\t<!-- Page Content -->
\t<div class=\"eleven floated\">

\t\t<!-- Post -->
\t\t<article class=\"post\">

\t\t\t<figure class=\"post-img\">
\t\t\t\t<a href=\"blog-post.html\"><img  src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/blog-01.jpg"), "html", null, true);
        echo "\"  alt=\"\" /></a>
                               
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


\t\t

\t\t

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
\t\t<aside class=\"sidebar\">

\t\t\t<!-- Search -->
\t\t\t<nav class=\"widget-search\">
\t\t\t\t<form action=\"http://vasterad.com/themes/nevia/404-page.html\" method=\"get\">
\t\t\t\t\t<button class=\"search-btn-widget\"></button>
\t\t\t\t\t<input class=\"search-field\" type=\"text\" onblur=\"if(this.value=='')this.value='Search';\" onfocus=\"if(this.value=='Search')this.value='';\" value=\"Search\" />
\t\t\t\t</form>
\t\t\t</nav>
\t\t\t<div class=\"clearfix\"></div>

\t\t\t<!-- Categories -->
\t\t\t<nav class=\"widget\">
\t\t\t\t<h4>Categories</h4>
\t\t\t\t<ul class=\"categories\">
\t\t\t\t\t<li><a href=\"#\">Business</a></li>
\t\t\t\t\t<li><a href=\"#\">Entertainment</a></li>
\t\t\t\t\t<li><a href=\"#\">News & Politics</a></li>
\t\t\t\t\t<li><a href=\"#\">Social Media</a></li>
\t\t\t\t\t<li><a href=\"#\">Technology</a></li>
\t\t\t\t</ul>
\t\t\t</nav>

\t\t\t<!-- Tags -->
\t\t\t<div class=\"widget\">
\t\t\t\t<h4>Tags</h4>
\t\t\t\t<nav class=\"tags\">
\t\t\t\t\t<a href=\"#\">Mountains</a>
\t\t\t\t\t<a href=\"#\">Winter Sports</a>
\t\t\t\t\t<a href=\"#\">Boating</a>
\t\t\t\t\t<a href=\"#\">Recreation</a>
\t\t\t\t\t<a href=\"#\">Skiing</a>
\t\t\t\t\t<a href=\"#\">Tourism</a>
\t\t\t\t\t<a href=\"#\">Nature</a>
\t\t\t\t\t<a href=\"#\">Alps</a>
\t\t\t\t</nav>
\t\t\t</div>

\t\t\t<!-- Archives -->
\t\t\t<nav class=\"widget\">
\t\t\t\t<h4>Archives</h4>
\t\t\t\t<ul class=\"categories\">
\t\t\t\t\t<li><a href=\"#\">October 2012</a></li>
\t\t\t\t\t<li><a href=\"#\">November 2012</a></li>
\t\t\t\t\t<li><a href=\"#\">December 2012</a></li>
\t\t\t\t</ul>
\t\t\t</nav>

\t\t\t<!-- Tweets-->
\t\t\t<div class=\"widget\">
\t\t\t\t<h4>Twitter</h4>
\t\t\t\t<ul id=\"twitter-blog\"></ul>
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\tjQuery(document).ready(function(\$){
\t\t\t\t\t\t\$.getJSON('http://api.twitter.com/1/statuses/user_timeline/purethemes.json?count=2&amp;callback=?', function(tweets){
\t\t\t\t\t\t\$(\"#twitter-blog\").html(tz_format_twitter(tweets));
\t\t\t\t\t\t}); });
\t\t\t\t\t</script>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>


\t\t</aside>
\t</div>
\t<!-- Page Content / End -->

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
\t<!-- 960 Container -->
\t<div class=\"container\">

\t\t<!-- About -->
\t\t<div class=\"four columns\">
\t\t\t<img id=\"logo-footer\"   src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/images/logo-footer.png"), "html", null, true);
        echo "\"  alt=\"\" />
                       
\t\t\t<p>Morbi gravida imperdiet rutrum fusce mattis, lectus consequat vestibulum, duinibh fermentum ligula.</p>
\t\t</div>

\t\t<!-- Contact Details -->
\t\t<div class=\"four columns\">
\t\t\t<h4>Contact Details</h4>
\t\t\t<ul class=\"contact-details-alt\">
\t\t\t\t<li><i class=\"halflings white map-marker\"></i> <p><strong>Address:</strong> 123 Seward Street, Oklahoma City, USA</p></li>
\t\t\t\t<li><i class=\"halflings white user\"></i> <p><strong>Phone:</strong> +48 880 440 110</p></li>
\t\t\t\t<li><i class=\"halflings white envelope\"></i> <p><strong>Email:</strong> <a href=\"#\">mail@example.com</a></p></li>
\t\t\t</ul>
\t\t</div>

\t\t<!-- Photo Stream -->
\t\t<div class=\"four columns\">
\t\t\t<h4>Photo Stream</h4>
\t\t\t<div class=\"flickr-widget\">
\t\t\t\t<script type=\"text/javascript\" src=\"http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=48035108@N07\"></script>
\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Twitter -->
\t\t<div class=\"four columns\">
\t\t\t<h4>Twitter</h4>
\t\t\t<ul id=\"twitter\"></ul>
\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\tjQuery(document).ready(function(\$){
\t\t\t\t\t\$.getJSON('http://api.twitter.com/1/statuses/user_timeline/vasterad.json?count=1&amp;callback=?', function(tweets){
\t\t\t\t\t\$(\"#twitter\").html(tz_format_twitter(tweets));
\t\t\t\t\t}); });
\t\t\t\t</script>
\t\t\t<div class=\"clearfix\"></div>
\t\t</div>

\t</div>
\t<!-- 960 Container / End -->

</footer>
<!-- Footer / End -->


<!-- Footer Bottom / Start  -->
<footer id=\"footer-bottom\">

\t<!-- 960 Container -->
\t<div class=\"container\">

\t\t<!-- Copyrights -->
\t\t<div class=\"eight columns\">
\t\t\t<div class=\"copyright\">
\t\t\t\t© Copyright 2012 by <a href=\"#\">Nevia</a>. All Rights Reserved.
\t\t\t</div>
\t\t</div>

\t\t<!-- Menu -->
\t\t<div class=\"eight columns\">
\t\t\t<nav id=\"sub-menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"#\">FAQ's</a></li>
\t\t\t\t\t<li><a href=\"#\">Sitemap</a></li>
\t\t\t\t\t<li><a href=\"#\">Contact</a></li>
\t\t\t\t</ul>
\t\t\t</nav>
\t\t</div>

\t</div>
\t<!-- 960 Container / End -->

</footer>
<!-- Footer Bottom / End -->


<!-- Style Switcher
================================================== -->
 <link href=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/css/switcher.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/voyage/scripts/switcher.js"), "html", null, true);
        echo "\" rel=\"javascript\"></script>

<section id=\"style-switcher\">
\t<h2>Style Switcher <a href=\"#\"></a></h2>
\t<div>
\t<h3>Predefined Colors</h3>
\t\t<ul class=\"colors\" id=\"color1\">
\t\t\t<li><a href=\"#\" class=\"blue\" title=\"Blue\"></a></li>
\t\t\t<li><a href=\"#\" class=\"green\" title=\"Green\"></a></li>
\t\t\t<li><a href=\"#\" class=\"orange\" title=\"Orange\"></a></li>
\t\t\t<li><a href=\"#\" class=\"navy\" title=\"Navy\"></a></li>
\t\t\t<li><a href=\"#\" class=\"yellow\" title=\"Yellow\"></a></li>
\t\t\t<li><a href=\"#\" class=\"peach\" title=\"Peach\"></a></li>
\t\t\t<li><a href=\"#\" class=\"beige\" title=\"Beige\"></a></li>
\t\t\t<li><a href=\"#\" class=\"purple\" title=\"Purple\"></a></li>
\t\t\t<li><a href=\"#\" class=\"red\" title=\"Red\"></a></li>
\t\t\t<li><a href=\"#\" class=\"pink\" title=\"Pink\"></a></li>
\t\t\t<li><a href=\"#\" class=\"celadon\" title=\"Celadon\"></a></li>
\t\t\t<li><a href=\"#\" class=\"brown\" title=\"Brown\"></a></li>
\t\t\t<li><a href=\"#\" class=\"cherry\" title=\"Cherry\"></a></li>
\t\t\t<li><a href=\"#\" class=\"gray\" title=\"Gray\"></a></li>
\t\t\t<li><a href=\"#\" class=\"dark\" title=\"Dark\"></a></li>
\t\t\t<li><a href=\"#\" class=\"cyan\" title=\"Cyan\"></a></li>
\t\t\t<li><a href=\"#\" class=\"olive\" title=\"Olive\"></a></li>
\t\t\t<li><a href=\"#\" class=\"dirty-green\" title=\"Dirty Green\"></a></li>
\t\t</ul>
\t\t
\t<h3>Menu Style</h3>
\t<select id=\"menu-style\">
\t\t<option value=\"1\">Style 1</option>
\t\t<option value=\"2\">Style 2</option>
\t</select>

\t<h3>Background Image</h3>
\t\t <ul class=\"colors bg\" id=\"bg\">
\t\t\t<li><a href=\"#\" class=\"bg1\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg2\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg3\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg4\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg5\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg6\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg7\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg8\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg9\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg10\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg11\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg12\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg13\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg14\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg15\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg16\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg17\"></a></li>
\t\t\t<li><a href=\"#\" class=\"bg18\"></a></li>
\t\t</ul>
\t</div>

\t<div id=\"reset\"><a href=\"#\" class=\"button color blue\">Reset</a></div>

</section>
  ";
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
        return array (  398 => 344,  394 => 343,  314 => 266,  174 => 129,  118 => 76,  114 => 75,  110 => 74,  106 => 73,  48 => 20,  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
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
/* 	<!-- Header -->*/
/* 	<header id="header">*/
/* */
/* 		<!-- Logo -->*/
/* 		<div class="ten columns">*/
/* 			<div id="logo">*/
/* 				<h1><a href="{{ path('Voyage_accueil') }}"><img src="{{ asset('bundles/voyage/images/logo.png') }}" alt="Nevia Premium Template" /></a></h1>*/
/*                                 */
/* 				<div id="tagline">Template Without Compromises!</div>*/
/* 				<div class="clearfix"></div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- Social / Contact -->*/
/* 		<div class="six columns">*/
/* */
/* 			<!-- Social Icons -->*/
/* 			<ul class="social-icons">*/
/* 				<li class="twitter"><a href="#">Twitter</a></li>*/
/* 				<li class="facebook"><a href="#">Facebook</a></li>*/
/* 				<li class="dribbble"><a href="#">Dribbble</a></li>*/
/* 				<li class="linkedin"><a href="#">LinkedIn</a></li>*/
/* 				<li class="rss"><a href="#">RSS</a></li>*/
/* 			</ul>*/
/* */
/* 			<div class="clearfix"></div>*/
/* */
/* 			<!-- Contact Details -->*/
/* 			<div class="contact-details">Contact Phone: +48 880 440 110</div>*/
/* */
/* 			<div class="clearfix"></div>*/
/* */
/* 			<!-- Search -->*/
/* 			<nav class="top-search">*/
/* 				<form action="http://vasterad.com/themes/nevia/404-page.html" method="get">*/
/* 					<button class="search-btn"></button>*/
/* 					<input class="search-field" type="text" onblur="if(this.value=='')this.value='Search';" onfocus="if(this.value=='Search')this.value='';" value="Search" />*/
/* 				</form>*/
/* 			</nav>*/
/* */
/* 		</div>*/
/* 	</header>*/
/* 	<!-- Header / End -->*/
/* */
/* 	<div class="clearfix"></div>*/
/* */
/* </div>*/
/* <!-- 960 Container / End -->*/
/* */
/* */
/* <!-- Navigation*/
/* ================================================== -->*/
/* <nav id="navigation" class="style-1">*/
/* */
/* <div class="left-corner"></div>*/
/* <div class="right-corner"></div>*/
/* */
/* <ul class="menu" id="responsive">*/
/* */
/* 	<li><a href="{{ path('Voyage_accueil') }}" ><i class="halflings white home"></i> Accueil</a></li>*/
/*         <li><a href="{{ path('Voyage_destination') }}" id="current" ><i class="halflings white home"></i> Destination</a></li>*/
/*         <li><a href="{{ path('Voyage_circuit') }}" ><i class="halflings white home"></i> Circuit</a></li>*/
/*         <li><a href="{{ path('Voyage_sejour') }}" ><i class="halflings white home"></i> Sejour</a></li>*/
/* */
/* 	*/
/* */
/* 	*/
/* */
/* 	*/
/* */
/* 	*/
/* */
/* 	*/
/* </ul>*/
/* </nav>*/
/* <div class="clearfix"></div>*/
/* */
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
/* 	<div class="sixteen floated page-title">*/
/* */
/* 		<h2>Our Blog</h2>*/
/* */
/* 		<nav id="breadcrumbs">*/
/* 			<ul>*/
/* 				<li>You are here:</li>*/
/* 				<li><a href="#">Home</a></li>*/
/* 				<li>Blog</li>*/
/* 			</ul>*/
/* 		</nav>*/
/* */
/* 	</div>*/
/* */
/* </div>*/
/* <!-- 960 Container / End -->*/
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
/* 				<a href="blog-post.html"><img  src="{{ asset('bundles/voyage/images/blog-01.jpg') }}"  alt="" /></a>*/
/*                                */
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
/* 		*/
/* */
/* 		*/
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
/* 		<aside class="sidebar">*/
/* */
/* 			<!-- Search -->*/
/* 			<nav class="widget-search">*/
/* 				<form action="http://vasterad.com/themes/nevia/404-page.html" method="get">*/
/* 					<button class="search-btn-widget"></button>*/
/* 					<input class="search-field" type="text" onblur="if(this.value=='')this.value='Search';" onfocus="if(this.value=='Search')this.value='';" value="Search" />*/
/* 				</form>*/
/* 			</nav>*/
/* 			<div class="clearfix"></div>*/
/* */
/* 			<!-- Categories -->*/
/* 			<nav class="widget">*/
/* 				<h4>Categories</h4>*/
/* 				<ul class="categories">*/
/* 					<li><a href="#">Business</a></li>*/
/* 					<li><a href="#">Entertainment</a></li>*/
/* 					<li><a href="#">News & Politics</a></li>*/
/* 					<li><a href="#">Social Media</a></li>*/
/* 					<li><a href="#">Technology</a></li>*/
/* 				</ul>*/
/* 			</nav>*/
/* */
/* 			<!-- Tags -->*/
/* 			<div class="widget">*/
/* 				<h4>Tags</h4>*/
/* 				<nav class="tags">*/
/* 					<a href="#">Mountains</a>*/
/* 					<a href="#">Winter Sports</a>*/
/* 					<a href="#">Boating</a>*/
/* 					<a href="#">Recreation</a>*/
/* 					<a href="#">Skiing</a>*/
/* 					<a href="#">Tourism</a>*/
/* 					<a href="#">Nature</a>*/
/* 					<a href="#">Alps</a>*/
/* 				</nav>*/
/* 			</div>*/
/* */
/* 			<!-- Archives -->*/
/* 			<nav class="widget">*/
/* 				<h4>Archives</h4>*/
/* 				<ul class="categories">*/
/* 					<li><a href="#">October 2012</a></li>*/
/* 					<li><a href="#">November 2012</a></li>*/
/* 					<li><a href="#">December 2012</a></li>*/
/* 				</ul>*/
/* 			</nav>*/
/* */
/* 			<!-- Tweets-->*/
/* 			<div class="widget">*/
/* 				<h4>Twitter</h4>*/
/* 				<ul id="twitter-blog"></ul>*/
/* 					<script type="text/javascript">*/
/* 						jQuery(document).ready(function($){*/
/* 						$.getJSON('http://api.twitter.com/1/statuses/user_timeline/purethemes.json?count=2&amp;callback=?', function(tweets){*/
/* 						$("#twitter-blog").html(tz_format_twitter(tweets));*/
/* 						}); });*/
/* 					</script>*/
/* 				<div class="clearfix"></div>*/
/* 			</div>*/
/* */
/* */
/* 		</aside>*/
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
/* */
/* <!-- Footer*/
/* ================================================== -->*/
/* */
/* <!-- Footer / Start -->*/
/* <footer id="footer">*/
/* 	<!-- 960 Container -->*/
/* 	<div class="container">*/
/* */
/* 		<!-- About -->*/
/* 		<div class="four columns">*/
/* 			<img id="logo-footer"   src="{{ asset('bundles/voyage/images/logo-footer.png') }}"  alt="" />*/
/*                        */
/* 			<p>Morbi gravida imperdiet rutrum fusce mattis, lectus consequat vestibulum, duinibh fermentum ligula.</p>*/
/* 		</div>*/
/* */
/* 		<!-- Contact Details -->*/
/* 		<div class="four columns">*/
/* 			<h4>Contact Details</h4>*/
/* 			<ul class="contact-details-alt">*/
/* 				<li><i class="halflings white map-marker"></i> <p><strong>Address:</strong> 123 Seward Street, Oklahoma City, USA</p></li>*/
/* 				<li><i class="halflings white user"></i> <p><strong>Phone:</strong> +48 880 440 110</p></li>*/
/* 				<li><i class="halflings white envelope"></i> <p><strong>Email:</strong> <a href="#">mail@example.com</a></p></li>*/
/* 			</ul>*/
/* 		</div>*/
/* */
/* 		<!-- Photo Stream -->*/
/* 		<div class="four columns">*/
/* 			<h4>Photo Stream</h4>*/
/* 			<div class="flickr-widget">*/
/* 				<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=48035108@N07"></script>*/
/* 				<div class="clearfix"></div>*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- Twitter -->*/
/* 		<div class="four columns">*/
/* 			<h4>Twitter</h4>*/
/* 			<ul id="twitter"></ul>*/
/* 				<script type="text/javascript">*/
/* 					jQuery(document).ready(function($){*/
/* 					$.getJSON('http://api.twitter.com/1/statuses/user_timeline/vasterad.json?count=1&amp;callback=?', function(tweets){*/
/* 					$("#twitter").html(tz_format_twitter(tweets));*/
/* 					}); });*/
/* 				</script>*/
/* 			<div class="clearfix"></div>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* 	<!-- 960 Container / End -->*/
/* */
/* </footer>*/
/* <!-- Footer / End -->*/
/* */
/* */
/* <!-- Footer Bottom / Start  -->*/
/* <footer id="footer-bottom">*/
/* */
/* 	<!-- 960 Container -->*/
/* 	<div class="container">*/
/* */
/* 		<!-- Copyrights -->*/
/* 		<div class="eight columns">*/
/* 			<div class="copyright">*/
/* 				© Copyright 2012 by <a href="#">Nevia</a>. All Rights Reserved.*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 		<!-- Menu -->*/
/* 		<div class="eight columns">*/
/* 			<nav id="sub-menu">*/
/* 				<ul>*/
/* 					<li><a href="#">FAQ's</a></li>*/
/* 					<li><a href="#">Sitemap</a></li>*/
/* 					<li><a href="#">Contact</a></li>*/
/* 				</ul>*/
/* 			</nav>*/
/* 		</div>*/
/* */
/* 	</div>*/
/* 	<!-- 960 Container / End -->*/
/* */
/* </footer>*/
/* <!-- Footer Bottom / End -->*/
/* */
/* */
/* <!-- Style Switcher*/
/* ================================================== -->*/
/*  <link href="{{ asset('bundles/voyage/css/switcher.css') }}" rel="stylesheet">*/
/*  <script src="{{ asset('bundles/voyage/scripts/switcher.js') }}" rel="javascript"></script>*/
/* */
/* <section id="style-switcher">*/
/* 	<h2>Style Switcher <a href="#"></a></h2>*/
/* 	<div>*/
/* 	<h3>Predefined Colors</h3>*/
/* 		<ul class="colors" id="color1">*/
/* 			<li><a href="#" class="blue" title="Blue"></a></li>*/
/* 			<li><a href="#" class="green" title="Green"></a></li>*/
/* 			<li><a href="#" class="orange" title="Orange"></a></li>*/
/* 			<li><a href="#" class="navy" title="Navy"></a></li>*/
/* 			<li><a href="#" class="yellow" title="Yellow"></a></li>*/
/* 			<li><a href="#" class="peach" title="Peach"></a></li>*/
/* 			<li><a href="#" class="beige" title="Beige"></a></li>*/
/* 			<li><a href="#" class="purple" title="Purple"></a></li>*/
/* 			<li><a href="#" class="red" title="Red"></a></li>*/
/* 			<li><a href="#" class="pink" title="Pink"></a></li>*/
/* 			<li><a href="#" class="celadon" title="Celadon"></a></li>*/
/* 			<li><a href="#" class="brown" title="Brown"></a></li>*/
/* 			<li><a href="#" class="cherry" title="Cherry"></a></li>*/
/* 			<li><a href="#" class="gray" title="Gray"></a></li>*/
/* 			<li><a href="#" class="dark" title="Dark"></a></li>*/
/* 			<li><a href="#" class="cyan" title="Cyan"></a></li>*/
/* 			<li><a href="#" class="olive" title="Olive"></a></li>*/
/* 			<li><a href="#" class="dirty-green" title="Dirty Green"></a></li>*/
/* 		</ul>*/
/* 		*/
/* 	<h3>Menu Style</h3>*/
/* 	<select id="menu-style">*/
/* 		<option value="1">Style 1</option>*/
/* 		<option value="2">Style 2</option>*/
/* 	</select>*/
/* */
/* 	<h3>Background Image</h3>*/
/* 		 <ul class="colors bg" id="bg">*/
/* 			<li><a href="#" class="bg1"></a></li>*/
/* 			<li><a href="#" class="bg2"></a></li>*/
/* 			<li><a href="#" class="bg3"></a></li>*/
/* 			<li><a href="#" class="bg4"></a></li>*/
/* 			<li><a href="#" class="bg5"></a></li>*/
/* 			<li><a href="#" class="bg6"></a></li>*/
/* 			<li><a href="#" class="bg7"></a></li>*/
/* 			<li><a href="#" class="bg8"></a></li>*/
/* 			<li><a href="#" class="bg9"></a></li>*/
/* 			<li><a href="#" class="bg10"></a></li>*/
/* 			<li><a href="#" class="bg11"></a></li>*/
/* 			<li><a href="#" class="bg12"></a></li>*/
/* 			<li><a href="#" class="bg13"></a></li>*/
/* 			<li><a href="#" class="bg14"></a></li>*/
/* 			<li><a href="#" class="bg15"></a></li>*/
/* 			<li><a href="#" class="bg16"></a></li>*/
/* 			<li><a href="#" class="bg17"></a></li>*/
/* 			<li><a href="#" class="bg18"></a></li>*/
/* 		</ul>*/
/* 	</div>*/
/* */
/* 	<div id="reset"><a href="#" class="button color blue">Reset</a></div>*/
/* */
/* </section>*/
/*   {% endblock %}*/
