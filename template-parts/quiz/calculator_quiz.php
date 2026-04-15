<section id="quiz" class="quiz-section">
    <div class="container" style="max-width: 1700px; padding-top: 40px; padding-bottom: 50px; border-right: 1px solid rgba(153, 153, 153, 0.9);  border-left: 1px solid rgba(153, 153, 153, 0.9);">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="breadcrumbs pb-0">
                    <nav class="woocommerce-breadcrumb" itemprop="breadcrumb">
                        <a href="/">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/breadcrumbs-ico.svg">
                        </a> / <a href="#">Калькулятор стоимости</a>
                    </nav>
                </div>
            </div>
        
            <div class="col-md-9" style="padding-top: 60px">
                <div class="section-title-wrapper text-center">
                    <h2 class="section-title">Рассчитайте примерную стоимость корпусной мебели</h2>
                    <p class="section-subtitle">Ответьте на 5 коротких вопроса.</p>
                    <img class="text-center" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/points.svg" alt="Точки" class="img-fluid" />
                </div>

                <div class="quiz-question-container">
                    <div class="row text-start quiz-question-wrapper">
                        <!-- Шаг 1 -->
                        <div class="col-xl-9" id="question-1">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>1/5</span> Какая мебель Вам нужна?</h3>

                            <div class="row quiz-questions-container">
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-1-1">
                                        <input type="radio" id="answer-1-1" name="question-1" class="checkbox" value="Шкаф-купе" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/1-1.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Шкаф-купе</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-1-2">
                                        <input type="radio" id="answer-1-2" name="question-1" class="checkbox" value="Распашной шкаф" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/1-2.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Распашной шкаф</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-1-3">
                                        <input type="radio" id="answer-1-3" name="question-1" class="checkbox" value="Гардеробная" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/1-3.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Гардеробная</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-1-4">
                                        <input type="radio" id="answer-1-4" name="question-1" class="checkbox" value="Двери-купе" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/1-4.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3">Двери-купе</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-1-5">
                                        <input type="radio" id="answer-1-5" name="question-1" class="checkbox" value="Рабочая зона" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/1-5.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Рабочая зона</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-1-6">
                                        <input type="radio" id="answer-1-6" name="question-1" class="checkbox" value="Другая" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/1-6.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Другая</h6>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 0%">0%</div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                    <input type="button" value="Предыдущий" class="btn btn-corporate-color-outline-1" disabled />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                    <input type="button" id="btn-next-question-1" value="Следующий" class="btn btn-danger" onclick="nextQuostion('question-1');" />
                                </div>
                            </div>
                        </div>
                        <!-- /Шаг 1 -->

                        <!-- Шаг 2 -->
                        <div class="col-xl-9" id="question-2" style="display: none">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>2/5</span> Какой тип шкафа Вам нужен?</h3>

                            <div class="row quiz-questions-container">
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-2-1">
                                        <input type="radio" id="answer-2-1" name="question-2" class="checkbox" value="Корпусный" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/2-1.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Корпусный</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-2-2">
                                        <input type="radio" id="answer-2-2" name="question-2" class="checkbox" value="Встроенный" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/2-2.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Встроенный</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-2-3">
                                        <input type="radio" id="answer-2-3" name="question-2" class="checkbox" value="Угловой" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/2-3.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Угловой</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-2-4">
                                        <input type="radio" id="answer-2-4" name="question-2" class="checkbox" value="Радиусный" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/2-4.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Радиусный</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-2-5">
                                        <input type="radio" id="answer-2-5" name="question-2" class="checkbox" value="Гардеробный" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/2-5.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Гардеробный</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-2-6">
                                        <input type="radio" id="answer-2-6" name="question-2" class="checkbox" value="Пока не знаю" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/2-6.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Пока не знаю</h6>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 17%">17%</div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                    <input type="button" value="Предыдущий" class="btn btn-corporate-color-outline-1" onclick="previousQuostion('question-2');" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                    <input type="button" id="btn-next-question-2" value="Следующий" class="btn btn-danger" onclick="nextQuostion('question-2');" />
                                </div>
                            </div>
                        </div>
                        <!-- /Шаг 2 -->

                        <!-- Шаг 3 -->
                        <div class="col-xl-9" id="question-3" style="display: none;">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>3/5</span> Какой материал фасада Вы хотите?</h3>

                            <div class="row quiz-questions-container">
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-3-1">
                                        <input type="radio" id="answer-3-1" name="question-3" class="checkbox" value="ЛДСП">
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/3-1.webp" style="width: 100%">
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">ЛДСП</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-3-2">
                                        <input type="radio" id="answer-3-2" name="question-3" class="checkbox" value="Пескоструйная обработка">
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/3-2.webp" style="width: 100%">
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Пескоструйная обработка</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-3-3">
                                        <input type="radio" id="answer-3-3" name="question-3" class="checkbox" value="Зеркало">
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/3-3.webp" style="width: 100%">
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Зеркало</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-3-4">
                                        <input type="radio" id="answer-3-4" name="question-3" class="checkbox" value="Комбинированный вариант">
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/3-4.webp" style="width: 100%">
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Комбинированный вариант</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-3-5">
                                        <input type="radio" id="answer-3-5" name="question-3" class="checkbox" value="Пока не знаю">
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/3-5.webp" style="width: 100%">
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Пока не знаю</h6>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 25%">25%</div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                    <input type="button" value="Предыдущий" class="btn btn-corporate-color-outline-1" onclick="previousQuostion('question-3');" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                    <input type="button" id="btn-next-question-3" value="Следующий" class="btn btn-danger" onclick="nextQuostion('question-3');" />
                                </div>
                            </div>
                        </div>
                        <!-- /Шаг 3 -->

                        <!-- Шаг 4 -->
                        <div class="col-xl-9" id="question-4" style="display: none">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>4/5</span> Какая ориентировочная ширина шкафа планируется?</h3>

                            <div class="row quiz-questions-container">
                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-1">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-1" name="answer-4-1" class="checkbox" value="До 1 м">
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">До 1 м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-2">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-2" name="answer-4-2" class="checkbox" value="1.5 м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">1.5 м</h6>
                                    </label>
                                </div>


                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-3">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-3" name="answer-4-3" class="checkbox" value="2 м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">2 м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-4">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-4" name="answer-4-4" class="checkbox" value="2.5 м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">2.5 м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-5">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-5" name="answer-4-5" class="checkbox" value="3 м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">3 м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-6">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-6" name="answer-4-6" class="checkbox" value="3.5 м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">3.5 м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-7">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-7" name="answer-4-7" class="checkbox" value="4 м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">4 м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-8">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-8" name="answer-4-8" class="checkbox" value="4.5 м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">4.5 м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-9">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-9" name="answer-4-9" class="checkbox" value="5 м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">5 м</h6>
                                    </label>
                                </div>

                                <div class="col-12 col-md-8 col-lg-3">
                                    <label class="d-flex quiz-chek gap-3" for="answer-4-10">
                                        <div class="option_item">
                                            <input type="checkbox" id="answer-4-10" name="answer-4-10" class="checkbox" value="Более 5 м" />
                                            <div class="option_inner text-start">
                                                <div class="shadow-wrapper-box"></div>
                                                <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                            </div>
                                        </div>
                                        <h6 class="quiz-section-h3 mb-4">Более 5 м</h6>
                                    </label>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 38%">38%</div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                    <input type="button" value="Предыдущий" class="btn btn-corporate-color-outline-1" onclick="previousQuostion('question-4');" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                    <input type="button" id="btn-next-question-4" value="Следующий" class="btn btn-danger" onclick="nextQuostion('question-4');" />
                                </div>
                            </div>
                        </div>
                        <!-- /Шаг 4 -->

                        <!-- Шаг 5 -->
                        <div class="col-xl-9" id="question-5" style="display: none">
                            <h3 class="quiz-section-subtitle mb-4 text-start"><span>5/5</span> Какое количество дверей Вы предполагаете?</h3>

                            <div class="row quiz-questions-container">
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-1">
                                        <input type="radio" id="answer-5-1" name="question-5" class="checkbox" value="1 дверь" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/5-1.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">1 дверь</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-2">
                                        <input type="radio" id="answer-5-2" name="question-5" class="checkbox" value="2 двери" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/5-2.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">2 двери</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-3">
                                        <input type="radio" id="answer-5-3" name="question-5" class="checkbox" value="3 двери" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/5-3.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">3 двери</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-4">
                                        <input type="radio" id="answer-5-4" name="question-5" class="checkbox" value="4 двери" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/5-4.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">4 двери</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-5">
                                        <input type="radio" id="answer-5-5" name="question-5" class="checkbox" value="5 дверей" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/5-5.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">5 дверей</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-5-6">
                                        <input type="radio" id="answer-5-6" name="question-5" class="checkbox" value="Более 5 дверей" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/5-6.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Более 5 дверей</h6>
                                </div>
                            </div>
                            <!-- /.quiz-questions-container -->
                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="51" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 51%">51%</div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                    <input type="button" value="Предыдущий" class="btn btn-corporate-color-outline-1" onclick="previousQuostion('question-5');" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                    <input type="button" id="btn-next-question-5" value="Следующий" class="btn btn-danger" onclick="nextQuostion('question-5');" />
                                </div>
                            </div>
                        </div>
                        <!-- /Шаг 5 -->

                        <!-- Шаг 6 -->
                        <div class="col-xl-9" id="question-6" style="display: none">
                            <h3 class="quiz-section-subtitle mb-4 text-start">Какой подарок Вы хотели бы получить в случае заказа?</h3>

                            <div class="row quiz-questions-container">
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-6-1">
                                        <input type="radio" id="answer-6-1" name="question-6" class="checkbox" value="Беспроцентная рассрочка на 1 год" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/6-1.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Беспроцентная рассрочка на 1 год</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-6-2">
                                        <input type="radio" id="answer-6-2" name="question-6" class="checkbox" value="Скидка 25%" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/6-2.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">Скидка 25%</h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-6-3">
                                        <input type="radio" id="answer-6-3" name="question-6" class="checkbox" value="Скидка 35% на второй предмет" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/6-3.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">
                                        Скидка 35% на второй предмет
                                    </h6>
                                </div>
                                <div class="col-6 col-sm-4 col-xl-3">
                                    <label class="option_item mb-3" for="answer-6-4">
                                        <input type="radio" id="answer-6-4" name="question-6" class="checkbox" value="Скидка 50% на натяжной потолок" />
                                        <div class="option_inner">
                                            <div class="shadow-wrapper">
                                                <div class="shadow-wrapper-decoration"></div>
                                            </div>
                                            <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/6-4.webp"
                                                style="width: 100%" />
                                        </div>
                                    </label>
                                    <h6 class="quiz-section-h3 mb-4">
                                        Скидка 50% на натяжной потолок
                                    </h6>
                                </div>
                            </div>
                            <!-- /.quiz-questions-container -->
                            <div class="row align-items-center">
                                <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                    <div class="progress-title">Готово:</div>
                                </div>

                                <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                    <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar" style="width: 68%">68%</div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                    <input type="button" value="Предыдущий" class="btn btn-corporate-color-outline-1" onclick="previousQuostion('question-6');" />
                                </div>

                                <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                    <input type="button" id="btn-next-question-6" value="Следующий" class="btn btn-danger" onclick="nextQuostion('question-6');" />
                                </div>
                            </div>

                        </div>
                        <!-- /Шаг 6 -->

                        <!-- Шаг 7 -->
                        <div class="col-xl-9" id="question-7" style="display: none">
                            <h3 class="quiz-section-subtitle mb-4 text-start">Куда отправить расчет?</h3>

                            <form action="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/mails/quiz.php" id="quiz"
                                method="post" name="quiz" class="form">
                                <div class="loader-box"><span class="loader"></span></div>

                                <input type="hidden" name="form-source" value="quiz">
                                <input type="hidden" name="button-context" value="quiz-configurator">

                                <div class="row quiz-questions-container align-items-center">
                                    <div class="col-6 col-sm-4 col-md-6 col-xl-3 mb-3">
                                        <label class="option_item" for="answer-7-1">
                                            <div class="d-flex quiz-chek gap-2 align-items-center ">
                                                <input type="checkbox" id="answer-7-1" name="answer-7-1" class="checkbox"
                                                    value="Перезвонить" />
                                                <div class="option_inner text-start">
                                                    <div class="shadow-wrapper-box"></div>
                                                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                                </div>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/messengers-icons.svg" class="qize-feedback-icons">
                                                <h6 class="quiz-section-h3 mb-0">Перезвонить</h6>
                                            </div>
                                        </label>
                                    </div>


                                    <div class="col-6 col-sm-4 col-md-6 col-xl-3 mb-3">
                                        <label class="option_item" for="answer-7-2">
                                            <div class="d-flex quiz-chek gap-2 align-items-center">
                                                <input type="checkbox" id="answer-7-2" name="answer-7-2" class="checkbox" value="Отправить в Whatsapp" />
                                                <div class="option_inner text-start">
                                                    <div class="shadow-wrapper-box"></div>
                                                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                                </div>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/wa-icons.svg" class="qize-feedback-icons">
                                                <h6 class="quiz-section-h3 mb-0">Отправить в&nbsp;Whatsapp</h6>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-6 col-xl-3 mb-3">
                                        <label class="option_item" for="answer-7-3">
                                            <div class="d-flex quiz-chek gap-2 align-items-center">
                                                <input type="checkbox" id="answer-7-3" name="answer-7-3" class="checkbox" value="Отправить в Telegram" />
                                                <div class="option_inner text-start">
                                                    <div class="shadow-wrapper-box"></div>
                                                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                                </div>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/telegram-icons.svg" class="qize-feedback-icons">
                                                <h6 class="quiz-section-h3 mb-0">Отправить в&nbsp;Telegram</h6>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="col-6 col-sm-4 col-md-6 col-xl-3 mb-3">
                                        <label class="option_item" for="answer-7-4">
                                            <div class="d-flex quiz-chek gap-2 align-items-center">
                                                <input type="checkbox" id="answer-7-4" name="answer-7-4" class="checkbox" value="Отправить в Max" />
                                                <div class="option_inner text-start">
                                                    <div class="shadow-wrapper-box"></div>
                                                    <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/checkbox.svg" />
                                                </div>
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/max-icons.svg" class="qize-feedback-icons">
                                                <h6 class="quiz-section-h3 mb-0">Отправить в&nbsp;Max</h6>
                                            </div>
                                        </label>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-3 mt-4">
                                        <label for="feedback-phone" class="mb-1">Ваш телефон <span class="form__required">*</span></label>
                                        <div>
                                            <input type="text" class="form-control telMask" id="feedback-phone" name="form-phone" placeholder="Ваш телефон" inputmode="text" required=""/>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-md-5 mt-4">
                                        <label for="feedback-name" class="mb-1">Как Вас зовут? <span class="form__required">*</span></label>
                                        <div>
                                            <input type="text" class="form-control" id="feedback-name" name="form-name"
                                                placeholder="Как Вас зовут" required="" />
                                        </div>
                                    </div>
                                </div>
                                <!-- /.quiz-questions-container -->


                                <div class="row align-items-center">
                                    <div class="col-3 col-lg-1 mb-3 mb-lg-0">
                                        <div class="progress-title">Готово:</div>
                                    </div>

                                    <div class="col-9 col-lg-5 mb-3 mb-lg-0">
                                        <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 100%">100%</div>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                        <input type="button" value="Предыдущий" class="btn btn-corporate-color-outline-1"
                                            onclick="previousQuostion('question-7');" />
                                    </div>

                                    <div class="col-12 col-sm-6 col-lg-3 mb-3 mb-sm-0">
                                        <button type="submit" class="btn btn-danger">
                                            Отправить
                                        </button>
                                    </div>
                                </div>

                                <!-- Чекбокс политики конфиденциальности -->
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="form-check form__privacy-policy-check">
                                            <label class="form-check-label" for="feedback-privacy-policy">
                                                <input class="form-check-input" type="checkbox" value="" id="feedback-privacy-policy"
                                                    checked="" required="" />
                                                Оставляя заявку, вы даете свое согласие
                                                на обработку персональных данных в
                                                соответствие с
                                                <a href="https://oknamobifon.ru/privacy/" data-bs-toggle="modal"
                                                    data-bs-target="#modal-privacy">
                                                    политикой конфиденциальности</a>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Скрытые поля для передачи ответов квиза -->
                                <input type="hidden" id="form-answer-1" name="form-answer-1" />
                                <input type="hidden" id="form-answer-2" name="form-answer-2" />
                                <input type="hidden" id="form-answer-3" name="form-answer-3" />
                                <input type="hidden" id="form-answer-4" name="form-answer-4" />
                                <input type="hidden" id="form-answer-5" name="form-answer-5" />
                                <input type="hidden" id="form-answer-6" name="form-answer-6" />
                                <input type="hidden" id="form-answer-7-1" name="form-answer-7-1" />
                                <input type="hidden" id="form-answer-7-2" name="form-answer-7-2" />
                                <input type="hidden" id="form-answer-7-3" name="form-answer-7-3" />
                                <input type="hidden" id="form-answer-7-4" name="form-answer-7-4" />
                            </form>
                        </div>
                        <!-- /Шаг 7 -->

                        <!-- Quiz director -->
                        <div class="col-xl-3">
                            <div class="row justify-content-center">
                                <div class="col pt-5 text-center text-xl-start">
                                    <div class="title">
                                        <h5 class="quiz-section-h3 mb-2">Нужна конcультация?</h5>
                                        <span> Отвечу на все вопросы</span>
                                    </div>

                                    <div class="img-fluid mb-2 w-100 img-director mt-3">
                                        <img loading="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/img/director-img.jpg" />
                                    </div>

                                    <h5 class="quiz-section-h3 mb-4">
                                        Игорь Львович <br />
                                        <span style="font-weight: 300;"> Руководитель фабрики</span>
                                    </h5>

                                    <div class="d-flex flex-column align-items-center align-items-lg-start">
                                        <a href="tel:+79856445775" class="d-flex aling-items-center tel">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/ico/mobile-phone-ico.svg">
                                            8 (985) 644-57-75
                                        </a>

                                        <div class="social">
                                            <a href="https://wa.me/79856445775?web=1&amp;app_absent=1" target="_blank">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/whatsapp-ico.svg"
                                                    class="ico-button ps-0" />
                                            </a>
                                            <a href="https://t.me/+79856445775" target="_blank">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/telegram-ico.svg"
                                                    class="ico-button" />
                                            </a>
                                            <a href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc"
                                                target="_blank">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ico/max-ico.svg" class="ico-button" />
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- End quiz director -->
                    </div>
                </div>
                <!-- /.quiz-question-container -->
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/quiz.css">

<script type="module" src="<?php echo get_stylesheet_directory_uri(); ?>/template-parts/quiz/quize.js"></script>