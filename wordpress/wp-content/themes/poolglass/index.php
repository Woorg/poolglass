<!DOCTYPE html>
<html lang="ru">

<head>
  <title><?php wp_title(''); ?></title>
  <meta charset="UTF-8">
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	wp_head();
	?>
<meta name="yandex-verification" content="7819d479609f3135" />
<meta name="google-site-verification" content="suiCZvNHw4TdTn3TJNsGYhigK1KBb_RgjO7H3N7nIbM" />
</head>

<body>
<div class="wrapper">
  <header class="header-content">
		<?php
		get_header();
		?>
    <div class="header-content__block">
      <div class="header-content__container">
        <h1 class="header-content__title title">
					<?php echo apply_filters('the_content', carbon_get_theme_option('promo_title')); ?>
        </h1>
        <div class="header-content__order order-content">
          <div class="order-content__buttons buttons-content">
            <div data-popup="#popup" class="buttons-content__order order-btn"><a href="#"><?php echo carbon_get_theme_option('promo_btn_1'); ?></a>
            </div>
            <div data-popup="#popup-tel" class="buttons-content__call order-btn"><a href="#"><?php echo carbon_get_theme_option('promo_btn_2'); ?></a>
            </div>
          </div>
          <ul class="order-content__about about-content">
            <li class="about-content__item"><?php echo carbon_get_theme_option('benefits_1'); ?></li>
            <li class="about-content__item"><?php echo carbon_get_theme_option('benefits_2'); ?></li>
            <li class="about-content__item"><?php echo carbon_get_theme_option('benefits_3'); ?></li>
            <li class="about-content__item"><?php echo carbon_get_theme_option('benefits_4'); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <main class="page">
    <section class="about">
      <div class="about__container">
        <div class="about__1000px"></div>
        <div class="about__wrapper">
          <div data-da=".about__1000px, 1180" class="about__descr descr-about">
            <div class="descr-about__head">
              <div class="descr-about__subtite"><?php echo carbon_get_theme_option('about_title_block'); ?></div>
              <div class="descr-about__title"><?php echo carbon_get_theme_option('about_title'); ?></div>
            </div>
            <div class="descr-about__text"><?php echo apply_filters('the_content', carbon_get_theme_option('about_desc')); ?></div>
          </div>
					<?php

					$icons_posts = get_posts(array(
						'numberposts'      => -1,
						'post_type'        => 'icons-articles',
						'order'            => 'ASC',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					));

					foreach($icons_posts as $post) :
						?>

            <div class="about__item item-about">
              <a href="<?php echo get_permalink(); ?>" class="item-about__img <?php echo carbon_get_post_meta(get_the_ID(), 'icon_class'); ?>"><img
                        src="<?php echo bloginfo('template_url'); ?>/assets/img/main/about-demo.jpg" width="222" height="153" alt="picture"></a>
              <a href="<?php echo get_permalink(); ?>" class="item-about__text"><?php echo carbon_get_post_meta(get_the_ID(), 'icon_desc'); ?></a>
            </div>

					<?php endforeach; ?>

        </div>
      </div>
    </section>
    <section class="project">
      <div class="project__container">
        <div class="project__title">Последние проекты</div>
        <div class="project__wrapper">

					<?php
					$last_projects = get_posts(array(
						'numberposts' => -1,
						'order'       => 'ASC',
						'post_type'   => 'last_projects',
					));

					foreach($last_projects as $post) {
						setup_postdata($post);
						?>

            <div class="project__item item-project">
              <div class="item-project__title"><?php the_title(); ?></div>
              <div class="item-project__descr descr-project"><?php echo apply_filters('the_content', carbon_get_the_post_meta('last_projects_desc')); ?></div>
              <div class="item-project__link"><a href="<?php echo carbon_get_post_meta(get_the_ID(), 'last_projects_link') ?>">Читать подробнее</a>
              </div>
            </div>

						<?php
					}

					wp_reset_postdata(); // сброс
					?>

          <div class="project__item item-project item-project-img">
            <div class="item-project__title">
              <a href="<?php $url = (( ! empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '/nashi-proekty/';
							echo $url; ?>">Смотреть все проекты</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="contacts">
      <div class="contacts__container">
        <div class="contacts__subtitle"><?php echo carbon_get_theme_option('contacts_title_block'); ?></div>
        <div class="contacts__title"><?php echo carbon_get_theme_option('contacts_desc'); ?></div>
        <div class="contacts__wrapper">
          <div class="contacts__phone phone-contacts">
            <div class="phone-contacts__title">Телефон / Почта</div>
            <div class="phone-contacts__phone"><a href="tel:+74957776590"><?php echo carbon_get_theme_option('phone'); ?></a></div>
            <div class="phone-contacts__mail"><a
                      href="<?php echo carbon_get_theme_option('email'); ?>"><?php echo carbon_get_theme_option('email'); ?></a></div>
          </div>
          <div class="contacts__address address-contacts">
            <div class="address-contacts__title">Адрес</div>
            <div class="address-contacts__address"><?php echo carbon_get_theme_option('address'); ?></div>
          </div>
          <div class="contacts__social social-contacts">
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
    </section>
  </main>
	<?php
	get_footer();
	?>
