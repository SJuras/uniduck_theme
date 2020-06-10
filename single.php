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

  <div class="full-post">

    <div class="full-post-header">
      <div class="img-overlay"></div>
      <img src="<?php the_post_thumbnail_url();?>">

      <div class="full-post-header-content">
        <h1><?php the_title(); ?></h1>

        <div class="att-author">
          <i class="fas fa-user-circle"></i>
          Krešo The Duck</div>
      </div>
      <a class="back-link" href="http://localhost/uniduck/">Back to blog</a>
    </div>
    <div class="container">
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

    <p class="more-magic">More Magic</p>

    <?php
    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
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
        <div class="row">
          <div class="col-md-6">
            <div class="rel-image">
              <img src="<?php the_post_thumbnail_url();?>">
            </div>
          </div>
          <div class="col-md-6">
              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><p class="rel-title"><?php the_title(); ?><p/></a>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>"><p class="rel-read-more">Read More</p></a>
          </div>
        <div>
        <?php
        endwhile;
      }
      wp_reset_query();
    }
    ?>

    </div>

  </div>



<?php get_footer(); ?>
