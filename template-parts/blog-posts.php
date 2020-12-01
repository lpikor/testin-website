<div class="blog-posts">

    <?php
        while(have_posts()) {
            the_post(); ?>

            <article class="blog-posts__item">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="blog-posts__img">
                <h3 class="blog-posts__title"><?php the_title(); ?></h3>
                <p class="blog-posts__description"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>" class="blog-posts__read-more">Czytaj dalej</a>
            </article>

        <?php }
    ?>



    <article class="blog-posts__item">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/ecommerce.webp" alt="" class="blog-posts__img">
        <h3 class="blog-posts__title">Jak sprzedawać przez internet?</h3>
        <p class="blog-posts__description">W ostatnim czasie spora część naszego życia przeniosła się do Internetu, dzięki czemu branża e-commerce zyskuje coraz większy potencjał i jest szansą na rozkręcenie lub uratowanie niejednego biznesu. Sprzedaż online ma wiele zalet.</p>
        <a href="#" class="blog-posts__read-more">Czytaj dalej</a>
    </article>
</div>

<div class="pagination">
    <?php echo paginate_links(
        array(
            'prev_text' => '«',
            'next_text' => '»'
        )
    ); ?>
</div>