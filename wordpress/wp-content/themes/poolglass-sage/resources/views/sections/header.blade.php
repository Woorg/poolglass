<header x-data="header"
  :class="{ header_fixed: isFixed, header_hidden: isHidden, header_nav_open: isNavOpen }"
  class="header">
  <div class="header__container container">

    <a class="header__logo logo" href="{{ home_url('/') }}">
      {!! $logo !!}
    </a>

    @if (has_nav_menu('langs_navigation'))
      <nav class="header__langs langs"
        aria-label="{{ wp_get_nav_menu_name('langs_navigation') }}"">
        {!! wp_nav_menu([
            'theme_location' => 'langs_navigation',
            'menu_class' => 'langs__list',
            'container' => null,
            'active' => '',
        ]) !!}
      </nav>
    @endif

    <div class="header__nav-w">

      @if (has_nav_menu('primary_navigation'))
        <nav class="header__nav nav nav_primary"
          aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">

          {!! wp_nav_menu([
              'theme_location' => 'primary_navigation',
              'menu_class' => 'header__nav-list nav__list',
              'container' => null,
              'active' => '',
          ]) !!}

        </nav>

        <div class="header__contacts-w">
          <ul class="header__socials socials">
            @foreach ($socials as $value)
              {{-- @dump($value['url'], $value['icon_name']) --}}
              <li class="socials__item">
                <a href="{{ $value['url'] }}" class="socials__link">
                  {{ get_svg($value['icon_name'], 'socials__icon', []) }}
                </a>
              </li>
            @endforeach
          </ul>

          <ul class="header__contacts contact-list">
            <li class="contact-list__item">
              <a href="tel:{{ $phone }}" class="contact-list__link">
                {{ get_svg('phone', 'contact-list__icon', [
                    'aria-label' => 'Phone icon',
                ]) }}
                <span class="contact-list__text">{{ $phone_text }}</span>
              </a>
            </li>

            <li class="contact-list__item">
              <a href="mailto:{!! $email !!} "
                class="contact-list__link">
                {{ get_svg('email', 'contact-list__icon', [
                    'aria-label' => 'Email icon',
                ]) }}
                <span class="contact-list__text">{!! $email !!} </span>

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

      @endif
    </div>

  </div>
  </div>
</header>

{{-- <x-search-component></x-search-component> --}}

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
