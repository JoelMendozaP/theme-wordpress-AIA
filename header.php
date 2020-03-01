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
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">
    <img src="<?php echo get_template_directory_uri()?>\assets\img\logo-blanco.png" height="70" class="d-inline-block align-top"
      alt="logo">
    </a>
    <button 
        class="navbar-toggler" 
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
            'theme_location'    => 'menu-principal',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarSupportedContent-333',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
    ?>
    </nav>
<!--/.Navbar -->
</header>
