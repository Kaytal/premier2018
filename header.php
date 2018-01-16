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
        <section class="site-logo">
            <a href="/" class="site-logo__link">
                <img src="<?php echo get_template_directory_uri() ?>/images/premier-logo.png" class="site-logo__image" alt="Premier Experience Vacation and Events" />
            </a>
        </section>
        <nav class="main-navigation" role="navigation">
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </nav>
        <div class="nav-toggle">MENU</div>
    </header>
