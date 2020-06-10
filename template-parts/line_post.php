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
		<p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="read-more">Read More</a></p>
	</div>

	<div class="info">
	  

		<div class="social">
			<span class="favs"><i class="fa fa-heart" aria-hidden="true"></i>17  favs</span>
			<span class="comments"><i class='fas fa-comment'></i>22  comments</span>
		</div>
	</div>

</article><!-- .post -->
