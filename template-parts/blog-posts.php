<div class="blog-posts">

    <?php
        while(have_posts()) {
            the_post(); ?>

            <article class="blog-posts__item">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="blog-posts__img">
                <a href="<?php the_permalink(); ?>">
                    <h3 class="blog-posts__title"><?php the_title(); ?></h3>
                </a>
                <div class="blog-posts__description"><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink(); ?>" class="blog-posts__read-more">Czytaj dalej</a>
            </article>

        <?php }
    ?>
    
</div>

<div class="pagination">
    <?php echo paginate_links(
        array(
            'prev_text' => '«',
            'next_text' => '»'
        )
    ); ?>
</div>