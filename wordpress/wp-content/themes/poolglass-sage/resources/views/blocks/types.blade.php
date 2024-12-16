<div class="kinds {{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="kinds__container container">

    {{-- @dump($kinds[0]) --}}

    @if ($kinds)
      <div class="kinds__grid">
        @foreach ($kinds as $item)
          @php

            $kind_image = get_field('kind_image', $item->ID);
            $kind_excerpt = get_field('kind_excerpt', $item->ID);
          @endphp
          {{-- @dump($kind_image, $kind_excerpt) --}}

          {{-- @dump($item) --}}
          <article class="kinds__item">
            <a href="{{ get_permalink($item->ID) }}" class="kinds__link">
              <figure class="kinds__figure">
                {!! wp_get_attachment_image($kind_image, 'medium', null, [
                    'class' => 'kinds__img',
                ]) !!}
                <h3 class="kinds__title title title_item">
                  <span class="kinds__title-text">
                    {{ $item->post_title }}
                  </span>
                </h3>
              </figure>
              </figure>
              <div class="kinds__entry">
                <div class="kinds__text text">
                  {!! $kind_excerpt !!}
                </div>

                <span class="kinds__more"
                  href="">{{ pll__('Читать подробнее', 'sage') }}</span>

              </div>
            </a>
          </article>
        @endforeach

      </div>
    @endif

    {{-- <InnerBlocks template="{{ $block->template }}" /> --}}
  </div>
</div>
