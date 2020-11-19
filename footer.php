<footer class="footer">
    <div class="footer__container">
        <div class="footer__top">
            <section class="footer__section">
                <h2 class="footer__section-title">Szybki kontakt</h2>
                <div class="footer__section-container">
                    <article class="residence">
                        <h3 class="residence__title">Rzeszów - siedziba główna</h3>
                        <span class="residence__contact">+48 553 311 324</span>
                        <span class="residence__contact">biuro@testin.pl</span>
                    </article>
                    <article class="residence">
                        <h3 class="residence__title">Kraków</h3>
                        <span class="residence__contact">+48 666 627 444</span>
                        <span class="residence__contact">j.bukowski@testin.pl</span>
                    </article>
                </div>
            </section>
            <section class="footer__section">
                <h2 class="footer__section-title">Menu</h2>
                <div class="footer__section-container">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'main_menu',
                                'menu' => 'Footer Main Menu',
                                'menu_class' => 'footer-menu',
                                'container' => 'ul'
                            )
                        );
                    ?>
                </div>
            </section>
            <section class="footer__section">
                <h2 class="footer__section-title">Nasza oferta</h2>
                <div class="footer__section-container">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'offer_menu',
                                'menu' => 'Footer Offer Menu',
                                'menu_class' => 'footer-menu',
                                'container' => 'ul'
                            )
                        );
                    ?>
                </div>
            </section>
            <section class="footer__section">
                <h2 class="footer__section-title">Aktualności</h2>
                <div class="footer__section-container">
                    <div class="news">
                        <?php
                            $footerNews = new WP_Query(
                                array(
                                    'posts_per_page' => 4
                                )
                            );

                            while ($footerNews->have_posts()) {
                                $footerNews->the_post(); ?>

                                <a href="<?php the_permalink(); ?>" class="news__item-link">
                                    <p class="news__item-title"><?php the_title(); ?></p>
                                </a>

                            <?php }
                        ?>
                        
                    </div>
                </div>
            </section>
        </div>
        <div class="footer__bottom">
            <?php
                if(is_front_page()) { ?>
    
                    <div class="badges">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/podkarpacka-nagroda-gospodarcza.webp" alt="Podkarpacka Nagroda Gospodarcza" class="badges__img">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/lodolamacze.webp" alt="Lodołamacze" class="badges__img">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/najlepsi-oferteo.webp" alt="Najlepsi Oferteo" class="badges__img">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/google-partner.webp" alt="Google Partner" class="badges__img">
                    </div>
                    
                <?php }
            ?>
            <p class="footer__footnote">Tworzymy profesjonalne strony internetowe dla klientów m.in. z miast: Rzeszów, Warszawa, Kraków, Szczecin, Lublin, Gdańsk, Bydgoszcz, Poznań.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>