<!doctype html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<?php if (  (is_home()) || (is_front_page())  ) { ?>
  <meta name="description" content="Tetchi's Blog on Web Design, Graphic Design, Shopify, and Art."/>
  <?php } elseif (is_single()) { ?>
  <meta name="description" content="<?php echo strip_tags(get_the_excerpt());?>"/>
  <?php } ?>
	<meta name="author" content="Tetsuro Takara">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1" />

	<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

	<!-- CSS: implied media="all" -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css" type="text/css" media="screen" />
 	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
	<script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-1.7.min.js"></script>
</head>
