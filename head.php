<!doctype html>
  <head>
    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Tetsuro Takara">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:type" content="blog"/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@t3tchi" />
    <meta name="twitter:creator" content="@t3tchi" />

    <?php if ( (is_home()) || (is_front_page())  ) { ?>
      <meta name="description" content="Tetchi's blog about life and stuff."/>
      <meta property="og:description" content="Tetchi's blog about life and stuff."/>
      <meta property="og:title" content="Tetchi blog" />
      <meta property="og:image" content="<?php echo bloginfo('template_directory'); ?>/img/tetchi-profile.jpg"/>
    <?php } elseif (is_single()) { ?>
      <meta name="description" content="<?php echo strip_tags(get_the_excerpt());?>"/>
      <meta property="og:description" content="<?php echo get_the_excerpt(); ?>"/>
      <meta property="og:title" content="<?php echo get_the_title(); ?>" />
      <meta property="og:url" content="<?php echo get_permalink(); ?>" />
      <meta name="twitter:description" content="<?php echo get_the_excerpt(); ?>">
      <?php if (has_post_thumbnail()) { ?>
        <?php 
          $thumbnailSrc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
          $image = esc_attr($thumbnailSrc[0]);
        ?>
        <meta property="og:image" content="<?php echo $image; ?>"/>
      <?php } else { ?>
        <meta property="og:image" content="<?php echo bloginfo('template_directory'); ?>/img/tetchi-profile.jpg"/>
      <?php } ?>
    <?php } elseif (is_page()) { ?>
      <meta property="og:image" content="<?php echo bloginfo('template_directory'); ?>/img/tetchi-profile.jpg"/>
      <meta property="og:title" content="<?php echo get_the_title(); ?>" />
      <meta property="og:url" content="<?php echo get_permalink(); ?>" />
    <?php } ?>

    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicon-16x16.png">

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:700" rel="stylesheet">

    <script src="<?php echo bloginfo('template_directory'); ?>/js/app.js" />


    <!-- GA Stuff -->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-26860761-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
  </head>
