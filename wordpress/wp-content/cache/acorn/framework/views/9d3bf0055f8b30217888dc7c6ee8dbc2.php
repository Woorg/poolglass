<header x-data="header"
  :class="{ header_fixed: isFixed, header_hidden: isHidden, header_nav_open: isNavOpen }"
  class="header">
  <div class="header__container container">

    <a class="header__logo logo" href="<?php echo e(home_url('/')); ?>">
      <?php echo $logo; ?>

    </a>

    <?php if(has_nav_menu('langs_navigation')): ?>
      <nav class="header__langs langs"
        aria-label="<?php echo e(wp_get_nav_menu_name('langs_navigation')); ?>"">
        <?php echo wp_nav_menu([
            'theme_location' => 'langs_navigation',
            'menu_class' => 'langs__list',
            'container' => null,
            'active' => '',
        ]); ?>

      </nav>
    <?php endif; ?>

    <div class="header__nav-w">

      <?php if(has_nav_menu('primary_navigation')): ?>
        <nav class="header__nav nav nav_primary"
          aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">

          <?php echo wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'menu_class' => 'header__nav-list nav__list',
              'container' => null,
              'active' => '',
          ]); ?>


        </nav>

        <div class="header__contacts-w">
          <ul class="header__socials socials">
            <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              
              <li class="socials__item">
                <a href="<?php echo e($value['url']); ?>" class="socials__link">
                  <?php echo e(get_svg($value['icon_name'], 'socials__icon', [])); ?>

                </a>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>

          <ul class="header__contacts contact-list">
            <li class="contact-list__item">
              <a href="tel:<?php echo e($phone); ?>" class="contact-list__link">
                <?php echo e(get_svg('phone', 'contact-list__icon', [
                    'aria-label' => 'Phone icon',
                ])); ?>

                <span class="contact-list__text"><?php echo e($phone_text); ?></span>
              </a>
            </li>

            <li class="contact-list__item">
              <a href="mailto:<?php echo $email; ?> "
                class="contact-list__link">
                <?php echo e(get_svg('email', 'contact-list__icon', [
                    'aria-label' => 'Email icon',
                ])); ?>

                <span class="contact-list__text"><?php echo $email; ?> </span>

              </a>
            </li>
          </ul>
        </div>

        <div class="header__burger" @click="toggleNav">
          <span :class="{ 'rotate': isNavOpen }"
            class="header__burger-line"></span>
          <span :class="{ 'hidden': isNavOpen }"
            class="header__burger-line"></span>
          <span :class="{ 'rotate-reverse': isNavOpen }"
            class="header__burger-line"></span>
        </div>

      <?php endif; ?>
    </div>

  </div>
  </div>
</header>



<script module>
  Alpine.data('header', () => ({
    isNavOpen: false,
    isFixed: false,
    isHidden: false,
    lastScroll: 0,
    toggleNav: () => {
      this.isNavOpen = !this.isNavOpen;
    },

    handleScroll() {
      const currentScroll = window.scrollY;

      if (currentScroll > 120) {
        this.isFixed = true;
        this.isHidden = currentScroll > this.lastScroll;
      } else {
        this.isFixed = false;
        this.isHidden = false;
      }

      this.lastScroll = currentScroll;
    },

    init() {
      window.addEventListener('scroll', this.handleScroll.bind(this));
    },
  }));
</script>
<?php /**PATH /var/www/poolglass/wordpress/wp-content/themes/poolglass-sage/resources/views/sections/header.blade.php ENDPATH**/ ?>