<section class="blog-categories">
    <header class="blog-categories__header">
        <h2 class="blog-categories__title">Wybierz kategorię</h2>
    </header>

    <div class="categories">
        <?php wp_list_categories(
            array(
                'exclude' => array(1,23),
                'title_li' => '',
                'show_option_all' => 'Wszystkie'
            )
        ); ?>
    </div>
</section>