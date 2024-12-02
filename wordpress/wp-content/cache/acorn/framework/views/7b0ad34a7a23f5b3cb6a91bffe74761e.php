<section
  class="contacts <?php echo e($block->classes); ?> <?php echo e(is_front_page() ? 'contacts_front' : 'contacts_inner'); ?>"
  style="<?php echo e($block->inlineStyle); ?>">

  <div class="contacts__container container">
    <div class="contacts__block-title">Контакты</div>

    <h2 class="contacts__title title title_h1">Свяжитесь с нами любым удобным
      способом</h2>
    <div class="contacts__entries">
      <article class="contacts__item">
        <div class="contacts__item-title">Телефон / Почта</div>
        <ul class="contacts__list">
          <li class="contacts__list-item">
            <a class="contacts__list-value" href="tel:+74957776590">+7(495)
              777-65-90</a>
          </li>
          <li class="contacts__list-item">
            <a class="contacts__list-value" href="mailto:">
              info@poolglass.ru</a>
          </li>
        </ul>
      </article>

      <article class="contacts__item">
        <div class="contacts__item-title">Адрес</div>
        <ul class="contacts__list">
          <li class="contacts__list-item">
            г. Москва, Хамовнический вал, д.28, подъезд 8.
          </li>
        </ul>
      </article>

      <article class="contacts__item">
        <div class="contacts__item-title">Социальные сети</div>
        <ul class="contacts__socials socials">
          <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
            <li class="socials__item">
              <a href="<?php echo e($value['url']); ?>" class="socials__link">
                <?php echo e(get_svg($value['icon_name'], 'socials__icon', [])); ?>

              </a>
            </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
      </article>

    </div>

    <div class="contacts__map">
    </div>

</section>


<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/contacts.blade.php ENDPATH**/ ?>