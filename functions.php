<?php
  add_theme_support( 'menus' );
  add_theme_support( 'post-thumbnails' );
  show_admin_bar( true );
  function my_widgets() {
    register_sidebar(
      array(
        'name'          => 'Bottom Sidebar',
        'id'            => 'bottom-sidebar',
        'before_widget' => '<div class="service_area_2_single">',
        'after_widget'  => '</div>',
      )
    );
    register_sidebar(
      array(
        'name'          => 'Right Sidebar',
        'id'            => 'right-sidebar',
        /* 'before_widget' => '<p>',
        'after_widget'  => '</p>', */
      )
    );
  }
  add_action( 'widgets_init', 'my_widgets' );
?>
