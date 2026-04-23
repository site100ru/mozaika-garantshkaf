<?php

/**
 * Template Name: Шкафы-купе
 * Template Post Type: page
 * Description: Test 3
 */

include 'header.php';

?>

<!-- SECTION HOME -->
<div id="sp-home"></div>
<section class="home-section home-section-shafy-cupe">
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
    <div class="row">
      <div class="col-lg-7 offset-lg-1">
        <h1><span>Шкафы-купе</span> на&nbsp;заказ от&nbsp;производителя <span><?php echo $location; ?></span></h1>
        <ul class="main-list">
          <li>
            <div class="row">
              <div class="col-2 col-md-1 offset-md-1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/check.png" />
              </div>
              <div class="col-10 col-md-7">
                Замер и дизайн-проект — <span>бесплатно!</span>
              </div>
            </div>
          </li>
          <li>
            <div class="row">
              <div class="col-2 col-md-1 offset-md-1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/check.png" />
              </div>
              <div class="col-10 col-md-7">
                Доставка и монтаж — <span>бесплатно!</span>
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
          <h2 class="forma">Рассчитаем точную стоимость шкафа-купе за 15 минут!</h2>
          <p>Опишите шкаф-купе своими словами. При возможности прикрепите изображение</p>
          <form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate.php"
            enctype="multipart/form-data">
            <textarea type="text" rows="3" name="mes" class="form-control"
              placeholder="Например: длина, ширина, глубина, количество дверей, материал дверей, форма, вид шкафа и т.д."
              style="height: auto; margin-top: 15px; margin-bottom: 15px"></textarea>
            <p class="input-group custom-file-button">
              <label class="input-group-text" for="inputGroupFile">
                Прикрепить</label>
              <input type="file" name="file[]" class="form-control" id="inputGroupFile"
                accept=".jpg,.jpeg,.png,.pdf,.heic" multiple />
            </p>
            <p>
              <input type="text" name="name" class="form-control" placeholder="Ваше Имя" />
            </p>
            <p>
              <input type="text" name="tel" id="phone_mask_3" class="form-control telMask" style="margin-top: 15px"
                placeholder="Ваш телефон" required />
            </p>
            <!-- <label class="form-check-label" for="exampleCheck11">
								<input type="checkbox" class="form-check-input" id="exampleCheck11" checked>
								Я согласен на обработку моих <a href="#">персональных данных</a>.
							</label> -->
            <input type="hidden" id="g-recaptcha-response-order-1-home" name="g-recaptcha-response">
            <button type="submit" class="btn btn-danger" style="width: 100%">
              Отправить
            </button>
          </form>
        </div>
      </div>
    </div>
  </div><!-- /.container -->
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


<!-- Stock section -->
<div id="sp-stock"></div>
<section class="section-stock">
  <div
    style="max-width: 1700px; margin: 0 auto; padding-top: 40px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="breadcrumbs">
            <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
              <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/breadcrumbs-ico-corp.svg"></a>
              / <a href="#">Наши работы</a>
            </nav>
          </div>
        </div>
      </div>

      <div class="row justify-content-center" style="padding-top: 60px;">
        <div class="section-title-wrapper text-center">
          <h2 class="section-title">Акции от нашей фабрики</h2>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
        </div>
        <div class="col-12 col-md-6 mb-3 mb-md-0 section-image order-1 order-md-0">
          <div class="single-image-wrapper">
            <div class="approximation img-wrapper position-relative gallery-2691">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card/action-card.webp"
                class="d-block w-100 single-product-img rounded-large" loading="lazy"
                alt="Скидка до 25%. Акция до 30 апреля">
            </div>
          </div>
        </div>

        <div class="col-12 col-md-6 mb-0 section-image order-1 order-md-0">
          <div class="single-image-wrapper">
            <div class="approximation img-wrapper position-relative gallery-2691">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/card/action-card-2.webp"
                class="d-block w-100 single-product-img rounded-large" loading="lazy"
                alt="Беспроцентная рассрочка на 1 год. Акция до 30 апреля">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End video section -->


