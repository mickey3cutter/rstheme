<?php

// Register menus (remove if you don't need)

function rs_register_menus() {
  register_nav_menus( array( 
    'header-menu' => 'Header menu:',
    'footer-menu' => 'Footer menu:'
  ));
}
add_action( 'init', 'rs_register_menus' );