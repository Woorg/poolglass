<section class="latest-projects {{ $block->classes }}"
  style="{{ $block->inlineStyle }}">

  {{-- {{ get_svg('wave-up-320', 'latest-projects__up latest-projects__up_320', []) }} --}}

  <div class="latest-projects__container container">
    <h2 class="latest-projects__title title title_h1">{{ $title }}</h2>
    @if ($list)
      <div class="latest-projects__grid">

        @foreach ($list as $item)
          {{-- @dump($item) --}}
          <div class="latest-projects__item">
            <a href="{{ get_permalink($item['post']->ID) }}"
              class="latest-projects__item-link">
              <h3 class="latest-projects__item-title title title_h2">
                {{ $item['item_title'] }}
              </h3>
              <div class="latest-projects__item-text">
                {!! $item['text'] !!}
              </div>
              <span class="latest-projects__more"
                href="{{ get_permalink($item['post']->ID) }}">{{ $item['more_text'] }}</span>
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
              class="latest-projects__more-text title "><span>
                Смотреть
                все
                проекты</span></a>
          </div>
        @endif
      </div>
    @endif
  </div>
  {{-- <InnerBlocks template="{{ $block->template }}" /> --}}
</section>
