<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_optPrice');
add_action('init', 'register_post_optPrice');

function register_post_optPrice() {
	register_post_type('optPrice', [
		'labels'        => [
			'name'          => 'Прайс оптимальных Решений', // основное название для типа записи
			'singular_name' => 'Прайс', // название для одной записи этого типа
			'add_new'       => 'Добавить прайс', // для добавления новой записи
			'add_new_item'  => 'Добавить новый прайс', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'     => 'Редактировать прайс', // для редактирования типа записи
			'new_item'      => 'Новый прайс', // текст новой записи
			'view_item'     => 'Смотреть прайс', // для просмотра записи этого типа.
			'search_items'  => 'Искать прайс', // для поиска по этим типам записи
			'not_found'     => 'Не найден прайс', // если в результате поиска ничего не было найдено
			'menu_name'     => 'Прайс оптимальных Решений', // название меню
		],
		'public'        => true,
		'show_ui'       => true,
		// зависит от public
		'show_in_rest'  => false,
		// добавить в REST API. C WP 4.7
		'menu_position' => 25,
		'supports'      => ['title', 'thumbnail'],
		// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'has_archive'   => true,
	]);
}

function crb_optPrice() {
	Container ::make('post_meta', __('Вид остекления'))
	          -> where('post_type', '=', 'optprice')
	          -> add_tab(__('Отображение на главной странице'), [
		          Field ::make('image', 'optprice_img', __("Картинка акции"))
		                -> set_value_type('url'),
		          Field ::make('text', 'optprice_title', __("Заголовок акции")),
		          Field ::make('text', 'optprice_desc', __("Описание акции")),
		          Field ::make('text', 'optprice_meta_title', __("SEO TITLE")),
		          Field ::make('text', 'optprice_back_link', __('Техническое поле для ссылок (Не трогать!)'))
		                -> set_default_value('prajs-optimalnyh-reshenij'),
	          ])
	          -> add_tab(__('Настройка отображения записи'), [
		          Field ::make('text', 'post_main_title', __('Заголовок статьи')),
		          Field ::make('complex', 'optprice_post_item', __('Данные статьи'))
		                -> setup_labels([
			                'plural_name'   => 'Информационный блок',
			                'singular_name' => 'Информационный блок',
		                ])
		                -> set_collapsed(true)
		                -> add_fields(array(
			                Field ::make('separator', 'crb_separator', __('Данные по изображениям')),
			                Field ::make('radio', 'post_img_position', 'Отображение картинки ?')
			                      -> set_width(50)
			                      -> add_options(array(
				                      'right'  => 'Справа',
				                      'left'   => 'Слева',
				                      'center' => 'По центру'
			                      )),
			                Field ::make('radio', 'post_img_number', 'Количество картинок: Одна или несколько?')
			                      -> set_width(50)
			                      -> add_options(array(
				                      'one'   => 'Одна',
				                      'multi' => 'Несколько',
			                      )),
			                Field ::make('text', 'width', __('Ширина картинки'))
			                      -> set_width(50)
			                      -> set_help_text('Пример: "100"')
			                      -> set_attribute('type', 'number')
			                      -> set_conditional_logic(array(
				                      'relation' => 'AND',
				                      array(
					                      'field'   => 'post_img_number',
					                      'value'   => 'one',
					                      'compare' => '=',
				                      )
			                      )),
			                Field ::make('text', 'height', __('Высота картинки'))
			                      -> set_width(50)
			                      -> set_help_text('Пример: "100"')
			                      -> set_attribute('type', 'number')
			                      -> set_conditional_logic(array(
				                      'relation' => 'AND',
				                      array(
					                      'field'   => 'post_img_number',
					                      'value'   => 'one',
					                      'compare' => '=',
				                      )
			                      )),
			                Field ::make('text', 'multi_width_1', 'Ширина для первой картинки')
			                      -> set_width(25)
			                      -> set_help_text('Пример: "100"')
			                      -> set_attribute('type', 'number')
			                      -> set_conditional_logic(array(
				                      'relation' => 'AND',
				                      array(
					                      'field'   => 'post_img_number',
					                      'value'   => 'multi',
					                      'compare' => '=',
				                      )
			                      )),
			                Field ::make('text', 'multi_height_1', 'Высота для первой картинки')
			                      -> set_width(25)
			                      -> set_help_text('Пример: "100"')
			                      -> set_attribute('type', 'number')
			                      -> set_conditional_logic(array(
				                      'relation' => 'AND',
				                      array(
					                      'field'   => 'post_img_number',
					                      'value'   => 'multi',
					                      'compare' => '=',
				                      )
			                      )),
			                Field ::make('text', 'multi_width_2', 'Ширина для второй картинки')
			                      -> set_width(25)
			                      -> set_help_text('Пример: "100"')
			                      -> set_attribute('type', 'number')
			                      -> set_conditional_logic(array(
				                      'relation' => 'AND',
				                      array(
					                      'field'   => 'post_img_number',
					                      'value'   => 'multi',
					                      'compare' => '=',
				                      )
			                      )),
			                Field ::make('text', 'multi_height_2', 'Высота для второй картинки')
			                      -> set_width(25)
			                      -> set_help_text('Пример: "100"')
			                      -> set_attribute('type', 'number')
			                      -> set_conditional_logic(array(
				                      'relation' => 'AND',
				                      array(
					                      'field'   => 'post_img_number',
					                      'value'   => 'multi',
					                      'compare' => '=',
				                      )
			                      )),
			                Field ::make('image', 'post_img', 'Выберите одно изображение')
			                      -> set_value_type('url')
			                      -> set_conditional_logic(array(
				                      'relation' => 'AND',
				                      array(
					                      'field'   => 'post_img_number',
					                      'value'   => 'one',
					                      'compare' => '=',
				                      )
			                      )),
			                Field ::make('media_gallery', 'post_multi_img', 'Выберите множество изображений')
			                      -> set_type(array('image'))
			                      -> set_duplicates_allowed(false)
			                      -> set_conditional_logic(array(
				                      'relation' => 'AND',
				                      array(
					                      'field'   => 'post_img_number',
					                      'value'   => 'multi',
					                      'compare' => '=',
				                      )
			                      )),
			                Field ::make('separator', 'optprice_separator', __('Данные по тексту')),
			                Field ::make('rich_text', 'post_text_img', __("Текст у картинки")),
			                Field ::make('rich_text', 'post_text_main', __("Основной блок с описанием")),
		                )),
	          ]);
}