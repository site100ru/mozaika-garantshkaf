<?php

	/**
	 * Template Name: Главная (новая)
	 * Template Post Type: page
	 */

	session_start();

	if (isset($_SESSION['win'])) {
		unset($_SESSION['win']);
		$display = "block";
	} else $display = "none";

	if ( isset( $_GET['location'] ) ) {
		switch ( $_GET['location'] ) {
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
			case 'bibirevo': $location = ' <span>в&nbsp;Бибирево</span>'; break;
			case 'bronnicy': $location = ' <span>в&nbsp;Бронницах</span>'; break;
			case 'chehov': $location = ' <span>в&nbsp;Чехове</span>'; break;
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
	} else {
		$location = '';
		$address = 'гор. Лобня, ул. Промышленная, д. 4Д';
	}

	if ( isset( $_GET['product'] ) ) {
		switch ( $_GET['product'] ) {
			case 'shkaf-raspashnoy': $product = 'Распашные&nbsp;шкафы'; break;
			case 'shkaf-cupe': $product = 'Шкафы&nbsp;купе'; break;
			case 'garderobnaya': $product = 'Гардеробные'; break;
			case 'rabochaya-zona': $product = 'Рабочие зоны'; break;
		}
	} else {
		$product = 'Шкафы, гардеробные ';
	}

?>


<!DOCTYPE html>
<html lang="ru">
	<head>
		<!-- Required meta tags --->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:title" content="<?php echo $product; ?> и&nbsp;другая корпусная&nbsp;мебель на&nbsp;заказ от&nbsp;производителя<?php echo $location; ?>"/>
		<meta name="description" content="<?php echo $product; ?> и&nbsp;другая корпусная&nbsp;мебель на&nbsp;заказ от&nbsp;производителя<?php echo $location; ?>"/>
		<meta property="og:description" content="<?php echo $product; ?> и&nbsp;другая корпусная&nbsp;мебель на&nbsp;заказ от&nbsp;производителя<?php echo $location; ?>"/>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/theme.css" />

		<!-- Style CSS -->
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/favicon-light-1.svg" type="image/x-icon" id="favicon">

		<title><?php echo $product; ?> и&nbsp;другая корпусная&nbsp;мебель на&nbsp;заказ от&nbsp;производителя<?php echo $location; ?></title>

		<?php if ( $counter_head = get_theme_mod( 'mytheme_counter_head' ) ) : ?>
			<!-- Код счетчика (head) -->
			<?php echo $counter_head; ?>
		<?php endif; ?>
	</head>
	<body>


<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/new.css?v=<?php echo filemtime(get_stylesheet_directory() . '/css/new.css'); ?>">

<?php $theme_uri = get_stylesheet_directory_uri(); ?>

<!-- ==========================================================================
     HERO — верхняя плашка, меню и контент над фоном
     (фон new-main.jpg задаётся в css/new.css для .hero)
     ========================================================================== -->
<section class="hero">

	<!-- Шапка: плашка + линия + меню (скрывается ≤992px, на их месте — sliding-header) -->
	<div class="hero__header">

		<div class="container">
			<div class="topbar">
				<div class="topbar__info">
					<a class="topbar__item" href="https://yandex.ru/maps/org/garantshkaf/43131278671/" target="_blank">
						<img src="<?php echo $theme_uri; ?>/img/ico/location-ico.svg" alt="" />
						<span><?php echo explode(',', $address)[0]; ?></span>
					</a>
					<div class="topbar__item">
						<img src="<?php echo $theme_uri; ?>/img/ico/clock-ico.svg" alt="" />
						<span>Пн - Вс<br />с 8:00 до 22:00</span>
					</div>
					<a class="topbar__item" href="#" data-bs-toggle="modal" data-bs-target="#callback">
						<img src="<?php echo $theme_uri; ?>/img/ico/callback-ico.svg" alt="" />
						<span>Обратный звонок</span>
					</a>
					<a class="topbar__item" href="tel:89856445775">
						<img src="<?php echo $theme_uri; ?>/img/ico/mobile-phone-ico.svg" alt="" />
						<span class="topbar__phone">8 (985) 644-57-75</span>
					</a>
				</div>
				<div class="topbar__social">
					<a href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="_blank" aria-label="Max">
						<img src="<?php echo $theme_uri; ?>/img/ico/max-ico.svg" alt="Max" />
					</a>
					<a href="https://t.me/+79856445775" target="_blank" aria-label="Telegram">
						<img src="<?php echo $theme_uri; ?>/img/ico/telegram-ico.svg" alt="Telegram" />
					</a>
					<a href="https://wa.me/79856445775?web=1&app_absent=1" target="_blank" aria-label="WhatsApp">
						<img src="<?php echo $theme_uri; ?>/img/ico/whatsapp-ico.svg" alt="WhatsApp" />
					</a>
				</div>
			</div>
		</div>

		<div class="hero__line"></div>

		<div class="container">
			<div class="row row-bottom-nav d-flex">
				<div class="col-md-12 bottom-nav">
					<nav class="header-nav-bottom navbar navbar-expand-lg navbar-light header-bottom">
						<div class="container bottom-container">
							<a class="navbar-brand" href="#">
								<img src="<?php echo $theme_uri; ?>/img/ico/logo.svg" />
							</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobail-header-collapse" aria-controls="mobail-header-collapse" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="mobail-header-collapse">
								<?php
							wp_nav_menu(array(
								'theme_location' => 'mobail-header-collapse',
								'container' => false,
								'menu_class' => '',
								'fallback_cb' => '__return_false',
								'items_wrap' => '
										<ul id="%1$s" class="navbar-nav align-items-center ms-auto mb-2 mb-lg-0 %2$s">%3$s
											<!-- Mobile menu -->
											<li class="nav-item d-lg-none mobile-item">
												<a  class="nav-link active"  href="#" data-bs-toggle="modal" data-bs-target="#callback-measurer">
													Вызов замерщика (Бесплатно)
												</a>
											</li>
											<li class="nav-item d-lg-none mobile-item">
												<div>
													<img  src="' . get_stylesheet_directory_uri() . '/img/ico/location-ico.svg"  style="width: 10px" class="me-1"/>
													<span>' . $address . '</span>
										</div>
										<a class="nav-link top-menu-tel pt-1 pb-1" href="tel:89856445775">
											8 (985) 644-57-75
										</a>
										<div class="mb-2" style="font-size: 12px;  font-family: Gilroy-Light;  text-transform: none;">
											<img src="' . get_stylesheet_directory_uri() . '/img/ico/clock-ico.svg" style="width: 10px; position: relative; top: 3px" class="me-1 mb-2" />
											Ежедневно с 8:00 до 22:00
										</div>
										</li>
										<li class="nav-item d-lg-none pb-4">
											<a class="ico-button pe-2" href="https://wa.me/79856445775?web=1&app_absent=1" target="blank">
												<img src="' . get_stylesheet_directory_uri() . '/img/ico/whatsapp-ico.svg" />
											</a>
											<a class="ico-button pe-2" href="https://t.me/+79856445775" target="blank">
												<img src="'.get_stylesheet_directory_uri().'/img/ico/telegram-ico.svg" />
											</a>
											<a class="ico-button pe-0" href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="blank">
												<img src="'.get_stylesheet_directory_uri().'/img/ico/max-ico.svg" />
											</a>
										</li>
										<!-- End mobile menu -->
										</ul>
										',
								'depth' => 2,
								'walker' => new bootstrap_5_wp_nav_menu_walker()
							));
							?>
							</div><!-- /#mobail-header-collapse -->
						</div><!-- /.container -->
					</nav>
				</div><!-- /.col-md-12 -->
			</div><!-- /.row -->
		</div>

	</div><!-- /.hero__header -->

	<!-- Контент -->
	<div class="container">
		<div class="hero__content">
			<div class="row align-items-center">

				<!-- Левая колонка: заголовок + преимущества -->
				<div class="col-lg-6 col-xl-7 hero__left">
					<h1>
						<span class="hl">Шкафы, гардеробные</span> и&nbsp;другая корпусная мебель на&nbsp;заказ от&nbsp;производителя <span class="hl"><?php echo $location ? $location : 'в&nbsp;Москве'; ?></span>
					</h1>
					<ul class="hero__list">
						<li>
							<span class="hero__check"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.7746 24.8498L0.349609 15.7498L3.32461 11.5498L11.7246 17.6748L23.2746 2.7998L27.2996 5.9498L12.7746 24.8498Z" fill="#FFE600" />
								</svg></span>
							<span class="hero__text">Замер, дизайн-проект, доставка и монтаж — <span class="hl">бесплатно!</span></span>
						</li>
						<li>
							<span class="hero__check"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.7746 24.8498L0.349609 15.7498L3.32461 11.5498L11.7246 17.6748L23.2746 2.7998L27.2996 5.9498L12.7746 24.8498Z" fill="#FFE600" />
								</svg></span>
							<span class="hero__text">Беспроцентная <span class="hl">рассрочка&nbsp;на&nbsp;год!</span></span>
						</li>
						<li>
							<span class="hero__check"><svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12.7746 24.8498L0.349609 15.7498L3.32461 11.5498L11.7246 17.6748L23.2746 2.7998L27.2996 5.9498L12.7746 24.8498Z" fill="#FFE600" />
								</svg></span>
							<span class="hero__text">Работаем по Москве и Московской области</span>
						</li>
					</ul>
				</div>

				<!-- Правая колонка: форма -->
				<div class="col-lg-6 col-xl-4 offset-xl-1 hero__form">
					<div class="form">
						<h2 class="form__title">Рассчитаем точную стоимость корпусной мебели за&nbsp;15&nbsp;мин!</h2>
						<p class="form__subtitle">Опишите нужный проект своими словами. При возможности прикрепите изображение</p>
						<form method="post" action="<?php echo $theme_uri; ?>/mails/get_calculate.php" enctype="multipart/form-data">
							<div class="form__names d-flex gap-4">
								<input type="text" name="name" class="form__field" placeholder="Ваше имя" />
								<input type="text" name="tel" id="phone_mask_home" class="form__field telMask" placeholder="Ваш телефон" required />
							</div>
							<textarea rows="3" name="mes" class="form__field" placeholder="Опишите шкаф, гардеробную или другую корпусную мебель своими словами, укажите примерные размеры и материалы"></textarea>
							<div class="form__file">
								<label class="btn-grad-outline form__file-label" for="homeHeroFile">Прикрепить файл</label>
								<input type="file" name="file[]" class="form__file-input" id="homeHeroFile" accept=".jpg,.jpeg,.png,.pdf,.heic" multiple onchange="document.getElementById('homeHeroFileName').textContent = this.files.length ? (this.files.length === 1 ? this.files[0].name : this.files.length + ' файла(ов)') : 'Файл не выбран';" />
								<span class="form__file-name" id="homeHeroFileName">Файл не выбран</span>
							</div>
							<input type="hidden" id="g-recaptcha-response-home-hero" name="g-recaptcha-response">
							<button type="submit" class="btn-grad form__submit">Рассчитать</button>
							<label class="form__agree" for="homeHeroAgree">
								<input type="checkbox" id="homeHeroAgree" class="form__agree-input" checked>
								<span class="form__agree-box"></span>
								<span class="form__agree-text">Согласен на обработку <a href="/privacy/">персональных данных</a></span>
							</label>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

</section>

<header id="sliding-header" class="shadow">
	<nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="<?php echo $theme_uri; ?>/img/ico/logo-dark-theme.svg" />
			</a>
			<div class="d-lg-none">
				<a class="top-menu-tel pt-1 pb-0" style="font-size: 14px" href="tel:89856445775">
					8 (985) 644-57-75
				</a>
				<div style="font-size: 10px;  font-family: Gilroy-Light;  text-transform: none;">
					<img src="<?php echo $theme_uri; ?>/img/ico/clock-ico.svg" style="width: 12px; position: relative; top: -1px" class="me-1" />
					Пн-Вс 8:00-22:00
				</div>
			</div>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sliding-header-collapse" aria-controls="sliding-header-collapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="sliding-header-collapse">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'sliding-header-collapse',
						'container' => false,
						'menu_class' => '',
						'fallback_cb' => '__return_false',
						'items_wrap' => '
								<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s
									<!-- Mobile menu -->
									<li class="nav-item d-lg-none mobile-item">
										<a  class="nav-link active modal-link"  href="#"  data-bs-toggle="modal"  data-bs-target="#callback-measurer">
											Вызов замерщика (Бесплатно)
										</a>
									</li>
									<li  class="nav-item d-lg-none mobile-item mobile-schedule mb-md-2">
										<div class="location-block">
											<img  src="' . get_stylesheet_directory_uri() . '/img/ico/location-ico.svg"  style="width: 10px" class="me-1"/>
											<span>' . $address . '</span>
										</div>
										<a  class="nav-link top-menu-tel pt-1 pb-1"  href="tel:89856445775">
											8 (985) 644-57-75
										</a>
										<img  src="' . get_stylesheet_directory_uri() . '/img/ico/clock-ico.svg"  style="width: 10px; position: relative; top: 2px"  class="me-1 mb-2"/>
										Ежедневно с 8:00 до 22:00
									</li>
									<li class="nav-item d-lg-none pt-2 pb-4">
										<a class="ico-button pe-2 text-decoration-none" href="https://wa.me/79856445775?web=1&app_absent=1" target="blank">
											<img src="' . get_stylesheet_directory_uri() . '/img/ico/whatsapp-ico.svg" />
										</a>
										<a class="ico-button pe-2 text-decoration-none" href="https://t.me/+79856445775" target="blank">
											<img src="'.get_stylesheet_directory_uri().'/img/ico/telegram-ico.svg" />
										</a>
										<a class="ico-button pe-0 text-decoration-none" href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="blank">
											<img src="'.get_stylesheet_directory_uri().'/img/ico/max-ico.svg" />
										</a>
									</li>
									<!-- End mobile menu -->
								</ul>
							',
						'depth' => 2,
						'walker' => new bootstrap_5_wp_nav_menu_walker()
					));
					?>
			</div>
		</div>
	</nav>
