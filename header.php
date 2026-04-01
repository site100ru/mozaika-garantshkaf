<?php
	 
	session_start();
	
	if (isset($_SESSION['win'])) {
		unset($_SESSION['win']);
		$display = "block";
	} else $display = "none";
	
	$current_location = esc_html( get_query_var('location') ); // Получаем значение локации (например: ?location=moskva)
	$valid_locations = ['', 'vidnoe', 'volokolamsk', 'dolgoprudniy', 'dmitrov', 'zvenigorod', 'zelenograd', 'ivanteevka', 'korolev', 'krasnogorsk', 'lobnya', 'lyubercy', 'moskva', 'mytischi', 'mojaysk', 'nahabino', 'odintsovo', 'pushkino', 'sergiev-posad', 'troitsk', 'himki', 'schelkovo','balashiha', 'bibirevo', 'bronnicy', 'chehov', 'dedovsk', 'domodedovo', 'dubna', 'dzerjinsk', 'egoryevsk', 'elektrostal', 'fryazino', 'golicino', 'hotkovo', 'iksha', 'istra', 'ivanovo', 'jeleznodorojniy', 'jukovskiy', 'kashira', 'klin', 'kolomna', 'kommunarka', 'lytkarino', 'orehovo-zuevo', 'ozery', 'podolsk', 'reutov', 'serpuhov', 'solnechnogorsk', 'sofrino', 'stupino', 'voskresensk', 'yahroma', 'zaraysk' ]; // Допустимые локации
	
	// Если текущая локация недопустимая, то делаем пустую локацию
	if ( !in_array( $current_location, $valid_locations ) ) {
		
		$location = '';
		$address = 'гор. Лобня, ул. Промышленная, д. 4Д';
		
		global $post;
		wp_redirect(home_url("/{$post->post_name}/"), 301);
		exit;
		
	} else { // Иначе выводим локацию
		
		switch ( $current_location ) {
			case '': $location = ''; $address = 'гор. Лобня, ул. Промышленная, д. 4Д'; break;
			case 'vidnoe': $location = ' в&nbsp;Видном'; $address = 'гор. Видное'; break;
			case 'volokolamsk': $location = ' в&nbsp;Волоколамске'; $address = 'гор. Волоколамск'; break;
			case 'dolgoprudniy':$location = ' в&nbsp;Долгопрудном'; $address = 'гор. Долгопрудный'; break;
			case 'dmitrov': $location = ' в&nbsp;Дмитрове'; $address = 'гор. Дмитров'; break;
			case 'zvenigorod': $location = ' в&nbsp;Звенигороде'; $address = 'гор. Звенигород'; break;
			case 'zelenograd': $location = ' в&nbsp;Зеленограде'; $address = 'гор. Зеленоград'; break;
			case 'ivanteevka':$location = ' в&nbsp;Ивантеевке'; $address = 'гор. Ивантеевка'; break;
			case 'korolev':$location = ' в&nbsp;Королеве'; $address = 'гор. Королев'; break;
			case 'krasnogorsk': $location = ' в&nbsp;Красногорске'; $address = 'гор. Красногорск'; break;
			case 'lobnya': $location = ' в&nbsp;Лобне'; $address = 'гор. Лобня, ул. Промышленная, д. 4Д'; break;
			case 'lyubercy': $location = ' в&nbsp;Люберцах'; $address = 'гор. Люберцы'; break;
			case 'moskva': $location = ' в&nbsp;Москве'; $address = 'гор. Москва'; break;
			case 'mytischi': $location = ' в&nbsp;Мытищах'; $address = 'гор. Мытищи'; break;
			case 'solnechnogorsk': $location = ' в&nbsp;Солнечногорске'; $address = 'гор. Солнечногорск'; break;
			case 'mojaysk': $location = ' в&nbsp;Можайске'; $address = 'гор. Можайск'; break;
			case 'nahabino': $location = ' в&nbsp;Нахабино'; $address = 'гор. Нахабино'; break;
			case 'odintsovo': $location = ' в&nbsp;Одинцово'; $address = 'гор. Одинцово'; break;
			case 'pushkino': $location = ' в&nbsp;Пушкино'; $address = 'гор. Пушкино'; break;
			case 'sergiev-posad': $location = ' в&nbsp;Сергиевом&nbsp;Посаде'; $address = 'гор. Сергиев&nbsp;Посад'; break;
			case 'troitsk': $location = ' в&nbsp;Троицке'; $address = 'гор. Троицк'; break;
			case 'himki': $location = ' в&nbsp;Химках'; $address = 'гор. Химки'; break;
			case 'schelkovo': $location = ' в&nbsp;Щелково'; $address = 'гор. Щелково'; break;
			case 'balashiha': $location = ' в&nbsp;Балашихе'; $address = 'гор. Балашиха'; break;
			
			// Локации которые не добавлены в директе
			case 'bibirevo': $location = ' в&nbsp;Бибирево'; break;
			case 'bronnicy': $location = ' в&nbsp;Бронницах'; break;
			case 'chehov': $location = ' в&nbsp;Чехове'; break;
			case 'dedovsk': $location = ' <span>в&nbsp;Дедовске</span>'; break;
			case 'domodedovo': $location = ' <span>в&nbsp;Домодедово</span>'; break;
			case 'dubna': $location = ' <span>в&nbsp;Дубне</span>'; break;
			case 'dzerjinsk': $location = ' <span>в&nbsp;Дзержинске</span>'; break;
			case 'egoryevsk': $location = ' <span>в&nbsp;Егорьевске</span>'; break;
			case 'elektrostal': $location = ' <span>в&nbsp;Электростали</span>'; break;
			case 'fryazino': $location = ' <span>в&nbsp;Фрязино</span>'; break;
			case 'golicino': $location = ' <span>в&nbsp;Голицыно</span>'; break;
			case 'hotkovo': $location = ' <span>в&nbsp;Хотьково</span>'; break;
			case 'iksha': $location = ' <span>в&nbsp;Икше</span>';
			case 'istra': $location = ' <span>в&nbsp;Истре</span>';
			case 'ivanovo': $location = ' <span>в&nbsp;Иваново</span>'; break;
			case 'jeleznodorojniy': $location = ' <span>в&nbsp;Железнодорожном</span>'; break;
			case 'jukovskiy': $location = ' <span>в&nbsp;Жуковском</span>'; break;
			case 'kashira': $location = ' <span>в&nbsp;Кашире</span>'; break;
			case 'klin': $location = ' <span>в&nbsp;Клине</span>'; break;
			case 'kolomna': $location = ' <span>в&nbsp;Апрелевке</span>'; break;
			case 'kolomna': $location = ' <span>в&nbsp;Коломне</span>'; break;
			case 'kommunarka': $location = ' <span>в&nbsp;Коммунарке</span>'; break;
			case 'lytkarino': $location = ' <span>в&nbsp;Лыткарино</span>'; break;
			case 'orehovo-zuevo': $location = ' <span>в&nbsp;Орехово&nbsp;Зуево</span>'; break; 
			case 'ozery': $location = ' <span>в&nbsp;Озерах</span>'; break;
			case 'podolsk': $location = ' <span>в&nbsp;Подольске</span>'; break;
			case 'reutov': $location = ' <span>в&nbsp;Реутове</span>'; break;
			case 'serpuhov': $location = ' <span>в&nbsp;Серпухове</span>'; break;
			case 'sofrino': $location = ' <span>в&nbsp;Софрино</span>'; break;
			case 'stupino': $location = ' <span>в&nbsp;Ступино</span>'; break;
			case 'voskresensk': $location = ' <span>в&nbsp;Воскресенске</span>'; break;
			case 'yahroma': $location = ' <span>в&nbsp;Яхроме</span>'; break;
			case 'zaraysk': $location = ' <span>в&nbsp;Зарайске</span>'; break;
		}
	}
	 
