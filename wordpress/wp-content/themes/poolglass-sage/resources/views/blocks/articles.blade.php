<div class="articles {{ $block->classes }}" style="{{ $block->inlineStyle }}">

  <div class="articles__container container">
    @if ($articles)
      <div class="articles__grid">
        @foreach ($articles as $item)
          {{-- @dump($item) --}}
          {{-- @dump($item->featured_image) --}}

          <article class="articles__item">
            <a href="{{ get_permalink($item->ID) }}" class="articles__link">

              <figure class="articles__figure">
                {!! get_the_post_thumbnail($item->ID, 'medium', null, [
                    'class' => 'articles__img',
                ]) !!}
              </figure>
              <div class="articles__entry">
                <span class="articles__item-title">{{ $item->post_title }}</span>
              </div>
            </a>
          </article>
        @endforeach
      </div>
    @endif
  </div>

  {{-- <InnerBlocks template="{{ $block->template }}" /> --}}
</div>
