<?php

/**
 * Template: Секция "Отзывы о нас в независимых источниках"
 * Файл: template-parts/reviews-section/reviews-section.php
 * Описание: Отдельная секция для отображения отзывов клиентов салона
 */
$bg_color = $args['bg_color'] ?? 'bg-light';
$reviews_type = $args['reviews_type'] ?? 'old-reviews';
?>

<!-- Reviews section -->
<section class="section-testimonials <?php echo esc_attr($bg_color); ?>">
  <div class="container"
    style="max-width: 1700px; padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
    <?php if ($reviews_type === 'new-reviews'): ?>
    <div class="section-title-wrapper text-md-center">
      <h2 class="section-title">Отзывы о нас в Яндексе</h2>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid">
    </div>
    <?php endif; ?>

    <div class="row justify-content-center">
      <div class="col-md-9">
        <?php if ($reviews_type === 'old-reviews'): ?>
        <h2><span>06</span> / Отзывы о нас в Яндексе</h2>
        <?php endif; ?>

        <div class="col text-md-center pb-4">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/yandex-logo.svg" class="mb-3 yandex-logo">
          <div class="review-rating mb-3 d-flex align-items-md-end justify-content-md-center gap-4 align-items-center">
            <div>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
            </div>
            <p class="mb-0" style="font-size: 18px;     line-height: 1;">4,6 из 5</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-9 gap-3 gap-lg-0 gap-xl-3 d-flex flex-wrap flex-xl-nowrap mx-auto">
        <!-- Отзыв 1 -->
        <div class="col-12 col-lg-6 col-xl-4 mb-4">
          <div class="review-card rounded h-100">
            <!-- Фото и информация о клиенте -->
            <div class="review-header d-flex align-items-center mb-3">
              <div class="review-photo me-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/icon-1.png" alt="Maxyz Nikolaevich"
                  class="rounded-circle" width="50" height="50">
              </div>
              <div class="review-info">
                <p class="review-title mb-0">Maxyz Nikolaevich</p>
                <p class="review-date text-muted small mb-0">5 ноября 2024</p>
              </div>
            </div>

            <!-- Звездочки -->
            <div class="review-rating mb-3">
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
            </div>

            <!-- Текст отзыва -->
            <div class="review-text">
              <p class="review-description">Нужен был шкаф в спальню. Обзвонил множество контор. Остановился на
                гарантшкаф. По телефону все подробно объяснили по стоимости,срокам. В этот же день связался
                замерщик,договорились о встрече. У замерщика в наличии все ...
                <a href="https://yandex.kz/maps/org/garantshkaf/43131278671/?ll=37.475504%2C56.017226&z=17"
                  style="text-decoration: none; color: #323232; font-weight: 500; font-family: 'Gilroy-Medium';">читать
                  еще</a>
              </p>
            </div>
          </div>
        </div>

        <!-- Отзыв 2 -->
        <div class="col-12 col-lg-6 col-xl-4 mb-4">
          <div class="review-card rounded h-100">
            <!-- Фото и информация о клиенте -->
            <div class="review-header d-flex align-items-center mb-3">
              <div class="review-photo me-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/icon-2.png" alt="Екатерина Хабиева"
                  class="rounded-circle" width="50" height="50">
              </div>
              <div class="review-info">
                <p class="review-title mb-0">Екатерина Хабиева</p>
                <p class="review-date text-muted small mb-0">13 февраля 2025</p>
              </div>
            </div>

            <!-- Звездочки -->
            <div class="review-rating mb-3">
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
            </div>

            <!-- Текст отзыва -->
            <div class="review-text">
              <p class="review-description">Я счастливая обладательница красивого шкафа! Запланировала шкаф в прихожей,
                чтобы не потерять пространство.
                В браузере набрала шкаф купе, вышла компания Гарантшкаф, оставила номер телефона, перезвонили через 10
                минут, ...
                <a href="https://yandex.kz/maps/org/garantshkaf/43131278671/?ll=37.475504%2C56.017226&z=17"
                  style="text-decoration: none; color: #323232; font-weight: 500; font-family: 'Gilroy-Medium';">читать
                  еще</a>
              </p>
            </div>
          </div>
        </div>

        <!-- Отзыв 3 -->
        <div class="col-12 col-lg-6 col-xl-4 mb-4">
          <div class="review-card rounded h-100">
            <!-- Фото и информация о клиенте -->
            <div class="review-header d-flex align-items-center mb-3">
              <div class="review-photo me-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/icon-3.png" alt="Наталья В."
                  class="rounded-circle" width="50" height="50">
              </div>
              <div class="review-info">
                <p class="review-title mb-0">Наталья В.</p>
                <p class="review-date text-muted small mb-0">26 апреля 2025</p>
              </div>
            </div>

            <!-- Звездочки -->
            <div class="review-rating mb-3">
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
              <i class="star-filled"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/star.svg"
                  alt="stars"></i>
            </div>

            <!-- Текст отзыва -->
            <div class="review-text">
              <p class="review-description">Хочу поблагодарить компанию Гарантшкаф. Сделали за 2 недели чудесный шкаф.
                Особо хочу поблагодарить Михаила за хорошее отношение, все объяснил, посоветовал, рассказал про все
                тонкости. Большое спасибо! </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Кнопка "Показать все отзывы" -->
    <div class="row text-center mt-4">
      <div class="col">
        <a href="https://yandex.kz/maps/org/garantshkaf/43131278671/?ll=37.475504%2C56.017226&z=17" target="_blank"
          class="btn btn-danger px-4 mx-3">Все
          отзывы</a>
      </div>
    </div>
  </div>
</section>
<!-- /Reviews section -->