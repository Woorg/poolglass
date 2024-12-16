<!-- Panel -->
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'popup_id' => '',
    'popup_shortcode',
    'popup_title' => '',
    'class' => '',
    'popup_style',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'popup_id' => '',
    'popup_shortcode',
    'popup_title' => '',
    'class' => '',
    'popup_style',
]); ?>
<?php foreach (array_filter(([
    'popup_id' => '',
    'popup_shortcode',
    'popup_title' => '',
    'class' => '',
    'popup_style',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div x-on:click.stop x-transition
  x-trap.noscroll.inert="$store.popup.popup_open === <?php echo e($popup_id); ?>"
  class=" <?php echo e($class); ?> popup__form_<?php echo e($popup_style); ?>"
  :id="$id('<?php echo e($popup_id); ?>')">
  <div class="popup__header">
    <div class="popup__content">
      <div class="popup__logo">
        <?php echo $logo; ?>

      </div>

      <div class="popup__title title title_h2"><?php echo $popup_title; ?></div>
      <small class="popup__note"><sub>*</sub>
        <?php echo e(pll__('обязательные к заполнению поля', 'sage')); ?></small>
    </div>
    
    
  </div>
  <div class="popup__body">
    <?php echo $popup_shortcode; ?>

  </div>

  <div class="popup__footer">
    <?php echo e(get_svg('popup-wave-down', 'popup__wave popup__wave_down', [])); ?>

  </div>

  <button type="button" x-on:click="$store.popup.closePopup()"
    class="popup__close">
    <?php echo e(get_svg('close', 'popup__close-icon', [])); ?>


  </button>

</div>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/components/popup.blade.php ENDPATH**/ ?>