<?php 

add_theme_support('post-thumbnails');
add_image_size('fastfod-featured-imge', 2000, 1200, true);
add_image_size('fastfod-thumbnail-avatar', 100, 100, true );

register_nav_menus( array(
	'top' => __('Top menu', 'fastfood'),
	'footer' => __('Footer menu', 'fastfood'),
) );

/*
 * Add classes to main menu
 */
function fastfood_menu_classes($classes, $item, $args) {
    if($args->theme_location == 'top') {
      $classes[] = 'list-inline-item';
    }
    return $classes;
  }
  add_filter('nav_menu_css_class','fastfood_menu_classes',1,3);

