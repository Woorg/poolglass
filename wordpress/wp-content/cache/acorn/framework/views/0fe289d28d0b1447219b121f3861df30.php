<div class="projects <?php echo e($block->classes); ?>" style="<?php echo e($block->inlineStyle); ?>">

  <div class="projects__container container">

    <ul class="projects__filter">
      <li class="projects__filter-item">
        <a href="" class="projects__filter-link"></a>
      </li>
    </ul>

    
    <?php if($projects): ?>

      <div class="projects__grid">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
          <article class="projects__item">
            <a href="<?php echo e(get_permalink($item->ID)); ?>" class="projects__link">
              <figure class="projects__figure">
                <?php echo get_the_post_thumbnail($item->ID, 'medium', null, [
                    'class' => 'projects__img',
                ]); ?>

              </figure>
              <div class="projects__entry">
                <span
                  class="projects__item-title"><?php echo e($item->post_title); ?></span>
              </div>

            </a>
          </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    <?php endif; ?>

  </div>

  
</div>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/projects.blade.php ENDPATH**/ ?>