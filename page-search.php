<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>
<body>
  <div class="content__wrapper">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <div class="post">
          <h1 class="post__title post__title--bottom-margin">
            <?php the_title(); ?>
          </h1>
          <div class="search-bar">
            <?php get_search_form(); ?>
          </div>
          <?php the_content('',FALSE,''); ?>
          <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
        </div>
      <?php endwhile; ?>
    <?php else : ?>
      <div class="post">
        <?php _e('Not Found'); ?>
      </div>
    <?php endif; ?>
    <?php get_footer(); ?>
  </div>
</body>
</html>
