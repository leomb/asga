<?php get_header(); ?>
<!-- TEST -->
	<?php
	if (have_posts()) :
		while (have_posts()) :
			the_post();
			get_template_part('content', 'page');
		endwhile;
		else :
			get_template_part('content', 'none');
		endif;
		?>

<?php get_footer(); ?>
