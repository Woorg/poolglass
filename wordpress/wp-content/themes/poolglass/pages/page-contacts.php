<?php
/* 
Template Name: Контакты
*/
?>


<?php
get_header('page')
?>

<main class="page-articles page__contacts">
  <div class="page-contacts__container">
    <section class="contacts">
      <div class="contacts__container">
        <div class="contacts__subtitle"><?php echo carbon_get_theme_option('contacts_title_block'); ?></div>
        <div class="contacts__title"><?php echo carbon_get_theme_option('contacts_desc'); ?></div>
        <div class="contacts__wrapper">
          <div class="contacts__phone phone-contacts">
            <div class="phone-contacts__title">Телефон / Почта</div>
            <div class="phone-contacts__phone"><a href="tel:+74957776590"><?php echo carbon_get_theme_option('phone'); ?></a></div>
            <div class="phone-contacts__mail"><a
                      href="<?php echo carbon_get_theme_option('email'); ?>"><?php echo carbon_get_theme_option('email'); ?></a></div>
          </div>
          <div class="contacts__address address-contacts">
            <div class="address-contacts__title">Адрес</div>
            <div class="address-contacts__address"><?php echo carbon_get_theme_option('address'); ?></div>
          </div>
          <div class="contacts__social social-contacts">
            <div class="social-contacts__title">Социальные сети</div>
            <div class="social-contacts__wrapper">
              <div class="social-contacts__link _icon-instagram"><a href="<?php echo carbon_get_theme_option('instagram'); ?>"></a></div>
              <div class="social-contacts__link _icon-facebook"><a href="<?php echo carbon_get_theme_option('facebook'); ?>"></a></div>
              <div class="social-contacts__link _icon-whatsapp"><a href="<?php echo carbon_get_theme_option('whatsapp'); ?>"></a></div>
              <div class="social-contacts__link _icon-telegram"><a href="<?php echo carbon_get_theme_option('telegram'); ?>"></a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2247.2055352144703!2d37.565382825294904!3d55.72018017318481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54b8351461539%3A0x4898f53fb5ec060c!2z0KXQsNC80L7QstC90LjRh9C10YHQutC40Lkg0JLQsNC7INGD0LsuLCAyOCwg0L_QvtC00YrQtdC30LQgOCwg0JzQvtGB0LrQstCwLCAxMTkwNDg!5e0!3m2!1sru!2sru!4v1645624634243!5m2!1sru!2sru"
            width="100%" height="379" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
