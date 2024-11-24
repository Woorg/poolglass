<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action('init', 'register_post_last_projects');
add_action('carbon_fields_register_fields', 'crb_last_projects');

function register_post_last_projects() {
	register_post_type('last_projects', [
		'labels'        => [
			'name'          => 'Проект', // основное название для типа записи
			'singular_name' => 'Проект', // название для одной записи этого типа
			'add_new'       => 'Добавить проект', // для добавления новой записи
			'add_new_item'  => 'Добавить новый проект', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'     => 'Редактировать проект', // для редактирования типа записи
			'new_item'      => 'Новый проект', // текст новой записи
			'view_item'     => 'Смотреть проект', // для просмотра записи этого типа.
			'search_items'  => 'Искать проект', // для поиска по этим типам записи
			'not_found'     => 'Не найден проект', // если в результате поиска ничего не было найдено
			'menu_name'     => 'Последние проекты', // название меню
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

function crb_last_projects() {
	Container ::make('post_meta', __('Последний Проект'))
	          -> where('post_type', '=', 'last_projects')
	          -> add_tab(__('Отображение на главной странице'), [
		          Field ::make('rich_text', 'last_projects_desc', __('Описание')),
		          Field ::make('text', 'last_projects_meta_title', __("SEO TITLE")),
		          Field ::make('text', 'last_projects_link', __('Ссылка на проект'))
		                -> set_default_value(''),
	          ]);
}
