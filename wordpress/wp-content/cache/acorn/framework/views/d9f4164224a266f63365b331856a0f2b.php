<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php if(!have_posts()): ?>
    <?php
      wp_redirect(home_url('/404/')); // Replace with your custom 404
    ?>
  <?php endif; ?>

  <?php while(have_posts()): ?>
    <?php (the_post()); ?>
    <?php echo $__env->first([
        'partials.content-' . get_post_type(),
        'partials.content',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endwhile; ?>

  <?php echo get_the_posts_navigation(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('sidebar'); ?>
  <?php echo $__env->make('sections.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/index.blade.php ENDPATH**/ ?>