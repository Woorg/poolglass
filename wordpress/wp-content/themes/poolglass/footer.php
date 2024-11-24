<footer class="footer">
    <div class="footer__container">
        <div class="header__menu menu footer__menu">
            <a href="<?php echo site_url(); ?>" class="header__logo footer__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.svg" width="237" height="75" alt="logo"></a>
            <nav class="menu__body footer__menu-body">
                <ul class="menu__list">
                  <li class="menu__item"><a href="<?php echo get_page_link('81') ?>" class="menu__link underline-one"><?php echo
                      carbon_get_theme_option('menu_1'); ?></a></li>
                  <li class="menu__item"><a href="<?php echo get_page_link('416') ?>" class="menu__link underline-one"><?php echo
                      carbon_get_theme_option('menu_2'); ?></a></li>
                  <li class="menu__item"><a href="<?php echo get_page_link('375') ?>" class="menu__link underline-one"><?php echo
                      carbon_get_theme_option('menu_3'); ?></a></li>
                  <li class="menu__item"><a href="<?php echo get_page_link('343') ?>" class="menu__link underline-one"><?php echo
                      carbon_get_theme_option('menu_4'); ?></a></li>
                  <li class="menu__item"><a href="<?php echo get_page_link('438') ?>" class="menu__link underline-one"><?php echo
                      carbon_get_theme_option('menu_5'); ?></a></li>
                </ul>
            </nav>
            <div class="menu__policy">©Все права защищены</div>
        </div>
</footer>