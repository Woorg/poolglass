<?php
get_header('post');
?>

<?php

$postType = $post -> post_type;

/**
 * Подгружаем картинки с записи
 */
$images = carbon_get_post_meta($post -> ID, 'post_multi_img');

/**
 * Получаем url страниц
 */

$queryStocks = new WP_Query('pagename=akczii');
$stocksUrl   = $queryStocks -> queried_object -> guid;

$queryCalculator = new WP_Query('pagename=kalkulyator-rascheta-zayavki');
$calculatorUrl   = $queryCalculator -> queried_object -> guid;

$queryPrice = new WP_Query('pagename=prajs-optimalnyh-reshenij');
$priceUrl   = $queryPrice -> queried_object -> guid;

/**
 * Стили для обтекания текстом картинки в зависимости от ее расположения
 */
$floatLeftStyle  = "float: left; padding-right: 20px; padding-bottom: 15px;";
$floatRightStyle = "float: right; padding-left: 20px; padding-bottom: 15px;";
$centerImgStyle  = "display: flex; justify-content: center";
$multiRightFloat = "justify-content: flex-end; float: right; padding-left: 20px; padding-bottom: 15px;";
$multiLeftFloat  = "justify-content: flex-end; float: left; padding-right: 20px; padding-bottom: 15px;";

/**
 * Проверяем какая запись отображается путем проверки полей и подгружаем данные записей
 */
if($postType === 'kinds') {
	$data = carbon_get_post_meta($post -> ID, 'kinds_post_item');
} elseif($postType === 'articles') {
	$data = carbon_get_post_meta($post -> ID, 'articles_post_item');
} elseif($postType === 'goods') {
	$data = carbon_get_post_meta($post -> ID, 'goods_post_item');
} elseif($postType === 'icons-articles') {
	$data = carbon_get_post_meta($post -> ID, 'icons_post_item');
} elseif($postType === 'last_projects') {
	$data = carbon_get_post_meta($post -> ID, 'last_projects_post_item');
} elseif($postType === 'all_prj') {
	$data = carbon_get_post_meta($post -> ID, 'all_prj_post_item');
} elseif($postType === 'stocks') {
	$data = carbon_get_post_meta($post -> ID, 'stocks_post_item');
} elseif($postType === 'optprice') {
	$data = carbon_get_post_meta($post -> ID, 'optprice_post_item');
}


/**
 * Проверяем какая запись отображается путем проверки полей и подгружаем ссылку для кнопки 'Назад'
 */
