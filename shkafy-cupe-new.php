<?php

/**
 * Template Name: Шкафы-купе (новая)
 * Template Post Type: page
 */

include 'header.php';
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/new.css?v=<?php echo filemtime(get_stylesheet_directory() . '/css/new.css'); ?>">

<?php $theme_uri = get_stylesheet_directory_uri(); ?>

<?php // Фоновое изображение hero для этой страницы (положите файл в img/ico/advantage/)
$hero_bg = $theme_uri . '/img/ico/advantage/new-main.jpg'; ?>

<!-- ==========================================================================
     HERO — верхняя плашка, меню и контент над фоном
     ========================================================================== -->
<section class="hero" style="background-image: url('<?php echo $hero_bg; ?>');">

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
						<span class="hl">Шкафы-купе</span> на&nbsp;заказ от&nbsp;производителя <span class="hl"><?php echo $location; ?></span>
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
						<h2 class="form__title">Рассчитаем точную стоимость шкафа-купе за 15 мин!</h2>
						<p class="form__subtitle">Опишите шкаф-купе своими словами. При возможности прикрепите изображение</p>
						<form method="post" action="<?php echo $theme_uri; ?>/mails/get_calculate.php" enctype="multipart/form-data">
							<div class="form__names d-flex gap-4">
								<input type="text" name="name" class="form__field" placeholder="Ваше имя" />
								<input type="text" name="tel" id="phone_mask_3" class="form__field telMask" placeholder="Ваш телефон" required />
							</div>
							<textarea rows="3" name="mes" class="form__field" placeholder="Опишите шкаф-купе своими словами, укажите примерные размеры и материалы"></textarea>
							<div class="form__file">
								<label class="btn-grad-outline form__file-label" for="scFile">Прикрепить файл</label>
								<input type="file" name="file[]" class="form__file-input" id="scFile" accept=".jpg,.jpeg,.png,.pdf,.heic" multiple onchange="document.getElementById('scFileName').textContent = this.files.length ? (this.files.length === 1 ? this.files[0].name : this.files.length + ' файла(ов)') : 'Файл не выбран';" />
								<span class="form__file-name" id="scFileName">Файл не выбран</span>
							</div>
							<input type="hidden" id="g-recaptcha-response-order-1-home" name="g-recaptcha-response">
							<button type="submit" class="btn-grad form__submit">Рассчитать</button>
							<label class="form__agree" for="scAgree">
								<input type="checkbox" id="scAgree" class="form__agree-input" checked>
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
	<div class="container">
		<nav class="crumbs__nav woocommerce-breadcrumb" itemprop="breadcrumb">
			<a href="<?php echo home_url('/'); ?>"><img src="<?php echo $theme_uri; ?>/img/ico/advantage/breadcrumbs-icon.svg" alt=""></a>
			/ <span>Шкафы-купе на&nbsp;заказ</span>
		</nav>
	</div>
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
     НАШИ ПОСЛЕДНИЕ РАБОТЫ И ЦЕНЫ
     ========================================================================== -->
<?php get_template_part('template-parts/portfolio-masonry-new/portfolio-masonry-new', null, [
	'category'      => '021-шкафы-купе',
	'section_title' => 'Некоторые наши работы',
	'posts_count'   => 30,
	'show_button'   => true,
	'button_text'   => 'Смотреть все',
]); ?>

<!-- ==========================================================================
     ЛИД-ФОРМА
     ========================================================================== -->
