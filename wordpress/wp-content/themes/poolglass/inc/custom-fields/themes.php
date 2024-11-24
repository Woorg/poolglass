<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options() {
	Container ::make('theme_options', __('Настройки сайта'))
	          -> add_tab(__('Основные настройки'), array(
		          Field ::make('image', 'logo', __("Логотип сайта"))
		                ->set_value_type('url'),
		          Field ::make('text', 'menu_1', __("Пункт меню №1"))
		                -> set_width(20),
		          Field ::make('text', 'menu_2', __("Пункт меню №2"))
		                -> set_width(20),
		          Field ::make('text', 'menu_3', __("Пункт меню №3"))
		                -> set_width(20),
		          Field ::make('text', 'menu_4', __("Пункт меню №4"))
		                -> set_width(20),
		          Field ::make('text', 'menu_5', __("Пункт меню №5"))
		                -> set_width(20),
		          Field ::make('text', 'phone', __("Телефон"))
		                -> set_width(33),
		          Field ::make('text', 'email', __("Почта"))
		                -> set_width(33),
		          Field ::make('text', 'address', __("Адрес"))
		                -> set_width(33),
		          Field ::make('text', 'instagram', __("Instagram"))
		                -> set_width(25),
		          Field ::make('text', 'facebook', __("Facebook"))
		                -> set_width(25),
		          Field ::make('text', 'whatsapp', __("Whatsapp"))
		                -> set_width(25),
		          Field ::make('text', 'telegram', __("Telegram"))
		                -> set_width(25),
	          ))
	          -> add_tab(__('Промо блок'), array(
		          Field ::make('rich_text', 'promo_title', __("Заголовок")),
		          Field ::make('text', 'promo_btn_1', __("Кнопка меню №1"))
		                -> set_width(50),
		          Field ::make('text', 'promo_btn_2', __("Кнопка меню №2"))
		                -> set_width(50),
		          Field ::make('text', 'benefits_1', __("Преимущество №1"))
		                -> set_width(25),
		          Field ::make('text', 'benefits_2', __("Преимущество №2"))
		                -> set_width(25),
		          Field ::make('text', 'benefits_3', __("Преимущество №3"))
		                -> set_width(25),
		          Field ::make('text', 'benefits_4', __("Преимущество №4"))
		                -> set_width(25),
	          ))
	          -> add_tab(__('О компании'), array(
		          Field ::make('text', 'about_title_block', __("Заголовок блока"))
		                -> set_width(50),
		          Field ::make('text', 'about_title', __("Заголовок описания"))
		                -> set_width(50),
		          Field ::make('rich_text', 'about_desc', __("Описание"))
		                -> set_width(50),
	          ))
	          -> add_tab(__('Контакты'), array(
		          Field ::make('text', 'contacts_title_block', __("Заголовок блока"))
		                -> set_width(50),
		          Field ::make('text', 'contacts_desc', __("Описание под заголовком"))
		                -> set_width(50),
	          ))
	          -> add_tab(__('Категории проектов'), array(
		          Field ::make('text', 'product_category_1', __("Наименование категории №1"))
		                -> set_width(33),
		          Field ::make('text', 'product_category_2', __("Наименование категории №2"))
		                -> set_width(33),
		          Field ::make('text', 'product_category_3', __("Наименование категории №3"))
		                -> set_width(33),
		          Field ::make('text', 'product_category_4', __("Наименование категории №4"))
		                -> set_width(33),
		          Field ::make('text', 'product_category_5', __("Наименование категории №5"))
		                -> set_width(33),
		          Field ::make('text', 'product_category_6', __("Наименование категории №6"))
		                -> set_width(33),
		          Field ::make('text', 'product_category_7', __("Наименование категории №7")),
	          ))
	          -> add_tab(__('Настройка блока с кнопками для статей'), array(
		          Field ::make('checkbox', 'btnblock_1', __('Отобразить блок "Калькулятор"'))
		                -> set_default_value('yes')
		                -> set_width(50),
		          Field ::make('checkbox', 'btnblock_2', __('Отобразить блок "Технология Рем"'))
		                -> set_default_value('yes')
		                -> set_width(50),
		          Field ::make('checkbox', 'btnblock_3', __('Отобразить блок "Обратный звонок"'))
		                -> set_default_value('yes')
		                -> set_width(50),
		          Field ::make('checkbox', 'btnblock_4', __('Отобразить блок "Прайс Оптимальных решений"'))
		                -> set_default_value('yes')
		                -> set_width(50),
		          Field ::make('checkbox', 'btnblock_5', __('Отобразить блок "Варианты для самостоятельной установки"'))
		                -> set_default_value('yes')
		                -> set_width(50),
		          Field ::make('checkbox', 'btnblock_6', __('Отобразить блок "Акции"'))
		                -> set_default_value('yes')
		                -> set_width(50),
	          ));
}
