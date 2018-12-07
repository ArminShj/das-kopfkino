<?php

    function kopfkino_style() {
        // main-stylesheet
        // ---------------
        wp_register_style('main', get_template_directory_uri() . '/assets/sass/main.css', false, '0.0.0', 'all');
        wp_enqueue_style('main');

    }
    
    add_action('wp_enqueue_scripts', 'kopfkino_style');

    // !-- main-stylesheet --

    function font_awesome() {
        // font-awesome-stylesheet
        // -----------------------
        wp_register_style ('font-awesome', '//use.fontawesome.com/releases/v5.5.0/css/all.css', 'main');
        wp_enqueue_style('font-awesome');

    }

    add_action('wp_enqueue_scripts', 'font_awesome');

    // !-- font-awesome-stylesheet --
    

    // theme-setup
    // -----------
    function dasKopfKino_setup() {

        // navigation-menus
        // ----------------
        register_nav_menus (array(
            'primary' => __('Primary Menu'),
            ));

        // featured-image
        // --------------
        add_theme_support('post-thumbnails');
        
    }

    add_action('after_setup_theme', 'dasKopfKino_setup');

    // !-- theme-setup --

?>