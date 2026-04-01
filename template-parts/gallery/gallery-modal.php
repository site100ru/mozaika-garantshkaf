<?php
/**
 * Gallery Modal
 * 
 * Универсальное модальное окно галереи для портфолио
 * Одно окно со всеми изображениями из всех портфолио
 * 
 * Использование:
 * 1. Подключите этот файл один раз в footer или в нужном месте:
 *    <?php get_template_part('template-parts/gallery/gallery-modal'); ?>
 * 
 * 2. Вызывайте галерею из любого места:
 *    <div onclick="galleryOn('img-123-0')">Открыть галерею</div>
 * 
 * Параметры функции galleryOn():
 * - imageId: ID конкретного изображения для открытия
 */

// Получаем ID постов из параметров или null
$post_ids = isset($args['post_ids']) ? $args['post_ids'] : null;
?>

<!-- Gallery wrapper -->
<div id="galleryWrapper" style="background: rgba(0,0,0,0.85); display: none; position: fixed; top: 0; bottom: 0; left: 0; right: 0; z-index: 9999999999;">
    
    <!-- Единая галерея для всех изображений -->
    <div id="gallery-all" class="carousel slide" data-bs-ride="carousel" style="display: none; position: fixed; top: 0; height: 100%; width: 100%;">
        <div class="carousel-indicators">
            <?php
            // Формируем аргументы запроса
            $query_args = array(
                'post_type' => 'portfolio',
                'orderby' => 'date',
                'order' => 'DESC',
            );
            
            // Если переданы конкретные ID постов
            if ($post_ids && is_array($post_ids) && count($post_ids) > 0) {
                $query_args['post__in'] = $post_ids;
                $query_args['orderby'] = 'post__in'; // Сохраняем порядок из массива
                $query_args['numberposts'] = count($post_ids);
            } else {
                $query_args['numberposts'] = 999;
            }

            $posts = get_posts($query_args);

            $global_index = 0;
            
            foreach ($posts as $post) {
                setup_postdata($post);
                
                for ($i = 1; $i <= 9; $i++) {
                    $img = get_post_meta($post->ID, '_img-' . $i, true);
                    if ($img) {
                        $activeClass = ($global_index == 0) ? 'class="active"' : '';
                        $imageId = 'img-' . $post->ID . '-' . ($i - 1);
            ?>
                        <button id="ind-<?php echo $post->ID; ?>-<?php echo $i - 1; ?>" 
                                type="button"
                                data-bs-target="#gallery-all"
                                data-bs-slide-to="<?php echo $global_index; ?>"
                                data-image-id="<?php echo $imageId; ?>"
                                <?php echo $activeClass; ?>
                                aria-label="Slide <?php echo $global_index + 1; ?>"></button>
            <?php
                        $global_index++;
                    }
                }
            }
            wp_reset_postdata();
            ?>
        </div>
        
        <div class="carousel-inner h-100">
            <?php
            $posts = get_posts($query_args);

            $global_index = 0;
            
            foreach ($posts as $post) {
                setup_postdata($post);
                
                for ($i = 1; $i <= 9; $i++) {
                    $img = get_post_meta($post->ID, '_img-' . $i, true);
                    if ($img) {
                        $activeClass = ($global_index == 0) ? 'active' : '';
            ?>
                        <div id="img-<?php echo $post->ID; ?>-<?php echo $i - 1; ?>"
                            class="carousel-item h-100 <?php echo $activeClass; ?>"
                            data-bs-interval="999999999"
                            data-slide-index="<?php echo $global_index; ?>">
                            <div class="row align-items-center h-100">
                                <div class="col text-center">
                                    <img src="<?php echo esc_url($img); ?>"
                                        class="img-fluid"
                                        style="max-width: 90vw; max-height: 90vh;"
                                        alt="<?php echo esc_attr(get_the_title()); ?>">
                                </div>
                            </div>
                        </div>
            <?php
                        $global_index++;
                    }
                }
            }
            wp_reset_postdata();
            ?>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#gallery-all" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#gallery-all" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>

    <!-- Кнопка закрытия галереи -->
    <button type="button" onclick="closeModalGallery();" class="btn-close btn-close-white"
        style="position: fixed; top: 25px; right: 25px; z-index: 99999;"
        aria-label="Close"></button>
