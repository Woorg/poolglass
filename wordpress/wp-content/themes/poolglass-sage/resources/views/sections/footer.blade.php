<footer
  class="footer {{ is_front_page() || is_page(438) ? 'footer_front' : 'footer_inner' }}">

  <div class="footer__container-w">

    @if (is_front_page() || is_page(438))
    @else
      @php(dynamic_sidebar('sidebar-footer'))
    @endif

    <div class="footer__container container">

      <a href="{{ home_url('/') }}" class="footer__logo logo">
        {!! $logo !!}
      </a>

      @if (has_nav_menu('secondary_navigation'))
        <nav class="footer__nav nav nav_secondary"
          aria-label="{{ wp_get_nav_menu_name('secondary_navigation') }}">
          {!! wp_nav_menu([
              'theme_location' => 'secondary_navigation',
              'menu_class' => 'footer__nav-list nav__list',
              'container' => false,
              'active' => '',
          ]) !!}
        </nav>
      @endif

      <div class="footer__copyright">{{ $copyright }}</div>
    </div>
  </div>

  {{-- @if (is_front_page() || is_page(438)) --}}
  {{ get_svg('footer-wave', 'footer__wave', []) }}
  {{-- @endif --}}

</footer>
