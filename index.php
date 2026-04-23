<?php
	
	/**
	 * Template Name: Главная
	 * Template Post Type: page
	**/
	
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
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" />

        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/favicon-light-1.svg" type="image/x-icon" id="favicon">
        
		<title><?php echo $product; ?> и&nbsp;другая корпусная&nbsp;мебель на&nbsp;заказ от&nbsp;производителя<?php echo $location; ?></title>
		
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/favicon-light-1.svg" type="image/x-icon" id="favicon">
        
		<?php if ( $counter_head = get_theme_mod( 'mytheme_counter_head' ) ) : ?>
			<!-- Код счетчика (head) -->
			<?php echo $counter_head; ?>
		<?php endif; ?>
	</head>
	<body>
    
		<div id="sp-home" class="scroll-points"></div>
		<section id="main" class="home-section">
            <div class="parallax-home-section"></div>
				<!-- <div class="divider-left"></div>
				<div class="divider-right"></div> -->
				<!-- style="max-width: 1700px; border-right: 1px solid rgba(153, 153, 153, 0.9); border-left: 1px solid rgba(153, 153, 153, 0.9);" -->
				<div class="container" id="main-divider">
					<div class="row row-nav">
						<div class="col-md-12 d-flex justify-content-end col-nav">
							<nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block py-0">
								<div class="container-fluid px-0">
									<!-- <a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-dark.svg" class="img-fluid" style="max-width: 225px;"></a> -->
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
										data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
										aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
									<nav class="header-nav-top navbar navbar-expand-lg navbar-light d-none d-lg-block">
										<div class="container">
											<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
												data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
												aria-label="Toggle navigation">
												<span class="navbar-toggler-icon"></span>
											</button>
											<div class="collapse navbar-collapse" id="navbarSupportedContent">
												<ul class="navbar-nav ms-auto align-items-center top-navbar">
													<li class="nav-item me-3">
														<a class="nav-link" href="archive-product-portfolio.html#">
															<div class="d-flex nav-link-inner">
																<div class="nav-li-float-left">
																	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/location-ico.svg" />
																</div>
																<div class="nav-li-float-right"><?php echo $address; ?></div>
																<div style="clear: both"></div>
															</div>
														</a>
													</li>
													<li class="nav-item me-3">
														<a class="nav-link" href="archive-product-portfolio.html#">
															<div class="d-flex nav-link-inner">
																<div class="nav-li-float-left">
																	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" />
																</div>
																<div class="nav-li-float-right">
																	Пн - Вс <br />с 8:00 до 22:00
																</div>
																<div style="clear: both"></div>
															</div>
														</a>
													</li>
													<li class="nav-item me-3">
														<a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#callback">
															<div class="d-flex nav-link-inner">
																<div class="nav-li-float-left">
																	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-ico.svg" />
																</div>
																<div class="nav-li-float-right">
																	Обратный звонок
																</div>
																<div style="clear: both"></div>
															</div>
														</a>
													</li>
													<li class="nav-item me-4">
														<a class="top-menu-tel nav-link" href="tel:89856445775">
															<div class="d-flex nav-link-inner">
																<div class="nav-li-float-left">
																	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/mobile-phone-ico.svg" />
																</div>
																<div class="nav-li-float-right phone-number">
																	8 (985) 644-57-75
																</div>
																<div style="clear: both"></div>
															</div>
														</a>
													</li>
													<li class="nav-item me-2">
														<a class="nav-link ico-button" href="https://t.me/+79856445775" target="_blank">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg" />
														</a>
													</li>
													<li class="nav-item me-2">
														<a class="nav-link ico-button" href="https://wa.me/79856445775?web=1&amp;app_absent=1" target="_blank">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg" />
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link ico-button" href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="_blank">
															<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max-ico.svg" />
														</a>
													</li>
												</ul>
											</div>
										</div>
									</nav>
								</div>
							</nav>
						</div>

						<!-- <div class="divider"></div> -->
						<div class="container">
							<div class="row row-bottom-nav d-flex">
								<div class="col-md-12 bottom-nav">
									<nav class="header-nav-bottom navbar navbar-expand-lg navbar-light header-bottom">
										<div class="container bottom-container">
											<a class="navbar-brand" href="#">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo.svg" />
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
																		<span><?php echo $address; ?></span>
																	</div>
																	<a  class="nav-link top-menu-tel pt-1 pb-1"  href="tel:89856445775">
																		8 (985) 644-57-75
																	</a>
																	<div  class="mb-2"  style="font-size: 12px;  font-family: Gilroy-Light;  text-transform: none;">
																		<img  src="' . get_stylesheet_directory_uri() . '/img/ico/clock-ico.svg"  style="width: 10px; position: relative; top: 3px"  class="me-1 mb-2"/>
																		Ежедневно с 8:00 до 22:00
																	</div>
																</li>
																<li class="nav-item d-lg-none pb-4">
																	<a class="ico-button pe-2" href="https://wa.me/79856445775?web=1&app_absent=1" target="blank">
																		<img src="' . get_stylesheet_directory_uri() . '/img/ico/whatsapp-ico.svg"/>
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
						</div><!-- /.container -->
					</div><!-- ./row -->
					<div class="container">
						<div class="row">
							<div class="col-lg-7 offset-lg-1">
								<h1><span><?php echo $product; ?></span> и&nbsp;другая <span>корпусная&nbsp;мебель</span> на&nbsp;заказ от&nbsp;производителя <span><?php echo $location; ?></span></h1>
								<ul class="main-list">
									<li>
										<div class="row">
											<div class="col-2 col-md-1 offset-md-1">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/check.png" />
											</div>
											<div class="col-10 col-md-7">
												Замер, дизайн-проект, доставка и монтаж — <span>бесплатно!</span>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-2 col-md-1 offset-md-1">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/check.png" />
											</div>
											<div class="col-10 col-md-8">
												Беспроцентная <span>рассрочка&nbsp;на&nbsp;год!</span>
											</div>
										</div>
									</li>
									<li>
										<div class="row">
											<div class="col-2 col-md-1 offset-md-1">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/check.png" />
											</div>
											<div class="col-10 col-md-7">
												Работаем в Москве и Московской области
											</div>
										</div>
									</li>
								</ul>
							</div>
							<div class="col-lg-4 px-0">
								<div class="rasschet">
									<h2 class="forma">Рассчитаем точную стоимость шкафа за 15 минут!<!-- Хотите сразу рассчитать стоимость Вашего шкафа? --></h2>
									<p class="mb-2">Опишите шкаф-купе своими словами. При возможности прикрепите изображение</p>
									<form  method="post"  action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate.php"  enctype="multipart/form-data">
										<textarea  type="text"  rows="3"  name="mes"  class="form-control"  placeholder="Например: длина, ширина, глубина, количество дверей, материал дверей, форма, вид шкафа и т.д."  style="height: auto; margin-top: 15px; margin-bottom: 15px"></textarea>
										<p class="input-group custom-file-button">
											<label class="input-group-text" for="inputGroupFile">Прикрепить</label>
											<input  type="file"  name="file[]"  class="form-control"  id="inputGroupFile"  accept=".jpg,.jpeg,.png,.pdf,.heic"  multiple />
										</p>
										<p>
											<input  type="text"  name="name"  class="form-control"  style="margin-top: 15px"  placeholder="Ваше Имя"/>
										</p>
										<p>
											<input  type="text"  name="tel"  id="phone_mask_3"  class="form-control telMask"  style="margin-top: 15px"  placeholder="Ваш телефон"  required/>
										</p>

										<!-- <label class="form-check-label" for="exampleCheck11">
											<input type="checkbox"  class="form-check-input"  id="exampleCheck11"  checked />
											Я согласен на обработку моих <a href="">персональных данных</a>.
										</label> -->
								
										<input type="hidden" id="g-recaptcha-response-order-1-home" name="g-recaptcha-response">
										<button  type="submit"  class="btn btn-danger"  style="width: 100%">
											Отправить
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				<header id="sliding-header" class="shadow">
					<!-- Header nav bottom -->
					<nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
						<div class="container">
							<a class="navbar-brand" href="archive-product-portfolio.html#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-dark-theme.svg" />
							</a>
							<div class="d-lg-none">
								<a  class="top-menu-tel pt-1 pb-0"  style="font-size: 14px"  href="tel:89856445775">
									8 (985) 644-57-75
								</a>
								<div style="font-size: 10px;  font-family: Gilroy-Light;  text-transform: none;">
									<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" style="width: 12px; position: relative; top: -1px"  class="me-1"/>
									Пн-Вс 8:00-22:00
								</div>
							</div>
							<button  class="navbar-toggler"  type="button"  data-bs-toggle="collapse"  data-bs-target="#sliding-header-collapse"  aria-controls="sliding-header-collapse"  aria-expanded="false"  aria-label="Toggle navigation">
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
														<img  src="'.get_stylesheet_directory_uri().'/img/ico/location-ico.svg"  style="width: 10px" class="me-1"/>
														<span>'.$address.'</span>
													</div>
													<a  class="nav-link top-menu-tel pt-1 pb-1"  href="tel:89856445775">
														8 (985) 644-57-75
													</a>
													<img  src="'.get_stylesheet_directory_uri().'/img/ico/clock-ico.svg"  style="width: 10px; position: relative; top: 2px"  class="me-1 mb-2"/>
													Ежедневно с 8:00 до 22:00
												</li>
												<li class="nav-item d-lg-none pt-2 pb-4">
													<a class="ico-button pe-2 text-decoration-none" href="https://wa.me/79856445775?web=1&app_absent=1" target="blank">
														<img src="'.get_stylesheet_directory_uri().'/img/ico/whatsapp-ico.svg" />
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
					<!-- /Header nav bottom -->
				</header>
		</section>


		<!-- Video section -->
		<div id="sp-video" class="scroll-points"></div>
		<section id="video">
			<div id="video-container" class="container">
				<div class="row">
					<div class="col-md-10 offset-md-1">
					  <h2><span>01</span> / Посмотрите нашу видеопрезентацию</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-8">
						<div style="position: relative">
							<video  id="video-player" playsinline="playsinline"  loop="loop" poster="https://garantshkaf.ru/wp-content/themes/mozaika-garantshkaf/img/video-poster.jpg">
								<!-- muted="muted" autoplay="autoplay" -->
								<!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
								<source  src="<?php echo get_stylesheet_directory_uri(); ?>/videos/video.mp4"  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'/>
								<!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
							</video>
							<div id="play-circle">
								<div id="play" onclick="play();"></div>
							</div>
							<div id="stop-circle" onclick="pause();">
								<div>
									<i class="far fa-stop-circle"></i>
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
					</div>
				</div>
			</div>
		</section>
		<!-- End video section -->

    
	
		<!-- Portfolio section -->
		<div id="sp-portfolio" class="scroll-points"></div>
		<section id="portfolio">
			<div class="container" style="max-width: 1700px;  border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<h2><span>02</span> / Наши последние работы</h2>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-9">	
						<div class="row justify-content-around">
							<?php
								$query = new WP_Query( array(
									'post_type' => 'closet',
									'order'		=> 'ASC'
								) );
								
								while ( $query->have_posts() ) { $query->the_post();
									$post_id = get_the_id(); ?>
									
									<div class="col-md-5 mb-5">
										<h3 class="mb-3"><?php the_title(); ?></h3>
										<div id="carousel-<?php echo $post_id; ?>" class="carousel slide mb-3" data-bs-ride="false"  data-bs-interval="false" style="overflow: hidden">
											<div class="carousel-inner shadow rounded-large">
												<?php
													$images = get_post_gallery_images();
													$count = 0;
													foreach ( $images as $image ) {
														$image_id = attachment_url_to_postid( $image ); ?>
														<div class="carousel-item<?php if ( $count == 0 ) echo ' active'; ?>">
															<a onClick="galleryOn('gallery-<?php echo $post->ID; ?>','img-<?php echo $post->ID; ?>-<?php echo $count; ?>');">	
																<div class="light">
																	<img data-src="<?php echo $image; ?>" class="d-block w-100 lazyload rounded-large" loading="lazy" alt="...">
																	<div class="magnifier"></div>
																</div>
															</a>
														</div>
														<?php
															$count = $count + 1;
													} ?>
											</div>
											
											<button class="carousel-control-prev" type="button" data-bs-target="#carousel-<?php echo $post_id; ?>"  data-bs-slide="prev">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/arrow-left.svg">
											</button>
											<button class="carousel-control-next" type="button" data-bs-target="#carousel-<?php echo $post_id; ?>"  data-bs-slide="next">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/arrow-right.svg">
											</button>
										</div>
										<p class="product-description"><?php the_excerpt(); ?></p>
									</div>
								<?php }
							?>
						</div>
					</div>	
				</div>
			</div>
		</section>

   
		<!--uznat stoimost shkafa-->
		<section id="uznat-stoimost" class="pt-5 pt-md-0">
			<div class="container" style="max-width: 1700px;  border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
					  <h3 class="text-center">
						Хотите узнать точную стоимость Вашего шкафа?
					  </h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-lg-6">
								<div class="row">
									<div class="col-2">
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/question.png" class="img-fluid" />
									</div>
									<div class="col-10">
										<p class="mb-2">Рассчитаем точную стоимость за 15 минут! Опишите шкаф своими словами. При необходимости прикрепите изображение</p>
										<form  method="post"  action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate.php" enctype="multipart/form-data">
											<textarea  type="text"  rows="3"  name="mes"  class="form-control"  placeholder="Например: длина, ширина, глубина, количество дверей, материал дверей, форма, вид шкафа и т.д." style="height: auto;  margin-top: 15px;  margin-bottom: 15px;"></textarea>
											<p class="input-group custom-file-button">
												<label class="input-group-text" for="inputGroupFile3-3">Прикрепить</label>
												<input  type="file"  name="file[]"  class="form-control"  style="border: none"  id="inputGroupFile3-3"  accept=".jpg,.jpeg,.png,.pdf,.heic"  multiple=""/>
											</p>
											<p>
												<input  type="text"   name="name"  class="form-control"  style="margin-top: 15px"  placeholder="Ваше Имя"/>
											</p>
											<p>
												<input  type="text"  name="tel" id="phone_mask_3"  class="form-control telMask"  style="margin-top: 15px"  placeholder="Ваш телефон"  required/>
											</p>
											<label class="form-check-label" for="exampleCheck11">
												<input  type="checkbox"  class="form-check-input"  id="exampleCheck11" checked />
													Я согласен на обработку моих <a href="index.html">персональных данных</a>.
											</label>

											<input type="hidden" id="g-recaptcha-response-order-2" name="g-recaptcha-response">
											<button  type="submit"  class="btn btn-danger"  style="width: 100%">
												Отправить
											</button>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-6 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/question-shkaf.png"  class="question-img img-fluid"/>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--uznat stoimost shkafa-->


		<!--About-->
		<div id="sp-about" class="scroll-points"></div>
		<section id="about">
			<div  class="container" style="max-width: 1700px;  border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
				<div class="row">
					<div class="col-lg-4 offset-lg-1">
						<h2><span>03</span> / Узнайте о нас</h2>
					</div>
					<div class="col-lg-7">
						<h3>ГАРАНТШКАФ</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-lg-6 order-2 order-lg-1">
								<p>Мебельная фабрика <strong>"ГарантШкаф"</strong> вот уже 14 лет изготавливает шкафы-купе и корпусную мебель. За это
								время мы научились разбираться в качестве материалов и технологий, применяя в своей работе только лучшие из них. Поэтому мы производим прочную и функциональную мебель по выгодным ценам.</p>
								<p>Мы работаем по индивидуальным эскизам, учитываем особенности помещений, используем современные и качественные материалы, подбирая их исходя из дизайна Вашего помещения.</p>
								<p>Количество благодарных клиентов непрестанно растет, как и наша репутация, а положительные отзывы о нас множатся. На то есть несколько причин:</p>
							</div>
							<div class="col-lg-6 text-right order-1 order-lg-2">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about.jpg" class="img-fluid garantshaf" />
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<h4>За что нас выбирают:</h4>
								<div class="row">
									<div class="col-lg-5">
										<div class="row">
											<div class="col-3 offset-md-1">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/proizvodstvo.png" class="img-fluid" />
											</div>
											<div class="col-8">
												<h5>Свое <br />производство</h5>
											</div>
											<div class="col text-center preimushestvo">
												<p>Это позволяет нам:</p>
												<ul>
													<li>
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/list-ico.png" class="" />
														держать конкурентные цены;
													</li>
													<li>
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/list-ico.png" class="" />
														контролировать качество продукции;
													</li>
													<li>
														<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/list-ico.png" class="" />
														контролировать сроки производства и установки шкафов.
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-lg-5 offset-lg-2">
										<div class="row">
											<div class="col-3 offset-md-1">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/otnoshenie.png" class="img-fluid" />
											</div>
											<div class="col-8">
												<h5>Отношение <br />к клиентам</h5>
											</div>
											<div class="col text-center preimushestvo">
												<p>Начиная с первого контакта с нашими клиентами мы стараемся выяснить их пожелания, предпочтения и подсказать лучшие, на наш взгляд, решения. Мы не давим на клиентов, не навязывать купить у нас то, что клиенту не нравится или не хочется по каким то причинам.</p>
											</div>
										</div>
									</div>
									<div class="col-lg-6 offset-lg-3">
										<div class="row">
											<div class="col-3 offset-md-1">
												<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/garantii.png" class="img-fluid" />
											</div>
											<div class="col-8">
												<h5>Гарантия и <br />репутация</h5>
											</div>
											<div class="col text-center preimushestvo last-element">
												<p>Наша фабрика непрерывно работает с 2011 года по адресу: МО, гор. Лобня, ул. Промышленная, д. 4Д.</p>
												<p>Мы не заманиваем наших клиентов акциями и ценами ниже себестоимости. Мы делаем свою работу по совести и готовы гарантировать качество по договору.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--About-->


		<!-- Testimonials section -->
		<div id="sp-testimonials" class="scroll-points"></div>
		<section id="reviews">
			<div  class="container"  style="max-width: 1700px;  border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
				<div class="row">
					<div class="col-md-10 offset-md-1">
						<h2><span>04</span> / прочтите отзывы наших клиентов</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div id="carouselTestimonials"  class="carousel slide"  data-bs-ride="carousel" data-bs-interval="5555">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="row justify-content-center">
										<div class="col-md-3">
											<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials/testimonial-1.jpg"  class="d-block w-100 rounded mb-3 mb-md-0"  alt="..."/>
										</div>
										<div class="col-md-6">
											<h3>Ольга, Москва</h3>
											<p class="mt-0">
												<i class="fas fa-quote-left text-secondary me-2"></i>
												<i>В наше время шкаф-купе - это один из самых главных предметов мебели в доме и очень хочется, чтобы он был вместительным, функциональным, красивым и недорогим. Я долго искала вариант, который бы меня устроил, среди готовых не встроенных шкафов, но получалось слишком дорого. Почему-то я была уверена, что встроенный будет стоить еще дороже, оказалось, что наоборот. На тот момент в проекте был только шкаф, в отношении остальной мебели не было даже наметок по цвету и дизайну, именно по этой причине делали шкаф 2-цветным, что в будущем позволит подобрать мебель уже 2-х цветов. Уже после установки поняли, что 1-цветный вариант смотрелся бы очень громоздко, т.к. ширина шкафов 60 см и размер угла 240*260 см (комната 16 кв.м).</i>
												<i class="fas fa-quote-right text-secondary ms-2"></i>
											</p>
											<a  href="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials/testimonial-1-1.jpg" target="_blank">Оригинал отзыва</a>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row justify-content-center">
										<div class="col-md-3">
											<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials/testimonial-2.jpg"  class="d-block w-100 rounded mb-3 mb-md-0" alt="..."/>
										</div>
										<div class="col-md-6">
											<h3>Маргарита, Москва</h3>
											<p class="mt-0">
												<i class="fas fa-quote-left text-secondary me-2"></i>
												<i>Мы заказали пару месяцев назад в детскую комнату шкаф-купе. Комната маленькая (9 квадратов) и нам не позволительно тратить место на покупные низкие шкафы. Наша цель занять все место до потолка. К нам пришел мастер от фирмы "ГарантШкаф", который хорошо разбирается в этом вопросе и посоветовал, как сделать лучше. После того как мы выдвинули наши пожелания, он предоставил нам проект. Чтобы мы визуально в компьютере могли увидеть свой шкаф. После этого мы выбрали цвет, фурнитуру. Шкаф  получился большой вместительный. Большой плюс, что двери раздвигаются, а не открываются, как раньше, это большое экономии места. Нам сделали шуфляды выдвижные с автодоводом - очень удобно.</i>
												<i class="fas fa-quote-right text-secondary ms-2"></i>
											</p>
											<a href="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials/testimonial-2-2.jpg"  target="_blank">Оригинал отзыва</a>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="row justify-content-center">
										<div class="col-md-3">
											<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials/testimonial-3.jpg"  class="d-block w-100 rounded mb-3 mb-md-0" alt="..."/>
										</div>
										<div class="col-md-6">
											<h3>Иван, Одинцово</h3>
											<p class="mt-0">
												<i class="fas fa-quote-left text-secondary me-2"></i>
												<i>Долго я искал того, кто сможет сделать обычный встроенный шкаф нормально — без ужасных пластиковых уголков, которые до сих пор все для чего-то используют. Просмотрел кучу шкафов и мебели у друзей и родственников — тихий ужас... Нашел фабрику "ГарантШкаф" и получилось более чем хорошо! Вместо уголков все сделано на евро-винтах и хитрых штуковинах, которые прячутся внутри полок и не бросаются в глаза. Кроме того, все делается на станках, поэтому размеры и зазоры идеально ровные. По цвету мы хотели иное решение, но по совету Михаила пересмотрели планы и получилось лучше, чем мы ожидали. За это отдельное спасибо! :) Всем рекомендую!</i>
												<i class="fas fa-quote-right text-secondary ms-2"></i>
											</p>
											<a  href="<?php echo get_stylesheet_directory_uri(); ?>/img/testimonials/testimonial-3-3.jpg"  target="_blank">
												Оригинал отзыва
											</a>
										</div>
									</div>
								</div>
						  </div>
						  <button class="carousel-control-prev"  type="button"  data-bs-target="#carouselTestimonials"  data-bs-slide="prev">
								<span class="carousel-control-prev-icon bg-dark rounded" style="height: 3.5rem"  aria-hidden="true"></span>
								<span class="visually-hidden">Previous</span>
						  </button>
						  <button class="carousel-control-next"  type="button"  data-bs-target="#carouselTestimonials"  data-bs-slide="next">
								<span  class="carousel-control-next-icon bg-dark rounded"  style="height: 3.5rem"  aria-hidden="true"></span>
								<span class="visually-hidden">Next</span>
						  </button>
						</div>
						<div class="row">
							<div class="col-12 col-md-10">
								<div class="line"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- /Testimonials section -->


		<!--process zakaza-->
		<div id="sp-kak-zakazat" class="scroll-points"></div>
		<section id="process">
			<div  class="container"  style=" max-width: 1700px;  border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<h3 class="text-center">
							Как происходит процесс заказа, оплаты и установки шкафа-купе:
						</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-lg-3 text-center step">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-1.png" class="img-fluid" />
								<p>Звонок или заявка <br />на сайте</p>
							</div>
							<div class="col-lg-3 text-center step">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-2.png" class="img-fluid" />
								<p>Консультация менеджера и выезд замерщика</p>
							</div>
							<div class="col-lg-3 text-center step">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-3.png" class="img-fluid" />
								<p>Замер и выбор <br />материалов</p>
							</div>
							<div class="col-lg-3 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-4.png" class="img-fluid" />
								<p>Определение окончательной стоимости</p>
							</div>
							<div class="col-lg-3 text-center step">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-5.png" class="img-fluid" />
								<p>Принятие Вами решения о заказе шкафа купе у нас. Только здесь Вы вносите предоплату 30% по Договору (любой удобный для Вас способ предоплаты)</p>
							</div>
							<div class="col-lg-3 text-center step">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-6.png" class="img-fluid" />
								<p>Создание и <br />согласование 3D проекта и запуск его в производство</p>
							</div>
							<div class="col-lg-3 text-center step">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-7.png" class="img-fluid" />
								<p>Доставка и установка <br />одним днем</p>
							</div>
							<div class="col-lg-3 text-center">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-8.png" class="img-fluid" />
								<p>Прием работы и окончательные расчеты</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--process zakaza-->


   
		<!--forma-stoimost-->
		<section id="stoimost">
			<div  class="container"  style="max-width: 1700px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
				<div class="bg-q">
					<div class="row">
						<div class="col-lg-6 offset-lg-3">
							<h3 class="text-center">
								Узнайте точную стоимость Вашего шкафа за 15 минут!
							</h3>
							<div class="border-yell"></div>
						</div>
						<div class="col-lg-4 offset-lg-4">
							<p class="text-center">Для расчета опишите шкаф своими словами. При необходимости прикрепите изображение</p>
						  <form  method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate.php" enctype="multipart/form-data">
								<textarea type="text" rows="3" name="mes" class="form-control" placeholder="Например: длина, ширина, глубина, количество дверей, материал дверей, форма, вид шкафа и т.д." style="height: auto; margin-top: 15px; margin-bottom: 15px"></textarea>
								<p class="input-group custom-file-button">
								<label class="input-group-text" for="inputGroupFile3">
									Прикрепить
								</label>
								<input  type="file"  name="file[]"  class="form-control"  style="border: none"  id="inputGroupFile3"  accept=".jpg,.jpeg,.png,.pdf,.heic"  multiple=""/>
								</p>
								<p>
									<input type="text" name="name"  class="form-control"  style="margin-top: 15px" placeholder="Ваше Имя"/>
								</p>

								<p>
									<input  type="text"  name="tel"  id="phone_mask_3"  class="form-control telMask"  style="margin-top: 15px" placeholder="Ваш телефон"  required/>
								</p>
								<p>
								<input  type="email"  id="email"  name="email"  class="form-control"  placeholder="Ваш email" required/>
								</p>
								<label class="form-check-label" for="exampleCheck11">
									<input  type="checkbox" class="form-check-input" id="exampleCheck11" checked />
									Я согласен на обработку моих <a href="index.html">персональных данных</a>.
								</label>
													
								<input type="hidden" id="g-recaptcha-response-order-3-with-mail" name="g-recaptcha-response">
								<button  type="submit"  class="btn btn-danger" style="width: 100%">Отправить</button>
						  </form>
						  <!-- <form method="post" action="mails/order.php">
							<p><input type="text" name="name" class="form-control" placeholder="Ваше Имя"></p>
							<p><input type="text" id="phone_mask_5" name="tel" class="form-control telMask" placeholder="Ваш телефон" required></p>
							<p><input type="email" id="email" name="email" class="form-control" placeholder="Ваш email" required></p>
							<label class="form-check-label" for="exampleCheck13"><input type="checkbox" class="form-check-input" id="exampleCheck13" checked>Я согласен на обработку моих <a href="">персональных данных</a>.</label>
							<button type="submit" class="btn btn-danger" style="width: 100%;">Отправить</button>
						  </form> -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--forma-stoimost-->

   
		<!-- Answers section -->
		<div id="sp-faq" class="scroll-points"></div>
		<section id="answers">
			<div  class="container" style="max-width: 1700px;  border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
				<div class="row">
					<div class="col-md-10 offset-md-1">
					  <h2><span>05</span> / Наши ответы на часто задаваемые вопросы</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 offset-lg-2 order-2 order-lg-1">
					  <div class="accordion" id="accordionExample">
						<div class="accordion-item">
						  <h4 class="accordion-header" id="headingOne">
							<button  class="accordion-button collapsed text-uppercase"   type="button"  data-bs-toggle="collapse"  data-bs-target="#collapseOne"  aria-expanded="false" aria-controls="collapseOne">
							  Сколько времени требуется на производство и установку
							  шкафа-купе?
							</button>
						  </h4>
						  <div  id="collapseOne"  class="accordion-collapse collapse"  aria-labelledby="headingOne"  data-bs-parent="#accordionExample">
							<div class="accordion-body">
							  МЫ НЕ ОБЕЩАЕМ СДЕЛАТЬ ШКАФ ЗА ДЕНЬ, ДВА, ТРИ ИЛИ ДАЖЕ 5
							  ДНЕЙ. МЫ НЕ ВВОДИМ НАШИХ КЛИЕНТОВ В ЗАБЛУЖДЕНИЕ. ОТ ЗАКАЗА
							  ДО УСТАНОВКИ ШКАФА В СРЕДНЕМ ПРОХОДИТ 1,5-2 НЕДЕЛИ, ПОСЛЕ
							  ЧЕГО МЫ ПРИВЕЗЕМ И УСТАНОВИМ ШКАФ ОДНИМ ДНЕМ.
							</div>
						  </div>
						</div>
						<div class="accordion-item">
						  <h4 class="accordion-header" id="headingTwo">
							<button  class="accordion-button collapsed text-uppercase"  type="button"  data-bs-toggle="collapse"  data-bs-target="#collapseTwo"  aria-expanded="false"  aria-controls="collapseTwo">
							  Насколько надежная Ваша компания?
							</button>
						  </h4>
						  <div  id="collapseTwo"  class="accordion-collapse collapse"  aria-labelledby="headingTwo"  data-bs-parent="#accordionExample">
							<div class="accordion-body">
							  МЫ ДЕЛАЕМ ВСТРОЕННУЮ И КОРПУСНУЮ МЕБЕЛЬ БОЛЕЕ 10 ЛЕТ, ИМЕЕМ
							  СОБСТВЕННОЕ ПРОИЗВОДСТВО, КОТОРОЕ ВЫ МОЖЕТЕ ПОСЕТИТЬ, ЧТОБЫ
							  УБЕДИТЬСЯ, ЧТО МЫ САМИ ИЗГОТАВЛИВАЕМ ВСЕ ШКАФЫ, А НЕ
							  ПОРУЧАЕМ ЭТО ДРУГИМ, А С ВАС БЕРЕМ ДОПОЛНИТЕЛЬНУЮ НАЦЕНКУ.
							</div>
						  </div>
						</div>
						<div class="accordion-item">
						  <h4 class="accordion-header" id="headingThree">
							<button  class="accordion-button collapsed text-uppercase"  type="button"  data-bs-toggle="collapse"  data-bs-target="#collapseThree"  aria-expanded="false"  aria-controls="collapseThree">
							  КАК ВЫБРАТЬ НАПОЛНЕНИЕ И ДИЗАЙН ШКАФА?
							</button>
						  </h4>
						  <div  id="collapseThree"  class="accordion-collapse collapse"  aria-labelledby="headingThree" data-bs-parent="#accordionExample">
							<div class="accordion-body">
							  НАШИ ЗАМЕРЩИКИ ПОМОГУТ ВАМ С ВЫБОРОМ МАТЕРИАЛОВ И НАПОЛНЕНИЯ
							  ШКАФА С УЧЕТОМ ВАШИХ ПОЖЕЛАНИЙ И КОНСТРУКТИВНЫХ ВОЗМОЖНОСТЕЙ
							  ПОМЕЩЕНИЯ.
							</div>
						  </div>
						</div>

						<div class="accordion-item">
						  <h4 class="accordion-header" id="headingFour">
							<button  class="accordion-button collapsed text-uppercase"  type="button"  data-bs-toggle="collapse"  data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							  С КАКИМИ ПРОИЗВОДИТЕЛЯМИ МАТЕРИАЛОВ ВЫ РАБОТАЕТЕ?
							</button>
						  </h4>
						  <div  id="collapseFour"  class="accordion-collapse collapse"  aria-labelledby="headingFour"  data-bs-parent="#accordionExample">
							<div class="accordion-body">
							  МЫ РАБОТАЕМ С ОДНИМИ ИЗ ВЕДУЩИХ ПРОИЗВОДИТЕЛЕЙ, ОБЛАДАЮЩИХ
							  БОЛЬШОЙ ПАЛИТРОЙ ЦВЕТОВ И ВЫСОКИМ КАЧЕСТВОМ ЛДСП, ТАКИМИ КАК
							  EGGER, РУССКИЙ ЛАМИНАТ. ПРОФИЛЬ ДЛЯ ДВЕРЕЙ МЫ ИСПОЛЬЗУЕМ
							  ARISTO, ITALUM И INLUX.
							</div>
						  </div>
						</div>

						<div class="accordion-item">
						  <h4 class="accordion-header" id="headingFive">
							<button  class="accordion-button collapsed text-uppercase"  type="button"  data-bs-toggle="collapse"  data-bs-target="#collapseFive"  aria-expanded="false" aria-controls="collapseFive">
							  КАК Я МОГУ УЗНАТЬ ТОЧНУЮ СТОИМОСТЬ БУДУЩЕГО ШКАФА?
							</button>
						  </h4>
						  <div  id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
							<div class="accordion-body">
							  ПОСЛЕ ЗАМЕРА И ВЫБОРА МАТЕРИАЛОВ ШКАФА МЫ СРАЗУ СКАЖЕМ ВАМ
							  ОКОНЧАТЕЛЬНУЮ СТОИМОСТЬ. СТОИМОСТЬ ВКЛЮЧАЕТ В СЕБЯ
							  ИЗГОТОВЛЕНИЕ, ДОСТАВКУ И УСТАНОВКУ. БОЛЬШЕ НИКАКИХ СКРЫТЫХ
							  ПЛАТЕЖЕЙ.
							</div>
						  </div>
						</div>

						<div class="accordion-item">
						  <h4 class="accordion-header" id="headingSix">
							<button  class="accordion-button collapsed text-uppercase"  type="button"  data-bs-toggle="collapse"  data-bs-target="#collapseSix"  aria-expanded="false"  aria-controls="collapseSix">
							  НАСКОЛЬКО КОНКУРЕНТНЫ ВАШИ ЦЕНЫ?
							</button>
						  </h4>
						  <div  id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
							<div class="accordion-body">
							  У НАС СОБСТВЕННОЕ ПРОИЗВОДСТВО. ПОЭТОМУ МЫ МОЖЕМ
							  ГАРАНТИРОВАТЬ ОДНИ ИЗ САМЫХ НИЗКИХ ЦЕН!
							</div>
						  </div>
						</div>

						<div class="accordion-item">
						  <h4 class="accordion-header" id="headingSeven">
							<button  class="accordion-button collapsed text-uppercase"  type="button"  data-bs-toggle="collapse"  data-bs-target="#collapseSeven"  aria-expanded="false"  aria-controls="collapseSeven">
							  КАКИЕ ГАРАНТИИ ВЫ ДАЕТЕ?
							</button>
						  </h4>
						  <div id="collapseSeven"  class="accordion-collapse collapse  aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
							<div class="accordion-body">
							  МЫ ДЕЛАЕМ КАЧЕСТВЕННУЮ МЕБЕЛЬ И ИСПОЛНЯЕМ ВСЕ ОБЯЗАТЕЛЬСТВА
							  И ГАРАНТИИ СОГЛАСНО ДОГОВОРУ!
							</div>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-5 offset-lg-1 px-0 text-right order-1 order-lg-2">
					  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/faq.jpg" class="img-fluid without-pad" />
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
						<h3 class="text-center">Руководитель фабрики</h3>
					</div>
					<div class="col-lg-4 offset-lg-2 text-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/director.jpg" class="img-fluid question-img" />
					</div>
					<div class="col-lg-4 offset-lg-1">
					  <p class="text-director">
						<!--strong>Иванов Иван Иванович:</strong><br><br-->"Мы производим
						шкафы-купе и другую корпусную мебель с 2011 года. Нам нравится
						наша работа, нравится делать красивые вещи, нравится получать
						слова благодарности от наших клиентов. Приятно, когда твоя работа
						радует людей".<br /><br />"Каждому нашему клиенту мы гарантируем:
						качественную и красивую продукцию и индивидуальный подход".
					  </p>
					</div>
				</div>
			</div>
		</section>

    <!-- Quiz section --
		<div id="sp-calculator"></div>
		<section class="container" style="max-width: 1700px; border-right: 1px solid rgba(153, 153, 153, 0.9); border-left: 1px solid rgba(153, 153, 153, 0.9);">
			<div class="row justify-content-center">
				<div class="col-md-8">
					<h2 class="text-center">Рассчитайте стоимость шкафа-купе прямо сейчас!</h2>
					
					<!-- Quiz container --
					<div id="quiz-container" class="container pt-4 rounded-lg">
						<div class="row">
							<div class="col pb-4 text-center">
								<h4>Выберите тип шкафа:</h4>
							</div>
						</div>
						<div class="row justify-content-center text-left" style="min-height: 590px;">		
							<div class="col-md-3 pb-3">
								<div class="card w-75 m-auto border-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/shkaf-kupe-v-prihojuyu.jpg" class="card-img-top" alt="...">
									<div class="card-body pl-1 pr-1" style="min-height: auto;"--
										<div class="form-check">
											<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline1">
											<label class="form-check-label" for="customRadioInline1">
												<h5 class="card-title mb-0">Шкаф-купе в прихожую</h5>
											</label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pb-3">
								<div class="card w-75 m-auto border-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/shkaf-kupe-v-gostinuyu.jpg" class="card-img-top" alt="...">
									<div class="card-body pl-1 pr-1" style="min-height: auto;">
										<div class="form-check">
											<input type="radio" id="customRadioInline2" name="customRadioInline1" class="form-check-input">
											<label class="custom-control-label" for="customRadioInline2"><h5 class="card-title mb-0">Шкаф-купе в гостиную</h5></label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pb-3">
								<div class="card w-75 m-auto border-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/garderobnye.jpg" class="card-img-top" alt="...">
									<div class="card-body pl-1 pr-1" style="min-height: auto;">
										<div class="form-check">
											<input type="radio" id="customRadioInline3" name="customRadioInline1" class="form-check-input">
											<label class="custom-control-label" for="customRadioInline3"><h5 class="card-title mb-0">Гардеробная</h5></label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pb-3">
								<div class="card w-75 m-auto border-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/vstroyennye-shkafy-kupe.jpg" class="card-img-top" alt="...">
									<div class="card-body pl-1 pr-1" style="min-height: auto;">
										<div class="form-check">
											<input type="radio" id="customRadioInline4" name="customRadioInline1" class="form-check-input">
											<label class="custom-control-label" for="customRadioInline4"><h5 class="card-title mb-0">Встроенный шкаф-купе</h5></label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pb-3">
								<div class="card w-75 m-auto border-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/shkaf-kupe-v-spalnyu.jpg" class="card-img-top" alt="...">
									<div class="card-body pl-1 pr-1" style="min-height: auto;">
										<div class="form-check">
											<input type="radio" id="customRadioInline5" name="customRadioInline1" class="form-check-input">
											<label class="custom-control-label" for="customRadioInline5"><h5 class="card-title mb-0">Шкаф-купе в спальню</h5></label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pb-3">
								<div class="card w-75 m-auto border-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/uglovoy-shaf-kupe.jpg" class="card-img-top" alt="...">
									<div class="card-body pl-1 pr-1" style="min-height: auto;">
										<div class="form-check">
											<input type="radio" id="customRadioInline6" name="customRadioInline1" class="form-check-input">
											<label class="custom-control-label" for="customRadioInline6"><h5 class="card-title mb-0">Угловой шкаф-купе</h5></label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pb-3">
								<div class="card w-75 m-auto border-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/zerkalniy-shkaf-kupe.jpg" class="card-img-top" alt="...">
									<div class="card-body pl-1 pr-1" style="min-height: auto;">
										<div class="form-check">
											<input type="radio" id="customRadioInline7" name="customRadioInline1" class="form-check-input">
											<label class="custom-control-label" for="customRadioInline7"><h5 class="card-title mb-0">Зеркальный шкаф-купе</h5></label>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 pb-3">
								<div class="card w-75 m-auto border-0">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/korpusniy-shkaf-kupe.jpg" class="card-img-top" alt="...">
									<div class="card-body pl-1 pr-1" style="min-height: auto;">
										<div class="form-check">
											<input type="radio" id="customRadioInline8" name="customRadioInline1" class="form-check-input">
											<label class="custom-control-label" for="customRadioInline8"><h5 class="card-title mb-0">Корпусный шкафы-купе</h5></label>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row pb-5">
							<div class="col text-center">
								<!--button class="btn btn-lg btn-primary" onclick="question1();">Следующий вопрос</button--
								<button class="btn btn-danger" onclick="question1();">Следующий вопрос</button>
							</div>
						</div>
					</div>
					<!-- /Quiz container --
					
				</div>
			</div>
		</section>
		<!-- End quiz section -->

    <!-- Scripts for quiz --
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
			function question1() {
				
				var question = 'question1';
				
				if ( document.getElementById('customRadioInline1').checked == true ) {
					var answer = 'Шкаф-купе в прихожую';
				} else if ( document.getElementById('customRadioInline2').checked == true ) {
					var answer = 'Шкаф-купе в гостиную';
				} else if ( document.getElementById('customRadioInline3').checked == true ) {
					var answer = 'Гардеробная';
				} else if ( document.getElementById('customRadioInline4').checked == true ) {
					var answer = 'Встроенный шкаф-купе';
				} else if ( document.getElementById('customRadioInline5').checked == true ) {
					var answer = 'Шкаф-купе в спальню';
				} else if ( document.getElementById('customRadioInline6').checked == true ) {
					var answer = 'Угловой шкаф-купе';
				} else if ( document.getElementById('customRadioInline7').checked == true ) {
					var answer = 'Зеркальный шкаф-купе';
				} else if ( document.getElementById('customRadioInline8').checked == true ) {
					var answer = 'Корпусный шкафы-купе';
				}
				
				$.ajax ({
					type: "POST",
					url: "quiz-action.php",
					data: { question, answer },
					dataType: "html",
					success: function(data) {
						var p = document.getElementById('quiz-container');
						p.innerHTML = data;
					}
				});
			}
			
			function question2() {
				var question = 'question2';
				var answer1 = document.getElementById('length').value;
				var answer2 = document.getElementById('width').value;
				var answer3 = document.getElementById('height').value;
				var answer4 = document.getElementById('depth').value;
				
				$.ajax ({
					type: "POST",
					url: "quiz-action.php",
					data: { question, answer1, answer2, answer3, answer4 },
					dataType: "html",
					success: function(data) {
						var p = document.getElementById('quiz-container');
						p.innerHTML = data;
					}
				});
			}
			
			function question3() {
				
				var question = 'question3';
				
				if (document.getElementById('customRadioInline1').checked == true) {
					var answer = '2 двери';
				} else if (document.getElementById('customRadioInline2').checked == true) {
					var answer = '3 двери';
				} else if (document.getElementById('customRadioInline3').checked == true) {
					var answer = '4 двери';
				} else if (document.getElementById('customRadioInline4').checked == true) {
					var answer = '5 и более дверей';
				}
				
				$.ajax ({
					type: "POST",
					url: "quiz-action.php",
					data: { question, answer },
					dataType: "html",
					success: function(data) {
						var p = document.getElementById('quiz-container');
						p.innerHTML = data;
					}
				});
			}
		</script>
		<!-- End quiz script -->

		<!-- Quiz section -->
		<!-- <section>
				<div class="container" style="max-width: 1700px; border-right: 1px solid rgba(153, 153, 153, 0.9); border-left: 1px solid rgba(153, 153, 153, 0.9);">
					<div class="row">
						<div class="col-md-10 offset-md-1">
							<h2><span>06</span> / Рассчитайте стоимость шкафа-купе прямо сейчас!</h2>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col">
							
							Quiz container
							<div id="sp-calculator" class="scroll-points"></div>
							<div id="quiz-container" class="row justify-content-center">
								
								Quiz container content
								<div class="col-md-10 text-center">
									<h4 class="pb-4">Выберите тип шкафа:</h4>
									<div class="row justify-content-center text-left quiz-content">		
										<div class="col-md-3 col-6 pb-3">
											<label class="form-check-label w-100" for="customRadioInline1" style="cursor: pointer;">
												<div class="card border-0 bg-dark text-white">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/shkaf-kupe-v-prihojuyu.jpg" class="card-img-top rounded" alt="...">
													<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
														<div class="form-check">
															<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline1">
															<h5 class="card-title mb-0 quiz-title">Шкаф-купе в прихожую</h5>
														</div>
													</div>
												</div>
											</label>
										</div>
										<div class="col-md-3 col-6 pb-3">
											<label class="form-check-label w-100" for="customRadioInline2" style="cursor: pointer;">
												<div class="card border-0 bg-dark text-white">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/shkaf-kupe-v-gostinuyu.jpg" class="card-img-top rounded" alt="...">
													<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
														<div class="form-check">
															<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline2">
															<h5 class="card-title mb-0 quiz-title">Шкаф-купе в гостиную</h5>
														</div>
													</div>
												</div>
											</label>
										</div>
										<div class="col-md-3 col-6 pb-3">
											<label class="form-check-label w-100" for="customRadioInline3" style="cursor: pointer;">
												<div class="card border-0 bg-dark text-white">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/garderobnye.jpg" class="card-img-top rounded" alt="...">
													<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
														<div class="form-check">
															<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline3">
															<h5 class="card-title mb-0 quiz-title">Гардеробная</h5>
														</div>
													</div>
												</div>
											</label>
										</div>
										<div class="col-md-3 col-6 pb-3">
											<label class="form-check-label w-100" for="customRadioInline4" style="cursor: pointer;">
												<div class="card border-0 bg-dark text-white">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/vstroyennye-shkafy-kupe.jpg" class="card-img-top rounded" alt="...">
													<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
														<div class="form-check">
															<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline4">
															<h5 class="card-title mb-0 quiz-title">Встроенный шкаф-купе</h5>
														</div>
													</div>
												</div>
											</label>
										</div>
										<div class="col-md-3 col-6 pb-3">
											<label class="form-check-label w-100" for="customRadioInline5" style="cursor: pointer;">
												<div class="card border-0 bg-dark text-white">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/shkaf-kupe-v-spalnyu.jpg" class="card-img-top rounded" alt="...">
													<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
														<div class="form-check">
															<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline5">
															<h5 class="card-title mb-0 quiz-title">Шкаф-купе в спальню</h5>
														</div>
													</div>
												</div>
											</label>
										</div>
										<div class="col-md-3 col-6 pb-3">
											<label class="form-check-label w-100" for="customRadioInline6" style="cursor: pointer;">
												<div class="card border-0 bg-dark text-white">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/uglovoy-shaf-kupe.jpg" class="card-img-top rounded" alt="...">
													<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
														<div class="form-check">
															<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline6">
															<h5 class="card-title mb-0 quiz-title">Угловой шкаф-купе</h5>
														</div>
													</div>
												</div>
											</label>
										</div>
										<div class="col-md-3 col-6 pb-3">
											<label class="form-check-label w-100" for="customRadioInline7" style="cursor: pointer;">
												<div class="card border-0 bg-dark text-white">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/zerkalniy-shkaf-kupe.jpg" class="card-img-top rounded" alt="...">
													<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
														<div class="form-check">
															<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline7">
															<h5 class="card-title mb-0 quiz-title">Зеркальный шкаф-купе</h5>
														</div>
													</div>
												</div>
											</label>
										</div>
										<div class="col-md-3 col-6 pb-3">
											<label class="form-check-label w-100" for="customRadioInline8" style="cursor: pointer;">
												<div class="card border-0 bg-dark text-white">
													<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/quiz/korpusniy-shkaf-kupe.jpg" class="card-img-top rounded" alt="...">
													<div class="card-img-overlay pl-1 pr-1 d-flex align-items-end">
														<div class="form-check">
															<input class="form-check-input" type="radio" name="customRadioInline1" id="customRadioInline8">
															<h5 class="card-title mb-0 quiz-title">Корпусный шкафы-купе</h5>
														</div>
													</div>
												</div>
											</label>
										</div>
									</div>
								</div>
								<div class="col-12 pb-5 text-center">
									<a href="#sp-calculator" onclick="question1();">
										<button class="btn btn-danger mt-4">Следующий вопрос</button>
									</a>
								</div>
							 /Quiz container content
								
							</div>
							/Quiz container
							
						</div>
					</div>
				</div>
			</section>  -->
		<!-- End quiz section -->

		
		<!-- Scripts for quiz -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script>
		  function question1() {
			var question = "question1";

			if (document.getElementById("customRadioInline1").checked == true) {
			  var answer = "Шкаф-купе в прихожую";
			} else if (
			  document.getElementById("customRadioInline2").checked == true
			) {
			  var answer = "Шкаф-купе в гостиную";
			} else if (
			  document.getElementById("customRadioInline3").checked == true
			) {
			  var answer = "Гардеробная";
			} else if (
			  document.getElementById("customRadioInline4").checked == true
			) {
			  var answer = "Встроенный шкаф-купе";
			} else if (
			  document.getElementById("customRadioInline5").checked == true
			) {
			  var answer = "Шкаф-купе в спальню";
			} else if (
			  document.getElementById("customRadioInline6").checked == true
			) {
			  var answer = "Угловой шкаф-купе";
			} else if (
			  document.getElementById("customRadioInline7").checked == true
			) {
			  var answer = "Зеркальный шкаф-купе";
			} else if (
			  document.getElementById("customRadioInline8").checked == true
			) {
			  var answer = "Корпусный шкафы-купе";
			}

			$.ajax({
			  type: "POST",
			  url: "quiz-action.php",
			  data: { question, answer },
			  dataType: "html",
			  success: function (data) {
				var p = document.getElementById("quiz-container");
				p.innerHTML = data;
			  },
			});
		  }

			function question2() {
				var question = "question2";
				var answer1 = document.getElementById("length").value;
				var answer2 = document.getElementById("width").value;
				var answer3 = document.getElementById("height").value;
				var answer4 = document.getElementById("depth").value;

				$.ajax({
					type: "POST",
					url: "quiz-action.php",
					data: { question, answer1, answer2, answer3, answer4 },
					dataType: "html",
					success: function (data) {
						var p = document.getElementById("quiz-container");
						p.innerHTML = data;
					},
				});
			}

			function question3() {
				var question = "question3";

				if (document.getElementById("customRadioInline1").checked == true) {
					var answer = "2 двери";
				} else if (
					document.getElementById("customRadioInline2").checked == true
				) {
					var answer = "3 двери";
				} else if (
					document.getElementById("customRadioInline3").checked == true
				) {
					var answer = "4 двери";
				} else if (
					document.getElementById("customRadioInline4").checked == true
				) {
					var answer = "5 и более дверей";
				}

				$.ajax({
					type: "POST",
					url: "quiz-action.php",
					data: { question, answer },
					dataType: "html",
					success: function (data) {
						var p = document.getElementById("quiz-container");
						p.innerHTML = data;
					},
				});
			}
		</script>
		<!-- End quiz script -->

		
		<div id="sp-contacts" class="scroll-points"></div>
		<footer id="footer">
			<div  class="container" style="max-width: 1700px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
				<div class="row">
					<div class="col-md-3 offset-md-1">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo.png" class="img-fluid logo" />
						<p><span>Время работы:</span></p>
						<p>Пн. - Вс. с 8:00 до 22:00</p>
						<p><span>Адрес производства:</span></p>
						<p>Московская обл., гор. Лобня, ул. Промышленная, д. 4Д.</p>
					</div>
					<div class="col-md-4 offset-md-1">
						<h2>КАРТА САЙТА</h2>
						<div class="row">
							<div class="col-md-6">
								<ul>
									<li><a href="#sp-home" class="active">Главная</a></li>
									<li><a href="/portfolio">Наши работы</a></li>
									<li><a href="#sp-about">О нас</a></li>
									<li><a href="#sp-testimonials">Отзывы</a></li>
									<li><a href="#sp-faq">Частые вопросы</a></li>
									<li><a href="#sp-kak-zakazat">Как заказать</a></li>
									<li><a href="#sp-contacts">Контакты</a></li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul>
									<li><a href="/" class="active">Корпусная мебель</a></li>
									<li><a href="<?php echo site_url('/shkafy-cupe/'); ?>">Шкафы-купе</a></li>
									<li><a href="<?php echo site_url('/dveri-cupe/'); ?>">Двери-купе</a></li>
									<li><a href="<?php echo site_url('/shkafy-raspashnye/'); ?>">Шкафы распашные</a></li>
									<li><a href="<?php echo site_url('/garderobnye/'); ?>">Гардеробные</a></li>
									<li><a href="<?php echo site_url('/rabochie-zony/'); ?>">Рабочие зоны</a></li>
                                    <li><a href="<?php echo site_url('/calculator/'); ?>">Рассчитать стоимость</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<h2>Контакты</h2>
						<p><span style="padding-top: 0px">Телефоны:</span></p>
						<a href="tel:89856445775">8 (985) 644-57-75</a>
						<!--a href="tel:89646443123">8 (964) 644-31-23</a-->
						<p><span>E-mail:</span></p>
						<a href="mailto:garantshkaf@mail.ru">garantshkaf@mail.ru</a>
						<p><span>Соц. сети:</span></p>
						<div class="social">
							<a  href="https://wa.me/79856445775?web=1&amp;app_absent=1"  target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg" class="ico-button"/>
							</a>
							<!-- a href="https://vk.com/mebelnaya_fabrika_garantshkaf" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/vk.png" class="img-fluid" />
							</a -->
							<a href="https://t.me/+79856445775" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg" class="ico-button" />
							</a>
							<a href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="_blank">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max-ico.svg" class="ico-button" />
							</a>		
							<!-- a href="#">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telega.png" class="img-fluid" />
							</a -->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col p-0 mb-3">
						<hr class="" />
					</div>
				</div>
				<div id="footer1" class="row align-items-center">
                    <div class="col">
                        <p class="font-weight-bold text-center mb-0">©<?php echo date('Y'); ?>г. Мебельная фабрика «Гарантшкаф»</p>
                        <p class="font-weight-light m-0 text-center fs-16">Создание, продвижение и поддержка сайтов: <a href="https://site100.ru"
                                target="_blank">site<span class="text-danger">100</span>.ru</a></p>
                    </div>
                </div>
			</div>
		</footer>
		

		<!-- Callback button HTML -->
		<div class="callback-button-wrapper">
			<div id="callbackBtn" class="callback-button" onclick="callbackButtonClick();">
				<div id="btnIco" class="callback-button-ico"></div>
			</div>
			
			<div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
				<a  data-bs-toggle="modal" data-bs-target="#callback"><div class="callback-form-button-ico"></div></a>
			</div>
			<div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
				<a href="tel:89856445775"><div class="callback-phone-button-ico"></div></a>
			</div>
			<div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
				<a href="https://wa.me/79856445775?web=1&app_absent=1" target="blank"><div class="callback-whatsapp-button-ico"></div></a>
			</div>
			<div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left"
				data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
				<a href="https://t.me/+79856445775" target="blank">
					<div class="callback-telegram-button-ico"></div>
				</a>
			</div>
			<div id="maxBtn" class="callback-max-button" data-bs-toggle="tooltip" data-bs-placement="left"
				data-bs-custom-class="custom-tooltip" data-bs-title="Max">
				<a href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="blank">
					<div class="callback-max-button-ico"></div>
				</a>
			</div>
		</div>
		<!-- /Callback button HTML -->

		<!-- Callback button JS -->
		<script>
			function callbackButtonClick() {
				
				let formBtn = document.getElementById('formBtn').style.top;
				
				if ( formBtn == "0px" || formBtn == 0 ) {
					document.getElementById('callbackBtn').style.animation = "none";
					document.getElementById('btnIco').style.animation = "change2 linear .5s";
					document.getElementById('btnIco').style.webkitAnimation = "change2 linear .5s";
					document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
					
					document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
					document.getElementById('btnIco').style.transform = "rotate(180deg)";
					
					
					document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-button-close.png)";
					document.getElementById('btnIco').style.backgroundPosition = "center";
					document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
					
					document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
					document.getElementById('btnIco').style.backgroundSize = "cover";
					
					
					document.getElementById('formBtn').style.top = "-60px";
					document.getElementById('formBtn').style.opacity = "1";
					
					document.getElementById('phoneBtn').style.top = "-120px";
					document.getElementById('phoneBtn').style.opacity = "1";
					
					document.getElementById('whatsappBtn').style.top = "-180px";
					document.getElementById('whatsappBtn').style.opacity = "1";
					
					document.getElementById('telegramBtn').style.top = "-240px";
					document.getElementById('telegramBtn').style.opacity = "1";

					document.getElementById('maxBtn').style.top = "-300px";
					document.getElementById('maxBtn').style.opacity = "1";
				} else {
					document.getElementById('callbackBtn').style.animation = "waves linear 2s infinite";
					document.getElementById('btnIco').style.animation = "change linear 16s infinite";
					document.getElementById('btnIco').style.webkitTransition ="transform 1s ease-in-out";
					document.getElementById('btnIco').style.webkitAnimation = "change linear 16s infinite";
					document.getElementById('btnIco').style.transform = "rotate(180deg)";
					document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
					document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-button-ico.png)";
					document.getElementById('btnIco').style.backgroundPosition = "center";
					document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";
					
					document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
					document.getElementById('btnIco').style.backgroundSize = "cover";
					
					
					document.getElementById('formBtn').style.top = "0px";
					document.getElementById('formBtn').style.opacity = "0";
					
					document.getElementById('phoneBtn').style.top = "0px";
					document.getElementById('phoneBtn').style.opacity = "0";
					
					document.getElementById('whatsappBtn').style.top = "0px";
					document.getElementById('whatsappBtn').style.opacity = "0";
					
					document.getElementById('telegramBtn').style.top = "0px";
					document.getElementById('telegramBtn').style.opacity = "0";
					
					document.getElementById('maxBtn').style.top = "0px";
					document.getElementById('maxBtn').style.opacity = "0";
				}
			}
		</script>
		<!-- /Callback button JS -->


		<!-- Callback modal -->
		<div class="modal fade"  id="callback" tabindex="-1"  aria-labelledby="modalOrderLabel-1"aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalOrderLabel-1">
							Заказать обратный звонок
						</h5>
						<button  type="button"  class="btn-close"  data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form  method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback.php">
							<p><input type="text"  name="name" class="form-control" placeholder="Ваше имя"/></p>
							<p><input type="text"  id="phone_mask_2" name="tel" class="form-control telMask" placeholder="Ваш телефон" required /></p>
							
							<input type="hidden" id="g-recaptcha-response-callback" name="g-recaptcha-response">
							<button type="submit" class="btn btn-danger" style="width: 100%">Отправить</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- End callback modal -->
		
		
		<!-- Modal Want This -->
		<div  class="modal fade"  id="want-this"  tabindex="-1"  aria-labelledby="modalOrderLabel-2" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalOrderLabel-2">Оставить заявку</h5>
						<button  type="button"  class="btn-close"  data-bs-dismiss="modal"  aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order-2.php">
							<p>
								<input  type="text"  name="name"  class="form-control"  placeholder="Ваше имя"/>
							</p>
							<p>
								<input  type="text"  id="phone_mask_6" name="tel"  class="form-control telMask"  placeholder="Ваш телефон"  required />
							</p>
							
							<input type="hidden" id="g-recaptcha-response-order-modal" name="g-recaptcha-response">
							<button type="submit" class="btn btn-danger" style="width: 100%">Отправить</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		
		<!-- Modal order 2 -->
		<div class="modal fade"  id="order2"  tabindex="-1" aria-labelledby="modalOrder2Label"  aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="modalOrder2Label">
							Рассчитать стоимость шкафа
						</h5>
						<button type="button" class="btn-close"  data-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order.php">
							<p>
								<input  type="text"  name="name"  class="form-control"  placeholder="Ваше имя"/>
							</p>
							<p>
								<input  type="text"  id="phone_mask_7"  name="tel"  class="form-control telMask" placeholder="Ваш телефон" required />
							</p>
							<input type="hidden" id="g-recaptcha-response-calculate" name="g-recaptcha-response">
							<button type="submit" class="btn btn-danger" style="width: 100%">Отправить</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		
		<!-- Показываем сообщение об успешной отправки -->
		<div style="display: <?php echo $display; ?>;" onclick="f1();"> <!-- Присваиваем свойству display значение переменной $display -->
			<div id="background-msg" style="display: <?php echo $display; ?>;"></div> <!-- Показываем background -->
			<!-- Показываем сообщение об успешной отправке данных -->
			<div id="message">
				<?php echo $_SESSION['recaptcha']; unset($_SESSION['recaptcha']); ?>
			</div> 
		</div>

		
		<!-- Gallery wrapper-->
		<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 999999999;">
			<?php
				/* параметры по умолчанию */
				$posts = get_posts( array(
					'post_type'   => 'closet',
					'numberposts' => 6
				) );
				
				foreach( $posts as $post ) { setup_postdata($post); ?>
			
					<div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="false" data-bs-interval="false" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
						<div class="carousel-indicators">					
							<?php
								$images = get_post_gallery_images();
								$count2 = 0;
								foreach ( $images as $image ) {
									if ( $count2 == 0 ) { ?>
										<button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide <?php echo $count2 + 1; ?>"></button>
									<?php $count2 = $count2 + 1; } else { ?>
										<button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>" aria-label="Slide <?php echo $count2 + 1; ?>"></button>
									<?php $count2 = $count2 + 1; }
								}
							?>							
						</div>
						<div class="carousel-inner h-100">
							<?php
								$images = get_post_gallery_images();
								$count2 = 0;
								foreach ( $images as $image ) { ?>
									<div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>" class="carousel-item h-100">
										<div class="row align-items-center h-100">
											<div class="col text-center">
												<img data-src="<?php echo $image; ?>" class="img-fluid lazyload" loading="lazy" style="max-width: 75vw; max-height: 75vh;" alt="...">
											</div>
										</div>
									</div>
									
								<?php  $count2 = $count2 + 1; }
							?>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				<?php } wp_reset_postdata();
			?>
				
			<!-- Кнопка закрытия галереи -->
			<button type="button" onClick="closeGallery();" class="btn-close btn-close-white" style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
		</div>
		
		<script>
			/* Функция открытия галереи */
			function galleryOn(gal, img) {
				var gallery = gal; // Получаем ID галереи
				var image = img; // Получаем ID картинки
				// Открываем обертку галереи
				document.getElementById('galleryWrapper').style.display = 'block';
				
				// Проверяем какие данные передаются для открытия галереи и картинки
				//alert(gallery+' '+image); 
				
				
				<?php
					/* Открываем галерею */
					$posts = get_posts( array(
						'post_type'   => 'closet',
						'numberposts' => 6
					) );
					
					foreach( $posts as $post ) { setup_postdata($post);
						
						echo 'if ( gallery == "gallery-'.$post->ID.'" ) { document.getElementById("gallery-'.$post->ID.'").style.display = "block"; }';

					} wp_reset_postdata();
				?>
				
				
				<?php // Открываем изображения
				$posts = get_posts( array(
					'post_type'   => 'closet',
					'numberposts' => 6
				) );
				
				foreach( $posts as $post ) { setup_postdata($post); ?>
					<?php
						$images = get_post_gallery_images();
						$count2 = 0;
						foreach ( $images as $image ) {
			
							echo 'if ( image == "img-'.$post->ID.'-'.$count2.'" ) { document.getElementById("img-'.$post->ID.'-'.$count2.'").classList.add("active"); document.getElementById("ind-'.$post->ID.'-'.$count2.'").classList.add("active"); } ';
							
						$count2 = $count2 + 1; }
					?>
				<?php } wp_reset_postdata(); ?>
			}


			// Кнопка закрытия галереи
			function closeGallery() {
				// Закрываем обертку галереи
				document.getElementById('galleryWrapper').style.display = 'none';
				
				<?php // Открываем галерею
					$posts = get_posts( array(
						'post_type'   => 'closet',
						'numberposts' => 6
					) );
					
					foreach( $posts as $post ) { setup_postdata($post);
						
						echo 'document.getElementById("gallery-'.$post->ID.'").style.display = "none";';

					} wp_reset_postdata();
				?>
				
				<?php // Закрываем изображения
				$posts = get_posts( array(
					'post_type'   => 'closet',
					'numberposts' => 6
				) );
				
				foreach( $posts as $post ) { setup_postdata($post); ?>
					<?php
						$images = get_post_gallery_images();
						$count2 = 0;
						foreach ( $images as $image ) {
			
							echo 'document.getElementById("img-'.$post->ID.'-'.$count2.'").classList.remove("active"); document.getElementById("ind-'.$post->ID.'-'.$count2.'").classList.remove("active");';
							
						$count2 = $count2 + 1; }
					?>
				<?php } wp_reset_postdata(); ?>
			}
		</script>
		
		
		<script src='https://www.google.com/recaptcha/api.js?render=6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn'></script>
		<script>
			grecaptcha.ready(function() {
				grecaptcha.execute('6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn', {action: 'action_name'}).then(function(token) {
					// В боке Home
					if ( document.getElementById('g-recaptcha-response-order-1-home') ) {
						document.getElementById('g-recaptcha-response-order-1-home').value=token;
					}
					// В обычном блоке
					if ( document.getElementById('g-recaptcha-response-order-2') ) {
						document.getElementById('g-recaptcha-response-order-2').value=token;
					}
					
					if ( document.getElementById('g-recaptcha-response-order-3-with-mail') ) {
						document.getElementById('g-recaptcha-response-order-3-with-mail').value=token;
					}
					
					if ( document.getElementById('g-recaptcha-response-callback') ) {
						document.getElementById('g-recaptcha-response-callback').value=token;
					}
					
					if ( document.getElementById('g-recaptcha-response-order-modal') ) {
						document.getElementById('g-recaptcha-response-order-modal').value=token;
					}
					
					if ( document.getElementById('g-recaptcha-response-calculate') ) {
						document.getElementById('g-recaptcha-response-calculate').value=token;
					}
				});
			});
		</script>
		

		<!-- Bootstrap -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>

		
		<!-- Загрузка изображений с приоритетом -->
		<script>
			if ("loading" in HTMLImageElement.prototype) {
				const images = document.querySelectorAll('img[loading="lazy"]');
				images.forEach((img) => {
					img.src = img.dataset.src;
				});
			} else {
				// Dynamically import the LazySizes library
				const script = document.createElement("script");
				script.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js";
				document.body.appendChild(script);
			}
		</script>

		
		<!-- Font Awesame
		<script src="https://kit.fontawesome.com/064ae6a0a2.js"></script> -->

		
		<!-- Убираем сообщение об успешной отправки -->
		<script>
			function f1() {
				document.getElementById("background-msg").style.display = "none";
				document.getElementById("message").style.display = "none";
			}
		</script>
		
		
		<!-- jQuery -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.5.1.min.js"></script>
		
		
		<!-- script js -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>

		
		<!-- Menu -->
		<script>vyezjalo();</script>
		
		
		<!-- New telephone number mask -->
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/inputmask.min.js"></script>
		<script>
			var telMask = document.getElementsByClassName("telMask");
			var im = new Inputmask("+7(999)999-99-99");
			im.mask(telMask);
		</script>
	</body>
</html>