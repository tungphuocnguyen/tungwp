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










// load scripts
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

register_nav_menus(
  array(
    // 'top-menu' => _('Top Menu','theme'),

  )
  );