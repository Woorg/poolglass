<div class="products {{ $block->classes }}" style="{{ $block->inlineStyle }}">

  {{-- <InnerBlocks template="{{ $block->template }}" /> --}}

  {{-- @dump($products) --}}

  <div class="products__container container">
    @if ($products)
      <div class="products__grid">
        @foreach ($products as $item)
          <article class="products__item">
            {{-- @dump($item) --}}
            <a href="{{ get_permalink($item->ID) }}" class="products__link">
              <div class="products__entry">
                <h3 class="products__item-title">{{ $item->post_title }}</h3>
                <span class="products__text">{{ $item->post_excerpt }}</span>
              </div>
              <figure class="products__figure"> {!! get_the_post_thumbnail($item->ID, 'medium', null, [
                  'class' => 'products__img',
              ]) !!}</figure>
            </a>
          </article>
        @endforeach
      </div>
    @endif
  </div>
</div>