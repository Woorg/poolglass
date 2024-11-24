<footer class="footer">
  <div class="footer__container container">
    {{-- <a href="{{ home_url('/') }}" class="footer__logo logo">
      {!! $logo !!}
    </a> --}}

    @if (has_nav_menu('secondary_navigation'))
      <nav class="footer__nav nav nav_secondary"
        aria-label="{{ wp_get_nav_menu_name('secondary_navigation') }}">
        {!! wp_nav_menu([
            'theme_location' => 'secondary_navigation',
            'menu_class' => 'nav__list',
            'container' => false,
            'active' => '',
        ]) !!}
      </nav>
    @endif

    <div class="footer__copyright">{{ $copyright }}</div>

    {{-- @php(dynamic_sidebar('sidebar-footer')) --}}
</footer>
