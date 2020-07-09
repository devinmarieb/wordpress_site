<?php
  wp_register_style(
    'style',
    get_template_directory_uri() . '/style.css',
    array(),
    false,
    'all',
  );
  wp_enqueue_style('style');

  wp_register_style(
    'header',
    get_template_directory_uri() . '/css/header.css',
    array(),
    false,
    'all',
  );
  wp_enqueue_style('header');

  wp_register_style(
    'page',
    get_template_directory_uri() . '/css/page.css',
    array(),
    false,
    'all',
  );
  wp_enqueue_style('page');

  wp_register_script(
    'customjs',
    get_template_directory_uri() . '/js/scripts.js',
    '',
    1,
    true
  );
  wp_enqueue_script('customjs');

  add_theme_support('menus');

  register_nav_menus(
    array(
      'header-menu' => __('Header Menu', 'theme')
    )
  )
?>