</div>

<script>
    // Функция открытия галереи
    window.modalGalleryOn = function(imageId) {
        const galleryWrapper = document.getElementById('galleryWrapper');

        if (!galleryWrapper) {
            console.error('Gallery wrapper not found');
            return;
        }

        // Показываем модальное окно
        galleryWrapper.style.display = 'block';
        document.body.style.overflow = 'hidden';

        // Открываем единую галерею
        const gallery = document.getElementById('gallery-all');
        if (gallery) {
            gallery.style.display = 'block';

            // Если указан конкретный слайд, активируем его
            if (imageId) {
                const targetImage = document.getElementById(imageId);

                if (targetImage) {
                    // Получаем индекс слайда из data-атрибута
                    const slideIndex = parseInt(targetImage.getAttribute('data-slide-index') || 0);

                    // Убираем активные классы со всех элементов
                    gallery.querySelectorAll('.carousel-item').forEach(item => {
                        item.classList.remove('active');
                    });
                    gallery.querySelectorAll('.carousel-indicators button').forEach(btn => {
                        btn.classList.remove('active');
                        btn.removeAttribute('aria-current');
                    });

                    // Добавляем активный класс к целевому изображению
                    targetImage.classList.add('active');
                    
                    // Находим и активируем соответствующий индикатор по data-bs-slide-to
                    const targetIndicator = gallery.querySelector(`.carousel-indicators button[data-bs-slide-to="${slideIndex}"]`);
                    if (targetIndicator) {
                        targetIndicator.classList.add('active');
                        targetIndicator.setAttribute('aria-current', 'true');
                    }

                    // Инициализируем или получаем существующий Bootstrap Carousel
                    let bsCarousel = bootstrap.Carousel.getInstance(gallery);
                    if (!bsCarousel) {
                        bsCarousel = new bootstrap.Carousel(gallery, {
                            interval: 999999999,
                            wrap: true
                        });
                    }

                    // Переходим на нужный слайд
                    bsCarousel.to(slideIndex);
                } else {
                    console.error('Target image not found:', imageId);
                }
            }
        } else {
            console.error('Gallery element not found');
        }
    };

    // Функция закрытия галереи
    window.closeModalGallery = function() {
        const galleryWrapper = document.getElementById('galleryWrapper');
        if (galleryWrapper) {
            galleryWrapper.style.display = 'none';
            document.body.style.overflow = '';
        }
        
        // Скрываем галерею
        const gallery = document.getElementById('gallery-all');
        if (gallery) {
            gallery.style.display = 'none';
        }
    };

    // События
    document.addEventListener('DOMContentLoaded', function() {
        const galleryWrapper = document.getElementById('galleryWrapper');

        // Закрытие по клику на фон
        if (galleryWrapper) {
            galleryWrapper.addEventListener('click', function(e) {
                if (e.target === galleryWrapper) {
                    window.closeModalGallery();
                }
            });
        }

        // Обработка клавиш
        document.addEventListener('keydown', function(e) {
            const galleryWrapper = document.getElementById('galleryWrapper');
            
            // Проверяем, открыта ли галерея
            if (galleryWrapper && galleryWrapper.style.display === 'block') {
                const gallery = document.getElementById('gallery-all');
                
                if (gallery) {
                    const carousel = bootstrap.Carousel.getInstance(gallery);
                    
                    // Escape - закрыть галерею
                    if (e.key === 'Escape' || e.keyCode === 27) {
                        window.closeModalGallery();
                    }
                    // Стрелка влево - предыдущий слайд
                    else if (e.key === 'ArrowLeft' || e.keyCode === 37) {
                        if (carousel) {
                            e.preventDefault();
                            carousel.prev();
                        }
                    }
                    // Стрелка вправо - следующий слайд
                    else if (e.key === 'ArrowRight' || e.keyCode === 39) {
                        if (carousel) {
                            e.preventDefault();
                            carousel.next();
                        }
                    }
                }
            }
        });
    });
</script>