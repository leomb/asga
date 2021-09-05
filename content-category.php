<div class="item <?php if (has_post_thumbnail()) { ?>has-thumbnail <?php } ?>" data-aos="fade-up">
	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
	</div>
	<div class="inner-content">
		<h2 class="item-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<p class="post-info">
			<?php echo get_the_excerpt(); ?>
		</p>
		<?php if (is_search() or is_archive()) : ?>
			<p class="excerpt">
				<a href="<?php the_permalink(); ?>" class="button secondary">Read More</a>
			</p>
		<?php endif; if ($post->post_excerpt) : ?>
			<p class="excerpt">
				<?php echo get_the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="button secondary">Read More</a>
			</p>
		<?php endif; ?>
	</div>
</div>
