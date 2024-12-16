<div x-data x-show="$store.popup.popup_open === '{{ $popup_id }}'"
  style="display: none" role="dialog" aria-modal="true"
  x-id="['{{ $popup_id }}']" :aria-labelledby="$id('{{ $popup_id }}')"
  class="popup">
  <!-- Overlay -->
  <div x-show="$store.popup.popup_open === '{{ $popup_id }}'"
    x-transition.opacity
    x-on:click="$store.popup.closePopup('{{ $popup_id }}')"
    class="popup__overlay  {{ $popup_style }} {{ $block->classes }}"
    style="{{ $block->inlineStyle }}">
    <x-popup popup_id="{{ $popup_id }}"
      popup_shortcode="{!! $popup_shortcode !!}"
      popup_title="{!! $title !!}" class="popup__form "
      popup_style="{{ $popup_style }}" />
  </div>
</div>
