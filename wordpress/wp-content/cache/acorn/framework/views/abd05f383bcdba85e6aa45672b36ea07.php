<div class="articles <?php echo e($block->classes); ?>" style="<?php echo e($block->inlineStyle); ?>">

  <div class="articles__container container">
    <?php if($articles): ?>
      <div class="articles__grid">
        <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
          

          <article class="articles__item">
            <a href="<?php echo e(get_permalink($item->ID)); ?>" class="articles__link">

              <figure class="articles__figure">
                <?php echo get_the_post_thumbnail($item->ID, 'medium', [
                    'class' => 'articles__img ',
                ]); ?>

              </figure>
              <div class="articles__entry">
                <span class="articles__item-title"><?php echo e($item->post_title); ?></span>
              </div>
            </a>
          </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php endif; ?>
  </div>

  
</div>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/articles.blade.php ENDPATH**/ ?>