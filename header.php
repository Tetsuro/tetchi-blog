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


	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">

 	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
</head>

<header class="header">
  <div class="header__content content__wrapper">
    <div class="header__logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php bloginfo('template_directory'); ?>/img/tetchi.gif"/ alt="Tetchi Burger"></a>
    </div>
    <nav class="header__nav">
      <ul class="header__links">
        <li><a href="/"<?php if (is_home()  || is_single() || is_search() || is_archive()){echo "class='active'"; } ?>>Blog</a></li>
        <li><a href="/wordpress/about-me" <?php if (is_page('about-me')){echo "class='active'"; } ?>>About Me</a></li>
        <li><a href="/" <?php if (is_page('about-me')){echo "class='active'"; } ?>>Search</a></li>
        <li><a href="/" <?php if (is_page('about-me')){echo "class='active'"; } ?>>Tags</a></li>
      </ul>
      <div class="header__subtext">
        <span>tetchi's blog. bass // burgers // bahds.
      </div>
    </nav>
  </div>
</header>