</header>

<!-- ==========================================================================
     ХЛЕБНЫЕ КРОШКИ
     ========================================================================== -->
<section class="crumbs bg">

</section>

<!-- ==========================================================================
     АКЦИИ ОТ НАШЕЙ ФАБРИКИ
     ========================================================================== -->
<section class="section-stock bg">
	<div class="container">
		<div class="section-title-wrapper text-center">
			<h2 class="section-title">Акции от нашей фабрики</h2>
			<img src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="Точки" class="img-fluid" />
		</div>
		<div class="row">
			<div class="col-12 col-md-6 mb-4 mb-md-0">
				<img src="<?php echo $theme_uri; ?>/img/card/action-card.webp" class="stock__img" loading="lazy" alt="Скидка до 25%. Акция до 30 июня">
			</div>
			<div class="col-12 col-md-6">
				<img src="<?php echo $theme_uri; ?>/img/card/action-card-2.webp" class="stock__img" loading="lazy" alt="Беспроцентная рассрочка на 1 год. Акция до 30 июня">
			</div>
		</div>
	</div>
</section>

<!-- ==========================================================================
     ПРИМЕРЫ НАШИХ РАБОТ — карточки категорий
     ========================================================================== -->
<section class="works-cat bg">
	<div class="container">
		<div class="row">
			<div class="col text-center section-title-wrapper">
				<h2 class="section-title">Примеры наших работ</h2>
				<img src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="" class="img-fluid" />
			</div>
		</div>
		<div class="row g-4">
			<!-- 1-й ряд: 2 карточки по 6 -->
			<div class="col-12 col-md-6 col-lg-6">
				<a href="/shkafy-cupe" class="works-cat-card">
					<img src="<?php echo $theme_uri; ?>/img/ico/advantage/portfolio-card-1.jpg" alt="Шкафы-купе" loading="lazy" />
					<span class="works-cat-card__title">Шкафы-купе</span>
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-6">
				<a href="/shkafy-raspashnye" class="works-cat-card">
					<img src="<?php echo $theme_uri; ?>/img/ico/advantage/portfolio-card-2.jpg" alt="Шкафы распашные" loading="lazy" />
					<span class="works-cat-card__title">Шкафы распашные</span>
				</a>
			</div>
			<!-- 2-й ряд: 3 карточки по 4 -->
			<div class="col-12 col-md-6 col-lg-4">
				<a href="/dveri-cupe" class="works-cat-card">
					<img src="<?php echo $theme_uri; ?>/img/ico/advantage/portfolio-card-3.jpg" alt="Двери-купе" loading="lazy" />
					<span class="works-cat-card__title">Двери-купе</span>
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<a href="/garderobnye" class="works-cat-card">
					<img src="<?php echo $theme_uri; ?>/img/ico/advantage/portfolio-card-4.jpg" alt="Гардеробные" loading="lazy" />
					<span class="works-cat-card__title">Гардеробные</span>
				</a>
			</div>
			<div class="col-12 col-md-6 col-lg-4">
				<a href="/rabochie-zony" class="works-cat-card">
					<img src="<?php echo $theme_uri; ?>/img/ico/advantage/portfolio-card-5.jpg" alt="Рабочие зоны" loading="lazy" />
					<span class="works-cat-card__title">Рабочие зоны</span>
				</a>
			</div>
		</div>
	</div>
