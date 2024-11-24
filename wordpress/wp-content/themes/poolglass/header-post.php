<!DOCTYPE html>
<html lang="ru">

<?php

$postType = $post -> post_type;

/**
 * Проверяем какая запись отображается путем проверки полей и подгружаем данные по сео заголовку
 */
$seo_title = '';

if($postType === 'articles') {
	$seo_title = carbon_get_post_meta($post -> ID, 'articles_meta_title');
} elseif($postType === 'goods') {
	$seo_title = carbon_get_post_meta($post -> ID, 'goods_meta_title');
} elseif($postType === 'icon') {
	$seo_title = carbon_get_post_meta($post -> ID, 'icon_meta_title');
} elseif($postType === 'kinds') {
	$seo_title = carbon_get_post_meta($post -> ID, 'kinds_meta_title');
} elseif($postType === 'last_projects') {
	$seo_title = carbon_get_post_meta($post -> ID, 'last_projects_meta_title');
} elseif($postType === 'all_prj') {
	$seo_title = carbon_get_post_meta($post -> ID, 'all_prj_meta_title');
}

/**
 * Подгружаем отображение блоков на странице записи
 */
$block1 = carbon_get_theme_option('btnblock_1');
$block2 = carbon_get_theme_option('btnblock_2');
$block3 = carbon_get_theme_option('btnblock_3');
$block4 = carbon_get_theme_option('btnblock_4');
$block5 = carbon_get_theme_option('btnblock_5');
$block6 = carbon_get_theme_option('btnblock_6');
?>

<head>
	<?php 
	if (!empty($seo_title)) {
	?>
  <title><?php echo $seo_title ?></title>
		<?php 
	}
	?>
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
    <div class="header-content__block">
      <div class="header-content__container-article">
        <h1 class="page-title"><?php echo carbon_get_post_meta(get_the_ID(), 'post_main_title') ?></h1>


        <div class="headerArticle__wrapper">
					<?php if($block6) : ?>

            <div class="headerArticle__block block-headerArticle block-headerArticle-back_1">
              <div class="block-headerArticle__icon">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/sale-box.svg" alt="sale-box">
              </div>
              <a class="headerArticle__link headerArticle-link" href="<?php echo get_page_link('1270') ?>">
                <span class="headerArticle-link__title">Акции</span>
                <span>
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/right_arrow.svg" alt="arrow">
                </span>
              </a>
            </div>

					<?php endif; ?>

					<?php if($block4): ?>

            <div class="headerArticle__block block-headerArticle block-headerArticle-back_2">
              <div class="block-headerArticle__icon">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/pricetag.svg" alt="pricetag">
              </div>
              <a class="headerArticle__link headerArticle-link" href="<?php echo get_page_link('1276') ?>">
                <span class="headerArticle-link__title">Прайс оптимальных решений</span>
                <span>
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/right_arrow.svg" alt="arrow">
                </span>
              </a>
            </div>

					<?php endif; ?>

					<?php if($block1): ?>

            <div class="headerArticle__block block-headerArticle block-headerArticle-back_3">
              <div class="block-headerArticle__icon">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/calculator.svg" alt="calculator">
              </div>
              <a class="headerArticle__link headerArticle-link" href="<?php echo get_page_link('1272') ?>">
                <span class="headerArticle-link__title">Калькулятор расчета заявки</span>
                <span>
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/right_arrow.svg" alt="arrow">
                </span>
              </a>
            </div>

					<?php endif; ?>

					<?php if($block5): ?>

            <div class="headerArticle__block block-headerArticle block-headerArticle-back_4">
              <div class="block-headerArticle__icon">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/trident.svg" alt="trident">
              </div>
              <div data-popup="#popup-variants" class="headerArticle__link headerArticle-link">
                <span class="headerArticle-link__title">Варианты для самостоятельной установки</span>
                <span>
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/right_arrow.svg" alt="arrow">
                </span>
              </div>
            </div>

					<?php endif; ?>

					<?php if($block3): ?>

            <div class="headerArticle__block block-headerArticle block-headerArticle-back_5">
              <div class="block-headerArticle__icon">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/call.svg" alt="call">
              </div>
              <div data-popup="#popup-call" class="headerArticle__link headerArticle-link">
                <span class="headerArticle-link__title">Обратный звонок</span>
                <span>
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/right_arrow.svg" alt="arrow">
                </span>
              </div>
            </div>

					<?php endif; ?>

					<?php if($block2): ?>

            <div class="headerArticle__block block-headerArticle block-headerArticle-back_6">
              <div class="block-headerArticle__icon">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/gear.svg" alt="gear">
              </div>
              <div data-popup="#popup-rem" class="headerArticle__link headerArticle-link">
                <span class="headerArticle-link__title">Технология рем</span>
                <span>
                  <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/right_arrow.svg" alt="arrow">
                </span>
              </div>
            </div>

					<?php endif; ?>
        </div>
      </div>
    </div>
  </header>