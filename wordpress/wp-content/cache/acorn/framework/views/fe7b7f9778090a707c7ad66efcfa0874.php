<div class="back-button <?php echo e($block->classes); ?>" style="<?php echo e($block->inlineStyle); ?>">
  <div class="back-button__container container">

    <a href="<?php echo e(wp_get_referer() ? wp_get_referer() : home_url()); ?>"
      class="back-button__link">← <?php echo e(pll__('Назад', 'sage')); ?></a>
  </div>
</div>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/back.blade.php ENDPATH**/ ?>