<section class="lead bg">
	<img class="lead__photo" src="<?php echo $theme_uri; ?>/img/ico/advantage/lead__photo-2.jpg" alt="" />
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-4 offset-lg-1">
				<div class="lead__form form--light section-title-wrapper">
					<h2 class="section-title">Рассчитаем стоимость шкафа-купе за&nbsp;15&nbsp;минут!</h2>
					<p class="lead__subtitle">Опишите шкаф-купе своими словами. При возможности прикрепите изображение</p>
					<img class="lead__points" src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="" />
					<form method="post" action="<?php echo $theme_uri; ?>/mails/get_calculate.php" enctype="multipart/form-data">
						<div class="form__names d-flex gap-4">
							<input type="text" name="name" class="form__field" placeholder="Ваше имя" />
							<input type="text" name="tel" id="lead_phone_mask" class="form__field telMask" placeholder="Ваш телефон" required />
						</div>
						<textarea rows="3" name="mes" class="form__field" placeholder="Опишите шкаф-купе своими словами, укажите примерные размеры и материалы"></textarea>
						<div class="form__file">
							<span class="form__file-name" id="leadFileName">Файл не выбран</span>
							<label class="btn-grad-outline form__file-label" for="leadFile">Прикрепить файл</label>
							<input type="file" name="file[]" class="form__file-input" id="leadFile" accept=".jpg,.jpeg,.png,.pdf,.heic" multiple onchange="document.getElementById('leadFileName').textContent = this.files.length ? (this.files.length === 1 ? this.files[0].name : this.files.length + ' файла(ов)') : 'Файл не выбран';" />
						</div>
						<input type="hidden" id="g-recaptcha-response-order-2-home" name="g-recaptcha-response">
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
						<label class="form__agree" for="leadAgree">
							<input type="checkbox" id="leadAgree" class="form__agree-input" checked>
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
<section class="section-testimonials bg" id="sp-testimonials">
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
						<div class="review-photo me-3"><img src="<?php echo $theme_uri; ?>/img/ico/icon-4.png" class="rounded-circle" width="50" height="50" alt="Ульяна Нехорошкова"></div>
						<div class="review-info">
							<p class="review-title mb-0">Ульяна Нехорошкова</p>
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
						<p class="review-description">Наши планы по ремонту сдвинулись, и я взяла шикарную кухню в магазине. Вся моя семья в восторге! Как начну готовить, так все в очереди стоят, чтобы попробовать!
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 col-xl-4 mb-4">
				<div class="review-card rounded h-100">
					<div class="review-header d-flex align-items-center mb-3">
						<div class="review-photo me-3"><img src="<?php echo $theme_uri; ?>/img/ico/icon-5.png" class="rounded-circle" width="50" height="50" alt="Егор"></div>
						<div class="review-info">
							<p class="review-title mb-0">Егор</p>
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
						<p class="review-description">Спасибо за мою новую кухню! Дизайн, функциональность и качество – всё на 5+. Особенно радует вместительность шкафов и удобная рабочая зона.
						</p>
					</div>
				</div>
			</div>
			<div class="col-12 col-lg-6 col-xl-4 mb-4">
				<div class="review-card rounded h-100">
					<div class="review-header d-flex align-items-center mb-3">
						<div class="review-photo me-3"><img src="<?php echo $theme_uri; ?>/img/ico/icon-6.png" class="rounded-circle" width="50" height="50" alt="Лена Шагдурова"></div>
						<div class="review-info">
							<p class="review-title mb-0">Лена Шагдурова</p>
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
						<p class="review-description mb-0">Очень довольны покупкой новой кухни! Она получилась не только красивой но и удобной. Все элементы были качественно собраны, дополнительно установили встроенную технику и теперь… <a href="https://yandex.ru/maps/org/garantshkaf/43131278671/" target="_blank">читать еще</a>
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
     КВИЗ 
     ========================================================================== -->
<?php get_template_part('template-parts/quiz-new/quiz-new'); ?>

<!-- ==========================================================================
     КАК МЫ РАБОТАЕМ
     ========================================================================== -->
<section class="howto bg" id="sp-kak-zakazat">
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
					<p class="howto-step__text">Свяжитесь с нами любым удобным способом, расскажите, что Вы хотите. При наличии дизайн-проекта, изображения, рисунка, размеров или другой информации — пришлите нам на почту, в Max, Telegram, WhatsApp или в форме обратной связи.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="howto-step">
					<div class="howto-step__head">
						<span class="howto-step__num">2</span>
						<img class="howto-step__icon" src="<?php echo $theme_uri; ?>/img/ico/advantage/step-2.svg" alt="" />
					</div>
					<h3 class="howto-step__title">Расчёт стоимости</h3>
					<p class="howto-step__text">На основании полученной от Вас информации мы сделаем предварительный расчёт стоимости и сроков производства. При необходимости уточняем детали.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="howto-step">
					<div class="howto-step__head">
						<span class="howto-step__num">3</span>
						<img class="howto-step__icon" src="<?php echo $theme_uri; ?>/img/ico/advantage/step-3.svg" alt="" />
					</div>
					<h3 class="howto-step__title">Заключение договора</h3>
					<p class="howto-step__text">Если Вас всё устраивает, мы приезжаем к Вам на замер, утверждаем сроки, материалы, заключаем договор. Только здесь Вы вносите предоплату 30%, и шкаф-купе поступает в производство.</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="howto-step mb-0">
					<div class="howto-step__head">
						<span class="howto-step__num">4</span>
						<img class="howto-step__icon" src="<?php echo $theme_uri; ?>/img/ico/advantage/step-4.svg" alt="" />
					</div>
					<h3 class="howto-step__title">Доставка и установка</h3>
					<p class="howto-step__text">После окончания производства доставляем и устанавливаем шкаф-купе в заранее оговорённые дату и время. После установки производим окончательные расчёты. Убираем весь мусор.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ==========================================================================
     FAQ section
     ========================================================================== -->
