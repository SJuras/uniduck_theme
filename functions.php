<?php

include('shortcodes.php');

function uniduck_register_styles(){
  wp_enqueue_style('uniduck-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
  wp_enqueue_style('uniduck-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
  wp_enqueue_style('uniduck-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'uniduck_register_styles');

function uniduck_register_scripts(){
  wp_enqueue_script('uniduck-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4', true);
  wp_enqueue_script('uniduck-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '3.4', true);
  wp_enqueue_script('uniduck-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4', true);
  wp_enqueue_script('uniduck-main', get_template_directory_uri() . "/assets/js/main.js", array(), '3.4', true);
}
add_action('wp_enqueue_scripts', 'uniduck_register_scripts');






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

function custom_quote_function( $atts = array(), $content = null ) {

    if($atts != null){
      $position = $atts['position'];

      if($position == 'left') {
        return '<div class="quote-wrapper-left"><span class="custom-quote">' . $content . '</span></div>';
      } elseif ($position == 'right') {
        return '<div class="quote-wrapper-right"><span class="custom-quote">' . $content . '</span></div>';
      } else {
        return '<div class="quote-wrapper"><span class="custom-quote">' . $content . '</span></div>';
      }
    } else {
      return '<div class="quote-wrapper"><span class="custom-quote">' . $content . '</span></div>';
    }

}

add_shortcode('custom_quote', 'custom_quote_function');


function custom_youtube_video_function( $atts = null ) {
    if($atts != null){
      $videoid = $atts['videoid'];
        if($videoid != null && $videoid != "") {
          return '<div class="youtube-video">
                    <div class="youtube-video-inner">
                    <iframe src="https://www.youtube.com/embed/' . $videoid . '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  </div>';
        }
    }
}

add_shortcode('custom_youtube_video', 'custom_youtube_video_function');

// image filters/decorators

function wrapImageWithFigure( $content ) {

   // A regular expression of what to look for.
   $pattern = '/(<img([^>]*)>)/i';
   // What to replace it with. $1 refers to the content in the first 'capture group', in parentheses above
   $replacement = '<figure>$1</figure>';

   // run preg_replace() on the $content
   $content = preg_replace( $pattern, $replacement, $content );

   // return the processed content
   return $content;
}

add_filter( 'the_content', 'wrapImageWithFigure' );



?>
