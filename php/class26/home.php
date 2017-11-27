<?php
include('header.php');

?>
<section>
	<p><?php content_f();?></p>
 	<h2><?php blog_info('url'); ?></h2>
 	<h2><?php blog_info("description"); ?></h2>
 	<h2><?php blog_info('url'); ?></h2>
 	<h2><?php blog_info('title'); ?></h2>
 	<h2><?php blog_info(); echo " php"; ?></h2>
 	<h2><?php jogkorbo(50,60); ?></h2>
 	<h2><?php jogkorbo(20,60); ?></h2>
 	<h2><?php jogkorbo(10,60); ?></h2>
 	<h2><?php onakitem_jog(); ?></h2>
</section>
<?php
 include_once('footer.php')

?>