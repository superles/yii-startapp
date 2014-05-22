<?php
$msg='* = required field';
if(isset($_GET['msg']) && $_GET['msg']=='missing-variables') {
	$msg='Please verify fields and try again.';
} else if(isset($_GET['msg']) && $_GET['msg']=='invalid-email-address') {
	$msg='Please enter a valid e-mail address and try again.';
} else if(isset($_GET['msg']) && $_GET['msg']=='mail-failed') {
	$msg='There was an error sending your message. Please try again.';
} else if(isset($_GET['msg']) && $_GET['msg']=='mail-sent') {
	$msg='Message sent.';
}
?><!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<title>Contact | Raw HTML Template Demo</title>

<!-- Favicon -->
<link rel="shortcut icon" href="favicon.png" />

<!-- Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,700" />

<!-- Stylesheets -->
<link rel='stylesheet' href='css/flexslider.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/jquery.fancybox-1.3.4.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/epicslider.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/udt_shortcodes.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/skin.css' type='text/css' media='all' />
<link rel='stylesheet' href='css/udt_media_queries.css' type='text/css' media='all' />

<!-- Scripts -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type='text/javascript' src='js/jquery-1.11.0.min.js'></script>
<script type='text/javascript' src='js/jquery-migrate-1.2.1.min.js'></script>

</head>
<body class="page">

<!-- Header -->
<div id="header-wrapper">

	<div id="header-inner">
		<header>
			<!-- Logo -->
			<div id="logo">
				<a href="index.html" title="Raw HTML Template Demo White">
					<img src="images/logo.png" alt="Raw HTML Template Demo White">
				</a>
			</div>

			<!-- Mobile Menu Toggle -->
			<div class="mobile-menu-toggle"><a href=""></a></div>

			<!-- Navigation -->
			<nav id="primary-nav">
				<div class="menu-container">
					<ul id="menu-1" class="menu">
						<li class="menu-item"><a href="index.html">Home</a></li>
						<li class="menu-item"><a href="the-team.html">The Team</a></li>
						<li class="menu-item"><a href="portfolio.html">Portfolio</a></li>
						<li class="menu-item"><a href="blog.html">Blog</a></li>
						<li class="menu-item"><a href="images-captions.html">Styling</a>
							<ul class="sub-menu">
								<li class="menu-item"><a href="images-captions.html">Images & Captions</a></li>
								<li class="menu-item"><a href="layout.html">Layout</a></li>
								<li class="menu-item"><a href="media.html">Media</a></li>
								<li class="menu-item"><a href="ui.html">UI</a></li>
							</ul>
						</li>
						<li class="menu-item current-menu-item current_page_item"><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</nav>

		</header>
		<div style="clear:both;"></div>
	</div>

	<div style="clear:both;"></div>

	<div class="header-widget-box">
		<div class="header-outer-widget-wrapper">
			<div class="header-widget-wrapper">
				<ul>
					<li class="widget widget_text">
						<h4 class="widget-title">Get In Touch</h4>
						<div class="textwidget">
							<p>This is a widget area. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</li>
				</ul>
			</div>
			
			<ul class="connect black">
				<li><a href="#" title="500px" class="fivehundredpx">500px</a></li>
				<li><a href="#" title="DeviantArt" class="deviantart">DeviantArt</a></li>
				<li><a href="#" title="Dribbble" class="dribbble">Dribbble</a></li>
				<li><a href="#" title="Facebook" class="facebook">Facebook</a></li>
				<li><a href="#" title="Flickr" class="flickr">Flickr</a></li>
				<li><a href="#" title="LinkedIn" class="linkedin">LinkedIn</a></li>
			</ul>
			<div style="clear:both;"></div>

			<div class="mobile-widget-box-toggle-wrapper">
				<a href="#">Toggle</a>
			</div>
		</div>
	</div>

	<div style="clear:both;"></div>
</div>
<!-- Header End -->

