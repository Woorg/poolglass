<div class="header" data-scroll='120' data-scroll-show>
  <div class="header__container">
    <div class="header__menu menu">
      <a href="<?php echo site_url(); ?>" class="header__logo"><img src="<?php echo carbon_get_theme_option('logo'); ?>" width="237" height="76" alt="logo"></a>
      <nav data-da=".burger__menu, 1000" class="menu__body">
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
      <div data-da=".burger__footer, 800" class="menu__contacts contacts-menu">
        <div class="contacts-menu__phone _icon-phone"><a href="tel:+74957776590"><?php echo carbon_get_theme_option('phone'); ?></a></div>
        <div class="contacts-menu__mail _icon-email"><a href="mailto:info@poolglass.ru"><?php echo carbon_get_theme_option('email'); ?></a>
        </div>
      </div>
      <button type="button" class="menu__icon icon-menu"><span></span></button>
    </div>
  </div>
  <div class="burger">
    <div class="burger__menu"></div>
    <div class="burger__footer">
      <div class="burger__social social-burger">
        <div class="social-burger__item _icon-instagram"><a href="<?php echo carbon_get_theme_option('instagram'); ?>"></a></div>
        <div class="social-burger__item _icon-facebook"><a href="<?php echo carbon_get_theme_option('facebook'); ?>"></a></div>
        <div class="social-burger__item _icon-whatsapp"><a href="<?php echo carbon_get_theme_option('whatsapp'); ?>"></a></div>
        <div class="social-burger__item _icon-telegram"><a href="<?php echo carbon_get_theme_option('telegram'); ?>"></a></div>
      </div>
    </div>
  </div>
</div>