<?php

/**
 * Template Name: Архив портфолио (новая)
 * Template Post Type: page
 *
 * Также используется WordPress как архив типа записи `portfolio` (/portfolio/).
 */

include 'header.php';
?>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/new.css?v=<?php echo filemtime(get_stylesheet_directory() . '/css/new.css'); ?>">

<?php $theme_uri = get_stylesheet_directory_uri(); ?>

<!-- ==========================================================================
     ШАПКА (со старого дизайна)
     ========================================================================== -->
<!-- SECTION HOME -->
<div id="sp-home"></div>
<!-- Header 1 -->
<div class="col-md-12 d-flex justify-content-end col-nav" style="background-color:#F5F5F5;">
	<!-- Верхняя плашка (как на новой странице); скрыта на адаптиве (<992px) -->
	<div class="container d-none d-lg-block">
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
	<header id="sliding-header" class="shadow">
		<!-- Header nav bottom -->
		<nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
			<div class="container">
				<a class="navbar-brand" href="<?php echo home_url('/'); ?>">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-dark-theme.svg" />
				</a>
				<div class="d-lg-none">
					<a class="top-menu-tel pt-1 pb-0" style="font-size: 14px" href="tel:89856445775">
						8 (985) 644-57-75
					</a>
					<div style="font-size: 10px;  font-family: Gilroy-Light;  text-transform: none;">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg" style="width: 12px; position: relative; top: -1px" class="me-1" />
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
														<img src="' . get_stylesheet_directory_uri() . '/img/ico/telegram-ico.svg" />
													</a>
													<a class="ico-button pe-0 text-decoration-none" href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="blank">
														<img src="' . get_stylesheet_directory_uri() . '/img/ico/max-ico.svg" />
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
</div><!-- /.col-md-12 -->
<!-- /Header 1 -->

<!-- Header 2 -->
<div class="col-md-12 bottom-nav navbar-light-light d-none d-lg-block" style="border-top: 1px solid #E1E1E1;" id="top-menu-2">
	<nav class="header-nav-bottom navbar navbar-expand-lg navbar-light header-bottom" style="background-color: #fff">
		<div class="container bottom-container">
			<a class="navbar-brand" href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-dark-theme.svg" />
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
                            <!-- End mobile menu -->
                        </ul>
                    ',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
			</div><!-- /.collapse -->
		</div><!-- /.container -->
	</nav>
</div><!-- /.col-md-12 -->
<!-- /Header 2 -->

<header id="archive-portfolio-header" class="home-section home-section-shafy-cupe woocommerce-products-header" style="background-position: center;">
	<div class="container">
		<div class="row align-items-center text-start">
			<div class="col py-5">
				<h1 class="portfolio-title">Наши лучшие работы</h1>
			</div>
		</div>
	</div>
</header>
<!-- END SECTION HOME -->

<!-- ==========================================================================
     ХЛЕБНЫЕ КРОШКИ
     ========================================================================== -->
<section class="crumbs bg">
	<div class="container">
		<nav class="crumbs__nav woocommerce-breadcrumb" itemprop="breadcrumb">
			<a href="<?php echo home_url('/'); ?>"><img src="<?php echo $theme_uri; ?>/img/ico/advantage/breadcrumbs-icon.svg" alt=""></a>
			/ <span>Наши работы</span>
		</nav>
	</div>
</section>

<!-- ==========================================================================
     НАШИ РАБОТЫ (новый масонри)
     ========================================================================== -->
<?php get_template_part('template-parts/portfolio-masonry-new/portfolio-masonry-new', null, [
	'category'      => 'all',
	'section_title' => 'Наши работы',
	'posts_count'   => -1,
	'show_button'   => false,
	'show_filter'   => true,
]); ?>

<!-- ==========================================================================
     ЛИД-ФОРМА
     ========================================================================== -->
<section class="lead bg">
	<img class="lead__photo" src="<?php echo $theme_uri; ?>/img/ico/advantage/lead__photo-2.jpg" alt="" />
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-4 offset-lg-1">
				<div class="lead__form form--light section-title-wrapper mb-60">
					<h2 class="section-title">Рассчитаем точную стоимость корпусной мебели за&nbsp;15&nbsp;минут!</h2>
					<p class="lead__subtitle">Опишите изделие своими словами. При возможности прикрепите изображение</p>
					<img class="lead__points" src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="" />
					<form method="post" action="<?php echo $theme_uri; ?>/mails/get_calculate.php" enctype="multipart/form-data">
						<div class="form__names d-flex gap-4">
							<input type="text" name="name" class="form__field" placeholder="Ваше имя" />
							<input type="text" name="tel" id="lead_phone_mask" class="form__field telMask" placeholder="Ваш телефон" required />
						</div>
						<textarea rows="3" name="mes" class="form__field" placeholder="Опишите изделие своими словами, укажите примерные размеры и материалы"></textarea>
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