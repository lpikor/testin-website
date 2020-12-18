<head>
    <title>
        <?php single_cat_title(); ?> - Testin - Profesjonalne strony internetowe Rzeszów, Warszawa, Kraków
    </title>
</head>

<?php get_header();

get_template_part('template-parts/blog-page-header');

get_template_part('template-parts/blog-categories');

get_template_part('template-parts/blog-posts');

get_footer(); ?>