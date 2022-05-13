<?php

  function foliage_theme_support(){
    // adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
  }

  function foliage_custom_logo_setup(){
    add_theme_support('custom-logo');
  }

  add_action( 'after_setup_theme', 'foliage_theme_support' );
  add_action( 'after_setup_theme', 'foliage_custom_logo_setup');

  function foliage_menus(){
    $locations = array(
      'primary' => 'Desktop Primary left sidebar',
      'footer' => 'Footer menu items',
    );
    register_nav_menus($locations);
  }

  add_action( 'init', 'foliage_menus' );

  function followpaul_register_styles(){ 
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('followpaul-style', get_template_directory_uri() . "/style.css", array(
      'followpaul-bootstrap'), $version, 'all');
    wp_enqueue_style('followpaul-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('followpaul-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
  }
  function followpaul_register_scripts(){ 
    wp_enqueue_script('followpaul-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('followpaul-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0 ', true);
    wp_enqueue_script('followpaul-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '3.4.1', true);
    wp_enqueue_script('followpaul-main', get_template_directory_uri() ."/assets/js/main.js", array(), '3.4.1', true);
  }

  add_action('wp_enqueue_scripts', 'followpaul_register_styles');
  add_action( 'wp_enqueue_scripts', 'followpaul_register_scripts');

?>