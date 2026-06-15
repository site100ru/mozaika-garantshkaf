<?php
/**
 * Template Part: Квиз калькулятора — новый шаблон (для calculator-new.php)
 *
 * По аналогии с template-parts/quiz-new/quiz-new.php, но с дополнительным
 * первым вопросом «Какая мебель Вам нужна?» (как в template-parts/quiz/calculator_quiz.php).
 *
 * Разметка выбора пунктов и стили выбранного состояния — оригинальные
 * (.option_item / .option_inner / .shadow-wrapper из template-parts/quiz/quiz.css).
 * Имена полей сохранены, чтобы работал обработчик template-parts/quiz/mails/quiz.php.
 */

$u = get_stylesheet_directory_uri();

// Шаги с картинками (radio): id шага, name группы, номер, прогресс, заголовок, опции [значение, картинка]
$image_steps = array(
	array(
		'id'       => 'question-1',
		'name'     => 'question-1',
		'num'      => '1/5',
		'progress' => 0,
		'title'    => 'Какая мебель Вам нужна?',
		'options'  => array(
			array('Шкаф-купе', '1-1.webp'),
			array('Распашной шкаф', '1-2.webp'),
			array('Гардеробная', '1-3.webp'),
			array('Двери-купе', '1-4.webp'),
			array('Рабочая зона', '1-5.webp'),
			array('Другая', '1-6.webp'),
		),
	),
	array(
		'id'       => 'question-2',
		'name'     => 'question-2',
		'num'      => '2/5',
		'progress' => 17,
		'title'    => 'Какой тип шкафа Вам нужен?',
		'options'  => array(
			array('Корпусный', '2-1.webp'),
			array('Встроенный', '2-2.webp'),
			array('Угловой', '2-3.webp'),
			array('Радиусный', '2-4.webp'),
			array('Гардеробный', '2-5.webp'),
			array('Пока не знаю', '2-6.webp'),
		),
	),
	array(
		'id'       => 'question-3',
		'name'     => 'question-3',
		'num'      => '3/5',
		'progress' => 25,
		'title'    => 'Какой материал фасада Вы хотите?',
		'options'  => array(
			array('ЛДСП', '3-1.webp'),
			array('Пескоструйная обработка', '3-2.webp'),
			array('Зеркало', '3-3.webp'),
			array('Комбинированный вариант', '3-4.webp'),
			array('Пока не знаю', '3-5.webp'),
		),
	),
);

// Шаги дверей и подарка (radio с картинками) — после шага ширины
$image_steps_after = array(
	array(
		'id'       => 'question-5',
		'name'     => 'question-5',
		'num'      => '5/5',
		'progress' => 51,
		'title'    => 'Какое количество дверей Вы предполагаете?',
		'options'  => array(
			array('1 дверь', '5-1.webp'),
			array('2 двери', '5-2.webp'),
			array('3 двери', '5-3.webp'),
			array('4 двери', '5-4.webp'),
			array('5 дверей', '5-5.webp'),
			array('Более 5 дверей', '5-6.webp'),
		),
	),
	array(
		'id'       => 'question-6',
		'name'     => 'question-6',
		'num'      => '',
		'progress' => 68,
		'title'    => 'Какой подарок Вы хотели бы получить в случае заказа?',
		'options'  => array(
			array('Беспроцентная рассрочка на 1 год', '6-1.webp'),
			array('Скидка 25%', '6-2.webp'),
			array('Скидка 35% на второй предмет', '6-3.webp'),
			array('Скидка 50% на натяжной потолок', '6-4.webp'),
		),
	),
);

// Ширина шкафа (checkbox)
$width_options = array('До 1 м', '1.5 м', '2 м', '2.5 м', '3 м', '3.5 м', '4 м', '4.5 м', '5 м', 'Более 5 м');

/**
 * Низ шага: прогресс + кнопки навигации
 */
