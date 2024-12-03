<div class="projects <?php echo e($block->classes); ?>" style="<?php echo e($block->inlineStyle); ?>"
  x-data="projectFilter()">

  <div class="projects__container container">

    <?php if($projects): ?>

      <nav class="projects__filter"
        aria-label="<?php echo e(__('Filter projects', 'sage')); ?>">
        <?php if($terms): ?>
          <ul class="projects__filter-list">
            <li class="projects__filter-item">
              <a data-filter="all" class="projects__filter-link" href="#"
                :class="{ 'active': activeFilter === 'all' }"
                @click.prevent="setFilter('all')"><?php echo e(__('Все', 'sage')); ?></a>
            </li>

            <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="projects__filter-item">
                <a data-filter=<?php echo e($term->slug); ?> class="projects__filter-link"
                  href="#"
                  :class="{ 'active': activeFilter === '<?php echo e($term->slug); ?>' }"
                  @click.prevent="setFilter('<?php echo e($term->slug); ?>')"><?php echo e($term->name); ?></a>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        <?php endif; ?>

      </nav>

      <div class="projects__grid">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $terms = wp_get_post_terms($item->ID, 'pool_kinds');
          ?>

          
          <article class="projects__item" data-term=<?php echo e($terms[0]->slug); ?>

            :class="{
                'hidden': activeFilter !== 'all' &&
                    activeFilter !== '<?php echo e($terms[0]->slug); ?>'
            }"
            x-show="activeFilter === 'all' || activeFilter === '<?php echo e($terms[0]->slug); ?>'"
            x-transition>
            <a href="<?php echo e(get_permalink($item->ID)); ?>" class="projects__link">
              <figure class="projects__figure">
                <?php echo get_the_post_thumbnail($item->ID, 'medium', [
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