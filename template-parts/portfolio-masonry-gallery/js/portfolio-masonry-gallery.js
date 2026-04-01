/**
 * Masonry Grid для портфолио
 * Создает адаптивную сетку с автоматической компоновкой карточек разной высоты
 * без пустых промежутков между ними
 */

document.addEventListener('DOMContentLoaded', function () {
    // Находим ВСЕ контейнеры с карточками портфолио
    var grids = document.querySelectorAll('.archive-portfolio-section-2 .row[style*="position: relative"]');

    if (grids.length > 0 && typeof Masonry !== 'undefined') {
        grids.forEach(function(grid) {
            // Инициализируем Masonry для каждого контейнера
            var masonry = new Masonry(grid, {
                itemSelector: '.col-md-6',          // ВАЖНО ЧТО ИЩЕМ ПО COL-MD-6 МОЖНО ИЗМЕНИТЬ НА ДРУГОЙ 
                percentPosition: true,
                gutter: 0,                          // Отступы между карточками (0 = используем Bootstrap отступы)
            });

            if (typeof imagesLoaded !== 'undefined') {
                imagesLoaded(grid, function () {
                    masonry.layout();
                });
            }
        });
    }
});