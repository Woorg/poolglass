<div class="single single-kinds {{ $block->classes }}"
  style="{{ $block->inlineStyle }}">

  <div class="single-post__container container">
    <div class="single-post__wrapper">
      <div class="header-content__back">
        <a href="">← Назад</a>
      </div>
      <div class="headerArticle__wrapper">

        <div
          class="headerArticle__block block-headerArticle block-headerArticle-back_1">
          <div class="block-headerArticle__icon">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/sale-box.svg"
              alt="sale-box">
          </div>
          <a class="headerArticle__link headerArticle-link" href="">
            <span class="headerArticle-link__title">Акции</span>
            <span>
              <img
                src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/right_arrow.svg"
                alt="arrow">
            </span>
          </a>
        </div>

        <div
          class="headerArticle__block block-headerArticle block-headerArticle-back_2">
          <div class="block-headerArticle__icon">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/pricetag.svg"
              alt="pricetag">
          </div>
          <a class="headerArticle__link headerArticle-link"
            href="<?php echo $priceUrl; ?>">
            <span class="headerArticle-link__title">Прайс оптимальных
              решений</span>
            <span>
              <img
                src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/right_arrow.svg"
                alt="arrow">
            </span>
          </a>
        </div>

        <div
          class="headerArticle__block block-headerArticle block-headerArticle-back_3">
          <div class="block-headerArticle__icon">
            <img
              src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/calculator.svg"
              alt="calculator">
          </div>
          <a class="headerArticle__link headerArticle-link"
            href="<?php echo $calculatorUrl; ?>">
            <span class="headerArticle-link__title">Калькулятор расчета
              заявки</span>
            <span>
              <img
                src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/right_arrow.svg"
                alt="arrow">
            </span>
          </a>
        </div>

        <div
          class="headerArticle__block block-headerArticle block-headerArticle-back_4">
          <div class="block-headerArticle__icon">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/trident.svg"
              alt="trident">
          </div>
          <div data-popup="#popup-variants"
            class="headerArticle__link headerArticle-link">
            <span class="headerArticle-link__title">Варианты для самостоятельной
              установки</span>
            <span>
              <img
                src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/right_arrow.svg"
                alt="arrow">
            </span>
          </div>
        </div>

        <div
          class="headerArticle__block block-headerArticle block-headerArticle-back_5">
          <div class="block-headerArticle__icon">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/call.svg"
              alt="call">
          </div>
          <div data-popup="#popup-call"
            class="headerArticle__link headerArticle-link">
            <span class="headerArticle-link__title">Обратный звонок</span>
            <span>
              <img
                src="<?php echo bloginfo('template_url'); ?>/assets/img/articleBlock/right_arrow.svg"
                alt="arrow">
            </span>
          </div>
        </div>

        <?php endif; ?>

        <div
          class="headerArticle__block block-headerArticle block-headerArticle-back_6">
          <div class="block-headerArticle__icon">
            <img src="/assets/img/articleBlock/gear.svg" alt="gear">
          </div>
          <div data-popup="#popup-rem"
            class="headerArticle__link headerArticle-link">
            <span class="headerArticle-link__title">Технология рем</span>
            <span>
              <img src="/assets/img/articleBlock/right_arrow.svg"
                alt="arrow">
            </span>
          </div>
        </div>

      </div>

      <div class="post__item">

        <?php if($item['post_img_position'] == 'left') : ?>
        <?php if($item['post_img_number'] == 'one' && strlen($item['post_img'])) : ?>
        <a href="<?php echo $item['post_img']; ?>" class="single-post__img popup-img"
          style="<?php echo $floatLeftStyle; ?>">
          <img src=" <?php echo $item['post_img']; ?>"
            style="<?php echo $width ?? $width; ?> <?php echo $height ?? $height; ?>;" alt="">
        </a>

        <?php elseif($item['post_img_number'] == 'multi' && count($images) === 2) : ?>
        <div class="single-post__muliti-img" style="<?php echo $multiLeftFloat; ?>">
          <?php foreach($images as $key => $image) :
									$styleWidth = $key === 0 ? $multiWidth_1 : $multiWidth_2;
									$styleHeight = $key === 0 ? $multiHeight_1 : $multiHeight_2;
									?>
          <a class="popup-img" href="<?php echo wp_get_attachment_image_url($image, 'full'); ?>">
            <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>"
              style="<?php echo $styleWidth ?? $styleWidth; ?>; <?php
              echo $styleHeight ?? $styleHeight; ?>; <?php echo $objectFit; ?>"
              alt="">
          </a>
          <?php endforeach; ?>
        </div>

        <?php elseif($item['post_img_number'] == 'multi' && count($images)) : ?>
        <div class="single-post__muliti-img">
          <?php foreach($images as $image) : ?>
          <a class="popup-img" href="<?php echo wp_get_attachment_image_url($image, 'full'); ?>">
            <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" alt="">
          </a>
          <?php endforeach; ?>
        </div>

        <?php endif; ?>
        <?php endif; ?>

        <?php if($item['post_img_position'] == 'right') : ?>
        <?php if($item['post_img_number'] == 'one' && strlen($item['post_img'])) : ?>
        <a href="<?php echo $item['post_img']; ?>" class="single-post__img popup-img"
          style="<?php echo $floatRightStyle; ?>">
          <img src=" <?php echo $item['post_img']; ?>"
            style="<?php echo $width ?? $width; ?>; <?php echo $height ?? $height; ?>;" alt="">
        </a>

        <?php elseif($item['post_img_number'] == 'multi' && count($images) === 2) : ?>
        <div class="single-post__muliti-img" style="<?php echo $multiRightFloat; ?>">
          <?php foreach($images as $key => $image) :
									$styleWidth = $key === 0 ? $multiWidth_1 : $multiWidth_2;
									$styleHeight = $key === 0 ? $multiHeight_1 : $multiHeight_2;
									?>
          <a class="popup-img" href="<?php echo wp_get_attachment_image_url($image, 'full'); ?>">
            <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>"
              style="<?php echo $styleWidth ?? $styleWidth; ?>; <?php
              echo $styleHeight ?? $styleHeight; ?>; <?php echo $objectFit; ?>"
              alt="">
          </a>
          <?php endforeach; ?>
        </div>

        <?php elseif($item['post_img_number'] == 'multi' && count($images)) : ?>
        <div class="single-post__muliti-img">
          <?php foreach($images as $image) : ?>
          <a class="popup-img" href="<?php echo wp_get_attachment_image_url($image, 'full'); ?>">
            <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" alt="">
          </a>
          <?php endforeach; ?>
        </div>

        <?php endif; ?>
        <?php endif; ?>

        <?php if($item['post_img_position'] == 'center') : ?>
        <?php if($item['post_img_number'] == 'one' && strlen($item['post_img'])) : ?>
        <a href="<?php echo $item['post_img']; ?>" class="single-post__img popup-img"
          style="<?php echo $centerImgStyle; ?>">
          <img src=" <?php echo $item['post_img']; ?>"
            style="<?php echo $width ?? $width; ?>; <?php echo $height ?? $height; ?>;"
            alt="">
        </a>
        <?php elseif($item['post_img_number'] == 'multi' && count($images)) : ?>
        <div class="single-post__muliti-img">
          <?php foreach($images as $image) : ?>
          <a class="popup-img" href="<?php echo wp_get_attachment_image_url($image, 'full'); ?>">
            <img src="<?php echo wp_get_attachment_image_url($image, 'full'); ?>" alt="">
          </a>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
        <?php endif; ?>

        <div class="single-post__desc"><?php echo apply_filters('the_content', $item['post_text_img']); ?></div>
        <div class="single-post__main"><?php echo apply_filters('the_content', $item['post_text_main']); ?></div>
      </div>

    </div>
  </div>

  <InnerBlocks template="{{ $block->template }}" />
</div>