<?php get_template_part('template-parts/portfolio-masonry-gallery/portfolio-masonry-gallery', null, [
    'background_color' => '',
    'category' => '021-шкафы-купе',
    'section_title' => 'Наши последние работы и цены',
    'section_description' => '',
    'posts_count' => 18,
    'card_type' => 'zoom-card',
    'show_button' => true,
    'button_text' => 'Смотреть все',
    'show_card_title' => true,
    'show_modal_button'  => true,    
]); ?>

<!-- Archive portfolio section -->
<!-- <div id="sp-portfolio"></div>
<section class="portfolio-section">
	<div class="container"
		style="max-width: 1700px;  padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
		<div class="row justify-content-center">
			<div class="section-title-wrapper text-center">
				<h2 class="section-title">Наши последние работы</h2>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
			</div>

			<div class="col-md-9">
				<?php
				// Получаем все записи портфолио
				$args = [
					'post_type' => 'portfolio',
					'numberposts' => 15,
					'posts_per_page' => 15,
					'portfolio-cat' => '021-шкафы-купе'
				];

				$query = new WP_Query($args);
				$all_images = []; // Массив всех изображений
				$portfolio_data = []; // Данные портфолио
				$image_index = 0; // Глобальный индекс изображений
				
				// Собираем все изображения в один массив
				while ($query->have_posts()):
					$query->the_post();
					$portfolio_images = [];

					// Собираем изображения текущего портфолио
					for ($i = 1; $i <= 9; $i++) {
						$img_url = get_post_meta($post->ID, '_img-' . $i, true);
						if ($img_url) {
							$portfolio_images[] = $img_url;
							$all_images[] = [
								'url' => $img_url,
								'portfolio_id' => $post->ID,
								'portfolio_title' => get_the_title()
							];
						}
					}

					// Сохраняем данные портфолио
					if (!empty($portfolio_images)) {
						$portfolio_data[] = [
							'id' => $post->ID,
							'title' => get_the_title(),
							'images' => $portfolio_images,
							'start_index' => $image_index // С какого индекса начинается в общем массиве
						];
						$image_index += count($portfolio_images);
					}
				endwhile;
				wp_reset_postdata();

				/**
				 * Алгоритм равномерного распределения элементов по колонкам (Balanced Column Distribution)
				 * 
				 * Принцип работы: каждый новый элемент добавляется в колонку с наименьшей текущей высотой.
				 * Это помогает избежать ситуации, когда одна колонка становится значительно выше других.
				 * 
				 * @var array $columns Массив колонок с элементами
				 * @var array $column_heights Счетчики высоты каждой колонки в пикселях
				 */

				// Умное распределение постов по 3 колонкам для выравнивания высоты
				$columns = [[], [], []];
				$column_heights = [0, 0, 0]; // Примерная высота каждой колонки
				
				foreach ($portfolio_data as $portfolio) {
					// Находим колонку с наименьшей высотой
					$min_height_column = array_search(min($column_heights), $column_heights);

					// Добавляем пост в эту колонку
					$columns[$min_height_column][] = $portfolio;

					// Более точная оценка высоты на основе первого изображения
					$first_image = $portfolio['images'][0];
					$estimated_height = 250; // Базовая высота
				
					// Пытаемся получить размеры изображения для более точного расчета
					$image_path = str_replace(home_url(), ABSPATH, $first_image);
					if (file_exists($image_path)) {
						$image_size = getimagesize($image_path);
						if ($image_size) {
							$width = $image_size[0];
							$height = $image_size[1];
							// Рассчитываем высоту при фиксированной ширине колонки (примерно 400px)
							$estimated_height = ($height / $width) * 400;
							// Ограничиваем минимум и максимум
							$estimated_height = max(200, min(400, $estimated_height));
						}
					}

					// Добавляем небольшой отступ
					$estimated_height += 30;

					$column_heights[$min_height_column] += $estimated_height;
				}
				?>

				<div class="row portfolio-columns">
					<?php foreach ($columns as $column_posts): ?>
						<?php if (!empty($column_posts)): ?>
							<div class="col-lg-4 col-md-6 col-sm-12 portfolio-column">
								<?php foreach ($column_posts as $portfolio): ?>
									<div class="portfolio-item mb-4">
										<?php $image_count = count($portfolio['images']); ?>

										<?php if ($image_count > 1): ?>
											<div id="carousel-<?php echo $portfolio['id']; ?>" class="carousel slide" data-bs-ride="carousel"
												data-bs-interval="999999999">
												<div class="carousel-indicators" style="bottom: 5%;">
													<?php for ($i = 0; $i < $image_count; $i++): ?>
														<button type="button" data-bs-target="#carousel-<?php echo $portfolio['id']; ?>"
															data-bs-slide-to="<?php echo $i; ?>" <?php echo $i === 0 ? 'class="active"' : ''; ?>
															aria-label="Slide <?php echo $i + 1; ?>"></button>
													<?php endfor; ?>
												</div>

												<div class="carousel-inner">
													<?php foreach ($portfolio['images'] as $index => $img_url): ?>
														<div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
															<a href="#" onclick="openGallery(<?php echo $portfolio['start_index'] + $index; ?>); return false;">
																<div class="single-product-img approximation position-relative">
																	<img src="<?php echo $img_url; ?>" class="rounded w-100" alt="..." loading="lazy">
																	<div class="magnifier"></div>
																</div>
															</a>
														</div>
													<?php endforeach; ?>
												</div>

												<button class="carousel-control-prev" type="button"
													data-bs-target="#carousel-<?php echo $portfolio['id']; ?>" data-bs-slide="prev">
													<span class="carousel-control-prev-icon"></span>
												</button>
												<button class="carousel-control-next" type="button"
													data-bs-target="#carousel-<?php echo $portfolio['id']; ?>" data-bs-slide="next">
													<span class="carousel-control-next-icon"></span>
												</button>
											</div>
										<?php else: ?>
											<div>
												<a href="#" onclick="openGallery(<?php echo $portfolio['start_index']; ?>); return false;">
													<div class="single-product-img approximation position-relative">
														<img src="<?php echo $portfolio['images'][0]; ?>" class="rounded w-100" alt="..."
															loading="lazy">
														<div class="magnifier"></div>
													</div>
												</a>
											</div>
										<?php endif; ?>
									</div>
								<?php endforeach; ?>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>

				<div class="row text-md-center">
					<div class="col">
						<a href="/portfolio-cat/021-шкафы-купе/" class="btn btn-danger mt-4">Все работы</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<!-- CSS стили для выравнивания колонок -->
