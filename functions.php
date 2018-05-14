<?php 
  function mytheme_setup_theme_supported_features() {
    add_theme_support( 'align-wide' );
    add_theme_support('post-thumbnails', array(
      'post',
      'page',
      'custom-post-type-name',
    ));
  }

  add_action('after_setup_theme', 'mytheme_setup_theme_supported_features');
?>