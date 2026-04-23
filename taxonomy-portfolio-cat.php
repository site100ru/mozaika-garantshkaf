<?php
//taxonomy-portfolio-cat.php
/**
 * Template Name: Архив портфолио по категориям
 * Template Post Type: portfolio
 */

include 'header.php';

?>
<!-- SECTION HOME -->
<div id="sp-home"></div>
<!-- Header 1 -->
<div class="col-md-12 d-flex justify-content-end col-nav" style="background-color:#F5F5F5;">
  <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block py-0">
    <div class="container-fluid px-0">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link text-dark" href="archive-product-portfolio.html#">
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
                <a class="nav-link text-dark" href="archive-product-portfolio.html#">
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
                <a href="archive-product-portfolio.html#" class="nav-link text-dark" data-bs-toggle="modal"
                  data-bs-target="#callback">
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
                <a class="top-menu-tel nav-link text-dark" href="tel:89856445775">
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
                <a class="nav-link ico-button"
                  href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="_blank">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max-ico.svg" />
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </nav>
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
<div class="col-md-12 bottom-nav d-none d-md-block navbar-light-light" style="border-top: 1px solid #E1E1E1;"
  id="top-menu-2">
  <nav class="header-nav-bottom navbar navbar-expand-lg navbar-light header-bottom" style="background-color: #fff">
    <div class="container bottom-container">
      <a class="navbar-brand" href="#">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/logo-dark-theme.svg" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobail-header-collapse"
        aria-controls="mobail-header-collapse" aria-expanded="false" aria-label="Toggle navigation">
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

<header id="archive-portfolio-header" class="home-section home-section-shafy-cupe woocommerce-products-header"
  style="background-position: center;">
  <div class="container">
    <div class="row align-items-center text-start">
      <div class="col py-5">
        <h1 class="my-5">Наши работы</h1>
      </div>
    </div>
  </div>
</header>
<!-- END SECTION HOME -->

<style>
.portfolio-section .single-product-img {
  height: auto !important;
}
</style>
<?php
$current_term = get_queried_object();
$current_slug = $current_term->slug ?? '';

get_template_part('template-parts/portfolio-masonry-gallery/portfolio-masonry-gallery', null, [
    'background_color' => 'bg-white',
    'section_title'    => $current_term->name ?? 'Наши работы',
    'category'         => $current_slug,
    'show_filter'      => true,
    'show_button'      => false,
    'posts_count'      => -1,
    'card_type'        => 'zoom-card',
    'show_card_title'  => true,
    'show_modal_button'=> false,
    'show_breadcrumbs' => true,
    'show_modal_button'  => true,    
]);
?>