</section>

<!-- ==========================================================================
     ЛИД-ФОРМА
     ========================================================================== -->
<section class="lead bg">
	<img class="lead__photo" src="<?php echo $theme_uri; ?>/img/ico/advantage/lead__photo-2.jpg" alt="" />
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-4 offset-lg-1">
				<div class="lead__form form--light section-title-wrapper">
					<h2 class="section-title">Рассчитаем точную стоимость корпусной мебели за&nbsp;15&nbsp;минут!</h2>
					<p class="lead__subtitle">Опишите нужный проект своими словами. При возможности прикрепите изображение</p>
					<img class="lead__points" src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="" />
					<form method="post" action="<?php echo $theme_uri; ?>/mails/get_calculate.php" enctype="multipart/form-data">
						<div class="form__names d-flex gap-4">
							<input type="text" name="name" class="form__field" placeholder="Ваше имя" />
							<input type="text" name="tel" id="lead_phone_home" class="form__field telMask" placeholder="Ваш телефон" required />
						</div>
						<textarea rows="3" name="mes" class="form__field" placeholder="Опишите шкаф, гардеробную или другую корпусную мебель своими словами, укажите примерные размеры и материалы"></textarea>
						<div class="form__file">
							<span class="form__file-name" id="leadHomeFileName">Файл не выбран</span>
							<label class="btn-grad-outline form__file-label" for="leadHomeFile">Прикрепить файл</label>
							<input type="file" name="file[]" class="form__file-input" id="leadHomeFile" accept=".jpg,.jpeg,.png,.pdf,.heic" multiple onchange="document.getElementById('leadHomeFileName').textContent = this.files.length ? (this.files.length === 1 ? this.files[0].name : this.files.length + ' файла(ов)') : 'Файл не выбран';" />
						</div>
						<input type="hidden" id="g-recaptcha-response-home-lead" name="g-recaptcha-response">
						<button type="submit" class="btn-grad form__submit">Рассчитать</button>
						<div class="topbar__social lead__social">
							<a href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="_blank" aria-label="Max">
								<img src="<?php echo $theme_uri; ?>/img/ico/max-ico.svg" alt="Max" />
							</a>
							<a href="https://t.me/+79856445775" target="_blank" aria-label="Telegram">
								<img src="<?php echo $theme_uri; ?>/img/ico/telegram-ico.svg" alt="Telegram" />
							</a>
							<a href="https://wa.me/79856445775?web=1&app_absent=1" target="_blank" aria-label="WhatsApp">
								<img src="<?php echo $theme_uri; ?>/img/ico/whatsapp-ico.svg" alt="WhatsApp" />
							</a>
						</div>
						<label class="form__agree" for="leadHomeAgree">
							<input type="checkbox" id="leadHomeAgree" class="form__agree-input" checked>
							<span class="form__agree-box"></span>
							<span class="form__agree-text">Согласен на обработку <a href="/privacy/">персональных данных</a></span>
						</label>
					</form>
				</div>
			</div>
		</div>
	</div>
	<img class="lead__photo-mobile" src="<?php echo $theme_uri; ?>/img/ico/advantage/lead__photo-mobile-2.jpg" alt="" />
