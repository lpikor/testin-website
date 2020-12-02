<section class="section-background single-post-see-more">

    <header class="section-background__header">
        <h2 class="section-background__title">Zobacz także</h2>
    </header>

    <div class="more">
        <div class="more__container">
            <section class="more__section">
                <h3 class="more__title">Ostatnie posty</h3>
                <ul class="more__content">

                <?php
                    $recentPosts = new WP_Query(
                        array(
                            'posts_per_page' => 3
                        )
                    );

                    while($recentPosts->have_posts()) {
                        $recentPosts->the_post(); ?>
                        
                        <li class="more__item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

                    <?php }
                ?>

                </ul>

            </section>
            <section class="more__section">
                <h3 class="more__title">Kategorie</h3>
                <ul class="more__content">

                <?php wp_list_categories(
                    array(
                        'exclude' => array(1,23),
                        'title_li' => ''
                    )
                ); ?>

                </ul>

            </section>
            <section class="more__section">
                <h3 class="more__title">Tagi</h3>
                <ul class="more__content">

                <?php
                    $tags = get_the_tag_list('', ', ');
                    echo $tags;
                ?>

                </ul>

            </section>
            
        </div>
    </div>

</section>