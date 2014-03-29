<?php 

// Post Thumbnails
  add_theme_support( 'post-thumbnails' );

// Advanced Custom Field
  //define( 'ACF_LITE' , true );
  include_once('advanced-custom-fields/acf.php');

// Attach a class to linked images' parent anchors
  function give_linked_images_class($html, $id, $caption, $title, $align, $url, $size, $alt = '' ){
    $classes = 'fancybox';

    if ( preg_match('/<a.*? class=".*?">/', $html) ) {
      $html = preg_replace('/(<a.*? class=".*?)(".*?>)/', '$1 ' . $classes . '$2', $html);
    } else {
      $html = preg_replace('/(<a.*?)>/', '$1 class="' . $classes . '" >', $html);
    }
    return $html;
  }
  add_filter('image_send_to_editor','give_linked_images_class',10,8);

  // Add class and rel to WP Image Galleries
  add_filter('wp_get_attachment_link', 'rc_add_rel_attribute');

  function rc_add_rel_attribute($link) {
    global $post;
    return str_replace('<a href', '<a class="fancybox" rel="gallery" href', $link);
  }

  // Current Page URL
  function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
      $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
      $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
      $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;
  }

  // Load jQuery
  if ( !is_admin() ) {

    wp_deregister_script('jquery');
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js");
    wp_enqueue_script('jquery');

    wp_deregister_script('fancybox');
    wp_register_script('fancybox', get_bloginfo('template_url') . "/js/fancybox.min.js");
    wp_enqueue_script('fancybox');

    wp_deregister_script('global');
    wp_register_script('global', get_bloginfo('template_url') . "/js/global.min.js");
    wp_enqueue_script('global');
  }

  // Register Main Menu
  function register_my_menu() {
    register_nav_menu( 'main', 'Main Menu' );
  }
    add_action( 'init', 'register_my_menu' );

  // Sidebar
  $side = array(
    'name'          => __( 'Post & Page Sidebar' ),
    'id'            => 'post-page-sidebar',
    'description'   => 'A sidebar for posts & pages. Or both.',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );

  register_sidebar( $side );

  // Edit the Excerpt Length & String
  function new_excerpt_more( $more ) {
    return '...';
  }
  add_filter('excerpt_more', 'new_excerpt_more');

 ?>