</div>
<div id="popup" aria-hidden="true" class="popup">
  <div class="popup__wrapper">
    <div class="popup__content">
      <div class="popup__header header-popup">
        <div class="header-popup__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/popup-logo.svg" width="179" height="57"
                                             alt="logo"></div>
        <div class="header-popup__title">Пожалуйста, заполните форму для заказа</div>
        <div class="header-popup__text">* обязательные к заполнению поля</div>
        <button data-close type="button" class="popup__close"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/close.svg"
                                                                   alt="icon"></button>
      </div>
      <form action="#" class="popup__form form-popup">
        <div class="form-popup__item">
          <label for="name">Персональная информация</label>
          <input data-required autocomplete="off" type="text" name="name" data-error="Ошибка" placeholder="Имя *" class="input">
        </div>
        <div class="form-popup__item">
          <label for="name">Контактная информация</label>
          <input data-required autocomplete="off" type="tel" data-tel-input maxlength="18" name="tel" data-error="Ошибка"
                 placeholder="Номер телефона *" class="input">
        </div>
        <div class="form-popup__item">
          <input data-required="email" autocomplete="off" type="text" name="email" data-error="Ошибка" placeholder="Электронная почта *"
                 class="input">
        </div>
        <div class="form-popup__item">
          <textarea data-required autocomplete="off" name="comment" placeholder="Комментарий к заказу *" data-error="Ошибка" class="input"></textarea>
        </div>
        <div class="form-popup__file file-form">
          <div class="file-form__item">
            <input autocomplete="off" type="file" name="file" data-error="Ошибка" placeholder="Прикрепите файл" class="file-form__input">
            <div class="file-form__button">Прикрепить файлы</div>
          </div>
        </div>
        <button type="submit" class="form-popup__btn">Отправить заявку</button>
      </form>
      <div class="popup__footer"></div>
    </div>
  </div>
</div>


<div id="popup-tel" aria-hidden="true" class="popup popup-tel">
  <div class="popup__wrapper">
    <div class="popup__content popup-tel__content">
      <div class="popup__header header-popup header-popup-tel">
        <div class="header-popup__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/popup-logo.svg" width="179" height="57"
                                             alt="logo"></div>
        <div class="header-popup__title header-popup-tel__title">Хотите мы вам перезвоним?</div>
        <button data-close type="button" class="popup__close"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/close.svg"
                                                                   alt="icon"></button>
      </div>
      <form action="#" class="popup__form form-popup form-popup-tel">
        <div class="form-popup__item form-popup-tel__item">
          <input data-required autocomplete="off" type="tel" data-tel-input maxlength="18" name="tel" data-error="" placeholder="Ваш номер телефона"
                 class="input form-popup-tel__input">
          <label class="form-popup-tel__label" for="tel">Например, +7(495) 777-65-90</label>
          <button data-da=".form-popup-tel, 710, last" type="submit" class="form-popup-tel__button">Перезвоните мне</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
wp_footer();
?>
	
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(95236261, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/95236261" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


</body>

</html>