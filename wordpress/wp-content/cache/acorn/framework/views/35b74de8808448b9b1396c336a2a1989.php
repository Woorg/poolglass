<div x-data x-show="$store.popup.popup_open === '<?php echo e($popup_id); ?>'"
  style="display: none" role="dialog" aria-modal="true"
  x-id="['<?php echo e($popup_id); ?>']" :aria-labelledby="$id('<?php echo e($popup_id); ?>')"
  class="popup">
  <!-- Overlay -->
  <div x-show="$store.popup.popup_open === '<?php echo e($popup_id); ?>'"
    x-transition.opacity
    x-on:click="$store.popup.closePopup('<?php echo e($popup_id); ?>')"
    class="popup__overlay  <?php echo e($popup_style); ?> <?php echo e($block->classes); ?>"
    style="<?php echo e($block->inlineStyle); ?>">
    <?php if (isset($component)) { $__componentOriginaleb8c89a7efda50450a3a76fb82e931fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleb8c89a7efda50450a3a76fb82e931fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.popup','data' => ['popupId' => ''.e($popup_id).'','popupShortcode' => ''.$popup_shortcode.'','popupTitle' => ''.$title.'','class' => 'popup__form ','popupStyle' => ''.e($popup_style).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('popup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['popup_id' => ''.e($popup_id).'','popup_shortcode' => ''.$popup_shortcode.'','popup_title' => ''.$title.'','class' => 'popup__form ','popup_style' => ''.e($popup_style).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleb8c89a7efda50450a3a76fb82e931fd)): ?>
<?php $attributes = $__attributesOriginaleb8c89a7efda50450a3a76fb82e931fd; ?>
<?php unset($__attributesOriginaleb8c89a7efda50450a3a76fb82e931fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleb8c89a7efda50450a3a76fb82e931fd)): ?>
<?php $component = $__componentOriginaleb8c89a7efda50450a3a76fb82e931fd; ?>
<?php unset($__componentOriginaleb8c89a7efda50450a3a76fb82e931fd); ?>
<?php endif; ?>
  </div>
</div>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/popup.blade.php ENDPATH**/ ?>