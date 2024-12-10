<?php if($pagi->hasPages()): ?>
  <nav class="pagination" aria-label="pagination">
    <?php if(!$pagi->onFirstPage()): ?>
      <a href="<?php echo e($pagi->previousPageUrl()); ?>" rel="prev"
        aria-label="Previous Page" class="pagination__back">
        <?php echo e(get_svg('arrow', 'pagination__icon', [])); ?>

        <span aria-hidden="true">Предыдущая</span>
      </a>
    <?php endif; ?>

    <ul class="pagination__list">
      <?php $__currentLoopData = $pagi->elements(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(is_string($element)): ?>
          <li class="pagination__item pagination__item_disabled">
            <span class="mr-3 py-1">&hellip;</span>
          </li>
        <?php endif; ?>

        <?php if(is_array($element)): ?>
          <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="pagination__item">
              <?php if($page == $pagi->currentPage()): ?>
                <span class="pagination__current"
                  aria-current="page"><?php echo e($page); ?></span>
              <?php else: ?>
                <a href="<?php echo e($url); ?>"
                  class="pagination__link"><?php echo e($page); ?></a>
              <?php endif; ?>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <?php if($pagi->hasMorePages()): ?>
      <a href="<?php echo e($pagi->nextPageUrl()); ?>" rel="next" aria-label="Next Page"
        class="pagination__next">
        <span aria-hidden="true">Следующая</span>
        <?php echo e(get_svg('arrow', 'pagination__icon', [])); ?>

      </a>
    <?php endif; ?>
  </nav>
<?php endif; ?>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/components/pagination.blade.php ENDPATH**/ ?>