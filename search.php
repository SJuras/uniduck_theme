<?php
/**
 * Template Name: Search Page
 */
?>

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
</head>
<body>
  <?php get_header(); ?>

    <div>
      <?php get_search_form(); ?>
    </div>

  <?php get_footer(); ?>
