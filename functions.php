<?php
/*
All the functions are in the PHP files in the `functions/` folder.
*/

if ( ! defined('ABSPATH') ) {
  exit;
}
require get_template_directory() . '/functions/cleanup.php';
require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/hooks.php';
require get_template_directory() . '/functions/navbar.php';
require get_template_directory() . '/functions/dimox-breadcrumbs.php';
require get_template_directory() . '/functions/widgets.php';
require get_template_directory() . '/functions/search-widget.php';
require get_template_directory() . '/functions/single-split-pagination.php';

// add_filter( 'register_post_type_args', 'filter_function_name_8795', 10, 2 );
// function filter_function_name_8795( $args, $post_type ){
// // Фильтруем...

// if ( 'post' == $post_type ) {
// $args['menu_icon'] = 'dashicons-testimonial'; //смена иконки
// $args['labels'] = [
// 	'name'                  => 'Новости',
// 	'singular_name'         => 'Новость',
// 	'add_new'               => 'Добавить новость',
// 	'add_new_item'          => 'Добавить новость',
// 	'edit_item'             => 'Редактировать новость',
// 	'new_item'              => 'Новая новость',
// 	'view_item'             => 'Просмотреть новость',
// 	'search_items'          => 'Поиск новостей',
// 	'not_found'             => 'Новостей не найдено.',
// 	'not_found_in_trash'    => 'Новостей в корзине не найдено.',
// 	'parent_item_colon'     => '',
// 	'all_items'             => 'Все новости',
// 	'archives'              => 'Архивы новостей',
// 	'insert_into_item'      => 'Вставить в новость',
// 	'uploaded_to_this_item' => 'Загруженные для этой новости',
// 	'featured_image'        => 'Миниатюра новости',
// 	'filter_items_list'     => 'Фильтровать список новостей',
// 	'items_list_navigation' => 'Навигация по списку новостей',
// 	'items_list'            => 'Список новостей',
// 	'menu_name'             => 'Новости',
//     'name_admin_bar'        => 'Новость', // пункте "добавить"
// ];
// }

// return $args;
// }

function unregister_taxonomy_post_tag(){
	register_taxonomy('post_tag', array());
  }
  
add_action('init', 'unregister_taxonomy_post_tag'); 

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'stocks', [
		'label'  => 'stocks',
		'labels' => [
			'name'               => 'Акции', // основное название для типа записи
			'singular_name'      => 'Акцию', // название для одной записи этого типа
			'add_new'            => 'Добавить акцию', // для добавления новой записи
			'add_new_item'       => 'Добавление акции', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование акции', // для редактирования типа записи
			'new_item'           => 'Новая акция', // текст новой записи
			'view_item'          => 'Смотреть акцию', // для просмотра записи этого типа.
			'search_items'       => 'Искать акцию', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Акции', // название меню
    ],
		'description'         => 'Акции хостела',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
    'query_var'           => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-megaphone',
	] );

	register_post_type( 'news', [
		'label'  => 'news',
		'labels' => [
			'name'               => 'Новости', // основное название для типа записи
			'singular_name'      => 'Новость', // название для одной записи этого типа
			'add_new'            => 'Добавить новость', // для добавления новой записи
			'add_new_item'       => 'Добавление новости', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование новости', // для редактирования типа записи
			'new_item'           => 'Новая новость', // текст новой записи
			'view_item'          => 'Смотреть новости', // для просмотра записи этого типа.
			'search_items'       => 'Искать новости', // для поиска по этим типам записи
			'not_found'          => 'Не найдено новости', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине новости', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Новости', // название меню
    ],
		'description'         => 'Новости хостела',
		'public'              => true,
		// 'publicly_queryable'  => null, // зависит от public
		// 'exclude_from_search' => null, // зависит от public
		// 'show_ui'             => null, // зависит от public
		// 'show_in_nav_menus'   => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		// 'show_in_admin_bar'   => null, // зависит от show_in_menu
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => null,
		'menu_icon'           => null,
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => true,
    'query_var'           => true,
    'menu_position' => 4,
    'menu_icon' => 'dashicons-testimonial',
	] );
}

// flush_rewrite_rules();

add_filter( 'excerpt_length', function(){
	return 20;
} );

add_filter( 'excerpt_more', 'new_excerpt_more' );
function new_excerpt_more( $more ){
	global $post;
	return '...';
}