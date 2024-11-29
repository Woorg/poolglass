<section
  class="first {{ $parallax ? 'first_parallax' : '' }}  {{ $block->classes }}">
  @if ($parallax)
    <div
      class="first__image first__image_320 first__image_480 first__image_768 first__image_1000 first__image_big">
      {!! wp_get_attachment_image($parallax_image, 'full', null, [
          'class' => 'first__img',
      ]) !!}
    </div>
  @endif

  {{ get_svg('wave-320', 'first__wave first__wave_320', []) }}
  {{ get_svg('wave-480', 'first__wave first__wave_480', []) }}
  {{ get_svg('wave-768', 'first__wave first__wave_768', []) }}
  {{ get_svg('wave-1000', 'first__wave first__wave_1000', []) }}
  {{ get_svg('wave-1920', 'first__wave first__wave_big', []) }}

  <div class="first__container container">
    <h1 class="first__title title title_h1">{!! $title !!}</h1>
    <div class="first__entry">

      @if ($buttons_show)
        <div class="first__buttons">
          @foreach ($buttons as $button)
            <button
              class="first__btn btn btn_{{ $button['button_style'] }}">{{ $button['name'] }}</button>
          @endforeach
        </div>
      @endif

      @if ($list_show)

        <ul class="first__list">
          @foreach ($list as $item)
            <li class="first__item">{{ $item['item'] }}</li>
          @endforeach
        </ul>
      @endif
    </div>
  </div>

  {{-- <InnerBlocks template="{{ $block->template }}" /> --}}
</section>