if($postType === 'kinds') {
	$link = carbon_get_post_meta($post -> ID, 'kinds_back_link');
} elseif($postType === 'articles') {
	$link = carbon_get_post_meta($post -> ID, 'articles_back_link');
} elseif($postType === 'goods') {
	$link = carbon_get_post_meta($post -> ID, 'goods_back_link');
} elseif($postType === 'icon') {
	$link = carbon_get_post_meta($post -> ID, 'icon_back_link');
} elseif($postType === 'last_projects') {
	$link = carbon_get_post_meta($post -> ID, 'last_projects_back_link');
} elseif($postType === 'all_prj') {
	$link = carbon_get_post_meta($post -> ID, 'all_prj_back_link');
} elseif($postType === 'stocks') {
	$link = carbon_get_post_meta($post -> ID, 'stocks_back_link');
} elseif($postType === 'optprice') {
	$link = carbon_get_post_meta($post -> ID, 'optprice_back_link');
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

/**
 * Проверяем полное отсутствие блоков
 */
$isBlocksOff = ! $block1 && ! $block2 && ! $block3 && ! $block4 && ! $block5 && ! $block6
?>

<div class="single-post">
  <div class="single-post__container">
    <div class="single-post__wrapper">
      <div class="header-content__back">
        <a href="<?php echo home_url() . "/$link" ?>">← Назад</a>
      </div>
      <div class="headerArticle__wrapper mobile" style="<?php if($isBlocksOff)
				echo 'display: none' ?>">

				<?php if($block6): ?>

          <div class="headerArticle__block block-headerArticle block-headerArticle-back_1">
            <div class="block-headerArticle__icon">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/sale-box.svg" alt="sale-box">
            </div>
            <a class="headerArticle__link headerArticle-link" href="<?php echo $stocksUrl ?>">
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
            <a class="headerArticle__link headerArticle-link" href="<?php echo $priceUrl ?>">
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
            <a class="headerArticle__link headerArticle-link" href="<?php echo $calculatorUrl ?>">
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

			<?php foreach($data as $item) :
				$images = $item['post_multi_img'];
				$width = $item['width'] ? "width: $item[width]px" : null;
				$height = $item['height'] ? "height: $item[height]px" : null;
				$multiWidth_1 = $item['multi_width_1'] ? "width: $item[multi_width_1]px" : null;
				$multiWidth_2 = $item['multi_width_2'] ? "width: $item[multi_width_2]px" : null;
				$multiHeight_1 = $item['multi_height_1'] ? "height: $item[multi_height_1]px" : null;
				$multiHeight_2 = $item['multi_height_2'] ? "height: $item[multi_height_2]px" : null;
				$objectFit = "object-fit: fill";
				?>

        <div class="post__item">

					<?php if($item['post_img_position'] == 'left') : ?>
						<?php if($item['post_img_number'] == 'one' && strlen($item['post_img'])) : ?>
              <a href="<?php echo $item['post_img'] ?>" class="single-post__img popup-img" style="<?php echo $floatLeftStyle ?>">
                <img src=" <?php echo $item['post_img'] ?>" style="<?php echo $width ?? $width ?> <?php echo $height ?? $height ?>;" alt="">
              </a>

						<?php elseif($item['post_img_number'] == 'multi' && count($images) === 2) : ?>
              <div class="single-post__muliti-img" style="<?php echo $multiLeftFloat ?>">
								<?php foreach($images as $key => $image) :
									$styleWidth = $key === 0 ? $multiWidth_1 : $multiWidth_2;
									$styleHeight = $key === 0 ? $multiHeight_1 : $multiHeight_2;
									?>
                  <a class="popup-img" href="<?php echo wp_get_attachment_image_url($image, 'full') ?>">
                    <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" style="<?php echo $styleWidth ?? $styleWidth ?>; <?php
										echo $styleHeight ?? $styleHeight ?>; <?php echo $objectFit ?>" alt="">
                  </a>
								<?php endforeach; ?>
              </div>

						<?php elseif($item['post_img_number'] == 'multi' && count($images)) : ?>
              <div class="single-post__muliti-img">
								<?php foreach($images as $image) : ?>
                  <a class="popup-img" href="<?php echo wp_get_attachment_image_url($image, 'full') ?>">
                    <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="">
                  </a>
								<?php endforeach; ?>
              </div>

						<?php endif; ?>
					<?php endif; ?>

					<?php if($item['post_img_position'] == 'right') : ?>
						<?php if($item['post_img_number'] == 'one' && strlen($item['post_img'])) : ?>
              <a href="<?php echo $item['post_img'] ?>" class="single-post__img popup-img" style="<?php echo $floatRightStyle ?>">
                <img src=" <?php echo $item['post_img'] ?>" style="<?php echo $width ?? $width ?>; <?php echo $height ?? $height ?>;" alt="">
              </a>

						<?php elseif($item['post_img_number'] == 'multi' && count($images) === 2) : ?>
              <div class="single-post__muliti-img" style="<?php echo $multiRightFloat ?>">
								<?php foreach($images as $key => $image) :
									$styleWidth = $key === 0 ? $multiWidth_1 : $multiWidth_2;
									$styleHeight = $key === 0 ? $multiHeight_1 : $multiHeight_2;
									?>
                  <a class="popup-img" href="<?php echo wp_get_attachment_image_url($image, 'full') ?>">
                    <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" style="<?php echo $styleWidth ?? $styleWidth ?>; <?php
										echo $styleHeight ?? $styleHeight ?>; <?php echo $objectFit ?>" alt="">
                  </a>
								<?php endforeach; ?>
              </div>

						<?php elseif($item['post_img_number'] == 'multi' && count($images)) : ?>
              <div class="single-post__muliti-img">
								<?php foreach($images as $image) : ?>
                  <a class="popup-img" href="<?php echo wp_get_attachment_image_url($image, 'full') ?>">
                    <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="">
                  </a>
								<?php endforeach; ?>
              </div>

						<?php endif; ?>
					<?php endif; ?>

					<?php if($item['post_img_position'] == 'center') : ?>
						<?php if($item['post_img_number'] == 'one' && strlen($item['post_img'])) : ?>
              <a href="<?php echo $item['post_img'] ?>" class="single-post__img popup-img" style="<?php echo $centerImgStyle ?>">
                <img src=" <?php echo $item['post_img'] ?>" style="<?php echo $width ?? $width ?>; <?php echo $height ?? $height ?>;" alt="">
              </a>
						<?php elseif($item['post_img_number'] == 'multi' && count($images)) : ?>
              <div class="single-post__muliti-img">
								<?php foreach($images as $image) : ?>
                  <a class="popup-img" href="<?php echo wp_get_attachment_image_url($image, 'full') ?>">
                    <img src="<?php echo wp_get_attachment_image_url($image, 'full') ?>" alt="">
                  </a>
								<?php endforeach; ?>
              </div>
						<?php endif; ?>
					<?php endif; ?>

          <div class="single-post__desc"><?php echo apply_filters('the_content', $item['post_text_img']) ?></div>
          <div class="single-post__main"><?php echo apply_filters('the_content', $item['post_text_main']) ?></div>
        </div>
			<?php endforeach; ?>

    </div>
  </div>
</div>


<?php
get_footer('page');
?>


<div id="popup-rem" aria-hidden="true" class="popup">
  <div class="popup__wrapper">
    <div class="popup__content">
      <div class="popup__header header-popup">
        <div class="header-popup__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/popup-logo.svg" width="179" height="57"
                                             alt="logo"></div>
        <div class="header-popup__title">Пожалуйста, заполните форму</div>
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
        <button type="submit" class="form-popup__btn">Отправить заявку</button>
      </form>
      <div class="popup__footer"></div>
    </div>
  </div>
</div>

<div id="popup-variants" aria-hidden="true" class="popup">
  <div class="popup__wrapper">
    <div class="popup__content">
      <div class="popup__header header-popup">
        <div class="header-popup__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/popup-logo.svg" width="179" height="57"
                                             alt="logo"></div>
        <div class="header-popup__title">Варианты для самостоятельной установки</div>
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
        <button type="submit" class="form-popup__btn">Отправить заявку</button>
      </form>
      <div class="popup__footer"></div>
    </div>
  </div>
</div>

<div id="popup-call" aria-hidden="true" class="popup">
  <div class="popup__wrapper">
    <div class="popup__content">
      <div class="popup__header header-popup">
        <div class="header-popup__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/popup-logo.svg" width="179" height="57"
                                             alt="logo"></div>
        <div class="header-popup__title">Форма обратного звонка</div>
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
        <button type="submit" class="form-popup__btn">Отправить заявку</button>
      </form>
      <div class="popup__footer"></div>
    </div>
  </div>
</div>

</div>