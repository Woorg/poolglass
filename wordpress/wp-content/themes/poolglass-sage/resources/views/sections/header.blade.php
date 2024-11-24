<header class="header" data-scroll='120' data-scroll-show>
  <div class="header__container container">

    <a class="header__logo logo" href="{{ home_url('/') }}">
      {!! $logo !!}
    </a>

    @if (has_nav_menu('primary_navigation'))
      <nav class="header__nav nav nav_primary"
        aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">

        {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'nav__list',
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
    @endif
  </div>
  </div>
</header>

{{-- <x-search-component></x-search-component> --}}
