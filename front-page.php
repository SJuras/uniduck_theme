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
  <h1 class="site-title">
   <?php
       $site_description = get_bloginfo( 'description', 'display' );
       $site_name = get_bloginfo( 'name' );

       if ( $site_description && ( is_home() || is_front_page() ) ):
                  echo  $site_description;
                endif;
   ?>
  </h1>

  <?php get_search_form(); ?>
</div>

<div class="container">



      <?php

      $posts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>7)); ?>

      <?php if ( $posts->have_posts() ) : ?>

      <div class="row">
          <?php $i = 0; ?>
          <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
            <?php if ($i == 0) : ?>
              <?php $featured = true; ?>
            <?php else : ?>
              <?php $featured = false; ?>
            <?php endif; ?>

            <?php if ( $featured ) : ?>
              <div class="col-12">
            <?php else : ?>
              <div class="col-md-4">
            <?php endif; ?>
              <?php set_query_var( 'featured', $featured ); ?>
              <?php get_template_part( 'template-parts/line_post', get_post_format() ); ?>
            </div>
            <?php $i++; ?>
          <?php endwhile; ?>

      </div>

      <?php wp_reset_postdata(); ?>

      <?php else : ?>
          <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>


    <!-- Ajax -->

    <div id="ajax-posts" class="row">
        <?php
            $postsPerPage = 3;
            $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => $postsPerPage,
            );

            $loop = new WP_Query($args);

            while ($loop->have_posts()) : $loop->the_post();
        ?>

         <div class="col-md-4">
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?></p>
         </div>

         <?php
                endwhile;
        wp_reset_postdata();
         ?>
    </div>
    <div id="more_posts">Load More</div>

    <!-- Ajax End -->

    <div>
        <a href="#" id="load_more" class="btn btn-primary">Load More</a>
    </div>






</div>
<?php get_footer(); ?>
