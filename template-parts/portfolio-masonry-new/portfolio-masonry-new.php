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
					<p class="work-card__text">Рассчитаем точную стоимость этого шкафа по вашим размерам.</p>
					<button type="button" class="btn-grad-outline work-card__btn" data-bs-toggle="modal"
						data-bs-target="#calculatePriceWithoutDownloadModal"
						data-title="<?php the_title_attribute(); ?>"
						data-category="<?php echo esc_attr($section_title); ?>">Рассчитать</button>
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