</section>

<!-- ==========================================================================
     О ФАБРИКЕ
     ========================================================================== -->
<section class="about bg">
	<div class="container">
		<div class="section-title-wrapper text-center">
			<h2 class="section-title">О фабрике</h2>
			<img src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="Точки" class="img-fluid" />
		</div>
		<div class="row align-items-center">
			<div class="col-12 col-md-6 order-2 order-md-1">
				<img class="about__img" src="<?php echo $theme_uri; ?>/img/ico/advantage/about-image.jpg" alt="Мебельная фабрика «Гарантшкаф»" />
			</div>
			<div class="col-12 col-md-6 col-xl-5 offset-xl-1 order-1 order-md-2 about__text">
				<p>Мебельная фабрика «Гарантшкаф» вот уже более 15 лет изготавливает шкафы и другую корпусную мебель. За это время мы научились разбираться в качестве материалов и технологий, применяя в своей работе только лучшие из них. Поэтому мы производим прочную и функциональную мебель по выгодным ценам.</p>
				<p>Мы работаем по индивидуальным эскизам, учитываем особенности помещений, используем современные и качественные материалы, подбирая их исходя из дизайна вашего помещения.</p>
				<p>Количество благодарных клиентов непрестанно растет, как и наша репутация, а положительные отзывы о нас множатся. На то есть несколько причин:</p>
			</div>
		</div>
	</div>
</section>

<!-- ==========================================================================
     ПОЧЕМУ НАМ МОЖНО ДОВЕРИТЬ ЗАКАЗ
     ========================================================================== -->
