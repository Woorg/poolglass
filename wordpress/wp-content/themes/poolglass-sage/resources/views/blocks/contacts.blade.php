<section class="contacts {{ $block->classes }}" style="{{ $block->inlineStyle }}">

  <div class="contacts__container container">
    <div class="contacts__block-title">Контакты</div>

    <h2 class="contacts__title">Свяжитесь с нами любым удобным способом</h2>
    <div class="contacts__entries">
      <article class="contacts__item">
        <div class="contacts__item-title">Телефон / Почта</div>
        <ul class="contacts__list">
          <li class="contacts__list-item">
            <a class="contacts__list-value" href="tel:+74957776590">+7(495)
              777-65-90</a>
          </li>
          <li class="contacts__list-item">
            <a class="contacts__list-value" href="mailto:">
              info@poolglass.ru</a>
          </li>
        </ul>
      </article>

      <article class="contacts__item">
        <div class="contacts__item-title">Адрес</div>
        <ul class="contacts__list">
          <li class="contacts__list-item">
            г. Москва, Хамовнический вал, д.28, подъезд 8.
          </li>
        </ul>
      </article>

      <article class="contacts__item">
        <div class="contacts__item-title">Социальные сети</div>
        <ul class="contacts__socials socials">
          @foreach ($socials as $value)
            {{-- @dump($value['url'], $value['icon_name']) --}}
            <li class="socials__item">
              <a href="{{ $value['url'] }}" class="socials__link">
                {{ get_svg($value['icon_name'], 'socials__icon', []) }}
              </a>
            </li>
          @endforeach
        </ul>
      </article>

    </div>
</section>

{{-- <InnerBlocks template="{{ $block->template }}" /> --}}
