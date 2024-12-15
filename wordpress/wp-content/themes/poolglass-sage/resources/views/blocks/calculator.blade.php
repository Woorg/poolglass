<div x-data="calculator()" @wpcf7mailsent.window="resetForm"
  class="calculator {{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="calculator__container container">

    <div class="calculator__item calculator__item_1">

      <div class="calculator__item-title title title_h2">
        {{ pll__('Форма подводного окна', 'sage') }}:
      </div>
      <div class="calculator__select-w">

        <select class="calculator__select" x-model="window_shape" x-transition>
          <option value="" disabled>
            {{ pll__('Выберите форму подводного окна', 'sage') }}
          </option>
          <option value="Круглое окно в стене">
            {{ pll__('Круглое окно в стене', 'sage') }}</option>
          <option value="Прямоугольное окно">
            {{ pll__('Прямоугольное окно', 'sage') }}</option>
          <option value="Трехопорная панель">
            {{ pll__('Трехопорная панель', 'sage') }}</option>
          <option value="Панель с переливом">
            {{ pll__('Панель с переливом', 'sage') }}</option>
          </option>
          <option value="Прямоугольное окно в дне бассейна">
            {{ pll__('Прямоугольное окно в дне бассейна', 'sage') }}
          </option>
          {{-- <option value="round_floor">Круглое окно в дне бассейна</option> --}}
        </select>
        <span class="calculator__select-bg"></span>
      </div>
    </div>

    <figure class="calculator__image">
      <span x-show="window_shape === ''"></span>
      <img x-show="window_shape
        === 'Круглое окно в стене'" x-transition
        src="{{ Vite::asset('public/assets/images/round-wall.webp') }}" />
      <img x-show="window_shape === 'Прямоугольное окно'" x-transition
        src="{{ Vite::asset('public/assets/images/rectangle-wall.webp') }}" />
      <img x-show="window_shape === 'Трехопорная панель'" x-transition
        src="{{ Vite::asset('public/assets/images/three-point-wall.webp') }}" />
      <img x-show="window_shape === 'Панель с переливом'" x-transition
        src="{{ Vite::asset('public/assets/images/overflow-wall.webp') }}" />
      <img x-show="window_shape === 'Прямоугольное окно в дне бассейна'"
        x-transition
        src="{{ Vite::asset('public/assets/images/rectangle-floor.webp') }}" />
    </figure>

    <div class="calculator__item calculator__item_2">
      <div class="calculator__item-title title title_h2">
        {{ pll__('Габаритные размеры панели', 'sage') }}:
      </div>
      <div class="calculator__fields">
        <div class="calculator__field">
          <input x-show="window_shape === 'Круглое окно в стене'" x-transition
            x-model="window_diameter" class="calculator__input" type="number"
            min="1" max=""
            placeholder="{{ pll__('укажите диаметр в см *(для круглого окна)', 'sage') }}">
        </div>
        <div class="calculator__field">
          <input x-show="window_shape !== 'Круглое окно в стене'" x-transition
            x-model="window_width" class="calculator__input" type="number"
            min="1" max=""
            placeholder="{{ pll__('укажите длину в см *(для прямоугольного окна)', 'sage') }}">
        </div>
        <div class="calculator__field">
          <input x-show="window_shape !== 'Круглое окно в стене'" x-transition
            x-model="window_height" class="calculator__input" type="number"
            min="1" max=""
            placeholder="{{ pll__('укажите высоту в см *(для прямоугольного окна)', 'sage') }}">
        </div>
        <small
          class="calculator__note">{{ pll__(
              '*габариты видимой части окна будут меньше за счет установки панели в бетонные четверти',
          ),
              'sage' }}</small>
      </div>
    </div>

    <div class="calculator__item calculator__item_3">
      <div class="calculator__item-title title title_h2">
        {{ pll__('Уровень воды от нижнего края панели до зеркала воды', 'sage') }}:
      </div>
      <div class="calculator__field">
        <input class="calculator__input" x-model="water_level" type="text"
          placeholder="{{ pll__('укажите уровень воды в см', 'sage') }}"
          min="40" max="500">
      </div>

    </div>

    <div class="calculator__item calculator__item_4">
      <div class="calculator__item-title title title_h2">
        {{ pll__('Количество окон', 'sage') }}:
      </div>
      <div class="calculator__field">
        <input class="calculator__input " x-model="window_count" type="number"
          placeholder="{{ pll__('укажите количество окон', 'sage') }}"
          min="1" max="20">
      </div>

    </div>

    <div class="calculator__item calculator__item_5">
      <div class="calculator__item-title title title_h2">
        {{ pll__('Отделка бассейна', 'sage') }}:
      </div>
      <div class="calculator__select-w">
        <select class="calculator__select" x-model="pool_finish" x-transition>
          <option value="" disabled>
            {{ pll__('Выберите отделку', 'sage') }}</option>
          <option value="Плитка, камень или мрамор на бетоне1">
            {{ pll__('Плитка, камень или мрамор на бетоне', 'sage') }}
          </option>
          <option value="Облицовка бассейна бетоном">
            {{ pll__('Облицовка бассейна бетоном', 'sage') }}
          </option>
          <option value="Открытый бетон без отделки">
            {{ pll__('Открытый бетон без отделки', 'sage') }}
          </option>
          <option value="Бассейн из стекловолокна или тонкостенный">
            {{ pll__('Бассейн из стекловолокна или тонкостенный', 'sage') }}
          </option>
          <option value="Бассейн со стальной поверхностью">
            {{ pll__('Бассейн со стальной поверхностью', 'sage') }}
          </option>
          <option value="Я пока не знаю какой финиш">
            {{ pll__('Я пока не знаю какой финиш', 'sage') }}
          </option>
          </option>
        </select>
        <span class="calculator__select-bg"></span>
      </div>
    </div>

    <div class="calculator__item calculator__item_6">
      <div class="calculator__item-title title title_h2">
        {{ pll__('Особые пожелания', 'sage') }}:
      </div>

      <div class="calculator__select-w"
        x-show="special_wishes !== 'свой вариант'" x-transition>
        <select class="calculator__select" x-model="special_wishes">
          <option value="мне нужен монтаж подводного окна" disabled>
            {{ pll__('Выберите пожелание', 'sage') }}
          </option>
          <option value="мне нужен монтаж подводного окна">
            {{ pll__('Мне нужен монтаж подводного окна', 'sage') }}
          </option>
          <option value="я хочу установить окно самостоятельно">
            {{ pll__('Я хочу установить окно самостоятельно', 'sage') }}
          </option>
          <option value="свой вариант">{{ pll__('Свой вариант', 'sage') }}
          </option>
        </select>
        <span class="calculator__select-bg"></span>
      </div>

      <div class="calculator__field" x-show="special_wishes === 'свой вариант'"
        x-transition>
        <textarea x-model="custom_special_wishes" class="calculator__textarea"
          placeholder="{{ pll__('ваши пожелания', 'sage') }}"></textarea>
      </div>

    </div>
    <div class="calculator__form">

      <div class="calculator__form-title title title_h2">
        {{ pll__('Ваши контактные данные', 'sage') }}</div>
      <div class="calculator__form-body">
        {!! $form_shortcode !!}
      </div>

    </div>

  </div>
</div>
</div>