<header>
    <div class="gpyc-header container-fluid">
        <div class="gpyc-header__logo-container">
            <a class="gpyc-header__logo" href="<?= esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/dist/images/gpyc_logo.jpg" class="img-fluid" alt="<?php bloginfo('name'); ?>">
            </a>
        </div>
        <nav class="gpyc-header__nav">
            <ul class="row">
                <li class="col">
                    <a href="#" class="gpyc-header__nav__item">About</a>
                </li>
                <li class="col">
                    <a href="#" class="gpyc-header__nav__item">Harbor</a>
                </li>
                <li class="col">
                    <a href="#" class="gpyc-header__nav__item">Activities</a>
                </li>
                <li class="col">
                    <a href="#" class="gpyc-header__nav__item">Events</a>
                </li>
                <li class="col">
                    <a href="#" class="gpyc-btn gpyc-btn--full gpyc-btn--small gpyc-btn--gold-black"><span>Membership</span></a>
                </li>
            </ul>
        </nav>
    </div>
        <!--<nav class="nav-primary">
            <?php
            if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
            endif;
            ?>
        </nav>-->
</header>