<style>
.portfolio-section .single-product-img {
  height: auto !important;
}
</style>
<!-- /Archive-portfolio section -->

<div id="galleryModal"
  style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.9); z-index: 999999999999;">
  <div id="mainGallery" class="carousel slide h-100" data-bs-ride="carousel" data-bs-interval="99999999999">
    <div class="carousel-indicators">
      <?php foreach ($all_images as $index => $image): ?>
      <button type="button" data-bs-target="#mainGallery" data-bs-slide-to="<?php echo $index; ?>"
        aria-label="Slide <?php echo $index + 1; ?>"></button>
      <?php endforeach; ?>
    </div>

    <div class="carousel-inner h-100">
      <?php foreach ($all_images as $index => $image): ?>
      <div class="carousel-item h-100" data-bs-interval="99999999999">
        <div class="d-flex align-items-center justify-content-center h-100">
          <img src="<?php echo $image['url']; ?>" class="img-fluid" style="max-width: 90vw; max-height: 90vh;"
            alt="<?php echo $image['portfolio_title']; ?>">
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#mainGallery" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainGallery" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>

  <!-- Кнопка закрытия -->
  <button type="button" onclick="closeGallery();" class="btn-close btn-close-white"
    style="position: fixed; top: 25px; right: 25px; z-index: 99999;"></button>
</div>

<script>
let galleryCarousel = null;

// Простые функции для управления галереей
function openGallery(startIndex) {
  const modal = document.getElementById('galleryModal');
  const carouselElement = document.getElementById('mainGallery');

  // Показываем модальное окно
  modal.style.display = 'block';

  // Уничтожаем предыдущий экземпляр карусели если есть
  if (galleryCarousel) {
    galleryCarousel.dispose();
  }

  // Сначала устанавливаем активные элементы
  updateActiveIndicator(startIndex);

  // Создаем новый экземпляр карусели
  galleryCarousel = new bootstrap.Carousel(carouselElement, {
    interval: false,
    wrap: true
  });
}

