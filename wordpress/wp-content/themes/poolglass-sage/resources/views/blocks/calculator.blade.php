<div x-data="calculator()" @wpcf7mailsent.window="resetForm"
  class="calculator {{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="calculator__container container">

    <div class="calculator__item calculator__item_1">

      <div class="calculator__item-title title title_h2">Форма подводного
        окна:</div>
      <div class="calculator__select-w">

        <select class="calculator__select" x-model="window_shape" x-transition>
          <option value="" disabled>Выберите форму подводного
            окна</option>
          <option value="Круглое окно в стене">Круглое окно в стене</option>
          <option value="Прямоугольное окно">Прямоугольное окно</option>
          <option value="Трехопорная панель">Трехопорная панель</option>
          <option value="Панель с переливом">Панель с переливом</option>
          </option>
          <option value="Прямоугольное окно в дне бассейна">Прямоугольное окно в
            дне бассейна
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
      <div class="calculator__item-title title title_h2">Габаритные размеры
        панели:
      </div>
      <div class="calculator__fields">
        <div class="calculator__field">
          <input x-show="window_shape === 'Круглое окно в стене'" x-transition
            x-model="window_diameter" class="calculator__input" type="number"
            min="1" max=""
            placeholder="укажите диаметр в см *(для круглого окна)">
        </div>
        <div class="calculator__field">
          <input x-show="window_shape !== 'Круглое окно в стене'" x-transition
            x-model="window_width" class="calculator__input" type="number"
            min="1" max=""
            placeholder="укажите длину в см *(для прямоугольного окна)">
        </div>
        <div class="calculator__field">
          <input x-show="window_shape !== 'Круглое окно в стене'" x-transition
            x-model="window_height" class="calculator__input" type="number"
            min="1" max=""
            placeholder="укажите высоту в см *(для прямоугольного окна)">
        </div>
        <small class="calculator__note">*габариты видимой части окна будут
          меньше за счет установки панели в бетонные четверти</small>
      </div>
    </div>

    <div class="calculator__item calculator__item_3">
      <div class="calculator__item-title title title_h2">Уровень воды от
        нижнего края панели до зеркала воды:</div>
      <div class="calculator__field">
        <input class="calculator__input" x-model="water_level" type="text"
          placeholder="укажите уровень воды в см" min="40" max="500">
      </div>

    </div>

    <div class="calculator__item calculator__item_4">
      <div class="calculator__item-title title title_h2">Количество окон:
      </div>
      <div class="calculator__field">
        <input class="calculator__input " x-model="window_count" type="number"
          placeholder="укажите количество окон" min="1" max="20">
      </div>

    </div>

    <div class="calculator__item calculator__item_5">
      <div class="calculator__item-title title title_h2">Отделка бассейна:
      </div>
      <div class="calculator__select-w">
        <select class="calculator__select" x-model="pool_finish" x-transition>
          <option value="" disabled>Выберите отделку</option>
          <option value="Плитка, камень или мрамор на бетоне1">Плитка, камень
            или мрамор на бетоне
          </option>
          <option value="Облицовка бассейна бетоном">Облицовка бассейна бетоном
          </option>
          <option value="Открытый бетон без отделки">Открытый бетон без отделки
          </option>
          <option value="Бассейн из стекловолокна или тонкостенный">Бассейн из
            стекловолокна или тонкостенный
          </option>
          <option value="Бассейн со стальной поверхностью">Бассейн со стальной
            поверхностью</option>
          <option value="Я пока не знаю какой финиш">Я пока не знаю какой финиш
          </option>
          </option>
        </select>
        <span class="calculator__select-bg"></span>
      </div>
    </div>

    <div class="calculator__item calculator__item_6">
      <div class="calculator__item-title title title_h2">Особые пожелания
      </div>

      <div class="calculator__select-w"
        x-show="special_wishes !== 'свой вариант'" x-transition>
        <select class="calculator__select" x-model="special_wishes">
          <option value="мне нужен монтаж подводного окна" disabled>Выберите
            пожелание
          </option>
          <option value="мне нужен монтаж подводного окна">Мне нужен монтаж
            подводного окна
          </option>
          <option value="я хочу установить окно самостоятельно">Я хочу
            установить окно самостоятельно
          </option>
          <option value="свой вариант">Свой вариант
          </option>
        </select>
        <span class="calculator__select-bg"></span>
      </div>

      <div class="calculator__field" x-show="special_wishes === 'свой вариант'"
        x-transition>
        <textarea x-model="custom_special_wishes" class="calculator__textarea"
          placeholder="ваши пожелания"></textarea>
      </div>

    </div>
    <div class="calculator__form">

      <div class="calculator__form-title title title_h2">
        Ваши контактные данные</div>
      <div class="calculator__form-body">
        {!! $form_shortcode !!}
      </div>

    </div>

  </div>
</div>
</div>
