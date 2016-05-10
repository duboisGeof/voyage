<?php

/* VoyageBundle:Layout:contact.html.twig */
class __TwigTemplate_00578b99a1835fa8ccdd31a1edb3eb5dfee23f86ca74f9f73c7c1533b47200b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "VoyageBundle:Layout:contact.html.twig", 1);
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
        $__internal_330b952daecae81b16b0fb4b0004743e45d7c49accee8ea5f7088dd7a3ae9f95 = $this->env->getExtension("native_profiler");
        $__internal_330b952daecae81b16b0fb4b0004743e45d7c49accee8ea5f7088dd7a3ae9f95->enter($__internal_330b952daecae81b16b0fb4b0004743e45d7c49accee8ea5f7088dd7a3ae9f95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VoyageBundle:Layout:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_330b952daecae81b16b0fb4b0004743e45d7c49accee8ea5f7088dd7a3ae9f95->leave($__internal_330b952daecae81b16b0fb4b0004743e45d7c49accee8ea5f7088dd7a3ae9f95_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fbf69aed8a5a73de86c6a6dda7857a90d30f5c66c8c792ac47d3ba322c92df0 = $this->env->getExtension("native_profiler");
        $__internal_8fbf69aed8a5a73de86c6a6dda7857a90d30f5c66c8c792ac47d3ba322c92df0->enter($__internal_8fbf69aed8a5a73de86c6a6dda7857a90d30f5c66c8c792ac47d3ba322c92df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div id=\"wrapper\">

<!-- Header
================================================== -->
<div id=\"top-line\"></div>

 <div class=\"container\">

            <!-- Header -->
            ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "            <!-- Header / End -->

            <div class=\"clearfix\"></div>

        </div>


<!-- Navigation
================================================== -->
 ";
        // line 24
        $this->displayBlock('navigation', $context, $blocks);
        // line 25
        echo "<div class=\"clearfix\"></div>


<!-- Content
================================================== -->
<div id=\"content\">


<!-- 960 Container -->
<div class=\"container floated\">

\t<div class=\"sixteen floated page-title\">

\t\t<h2>Contact</h2>

\t\t

\t</div>

</div>
<!-- 960 Container / End -->


<!-- 960 Container -->
<div class=\"container floated\">

\t<!-- Sidebar -->
\t<div class=\"four floated sidebar left\">
\t\t<aside class=\"sidebar padding-reset\">

\t\t\t<div class=\"widget\">
\t\t\t\t<h4>Information</h4>
\t\t\t\t<p>Phasellus ultricies id suscipit mauris monte lobortis. Cum sociis natoque penatibus magnis parturient.</p>
\t\t\t</div>

\t\t\t<div class=\"widget\">
\t\t\t\t<h4>General Inquiries</h4>

\t\t\t\t<ul class=\"contact-informations\">
\t\t\t\t\t<li><span class=\"address\">123 Seward Street</span></li>
\t\t\t\t\t<li><span class=\"address\">Los Angeles, CA 90185, USA</span></li>
\t\t\t\t</ul>

\t\t\t\t<ul class=\"contact-informations second\">
\t\t\t\t\t<li><i class=\"halflings headphones\"></i> <p>+48 880 440 110</p></li>
\t\t\t\t\t<li><i class=\"halflings envelope\"></i> <p>support@example.com</p></li>
\t\t\t\t\t<li><i class=\"halflings globe\"></i> <p>www.example.com</p></li>
\t\t\t\t</ul>

\t\t\t</div>

\t\t\t<div class=\"widget\">
\t\t\t\t<h4>Business Hours</h4>
\t\t\t\t<ul class=\"contact-informations hours\">
\t\t\t\t\t<li><i class=\"halflings time\"></i>Monday - Friday <span class=\"hours\">8 am to 4 pm</span></li>
\t\t\t\t\t<li><i class=\"halflings time\"></i>Saturday <span class=\"hours\">9 am to 2 pm</span></li>
\t\t\t\t\t<li><i class=\"halflings ban-circle\"></i>Sunday <span class=\"hours\">Closed</span></li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t</aside>
\t</div>
\t<!-- Sidebar / End -->

\t<!-- Page Content -->
\t<div class=\"eleven floated\">
\t\t<section class=\"page-content\">

\t\t\t<h3 class=\"margin-reset\">Our Location</h3>

\t\t\t<br />

\t\t\t<!-- Google Maps -->
\t\t\t<section class=\"google-map-container\">



\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2609.22810602945!2d2.3038669155467137!3d49.158278387498385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e64535c6aa19c9%3A0x795ed26106eac640!2s20+Rue+du+Val+d&#39;Oise%2C+95340+Bernes-sur-Oise!5e0!3m2!1sfr!2sfr!4v1461768834906\" width=\"640\" height=\"256\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>
\t\t\t</section>
\t\t\t<!-- Google Maps / End -->


\t\t\t<h3 class=\"margin\">Contact Form</h3>
\t\t\t<p class=\"margin\">The simple contact form below comes packed within this theme. This HTML5 & AJAX contact form utilises cutting edge HMTL5 code and jQuery animations to make your contact page elegant and ultra-usable.</p>

\t\t\t\t<!-- Contact Form -->
\t\t\t\t<section id=\"contact\">

\t\t\t\t\t<!-- Success Message -->
\t\t\t\t\t<mark id=\"message\"></mark>

\t\t\t\t\t<!-- Form -->
\t\t\t\t\t<form method=\"post\" action=\"http://vasterad.com/themes/nevia/contact.php\" name=\"contactform\" id=\"contactform\">

\t\t\t\t\t\t<fieldset>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<label for=\"name\" accesskey=\"U\">Name:</label>
\t\t\t\t\t\t\t\t<input name=\"name\" type=\"text\" id=\"name\" />
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<label for=\"email\" accesskey=\"E\">Email: <span>*</span></label>
\t\t\t\t\t\t\t\t<input name=\"email\" type=\"email\" id=\"email\" pattern=\"^[A-Za-z0-9](([_\\.\\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\\.\\-]?[a-zA-Z0-9]+)*)\\.([A-Za-z]{2,})\$\" />
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<label for=\"comments\" accesskey=\"C\">Message: <span>*</span></label>
\t\t\t\t\t\t\t\t<textarea name=\"comments\" cols=\"40\" rows=\"3\" id=\"comments\" spellcheck=\"true\"></textarea>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t</fieldset>

\t\t\t\t\t\t<input type=\"submit\" class=\"submit\" id=\"submit\" value=\"Send Message\" />
\t\t\t\t\t\t<div class=\"clearfix\"></div>

\t\t\t\t\t</form>

\t\t\t\t</section>
\t\t\t\t<!-- Contact Form / End -->


\t\t</section>
\t</div>
\t<!-- Page Content / End -->


</div>
<!-- 960 Container / End -->

</div>
<!-- Content / End -->

</div>
    <!-- Content / End -->



";
        
        $__internal_8fbf69aed8a5a73de86c6a6dda7857a90d30f5c66c8c792ac47d3ba322c92df0->leave($__internal_8fbf69aed8a5a73de86c6a6dda7857a90d30f5c66c8c792ac47d3ba322c92df0_prof);

    }

    // line 14
    public function block_header($context, array $blocks = array())
    {
        $__internal_d836181bbbcc3c8046dc188357075c5c5474db19d23293e99997b7376c15ca49 = $this->env->getExtension("native_profiler");
        $__internal_d836181bbbcc3c8046dc188357075c5c5474db19d23293e99997b7376c15ca49->enter($__internal_d836181bbbcc3c8046dc188357075c5c5474db19d23293e99997b7376c15ca49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $this->displayParentBlock("header", $context, $blocks);
        
        $__internal_d836181bbbcc3c8046dc188357075c5c5474db19d23293e99997b7376c15ca49->leave($__internal_d836181bbbcc3c8046dc188357075c5c5474db19d23293e99997b7376c15ca49_prof);

    }

    // line 24
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_bec815c39cf39299c0fc548473b218b8316b1ba18457125561f5805f576e13db = $this->env->getExtension("native_profiler");
        $__internal_bec815c39cf39299c0fc548473b218b8316b1ba18457125561f5805f576e13db->enter($__internal_bec815c39cf39299c0fc548473b218b8316b1ba18457125561f5805f576e13db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $this->displayParentBlock("navigation", $context, $blocks);
        
        $__internal_bec815c39cf39299c0fc548473b218b8316b1ba18457125561f5805f576e13db->leave($__internal_bec815c39cf39299c0fc548473b218b8316b1ba18457125561f5805f576e13db_prof);

    }

    public function getTemplateName()
    {
        return "VoyageBundle:Layout:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 24,  213 => 14,  68 => 25,  66 => 24,  55 => 15,  53 => 14,  42 => 5,  36 => 4,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     <div id="wrapper">*/
/* */
/* <!-- Header*/
/* ================================================== -->*/
/* <div id="top-line"></div>*/
/* */
/*  <div class="container">*/
/* */
/*             <!-- Header -->*/
/*             {% block header %}{{ parent() }}{% endblock %}*/
/*             <!-- Header / End -->*/
/* */
/*             <div class="clearfix"></div>*/
/* */
/*         </div>*/
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
/* 	<div class="sixteen floated page-title">*/
/* */
/* 		<h2>Contact</h2>*/
/* */
/* 		*/
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
/* 	<!-- Sidebar -->*/
/* 	<div class="four floated sidebar left">*/
/* 		<aside class="sidebar padding-reset">*/
/* */
/* 			<div class="widget">*/
/* 				<h4>Information</h4>*/
/* 				<p>Phasellus ultricies id suscipit mauris monte lobortis. Cum sociis natoque penatibus magnis parturient.</p>*/
/* 			</div>*/
/* */
/* 			<div class="widget">*/
/* 				<h4>General Inquiries</h4>*/
/* */
/* 				<ul class="contact-informations">*/
/* 					<li><span class="address">123 Seward Street</span></li>*/
/* 					<li><span class="address">Los Angeles, CA 90185, USA</span></li>*/
/* 				</ul>*/
/* */
/* 				<ul class="contact-informations second">*/
/* 					<li><i class="halflings headphones"></i> <p>+48 880 440 110</p></li>*/
/* 					<li><i class="halflings envelope"></i> <p>support@example.com</p></li>*/
/* 					<li><i class="halflings globe"></i> <p>www.example.com</p></li>*/
/* 				</ul>*/
/* */
/* 			</div>*/
/* */
/* 			<div class="widget">*/
/* 				<h4>Business Hours</h4>*/
/* 				<ul class="contact-informations hours">*/
/* 					<li><i class="halflings time"></i>Monday - Friday <span class="hours">8 am to 4 pm</span></li>*/
/* 					<li><i class="halflings time"></i>Saturday <span class="hours">9 am to 2 pm</span></li>*/
/* 					<li><i class="halflings ban-circle"></i>Sunday <span class="hours">Closed</span></li>*/
/* 				</ul>*/
/* 			</div>*/
/* */
/* 		</aside>*/
/* 	</div>*/
/* 	<!-- Sidebar / End -->*/
/* */
/* 	<!-- Page Content -->*/
/* 	<div class="eleven floated">*/
/* 		<section class="page-content">*/
/* */
/* 			<h3 class="margin-reset">Our Location</h3>*/
/* */
/* 			<br />*/
/* */
/* 			<!-- Google Maps -->*/
/* 			<section class="google-map-container">*/
/* */
/* */
/* */
/* 				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2609.22810602945!2d2.3038669155467137!3d49.158278387498385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e64535c6aa19c9%3A0x795ed26106eac640!2s20+Rue+du+Val+d&#39;Oise%2C+95340+Bernes-sur-Oise!5e0!3m2!1sfr!2sfr!4v1461768834906" width="640" height="256" frameborder="0" style="border:0" allowfullscreen></iframe>*/
/* 			</section>*/
/* 			<!-- Google Maps / End -->*/
/* */
/* */
/* 			<h3 class="margin">Contact Form</h3>*/
/* 			<p class="margin">The simple contact form below comes packed within this theme. This HTML5 & AJAX contact form utilises cutting edge HMTL5 code and jQuery animations to make your contact page elegant and ultra-usable.</p>*/
/* */
/* 				<!-- Contact Form -->*/
/* 				<section id="contact">*/
/* */
/* 					<!-- Success Message -->*/
/* 					<mark id="message"></mark>*/
/* */
/* 					<!-- Form -->*/
/* 					<form method="post" action="http://vasterad.com/themes/nevia/contact.php" name="contactform" id="contactform">*/
/* */
/* 						<fieldset>*/
/* */
/* 							<div>*/
/* 								<label for="name" accesskey="U">Name:</label>*/
/* 								<input name="name" type="text" id="name" />*/
/* 							</div>*/
/* */
/* 							<div>*/
/* 								<label for="email" accesskey="E">Email: <span>*</span></label>*/
/* 								<input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" />*/
/* 							</div>*/
/* */
/* 							<div>*/
/* 								<label for="comments" accesskey="C">Message: <span>*</span></label>*/
/* 								<textarea name="comments" cols="40" rows="3" id="comments" spellcheck="true"></textarea>*/
/* 							</div>*/
/* */
/* 						</fieldset>*/
/* */
/* 						<input type="submit" class="submit" id="submit" value="Send Message" />*/
/* 						<div class="clearfix"></div>*/
/* */
/* 					</form>*/
/* */
/* 				</section>*/
/* 				<!-- Contact Form / End -->*/
/* */
/* */
/* 		</section>*/
/* 	</div>*/
/* 	<!-- Page Content / End -->*/
/* */
/* */
/* </div>*/
/* <!-- 960 Container / End -->*/
/* */
/* </div>*/
/* <!-- Content / End -->*/
/* */
/* </div>*/
/*     <!-- Content / End -->*/
/* */
/* */
/* */
/* {% endblock %}*/