if (!function_exists('quiz_new_footer')) :
function quiz_new_footer($progress, $is_first = false, $is_last = false)
{
	?>
<div class="quiz-step__foot">
	<div class="quiz-progress">
		<span class="quiz-progress__label">Готово:</span>
		<div class="progress" role="progressbar" aria-valuenow="<?php echo (int) $progress; ?>" aria-valuemin="0" aria-valuemax="100">
			<div class="progress-bar" style="width: <?php echo (int) $progress; ?>%"><?php echo (int) $progress; ?>%</div>
		</div>
	</div>
	<div class="quiz-step__nav">
		<button type="button" class="btn-grad-outline quiz-nav-prev" <?php echo $is_first ? 'disabled' : ''; ?> aria-label="Назад">←</button>
		<?php if ($is_last) : ?>
		<button type="submit" class="btn-grad quiz-nav-submit">Отправить</button>
		<?php else : ?>
		<button type="button" class="btn-grad quiz-nav-next">Следующий</button>
		<?php endif; ?>
	</div>
</div>
<?php
}
endif;

/**
 * Шаг с картинками (radio) — оригинальная разметка выбора
 */
if (!function_exists('quiz_new_image_step')) :
function quiz_new_image_step($step, $u, $is_first = false)
{
	$step_num = (int) substr($step['id'], strrpos($step['id'], '-') + 1); // 1..6
	?>
<div class="quiz-step" id="<?php echo esc_attr($step['id']); ?>">
	<h3 class="quiz-section-subtitle mb-4 text-start"><?php if ($step['num'] !== '') : ?><span><?php echo esc_html($step['num']); ?></span> <?php endif; ?><?php echo esc_html($step['title']); ?></h3>

	<div class="row quiz-questions-container quiz-options">
		<?php foreach ($step['options'] as $i => $opt) : $n = $i + 1; ?>
		<div class="col-6 col-sm-4 col-xl-3">
			<label class="option_item mb-3" for="answer-<?php echo $step_num; ?>-<?php echo $n; ?>">
				<input type="radio" id="answer-<?php echo $step_num; ?>-<?php echo $n; ?>" name="<?php echo esc_attr($step['name']); ?>" class="checkbox" value="<?php echo esc_attr($opt[0]); ?>" />
				<div class="option_inner">
					<div class="shadow-wrapper">
						<div class="shadow-wrapper-decoration"></div>
					</div>
					<img loading="lazy" src="<?php echo $u; ?>/template-parts/quiz/img/<?php echo esc_attr($opt[1]); ?>" style="width: 100%" alt="<?php echo esc_attr($opt[0]); ?>" />
				</div>
			</label>
			<h6 class="quiz-section-h3 mb-4"><?php echo esc_html($opt[0]); ?></h6>
		</div>
		<?php endforeach; ?>
	</div>

	<?php quiz_new_footer($step['progress'], $is_first, false); ?>
</div>
<?php
}
endif;
?>

