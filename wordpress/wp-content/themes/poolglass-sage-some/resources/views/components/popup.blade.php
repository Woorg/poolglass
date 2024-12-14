<!-- Panel -->
@props([
    'popup_id' => '',
    'popup_shortcode',
    'popup_title' => '',
    'class' => '',
    'popup_style',
])

<div x-on:click.stop x-transition
  x-trap.noscroll.inert="$store.popup.popup_open === {{ $popup_id }}"
  class=" {{ $class }} popup__form_{{ $popup_style }}"
  :id="$id('{{ $popup_id }}')">
  <div class="popup__header">
    <div class="popup__content">
      <div class="popup__logo">
        {!! $logo !!}
      </div>

      <div class="popup__title title title_h2">{!! $popup_title !!}</div>
      <small class="popup__note"><sub>*</sub>
        {{ pll__('обязательные к заполнению поля', 'sage') }}</small>
    </div>
    {{-- {{ get_svg('popup-wave-up', 'popup__wave popup__wave_up', []) }} --}}
    {{-- {{ get_svg('popup-wave-up-single', 'popup__wave  popup__wave_up_single', []) }} --}}
  </div>
  <div class="popup__body">
    {!! $popup_shortcode !!}
  </div>

  <div class="popup__footer">
    {{ get_svg('popup-wave-down', 'popup__wave popup__wave_down', []) }}
  </div>

  <button type="button" x-on:click="$store.popup.closePopup()"
    class="popup__close">
    {{ get_svg('close', 'popup__close-icon', []) }}

  </button>

</div>
