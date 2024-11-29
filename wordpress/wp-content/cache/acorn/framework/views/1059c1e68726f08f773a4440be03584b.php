<?php (the_content()); ?>

<?php echo wp_link_pages([
    'echo' => 0,
    'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'),
    'after' => '</p></nav>',
]); ?>

<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/partials/content-page.blade.php ENDPATH**/ ?>