<!-- ==================== КВИЗ КАЛЬКУЛЯТОРА (новый шаблон) ==================== -->
<section id="quiz" class="quiz-new">
	<div class="container">

		<div class="section-title-wrapper text-center">
			<h2 class="section-title">Рассчитайте примерную стоимость корпусной мебели</h2>
			<p class="quiz-new__subtitle">Ответьте на 5 коротких вопросов.</p>
			<img src="<?php echo $u; ?>/img/ico/advantage/title-decoration.svg" alt="" class="img-fluid" />
		</div>

		<div class="quiz-new__wrapper">
			<div class="row g-0">
				<div class="col-xl-9 quiz-new__steps">

					<?php
				// Шаги 1-3 (мебель, тип, материал) — первый шаг с неактивной кнопкой «Назад»
				foreach ($image_steps as $idx => $step) {
					quiz_new_image_step($step, $u, $idx === 0);
				}
				?>

					<!-- Шаг 4 — ширина (checkbox) -->
					<div class="quiz-step" id="question-4" style="display: none;">
						<h3 class="quiz-section-subtitle mb-4 text-start"><span>4/5</span> Какая ориентировочная ширина шкафа планируется?</h3>

						<div class="row quiz-questions-container quiz-options">
							<?php foreach ($width_options as $i => $val) : $n = $i + 1; ?>
							<div class="col-12 col-md-8 col-lg-3">
								<label class="d-flex quiz-chek gap-3" for="answer-4-<?php echo $n; ?>">
									<div class="option_item">
										<input type="checkbox" id="answer-4-<?php echo $n; ?>" name="answer-4-<?php echo $n; ?>" class="checkbox" value="<?php echo esc_attr($val); ?>" />
										<div class="option_inner text-start">
											<div class="shadow-wrapper-box"></div>
											<img loading="lazy" src="<?php echo $u; ?>/template-parts/quiz/ico/checkbox.svg" alt="" />
										</div>
									</div>
									<h6 class="quiz-section-h3 mb-4"><?php echo esc_html($val); ?></h6>
								</label>
							</div>
							<?php endforeach; ?>
						</div>

						<?php quiz_new_footer(38, false, false); ?>
					</div>

					<?php
				// Шаги 5-6 (двери, подарок)
				foreach ($image_steps_after as $step) {
					quiz_new_image_step($step, $u, false);
				}
				?>

					<!-- Шаг 7 — контакты + отправка -->
					<div class="quiz-step" id="question-7" style="display: none;">
						<h3 class="quiz-section-subtitle mb-4 text-start">Куда отправить расчет?</h3>

						<form action="<?php echo $u; ?>/template-parts/quiz/mails/quiz.php" id="quiz-form" method="post" name="quiz" class="form">

							<input type="hidden" name="form-source" value="quiz" />
							<input type="hidden" name="button-context" value="calculator-quiz-configurator" />

							<div class="row quiz-questions-container align-items-center">
								<?php
								$contacts = array(
									array('Перезвонить', 'messengers-icons.svg'),
									array('Отправить в Whatsapp', 'wa-icons.svg'),
									array('Отправить в Telegram', 'telegram-icons.svg'),
									array('Отправить в Max', 'max-icons.svg'),
								);
								foreach ($contacts as $i => $c) : $n = $i + 1; ?>
								<div class="col-6 col-sm-4 col-md-6 col-xl-3 mb-3">
									<label class="option_item" for="answer-7-<?php echo $n; ?>">
										<div class="d-flex quiz-chek gap-2 align-items-center">
											<input type="checkbox" id="answer-7-<?php echo $n; ?>" name="answer-7-<?php echo $n; ?>" class="checkbox" value="<?php echo esc_attr($c[0]); ?>" />
											<div class="option_inner text-start">
												<div class="shadow-wrapper-box"></div>
												<img loading="lazy" src="<?php echo $u; ?>/template-parts/quiz/ico/checkbox.svg" alt="" />
											</div>
											<img src="<?php echo $u; ?>/template-parts/quiz/ico/<?php echo esc_attr($c[1]); ?>" class="qize-feedback-icons" alt="" />
											<h6 class="quiz-section-h3 mb-0"><?php echo esc_html($c[0]); ?></h6>
										</div>
									</label>
								</div>
								<?php endforeach; ?>

								<div class="col-12 col-md-6 col-xl-3 mt-4">
									<label for="feedback-phone" class="quiz-new__label">Ваш телефон <span class="form__required">*</span></label>
									<input type="text" class="form-control telMask mb-0" id="feedback-phone" name="form-phone" placeholder="Ваш телефон" inputmode="tel" required />
								</div>
								<div class="col-12 col-md-6 mt-4">
									<label for="feedback-name" class="quiz-new__label">Как Вас зовут? <span class="form__required">*</span></label>
									<input type="text" class="form-control mb-4 mb-md-0" id="feedback-name" name="form-name" placeholder="Как Вас зовут" required />
								</div>
							</div>

							<?php quiz_new_footer(100, false, true); ?>

							<label class="form__agree" for="feedback-privacy-policy">
								<input type="checkbox" id="feedback-privacy-policy" class="form__agree-input" checked required />
								<span class="form__agree-box"></span>
								<span class="form__agree-text">Оставляя заявку, вы даете свое согласие на обработку персональных данных в соответствие с <a href="https://oknamobifon.ru/privacy/" data-bs-toggle="modal" data-bs-target="#modal-privacy">политикой конфиденциальности</a></span>
							</label>

							<!-- Скрытые поля с ответами -->
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

				</div>

				<!-- Консультант -->
				<div class="col-xl-3 quiz-new__consult">
					<h5 class="quiz-new__consult-title">Нужна консультация?</h5>
					<span class="quiz-new__consult-sub">Отвечу на все вопросы</span>

					<div class="quiz-new__consult-photo">
						<img loading="lazy" src="<?php echo $u; ?>/template-parts/quiz/img/director-img.jpg" alt="Руководитель фабрики" />
					</div>

					<h5 class="quiz-new__consult-name">Орлов Игорь Львович <span>Руководитель фабрики</span></h5>

					<a href="tel:+79856445775" class="quiz-new__consult-tel">
						<img src="<?php echo $u; ?>/template-parts/quiz/ico/mobile-phone-ico.svg" alt="" />
						8 (985) 644-57-75
					</a>

					<div class="quiz-new__consult-social">
						<a href="https://wa.me/79856445775?web=1&amp;app_absent=1" target="_blank"><img src="<?php echo $u; ?>/img/ico/whatsapp-ico.svg" alt="WhatsApp" /></a>
						<a href="https://t.me/+79856445775" target="_blank"><img src="<?php echo $u; ?>/img/ico/telegram-ico.svg" alt="Telegram" /></a>
						<a href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="_blank"><img src="<?php echo $u; ?>/img/ico/max-ico.svg" alt="Max" /></a>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- ==================== /КВИЗ КАЛЬКУЛЯТОРА ==================== -->