<section class="why bg">
	<div class="container">
		<div class="section-title-wrapper text-center">
			<h2 class="section-title">Почему нам можно доверить заказ</h2>
			<img src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="Точки" class="img-fluid" />
		</div>
		<div class="row why__grid">
			<div class="col-12 col-md-6">
				<div class="why-card">
					<img class="why-card__icon" src="<?php echo $theme_uri; ?>/img/ico/advantage/advantage-icon-1.svg" alt="" />
					<div class="why-card__body">
						<h3 class="why-card__title">Собственное производство</h3>
						<p class="why-card__text">Это позволяет нам:
							<br>- держать конкурентные цены;
							<br>- контролировать качество продукции;
							<br>- контролировать сроки производства и установки шкафов.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="why-card">
					<img class="why-card__icon" src="<?php echo $theme_uri; ?>/img/ico/advantage/advantage-icon-2.svg" alt="" />
					<div class="why-card__body">
						<h3 class="why-card__title">Отношение к клиентам</h3>
						<p class="why-card__text">Начиная с первого контакта с нашими клиентами мы стараемся выяснить их пожелания, предпочтения и подсказать лучшие, на наш взгляд, решения. Мы не давим на клиентов, не навязываем купить у нас то, что клиенту не нравится или не хочется по каким то причинам.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="why-card">
					<img class="why-card__icon" src="<?php echo $theme_uri; ?>/img/ico/advantage/advantage-icon-3.svg" alt="" />
					<div class="why-card__body">
						<h3 class="why-card__title">Гарантия и репутация</h3>
						<p class="why-card__text">Наша фабрика непрерывно работает с 2011 года по адресу: МО, гор. Лобня, ул. Промышленная, д. 4Д. Мы не заманиваем наших клиентов акциями и ценами ниже себестоимости. Мы делаем свою работу по совести и готовы гарантировать качество по договору.</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6">
				<div class="why-card">
					<img class="why-card__icon" src="<?php echo $theme_uri; ?>/img/ico/advantage/advantage-icon-4.svg" alt="" />
					<div class="why-card__body">
						<h3 class="why-card__title">Замер, дизайн-проект, доставка и сборка - бесплатно</h3>
						<p class="why-card__text">Любая наша услуга включает в себя бесплатный замер в любом районе МО, дизайн-проект, доставку и сборку в один день.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ==========================================================================
     Video section
     ========================================================================== -->
<section class="section-video bg">
	<div class="container">
		<div class="section-title-wrapper text-center">
			<h2 class="section-title">Короткое видео о фабрике</h2>
			<img src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="Точки" class="img-fluid" />
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-9">
				<div style="position: relative">
					<video id="video-player" playsinline="playsinline" loop="loop" poster="<?php echo $theme_uri; ?>/img/video-poster.jpg">
						<source src="<?php echo $theme_uri; ?>/videos/video.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
					</video>
					<div id="play-circle">
						<div id="play" onclick="play();"></div>
					</div>
					<div id="stop-circle" onclick="pause();">
						<div><i class="far fa-stop-circle"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function play() {
			document.getElementById("video-player").play();
			document.getElementById("play-circle").style.display = "none";
			document.getElementById("stop-circle").style.display = "block";
		}
		function pause() {
			document.getElementById("video-player").pause();
			document.getElementById("stop-circle").style.display = "none";
			document.getElementById("play-circle").style.display = "block";
		}
	</script>
</section>

<!-- ==========================================================================
     Reviews section
     ========================================================================== -->
<section class="section-testimonials bg">
	<div class="container">
		<div class="section-title-wrapper text-center">
			<h2 class="section-title">Отзывы о нас в независимых источниках</h2>
			<img src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="Точки" class="img-fluid" />
		</div>

		<div class="text-center pb-5 reviews__yandex">
			<img src="<?php echo $theme_uri; ?>/img/ico/yandex-logo.svg" class="mb-3 yandex-logo" alt="Яндекс">
			<div class="review-rating d-flex align-items-center justify-content-center gap-3">
				<div>
					<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
					<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
					<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
					<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
					<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
				</div>
				<p class="mb-0" style="font-size: 18px; line-height: 1;">4,9 из 5</p>
			</div>
		</div>

		<div class="row justify-content-center">
			<div class="col-12 col-lg-6 col-xl-4 mb-4">
				<div class="review-card rounded h-100">
					<div class="review-header d-flex align-items-center mb-3">
						<div class="review-photo me-3"><img src="<?php echo $theme_uri; ?>/img/ico/icon-4.png" class="rounded-circle" width="50" height="50" alt="Иван"></div>
						<div class="review-info">
							<p class="review-title mb-0">Иван</p>
							<p class="review-date text-muted small mb-0">18 июля 2025</p>
						</div>
					</div>
					<div class="review-rating mb-3">
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
					</div>
					<div class="review-text">
						<p class="review-description">Долго я искал того, кто сможет сделать обычный встроенный шкаф нормально — без ужасных пластиковых уголков, которые до сих пор все для чего-то используют. Просмотрел кучу шкафов и мебели у друзей и родственников — тихий ужас... Нашел фабрику «ГарантШкаф» и… <a href="https://yandex.ru/maps/org/garantshkaf/43131278671/" target="_blank">читать еще</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 col-xl-4 mb-4">
				<div class="review-card rounded h-100">
					<div class="review-header d-flex align-items-center mb-3">
						<div class="review-photo me-3"><img src="<?php echo $theme_uri; ?>/img/ico/icon-5.png" class="rounded-circle" width="50" height="50" alt="Ольга"></div>
						<div class="review-info">
							<p class="review-title mb-0">Ольга</p>
							<p class="review-date text-muted small mb-0">14 июля 2025</p>
						</div>
					</div>
					<div class="review-rating mb-3">
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
					</div>
					<div class="review-text">
						<p class="review-description">В наше время шкаф-купе — это один из самых главных предметов мебели в доме и очень хочется, чтобы он был вместительным, функциональным, красивым и недорогим. Я долго искала вариант, который бы меня устроил, среди готовых не встроенных шкафов, но получалось слишком дорого… <a href="https://yandex.ru/maps/org/garantshkaf/43131278671/" target="_blank">читать еще</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 col-xl-4 mb-4">
				<div class="review-card rounded h-100">
					<div class="review-header d-flex align-items-center mb-3">
						<div class="review-photo me-3"><img src="<?php echo $theme_uri; ?>/img/ico/icon-6.png" class="rounded-circle" width="50" height="50" alt="Маргарита"></div>
						<div class="review-info">
							<p class="review-title mb-0">Маргарита</p>
							<p class="review-date text-muted small mb-0">26 апреля 2025</p>
						</div>
					</div>
					<div class="review-rating mb-3">
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
						<i class="star-filled"><img src="<?php echo $theme_uri; ?>/img/ico/star.svg" alt=""></i>
					</div>
					<div class="review-text">
						<p class="review-description mb-0">Мы заказали пару месяцев назад в детскую комнату шкаф-купе. Комната маленькая (9 квадратов) и нам не позволительно тратить место на покупные низкие шкафы… <a href="https://yandex.ru/maps/org/garantshkaf/43131278671/" target="_blank">читать еще</a>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="text-center mt-4">
			<a href="https://yandex.ru/maps/org/garantshkaf/43131278671/" target="_blank" class="btn-grad works__more">Все отзывы</a>
		</div>
	</div>
