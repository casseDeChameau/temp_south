<?php

add_theme_support('custom-background'); //? add Background section in Appearance
add_theme_support('custom-header'); //? add Header section in Appearance, use <?php header_image(); into concerned html section
add_theme_support('post-thumbnails'); //? add Featured image section in Posts Editor (CPT UI)

//! voir les autres add_theme_support('$features'), usages et options sur https://developer.wordpress.org/reference/functions/add_theme_support/

// ? pour ACF
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(); //? add option for optionals custom field 
}
//! les fields option sont accessibles partout via : <?php the_field('header_title', 'option'); 
//? limiter la longueur de l'excerpt
function my_excerpt_length($length)
{
  return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');

//? ajouter un menu dans appearence
function register_my_menu()
{
  register_nav_menu('main_menu', __('Mon Menu'));
}
add_action('init', 'register_my_menu');

//? ajoute classe à next/prev_post_link_attribute()
function my_theme_posts_link_attributes()
{
  return 'class="page-link"'; //? set the class here
}
add_filter('previous_posts_link_attributes', 'my_theme_posts_link_attributes');
add_filter('next_posts_link_attributes', 'my_theme_posts_link_attributes');