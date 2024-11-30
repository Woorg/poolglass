<!doctype html>
<html <?php (language_attributes()); ?>>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="base" content="<?php echo e(config('app.url')); ?>">
  <meta name="yandex-verification" content="7819d479609f3135" />
  <meta name="google-site-verification"
    content="suiCZvNHw4TdTn3TJNsGYhigK1KBb_RgjO7H3N7nIbM" />
  <?php (do_action('get_header')); ?>
  <?php (wp_head()); ?>
</head>

<body <?php (body_class('font-raleway font-regular page flex flex-col min-h-screen ')); ?>>
  <?php (wp_body_open()); ?>

  

  <?php echo $__env->make('sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <main class="main grow">

    <?php echo $__env->yieldContent('content'); ?>
  </main>

  

  <?php echo $__env->make('sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php (do_action('get_footer')); ?>
  <?php (wp_footer()); ?>
  <?php echo $__env->yieldContent('footer_scripts'); ?>

</body>

</html>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/layouts/app.blade.php ENDPATH**/ ?>