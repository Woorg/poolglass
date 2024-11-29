<div class="kinds <?php echo e($block->classes); ?>" style="<?php echo e($block->inlineStyle); ?>">
  <div class="kinds__container container">

    

    <?php if($kinds): ?>
      <div class="kinds__grid">
        <?php $__currentLoopData = $kinds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php

            $kind_image = get_field('kind_image', $item->ID);
            $kind_excerpt = get_field('kind_excerpt', $item->ID);
          ?>
          

          
          <article class="kinds__item">
            <a href="<?php echo e(get_permalink($item->ID)); ?>" class="kinds__link">
              <figure class="kinds__figure">
                <?php echo wp_get_attachment_image($kind_image, 'full', null, [
                    'class' => 'kinds__img',
                ]); ?>

              </figure>
              <h3 class="kinds__title"><?php echo $kind_excerpt; ?></h3>
              </figure>
              <div class="kinds__entry">
                <div class="kinds__text">
                </div>

                <span class="kinds__more" href="">Читать подробнее</span>

              </div>
            </a>
          </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </div>
    <?php endif; ?>

    
  </div>
</div>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/types.blade.php ENDPATH**/ ?>