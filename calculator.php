<?php

/**
 * Template Name: Калькулятор
 * Template Post Type: page
 */

include 'header.php';
?>

<!-- SECTION HOME -->
<div id="sp-home"></div>
<section class="home-section home-section-shafy-cupe calculator">
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
                      <a class="nav-link ico-button" href="https://wa.me/79856445775?web=1&amp;app_absent=1"
                        target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg" />
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link ico-button"
                        href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc"
                        target="_blank">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max-ico.svg" />
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </nav>
      </div><!-- /.col-md-12 -->

      <div class="container">
        <div class="row row-bottom-nav d-flex">
          <div class="col-md-12 bottom-nav">
            <nav class="header-nav-bottom navbar navbar-expand-lg navbar-light header-bottom">
              <div class="container bottom-container">
                <a class="navbar-brand" href="#">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo.svg" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#mobail-header-collapse" aria-controls="mobail-header-collapse" aria-expanded="false"
                  aria-label="Toggle navigation">
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
                <a class="nav-link top-menu-tel pt-1 pb-1" href="tel:89856445775">
                  8 (985) 644-57-75
                </a>
                <div class="mb-2" style="font-size: 12px;  font-family: Gilroy-Light;  text-transform: none;">
                  <img src="' . get_stylesheet_directory_uri() . '/img/ico/clock-ico.svg"
                    style="width: 10px; position: relative; top: 3px" class="me-1 mb-2" />
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
                  <a class="ico-button pe-0"
                    href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="blank">
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
    <div class="row align-items-center text-start" style="min-height: 410px;">
      <div class="col py-5">
        <h1 class="calculator-title">
          <span>Расчет стоимости </span>корпусной мебели</span>
          <br>Шкафа, гардеробной или рабочей зоны
        </h1>
        <!-- Home advantages -->
        <div class="row pb-2 align-items-center advantage-section mb-3 mb-xl-5">
          <div class="col-md-6 col-xl-3 mb-3 mb-xl-0">
            <div class="row align-items-center">
              <div class="col-2 col-xl-3">
                <img class="w-100" style="max-width: 60px"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/home-advantage-1.svg">
              </div>
              <div class="col-10 col-md-9">
                <h3 class="text-light mb-0">Замер </h3>
                <p class="home-advantage-description">бесплатно</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3 mb-3 mb-xl-0">
            <div class="row align-items-center">
              <div class="col-2 col-xl-3">
                <img class="w-100" style="max-width: 60px"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/home-advantage-2.svg">
              </div>
              <div class="col-10 col-md-9">
                <h3 class="text-light mb-0">Дизайн-проект </h3>
                <p class="home-advantage-description">бесплатно</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3 mb-3 mb-xl-0">
            <div class="row align-items-center">
              <div class="col-2 col-xl-3">
                <img class="w-100" style="max-width: 60px"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/home-advantage-3.svg">
              </div>
              <div class="col-10 col-md-9">
                <h3 class="text-light mb-0">Доставка и монтаж </h3>
                <p class="home-advantage-description">бесплатно</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-3  mb-3 mb-xl-0">
            <div class="row align-items-center">
              <div class="col-2 col-xl-3">
                <img class="w-100" style="max-width: 60px"
                  src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/home-advantage-4.svg">
              </div>
              <div class="col-10 col-md-9">
                <h3 class="text-light mb-0">Рассрочка на 1 год</h3>
                <p class="home-advantage-description">без переплаты</p>
              </div>
            </div>
          </div>
        </div>
        <!-- /Home advantages -->

        <button type="button" class="btn btn-danger calculate-btn mb-3" data-bs-toggle="modal"
          data-bs-target="#want-this">Рассчитать стоимость
          <!--дизайнера-->
        </button>
      </div>
    </div>
  </div>
  </div><!-- /.container #main-divider -->

  <header id="sliding-header" class="shadow">
    <!-- Header nav bottom -->
    <nav class="header-nav-bottom navbar navbar-expand-lg navbar-light py-1 py-lg-0">
      <div class="container">
        <a class="navbar-brand" href="archive-product-portfolio.html#">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-dark-theme.svg" />
        </a>
        <div class="d-lg-none">
          <a class="top-menu-tel pt-1 pb-0" style="font-size: 14px" href="tel:89856445775">
            8 (985) 644-57-75
          </a>
          <div style="font-size: 10px;  font-family: Gilroy-Light;  text-transform: none;">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/clock-ico.svg"
              style="width: 12px; position: relative; top: -1px" class="me-1" />
            Пн-Вс 8:00-22:00
          </div>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sliding-header-collapse"
          aria-controls="sliding-header-collapse" aria-expanded="false" aria-label="Toggle navigation">
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
    <!-- /Header nav bottom -->
  </header>