function closeGallery() {
  const modal = document.getElementById('galleryModal');
  modal.style.display = 'none';

  // Уничтожаем карусель при закрытии
  if (galleryCarousel) {
    galleryCarousel.dispose();
    galleryCarousel = null;
  }
}

function updateActiveIndicator(index) {
  // Убираем active у всех индикаторов
  document.querySelectorAll('#mainGallery .carousel-indicators button').forEach(btn => {
    btn.classList.remove('active');
  });

  // Убираем active у всех слайдов
  document.querySelectorAll('#mainGallery .carousel-item').forEach(item => {
    item.classList.remove('active');
  });

  // Добавляем active к нужным элементам
  const indicators = document.querySelectorAll('#mainGallery .carousel-indicators button');
  const slides = document.querySelectorAll('#mainGallery .carousel-item');

  if (indicators[index]) indicators[index].classList.add('active');
  if (slides[index]) slides[index].classList.add('active');
}

// Закрытие по клику на фон
document.getElementById('galleryModal').addEventListener('click', function(e) {
  if (e.target === this) {
    closeGallery();
  }
});

// Закрытие по ESC
document.addEventListener('keydown', function(e) {
  if (e.key === 'Escape') {
    closeGallery();
  }

  // Навигация стрелками только если модальное окно открыто
  if (document.getElementById('galleryModal').style.display === 'block' && galleryCarousel) {
    if (e.key === 'ArrowLeft') {
      e.preventDefault();
      galleryCarousel.prev();
    } else if (e.key === 'ArrowRight') {
      e.preventDefault();
      galleryCarousel.next();
    }
  }
});
</script>




<!-- SECTION ORDER 1 -->
<?php get_template_part('template-parts/quiz/quiz'); ?>
<!-- /SECTION ORDER 1 -->

<!-- SECTION ABOUT -->
<div id="sp-about"></div>
<section class="section-about">
  <div class="container"
    style="max-width: 1700px;  padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <div class="row justify-content-center">
      <div class="section-title-wrapper text-center">
        <h2 class="section-title">Узнайте о нас больше</h2>
        <!-- <p class="text-center mb-5">Это бесплатно и ни к чему Вас не обязывает</p> -->

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
      </div>
    </div>
    <div class="row justify-content-end">
      <div class="col-md-7">
        <h3>ГАРАНТШКАФ</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1">
            <p>Мебельная фабрика <strong>«Гарантшкаф»</strong> вот уже более 14 лет изготавливает шкафы-купе и другую
              корпусную мебель. За это время мы научились разбираться в качестве материалов и технологий, применяя в
              своей работе только лучшие из них. Поэтому мы производим прочную и функциональную мебель по выгодным
              ценам.</p>
            <p>Мы работаем по индивидуальным эскизам, учитываем особенности помещений, используем современные и
              качественные материалы, подбирая их исходя из дизайна Вашего помещения.</p>
            <p>Количество благодарных клиентов непрестанно растет, как и наша репутация, а положительные отзывы о нас
              множатся. На то есть несколько причин:</p>
          </div>
          <div class="col-lg-6 text-right order-1 order-lg-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/about.jpg" class="img-fluid garantshaf" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /SECTION ABOUT -->

<!-- Video section -->
<div id="sp-video"></div>
<section class="section-video">
  <div class="container"
    style="max-width: 1700px;  padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <div class="row justify-content-center">
      <div class="section-title-wrapper text-center">
        <h2 class="section-title">Посмотрите нашу видеопрезентацию</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
      </div>
      <div class="col-md-9">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <div style="position: relative">
              <video id="video-player" playsinline="playsinline" loop="loop"
                poster="https://garantshkaf.ru/wp-content/themes/mozaika-garantshkaf/img/video-poster.jpg">
                <!-- muted="muted" autoplay="autoplay" -->
                <!-- <source src="header-bg.ogv" type='video/ogg; codecs="theora, vorbis"'> -->
                <source src="<?php echo get_stylesheet_directory_uri(); ?>/videos/video.mp4"
                  type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
                <!-- <source src="header-bg.webm" type='video/webm; codecs="vp8, vorbis"'> -->
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

