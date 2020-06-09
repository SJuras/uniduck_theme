<article id="post-<?php the_ID(); ?>" class="line-post<?php if ( $featured ) : ?> featured<?php endif; ?>">

	<div class="att-image">
		<img src="<?php the_post_thumbnail_url();?>">
	</div>

	<div class="att-date">
		<?php echo get_the_date('F d, Y'); ?>
	</div>

	<h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<?php
		echo show_tags();
	?>

	<div class="att-intro">
		<p><?php the_excerpt(); ?></p>
	</div>

	<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>

	<div class="info">
		<span class="att-author">
			<?php
				$name = 'Kreso The Duck';
				echo $name;
			?>
		</span>

		<div class="social">
			<span class="favs">17  favs</span>
			<span class="comments">22  comments</span>
		</div>
	</div>









</article><!-- .post -->
