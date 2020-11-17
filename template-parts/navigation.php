<header class="navigation">
    <div class="navigation__top">
        <p class="navigation__services">
            <a href="#" class="navigation__service" rel="noopener noreferrer">Strony www</a>
            <span class="navigation__separator">|</span>
            <a href="#" class="navigation__service" rel="noopener noreferrer">Sklepy internetowe</a>
            <span class="navigation__separator">|</span>
            <a href="#" class="navigation__service" rel="noopener noreferrer">Agencja reklamowa</a>
        </p>
        <div class="navigation__info">
            <div class="language">
                <a href="#" class="language__item language__item--active" rel="noopener noreferrer">PL</a>
                <span class="navigation__separator">|</span>
                <a href="#" class="language__item" rel="noopener noreferrer">EN</a>
            </div>
            <div class="media">
                <a href="mailto:biuro@testin.pl">
                    <span class="media__item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/email-icon-dark.webp" alt="Adres e-mail" class="media__icon icon icon--small">
                        <span class="media__value">biuro@testin.pl</span>
                    </span>
                </a>
                <a href="tel:+48553311324">
                    <span class="media__item">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/mobile-icon-dark.webp" alt="Adres e-mail" class="media__icon icon icon--small">
                        <span class="media__value">+48 553 311 324</span>
                    </span>
                </a>
                <div class="social-media">
                    <a href="https://www.facebook.com/Agencja.Interaktywna.Testin" target="_blank" rel="noopener noreferrer">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/facebook-icon-dark.webp" alt="Strona Testin na Facebooku" class="social-media__icon icon icon--small">
                    </a>
                    <a href="https://www.facebook.com/Agencja.Interaktywna.Testin" target="_blank" rel="noopener noreferrer">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/linkedin-icon-dark.webp" alt="Strona Testin na LinkedInie" class="social-media__icon icon icon--small">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navigation__main">
        <div class="navigation__mobile-top">
            <a href="<?php echo get_home_url(); ?>" rel="noopener noreferrer">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/testin-logo.webp" alt="Strona główna" class="logo">
            </a>
            <button aria-label="Open navigation menu" class="hamburger">
                <span class="hamburger__inner"></span>
            </button>
        </div>
        <?php
            wp_nav_menu(
                array(
                    'menu' => 'Top Navigation',
                    'container' => 'ul',
                )
            );
        ?>
    </nav>
</header>