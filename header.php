<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php

        if(!is_front_page()) 
        { 
            the_title(); 
            echo " - "; 
        } ?>

        Testin - Profesjonalne strony internetowe Rzeszów, Warszawa, Kraków
    </title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico">
    <?php wp_head(); ?>

</head>

<body>

    <?php

        get_template_part('template-parts/top-navigation');