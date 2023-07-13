<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> •:• <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

    <div id="wrap">
        <header>
            <a href="<?php echo esc_url(home_url('/')) ?>">
                <img style="width:80px" src="<?php echo get_template_directory_uri() ?>/assets/frontendeiroslogo.png" alt="Logotipo de <?php bloginfo('name') ?>">
                <h1><?php bloginfo('name') ?></h1>
                <small><?php bloginfo('description') ?></small>
            </a>
            <p><?php get_search_form(array('placeholder' => 'Procurar...')); ?></p>

            <?php
            echo do_shortcode('[smartslider3 slider="2"]');
            ?>
        </header>
        <nav>
            <?php wp_nav_menu(array('container' => false)) ?>
        </nav>