<div class="projects {{ $block->classes }}" style="{{ $block->inlineStyle }}"
  x-data="projectFilter()">

  <div class="projects__container container">

    @if ($projects)

      <nav class="projects__filter"
        aria-label="{{ pll__('Filter projects', 'sage') }}">
        @if ($terms)
          <ul class="projects__filter-list">
            <li class="projects__filter-item">
              <a data-filter="all" class="projects__filter-link" href="#"
                :class="{ 'active': activeFilter === 'all' }"
                @click.prevent="setFilter('all')">{{ pll__('Все', 'sage') }}</a>
            </li>

            @foreach ($terms as $term)
              <li class="projects__filter-item">
                <a data-filter={{ $term->slug }} class="projects__filter-link"
                  href="#"
                  :class="{ 'active': activeFilter === '{{ $term->slug }}' }"
                  @click.prevent="setFilter('{{ $term->slug }}')">{{ $term->name }}</a>
              </li>
            @endforeach
          </ul>
        @endif

      </nav>

      <div class="projects__grid">
        @foreach ($projects as $item)
          @php
            $terms = wp_get_post_terms($item->ID, 'pool_kinds');
          @endphp

          {{-- @dump($terms) --}}
          <article class="projects__item" data-term={{ $terms[0]->slug }}
            :class="{
                'hidden': activeFilter !== 'all' &&
                    activeFilter !== '{{ $terms[0]->slug }}'
            }"
            x-show="activeFilter === 'all' || activeFilter === '{{ $terms[0]->slug }}'"
            x-transition>
            <a href="{{ get_permalink($item->ID) }}" class="projects__link">
              <figure class="projects__figure">
                {!! get_the_post_thumbnail($item->ID, 'medium', [
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

    @if ($pagination)
      <x-pagination :pagi="$pagination" />
    @endif
  </div>

  {{-- <InnerBlocks template="{{ $block->template }}" /> --}}
</div>
