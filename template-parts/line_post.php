<article id="post-<?php the_ID(); ?>" class="line-post<?php if ( $featured ) : ?> featured<?php endif; ?>">

	<img src="<?php the_post_thumbnail_url();?>">

	<p><?php echo get_the_date('F d, Y'); ?></p>

	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p><?php the_excerpt(); ?></p>
	<p><a href="<?php the_permalink(); ?>">Read More</a></p>

	<p><?php the_author(); ?></p>

	<?php
		$name = 'Kreso The Duck';
		echo $name;
	?>


	<?php
		echo show_tags();
	?>




</article><!-- .post -->