<section class="faq bg" id="sp-faq">
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
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC1" aria-expanded="false" aria-controls="faqC1">Сколько времени требуется на производство и установку шкафа-купе?</button>
						</h4>
						<div id="faqC1" class="accordion-collapse collapse" aria-labelledby="faqH1" data-bs-parent="#faqAccordion">
							<div class="accordion-body">Мы не обещаем сделать шкаф-купе за день, два, три или даже 5 дней. От заказа до установки в среднем проходит 1,5–2 недели, после чего мы привезём и установим шкаф-купе одним днём.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h4 class="accordion-header" id="faqH2">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC2" aria-expanded="false" aria-controls="faqC2">Насколько надёжная Ваша компания?</button>
						</h4>
						<div id="faqC2" class="accordion-collapse collapse" aria-labelledby="faqH2" data-bs-parent="#faqAccordion">
							<div class="accordion-body">Мы делаем шкафы-купе и другую корпусную мебель с 2011 года. Имеем собственное производство, которое Вы можете посетить, чтобы убедиться, что мы сами изготавливаем все шкафы, а не поручаем это другим, а с вас берём дополнительную наценку.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h4 class="accordion-header" id="faqH3">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC3" aria-expanded="false" aria-controls="faqC3">Как выбрать наполнение и дизайн шкафа?</button>
						</h4>
						<div id="faqC3" class="accordion-collapse collapse" aria-labelledby="faqH3" data-bs-parent="#faqAccordion">
							<div class="accordion-body">Наши замерщики помогут Вам с выбором материалов и наполнения шкафа с учётом Ваших пожеланий и конструктивных возможностей помещения.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h4 class="accordion-header" id="faqH4">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC4" aria-expanded="false" aria-controls="faqC4">С какими производителями материалов вы работаете?</button>
						</h4>
						<div id="faqC4" class="accordion-collapse collapse" aria-labelledby="faqH4" data-bs-parent="#faqAccordion">
							<div class="accordion-body">Мы работаем с ведущими производителями ЛДСП — EGGER и «Русский ламинат». Профиль для дверей используем Aristo, Italum и Inlux.</div>
						</div>
					</div>
					<div class="accordion-item">
						<h4 class="accordion-header" id="faqH5">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqC5" aria-expanded="false" aria-controls="faqC5">Как я могу узнать точную стоимость будущего шкафа?</button>
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
							<input type="text" name="tel" id="recalc_phone" class="form__field telMask" placeholder="Ваш телефон" required />
						</div>
						<div class="form__file">
							<span class="form__file-name" id="recalcFileName">Файл не выбран</span>
							<label class="btn-grad-outline form__file-label" for="recalcFile">Прикрепить файл</label>
							<input type="file" name="file[]" class="form__file-input" id="recalcFile" accept=".jpg,.jpeg,.png,.pdf,.heic" multiple onchange="document.getElementById('recalcFileName').textContent = this.files.length ? (this.files.length === 1 ? this.files[0].name : this.files.length + ' файла(ов)') : 'Файл не выбран';" />
						</div>
						<input type="hidden" id="g-recaptcha-response-recalc" name="g-recaptcha-response">
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
						<label class="form__agree" for="recalcAgree">
							<input type="checkbox" id="recalcAgree" class="form__agree-input" checked>
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