</section>

<!-- ==========================================================================
     DIRECTOR SECTION
     ========================================================================== -->
<section class="director bg">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-12 col-lg-6 col-xl-4 offset-xl-1 text-center mb-4 mb-lg-0">
				<div class="d-xl-none section-title-wrapper text-center">
					<h2 class="section-title">Обращение руководителя фабрики</h2>
					<img src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="Точки" class="img-fluid mb-0" />
				</div>
				<img src="<?php echo $theme_uri; ?>/img/director.png" alt="Орлов Игорь Львович" class="img-fluid director-photo" />
			</div>
			<div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
				<div class="d-none d-xl-block section-title-wrapper">
					<h2 class="section-title">Обращение руководителя фабрики</h2>
					<img src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="Точки" class="img-fluid mb-0" />
				</div>
				<p class="director-quote">«Мы производим шкафы, гардеробные и другую корпусную мебель с 2011 года. Нам нравится наша работа, нравится делать красивые вещи, нравится получать слова благодарности от наших клиентов. Приятно, когда твоя работа радует людей.<br><br>Каждому нашему клиенту мы гарантируем: качественную и красивую продукцию без наценок посредников и индивидуальный подход.»</p>
				<p class="director-name">Орлов Игорь Львович</p>
			</div>
		</div>
	</div>
</section>

<!-- ==========================================================================
     КВИЗ КАЛЬКУЛЯТОРА
     ========================================================================== -->
<?php get_template_part('template-parts/quiz-new/calculator_quiz-new'); ?>

<!-- ==========================================================================
     КАК МЫ РАБОТАЕМ
     ========================================================================== -->
<section class="howto bg">
	<div class="container">
		<div class="section-title-wrapper text-center">
			<h2 class="section-title">Как мы работаем</h2>
			<img src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="Точки" class="img-fluid" />
		</div>
		<div class="row justify-content-around">
			<div class="col-md-6 col-lg-3">
				<div class="howto-step">
					<div class="howto-step__head">
						<span class="howto-step__num">1</span>
						<img class="howto-step__icon" src="<?php echo $theme_uri; ?>/img/ico/advantage/step-1.svg" alt="" />
					</div>
					<h3 class="howto-step__title">Первичный контакт</h3>
					<p class="howto-step__text">Свяжитесь с нами любым удобным способом, расскажите, что вы хотите. При наличии дизайн-проекта, изображения, рисунка, размеров или другой информации — пришлите нам на почту, в Max, Telegram, WhatsApp или в форме обратной связи.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="howto-step">
					<div class="howto-step__head">
						<span class="howto-step__num">2</span>
						<img class="howto-step__icon" src="<?php echo $theme_uri; ?>/img/ico/advantage/step-2.svg" alt="" />
					</div>
					<h3 class="howto-step__title">Расчёт стоимости</h3>
					<p class="howto-step__text">На основании полученной от вас информации мы сделаем предварительный расчёт стоимости и сроков производства. При необходимости уточняем детали.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="howto-step">
					<div class="howto-step__head">
						<span class="howto-step__num">3</span>
						<img class="howto-step__icon" src="<?php echo $theme_uri; ?>/img/ico/advantage/step-3.svg" alt="" />
					</div>
					<h3 class="howto-step__title">Заключение договора</h3>
					<p class="howto-step__text">Если вас всё устраивает, мы приезжаем к вам на замер, утверждаем сроки, материалы, заключаем договор. Только здесь вы вносите предоплату 30%, и заказ поступает в производство.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="howto-step mb-0">
					<div class="howto-step__head">
						<span class="howto-step__num">4</span>
						<img class="howto-step__icon" src="<?php echo $theme_uri; ?>/img/ico/advantage/step-4.svg" alt="" />
					</div>
					<h3 class="howto-step__title">Доставка и установка</h3>
					<p class="howto-step__text">После окончания производства доставляем и устанавливаем шкафы, гардеробную и другую корпусную мебель в заранее оговорённые дату и время. После установки производим окончательные расчёты. Убираем весь мусор.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ==========================================================================
     FAQ section
     ========================================================================== -->
