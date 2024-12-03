<div class="back-button {{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="back-button__container container">

    <a href="{{ wp_get_referer() ? wp_get_referer() : home_url() }}"
      class="back-button__link">← Назад</a>
  </div>
</div>
