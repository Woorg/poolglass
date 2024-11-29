<?php $__env->startSection('content'); ?>
  <?php while(have_posts()): ?>
    <?php (the_post()); ?>
    <?php echo $__env->first([
        'partials.content-' . get_post_type(),
        'partials.content',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endwhile; ?>

  

  
  

  
  

  

  
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
  <script type="module" src="<?php echo Vite::asset('resources/assets/scripts/pages/front-page.ts'); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/front-page.blade.php ENDPATH**/ ?>