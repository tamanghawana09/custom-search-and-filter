<?php
    function child_theme_enqueue_style(){
        wp_enqueue_style('parent-style',get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));
    }
    add_action('wp_enqueue_scripts','child_theme_enqueue_style');
?>