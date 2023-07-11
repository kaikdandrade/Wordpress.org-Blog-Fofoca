<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(' - ',TRUE,'right'); bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="wrap">
        <header>
            <a href="<?php esc_url(home_url('/')); ?>">
                <img width="60px" src="<?php echo get_template_directory_uri(); ?>/screenshot.jpg" alt="Logotipo de <?php bloginfo('name'); ?>" />
            </a>
            <h1 style="display: none;"><?php bloginfo('name'); ?></h1>
            <small style="display: none;"><?php bloginfo('description'); ?></small>
        </header>

        <nav>
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'menu'
                    )
                );
            ?>
        </nav>