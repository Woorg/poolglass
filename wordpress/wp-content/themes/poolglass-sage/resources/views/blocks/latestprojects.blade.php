<section class="latest-projects {{ $block->classes }}"
  style="{{ $block->inlineStyle }}">

  <div class="latest-projects__container container">
    <h2 class="latest-projects__title title title_h1">{{ $title }}</h2>
    @if ($list)
      <div class="latest-projects__grid">

        @foreach ($list as $item)
          @php
            $permalink = isset($item['post']->ID)
                ? get_permalink($item['post']->ID)
                : '#';
          @endphp
          {{-- @dump($item) --}}
          <div class="latest-projects__item">
            <a href="{{ $permalink }}" class="latest-projects__item-link">
              <h3 class="latest-projects__item-title title title_h2">
                {{ $item['item_title'] }}
              </h3>
              <div class="latest-projects__item-text">
                {!! $item['text'] !!}
              </div>
              <span
                class="latest-projects__more">{{ $item['more_text'] }}</span>
            </a>
          </div>
        @endforeach

        @if ($more)
          <div class="latest-projects__item latest-projects__item_more">
            <figure class='latest-projects__item-figure'>
              {!! wp_get_attachment_image($more['image']['ID'], 'full', null, [
                  'class' => 'latest-projects__item-img',
              ]) !!}
            </figure>
            <a href="{{ $more['link'] }}"
              class="latest-projects__more-text title "><span>{{ pll__('Смотреть все проекты', 'sage') }}</span></a>
          </div>
        @endif
      </div>
    @endif
  </div>
  {{-- <InnerBlocks template="{{ $block->template }}" /> --}}
</section>