<!-- Gallery wrapper-->
<div id="galleryWrapper"
  style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 999999999;">


  <?php
	// параметры по умолчанию
	$posts = get_posts(array(
		'numberposts' => 999,
		'orderby' => 'date',
		'order' => 'DESC',
		'post_type' => 'portfolio',
		//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
	));

	foreach ($posts as $post) {
		setup_postdata($post); ?>

  <div id="gallery-<?php echo $post->ID; ?>" class="carousel slide" data-bs-ride="carousel"
    style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
    <div class="carousel-indicators">
      <?php

				/*
				$images = get_post_gallery_images();
				$count2 = 0;
				foreach ( $images as $image ) {


					if ( $count2 == 0 ) { ?>

      <button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button"
        data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>"
        aria-label="Slide 3"></button>

      <?php $count2 = $count2 + 1; } else { ?>

      <button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button"
        data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>"
        aria-label="Slide 3"></button>

      <?php $count2 = $count2 + 1; }
				}*/







				$count2 = 0;
				for ($i = 1; $i <= 9; $i++) {
					if (get_post_meta($post->ID, '_img-' . $i)) {
						if ($count2 == 0) { ?>

      <button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button"
        data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>"
        aria-label="Slide 3"></button>

      <?php $count2 = $count2 + 1;
						} else { ?>

      <button id="ind-<?php echo $post->ID; ?>-<?php echo $count2; ?>" type="button"
        data-bs-target="#gallery-<?php echo $post->ID; ?>" data-bs-slide-to="<?php echo $count2; ?>"
        aria-label="Slide 3"></button>

      <?php $count2 = $count2 + 1;
						}
					}
				}
				?>

    </div>
    <div class="carousel-inner h-100">
      <?php

				/*
				$images = get_post_gallery_images();
				$count2 = 0;
				foreach ( $images as $image ) { ?>
      <div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>" class="carousel-item h-100">
        <div class="row align-items-center h-100">
          <div class="col text-center">
            <img src="<?php echo $image; ?>" class="img-fluid" style="max-width: 75vw; max-height: 75vh;" alt="...">
          </div>
        </div>
      </div>

      <?php  $count2 = $count2 + 1; } */


				$count2 = 0;
				for ($i = 1; $i <= 9; $i++) {
					if (get_post_meta($post->ID, '_img-' . $i)) { ?>
      <div id="img-<?php echo $post->ID; ?>-<?php echo $count2; ?>"
        class="carousel-item h-100 <?php // if ( $i == 1 ) echo ' active'; ?>" data-bs-interval="999999999">
        <div class="row align-items-center h-100">
          <div class="col text-center">
            <img src="<?php echo get_post_meta($post->ID, '_img-' . $i)[0]; ?>" class="img-fluid"
              style="max-width: 90vw; max-height: 90vh;" alt="...">
          </div>
        </div>
      </div>
      <?php $count2 = $count2 + 1;
					}
				}

				?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#gallery-<?php echo $post->ID; ?>"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <?php }
	wp_reset_postdata();
	?>

  <!-- Кнопка закрытия галереи -->
  <button type="button" onClick="closeGallery();" class="btn-close btn-close-white"
    style="position: fixed; top: 25px; right: 25px; z-index: 99999;" aria-label="Close"></button>
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


  <?php // Открываем галерею
		$posts = get_posts(array(
			'numberposts' => 999,
			'orderby' => 'date',
			'order' => 'DESC',
			'post_type' => 'portfolio',
			//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
		));

		foreach ($posts as $post) {
			setup_postdata($post);

			echo 'if ( gallery == "gallery-' . $post->ID . '" ) { document.getElementById("gallery-' . $post->ID . '").style.display = "block"; }';

		}
		wp_reset_postdata();
		?>


  <?php // Открываем изображения
		$posts = get_posts(array(
			'numberposts' => 999,
			'orderby' => 'date',
			'order' => 'DESC',
			'post_type' => 'portfolio',
			//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
		));

		foreach ($posts as $post) {
			setup_postdata($post);
			$count2 = 0;
			for ($i = 1; $i <= 9; $i++) {
				echo 'if ( image == "img-' . $post->ID . '-' . $count2 . '" ) { document.getElementById("img-' . $post->ID . '-' . $count2 . '").classList.add("active"); document.getElementById("ind-' . $post->ID . '-' . $count2 . '").classList.add("active"); } ';
				$count2 = $count2 + 1;
			}
		}
		wp_reset_postdata();
		?>
}


// Кнопка закрытия галереи
function closeGallery() {
  // Закрываем обертку галереи
  document.getElementById('galleryWrapper').style.display = 'none';

  <?php // Открываем галерею
		$posts = get_posts(array(
			'numberposts' => 999,
			'orderby' => 'date',
			'order' => 'DESC',
			'post_type' => 'portfolio',
			//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
		));

		foreach ($posts as $post) {
			setup_postdata($post);

			echo 'document.getElementById("gallery-' . $post->ID . '").style.display = "none";';

		}
		wp_reset_postdata();
		?>

  <?php // Закрываем изображения
		$posts = get_posts(array(
			'numberposts' => 999,
			'orderby' => 'date',
			'order' => 'DESC',
			'post_type' => 'portfolio',
			//'post__not_in' => array( 42 ) // Выводим все категории портфолио кроме Разное
		));

		/*
		foreach( $posts as $post ) { setup_postdata($post);
			$images = get_post_gallery_images();
			$count2 = 0;
			foreach ( $images as $image ) {

				echo 'document.getElementById("img-'.$post->ID.'-'.$count2.'").classList.remove("active"); document.getElementById("ind-'.$post->ID.'-'.$count2.'").classList.remove("active");';

				$count2 = $count2 + 1;
			}
		} wp_reset_postdata(); */


		foreach ($posts as $post) {
			setup_postdata($post);
			$count2 = 0;
			for ($i = 1; $i <= 9; $i++) {
				echo 'document.getElementById("img-' . $post->ID . '-' . $count2 . '").classList.remove("active"); document.getElementById("ind-' . $post->ID . '-' . $count2 . '").classList.remove("active");';

				$count2 = $count2 + 1;
			}
		}
		wp_reset_postdata(); ?>

}
</script>



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

<?php include 'footer-2.php'; ?>