<?php

function image_tag($file, $url_only = false) {
  $url = esc_url(get_template_directory_uri() . "/images/" . $file);
  $tag = '<img src="' . $url . '" />';
  echo $url_only ? $url : $tag;
}
function js_tag($file, $url_only = false) {
  $url = esc_url(get_template_directory_uri() . "/js/" . $file);
  $tag = '<script src="' . $url . '"></script>';
   echo $url_only ? $url : $tag;
}

/**
 * Enqueue scripts and styles.
 */
function spire_scripts() {
  // Load our main stylesheet.
  wp_enqueue_style( 'spire-style', get_stylesheet_uri() );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}

add_action( 'wp_enqueue_scripts', 'spire_scripts' );

?>
