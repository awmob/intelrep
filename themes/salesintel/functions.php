<?php

  add_theme_support('post-thumbnails');
  set_post_thumbnail_size(500, 500);


  function css_files(){
    wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css");
    wp_enqueue_script('feather', "https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js");
    wp_enqueue_style('main_style', get_stylesheet_uri() );
    wp_enqueue_style('font-awesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
  }

  add_action('wp_enqueue_scripts','css_files');


  function js_scripts() {
    //set to footer
   wp_register_script('scriptsmain', get_template_directory_uri() . '/js/scripts.js','','1.1', true);
   wp_enqueue_script('scriptsmain');
   }

  add_action( 'wp_enqueue_scripts', 'js_scripts' );

  //set length of excerpt
  function wpdocs_custom_excerpt_length( $length ) {
    return 20;
  }

  add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

  function get_user_info(){
    global $current_user;
    //if user really is logged in then allow
    if(wp_get_current_user()->user_login){
      return wp_get_current_user();
    }
    else{
      return false;
    }
  }