<!-- SECTION ADVANTAGES -->
<section class="section-about">
  <div class="container"
    style="max-width: 1700px;  padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <div class="row justify-content-center">
      <div class="section-title-wrapper text-center">
        <h2 class="section-title">За что нас выбирают</h2>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
      </div>

      <div class="col-md-9">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-lg-5">
                <div class="row">
                  <div class="col-3 offset-md-1">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/proizvodstvo.png"
                      class="img-fluid" />
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
                    <p>Начиная с первого контакта с нашими клиентами мы стараемся выяснить их пожелания, предпочтения и
                      подсказать лучшие, на наш взгляд, решения. Мы не давим на клиентов, не навязывать купить у нас то,
                      что клиенту не нравится или не хочется по каким то причинам.</p>
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
                  <div class="col text-center preimushestvo">
                    <p>Наша фабрика непрерывно работает с 2011 года по адресу: МО, гор. Лобня, ул. Промышленная, д. 4Д.
                    </p>
                    <p>Мы не заманиваем наших клиентов акциями и ценами ниже себестоимости. Мы делаем свою работу по
                      совести и готовы гарантировать качество по договору.</p>
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
<!-- /SECTION ADVANTAGES -->

<!-- DIRECTOR SECTION -->
<section class="section-director">
  <div class="container"
    style="max-width: 1700px;  padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <div class="container">
      <div class="row align-items-center justify-content-center">

        <div class="d-none d-xl-block col-xl-1"></div>
        <!-- Фото -->
        <div class="col-lg-6 col-xl-4 text-center mb-3 mb-lg-0">
          <div class="d-lg-none section-title-wrapper text-center text-lg-start">
            <h2 class="section-title">Обращение руководителя фабрики</h2>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки"
              class="img-fluid mb-0" />
          </div>

          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/director.png" alt="Орлов Игорь Львович"
            class="img-fluid director-photo" />
        </div>

        <div class="d-none d-xl-block col-xl-1"></div>

        <!-- Текст -->
        <div class="col-lg-6 col-xl-5">

          <div class="d-none d-lg-block section-title-wrapper">
            <h2 class="section-title">Обращение руководителя фабрики</h2>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки"
              class="img-fluid mb-0" />
          </div>

          <p class="director-quote">«Мы производим шкафы, гардеробные и другую корпусную мебель с 2011 года. Нам
            нравится наша работа, нравится делать красивые вещи, нравится получать слова благодарности от наших
            клиентов. Приятно, когда твоя работа радует людей.<br><br>Каждому нашему клиенту мы гарантируем:
            качественную и красивую продукцию без наценок посредников и индивидуальный подход.»</p>

          <p class="director-name">Орлов Игорь Львович</p>
        </div>

        <div class="d-none d-xl-block col-xl-1"></div>

      </div>
    </div>
  </div>
</section>
<!-- /DIRECTOR SECTION -->

<!-- Testimonials section -->
<div id="sp-testimonials"></div>
<?php get_template_part('template-parts/reviews-section/reviews-section_new', null, array(
    'bg_color' => ' ', 
)); ?>
<!-- <section class="section-testimonials">
	<div class="container"
		style="max-width: 1700px;  padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
		<div class="row justify-content-center">
			<div class="section-title-wrapper text-center">
				<h2 class="section-title">Отзывы о нас в Яндексе</h2>

				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
			</div>

			<div class="col-md-9">
				<div class="row justify-content-center text-center text-md-start">
					<div class="col-md-7 mb-5 mb-md-0 text-center">
						<div style="width: 100%; height: 800px; overflow: hidden; position: relative;">
							<iframe style="width:100%; height:100%; border:1px solid #e6e6e6;border-radius:8px;box-sizing:border-box"
								src="https://yandex.ru/maps-reviews-widget/43131278671?comments"></iframe>
							<a href="https://yandex.ru/maps/org/garantshkaf/43131278671/" target="_blank"
								style="box-sizing:border-box;text-decoration:none;color:#b3b3b3;font-size:10px;font-family:YS Text,sans-serif;padding:0 20px;position:absolute;bottom:8px;width:100%;text-align:center;left:0;overflow:hidden;text-overflow:ellipsis;display:block;max-height:14px;white-space:nowrap;padding:0 16px;box-sizing:border-box">
								Фабрика «Гарантшкаф» на Яндекс.Картах
							</a>
						</div>

                    </div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- /Testimonials section -->

