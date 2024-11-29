<?php if(! post_password_required()): ?>
  <section id="comments" class="comments">
    <?php if(have_comments()): ?>
      <h2>
        <?php echo /* translators: %1$s is replaced with the number of comments and %2$s with the post title */ sprintf(_nx('%1$s response to &ldquo;%2$s&rdquo;', '%1$s responses to &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'sage'), get_comments_number() === 1 ? _x('One', 'comments title', 'sage') : number_format_i18n(get_comments_number()), '<span>' . get_the_title() . '</span>'); ?>

      </h2>

      <ol class="comment-list">
        <?php echo wp_list_comments(['style' => 'ol', 'short_ping' => true]); ?>

      </ol>

      <?php if(get_comment_pages_count() > 1 && get_option('page_comments')): ?>
        <nav>
          <ul class="pager">
            <?php if(get_previous_comments_link()): ?>
              <li class="previous">
                <?php echo get_previous_comments_link(__('&larr; Older comments', 'sage')); ?>

              </li>
            <?php endif; ?>

            <?php if(get_next_comments_link()): ?>
              <li class="next">
                <?php echo get_next_comments_link(__('Newer comments &rarr;', 'sage')); ?>

              </li>
            <?php endif; ?>
          </ul>
        </nav>
      <?php endif; ?>
    <?php endif; ?>

    <?php if(! comments_open() && get_comments_number() != '0' && post_type_supports(get_post_type(), 'comments')): ?>
      <?php if (isset($component)) { $__componentOriginalb5e767ad160784309dfcad41e788743b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb5e767ad160784309dfcad41e788743b = $attributes; } ?>
<?php $component = App\View\Components\Alert::resolve(['type' => 'warning'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Alert::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <?php echo __('Comments are closed.', 'sage'); ?>

       <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb5e767ad160784309dfcad41e788743b)): ?>
<?php $attributes = $__attributesOriginalb5e767ad160784309dfcad41e788743b; ?>
<?php unset($__attributesOriginalb5e767ad160784309dfcad41e788743b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb5e767ad160784309dfcad41e788743b)): ?>
<?php $component = $__componentOriginalb5e767ad160784309dfcad41e788743b; ?>
<?php unset($__componentOriginalb5e767ad160784309dfcad41e788743b); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php (comment_form()); ?>
  </section>
<?php endif; ?>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/partials/comments.blade.php ENDPATH**/ ?>