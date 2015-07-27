
<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
<script>window.jQuery || document.write("<script src='<?php bloginfo('stylesheet_url'); ?>/js/libs/jquery-1.5.1.min.js'>\x3C/script>")</script>
<script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery.fitvids.js"></script>

<!--[if lt IE 7 ]>
<script src="js/libs/dd_belatedpng.js"></script>
<script>DD_belatedPNG.fix("img, .png_bg"); // Fix any <img> or .png_bg bg-images. Also, please read goo.gl/mZiyb </script>
<![endif]-->

<script>
$(document).ready(function() {
  $(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    $(".post").fitVids();
	//Center all image wrapper paragraphs
	$(".post img").parent().parent('p').css('text-align','center');
	//$(".post img").parent('p').css('text-align','center');

  });   // put all your jQuery goodness in here.
 });
</script>

