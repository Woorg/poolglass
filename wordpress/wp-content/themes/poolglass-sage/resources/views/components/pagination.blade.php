@if ($pagi->hasPages())
  <nav class="pagination" aria-label="pagination">
    @if (!$pagi->onFirstPage())
      <a href="{{ $pagi->previousPageUrl() }}" rel="prev"
        aria-label="Previous Page" class="pagination__back">
        {{ get_svg('arrow', 'pagination__icon', []) }}
        <span aria-hidden="true">{{ pll__('Предыдущая', 'sage') }}</span>
      </a>
    @endif

    <ul class="pagination__list">
      @foreach ($pagi->elements() as $element)
        @if (is_string($element))
          <li class="pagination__item pagination__item_disabled">
            <span class="mr-3 py-1">&hellip;</span>
          </li>
        @endif

        @if (is_array($element))
          @foreach ($element as $page => $url)
            <li class="pagination__item">
              @if ($page == $pagi->currentPage())
                <span class="pagination__current"
                  aria-current="page">{{ $page }}</span>
              @else
                <a href="{{ $url }}"
                  class="pagination__link">{{ $page }}</a>
              @endif
            </li>
          @endforeach
        @endif
      @endforeach
    </ul>

    @if ($pagi->hasMorePages())
      <a href="{{ $pagi->nextPageUrl() }}" rel="next" aria-label="Next Page"
        class="pagination__next">
        <span aria-hidden="true">{{ pll__('Следующая', 'sage') }}</span>
        {{ get_svg('arrow', 'pagination__icon', []) }}
      </a>
    @endif
  </nav>
@endif
