<!DOCTYPE html>
<html lang="ru">

<?php
/**
 * Определяем на какой странице находимся, чтобы отобразить активное меню
 */
switch($post -> ID) {
	case 81:
		$activeMenuClass1 = 'active';
		break;
	case 416:
		$activeMenuClass2 = 'active';
		break;
	case 375:
		$activeMenuClass3 = 'active';
		break;
	case 343:
		$activeMenuClass4 = 'active';
		break;
	case 438:
		$activeMenuClass5 = 'active';
		break;
}
?>

<head>
  <title><?php echo the_title() ?></title>
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
	wp_head();
	?>
</head>

<body>
<div class="wrapper">
  <header class="header-content kinds__header-content">
    <div class="header" data-scroll='120' data-scroll-show>
      <div class="header__container">
        <div class="header__menu menu">
          <a href="<?php echo site_url(); ?>" class="header__logo"><img src="<?php echo carbon_get_theme_option('logo'); ?>" alt="logo"></a>
          <nav data-da=".burger__menu, 1000" class="menu__body">
            <ul class="menu__list">
              <li class="menu__item"><a href="<?php echo get_page_link('81') ?>"
                                        class="menu__link underline-one <?php echo $activeMenuClass1 ?>"><?php echo
									carbon_get_theme_option('menu_1'); ?></a></li>
              <li class="menu__item"><a href="<?php echo get_page_link('416') ?>" class="menu__link underline-one <?php echo
								$activeMenuClass2 ?>"><?php echo
									carbon_get_theme_option('menu_2'); ?></a></li>
              <li class="menu__item"><a href="<?php echo get_page_link('375') ?>" class="menu__link underline-one <?php echo
								$activeMenuClass3 ?>"><?php echo
									carbon_get_theme_option('menu_3'); ?></a></li>
              <li class="menu__item"><a href="<?php echo get_page_link('343') ?>" class="menu__link underline-one <?php echo
								$activeMenuClass4 ?>"><?php echo
									carbon_get_theme_option('menu_4'); ?></a></li>
              <li class="menu__item"><a href="<?php echo get_page_link('438') ?>" class="menu__link underline-one <?php echo
								$activeMenuClass5 ?>"><?php echo
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
    <div class="header-content__block">
      <div class="header-content__container page-container">
        <p class="header-content__title title page-title">Стеклянный бассейн</p>
        <h1 class="header-content__title title page-title">
          <p style="margin-top: 5px"><?php echo the_title() ?></p>
        </h1>
        <div class="header-content__order order-content">
          <div class="order-content__buttons buttons-content page-content-buttons">
            <div data-popup="#popup" class="buttons-content__order order-btn"><a href="#"><?php echo carbon_get_theme_option('promo_btn_1'); ?></a>
            </div>
            <div data-popup="#popup-tel" class="buttons-content__call order-btn"><a href="#"><?php echo carbon_get_theme_option('promo_btn_2'); ?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>