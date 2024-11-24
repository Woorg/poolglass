<footer class="footer footer-pages">
  <div class="footer__container">
    <div class="contacts contacts-pages">
      <div class="contacts__container">
        <div class="contacts__subtitle"><?php echo carbon_get_theme_option('contacts_title_block'); ?></div>
        <div class="contacts__title contacts-pages__title"><?php echo carbon_get_theme_option('contacts_desc'); ?></div>
        <div class="contacts__wrapper contacts-pages__wrapper">


          <div class="contacts__phone phone-contacts phone-contacts-pages">
            <div class="phone-contacts__title">Телефон / Почта</div>
            <div class="phone-contacts__phone"><a href="tel:+74957776590"><?php echo carbon_get_theme_option('phone'); ?></a></div>
            <div class="phone-contacts__mail"><a
                      href="<?php echo carbon_get_theme_option('email'); ?>"><?php echo carbon_get_theme_option('email'); ?></a></div>
          </div>

          <div class="contacts__address address-contacts address-contacts-pages">
            <div class="address-contacts__title">Адрес</div>
            <div class="address-contacts__address"><?php echo carbon_get_theme_option('address'); ?></div>
          </div>

          <div class="contacts__social social-contacts social-contacts-pages">
            <div class="social-contacts__title">Социальные сети</div>
            <div class="social-contacts__wrapper">
              <div class="social-contacts__link _icon-instagram"><a href="<?php echo carbon_get_theme_option('instagram'); ?>"></a></div>
              <div class="social-contacts__link _icon-facebook"><a href="<?php echo carbon_get_theme_option('facebook'); ?>"></a></div>
              <div class="social-contacts__link _icon-whatsapp"><a href="<?php echo carbon_get_theme_option('whatsapp'); ?>"></a></div>
              <div class="social-contacts__link _icon-telegram"><a href="<?php echo carbon_get_theme_option('telegram'); ?>"></a></div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <div class="header__menu menu footer__menu">
      <a href="<?php echo site_url(); ?>" class="header__logo footer__logo"><img
                src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.svg" alt="logo"></a>
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
</div>
<?php
wp_footer();
?>
</body>

</html>