<!-- SECTION ORDER 1 -->
<section class="section-order-1 pt-md-0">
  <div class="container"
    style="max-width: 1700px;  padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <div class="row">
      <div class="section-title-wrapper text-center">
        <h2 class="section-title">Рассчитаем точную стоимость шкафа-купе за 15 минут!</h2>
        <!-- <p class="text-center ">Это бесплатно и ни к чему Вас не обязывает</p> -->

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
      </div>

      <div class="col-md-8 offset-md-2">
        <div class="row">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-2">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/question.png" class="img-fluid" />
              </div>
              <div class="col-10">
                <p class="mb-2">Для расчета опишите шкаф-купе своими словами. При возможности прикрепите изображение
                </p>
                <form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate.php"
                  enctype="multipart/form-data">
                  <textarea type="text" rows="3" name="mes" class="form-control"
                    placeholder="Например: длина, ширина, глубина, количество дверей, материал дверей, форма, вид шкафа и т.д."
                    style="height: auto;  margin-top: 15px;  margin-bottom: 15px;"></textarea>
                  <p class="input-group custom-file-button">
                    <label class="input-group-text" for="inputGroupFile3">
                      Прикрепить
                    </label>
                    <input type="file" name="file[]" class="form-control" style="border: none" id="inputGroupFile3"
                      accept=".jpg,.jpeg,.png,.pdf,.heic" multiple="" />
                  </p>

                  <p>
                    <input type="text" name="name" class="form-control" style="margin-top: 15px"
                      placeholder="Ваше Имя" />
                  </p>

                  <p>
                    <input type="text" name="tel" id="phone_mask_3" class="form-control telMask"
                      style="margin-top: 15px" placeholder="Ваш телефон" required />
                  </p>
                  <label class="form-check-label" for="exampleCheck11">
                    <input type="checkbox" class="form-check-input" id="exampleCheck11" checked>
                    Я согласен на обработку моих <a href="index.html">персональных данных</a>.
                  </label>

                  <input type="hidden" id="g-recaptcha-response-order-2" name="g-recaptcha-response">
                  <button type="submit" class="btn btn-danger" style="width: 100%">
                    Отправить
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-6 text-center">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/question-shkaf.png"
              class="question-img img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /SECTION ORDER 1 -->
















<!-- PROCESS SECTION -->
<div id="sp-kak-zakazat"></div>
<section id="process">
  <div class="container"
    style=" max-width: 1700px;  padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <div class="row justify-content-center">
      <div class="section-title-wrapper text-center">
        <h2 class="section-title">Процесс заказа, оплаты и установки шкафа-купе</h2>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
      </div>

      <div class="col-md-9">
        <div class="row">
          <div class="col-lg-3 text-center step"> <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-1.png" class="img-fluid" />
            <p>Звонок или заявка <br />на сайте</p>
          </div>
          <div class="col-lg-3 text-center step"> <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-2.png" class="img-fluid" />
            <p>Консультация менеджера и выезд замерщика</p>
          </div>
          <div class="col-lg-3 text-center step"> <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-3.png" class="img-fluid" />
            <p>Замер и выбор <br />материалов</p>
          </div>
          <div class="col-lg-3 text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-4.png"
              class="img-fluid" />
            <p>Определение окончательной стоимости</p>
          </div>
          <div class="col-lg-3 text-center step"> <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-5.png" class="img-fluid" />
            <p>Принятие Вами решения о заказе шкафа купе у нас. Только здесь Вы вносите предоплату 30% по Договору
              (любой удобный для Вас способ предоплаты)</p>
          </div>
          <div class="col-lg-3 text-center step"> <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-6.png" class="img-fluid" />
            <p>Создание и <br />согласование 3D проекта и запуск его в производство</p>
          </div>
          <div class="col-lg-3 text-center step"> <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-7.png" class="img-fluid" />
            <p>Доставка и установка <br />одним днем</p>
          </div>
          <div class="col-lg-3 text-center"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/step-8.png"
              class="img-fluid" />
            <p>Прием работы и окончательные расчеты</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--process zakaza-->


