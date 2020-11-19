<section class="section-background home-blog">

    <header class="section-background__header">
        <h2 class="section-background__title">Blog</h2>
    </header>

    <div class="recent-posts">

    <?php

        $recentPosts = new WP_Query(array(
            'posts_per_page' => 2
        ));

        while ($recentPosts->have_posts()) {
            $recentPosts->the_post(); ?>
            
            <article class="recent-posts__item">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="recent-posts__img">
                <div class="recent-posts__content">
                    <h3 class="recent-posts__title"><?php the_title(); ?></h3>
                    <p class="recent-posts__description"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="recent-posts__btn">Czytaj dalej</a>
                </div>
            </article>

        <?php }

    ?>

    </div>

</section>