<!DOCTYPE html>
<html lang="en">
<head>
    <title>Blog Site Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="shortcut icon" href="images/logo.png">


	<?php wp_head(); ?>

</head>

<body>

<?php get_header(); ?>

<div class="container">

    <h3><?php the_title(); ?></h3>

    <img src="<?php the_post_thumbnail_url();?>">

    <?php
  		echo 'Kreso The Duck';
  	?>

    <?php

  	if ( have_posts() ) {

  		while ( have_posts() ) {
  			the_post(); ?>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
  		<?php
      }
  	}

  	?>

  <div class="post-featured-tags">
    <?php
      echo show_tags();
    ?>
  </div>
    <?php
    // show related posts

    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
    echo 'Related Posts';
    $first_tag = $tags[0]->term_id;
    $args=array(
    'tag__in' => array($first_tag),
    'post__not_in' => array($post->ID),
    'posts_per_page'=>1,
    'caller_get_posts'=>1
    );
    $my_query = new WP_Query($args);
    if( $my_query->have_posts() ) {
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    <img src="<?php the_post_thumbnail_url();?>">
    <p><?php the_excerpt(); ?></p>
    <p><a href="<?php the_permalink(); ?>">Read More</a></p>
    <p><?php the_author(); ?></p>
    <?php
    endwhile;
    }
    wp_reset_query();
    }
?>



</div>

<?php get_footer(); ?>
