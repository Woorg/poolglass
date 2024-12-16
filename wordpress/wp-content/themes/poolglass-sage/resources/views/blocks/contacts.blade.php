<section
  class="contacts {{ $block->classes }} {{ is_front_page() || is_page(438) ? 'contacts_front' : 'contacts_inner' }} {{ is_page(438) ? 'contacts_contact-page' : '' }}"
  style="{{ $block->inlineStyle }}">

  <div class="contacts__container container">
    <div class="contacts__block-title">{{ $block_title }}</div>

    <h2 class="contacts__title title title_h1">{{ $title }}</h2>

    @if ($list)
      <div class="contacts__entries">
        @foreach ($list as $index => $item)
          {{-- @if (collect($item)->count() - 1) --}}
          <article class="contacts__item">
            <div class="contacts__item-title">{{ $item['item_title'] }}</div>
            @php
              $count = count($list);
            @endphp

            @if ($index < count($list) - 1)
              <ul class="contacts__list">
                @foreach ((array) $item['list'] as $subitem)
                  {{-- @dump($subitem) --}}
                  @if (!empty($subitem['text']))
                    <li class="contacts__list-item">

                      @php

                        $text = $subitem['text'];
                        $isEmail = filter_var($text, FILTER_VALIDATE_EMAIL);
                        $isPhone = preg_match(
                            '/^\+?\d+$/',
                            str_replace([')', '(', ' ', '-'], '', $text),
                        );

                        if ($isEmail) {
                            $href = "mailto:$text";
                        } elseif ($isPhone) {
                            $href =
                                'tel:' .
                                str_replace([')', '(', ' ', '-'], '', $text);
                        }
                      @endphp

                      @if ($isEmail || $isPhone)
                        <a class="contacts__list-value"
                          href="{{ $href }}">{!! $text !!}</a>
                      @else
                        <p class="contacts__list-value">{!! $text !!}
                        </p>
                      @endif

                    </li>
                  @endif
                @endforeach
              </ul>
            @else
              <ul class="contacts__socials socials">
                @foreach ($socials as $value)
                  {{-- @dump($socials) --}}
                  <li class="socials__item">
                    <a href="{{ $value['url'] }}" class="socials__link">
                      {{ get_svg($value['icon_name'], 'socials__icon', []) }}
                    </a>
                  </li>
                @endforeach
              </ul>
            @endif
          </article>
        @endforeach

        {{-- <article class="contacts__item">
          <div class="contacts__item-title">Адрес</div>
          <ul class="contacts__list">
            <li class="contacts__list-item">
              г. Москва, Хамовнический вал, д.28, подъезд 8.
            </li>
          </ul>
        </article> --}}

        {{-- <article class="contacts__item">
          <div class="contacts__item-title">Социальные сети</div>
          <ul class="contacts__socials socials">
            @foreach ($socials as $value)
              <li class="socials__item">
                <a href="{{ $value['url'] }}" class="socials__link">
                  {{ get_svg($value['icon_name'], 'socials__icon', []) }}
                </a>
              </li>
            @endforeach
          </ul>
        </article> --}}

      </div>
    @endif

    @if ($show_map)
      <div class="contacts__map">
        {{-- @dump($show_map) --}}
        {!! $map !!}
      </div>
    @endif
</section>

{{-- <InnerBlocks template="{{ $block->template }}" /> --}}
