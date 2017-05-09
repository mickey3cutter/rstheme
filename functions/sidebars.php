<?php

//Register sidebar

register_sidebar( array(
    'name' => 'Blog Sidebar',
    'id' => 'sidebar',
    'description' => 'Appears in the blog area',
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h5 class="widget-title line-bottom">',
    'after_title' => '</h5>',
) );

register_sidebar( array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
) );