<!-- FAQ section -->
<div id="sp-faq"></div>
<section id="answers">
  <div class="container"
    style="max-width: 1700px;  padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <div class="row justify-content-center">
      <div class="section-title-wrapper text-center">
        <h2 class="section-title">Наши ответы на часто задаваемые вопросы</h2>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
      </div>

      <div class="col-md-9">
        <div class="row">
          <div class="col-lg-5 offset-lg-1 order-2 order-lg-1">
            <div class="accordion" id="accordionExample">
              <div class="accordion-item">
                <h4 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Сколько времени
                    требуется на производство и установку шкафа-купе?</button>
                </h4>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">Мы не обещаем сделать шкаф-купе за день, два, три или даже 5 дней. Мы не
                    вводим наших клиентов в заблуждение. От заказа до установки шкафа в среднем проходит 1,5-2 недели,
                    после чего мы привезем и установим шкаф-купе одним днем.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Насколько надежная Ваша компания?
                  </button>
                </h4>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">Мы делаем шкафы-купе и другую корпусную мебель с 2011 года. Имеем
                    собственное производство, которое Вы можете посетить, чтобы убедиться, что мы сами изготавливаем все
                    шкафы, а не поручаем это другим, а с Вас берем дополнительную наценку.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Как выбрать наполнение и дизайн шкафа?
                  </button>
                </h4>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">Наши замерщики помогут Вам с выбором материалов и наполнения шкафа с
                    учетом Ваших пожеланий и конструктивных возможностей помещения.</div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    С какими производителями материалов вы работаете?
                  </button>
                </h4>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">Мы работаем с ведущими производителями, обладающими большой палитрой
                    цветов и высоким качеством ЛДСП, такими как EGGER и Русский ламинат. Профиль для дверей мы
                    используем Aristo, Italum и Inlux.</div>
                </div>
              </div>

              <div class="accordion-item">
                <h4 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Как я могу узнать точную стоимость будущего шкафа?
                  </button>
                </h4>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">После замера и выбора материалов шкафа-купе мы сразу скажем Вам
                    окончательную стоимость. Стоимость включает в себя изготовление, доставку и установку. Больше
                    никаких скрытых платежей!</div>
                </div>
              </div>

              <div class="accordion-item">
                <h4 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Насколько конкурентные ваши цены?
                  </button>
                </h4>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">У нас собственное производство и долгосрочное сотрудничество с
                    поставщиками материалов. Поэтому мы можем гарантировать одни из самых низких цен!</div>
                </div>
              </div>
              <div class="accordion-item">
                <h4 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed text-uppercase" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    Какие гарантии вы даете?
                  </button>
                </h4>
                <div id="collapseSeven" class="accordion-collapse collapse  aria-labelledby=" headingSeven"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">Мы делаем качественную мебель и исполняем все обязательства и гарантии
                    согласно договору!</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-5 offset-lg-1 px-0 text-right order-1 order-lg-2">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shkaf-kupe-img.jpg"
              class="img-fluid without-pad" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- SECTION ORDER 1 -->
<section class="section-order-1 pt-md-0">
  <div class="container"
    style="max-width: 1700px; padding-top: 80px; padding-bottom: 80px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <div class="row">
      <div class="section-title-wrapper text-center">
        <h2 class="section-title">Рассчитаем точную стоимость шкафа-купе за 15 минут!</h2>
        <!-- <p class="text-center ">Это бесплатно и ни к чему Вас не обязывает</p> -->

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
      </div>

      <div class="col-md-8 offset-md-2">
        <div class="row">
          <div class="col-lg-6 text-center"> <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/img/question-shkaf.png"
              class="question-img img-fluid" />
          </div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-2"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/question.png"
                  class="img-fluid" />
              </div>
              <div class="col-10">
                <p class="mb-2">Для расчета опишите шкаф-купе своими словами. При возможности прикрепите изображение.
                </p>
                <form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/get_calculate.php"
                  enctype="multipart/form-data">
                  <textarea type="text" rows="3" name="mes" class="form-control"
                    placeholder="Например: длина, ширина, глубина, количество дверей, материал дверей, форма, вид шкафа и т.д."
                    style="height: auto;  margin-top: 15px;  margin-bottom: 15px;"></textarea>
                  <p class="input-group custom-file-button">
                    <label class="input-group-text" for="inputGroupFile3-3">
                      Прикрепить
                    </label>
                    <input type="file" name="file[]" class="form-control" style="border: none" id="inputGroupFile3-3"
                      accept=".jpg,.jpeg,.png,.pdf,.heic" multiple="" />
                  </p>

                  <p>
                    <input type="text" name="name" class="form-control" style="margin-top: 15px"
                      placeholder="Ваше Имя" />
                  </p>

                  <p>
                    <input type="text" name="tel" id="phone_mask_3" class="form-control telMask"
                      style="margin-top: 15px" placeholder="Ваш телефон" required />
                  </p>
                  <p><input type="email" id="email" name="email" class="form-control" placeholder="Ваш email" required>
                  </p>

                  <label class="form-check-label" for="exampleCheck11">
                    <input type="checkbox" class="form-check-input" id="exampleCheck11" checked>
                    Я согласен на обработку моих <a href="index.html">персональных данных</a>.
                  </label>

                  <input type="hidden" id="g-recaptcha-response-order-3-with-mail" name="g-recaptcha-response">
                  <button type="submit" class="btn btn-danger" style="width: 100%">Отправить</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /SECTION ORDER 1 -->



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
    data: {
      question,
      answer
    },
    dataType: "html",
    success: function(data) {
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
    data: {
      question,
      answer1,
      answer2,
      answer3,
      answer4
    },
    dataType: "html",
    success: function(data) {
      var p = document.getElementById("quiz-container");
      p.innerHTML = data;
    },
  });
}

