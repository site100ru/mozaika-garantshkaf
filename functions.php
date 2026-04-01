<?php
/*** MENU ***/
/* Bootstrap 5 wp_nav_menu walker */
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu {
	private $current_item;
	private $dropdown_menu_alignment_values = [
		'dropdown-menu-start',
		'dropdown-menu-end',
		'dropdown-menu-sm-start',
		'dropdown-menu-sm-end',
		'dropdown-menu-md-start',
		'dropdown-menu-md-end',
		'dropdown-menu-lg-start',
		'dropdown-menu-lg-end',
		'dropdown-menu-xl-start',
		'dropdown-menu-xl-end',
		'dropdown-menu-xxl-start',
		'dropdown-menu-xxl-end'
	];

	function start_lvl(&$output, $depth = 0, $args = null) {
		$dropdown_menu_class[] = '';
		foreach($this->current_item->classes as $class) {
			if(in_array($class, $this->dropdown_menu_alignment_values)) {
				$dropdown_menu_class[] = $class;
			}
		}
		$indent = str_repeat("\t", $depth);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
		
		$this->current_item = $item;

		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty($item->classes) ? array() : (array) $item->classes;

		$classes[] = ($args->walker->has_children) ? 'dropdown' : '';
		$classes[] = 'nav-item';
		$classes[] = 'nav-item-' . $item->ID;
		if ($depth && $args->walker->has_children) {
			$classes[] = 'dropdown-menu dropdown-menu-end';
		}

		$class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';
		
		
		$output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';


		$attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

		$active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
		$nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
		$attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
		
		// Показываем точки в меню, первый вариант
		$item_title = $item->title;
		$dropdown = in_array( 'dropdown', $classes );
		if ( $item_title == 'Контакты' ) {
			$output .= '
				<li class="nav-item d-none">
					<span class="nav-link">
						<img src="'.get_template_directory_uri().'/img/ico/menu-decoration.svg" alt="">
					</span>
				</li>
			';
		} else if ( $dropdown == false AND $depth == 0 ) {
			$output .= '
				<li class="nav-item d-none d-xl-inline">
					<span class="nav-link">
						<img src="'.get_template_directory_uri().'/img/ico/menu-decoration.svg" alt="">
					</span>
				</li>
			';
		}
	}
}
/* End Bootstrap 5 wp_nav_menu walker */




/* Register a new menu */
add_action( 'after_setup_theme', function() {
	register_nav_menus( [
		'main-menu' => 'Main menu',
		'mobail-header-collapse' => 'Mobail header collapse',
		'sliding-header-collapse' => 'Sliding header collapse',
		'contacts-desktop-menu' => 'Contacts desktop menu',
		'navbarSupportedContent2' => 'navbarSupportedContent2'
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
	
	// Добавляем параметр "location" в разрешенные query_vars
	add_filter('query_vars', 'add_location_query_var');
	function add_location_query_var($vars) {
		$vars[] = 'location';
		return $vars;
	}
	
	// Обновляем правила (выполнить 1 раз, потом можно закомментировать, чтобы не нагружать сайт!)
	flush_rewrite_rules();
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


/*** ADD METABOX ***/
// Подключаем функцию активации мета блока (my_extra_fields)
add_action('add_meta_boxes', 'my_extra_fields', 1);

function my_extra_fields() {
	add_meta_box( 'extra_fields', 'Галерея наших работ', 'extra_fields_box_func', 'portfolio', 'side', 'high' );
}

/* Код блока галереи */
function extra_fields_box_func( $post ){
	for ($i=1; $i<=9; $i++) { ?>
		<label>URL&#160;изображения <?php echo $i; ?>:</label>
		<input type="text" name="extra[img-<?php echo $i; ?>]" value="<?php echo get_post_meta($post->ID, '_img-'.$i, 1); ?>" style="width: 100%;">
		<div style="clear: both;"></div>
	<? } ?>
		<input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	<?php
}

// включаем обновление полей при сохранении
add_action( 'save_post', 'my_extra_fields_update', 0 );

## Сохраняем данные, при сохранении поста
function my_extra_fields_update( $post_id ){
	// базовая проверка
	if (
			empty( $_POST['extra'] )
		|| ! wp_verify_nonce( $_POST['extra_fields_nonce'], __FILE__ )
		|| wp_is_post_autosave( $post_id )
		|| wp_is_post_revision( $post_id )
	)
		return false;

	// Все ОК! Теперь, нужно сохранить/удалить данные
	//$_POST['extra'] = array_map( 'sanitize_text_field', $_POST['extra'] ); // чистим все данные от пробелов по краям
	foreach( $_POST['extra'] as $key => $value ){
		if( empty($value) ){
			delete_post_meta( $post_id, '_'.$key ); // удаляем поле если значение пустое
			continue;
		}
		update_post_meta( $post_id, '_'.$key, $value ); // add_post_meta() работает автоматически
	}
	return $post_id;
}
/*** END ADD METABOX ***/


/*** ДОБАВЛЯЕМ ВОЗМОЖНОСТЬ В НАСТРОЙКАХ ТЕМЫ ДОБАВИТЬ КОД СЧЕТЧИКА ***/
function mytheme_customize_register( $wp_customize ) {
	// Добавляем секцию
	$wp_customize->add_section( 'mytheme_analytics', array(
		'title'    => 'Аналитика и счетчики',
		'priority' => 200,
	));

	// Поле для кода счетчика (head)
	$wp_customize->add_setting( 'mytheme_counter_head', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control( 'mytheme_counter_head', array(
		'label'       => 'Код счетчика (в <head>)',
		'description' => 'Вставьте код, который должен быть в <head> (например, Google Analytics, Meta Pixel)',
		'section'     => 'mytheme_analytics',
		'type'        => 'textarea',
	));

	// Поле для кода счетчика (body)
	$wp_customize->add_setting( 'mytheme_counter_body', array(
		'default'   => '',
		'transport' => 'postMessage',
	));

	$wp_customize->add_control( 'mytheme_counter_body', array(
		'label'       => 'Код счетчика (перед </body>)',
		'description' => 'Вставьте код, который должен быть перед закрывающим тегом </body> (например, Яндекс.Метрика)',
		'section'     => 'mytheme_analytics',
		'type'        => 'textarea',
	));
}
add_action( 'customize_register', 'mytheme_customize_register' );
/*** END ДОБАВЛЯЕМ ВОЗМОЖНОСТЬ В НАСТРОЙКАХ ТЕМЫ ДОБАВИТЬ КОД СЧЕТЧИКА ***/

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

add_action('save_post', function ($post_id) {
	if (isset($_POST['price'])) {
		update_post_meta($post_id, 'price', sanitize_text_field($_POST['price']));
	}
});
