<?php

/* Register a new menu */
add_action( 'after_setup_theme', function() {
	register_nav_menus( [
		'main-menu' => 'Main menu',
		'mobail-header-collapse' => 'Mobail header collapse',
		'sliding-header-collapse' => 'Sliding header collapse',
		'contacts-desktop-menu' => 'Contacts desktop menu',
		'navbarSupportedContent2' => 'navbarSupportedContent2',
		'footer-menu-left' => 'Меню в подвале (левая колонка)',
		'footer-menu-right' => 'Меню в подвале (правая колонка)'
	] );
} );
/* End register a new menu */
/*** END MENU ***/




/*** REGISTER POST TYPES ***/
add_action( 'init', 'garantshkaf_register_post_types' );
function garantshkaf_register_post_types(){
	
	register_post_type( 'closet', [
		'label'  => null,
		'labels' => [
			'name'               => 'Шкафы', // основное название для типа записи
			'singular_name'      => 'Шкаф', // название для одной записи этого типа
			'add_new'            => 'Добавить шкаф', // для добавления новой записи
			'add_new_item'       => 'Добавление шкафа', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование шкафа', // для редактирования типа записи
			'new_item'           => 'Новый шкаф', // текст новой записи
			'view_item'          => 'Смотреть шкаф', // для просмотра записи этого типа.
			'search_items'       => 'Искать шкаф', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Шкафы', // название меню
		],
		'description'         => '',
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
		'menu_icon'           => 'dashicons-feedback',
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor', 'excerpt' ], // 'title','editor','author','trackbacks','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [ 'closet-category' ],
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,
	] );
	
}
/*** REGISTER POST TYPES ***/




/*** Меняем URL страницы вида page/?location=moskva на URL вида page/moskva ***/
// 1. Добавляем правило для URL вида /страница/регион/
add_action('init', 'add_location_rewrite_rule');
function add_location_rewrite_rule() {
	add_rewrite_rule(
		'^([^/]+)/([^/]+)/?$', // Регулярка: /страница/регион/
		'index.php?pagename=$matches[1]&location=$matches[2]', // Внутренний запрос
		'top' // Высокий приоритет
	);

	// 1b. Правило для ГЛАВНОЙ: /регион/ → статическая главная (page_on_front) + location.
	// Ограничено списком реальных локаций, чтобы не перехватывать обычные страницы.
	$front_id = (int) get_option('page_on_front');
	if ( $front_id ) {
		$loc = 'vidnoe|volokolamsk|dolgoprudniy|dmitrov|zvenigorod|zelenograd|ivanteevka|korolev|krasnogorsk|lobnya|lyubercy|moskva|mytischi|mojaysk|nahabino|odintsovo|pushkino|sergiev-posad|troitsk|himki|schelkovo|balashiha|bibirevo|bronnicy|chehov|dedovsk|domodedovo|dubna|dzerjinsk|egoryevsk|elektrostal|fryazino|golicino|hotkovo|iksha|istra|ivanovo|jeleznodorojniy|jukovskiy|kashira|klin|kolomna|kommunarka|lytkarino|orehovo-zuevo|ozery|podolsk|reutov|serpuhov|solnechnogorsk|sofrino|stupino|voskresensk|yahroma|zaraysk';
		add_rewrite_rule(
			'^(' . $loc . ')/?$',
			'index.php?page_id=' . $front_id . '&location=$matches[1]',
			'top'
		);
	}

	// Обновляем правила (выполнить 1 раз, потом можно закомментировать, чтобы не нагружать сайт!)
	flush_rewrite_rules();
}

// Не редиректить URL с локацией канонически (иначе WP кинет /регион/ обратно на /)
add_filter('redirect_canonical', 'keep_location_url');
function keep_location_url($redirect_url) {
	if ( get_query_var('location') ) {
		return false;
	}
	return $redirect_url;
}

	// Добавляем параметр "location" в разрешенные query_vars
	add_filter('query_vars', 'add_location_query_var');
	function add_location_query_var($vars) {
		$vars[] = 'location';
		return $vars;
	}


// 2. Перенаправляем с URL старого вида на новый /страница/регион/
add_action('template_redirect', 'redirect_old_location_urls');
function redirect_old_location_urls() {
	if (is_page() && isset($_GET['location'])) {
		global $post;
		wp_redirect(home_url("/{$post->post_name}/{$_GET['location']}/"), 301);
		exit;
	}
}
/*** END Меняем URL страницы вида page/?location=moskva на URL вида page/moskva ***/


add_action('add_meta_boxes', function () {
	add_meta_box(
		'portfolio_price',
		'Цена',
		function ($post) {
			$value = get_post_meta($post->ID, 'price', true);
			echo '<input type="text" name="price" value="' . esc_attr($value) . '" style="width:100%">';
		},
		'portfolio',
		'side',
		'default'
	);
});

function gsh_portfolio_cat_name() {
	$name = single_term_title('', false);
	$name = preg_replace('/^\s*\d+\s*-\s*/u', '', $name); // убрать числовой префикс «023-»
	$name = str_replace('-', ' ', $name);                 // дефисы → пробелы
	if ( $name !== '' ) {
		$name = mb_strtoupper( mb_substr($name, 0, 1) ) . mb_substr($name, 1); // первая буква заглавная
	}
	return $name;
}

function garant_echo_title() {
	$site = get_bloginfo('name'); // Название сайта из «Настройки → Общие»
	if ( is_post_type_archive('portfolio') ) {
		return 'Наши работы — ' . $site;
	}
	if ( is_tax('portfolio-cat') ) {
		return gsh_portfolio_cat_name() . ' — ' . $site;
	}
	if ( is_page_template('calculator-new.php') || is_page_template('calculator.php') ) {
		return 'Калькулятор стоимости мебели на заказ — ' . $site;
	}
	return '';
}

function garant_echo_description() {
	$site = get_bloginfo('name'); // Название сайта из «Настройки → Общие»
	if ( is_tax('portfolio-cat') ) {
		$desc = wp_strip_all_tags( term_description() );
		return $desc !== '' ? $desc : 'Примеры наших работ: ' . gsh_portfolio_cat_name() . ' на заказ от производителя';
	}
	if ( is_post_type_archive('portfolio') ) {
		return 'Наши выполненные работы — корпусная мебель на заказ от производителя';
	}
	if ( is_page_template('calculator-new.php') || is_page_template('calculator.php') ) {
		return 'Онлайн-калькулятор стоимости корпусной мебели на заказ — ' . $site;
	}
	return '';
}
/*** END SEO title / description ***/

add_action('save_post', function ($post_id) {
	if (isset($_POST['price'])) {
		update_post_meta($post_id, 'price', sanitize_text_field($_POST['price']));
	}
});