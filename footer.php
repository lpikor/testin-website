<?php
    if(is_page('sklepy-internetowe')) {
        ?>
            <div class="home-contact-us-bottom home-contact-us-bottom--shops"></div>
        <?php
    } else if(is_page('marketing-internetowy')) {
        ?>
            <div class="home-contact-us-bottom home-contact-us-bottom--marketing"></div>
        <?php
    } else if(is_page('branding')) {
        ?>
            <div class="home-contact-us-bottom home-contact-us-bottom--branding"></div>
        <?php
    } else if(is_page('wydruk')) {
        ?>
            <div class="home-contact-us-bottom home-contact-us-bottom--print"></div>
        <?php
    } else {
        ?>
            <div class="home-contact-us-bottom"></div>
        <?php
    }
?>

<?php
    if(is_front_page()) { ?>

    <div class="home-footer">
        <div class="services-grid">

            <article class="services-grid__item services-grid__item--websites">
                <h2 class="services-grid__item-title">Strony internetowe</h2>
                <p class="services-grid__item-description">Wszystkie strony internetowe tworzymy z pasją. Wdrażamy nowoczesne rozwiązania  i trendy, dostosowując je do oczekiwań i wymagań klienta. Nie działamy szablonowo, do każdej zleconej nam witryny internetowej podchodzimy indywidualnie. Nasz profesjonalizm i zaangażowanie gwarantują wykonanie strony internetowej na najwyższym poziomie. Stworzone przez nas strony www charakteryzują się nowoczesnym designem i precyzyjnym wykonaniem.</p>
            </article>
            <article class="services-grid__item services-grid__item--shops">
                <h2 class="services-grid__item-title">Sklepy internetowe</h2>
                <p class="services-grid__item-description">Dopracowany w każdym szczególe sklep internetowy, wykonany przez naszą firmę, może być uzupełnieniem  działalności stacjonarnej lub stanowić odrębny biznes. Tworzymy e-sklepy, które są łatwe w zarządzaniu i atrakcyjne dla klientów, ze względu na intuicyjną nawigację Twojego wirtualnego sklepu. Zaawansowana wyszukiwarka oraz szczegółowe filtrowanie produktów stanowią dodatkowe atrybuty wykonanych przez nas sklepów internetowych.</p>
            </article>
            <article class="services-grid__item services-grid__item--marketing">
                <h2 class="services-grid__item-title">Marketing internetowy</h2>
                <p class="services-grid__item-description">Promowanie marki w internecie to odpowiedzialne i długotrwałe zadanie. Zajmujemy się pozycjonowaniem stron internetowych oraz e-sklepów, które dzięki naszym działaniom, stają się bardziej widoczne w sieci. W profesjonalny sposób prowadzimy firmowe konta w social mediach, a także tworzymy unikalne teksty i  chwytliwe slogany. Wiemy, jak dzięki nim, zwiększyć zasięg Twojej oferty.</p>
            </article>
            <article class="services-grid__item">
                <h2 class="services-grid__item-title">Dla kogo tworzymy?</h2>
                <p class="services-grid__item-description">Nasze projekty dedykowane są dla właścicieli firm, którzy są świadomi siły, jaką daje obecność biznesu w internecie. Także dla tych, którzy wiedzą, jaki potencjał tkwi w e-commerse i chcą go przekuć na własny sukces. Zlecając stworzenie witryny czy sklepu internetowego naszemu doświadczonemu zespołowi, otrzymujesz gwarancję uzyskania produktu idealnie dopasowanego do Twoich potrzeb i wymagań. Polecamy również usługi w promowaniu wizerunku Twojej firmy i zwiększaniu jej widoczności w sieci.</p>
            </article>
        </div>
    </div>

<?php }
?>

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
            <div class="badges">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/podkarpacka-nagroda-gospodarcza.webp" alt="Podkarpacka Nagroda Gospodarcza" class="badges__img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/lodolamacze.webp" alt="Lodołamacze" class="badges__img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/najlepsi-oferteo.webp" alt="Najlepsi Oferteo" class="badges__img">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/google-partner.webp" alt="Google Partner" class="badges__img">
            </div>
            <p class="footer__footnote">Tworzymy profesjonalne strony internetowe dla klientów m.in. z miast: Rzeszów, Warszawa, Kraków, Szczecin, Lublin, Gdańsk, Bydgoszcz, Poznań.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>