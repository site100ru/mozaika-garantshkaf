<?php

/**
 * Template Part: Archive Portfolio Section
 * 
 * Параметры:
 * $args['category']            - slug категории для фильтрации, если не указан - выводятся все работы (по умолчанию '')
 * $args['section_title']       - заголовок секции, по умолчанию 'Наши работы'
 * $args['section_description'] - описание секции (текст под заголовком), по умолчанию пусто
 * $args['background_color']    - цвет фона секции (например: 'bg-white', 'bg-light'), по умолчанию 'bg-white'
 * $args['posts_count']         - количество выводимых работ, по умолчанию -1 (все)
 * $args['card_type']           - тип карточки: 'approximation', 'zoom-card', 'hover-image', 'magnifier', по умолчанию 'approximation'
 * $args['show_button']         - показывать кнопку (bool), по умолчанию false
 * $args['button_text']         - текст кнопки, по умолчанию 'Смотреть еще'
 * $args['button_link']         - ссылка кнопки, если не указан - формируется автоматически
 * $args['show_breadcrumbs']    - показывать хлебные крошки (bool), по умолчанию false
 * $args['breadcrumbs_items']   - массив элементов хлебных крошек (см. breadcrumbs.php)
 * $args['show_filter']         - показывать фильтр категорий (bool), по умолчанию false
 * $args['show_modal_button']   - показывать кнопку Узнать стоимость (bool), по умолчанию false
 *
 * Примеры использования:
 * 
 * // Все работы с фильтром категорий
 * <?php get_template_part('template-parts/portfolio-masonry-gallery/portfolio-masonry-gallery', null, [
 *     'background_color' => 'bg-white',
 *     'section_title' => 'Наши работы',
 *     'show_breadcrumbs' => true,
 *     'breadcrumbs_items' => [
 *         ['text' => 'Портфолио']
 *     ],
 *     'show_filter' => true
 * ]); ?>
*
* // Работы конкретной категории без фильтра
* <?php get_template_part('template-parts/portfolio-masonry-gallery/portfolio-masonry-gallery', null, [
 *     'background_color' => 'bg-white',
 *     'category' => 'kuhni',
 *     'section_title' => 'Кухни',
 *     'section_description' => 'Наши лучшие проекты',
 *     'posts_count' => 12,
 *     'card_type' => 'zoom-card',
 *     'show_button' => true,
 *     'button_text' => 'Смотреть все кухни'
 * ]); ?>
*/

// Параметры по умолчанию
$category = isset($args['category']) ? $args['category'] : 'all';
$section_title = isset($args['section_title']) ? $args['section_title'] : 'Наши работы';
$section_description = isset($args['section_description']) ? $args['section_description'] : '';
$background_color = isset($args['background_color']) ? $args['background_color'] : 'bg-white';
$posts_count = isset($args['posts_count']) ? $args['posts_count'] : -1;
$card_type = isset($args['card_type']) ? $args['card_type'] : 'approximation';
$show_button = isset($args['show_button']) ? $args['show_button'] : false;
$button_text = isset($args['button_text']) ? $args['button_text'] : 'Смотреть еще';
$show_filter = isset($args['show_filter']) ? $args['show_filter'] : false;
$show_card_title = isset($args['show_card_title']) ? $args['show_card_title'] : true;
$show_modal_button = isset($args['show_modal_button']) ? $args['show_modal_button'] : false;
$show_breadcrumbs = isset($args['show_breadcrumbs']) ? $args['show_breadcrumbs'] : false;

// Автоматическое определение ссылки кнопки
if (!empty($category) && $category !== 'all') {
$term = get_term_by('slug', $category, 'portfolio-cat');
$button_link = $term ? get_term_link($term) : '/portfolio/';
} else {
$button_link = '/portfolio/';
}

// Если указана категория (не 'all'), получаем её term_id для фильтрации
$category_term_id = '';
if (!empty($category) && $category !== 'all') {
$term = get_term_by('slug', $category, 'portfolio-cat');
if ($term && !is_wp_error($term)) {
$category_term_id = $term->term_id;
}
}
?>

