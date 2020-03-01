<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo get_template_directory_uri()?>\assets\img\logo.png">
    <?php wp_head() ?>
</head>
<body>
<header>
    <!--Navbar scrolling-navbar fixed-top-->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-dark ">
    <a class="navbar-brand d-block d-lg-none" href="/">
    <img src="<?php echo get_template_directory_uri()?>\assets\img\logo-blanco.png" height="60" class="d-inline-block align-top"
      alt="logo">
    </a>
    <button 
        class="navbar-toggler " 
        type="button" 
        data-toggle="collapse" 
        data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" 
        aria-expanded="false" 
        aria-label="Toggle navigation">

        <span class="navbar-toggler-icon"></span>
    </button>

    <?php
        wp_nav_menu( array(
            'theme_location'    => 'menu-izquierdo',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse justify-content-center',
            'container_id'      => 'navbarSupportedContent-333',
            'menu_class'        => 'nav navbar-nav text-uppercase',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ));
    ?>
    <a class="navbar-brand d-none d-lg-block" href="/">
    <img src="<?php echo get_template_directory_uri()?>\assets\img\logo-blanco.png" height="60" class="d-inline-block align-top"
      alt="logo">
    </a>
    <?php
        wp_nav_menu( array(
            'theme_location'    => 'menu-derecho',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse justify-content-center',
            'container_id'      => 'navbarSupportedContent-333',
            'menu_class'        => 'nav navbar-nav text-uppercase',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
    ?>

    </nav>
<!--/.Navbar -->
</header>
