<!doctype html>
<?php get_template_part('head'); ?>
<header class="header">
  <div class="header__content content__wrapper">
    <h1 class="visually-hidden"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">tetchi's blawg</a></h1>
    <div class="header__logo" aria-hidden="true">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php bloginfo('template_directory'); ?>/img/tetchi.gif"/ alt="Tetchi Burger"></a>
    </div>
    <nav class="header__nav">
      <ul class="header__links">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php if (is_home()  || is_single() || is_search() || is_archive()){echo "class='active'"; } ?>>blawg</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-me" <?php if (is_page('about-me')){echo "class='active'"; } ?>>about</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>search" <?php if (is_page('search')){echo "class='active'"; } ?>>search</a></li>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>tags" <?php if (is_page('tags')){echo "class='active'"; } ?>>tags</a></li>
      </ul>
      <div class="header__subtext">
        <span>tetchi's blog. bass // burgers // bahds.</span>
      </div>
    </nav>
  </div>
</header>