?>


<!DOCTYPE html>
<html lang="ru">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:title" content="<?php echo get_the_title(); ?> на&nbsp;заказ от&nbsp;производителя<?php echo $location; ?>"/>
		<meta name="description" content="<?php echo get_the_title(); ?> на&nbsp;заказ от&nbsp;производителя<?php echo $location; ?>"/>
		<meta property="og:description" content="<?php echo get_the_title(); ?> на&nbsp;заказ от&nbsp;производителя<?php echo $location; ?>"/>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" />
		
		<!-- Theme CSS -->
		<!-- Стили из родительской темы -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/theme.css" />
		<!-- Стили из дочерней темы -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/theme.css" />
		
		<!-- Style CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />

        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/favicon-light-1.svg" type="image/x-icon" id="favicon">
		
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/favicon-light-1.svg" type="image/x-icon" id="favicon">

		<!-- Quiz CSS -->
		<!-- <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/quiz.css" /> -->

		<title><?php echo get_the_title(); ?> на&nbsp;заказ от&nbsp;производителя<?php echo $location; ?></title>
		
		<?php if ( $counter_head = get_theme_mod( 'mytheme_counter_head' ) ) : ?>
			<!-- Код счетчика (head) -->
			<?php echo $counter_head; ?>
		<?php endif; ?>
	</head>
	<body>