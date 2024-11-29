<section
  class="first <?php echo e($parallax ? 'first_parallax' : ''); ?>  <?php echo e($block->classes); ?>">
  <?php if($parallax): ?>
    <div
      class="first__image first__image_320 first__image_480 first__image_768 first__image_1000 first__image_big">
      <?php echo wp_get_attachment_image($parallax_image, 'full', null, [
          'class' => 'first__img',
      ]); ?>

    </div>
  <?php endif; ?>

  <?php echo e(get_svg('wave-320', 'first__wave first__wave_320', [])); ?>

  <?php echo e(get_svg('wave-480', 'first__wave first__wave_480', [])); ?>

  <?php echo e(get_svg('wave-768', 'first__wave first__wave_768', [])); ?>

  <?php echo e(get_svg('wave-1000', 'first__wave first__wave_1000', [])); ?>

  <?php echo e(get_svg('wave-1920', 'first__wave first__wave_big', [])); ?>


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

  
</section>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/first.blade.php ENDPATH**/ ?>