<!-- Content Area -->
<div id="content-wrapper">

	<section class="pages clearfix">

		<!-- Section Title -->
		<div id="section-title">
			<h1>Contact</h1>
		</div>
		<!-- Section Title End -->

		<!-- Content Left -->
		<div class="content-inner-left">

			<div class="map" id="map_canvas" style="width:100%; height:300px;" data-map-lat="40.712845" data-map-long="-73.762207" data-map-zoom="15" data-map-marker="custom" data-map-info-title="Raw New York" data-map-info-content=" Tel: +1 55 65 15 45 85 <br /> Fax:+1 65 98 56 45 45 <br />NY 5th Avenue, Brooklyn, NY."></div>
			
			<div class="column_one_third">
				<p>Tel: +1 55 65 15 45 85<br />
				Fax:+1 65 98 56 45 45<br />
				Mail: <a href="mailto:info@udthemes.com">info@udthemes.com </a><br />
				NY 5th Avenue,<br />
				Brooklyn, New York,<br />
				United States</p>
			</div>
			
			<div class="column_two_thirds last">
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit consequat.</p>
			</div>

			<div style="clear:both;"></div>
			
			<h4>Send us a message</h4>
			<p>Send us an e-mail and we will get back to you in 24 hours.</p>

			<form action="php/contact.php" method="post" class="form contactForm" id="contactForm" novalidate="novalidate">
				<p class="udt_honey">
					<label for="udt_contact_honeypot">Leave this field blank if you're human</label><br>
					<input type="text" name="udt_contact_honeypot" id="udt_contact_honeypot" class="text-field" placeholder="">
				</p>
				<p><input type="text" name="contactName" class="required text-field" id="contactName" placeholder="Your Name*" required="required"></p>
				<p><input type="email" name="contactEmail" class="required text-field" id="contactEmail" placeholder="E-mail*" required="required"></p>
				<p><input type="text" name="contactSubject" class="text-field" id="contactSubject" placeholder="Subject"></p>
				<textarea class="required" name="contactMessage" id="contactMessage" rows="32" cols="8" placeholder="Message*" required="required"></textarea>
				<p><span id="msg"><?php echo $msg; ?></span></p>
				<p style="float:left; clear:both; margin-top:10px;"><input type="submit" class="submit submitTheme submitForm" id="submitContact" name="submitContact" value="Send"></p>
			</form>

		</div>
		<!-- Content Left End -->

		<!-- Sidebar -->
		<aside class="sidebar">
			<ul>
				<li class="widget widget_text">
					<h4 class="widget-title">Video Presentation</h4>
					<div class="textwidget">
						<div class="video" style="width:100%; height:auto; margin-bottom:0;">
							<iframe style="width:100%; height:auto;" src="http://player.vimeo.com/video/58449984?title=0&amp;byline=0&amp;portrait=0&amp;color=FF2E2E&amp;autoplay=0&amp;loop=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
						</div>
					</div>
				</li>
				<li class="widget widget_search">
					<form role="search" method="get" id="searchform" action="#">
						<input type="text" placeholder="Search" name="s" id="s" class="sidebar-searchform" />
						<input type="submit" id="searchsubmit" class="submit submitTheme submitSmall" value="Go" />
					</form>
				</li>
				<li class="widget widget_tag_cloud">
					<h4 class="widget-title">Tags</h4>
					<div class="tagcloud">
						<a href='#' class='tag-link-8' title='1 topic'>Art</a>
						<a href='#' class='tag-link-7' title='2 topics'>Design</a>
						<a href='#' class='tag-link-3' title='2 topics'>Fashion</a>
						<a href='#' class='tag-link-11' title='1 topic'>Illustration</a>
						<a href='#' class='tag-link-10' title='1 topic'>Nature</a>
						<a href='#' class='tag-link-4' title='5 topics'>Photography</a>
						<a href='#' class='tag-link-9' title='1 topic'>Sport</a>
						<a href='#' class='tag-link-2' title='2 topics'>Video</a>
					</div>
				</li>
			</ul>
		</aside>
		<!-- Sidebar End -->

	</section>

