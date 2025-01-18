<section class="latest-projects <?php echo e($block->classes); ?>"
  style="<?php echo e($block->inlineStyle); ?>">

  <div class="latest-projects__container container">
    <h2 class="latest-projects__title title title_h1"><?php echo e($title); ?></h2>
    <?php if($list): ?>
      <div class="latest-projects__grid">

        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $permalink = isset($item['post']->ID)
                ? get_permalink($item['post']->ID)
                : '#';
          ?>
          
          <div class="latest-projects__item">
            <a href="<?php echo e($permalink); ?>" class="latest-projects__item-link">
              <h3 class="latest-projects__item-title title title_h2">
                <?php echo e($item['item_title']); ?>

              </h3>
              <div class="latest-projects__item-text">
                <?php echo $item['text']; ?>

              </div>
              <span
                class="latest-projects__more"><?php echo e($item['more_text']); ?></span>
            </a>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if($more): ?>
          <div class="latest-projects__item latest-projects__item_more">
            <figure class='latest-projects__item-figure'>
              <?php echo wp_get_attachment_image($more['image']['ID'], 'full', null, [
                  'class' => 'latest-projects__item-img',
              ]); ?>

            </figure>
            <a href="<?php echo e($more['link']); ?>"
              class="latest-projects__more-text title "><span><?php echo e(pll__('Смотреть все проекты', 'sage')); ?></span></a>
          </div>
        <?php endif; ?>
      </div>
    <?php endif; ?>
  </div>
  
</section>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/latestprojects.blade.php ENDPATH**/ ?>