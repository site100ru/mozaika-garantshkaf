<?php

/**
 * Template Part: Портфолио — масонри с новой карточкой (для shkafy-cupe-new.php)
 *
 * Параметры:
 * $args['category']      - slug категории portfolio-cat (по умолчанию все)
 * $args['section_title'] - заголовок секции
 * $args['posts_count']   - количество работ
 * $args['show_button']   - показывать кнопку «все работы»
 * $args['button_text']   - текст кнопки
 *
 * Масонри переиспользует JS и логику оригинала
 * (.archive-portfolio-section-2 .row[style*="position: relative"], itemSelector .col-md-6)
 */

$category      = isset($args['category']) ? $args['category'] : 'all';
$section_title = isset($args['section_title']) ? $args['section_title'] : 'Наши последние работы и цены';
$posts_count  = isset($args['posts_count']) ? $args['posts_count'] : 18;
$show_button  = isset($args['show_button']) ? $args['show_button'] : true;
$button_text  = isset($args['button_text']) ? $args['button_text'] : 'Смотреть все';
$show_filter  = isset($args['show_filter']) ? $args['show_filter'] : false;

$category_term_id = '';
$button_link = '/portfolio/';
if (!empty($category) && $category !== 'all') {
	$term = get_term_by('slug', $category, 'portfolio-cat');
	if ($term && !is_wp_error($term)) {
		$category_term_id = $term->term_id;
		$button_link = get_term_link($term);
	}
}

$theme_uri = get_stylesheet_directory_uri();
?>

