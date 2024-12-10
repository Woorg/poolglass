<!doctype html>
<html @php(language_attributes())>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="base" content="{{ config('app.url') }}">
  <meta name="yandex-verification" content="7819d479609f3135" />
  <meta name="google-site-verification"
    content="suiCZvNHw4TdTn3TJNsGYhigK1KBb_RgjO7H3N7nIbM" />
  @php(do_action('get_header'))
  @php(wp_head())
</head>

<body x-data :class="{ no_scroll: $store.popup.popup_open }"
  x-on:keydown.escape.prevent.stop="$store.popup.closePopup()"
  @php(body_class('font-raleway font-regular page flex flex-col min-h-screen relative'))>
  @php(wp_body_open())

  {{-- <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a> --}}

  @include('sections.header')

  <main class="main grow {{ is_front_page() ? 'main_front' : 'main_inner' }}">

    @yield('content')
  </main>

  {{-- @hasSection('sidebar')
      <aside class="sidebar">
        @yield('sidebar')
      </aside>
    @endif --}}

  @include('sections.footer')

  @php(do_action('get_footer'))
  @php(wp_footer())
  @yield('footer_scripts')

  @if ($custom_scripts)
    @foreach ($custom_scripts as $script)
      {!! $script['script'] !!}
    @endforeach
  @endif

</body>

</html>
