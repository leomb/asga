<?php
$featured_image = has_post_thumbnail() ? get_the_post_thumbnail() : get_theme_file_uri('/assets/img/default-thumbnail.jpg');
?>
<div class="container-fluid hero dark">
  <?php echo $featured_image; ?>
  <h1><?php the_title(); ?></h1>
</div>

<article class="page-wrapper">
	<?php the_content(); ?>
</article>
