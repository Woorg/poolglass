<section
  class="contacts <?php echo e($block->classes); ?> <?php echo e(is_front_page() || is_page(438) ? 'contacts_front' : 'contacts_inner'); ?> <?php echo e(is_page(438) ? 'contacts_contact-page' : ''); ?>"
  style="<?php echo e($block->inlineStyle); ?>">

  <div class="contacts__container container">
    <div class="contacts__block-title"><?php echo e($block_title); ?></div>

    <h2 class="contacts__title title title_h1"><?php echo e($title); ?></h2>

    <?php if($list): ?>
      <div class="contacts__entries">
        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          
          <article class="contacts__item">
            <div class="contacts__item-title"><?php echo e($item['item_title']); ?></div>
            <?php
              $count = count($list);
            ?>

            <?php if($index < count($list) - 1): ?>
              <ul class="contacts__list">
                <?php $__currentLoopData = (array) $item['list']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subitem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                  <?php if(!empty($subitem['text'])): ?>
                    <li class="contacts__list-item">

                      <?php

                        $text = $subitem['text'];
                        $isEmail = filter_var($text, FILTER_VALIDATE_EMAIL);
                        $isPhone = preg_match(
                            '/^\+?\d+$/',
                            str_replace([')', '(', ' ', '-'], '', $text),
                        );

                        if ($isEmail) {
                            $href = "mailto:$text";
                        } elseif ($isPhone) {
                            $href =
                                'tel:' .
                                str_replace([')', '(', ' ', '-'], '', $text);
                        }
                      ?>

                      <?php if($isEmail || $isPhone): ?>
                        <a class="contacts__list-value"
                          href="<?php echo e($href); ?>"><?php echo $text; ?></a>
                      <?php else: ?>
                        <span
                          class="contacts__list-value"><?php echo $text; ?></span>
                      <?php endif; ?>

                    </li>
                  <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            <?php else: ?>
              <ul class="contacts__socials socials">
                <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  
                  <li class="socials__item">
                    <a href="<?php echo e($value['url']); ?>" class="socials__link">
                      <?php echo e(get_svg($value['icon_name'], 'socials__icon', [])); ?>

                    </a>
                  </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </ul>
            <?php endif; ?>
          </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        

        

      </div>
    <?php endif; ?>

    <?php if($show_map): ?>
      <div class="contacts__map">
        
        <?php echo $map; ?>

      </div>
    <?php endif; ?>
</section>


<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/blocks/contacts.blade.php ENDPATH**/ ?>