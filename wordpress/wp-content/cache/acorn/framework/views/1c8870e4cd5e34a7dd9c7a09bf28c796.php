<section
  class="first <?php echo e($parallax ? 'first_parallax' : ''); ?>  <?php echo e($block->classes); ?> <?php echo e(is_front_page() ? 'first_front' : 'first_inner'); ?>">
  <div class="first__container-w">

    <div class="first__container container">
      <h1 class="first__title title title_h1"><?php echo $title; ?></h1>
      <div class="first__entry">

        <?php if($buttons_show): ?>
          <div class="first__buttons">
            <?php $__currentLoopData = $buttons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $button): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <button
                class="first__btn btn btn_<?php echo e($button['button_style']); ?>"><?php echo e($button['name']); ?></button>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endif; ?>

        <?php if($list_show): ?>

          <ul class="first__list">
            <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="first__item"><?php echo e($item['item']); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
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
    <?php echo e(get_svg('first-inner-bg', 'first__inner-bg', [])); ?>

  <?php endif; ?>
  
</section>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/first.blade.php ENDPATH**/ ?>