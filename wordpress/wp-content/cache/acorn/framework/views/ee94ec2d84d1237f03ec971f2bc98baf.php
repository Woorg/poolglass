<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php if(!have_posts()): ?>
    <?php if(is_404()): ?>
      <?php
        wp_redirect(home_url('/404/')); // Replace with your custom 404
      ?>
    <?php endif; ?>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/404.blade.php ENDPATH**/ ?>