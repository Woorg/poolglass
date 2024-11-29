<div class="products <?php echo e($block->classes); ?>" style="<?php echo e($block->inlineStyle); ?>">

  

  

  <div class="products__container container">
    <?php if($products): ?>
      <div class="products__grid">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <article class="products__item">
            
            <a href="<?php echo e(get_permalink($item->ID)); ?>" class="products__link">
              <div class="products__entry">
                <h3 class="products__item-title"><?php echo e($item->post_title); ?></h3>
                <span class="products__text"><?php echo e($item->post_excerpt); ?></span>
              </div>
              <figure class="products__figure"> <?php echo get_the_post_thumbnail($item->ID, 'medium', null, [
                  'class' => 'products__img',
              ]); ?></figure>
            </a>
          </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php endif; ?>
  </div>
</div>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/products.blade.php ENDPATH**/ ?>