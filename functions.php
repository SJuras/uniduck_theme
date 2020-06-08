<?php

include('shortcodes.php');

function uniduck_register_styles(){
  wp_enqueue_style('uniduck-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
  wp_enqueue_style('uniduck-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
  wp_enqueue_style('uniduck-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');

}
add_action('wp_enqueue_scripts', 'uniduck_register_styles');

function uniduck_register_scripts(){
  wp_enqueue_script('uniduck-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4', true);
  wp_enqueue_script('uniduck-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '3.4', true);
  wp_enqueue_script('uniduck-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4', true);
  wp_enqueue_script('uniduck-main', get_template_directory_uri() . "/assets/js/main.js", array(), '3.4', true);
}
add_action('wp_enqueue_scripts', 'uniduck_register_scripts');


add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



// Theme assert_options
add_theme_support('menus');

// Menus
register_nav_menus(
  array(
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',
  )
);

// Images
add_theme_support('post-thumbnails');

// load More


// $tags

function show_tags()
{
    $post_tags = get_the_tags();
    if (!empty($post_tags)) {
        $output = '<div class="tags">';
        foreach ($post_tags as $tag) {
            $output .= '<a class="tag" href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
        }
        $output .= '</div>';
        return trim($output);
    }
}


// shortcodes

function someone_shortcode(){
  return '<p>Someone saw a white creature <br /> with the looks of a horse, yet <br /> having a beautiful horn... </p>';
}
add_shortcode('someone_sc', 'someone_shortcode');


function everyone_shortcode(){
  return '<p class="short_2">"Everyone believed that <br / >it was just a legend, that it wasn\'t <br /> a real place... >"</p>';
}
add_shortcode('everyone_sc', 'everyone_shortcode');


// favs & comments

function fav_shortcode(){
  return '<div class="fav"> 17 faves</div>';
}
add_shortcode('fav_sc', 'fav_shortcode');

function comment_shortcode(){
  return '<div class="comments"> 22 comments</div>';
}
add_shortcode('comment_sc', 'comment_shortcode');

?>
