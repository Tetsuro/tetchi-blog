<div id="placeholder" class="left"></div>
<header class="clearfix">
  <a href="/" class="logo"><img src="<?php bloginfo('template_directory'); ?>/img/tetchi.png"/></a>
  <nav>
    <ul class="clearfix">
      <li><a href="/" <?php if (is_home()  || is_single() || is_search() || is_archive()){echo "class='active'"; } ?>>Blog</a></li>
      <li><a href="/wordpress/about-me" <?php if (is_page('about-me')){echo "class='active'"; } ?>>About</a></li>
    </ul>
  </nav>
  <div id="secondary">
    <div class="side-block tags">
      <strong>Tags:</strong>
      <div style="overflow:hidden">
        <?php wp_list_categories('title_li='); ?>
      </div>
    </div>
    <div class="side-block search">
      <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
        <input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" class="search-bar" placeholder="search..."/>
      <input type="image" src="<?php bloginfo('template_directory'); ?>/img/search.png" class="search-btn" value="Search" class="btn" />
      </form>

    </div>
    <div class="side-block social">
      <a href="http://www.twitter.com/t3tchi" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" /></a>
      <a href="http://www.facebook.com/tetsuro.takara" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" /></a>
      
      <a href="/?feed=rss2" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/rss.png" /></a>
      
    </div>
  </div>
</header>

