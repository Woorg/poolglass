<section
  class="first {{ $parallax ? 'first_parallax' : '' }}  {{ $block->classes }} {{ is_front_page() ? 'first_front' : 'first_inner' }}">
  <div class="first__container-w">

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

    @if (is_front_page())
      {{ get_svg('first-bg', 'first__bg', []) }}
    @endif
  </div>

  @if ($parallax)
    <div class="first__image">

      {!! wp_get_attachment_image($parallax_image, 'full', null, [
          'class' => 'first__img',
      ]) !!}
    </div>
  @endif

  @if (!is_front_page())
    {{ get_svg('first-inner-bg', 'first__inner-bg', []) }}
  @endif
  {{-- <InnerBlocks template="{{ $block->template }}" /> --}}
</section>
