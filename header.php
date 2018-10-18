<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo( 'title' ); ?></title>

    <!-- Bootstrap core CSS -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <?php 
                    $defaults = [
                        'container' => '',
                        'theme_location' => 'primary-menu',
                        'menu_class' => 'navbar-nav ml-auto',
                        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>' 
                    ];
                    wp_nav_menu($defaults); 
                ?>
        </div>
    </nav>