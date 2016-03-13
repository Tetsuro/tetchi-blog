<?php
/*
Template Name: Tags Page
*/
?>

<?php get_template_part('head'); ?>
<body>
  <?php get_header(); ?>
  <main class="content__wrapper" role="main" id="main-content" tabindex="0">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <article class="post" role="article">
          <h2 class="post__title post__title--bottom-margin">
            <?php the_title(); ?>
          </h2>
          <ul>
            <?php wp_list_categories('title_li='); ?>
          </ul>
          <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <article class="post" role="article">
        <?php _e('Not Found'); ?>
      </article>
    <?php endif; ?>
    <?php get_footer(); ?>
  </main>
</body>
</html>
