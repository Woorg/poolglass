@extends('layouts.app')

@section('content')
  <section class="first">

    <div class="first__container container">
      <h1 class="first__title">Стеклянный бассейн Теперь вас будет видно</h1>
      {{-- <div class="first__text"></div> --}}
      <div class="buttons">
        <button class="buttons__btn btn">Заказать</button>
        <button class="buttons__btn btn">Обратный звонок</button>
      </div>
      <ul class="first__list">
        <li class="first__item">Завод подводных окон</li>
        <li class="first__item">Немецкая ситема расчета нагрузок</li>
        <li class="first__item">Расширенная гарантия 3 года</li>
        <li class="first__item">Проектные работы за 5 дней</li>
      </ul>
    </div>
  </section>

  {{-- <section class="about">
    <div class="about__container">
      <div class="about__1000px"></div>
      <div class="about__wrapper">
        <div data-da="about__1000px, 1180" class="about__descr descr-about">
          <div class="descr-about__head">
            <div class="descr-about__subtite"><?php ////echo carbon_get_theme_option('about_title_block');
            ?></div>
            <div class="descr-about__title"><?php ////echo carbon_get_theme_option('about_title');
            ?></div>
          </div>
          <div class="descr-about__text"><?php ////echo apply_filters('the_content', carbon_get_theme_option('about_desc'));
          ?></div>
        </div>
        <?php

      $icons_posts = get_posts(array(
        'numberposts'      => -1,
        'post_type'        => 'icons-articles',
        'order'            => 'ASC',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ));

      foreach($icons_posts as $post) :
        ?>

        <div class="about__item item-about">
          <a href="<?php ////echo get_permalink();
          ?>"
            class="item-about__img <?php //echo carbon_get_post_meta(get_the_ID(), 'icon_class');
            ?>"><img
              src="<?php /////echo bloginfo('template_url');
              ?>/assets/img/main/about-demo.jpg"
              width="222" height="153" alt="picture"></a>
          <a href="<?php ////echo get_permalink();
          ?>"
            class="item-about__text"><?php //echo carbon_get_post_meta(get_the_ID(), 'icon_desc');
            ?></a>
        </div>

        <?php endforeach; ?>

      </div>
    </div>
  </section> --}}

  {{-- <section class="project">
    <div class="project__container">
      <div class="project__title">Последние проекты</div>
      <div class="project__wrapper">

        <?php
      $last_projects = get_posts(array(
        'numberposts' => -1,
        'order'       => 'ASC',
        'post_type'   => 'last_projects',
      ));

      foreach($last_projects as $post) {
        setup_postdata($post);
        ?>

        <div class="project__item item-project">
          <div class="item-project__title"><?php the_title(); ?></div>
          <div class="item-project__descr descr-project"><?php //echo apply_filters('the_content', carbon_get_the_post_meta('last_projects_desc'));
          ?>
          </div>
          <div class="item-project__link"><a href="<?php //echo carbon_get_post_meta(get_the_ID(), 'last_projects_link');
          ?>">Читать
              подробнее</a>
          </div>
        </div>

        <?php
      }

      wp_reset_postdata(); // сброс
      ?>

        <div class="project__item item-project item-project-img">
          <div class="item-project__title">
            <a href="<?php $url = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] . '/nashi-proekty/';
            //echo $url;
            ?>">Смотреть все проекты</a>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <section class="contacts">
    <div class="contacts__container">
      <div class="contacts__subtitle"><?php //echo carbon_get_theme_option('contacts_title_block');
      ?></div>
      <div class="contacts__title"><?php //echo carbon_get_theme_option('contacts_desc');
      ?></div>
      <div class="contacts__wrapper">
        <div class="contacts__phone phone-contacts">
          <div class="phone-contacts__title">Телефон / Почта</div>
          <div class="phone-contacts__phone"><a
              href="tel:+74957776590"><?php //echo carbon_get_theme_option('phone');
              ?></a></div>
          <div class="phone-contacts__mail"><a href="<?php //echo carbon_get_theme_option('email');
          ?>">
              <?//php echo carbon_get_theme_option('email'); ?>
            </a></div>
        </div>
        <div class="contacts__address address-contacts">
          <div class="address-contacts__title">Адрес</div>
          <div class="address-contacts__address"><?php //echo carbon_get_theme_option('address');
          ?></div>
        </div>
        <div class="contacts__social social-contacts">
          <div class="social-contacts__title">Социальные сети</div>
          <div class="social-contacts__wrapper">
            <div class="social-contacts__link _icon-instagram"><a
                href="<?php //echo carbon_get_theme_option('instagram');
                ?>"></a></div>
            <div class="social-contacts__link _icon-facebook"><a
                href="<?php //echo carbon_get_theme_option('facebook');
                ?>"></a></div>
            <div class="social-contacts__link _icon-whatsapp"><a
                href="<?php //echo carbon_get_theme_option('whatsapp');
                ?>"></a></div>
            <div class="social-contacts__link _icon-telegram"><a
                href="<?php //echo carbon_get_theme_option('telegram');
                ?>"></a></div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  {{-- <div class="max-w-[600px] mx-auto mt-4"> --}}
  {{--
    <img class="rounded" src="{{ Vite::asset('resources/assets/images/sage-vite.png') }}"
      alt="Sage + Vite Logo"> --}}

  {{-- @hello('Homer', 'Simpson', 'man') --}}
  {{-- @dump($pokemons) --}}

  {{-- @if ($pokemons)
      <ul class="text-center">
        @foreach ($pokemons as $pokemon)
          <li>{!! $pokemon->post_title !!}</li>
        @endforeach
      </ul>
    @else
      <p>You don't have pokemons :( </p>
    @endif --}}

  {{-- </div> --}}
@endsection

@section('footer_scripts')
  <script type="module" src="{!! Vite::asset('resources/assets/scripts/pages/front-page.ts') !!}"></script>
@endsection
