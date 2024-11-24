<?php
/*
Template Name: Калькулятор расчета заявки
*/
?>

<?php
get_header('page')
?>

<main class="page-calculator">
  <div class="page-calculator__container">
    <form action="#" class="calculator__form">
      <div class="calculator__block block-calculator">
        <div class="block-calculator__wrapper">
          <div class="block-calculator__title">Выберите форму окна:</div>
          <div class="block-calculator__select">
            <select name="form[]" class="form">
              <option value="1" selected>Круглое окно</option>
              <option value="2">Круглое окно</option>
              <option value="3">Круглое окно</option>
              <option value="4">Круглое окно</option>
            </select>
          </div>
        </div>
        <div class="block-calculator__img"></div>
      </div>

      <div class="calculator__block block-calculator">
        <div class="block-calculator__wrapper">
          <div class="block-calculator__title">Четкая ширина окна обзора:</div>
          <div class="block-calculator__input">
            <input type="text" name="" id="" placeholder="Введите диаметр">
          </div>
        </div>
        <div class="block-calculator__img"></div>
      </div>

      <div class="calculator__block block-calculator">
        <div class="block-calculator__wrapper">
          <div class="block-calculator__title">Высота окна для четкого обзора:</div>
          <div class="block-calculator__input">
            <input type="text" name="" id="" placeholder="40 - 180 см. Для круглых окон оставьте пустым">
          </div>
        </div>
        <div class="block-calculator__img"></div>
      </div>

      <div class="calculator__block block-calculator">
        <div class="block-calculator__wrapper">
          <div class="block-calculator__title">Уровень воды над дном окна:</div>
          <div class="block-calculator__input">
            <input type="text" name="" id="" placeholder="40 - 500 см">
          </div>
        </div>
        <div class="block-calculator__img"></div>
      </div>

      <div class="calculator__block block-calculator">
        <div class="block-calculator__wrapper">
          <div class="block-calculator__title">Количество окон:</div>
          <div class="block-calculator__input">
            <input type="text" name="" id="" placeholder="1">
          </div>
        </div>
        <div class="block-calculator__img"></div>
      </div>

      <div class="calculator__block block-calculator">
        <div class="block-calculator__wrapper">
          <div class="block-calculator__title">Отделка бассейна / Поверхность резервуара:</div>
          <div class="block-calculator__select">
            <select name="form[]" class="form">
              <option value="1" selected>Круглое окно</option>
              <option value="2">Круглое окно</option>
              <option value="3">Круглое окно</option>
              <option value="4">Круглое окно</option>
            </select>
          </div>
        </div>
        <div class="block-calculator__img"></div>
      </div>

      <div class="calculator__block block-calculator">
        <div class="block-calculator__wrapper">
          <div class="block-calculator__title">Услуги по установке:</div>
          <div class="block-calculator__select">
            <select name="form[]" class="form">
              <option value="1" selected>Круглое окно</option>
              <option value="2">Круглое окно</option>
              <option value="3">Круглое окно</option>
              <option value="4">Круглое окно</option>
            </select>
          </div>
        </div>
        <div class="block-calculator__img"></div>
      </div>

      <div class="calculator-info">
        <div class="calculator-info__title">Ваши контактные данные</div>
        <div class="calculator-info__wrapper">
          <div class="calculator-info__item">
            <label for="name">Персональная информация</label>
            <input data-required autocomplete="off" type="text" name="name" data-error="Ошибка" placeholder="Имя *" class="input">
          </div>
        </div>
        <div class="calculator-info__item">
          <label for="name">Контактная информация</label>
          <input data-required autocomplete="off" type="tel" data-tel-input maxlength="18" name="tel" data-error="Ошибка"
                 placeholder="Номер телефона *" class="input">
        </div>
        <div class="calculator-info__item">
          <input data-required="email" autocomplete="off" type="text" name="email" data-error="Ошибка" placeholder="Электронная почта *"
                 class="input">
        </div>
        <div class="calculator-info__item">
          <textarea data-required autocomplete="off" name="comment" placeholder="Комментарий к заказу *" data-error="Ошибка" class="input"></textarea>
        </div>
        <button type="submit" class="calculator-info__btn">Отправить заявку</button>
      </div>

    </form>
  </div>
</main>

<?php
get_footer('page')
?>


<div id="popup" aria-hidden="true" class="popup">
  <div class="popup__wrapper">
    <div class="popup__content">
      <div class="popup__header header-popup">
        <div class="header-popup__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/popup-logo.svg" width="179" height="57"
                                             alt="logo"></div>
        <div class="header-popup__title">Пожалуйста, заполните форму для заказа</div>
        <div class="header-popup__text">* обязательные к заполнению поля</div>
        <button data-close type="button" class="popup__close"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/close.svg"
                                                                   alt="icon"></button>
      </div>
      <form action="#" class="popup__form form-popup">
        <div class="form-popup__item">
          <label for="name">Персональная информация</label>
          <input data-required autocomplete="off" type="text" name="name" data-error="Ошибка" placeholder="Имя *" class="input">
        </div>
        <div class="form-popup__item">
          <label for="name">Контактная информация</label>
          <input data-required autocomplete="off" type="tel" data-tel-input maxlength="18" name="tel" data-error="Ошибка"
                 placeholder="Номер телефона *" class="input">
        </div>
        <div class="form-popup__item">
          <input data-required="email" autocomplete="off" type="text" name="email" data-error="Ошибка" placeholder="Электронная почта *"
                 class="input">
        </div>
        <div class="form-popup__item">
          <textarea data-required autocomplete="off" name="comment" placeholder="Комментарий к заказу *" data-error="Ошибка" class="input"></textarea>
        </div>
        <div class="form-popup__file file-form">
          <div class="file-form__item">
            <input autocomplete="off" type="file" name="file" data-error="Ошибка" placeholder="Прикрепите файл" class="file-form__input">
            <div class="file-form__button">Прикрепить файлы</div>
          </div>
        </div>
        <button type="submit" class="form-popup__btn">Отправить заявку</button>
      </form>
      <div class="popup__footer"></div>
    </div>
  </div>
</div>

<div id="popup-tel" aria-hidden="true" class="popup popup-tel">
  <div class="popup__wrapper">
    <div class="popup__content popup-tel__content">
      <div class="popup__header header-popup header-popup-tel">
        <div class="header-popup__logo"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/popup-logo.svg" width="179" height="57"
                                             alt="logo"></div>
        <div class="header-popup__title header-popup-tel__title">Хотите мы вам перезвоним?</div>
        <button data-close type="button" class="popup__close"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/icons/close.svg"
                                                                   alt="icon"></button>
      </div>
      <form action="#" class="popup__form form-popup form-popup-tel">
        <div class="form-popup__item form-popup-tel__item">
          <input data-required autocomplete="off" type="tel" data-tel-input maxlength="18" name="tel" data-error="" placeholder="Ваш номер телефона"
                 class="input form-popup-tel__input">
          <label class="form-popup-tel__label" for="tel">Например, +7(495) 777-65-90</label>
          <button data-da=".form-popup-tel, 710, last" type="submit" class="form-popup-tel__button">Перезвоните мне</button>
        </div>
      </form>
    </div>
  </div>
</div>

