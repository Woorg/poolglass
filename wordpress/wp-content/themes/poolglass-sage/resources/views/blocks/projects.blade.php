<div class="projects {{ $block->classes }}" style="{{ $block->inlineStyle }}">

  <div class="projects__container container">

    <ul class="projects__filter">
      <li class="projects__filter-item">
        <a href="" class="projects__filter-link"></a>
      </li>
    </ul>

    {{-- @dump($projects) --}}
    @if ($projects)

      <div class="projects__grid">
        @foreach ($projects as $item)
          {{-- @dump($item) --}}
          <article class="projects__item">
            <a href="{{ get_permalink($item->ID) }}" class="projects__link">
              <figure class="projects__figure">
                {!! get_the_post_thumbnail($item->ID, 'medium', null, [
                    'class' => 'projects__img',
                ]) !!}
              </figure>
              <div class="projects__entry">
                <span
                  class="projects__item-title">{{ $item->post_title }}</span>
              </div>

            </a>
          </article>
        @endforeach
      </div>
    @endif

  </div>

  {{-- <InnerBlocks template="{{ $block->template }}" /> --}}
</div>
