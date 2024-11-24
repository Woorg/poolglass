<?php

add_action('wp_enqueue_scripts', 'poolglass_scripts');
add_filter('show_admin_bar', '__return_false');
add_filter('is_protected_meta', 'true_show_protected_custom_fields', 25);

function true_show_protected_custom_fields($protected) {
	return false;
}

function poolglass_scripts() {
	wp_enqueue_style('poolglass-style', get_stylesheet_uri());
	wp_enqueue_style('magnificPopup-style', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css');
	wp_enqueue_script('poolglass-Jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js', array(), null, true);
	wp_enqueue_script('poolglass-scripts', get_template_directory_uri() . '/assets/js/app.min.js', array(), null, true);
	wp_enqueue_script('headerScript', get_template_directory_uri() . '/assets/js/stickyHeader.js', array(), null, true);
	wp_enqueue_script('magnificPopup', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js', array(), null, true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), null, true);
	wp_enqueue_script('select', get_template_directory_uri() . '/assets/js/select.js', array(), null, true);
}

;

// Пагинация
function wp_article_navi() {
	$total = get_category(get_query_var('articles'), false);
	echo $total -> count;
	$a['total']     = $total;
	$a['mid_size']  = 4; // сколько ссылок показывать слева и справа от текущей
	$a['end_size']  = 1; // сколько ссылок показывать в начале и в конце
	$a['prev_text'] = '&laquo;'; // текст ссылки "Предыдущая страница"
	$a['next_text'] = '&raquo;'; // текст ссылки "Следующая страница"

	if($total > 1) {
		echo '<nav class="pagination">';
	}
	echo paginate_links($a);
	if($total > 1) {
		echo '</nav>';
	}
}

/**
 * Подключение CarbonFields
 */
add_action('after_setup_theme', 'crb_load');

function crb_load() {
	require_once(get_template_directory() . '/inc/carbon-fields/vendor/autoload.php');
	\Carbon_Fields\Carbon_Fields ::boot();
}

/**
 * Подключение плагина carbon_yoast для работы Yoast SEO в полях CarbonFields
 */
add_action('after_setup_theme', 'crb_initialize_carbon_yoast');
function crb_initialize_carbon_yoast() {
	include_once get_template_directory() . '/inc/carbon-fields-yoast/autoload.php';

	new \Carbon_Fields_Yoast\Carbon_Fields_Yoast;
}

add_action('admin_enqueue_scripts', 'crb_enqueue_admin_scripts');
function crb_enqueue_admin_scripts() {
	wp_enqueue_script('crb-admin', get_template_directory_uri() . '/assets/js/admin.js', array('carbon-fields-yoast'));
}

/**
 * Подключаем поля CarbonFields
 */
require(get_template_directory() . '/inc/custom-fields/themes.php');
require(get_template_directory() . '/inc/custom-fields/icon-posts.php');
require(get_template_directory() . '/inc/custom-fields/last-projects.php');
require(get_template_directory() . '/inc/custom-fields/goods.php');
require(get_template_directory() . '/inc/custom-fields/articles.php');
require(get_template_directory() . '/inc/custom-fields/projects.php');
require(get_template_directory() . '/inc/custom-fields/kinds.php');
require(get_template_directory() . '/inc/custom-fields/stocks.php');
require(get_template_directory() . '/inc/custom-fields/optPrice.php');

add_theme_support('title-tag');