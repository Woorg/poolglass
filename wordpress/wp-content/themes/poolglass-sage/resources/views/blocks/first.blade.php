<section
  class="first {{ $parallax ? 'first_parallax' : '' }}  {{ $block->classes }} {{ is_front_page() ? 'first_front' : 'first_inner' }}">

  <div class="first__container-w">

    <div class="first__container container">

      @if (is_front_page())
        <h1 class="first__title title title_h1">{!! $title !!}</h1>
      @endif

      <div class="first__entry">

        @if (is_front_page())
        @else
          <div class="first__title-w">
            <h1 class="first__title title title_h1">{!! $title !!}</h1>

            @if ($buttons_show)
              <div class="first__buttons">
                @if ($buttons)

                  @foreach ($buttons as $button)
                    <button x-data
                      x-on:click="$store.popup.openPopup('{{ $button['url'] }}')"
                      class="first__btn btn btn_{{ $button['button_style'] }}">{{ $button['name'] }}</button>
                  @endforeach
                @endif
              </div>
            @endif

          </div>
        @endif

        @if (is_front_page())

          @if ($buttons_show)
            <div class="first__buttons">
              @if ($buttons)

                @foreach ($buttons as $button)
                  <button x-data
                    x-on:click="$store.popup.openPopup('{{ $button['url'] }}')"
                    class="first__btn btn btn_{{ $button['button_style'] }}">{{ $button['name'] }}</button>
                @endforeach
              @endif
            </div>
          @endif
        @endif
        @if ($list_show)
          <ul class="first__list">
            @foreach ($list as $item)
              <li class="first__item">{{ $item['item'] }}</li>
            @endforeach
          </ul>
        @endif

        @if ($tiles_show)
          <div class="first__tiles">
            @foreach ($tiles as $item)
              {{-- @dump($item) --}}

              @php
                if (isset($item['tile_link']['url'])) {
                    $tile_url = $item['tile_link']['url'];
                } else {
                    $tile_url = '#';
                }

                if (isset($item['tile_popup_id'])) {
                    $tile_popup_id = $item['tile_popup_id'];
                }
              @endphp
              {{-- @dump($tile_url) --}}
              @if ($item['tile_show'])
                <div class="first__tile tile tile_{{ $item['tile_style'] }}">
                  <a x-data
                    x-on:click="$store.popup.openPopup('{{ $tile_popup_id }}')"
                    href="{{ $tile_url }}" class="tile__link">
                    {{ get_svg($item['tile_style'] . '-icon', 'tile__icon', []) }}

                    <div class="tile__link-bottom">
                      <span class="tile__link-text">
                        {{ $item['tile_text'] }}
                      </span>
                      {{ get_svg('arrow', 'tile__link-icon', []) }}
                    </div>
                  </a>
                </div>
              @endif
            @endforeach

          </div>
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
    <div class="first__bg">

      {{ get_svg('first-inner-bg', 'first__inner-bg', []) }}
    </div>
  @endif

</section>