</section>

<!-- SECTION ORDER 1 -->
<?php get_template_part('template-parts/quiz/calculator_quiz'); ?>
<!-- /SECTION ORDER 1 -->


<!-- Stock section -->
<div id="sp-stock"></div>
<section class="section-stock">
  <div class="container"
    style="max-width: 1700px;  padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="section-title-wrapper text-center">
          <h2 class="section-title">Акции от нашей фабрики</h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
        </div>
        <div class="col-12 col-md-6 mb-3 mb-md-0 section-image order-1 order-md-0">
          <div class="single-image-wrapper">
            <div class="approximation img-wrapper position-relative gallery-2691">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card/action-card.webp"
                class="d-block w-100 single-product-img rounded-large" loading="lazy"
                alt="Скидка до 25%. Акция до 31 мая">
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 mb-0 section-image order-1 order-md-0">
          <div class="single-image-wrapper">
            <div class="approximation img-wrapper position-relative gallery-2691">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card/action-card-2.webp"
                class="d-block w-100 single-product-img rounded-large" loading="lazy"
                alt="Беспроцентная рассрочка на 1 год. Акция до 31 мая">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End video section -->


<?php get_template_part('template-parts/reviews-section/reviews-section_new', null, array(
    'bg_color' => ' ', 
)); ?>

<div id="sp-contacts"></div>
<footer id="footer">
  <div class="container"
    style="max-width: 1700px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
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
              <li><a href="/">Главная</a></li>
              <li><a href="/portfolio" class="active">Наши работы</a></li>
              <li><a href="#sp-about">О нас</a></li>
              <li><a href="#sp-testimonials">Отзывы</a></li>
              <li><a href="#sp-kak-zakazat">Как заказать</a></li>
              <li><a href="#sp-faq">Частые вопросы</a></li>
              <li><a href="#sp-contacts">Контакты</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul>
              <li><a href="/">Корпусная мебель</a></li>
              <li><a href="/shkafy-cupe">Шкафы-купе</a></li>
              <li><a href="/dveri-cupe">Двери-купе</a></li>
              <li><a href="/shkafy-raspashnye">Шкафы распашные</a></li>
              <li><a href="/garderobnye">Гардеробные</a></li>
              <li><a href="/rabochie-zony">Рабочие зоны</a></li>
              <li><a href="/calculator">Рассчитать стоимость</a></li>
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
          <a href="https://wa.me/79856445775?web=1&amp;app_absent=1" target="_blank">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg" class="ico-button" />
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
        <p class="font-weight-light m-0 text-center fs-16">Создание, продвижение и поддержка сайтов: <a
            href="https://site100.ru" target="_blank">site<span class="text-danger">100</span>.ru</a></p>
      </div>
    </div>
  </div>
</footer>

<script>
function replaceAnchorLinks() {
  const anchors = [
    '#sp-about',
    '#sp-testimonials',
    '#sp-kak-zakazat',
    '#sp-faq'
  ];
  const baseUrl = 'https://garantshkaf.ru/';

  anchors.forEach(anchor => {
    document.querySelectorAll(`a[href="${anchor}"]`).forEach(link => {
      link.href = baseUrl + anchor;
    });
  });
}

document.addEventListener('DOMContentLoaded', replaceAnchorLinks);
</script>

<?php include 'footer.php'; ?>