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

  function wpb_password_post_filter( $where = '' ) {
    if (!is_single() && !is_admin()) {
        $where .= " AND post_password = ''";
    }
    return $where;
  }
  
  add_filter( 'posts_where', 'wpb_password_post_filter' );

  add_filter( 'rest_allow_anonymous_comments', '__return_true' );

  register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'twentynineteen' ),
				'footer' => __( 'Footer Menu', 'twentynineteen' ),
				'social' => __( 'Social Links Menu', 'twentynineteen' ),
			)
		);
?>