<section class="faq bg">
	<div class="container">
		<div class="section-title-wrapper text-center">
			<h2 class="section-title">Частые вопросы</h2>
			<img src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="Точки" class="img-fluid" />
		</div>
		<div class="row align-items-start">
			<div class="col-12 col-lg-6">
				<div class="accordion" id="faqAccordion">
					<div class="accordion-item">
						<h4 class="accordion-header" id="faqH1">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC1" aria-expanded="false" aria-controls="faqC1">Сколько реально требуется времени на производство и установку шкафов, гардеробных и другой корпусной мебели?</button>
						</h4>
						<div id="faqC1" class="accordion-collapse collapse" aria-labelledby="faqH1" data-bs-parent="#faqAccordion">
							<div class="accordion-body">Мы не обещаем сделать мебель за день, два, три или даже 5 дней. От заказа до установки в среднем проходит 1,5–2 недели, после чего мы привезём и установим всё одним днём.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h4 class="accordion-header" id="faqH2">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC2" aria-expanded="false" aria-controls="faqC2">Насколько надёжная ваша компания?</button>
						</h4>
						<div id="faqC2" class="accordion-collapse collapse" aria-labelledby="faqH2" data-bs-parent="#faqAccordion">
							<div class="accordion-body">Мы делаем шкафы, гардеробные и другую корпусную мебель с 2011 года. Имеем собственное производство, которое Вы можете посетить, чтобы убедиться, что мы сами изготавливаем всю мебель, а не поручаем это другим, а с вас берём дополнительную наценку.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h4 class="accordion-header" id="faqH3">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC3" aria-expanded="false" aria-controls="faqC3">Как выбрать наполнение и дизайн шкафов, гардеробных и другой корпусной мебели?</button>
						</h4>
						<div id="faqC3" class="accordion-collapse collapse" aria-labelledby="faqH3" data-bs-parent="#faqAccordion">
							<div class="accordion-body">Наши замерщики помогут Вам с выбором материалов и наполнения с учётом Ваших пожеланий и конструктивных возможностей помещения.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h4 class="accordion-header" id="faqH4">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC4" aria-expanded="false" aria-controls="faqC4">С какими производителями материалов вы работаете?</button>
						</h4>
						<div id="faqC4" class="accordion-collapse collapse" aria-labelledby="faqH4" data-bs-parent="#faqAccordion">
							<div class="accordion-body">Мы работаем с ведущими производителями ЛДСП — EGGER и «Русский ламинат». Для фасадов и дверей используем качественную фурнитуру и комплектующие проверенных брендов.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h4 class="accordion-header" id="faqH5">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC5" aria-expanded="false" aria-controls="faqC5">Как я могу узнать точную стоимость будущего шкафа, гардеробной и другой корпусной мебели?</button>
						</h4>
						<div id="faqC5" class="accordion-collapse collapse" aria-labelledby="faqH5" data-bs-parent="#faqAccordion">
							<div class="accordion-body">После замера и выбора материалов мы сразу скажем Вам окончательную стоимость. Она включает изготовление, доставку и установку. Никаких скрытых платежей!</div>
						</div>
					</div>
					<div class="accordion-item">
						<h4 class="accordion-header" id="faqH6">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC6" aria-expanded="false" aria-controls="faqC6">Насколько конкурентные ваши цены?</button>
						</h4>
						<div id="faqC6" class="accordion-collapse collapse" aria-labelledby="faqH6" data-bs-parent="#faqAccordion">
							<div class="accordion-body">У нас собственное производство и долгосрочное сотрудничество с поставщиками материалов. Поэтому мы можем гарантировать одни из самых низких цен!</div>
						</div>
					</div>
					<div class="accordion-item mb-0">
						<h4 class="accordion-header" id="faqH7">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC7" aria-expanded="false" aria-controls="faqC7">Какие гарантии вы даёте?</button>
						</h4>
						<div id="faqC7" class="accordion-collapse collapse" aria-labelledby="faqH7" data-bs-parent="#faqAccordion">
							<div class="accordion-body">Мы делаем качественную мебель и исполняем все обязательства и гарантии согласно договору!</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 text-center">
				<img class="faq__img" src="<?php echo $theme_uri; ?>/img/ico/advantage/faq__img.jpg" alt="Частые вопросы" />
			</div>
		</div>
	</div>
</section>

<!-- ==========================================================================
     ФОРМА: «Уже есть проект от другого производителя?»
     ========================================================================== -->
<section class="lead lead-2 bg">
	<img class="lead__photo" src="<?php echo $theme_uri; ?>/img/ico/advantage/lead__photo-1.jpg" alt="" />
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-4 offset-lg-1">
				<div class="lead__form form--light section-title-wrapper">
					<h2 class="section-title">Уже есть проект от другого производителя?</h2>
					<p class="lead__subtitle">Пересчитаем его стоимость на нашей фабрике с дополнительной скидкой 10%</p>
					<img class="lead__points" src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="" />
					<form method="post" action="<?php echo $theme_uri; ?>/mails/get_calculate.php" enctype="multipart/form-data">
						<div class="form__names d-flex gap-4">
							<input type="text" name="name" class="form__field" placeholder="Ваше имя" />
							<input type="text" name="tel" id="recalc_phone_home" class="form__field telMask" placeholder="Ваш телефон" required />
						</div>
						<div class="form__file">
							<span class="form__file-name" id="recalcHomeFileName">Файл не выбран</span>
							<label class="btn-grad-outline form__file-label" for="recalcHomeFile">Прикрепить файл</label>
							<input type="file" name="file[]" class="form__file-input" id="recalcHomeFile" accept=".jpg,.jpeg,.png,.pdf,.heic" multiple onchange="document.getElementById('recalcHomeFileName').textContent = this.files.length ? (this.files.length === 1 ? this.files[0].name : this.files.length + ' файла(ов)') : 'Файл не выбран';" />
						</div>
						<input type="hidden" id="g-recaptcha-response-home-recalc" name="g-recaptcha-response">
						<button type="submit" class="btn-grad form__submit">Пересчитать</button>
						<div class="topbar__social lead__social">
							<a href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="_blank" aria-label="Max">
								<img src="<?php echo $theme_uri; ?>/img/ico/max-ico.svg" alt="Max" />
							</a>
							<a href="https://t.me/+79856445775" target="_blank" aria-label="Telegram">
								<img src="<?php echo $theme_uri; ?>/img/ico/telegram-ico.svg" alt="Telegram" />
							</a>
							<a href="https://wa.me/79856445775?web=1&app_absent=1" target="_blank" aria-label="WhatsApp">
								<img src="<?php echo $theme_uri; ?>/img/ico/whatsapp-ico.svg" alt="WhatsApp" />
							</a>
						</div>
						<label class="form__agree" for="recalcHomeAgree">
							<input type="checkbox" id="recalcHomeAgree" class="form__agree-input" checked>
							<span class="form__agree-box"></span>
							<span class="form__agree-text">Согласен на обработку <a href="/privacy/">персональных данных</a></span>
						</label>
					</form>
				</div>
			</div>
		</div>
	</div>
	<img class="lead__photo-mobile" src="<?php echo $theme_uri; ?>/img/ico/advantage/lead__photo-mobile-1.jpg" alt="" />