<!-- Portfolio (новые карточки) -->
<section class="archive-portfolio-section-2 works bg">
	<div class="container">

		<div class="row">
			<div class="col text-center section-title-wrapper">
				<h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
				<img src="<?php echo $theme_uri; ?>/img/ico/advantage/title-decoration.svg" alt="" class="img-fluid" />
			</div>
		</div>

		<?php if ($show_filter) : ?>
		<div class="row">
			<div class="col text-center mb-4 mb-lg-5">
				<div class="nav-scroller mb-0">
					<ul class="nav justify-content-lg-center d-flex m-auto align-items-center tablist scroller" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link <?php echo ($category == 'all' || empty($category)) ? 'active' : ''; ?>" href="/portfolio/">Все</a>
						</li>
						<?php
						$filter_terms = get_terms([
							'taxonomy' => ['portfolio-cat'],
							'orderby'  => 'slug',
							'order'    => 'ASC',
						]);
						foreach ($filter_terms as $filter_term) { ?>
						<li class="nav-item">
							<span class="nav-link px-0">
								<svg width="6" height="6" viewBox="0 0 6 6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="svg-icon">
									<rect width="6" height="6" rx="2" />
								</svg>
							</span>
						</li>
						<li class="nav-item">
							<a class="nav-link <?php echo ($category == $filter_term->slug) ? 'active' : ''; ?>" href="<?php echo get_term_link($filter_term->term_id); ?>">
								<?php echo $filter_term->name; ?>
							</a>
						</li>
						<?php } ?>
					</ul>
				</div>
				<!-- Подсказка-«пальчик»: горизонтальный скролл фильтра на мобиле -->
				<div class="d-lg-none text-center mb-4 scroller-mobile">
					<svg xmlns="http://www.w3.org/2000/svg" width="25" height="40" fill="currentColor" viewBox="0 0 34 40" class="svg-icon">
						<path d="M30.024 16c-.638 0-1.262.191-1.79.55a3.183 3.183 0 0 0-4.8-1.6 3.158 3.158 0 0 0-4.61-1.705V3.2a3.2 3.2 0 1 0-6.4 0v22.357a.2.2 0 0 1-.13.195.194.194 0 0 1-.231-.047l-2.55-2.548a5.62 5.62 0 0 0-5.788-1.367A2.37 2.37 0 0 0 2.5 25.357l5.259 7.886a26 26 0 0 0 2.754 3.474A10.79 10.79 0 0 0 18.34 40h4a10.925 10.925 0 0 0 10.192-6.901c.462-1.152.699-2.382.697-3.624V19.2a3.2 3.2 0 0 0-3.205-3.2m1.6 13.475a8.1 8.1 0 0 1-.582 3.029 9.33 9.33 0 0 1-8.707 5.896h-4a9.2 9.2 0 0 1-6.667-2.783 24.5 24.5 0 0 1-2.583-3.26L3.831 24.47a.774.774 0 0 1 .394-1.161 4.04 4.04 0 0 1 4.16.979l2.55 2.549a1.81 1.81 0 0 0 3.093-1.28V3.2a1.6 1.6 0 0 1 3.2 0v14.4a.8.8 0 0 0 1.6 0V16a1.6 1.6 0 0 1 3.2 0v2.4a.8.8 0 0 0 1.6 0v-.8a1.6 1.6 0 1 1 3.2 0V20a.8.8 0 0 0 1.6 0v-.8a1.6 1.6 0 0 1 3.2 0z" />
						<path d="M22.101 6.4h6.069l-1.835 1.833a.801.801 0 0 0 1.133 1.133l3.2-3.2a.8.8 0 0 0 0-1.133l-3.2-3.2a.8.8 0 1 0-1.133 1.133L28.17 4.8h-6.069a.8.8 0 1 0 0 1.6M4.501 9.6a.8.8 0 0 0 .567-1.367L3.233 6.4H9.3a.8.8 0 1 0 0-1.6H3.233l1.835-1.834a.801.801 0 1 0-1.133-1.133l-3.2 3.2a.8.8 0 0 0 0 1.133l3.2 3.2a.8.8 0 0 0 .566.234" />
					</svg>
				</div>
			</div>
		</div>
		<?php endif; ?>

		<div class="row" style="position: relative;">
			<?php
			$query_args = [
				'post_type'      => 'portfolio',
				'numberposts'    => $posts_count,
				'posts_per_page' => $posts_count,
			];
			if (!empty($category_term_id)) {
				$query_args['tax_query'] = [[
					'taxonomy' => 'portfolio-cat',
					'field'    => 'term_id',
					'terms'    => $category_term_id,
				]];
			}
			$query = new WP_Query($query_args);
			$displayed_post_ids = array();

			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
					$first_img = get_post_meta(get_the_ID(), '_img-1', true);
					$price     = get_post_meta(get_the_ID(), 'price', true);
					if ($first_img) :
						$displayed_post_ids[] = get_the_ID();
			?>
			<div class="col-12 col-md-6 col-lg-3">
				<div class="work-card">
					<div class="work-card__media" onclick="modalGalleryOn('img-<?php echo get_the_ID(); ?>-0'); return false;">
						<img src="<?php echo esc_url($first_img); ?>" class="work-card__img" alt="<?php the_title_attribute(); ?>" loading="lazy" />
						<span class="work-card__title"><?php the_title(); ?></span>
						<?php if ($price) : ?>
						<span class="work-card__price">от <?php echo esc_html($price); ?></span>
						<?php endif; ?>
					</div>
					<p class="work-card__text">Рассчитаем точную стоимость этого проекта по вашим размерам.</p>
					<button type="button" class="btn-grad-outline work-card__btn" data-bs-toggle="modal" data-bs-target="#calculatePriceWithoutDownloadModal" data-title="<?php the_title_attribute(); ?>" data-category="<?php echo esc_attr($section_title); ?>">Рассчитать</button>
				</div>
			</div>
			<?php
					endif;
				endwhile;
			else : ?>
			<div class="col-12 text-center py-5">
				<p>Проверьте категорию</p>
			</div>
			<?php endif; ?>
		</div>

		<?php if ($show_button && $query->have_posts()) : ?>
		<div class="row text-center">
			<div class="col">
				<a href="<?php echo esc_url($button_link); ?>" class="btn-grad works__more mt-4"><?php echo esc_html($button_text); ?></a>
			</div>
		</div>
		<?php endif; wp_reset_postdata(); ?>

	</div>
</section>
<!-- /Portfolio -->

<?php
// Модальная галерея (лайтбокс) для кликов по карточкам
get_template_part('template-parts/gallery/gallery-modal', null, array(
	'post_ids' => $displayed_post_ids,
));
?>

<!-- Masonry (переиспользуем JS оригинала) -->
<script>
<?php include get_stylesheet_directory() . '/template-parts/portfolio-masonry-gallery/js/masonry.js'; ?>
</script>
<script>
<?php include get_stylesheet_directory() . '/template-parts/portfolio-masonry-gallery/js/imagesloaded.js'; ?>
</script>
<script>
<?php include get_stylesheet_directory() . '/template-parts/portfolio-masonry-gallery/js/portfolio-masonry-gallery.js'; ?>
</script>