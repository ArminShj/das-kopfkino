<!doctype HTML>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Armin Shojaossadati">
    <meta name="description" content="آرمين هستم، طراح اينترفيس وبسايت">
    <meta name="keywords" content="طراح وب, فرانت اند, يوزر اينترفيس, رابط کاربر, front-end, front end, frontend, web ui, user interface, user-interface, userinterface">
    <meta http-equiv="refresh" content="300">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <nav class="navbar navbar__onscroll">
        <div class="container">

            <?php

                $args = array (
                    'theme_location' => 'primary'
                );

            ?>

            <?php wp_nav_menu( $args ); ?>

        </div>
    </nav>
