<section class="home-contact-us">
    <div class="home-contact-us__decoration">
        <img src="<?php bloginfo('template_directory'); ?>/assets/images/pen-screen.webp" alt="" class="home-contact-us__decoration-img">
    </div>

    <div class="home-contact-us__container">
        <header class="home-contact-us__header">
            <h2 class="home-contact-us__title">Skontaktuj się z nami</h2>
        </header>

        <div class="home-contact home-contact--mobile">
            <a href="tel:+48533311324">
                <div class="home-contact__item">
                    <div class="home-contact__item-icon icon--circle">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/mobile-icon.webp" alt="Telefon" class="icon">
                    </div>
                    <span class="home-contact__item-description">Zadzwoń do nas</span>
                </div>
            </a>
            <a href="mailto:biuro@testin.pl">
                <div class="home-contact__item">
                    <div class="home-contact__item-icon icon--circle">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/email-icon.webp" alt="Adres e-mail" class="icon">
                    </div>
                    <span class="home-contact__item-description">Napisz do nas</span>
                </div>
            </a>
            <a href="<?php echo get_permalink(9602); ?>#lokalizacja">
                <div class="home-contact__item">
                    <div class="home-contact__item-icon icon--circle">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/wifi-icon.webp" alt="Strona internetowa" class="icon">
                    </div>
                    <span class="home-contact__item-description">Odwiedź nas</span>
                </div>
            </a>
        </div>

        <div class="home-contact home-contact--desktop">
            <a href="<?php echo get_permalink(9602); ?>">
                <div class="home-contact__item">
                    <div class="home-contact__item-icon icon--circle">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/mobile-icon.webp" alt="Telefon" class="icon">
                    </div>
                    <span class="home-contact__item-description">Zadzwoń do nas</span>
                </div>
            </a>
            <a href="<?php echo get_permalink(9602); ?>#formularz">
                <div class="home-contact__item">
                    <div class="home-contact__item-icon icon--circle">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/email-icon.webp" alt="Adres e-mail" class="icon">
                    </div>
                    <span class="home-contact__item-description">Napisz do nas</span>
                </div>
            </a>
            <a href="<?php echo get_permalink(9602); ?>#lokalizacja">
                <div class="home-contact__item">
                    <div class="home-contact__item-icon icon--circle">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/wifi-icon.webp" alt="Strona internetowa" class="icon">
                    </div>
                    <span class="home-contact__item-description">Odwiedź nas</span>
                </div>
            </a>
        </div>

    </div>
</section>