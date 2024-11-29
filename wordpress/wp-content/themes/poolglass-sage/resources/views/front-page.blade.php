@extends('layouts.app')

@section('content')
  @while (have_posts())
    @php(the_post())
    @includeFirst([
        'partials.content-' . get_post_type(),
        'partials.content',
    ])
  @endwhile

  {{-- <section class="contacts">
    <div class="contacts__container">
      <div class="contacts__subtitle"><?php //echo carbon_get_theme_option('contacts_title_block');
      ?></div>
      <div class="contacts__title"><?php //echo carbon_get_theme_option('contacts_desc');
      ?></div>
      <div class="contacts__wrapper">
        <div class="contacts__phone phone-contacts">
          <div class="phone-contacts__title">Телефон / Почта</div>
          <div class="phone-contacts__phone"><a
              href="tel:+74957776590"><?php //echo carbon_get_theme_option('phone');
              ?></a></div>
          <div class="phone-contacts__mail"><a href="<?php //echo carbon_get_theme_option('email');
          ?>">
              <?//php echo carbon_get_theme_option('email'); ?>
            </a></div>
        </div>
        <div class="contacts__address address-contacts">
          <div class="address-contacts__title">Адрес</div>
          <div class="address-contacts__address"><?php //echo carbon_get_theme_option('address');
          ?></div>
        </div>
        <div class="contacts__social social-contacts">
          <div class="social-contacts__title">Социальные сети</div>
          <div class="social-contacts__wrapper">
            <div class="social-contacts__link _icon-instagram"><a
                href="<?php //echo carbon_get_theme_option('instagram');
                ?>"></a></div>
            <div class="social-contacts__link _icon-facebook"><a
                href="<?php //echo carbon_get_theme_option('facebook');
                ?>"></a></div>
            <div class="social-contacts__link _icon-whatsapp"><a
                href="<?php //echo carbon_get_theme_option('whatsapp');
                ?>"></a></div>
            <div class="social-contacts__link _icon-telegram"><a
                href="<?php //echo carbon_get_theme_option('telegram');
                ?>"></a></div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <div class="max-w-[600px] mx-auto mt-4"> --}}
  {{--
    <img class="rounded" src="{{ Vite::asset('resources/assets/images/sage-vite.png') }}"
      alt="Sage + Vite Logo"> --}}

  {{-- @hello('Homer', 'Simpson', 'man') --}}
  {{-- @dump($pokemons) --}}

  {{-- @if ($pokemons)
      <ul class="text-center">
        @foreach ($pokemons as $pokemon)
          <li>{!! $pokemon->post_title !!}</li>
        @endforeach
      </ul>
    @else
      <p>You don't have pokemons :( </p>
    @endif --}}

  {{-- </div> --}}
@endsection

@section('footer_scripts')
  <script type="module" src="{!! Vite::asset('resources/assets/scripts/pages/front-page.ts') !!}"></script>
@endsection