<!-- Portfolio -->
<section class="portfolio-section archive-portfolio-section-2 <?php echo esc_attr($background_color); ?>">
  <div
    style="max-width: 1700px; margin: 0 auto; padding-top: 80px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9); border-radius: 0px !important">
    <div class="container">

      <?php if ($show_breadcrumbs) : ?>
      <div class="row">
        <div class="col">
          <div class="breadcrumbs">
            <nav class="woocommerce-breadcrumb mb-5 mb-lg-3" itemprop="breadcrumb">
              <a href="/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/breadcrumbs-ico-corp.svg"></a>
              /
              <?php
                $current_term = is_tax('portfolio-cat') ? get_queried_object() : null;

                if ($current_term) :
              ?>
              <a href="/portfolio/">Наши работы</a>
              /
              <span><?php echo esc_html($current_term->name); ?></span>
              <?php else : ?>
              <span>Наши работы</span>
              <?php endif; ?>
            </nav>
          </div>
        </div>
      </div>
      <?php endif; ?>

      <div class="row">
        <div class="col">
          <div class="row">
            <div class="col text-center section-title-wrapper">
              <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>

              <?php if ($section_description) : ?>
              <p class="section-description archive-portfolio mb-3"><?php echo esc_html($section_description); ?></p>
              <?php endif; ?>

              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки"
                class="img-fluid" />
            </div>
          </div>

          <?php if ($show_filter) : ?>
          <div class="row">
            <div class="col text-center mb-4 mb-lg-5">
              <div class="nav-scroller mb-0">
                <ul class="nav justify-content-lg-center d-flex m-auto align-items-center tablist scroller" id="myTab"
                  role="tablist">
                  <li class="nav-item">
                    <a class="nav-link <?php echo ($category == 'all' || empty($category)) ? 'active' : ''; ?>"
                      href="/portfolio/">Все</a>
                  </li>
                  <?php
                                        $args_terms = [
                                            'taxonomy' => ['portfolio-cat'],
                                            'orderby' => 'slug',
                                            'order' => 'ASC',
                                        ];

                                        $terms = get_terms($args_terms);

                                        foreach ($terms as $term) { ?>
                  <li class="nav-item">
                    <span class="nav-link px-0">
                      <svg width="6" height="6" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                        class="svg-icon">
                        <rect width="6" height="6" rx="2" />
                      </svg>
                    </span>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link <?php echo ($category == $term->slug) ? 'active' : ''; ?>"
                      href="<?php echo get_term_link($term->term_id); ?>">
                      <?php echo $term->name; ?>
                    </a>
                  </li>
                  <?php } ?>
                </ul>
              </div>
              <div class="d-lg-none text-center mb-4 scroller-mobile">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" viewBox="0 0 34 40"
                  class="svg-icon">
                  <path
                    d="M30.024 16c-.638 0-1.262.191-1.79.55a3.183 3.183 0 0 0-4.8-1.6 3.158 3.158 0 0 0-4.61-1.705V3.2a3.2 3.2 0 1 0-6.4 0v22.357a.2.2 0 0 1-.13.195.194.194 0 0 1-.231-.047l-2.55-2.548a5.62 5.62 0 0 0-5.788-1.367A2.37 2.37 0 0 0 2.5 25.357l5.259 7.886a26 26 0 0 0 2.754 3.474A10.79 10.79 0 0 0 18.34 40h4a10.925 10.925 0 0 0 10.192-6.901c.462-1.152.699-2.382.697-3.624V19.2a3.2 3.2 0 0 0-3.205-3.2m1.6 13.475a8.1 8.1 0 0 1-.582 3.029 9.33 9.33 0 0 1-8.707 5.896h-4a9.2 9.2 0 0 1-6.667-2.783 24.5 24.5 0 0 1-2.583-3.26L3.831 24.47a.774.774 0 0 1 .394-1.161 4.04 4.04 0 0 1 4.16.979l2.55 2.549a1.81 1.81 0 0 0 3.093-1.28V3.2a1.6 1.6 0 0 1 3.2 0v14.4a.8.8 0 0 0 1.6 0V16a1.6 1.6 0 0 1 3.2 0v2.4a.8.8 0 0 0 1.6 0v-.8a1.6 1.6 0 1 1 3.2 0V20a.8.8 0 0 0 1.6 0v-.8a1.6 1.6 0 0 1 3.2 0z" />
                  <path
                    d="M22.101 6.4h6.069l-1.835 1.833a.801.801 0 0 0 1.133 1.133l3.2-3.2a.8.8 0 0 0 0-1.133l-3.2-3.2a.8.8 0 1 0-1.133 1.133L28.17 4.8h-6.069a.8.8 0 1 0 0 1.6M4.501 9.6a.8.8 0 0 0 .567-1.367L3.233 6.4H9.3a.8.8 0 1 0 0-1.6H3.233l1.835-1.834a.801.801 0 1 0-1.133-1.133l-3.2 3.2a.8.8 0 0 0 0 1.133l3.2 3.2a.8.8 0 0 0 .566.234" />
                </svg>
              </div>
            </div>
          </div>
          <?php endif; ?>

          <div class="row masonry" style="position: relative;">
            <?php
                        // Формируем аргументы запроса
                        $query_args = [
                            'post_type' => 'portfolio',
                            'numberposts' => $posts_count,
                            'posts_per_page' => $posts_count
                        ];

                        // Если указана конкретная категория
                        if (!empty($category_term_id)) {
                            $query_args['tax_query'] = [
                                [
                                    'taxonomy' => 'portfolio-cat',
                                    'field' => 'term_id',
                                    'terms' => $category_term_id,
                                ],
                            ];
                        }

                        $query = new WP_Query($query_args);

                        // Собираем ID постов для галереи
                        $displayed_post_ids = array();

                        if ($query->have_posts()) :
                            while ($query->have_posts()):
                                $query->the_post();
                                $displayed_post_ids[] = get_the_ID(); // Сохраняем ID

                                // Получаем изображения
                                $first_img = get_post_meta(get_the_ID(), '_img-1', true);
                                $second_img = get_post_meta(get_the_ID(), '_img-2', true);
                                $price = get_post_meta(get_the_ID(), 'price', true);

                                if ($first_img) :
                        ?>
            <div class="col-md-6 col-lg-3">
              <div class="mb-4 pb-0 pb-md-3">
                <a class="text-decoration-none d-flex flex-column align-items-center align-items-lg-start" href="#"
                  onClick="modalGalleryOn('img-<?php echo get_the_ID(); ?>-0'); return false;">
                  <?php
                                                get_template_part('template-parts/cards/card', null, array(
                                                    'image' => $first_img,
                                                    'image_hover' => $second_img,
                                                    'title' => get_the_title(), // ВКЛЮЧИТЬ КОГДА НАДО БУДЕТ ВЫВЕСТИ 
                                                    'show_title' => $show_card_title,
                                                    'price' => $price, // ВКЛЮЧИТЬ КОГДА НАДО БУДЕТ ВЫВЕСТИ 
                                                    'card_type' => $card_type,
                                                    'link' => '',
                                                    'show_modal_button' => $show_modal_button,
                                                    'current_category'  => $category,
                                                ));
                                                ?>
                </a>
              </div>
            </div>
            <?php
                                endif;
                            endwhile;
                        else: ?>
            <div class="col-12 text-center py-5">
              <p>Проверьте категорию</p>
            </div>
            <?php endif;

                        wp_reset_postdata();
                        ?>
          </div>

          <?php if ($show_button && $query->have_posts()) : ?>
          <div class="row text-center">
            <div class="col">
              <a href="<?php echo esc_url($button_link); ?>" type="button"
                class="btn btn-lg btn-corporate-color-1 btn-danger mt-4 portflio">
                <?php echo esc_html($button_text); ?>
              </a>
            </div>
          </div>
          <?php endif; ?>
        </div>
      </div><!-- .row -->
    </div><!-- .container -->
  </div>
</section>
<!-- /Portfolio -->

<?php 
// Подключаем модальное окно с ограниченными постами
get_template_part('template-parts/gallery/gallery-modal', null, array(
    'post_ids' => $displayed_post_ids
)); 
?>

<!-- Masonry -->
<script>
<?php include get_stylesheet_directory() . '/template-parts/portfolio-masonry-gallery/js/masonry.js'; ?>
</script>
<script>
<?php include get_stylesheet_directory() . '/template-parts/portfolio-masonry-gallery/js/imagesloaded.js'; ?>
</script>

<!-- Инициализация Masonry для портфолио -->
<script>
<?php include get_stylesheet_directory() . '/template-parts/portfolio-masonry-gallery/js/portfolio-masonry-gallery.js'; ?>
</script>