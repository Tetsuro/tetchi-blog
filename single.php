<?php get_template_part('head'); ?>
<body class="<?php if(isset($_COOKIE['siteTheme']) && $_COOKIE['siteTheme'] == 'dark') { echo "dark-theme"; } ?>">
  <?php get_header(); ?>
  <main class="content__wrapper" role="main" id="main-content" tabindex="0">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="post" role="article">
          <h2 class="post__title">
            <?php the_title(); ?>
          </h2>
          <div class="post__metadata">
            <p>
              <?php the_time('F j, Y'); ?> under <?php the_category("<span aria-hidden='true'>, </span>") ?>
            </p>
          </div>
          <?php if (has_post_thumbnail()) : ?>
            <div class="post__thumbnail">
	            <?php the_post_thumbnail(); ?>
            </div>
          <?php endif ?>
          <?php if (has_excerpt()) : ?>
            <div class="post__excerpt">
	            <?php the_excerpt(); ?>
            </div>
          <?php endif ?>
          <?php the_content('',FALSE,''); ?>
          <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
        </article>
        <div class="comments" name="comments">
          <?php comments_template(); ?>
        </div>
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