</div>
<!-- Content Area End -->

<!-- Footer -->
<div id="footer-wrapper">

	<div id="footer-top" class="clearfix">
		<footer>
			<div class="column_one_third column-footer-widget">
				<ul class="footer-widget">
					<li class="widget widget_text">
						<div class="textwidget">
							<p>
								<img src="images/logo-footer.png" alt="Raw" /><br />
								Raw HTML Template is a responsive HTML5 template ideal for the photographer or studio. With full & fixed width portfolio grids, full width sliders with HTML5 video background & touch support, fashionable captions and much more, this template will make your work stand out.
							</p>
						</div>
					</li>
				</ul>
			</div>

			<div class="column_one_third column-footer-widget">
				<ul class="footer-widget">
					<li class="widget widget_recent_entries">
						<h4 class="widget-title">Recent Posts</h4>
						<ul>
							<li>
								<a href="blog/a-vimeo-post.html" title="A Vimeo Post">A Vimeo Post</a>
								<span class="post-date">October 24, 2013</span>
							</li>
							<li>
								<a href="blog/photo-post.html" title="Photo Post">Photo Post</a>
								<span class="post-date">October 24, 2013</span>
							</li>
							<li>
								<a href="blog/a-youtube-post.html" title="A YouTube Post">A YouTube Post</a>
								<span class="post-date">October 24, 2013</span>
							</li>
							<li>
								<a href="blog/paginated-post.html" title="Paginated Post">Paginated Post</a>
								<span class="post-date">October 23, 2013</span>
							</li>
							<li>
								<a href="blog/a-sticky-post.html" title="A Sticky Post">A Sticky Post</a>
								<span class="post-date">October 20, 2013</span>
							</li>
							<li>
								<a href="blog/a-regular-post.html" title="A Regular Post">A Regular Post</a>
								<span class="post-date">October 20, 2013</span>
							</li>
						</ul>
					</li>
				</ul>
			</div>

			<div class="column_one_third column-footer-widget last">
				<ul class="footer-widget">
					<li class="widget widget_text">
						<h4 class="widget-title">Let’s Collaborate</h4>
						<div class="textwidget">
							<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
							<p>Tel: +1 55 65 15 45 85<br />
							Fax:+1 65 98 56 45 45<br />
							Mail: info@udthemes.com</p>
						</div>
					</li>
				</ul>
			</div>
		
			<div class="clear"></div>
		</footer>
	</div>

	<div id="footer-bottom">
		<div id="footer-bottom-inner-wrapper">
			<footer>
				<!-- Copyright info -->
				<p class="footer-copyright">&copy; <a href="http://udthemes.com" title="Premium WordPress Themes - UDTHEMES">UDTHEMES</a>. All Rights Reserved.</p>
			</footer>
			<!-- "Back to Top" link -->
			<a class="back-to-top" title="Back to top" href="#">Back to top</a>
		</div>
	</div>

</div>
<!-- Footer End -->

<!-- Scripts -->
<script type='text/javascript' src='js/jquery.ui.core.min.js'></script>
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='js/jquery.fancybox-1.3.4.pack.js'></script>
<script type='text/javascript' src='js/jquery.epicHover-fadeZoom.js'></script>
<script type='text/javascript' src='js/jquery.epicslider.js'></script>
<script type='text/javascript' src='js/jquery.flexslider-min-edited.js'></script>
<script type='text/javascript' src='js/jquery.mobile-touch-swipe-1.0.js'></script>
<script type='text/javascript' src='js/settings.js'></script>
<script type='text/javascript' src='js/common.js'></script>
<script type='text/javascript' src='js/udt_shortcodes.js'></script>
<script type='text/javascript' src='http://maps.googleapis.com/maps/api/js?sensor=false'></script>
<script type='text/javascript' src='js/contact.js'></script>

</body>
</html>