<section class="about {{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="about__container container">
    <div class="about__entry">

      <div class="about__block-title">{{ $block_title }}</div>
      <h2 class="about__title title title_h2">{{ $title }}</h2>
      <div class="about__text text">{!! $text !!}</div>
    </div>

    @if ($list)

      {{-- <div class="about__grid"> --}}
      @foreach ($list as $key => $item)
        {{-- @dump($item) --}}
        {{-- @dump($key) --}}
        <article class="about__card about__card_{{ $key + 1 }}">

          <a href="{{ get_permalink($item['post']->ID) }}"
            class="about__card-link">
            <div class="about__card-figure">
              {!! wp_get_attachment_image($item['image']['ID'], 'full', null, [
                  'class' => 'about__card-img',
              ]) !!}
            </div>
            <h3 class="about__card-title">{{ $item['item_title'] }}</h3>
          </a>
        </article>
      @endforeach
      {{-- </div> --}}
    @endif

  </div>
  </div>
</section>