function question3() {
  var question = "question3";

  if (document.getElementById("customRadioInline1").checked == true) {
    var answer = "2 двери";
  } else if (document.getElementById("customRadioInline2").checked == true) {
    var answer = "3 двери";
  } else if (document.getElementById("customRadioInline3").checked == true) {
    var answer = "4 двери";
  } else if (document.getElementById("customRadioInline4").checked == true) {
    var answer = "5 и более дверей";
  }

  $.ajax({
    type: "POST",
    url: "quiz-action.php",
    data: {
      question,
      answer
    },
    dataType: "html",
    success: function(data) {
      var p = document.getElementById("quiz-container");
      p.innerHTML = data;
    },
  });
}
</script>
<!-- End quiz script -->

<style>
:root {
  --section-margin-bottom: 3.75rem;

  /* Цвета */
  --title-color: #323232;
  --subtitle-color: #5f5f5f;

  /* Размеры */
  --title-font-size: 1.875rem;
  --subtitle-font-size: 1.25rem;
  --text-font-size: 1.125rem;
  --text-font-size-sm: 0.875rem;

  /* Шрифт */
  --font-family: 'Helvetica Neue', sans-serif;
  --line-height: 1;
  --line-height-big: 1.35;
  --title-font-weight: 700;
  --subtitle-font-weight: 500;
  --title-line-height: 1;
}

/* Адаптивные стили */
@media (max-width: 767.98px) {
  :root {
    --section-margin-bottom: 2rem;
    --title-font-size: 1.5rem;
    --text-font-size: 1rem;
  }
}

@media (max-width: 575.98px) {
  :root {
    --section-margin-bottom: 1.5rem;
    --title-font-size: 1.25rem;
    --text-font-size: 0.9rem;
  }
}

.section-title-wrapper {
  margin-bottom: var(--section-margin-bottom);
}

.section-title-wrapper h2.section-title {
  font-family: var(--font-family);
  font-size: var(--title-font-size);
  line-height: var(--title-line-height);
  font-weight: var(--title-font-weight);
  margin-bottom: 1rem;
  color: var(--title-color);
  text-transform: initial;
}

.section-subtitle {
  font-family: var(--font-family);
  font-size: var(--subtitle-font-size);
  line-height: var(--subtitle-line-height);
  font-weight: var(--subtitle-font-weight);
  margin-bottom: 1rem;
  color: var(--subtitle-color);
}
</style>


<div id="sp-contacts"></div>
<footer id="footer">
  <div class="container"
    style="max-width: 1700px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <div class="row">
      <div class="col-md-3 offset-md-1"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo.png"
          class="img-fluid logo" />
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
              <li><a href="/portfolio">Наши работы</a></li>
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
              <li><a href="/shkafy-cupe" class="active">Шкафы-купе</a></li>
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
            <img src=" <?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg" class="ico-button" />
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


<?php include 'footer.php'; ?>