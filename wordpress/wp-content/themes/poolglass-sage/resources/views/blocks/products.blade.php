<div class="products {{ $block->classes }}" style="{{ $block->inlineStyle }}">

  <div class="products__container container">
    @if ($products)
      <div class="products__grid">
        @foreach ($products as $item)
          <article class="products__item">
            {{-- @dump($item) --}}
            <a href="{{ get_permalink($item->ID) }}" class="products__link">
              <h3 class="products__item-title title title_item">
                {{ $item->post_title }}</h3>

              <div class="products__entry">

                <p class="products__text">{{ $item->post_excerpt }}</p>

                <figure class="products__figure"> {!! get_the_post_thumbnail($item->ID, 'medium', null, [
                    'class' => 'products__img',
                ]) !!}
                </figure>
              </div>
            </a>
          </article>
        @endforeach
      </div>
    @endif
  </div>
</div>
