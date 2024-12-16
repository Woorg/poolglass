<section
  class="first <?php echo e($parallax ? 'first_parallax' : ''); ?>  <?php echo e($block->classes); ?> <?php echo e(is_front_page() ? 'first_front' : 'first_inner'); ?>">

  <div class="first__container-w">

    <div class="first__container container">

      <?php if(is_front_page()): ?>
        <h1 class="first__title title title_h1"><?php echo $title; ?></h1>
      <?php endif; ?>

      <div class="first__entry">

        <?php if(is_front_page()): ?>
        <?php else: ?>
          <div class="first__title-w">
            <h1 class="first__title title title_h1"><?php echo $title; ?></h1>

            <?php if($buttons_show): ?>
              <div class="first__buttons">
                <?php if($buttons): ?>

                  <?php $__currentLoopData = $buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button x-data
                      x-on:click="$store.popup.openPopup('<?php echo e($button['url']); ?>')"
                      class="first__btn btn btn_<?php echo e($button['button_style']); ?>"><?php echo e($button['name']); ?></button>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
              </div>
            <?php endif; ?>

          </div>
        <?php endif; ?>

        <?php if(is_front_page()): ?>

          <?php if($buttons_show): ?>
            <div class="first__buttons">
              <?php if($buttons): ?>

                <?php $__currentLoopData = $buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <button x-data
                    x-on:click="$store.popup.openPopup('<?php echo e($button['url']); ?>')"
                    class="first__btn btn btn_<?php echo e($button['button_style']); ?>"><?php echo e($button['name']); ?></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
            </div>
          <?php endif; ?>
        <?php endif; ?>
        <?php if($list_show): ?>
          <ul class="first__list">
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="first__item"><?php echo e($item['item']); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        <?php endif; ?>

        <?php if($tiles_show): ?>
          <div class="first__tiles">
            <?php $__currentLoopData = $tiles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              

              <?php
                if (isset($item['tile_link']['url'])) {
                    $tile_url = $item['tile_link']['url'];
                } else {
                    $tile_url = '#';
                }

                if (isset($item['tile_popup_id'])) {
                    $tile_popup_id = $item['tile_popup_id'];
                }
              ?>
              
              <?php if($item['tile_show']): ?>
                <div class="first__tile tile tile_<?php echo e($item['tile_style']); ?>">
                  <a x-data
                    x-on:click="$store.popup.openPopup('<?php echo e($tile_popup_id); ?>')"
                    href="<?php echo e($tile_url); ?>" class="tile__link">
                    <?php echo e(get_svg($item['tile_style'] . '-icon', 'tile__icon', [])); ?>


                    <div class="tile__link-bottom">
                      <span class="tile__link-text">
                        <?php echo e($item['tile_text']); ?>

                      </span>
                      <?php echo e(get_svg('arrow', 'tile__link-icon', [])); ?>

                    </div>
                  </a>
                </div>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

          </div>
        <?php endif; ?>
      </div>

    </div>

    <?php if(is_front_page()): ?>
      <?php echo e(get_svg('first-bg', 'first__bg', [])); ?>

    <?php endif; ?>
  </div>

  <?php if($parallax): ?>
    <div class="first__image">

      <?php echo wp_get_attachment_image($parallax_image, 'full', null, [
          'class' => 'first__img',
      ]); ?>

    </div>
  <?php endif; ?>

  <?php if(!is_front_page()): ?>
    <div class="first__bg">

      <?php echo e(get_svg('first-inner-bg', 'first__inner-bg', [])); ?>

    </div>
  <?php endif; ?>

</section>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/first.blade.php ENDPATH**/ ?>