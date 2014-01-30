<?php 

// Custom Post Type for Front Page Articles
add_action('init', 'register_front_page');

function register_front_page() {
 
	$labels = array(
    'name'               => 'Front Page',
    'singular_name'      => 'Front Page',
    'add_new'            => 'Add a Front Page Article',
    'add_new_item'       => 'Add New Front Page Article',
    'edit_item'          => 'Edit Front Page Article',
    'new_item'           => 'New Front Page Article',
    'view_item'          => 'View Front Page Article',
    'search_items'       => 'Search Front Page Articles',
    'not_found'          => 'Nothing found in the Front Page Articles',
    'not_found_in_trash' => 'Nothing found in Trash',
    'parent_item_colon'  => '',
    'menu_name'          => 'Front Page',
	);

	$args = array(
    'labels'                => $labels,
    'public'                => true,
    'publicly_queryable'    => true,
    'show_ui'               => true,
    'query_var'             => true,
    'rewrite'               => true,
    'capability_type'       => 'post',
    'has_archive'        		=> true,
    'hierarchical'          => false,
    'menu_position'         => null,
    'rewrite'               => array('slug' => 'front-page'),
    'supports'           		=> array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' )
  ); 

	register_post_type( 'front_page' , $args );
};

// Custom Field Groups for the Front Page
if(function_exists("register_field_group"))
  {
    register_field_group(array (
      'id' => 'acf_front-page',
      'title' => 'Front Page',
      'fields' => array (
        array (
          'key' => 'field_52e874f312109',
          'label' => 'Background Color',
          'name' => 'background_color',
          'type' => 'color_picker',
          'instructions' => 'Choose a background color for this article.',
          'default_value' => '#ffffff',
        ),
        array (
          'key' => 'field_52e875321210a',
          'label' => 'Font Color',
          'name' => 'color',
          'type' => 'color_picker',
          'instructions' => 'Choose a color for your typography.',
          'default_value' => '#343f4f',
        ),
        array (
          'key' => 'field_52e875841210b',
          'label' => 'Article Order',
          'name' => 'article_order',
          'type' => 'number',
          'instructions' => 'Choose the article display order. "1" comes first, "2" will be second, etc.',
          'required' => 1,
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'min' => 1,
          'max' => '',
          'step' => 1,
        ),
      ),
      'location' => array (
        array (
          array (
            'param' => 'post_type',
            'operator' => '==',
            'value' => 'front_page',
            'order_no' => 0,
            'group_no' => 0,
          ),
        ),
      ),
      'options' => array (
        'position' => 'side',
        'layout' => 'default',
        'hide_on_screen' => array (
          0 => 'permalink',
          1 => 'custom_fields',
          2 => 'discussion',
          3 => 'comments',
          4 => 'revisions',
          5 => 'slug',
          6 => 'author',
          7 => 'format',
          8 => 'categories',
          9 => 'tags',
          10 => 'send-trackbacks',
        ),
      ),
      'menu_order' => 0,
    ));
  }

  // Register Main Menu
  function register_my_menu() {
    register_nav_menu( 'main', 'Main Menu' );
  }
    add_action( 'init', 'register_my_menu' );

  //Edit the Excerpt Length & String
  function custom_excerpt_length( $length ) {
    return 25;
  }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

  function new_excerpt_more( $more ) {
    return '...';
  }
    add_filter('excerpt_more', 'new_excerpt_more');

  //Hide Admin Bar
    add_filter('show_admin_bar', '__return_false');

  // Load jQuery
  if ( !is_admin() ) {

    wp_deregister_script('jquery');
    wp_register_script('jquery', "//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js");
    wp_enqueue_script('jquery');

    wp_deregister_script('easing');
    wp_register_script('easing', get_bloginfo('template_url') . "/js/easing.min.js");
    wp_enqueue_script('easing');

    wp_deregister_script('fancybox');
    wp_register_script('fancybox', get_bloginfo('template_url') . "/js/fancybox.min.js");
    wp_enqueue_script('fancybox');

    wp_deregister_script('global');
    wp_register_script('global', get_bloginfo('template_url') . "/js/global.min.js");
    wp_enqueue_script('global');
  }

  //Featured Images
    add_theme_support( 'post-thumbnails' );

 ?>