<!-- Оригинальные стили выбора пунктов (.option_item / .shadow-wrapper) -->
<link rel="stylesheet" href="<?php echo $u; ?>/template-parts/quiz/quiz.css">

<script>
	(function () {
		var root = document.getElementById('quiz');
		if (!root) return;

		var steps = ['question-1', 'question-2', 'question-3', 'question-4', 'question-5', 'question-6', 'question-7'];
		var current = 0;

		function show(n, scroll) {
			steps.forEach(function (id, idx) {
				var el = document.getElementById(id);
				if (el) el.style.display = idx === n ? 'block' : 'none';
			});
			current = n;
			if (scroll) root.scrollIntoView({ behavior: 'smooth', block: 'start' });
		}

		// Сбор ответов текущего шага в скрытые поля
		function collect(id) {
			if (id === 'question-1' || id === 'question-2' || id === 'question-3' || id === 'question-5' || id === 'question-6') {
				var num = id.split('-')[1];
				var checked = document.querySelector('input[name="' + id + '"]:checked');
				var field = document.getElementById('form-answer-' + num);
				if (checked && field) field.value = checked.value;
			} else if (id === 'question-4') {
				var vals = [];
				for (var i = 1; i <= 10; i++) {
					var cb = document.getElementById('answer-4-' + i);
					if (cb && cb.checked) vals.push(cb.value);
				}
				var f4 = document.getElementById('form-answer-4');
				if (f4) f4.value = vals.join(', ');
			}
		}

		// Проверка: выбран хотя бы один вариант
		function isValid(id) {
			var step = document.getElementById(id);
			if (!step) return true;
			return step.querySelectorAll('input[type="radio"]:checked, input[type="checkbox"]:checked').length > 0;
		}

		root.querySelectorAll('.quiz-nav-next').forEach(function (btn) {
			btn.addEventListener('click', function () {
				var id = steps[current];
				if (!isValid(id)) {
					alert('Пожалуйста, выберите вариант для продолжения.');
					return;
				}
				collect(id);
				if (current < steps.length - 1) show(current + 1, true);
			});
		});

		root.querySelectorAll('.quiz-nav-prev').forEach(function (btn) {
			btn.addEventListener('click', function () {
				if (current > 0) show(current - 1, true);
			});
		});

		// Синхронизация чекбоксов способов связи -> скрытые поля
		for (var i = 1; i <= 4; i++) {
			(function (n) {
				var cb = document.getElementById('answer-7-' + n);
				var hidden = document.getElementById('form-answer-7-' + n);
				if (cb && hidden) {
					cb.addEventListener('change', function () {
						hidden.value = this.checked ? this.value : '';
					});
				}
			})(i);
		}

		show(0);
	})();
</script>
