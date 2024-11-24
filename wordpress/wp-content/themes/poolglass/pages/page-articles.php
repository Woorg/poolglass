<?php
/* 
Template Name: Статьи
*/
?>


<?php
get_header('page')
?>


<main class="page-articles">
  <div class="page-articles__container">
    <div class="page-articles__wrapper">

			<?php
			$paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;

			$query = new WP_Query(array(
				'posts_per_page' => 8,
				'paged'          => get_query_var('paged') ? : 1,
				'post_type'      => 'articles',
			));

			if($query -> have_posts()):
				while($query -> have_posts()): $query -> the_post();
					?>
          <div class="page-articles__item item-article">
            <div class="item-article__img"><a href="<?php echo get_permalink(); ?>"><img
                        src="<?php echo carbon_get_post_meta(get_the_ID(), 'articles_img'); ?>" alt="picture"></a></div>
            <div class="item-article__descr"><?php echo carbon_get_post_meta(get_the_ID(), 'articles_desc'); ?></div>
          </div>
				<?php
				endwhile;
			endif;

			wp_reset_postdata();
			?>

    </div>
    <div class='article_pagination'>
			<?php
			$big = 999999999;

			echo paginate_links(array(
				'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
				'current'   => max(1, get_query_var('paged')),
				'total'     => $query -> max_num_pages,
				'prev_text' => __('« Предыдущая'),
				'next_text' => __('Следующая »'),
			));
			?>
    </div>
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
