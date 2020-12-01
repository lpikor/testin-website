<main class="single-post">
    <div class="single-post__img-container">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="single-post__img">
    </div>
    <div class="single-post__content">
        <h2 class="single-post__content-title"><?php the_title(); ?></h2>
        <?php the_content(); ?>
    </div>
</main>