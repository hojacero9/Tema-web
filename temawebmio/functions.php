<?php

    function temawebmio_setup() {

        load_theme_textdomain( "temawebmio", bloginfo('template_url')."/languages");

       
        add_theme_support( 'post-thumbnails' );
     

        add_theme_support( 'automatic-feed-links' );
     

        add_theme_support( 'title-tag' );
     

        add_theme_support( 'custom-logo', array(
            'height' => 240,
            'width' => 240,
            'flex-height' => true,
        ) );
     

        register_nav_menus(array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
        ));
     

        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    }
    add_action( 'after_setup_theme', 'temawebmio_setup' );
    
function add_normalize_CSS() {
    wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
}

function add_widget_Support() {
    register_sidebar( array(
                    'name'          => 'Sidebar',
                    'id'            => 'sidebar',
                    'before_widget' => '<div>',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h2>',
                    'after_title'   => '</h2>',
    ) );
}

add_action( 'widgets_init', 'add_Widget_Support' );
