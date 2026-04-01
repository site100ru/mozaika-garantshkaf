/* Parallax home section */
$(window).scroll(function(e){
	var scrolled = $(window).scrollTop();
	$('.parallax-home-section').css('top',(-(scrolled*.35) )+'px'); // 35 - скорость прокрутки
});
/* End parallax home section */



/* Функция "Выезжало */	
function vyezjalo() {
    onscroll = function() {
        var prokrutka = window.pageYOffset;
        
        var slidingHeader = document.getElementById('sliding-header');
        if (slidingHeader) {
            if (window.screen.width >= 992) {
                if (prokrutka > 400) {
                    slidingHeader.style.top = '0px';
                } else if (prokrutka <= 400) {
                    slidingHeader.style.top = '-100px';
                }
            }
        }

        var slidingHeaderCollapse = document.getElementById('sliding-header-collapse');
        if (slidingHeaderCollapse) {
            slidingHeaderCollapse.classList.remove('show');
        }
    }
}

/* Функция "Прилипало" */
function prilipalo() {
    let lastScrollTop = 0;
    
    window.addEventListener('scroll', function() {
        var prokrutka = window.pageYOffset;
        
        // Закрываем подменю при скролле на мобильных
        if (window.innerWidth < 992) {
            // Проверяем, прокрутили ли больше 5 пикселей
            const scrollDifference = Math.abs(prokrutka - lastScrollTop);
            
            if (scrollDifference > 5) {
                // Закрываем основное меню
                const openNavbar = document.querySelector('.navbar-collapse.show');
                if (openNavbar) {
                    const collapseInstance = bootstrap.Collapse.getOrCreateInstance(openNavbar);
                    collapseInstance.hide();
                }
                
                // Закрываем dropdown меню
                const openDropdowns = document.querySelectorAll('.dropdown-menu.show');
                openDropdowns.forEach(dropdown => {
                    const dropdownToggle = dropdown.previousElementSibling;
                    if (dropdownToggle) {
                        const dropdownInstance = bootstrap.Dropdown.getOrCreateInstance(dropdownToggle);
                        dropdownInstance.hide();
                    }
                });
            }
        }
        
        lastScrollTop = prokrutka;
        
        // Оригинальная логика прилипания
        if (window.innerWidth >= 769) {
            const topMenu = document.getElementById('top-menu-2');
            const archiveHeader = document.getElementById('archive-portfolio-header');

            if (topMenu) {
                if (prokrutka > 50) {
                    topMenu.classList.add('fixed-top');
                    topMenu.style.position = 'fixed';
                    topMenu.style.top = 0;
                } else {
                    topMenu.classList.remove('fixed-top');
                    topMenu.style.position = 'absolute';
                    topMenu.style.top = '57px';
                    
                    if (archiveHeader) {
                        archiveHeader.style.paddingTop = '70px';
                    }
                }
            }
        } else {
            const topMenu = document.getElementById('top-menu-2');
            if (topMenu) {
                topMenu.style.position = '';
                topMenu.style.top = 0;
                topMenu.classList.add('fixed-top');
            }
        }
    });
}