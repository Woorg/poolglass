<section class="about <?php echo e($block->classes); ?>" style="<?php echo e($block->inlineStyle); ?>">
  <div class="about__container container">
    <div class="about__entry">

      <div class="about__block-title"><?php echo e($block_title); ?></div>
      <h2 class="about__title title title_h2"><?php echo e($title); ?></h2>
      <div class="about__text text"><?php echo $text; ?></div>
    </div>

    <?php if($list): ?>

      
      <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
        
        <article class="about__card about__card_<?php echo e($key + 1); ?>">

          <?php
            $permalink = get_permalink($item['post']->ID);
          ?>

          <a href="<?php echo e($permalink ?? $permalink); ?>" class="about__card-link">
            <div class="about__card-figure">
              <?php echo wp_get_attachment_image($item['image']['ID'], 'full', null, [
                  'class' => 'about__card-img',
              ]); ?>

            </div>
            <h3 class="about__card-title"><?php echo e($item['item_title']); ?></h3>
          </a>
        </article>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      
    <?php endif; ?>

  </div>
  </div>
</section>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/about.blade.php ENDPATH**/ ?>