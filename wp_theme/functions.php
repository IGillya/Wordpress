<?php
//image
add_theme_support('post-thumbnails');

// header menu
register_nav_menu('menu','header_nav');

//widget
$args = array(
    'name'          => 'sidebar',
    'id'            => 'sidebar',
    'description'   => 'sidebar',
    'class'         => '',
    'before_widget' => '<li id="%1$s" class="widget %2$s">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>' );
register_sidebar($args);
?>