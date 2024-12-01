<footer class="footer">
  <div class="footer__container container">
    <a href="<?php echo e(home_url('/')); ?>" class="footer__logo logo">
      <?php echo $logo; ?>

    </a>

    

    <?php if(has_nav_menu('secondary_navigation')): ?>
      <nav class="footer__nav nav nav_secondary"
        aria-label="<?php echo e(wp_get_nav_menu_name('secondary_navigation')); ?>">
        <?php echo wp_nav_menu([
            'theme_location' => 'secondary_navigation',
            'menu_class' => 'footer__nav-list nav__list',
            'container' => false,
            'active' => '',
        ]); ?>

      </nav>
    <?php endif; ?>

    <div class="footer__copyright"><?php echo e($copyright); ?></div>

</footer>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/sections/footer.blade.php ENDPATH**/ ?>