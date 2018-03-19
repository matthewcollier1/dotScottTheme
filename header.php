<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dot Scott Studio</title>    
</head>

<body>

<!-- Header -->

<div class="hero-nav">

<img class="hero-nav--canvas" src= <?php echo get_theme_file_uri("/img/blankcanvas.png") ?> alt="">
    <div class="hero-nav__inner">
    
        <div class="hero-nav__inner--left">

            
            <h2><?php  echo get_bloginfo( 'name' )?></h2>
            <h5><?php echo get_bloginfo( 'description' ) ?></h5>

        </div>
        <div class="hero-nav__inner--center">
            <a href="<?php echo site_url( '/')?>"><img src= <?php echo get_theme_file_uri("/img/logo-splat.png") ?> alt=""></a>
        </div>

<!-- Header Menu -->

        <div class="hero-nav__inner--right">
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'
            ));
            ?>
        </div>

        <div class="hero-nav__inner--right--mobile">

            <a href="<?php echo site_url( '/gallery')?>"><i class="fas fa-camera-retro"></i></a>
            <a href="<?php echo site_url( '/contact')?>"><i class="far fa-envelope"></i></a>
            
        </div>

    </div>
</div>    
