<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="site">
    <header class="site-header" role="banner">
        <section id="branding">
            <!--   Logo/title         -->
        </section>
        <nav class="main-navigation" role="navigation">
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </nav>
    </header>