</section>


<!-- ==========================================================================
     ПОДВАЛ
     ========================================================================== -->
<footer class="footer">
	<div class="container">
		<div class="row">

			<!-- Колонка 1: логотип + контакты -->
			<div class="col-12 col-lg-3 order-1 order-lg-1">
				<a class="footer__logo" href="<?php echo home_url('/'); ?>">
					<img src="<?php echo $theme_uri; ?>/img/ico/logo.svg" alt="Гарантшкаф" />
				</a>
				<div class="footer__contacts">
					<a class="footer__contact" href="https://yandex.ru/maps/org/garantshkaf/43131278671/" target="_blank">
						<span class="footer__contact-ico"><img src="<?php echo $theme_uri; ?>/img/ico/advantage/map.svg" alt="" /></span>
						<span><?php echo $address; ?></span>
					</a>
					<div class="footer__contact">
						<span class="footer__contact-ico"><img src="<?php echo $theme_uri; ?>/img/ico/advantage/time.svg" alt="" /></span>
						<span>Пн–Вс, с 8:00 до 22:00</span>
					</div>
					<a class="footer__contact" href="tel:89856445775">
						<span class="footer__contact-ico"><img src="<?php echo $theme_uri; ?>/img/ico/advantage/mobile.svg" alt="" /></span>
						<span>8 (985) 644-57-75</span>
					</a>
				</div>
			</div>

			<!-- Меню (левая колонка) -->
			<div class="col-6 col-lg-3 order-3 order-lg-2">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'footer-menu-left',
					'container'      => false,
					'menu_class'     => 'footer__menu',
					'depth'          => 2,
					'fallback_cb'    => '__return_false',
					'walker'         => new bootstrap_5_wp_nav_menu_walker(),
				));
				?>
			</div>

			<!-- Меню (правая колонка) -->
			<div class="col-6 col-lg-3 order-4 order-lg-3">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'footer-menu-right',
					'container'      => false,
					'menu_class'     => 'footer__menu',
					'depth'          => 2,
					'fallback_cb'    => '__return_false',
					'walker'         => new bootstrap_5_wp_nav_menu_walker(),
				));
				?>
			</div>

			<!-- Колонка 4: контакты + соцсети -->
			<div class="col-12 col-lg-3 order-2 order-lg-4 footer__col4-contact">
				<div class="footer__col4-contacts">
					<a class="footer__contact" href="mailto:garantshkaf@mail.ru">
						<span class="footer__contact-ico"><img src="<?php echo $theme_uri; ?>/img/ico/advantage/email.svg" alt="" /></span>
						<span>garantshkaf@mail.ru</span>
					</a>
					<a class="footer__contact" href="#" data-bs-toggle="modal" data-bs-target="#callback">
						<span class="footer__contact-ico"><img src="<?php echo $theme_uri; ?>/img/ico/advantage/callback.svg" alt="" /></span>
						<span>Обратный звонок</span>
					</a>
					<a class="footer__contact" href="/calculator">
						<span class="footer__contact-ico"><img src="<?php echo $theme_uri; ?>/img/ico/advantage/calc.svg" alt="" /></span>
						<span>Рассчитать стоимость</span>
					</a>
				</div>
				<div class="footer__social">
					<a href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="_blank" aria-label="Max">
						<img src="<?php echo $theme_uri; ?>/img/ico/max-ico.svg" alt="Max" />
					</a>
					<a href="https://t.me/+79856445775" target="_blank" aria-label="Telegram">
						<img src="<?php echo $theme_uri; ?>/img/ico/telegram-ico.svg" alt="Telegram" />
					</a>
					<a href="https://wa.me/79856445775?web=1&app_absent=1" target="_blank" aria-label="WhatsApp">
						<img src="<?php echo $theme_uri; ?>/img/ico/whatsapp-ico.svg" alt="WhatsApp" />
					</a>
				</div>
			</div>

		</div>
	</div>

	<!-- Тонкая линия во всю ширину -->
	<div class="footer__line"></div>

	<div class="container">
		<div id="footer__new">
			<p class="footer__new__copy">©<?php echo date('Y'); ?> Мебельная фабрика «Гарантшкаф»</p>
			<p class="footer__new__dev">Создание, продвижение и поддержка сайтов: <a href="https://site100.ru" target="_blank">site<span>100</span>.ru</a></p>
		</div>
	</div>
</footer>


<?php include 'footer.php'; ?>