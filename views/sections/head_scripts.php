<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<!-- Set the viewport width to device width for mobile -->
	<meta name="viewport" content="width=device-width,initial-scale=1" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<!-- Descriptive Meta Tags -->
	<meta name="keywords" content="vostlink, learn coding, code, coding, programming, helping"/>
	<meta name="description" content="Change people's lives while learning."/>
	<meta name="copyright" content="Copyright (c) Vostlink 2014"/>
	<meta name="language" content="EN-GB"/>
	<meta name="author" content="Vostlink, vostlink@gmail.com"/>

	<!-- Open Graph Meta Tags -->
	<meta property="og:title" content="Vostlink"/>
	<meta property="og:site_name" content="Vostlink"/>
	<meta property="og:description" content="Change people's lives while learning."/>
	<meta property="og:url" content="http://www.vostlink.com/"/>
	<meta property="og:image" content="http://www.vostlink/images/opengraph.jpg"/>
	<!-- <meta property="og:type" content="website"/> --> <!-- No longer exists? -->

	<title>
		<?php if (!isset($page_title)){echo "Welcome";} else {echo $page_title;} ?>
	</title>

	<!-- My Stylesheet (do CSS changes here) -->
	<link rel="stylesheet" type="text/css" href="/css/style.css"/>

	<!-- Included CSS Files -->
	<link rel="stylesheet" type="text/css" href="/css/foundation.css"/>
	<link rel="stylesheet" type="text/css" href="/css/foundation-icons.css"/>
	<link rel="stylesheet" href="/css/lightbox.css"/>
	<script src="/js/vendor/modernizr.js"></script> <!-- Was: src="/js/vendor/custom.modernizr.js" -->
	
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="icon" type="image/ico" href="images/favicon.ico"/>
	<link rel="image_src" href="http://www.vostlink/images/opengraph.jpg" />
	<!-- Necessary Scripts -->
	<script src="js/head.load.min.js"></script>
</head>
<body>