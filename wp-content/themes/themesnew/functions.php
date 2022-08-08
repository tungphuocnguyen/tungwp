<?php

function load_stylesheets() 
{
  wp_register_style('font', get_template_directory_uri() . '/https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css', array(), 1, 'all');
  wp_enqueue_style('font');

  wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 1, 'all');
  wp_enqueue_style('bootstrap');

  wp_register_style('stylecss', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
  wp_enqueue_style('stylecss');

  wp_register_style('respon', get_template_directory_uri() . '/css/responsive.css', array(), 1, 'all');
  wp_enqueue_style('respon');
  
}

add_action( 'wp_enqueue_scripts', 'load_stylesheets');

//load scripts
function addjs()
{
  wp_register_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', array() , 1, 1, 1);
  wp_enqueue_script('jquery');

  wp_register_script('boostrap', get_template_directory_uri() . '/js/bootstrap.js', array() , 1, 1, 1);
  wp_enqueue_script('boostrap');

  wp_register_script('googleapi', get_template_directory_uri() . '/https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap', array() , 1, 1, 1);
  wp_enqueue_script('googleapi');

  wp_register_script('custom', get_template_directory_uri() . '/custom.js', array() , 1, 1, 1);
  wp_enqueue_script('custom');


}
add_action( 'wp_enqueue_scripts', 'addjs');


// custom image size
add_image_size('product_image_small',100,225,false);
  add_theme_support('menus');
register_nav_menus( array(
  'top-menu' => __('Top Menu','theme'),
  'footer-menu' => __('Footer Menu','theme'),
));
if(!function_exists('test_menu')){
  function test_menu($menu){
    $menu = array(
      'menu'                 => '',
      'container_id'         => '',
      'container_aria_label' => '',
      'menu_class'           => 'navbar-nav ',
      'menu_id'              => '',
      'echo'                 => 'true',
      'fallback_cb'          =>'wp_page_menu',
      'before'               =>'',
      'after'                =>'',
      'link_before'          =>'',
      'link_after'           =>'',
      'item_wrap'            =>'<ul id="%1$s" class="%2$s">%3$s</ul>',
      'item_spacing'         => 'preserve',
      'depth'                => '0',
      'walker'               =>'',
      'theme_location'       =>'',
      'add_li_class'         => ' nav-link',
    );
    wp_nav_menu( $menu );
  }
}
function add_additional_class($classes, $item, $args){
  if(isset($args->add_li_class)){
      $classes[] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class', 1, 3);
add_theme_support('menus');

register_nav_menus(
  array(
    // 'top-menu' => _('Top Menu','theme'),

  )
  );

  if( function_exists('acf_add_options_page') ) {
	
    acf_add_options_page(array(
      'page_title' 	=> 'Theme Settings',
      'menu_title'	=> 'Theme Settings',
      'menu_slug' 	=> 'theme-settings',
      'capability'	=> 'edit_posts',
      'redirect'		=> false
    ));
    
  }