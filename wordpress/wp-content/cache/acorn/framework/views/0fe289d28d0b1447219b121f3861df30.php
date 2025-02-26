<div class="projects <?php echo e($block->classes); ?>" style="<?php echo e($block->inlineStyle); ?>"
  x-data="projectFilter()">

  <div class="projects__container container">

    <?php if($projects): ?>

      <nav class="projects__filter"
        aria-label="<?php echo e(pll__('Filter projects', 'sage')); ?>">
        <?php if($terms): ?>

          <ul class="projects__filter-list">
            <li class="projects__filter-item">
              <a data-filter="all" class="projects__filter-link" href="#"
                :class="{ 'active': activeFilter === 'all' }"
                @click.prevent="setFilter('all')"><?php echo e(pll__('Все', 'sage')); ?></a>
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
            $term_slug = !empty($terms) ? $terms[0]->slug : '';
          ?>

          <article class="projects__item" data-term=<?php echo e($term_slug); ?>

            :class="{
                'hidden': activeFilter !== 'all' &&
                    activeFilter !== '<?php echo e($term_slug); ?>'
            }"
            x-show="activeFilter === 'all' || activeFilter === '<?php echo e($term_slug); ?>'"
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
    <?php elseif(empty($projects)): ?>
      <p><?php echo e(pll__('No projects found', 'sage')); ?></p>
    <?php endif; ?>

    <?php if($pagination): ?>
      <?php if (isset($component)) { $__componentOriginal41032d87daf360242eb88dbda6c75ed1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal41032d87daf360242eb88dbda6c75ed1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pagination','data' => ['pagi' => $pagination]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pagination'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pagi' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pagination)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal41032d87daf360242eb88dbda6c75ed1)): ?>
<?php $attributes = $__attributesOriginal41032d87daf360242eb88dbda6c75ed1; ?>
<?php unset($__attributesOriginal41032d87daf360242eb88dbda6c75ed1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal41032d87daf360242eb88dbda6c75ed1)): ?>
<?php $component = $__componentOriginal41032d87daf360242eb88dbda6c75ed1; ?>
<?php unset($__componentOriginal41032d87daf360242eb88dbda6c75ed1); ?>
<?php endif; ?>
    <?php endif; ?>
  </div>

  
</div>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/projects.blade.php ENDPATH**/ ?>