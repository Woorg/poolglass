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
                {!! wp_get_attachment_image($kind_image, 'full', null, [
                    'class' => 'kinds__img',
                ]) !!}
              </figure>
              <h3 class="kinds__title">{!! $kind_excerpt !!}</h3>
              </figure>
              <div class="kinds__entry">
                <div class="kinds__text">
                </div>

                <span class="kinds__more" href="">Читать подробнее</span>

              </div>
            </a>
          </article>
        @endforeach

      </div>
    @endif

    {{-- <InnerBlocks template="{{ $block->template }}" /> --}}
  </div>
</div>
