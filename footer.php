<!-- Рассчитать стоимость без загрузки изображения -->
<div class="modal fade" id="calculatePriceWithoutDownloadModal" tabindex="-1" aria-labelledby="calculatePriceWithoutDownloadLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/gal-callback.php"
            class="modal-content" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="calculatePriceWithoutDownloadLabel">Рассчитать стоимость</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row pb-2">
                    <div class="col-12">
                        <p class="title"><input type="hidden" name="product" id="modalProductName">
                        <span id="modalProductDisplay"></span></p>
                    </div>
                    <div class="col-12 mb-0">
                        <textarea type="text" rows="3" name="mes" class="form-control"
                            placeholder="При желании укажите форму, размеры, материалы или другую информацию"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" name="name" class="form-control" placeholder="Ваше имя">
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" name="tel" class="form-control telMask"
                            placeholder="Ваш телефон*" required>
                    </div>
                    <div class="col-12">
                        <input type="hidden" id="g-recaptcha-response-calculatePriceWithoutDownload" name="g-recaptcha-response">
                        <button type="submit" class="btn btn-danger" style="width: 100%">Отправить</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    document.getElementById('calculatePriceWithoutDownloadModal').addEventListener('show.bs.modal', function (e) {
        var btn = e.relatedTarget;
        var title = btn.getAttribute('data-title');
        var category = btn.getAttribute('data-category');
        var value = title;

        document.getElementById('modalProductName').value = value;
        document.getElementById('modalProductDisplay').textContent = value;
    });
</script>
<!-- /Рассчитать стоимость без загрузки изображения -->

<!-- Callback button HTML -->
<div class="callback-button-wrapper">
	<div id="callbackBtn" class="callback-button" onclick="callbackButtonClick();">
		<div id="btnIco" class="callback-button-ico"></div>
	</div>

	<div id="formBtn" class="callback-form-button" data-bs-toggle="tooltip" data-bs-placement="left"
		data-bs-custom-class="custom-tooltip" data-bs-title="Перезвонить Вам?">
		<a data-bs-toggle="modal" data-bs-target="#callback">
			<div class="callback-form-button-ico"></div>
		</a>
	</div>
	<div id="phoneBtn" class="callback-phone-button" data-bs-toggle="tooltip" data-bs-placement="left"
		data-bs-custom-class="custom-tooltip" data-bs-title="Позвонить">
		<a href="tel:89856445775">
			<div class="callback-phone-button-ico"></div>
		</a>
	</div>
	<div id="whatsappBtn" class="callback-whatsapp-button" data-bs-toggle="tooltip" data-bs-placement="left"
		data-bs-custom-class="custom-tooltip" data-bs-title="Whatsapp">
		<a href="https://wa.me/79856445775?web=1&app_absent=1" target="blank">
			<div class="callback-whatsapp-button-ico"></div>
		</a>
	</div>
	<div id="telegramBtn" class="callback-telegram-button" data-bs-toggle="tooltip" data-bs-placement="left"
		data-bs-custom-class="custom-tooltip" data-bs-title="Telegram">
		<a href="https://t.me/+79856445775" target="blank">
			<div class="callback-telegram-button-ico"></div>
		</a>
	</div>
	<div id="maxBtn" class="callback-max-button" data-bs-toggle="tooltip" data-bs-placement="left"
		data-bs-custom-class="custom-tooltip" data-bs-title="Max">
		<a href="https://max.ru/u/f9LHodD0cOJpxVina4POaWorB_iFOHaIWOB_hVCMqBZT5lketcgqeZcBwAc" target="blank">
			<div class="callback-max-button-ico"></div>
		</a>
	</div>
</div>
<!-- /Callback button HTML -->

<!-- Callback button JS -->
<script>
	function callbackButtonClick() {

		let formBtn = document.getElementById('formBtn').style.top;


		if (formBtn == "0px" || formBtn == 0) {
			document.getElementById('callbackBtn').style.animation = "none";
			document.getElementById('btnIco').style.animation = "change2 linear .5s";
			document.getElementById('btnIco').style.webkitAnimation = "change2 linear .5s";
			document.getElementById('btnIco').style.webkitTransition = "transform 1s ease-in-out";

			document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
			document.getElementById('btnIco').style.transform = "rotate(180deg)";


			document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-button-close.png)";
			document.getElementById('btnIco').style.backgroundPosition = "center";
			document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";

			document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
			document.getElementById('btnIco').style.backgroundSize = "cover";


			document.getElementById('formBtn').style.top = "-60px";
			document.getElementById('formBtn').style.opacity = "1";

			document.getElementById('phoneBtn').style.top = "-120px";
			document.getElementById('phoneBtn').style.opacity = "1";

			document.getElementById('whatsappBtn').style.top = "-180px";
			document.getElementById('whatsappBtn').style.opacity = "1";

			document.getElementById('telegramBtn').style.top = "-240px";
			document.getElementById('telegramBtn').style.opacity = "1";

			document.getElementById('maxBtn').style.top = "-300px";
			document.getElementById('maxBtn').style.opacity = "1";
		} else {
			document.getElementById('callbackBtn').style.animation = "waves linear 2s infinite";
			document.getElementById('btnIco').style.animation = "change linear 16s infinite";
			document.getElementById('btnIco').style.webkitTransition = "transform 1s ease-in-out";
			document.getElementById('btnIco').style.webkitAnimation = "change linear 16s infinite";
			document.getElementById('btnIco').style.transform = "rotate(180deg)";
			document.getElementById('btnIco').style.webkitTransform = "rotate(180deg)";
			document.getElementById('btnIco').style.backgroundImage = "url(<?php echo get_stylesheet_directory_uri(); ?>/img/ico/callback-button-ico.png)";
			document.getElementById('btnIco').style.backgroundPosition = "center";
			document.getElementById('btnIco').style.backgroundRepeat = "no-repeat";

			document.getElementById('btnIco').style.webkitBackgroundSize = "cover";
			document.getElementById('btnIco').style.backgroundSize = "cover";


			document.getElementById('formBtn').style.top = "0px";
			document.getElementById('formBtn').style.opacity = "0";

			document.getElementById('phoneBtn').style.top = "0px";
			document.getElementById('phoneBtn').style.opacity = "0";

			document.getElementById('whatsappBtn').style.top = "0px";
			document.getElementById('whatsappBtn').style.opacity = "0";

			document.getElementById('telegramBtn').style.top = "0px";
			document.getElementById('telegramBtn').style.opacity = "0";
			
			document.getElementById('maxBtn').style.top = "0px";
			document.getElementById('maxBtn').style.opacity = "0";
		}
	}
</script>
<!-- /Callback button JS -->


<!-- Callback modal -->
<div class="modal fade" id="callback" tabindex="-1" aria-labelledby="modalOrderLabel-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalOrderLabel-1">
					Заказать обратный звонок
				</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback.php">
					<p><input type="text" name="name" class="form-control" placeholder="Ваше имя" /></p>
					<p><input type="text" id="phone_mask_2" name="tel" class="form-control telMask" placeholder="Ваш телефон"
							required /></p>

					<input type="hidden" id="g-recaptcha-response-callback" name="g-recaptcha-response">
					<button type="submit" class="btn btn-danger" style="width: 100%">Отправить</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End callback modal -->

<!-- Callback modal -->
<div class="modal fade" id="callback-measurer" tabindex="-1" aria-labelledby="modalOrderLabel-1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalOrderLabel-1">
					Вызов замерщика
				</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/callback.php">
					<p><input type="text" name="name" class="form-control" placeholder="Ваше имя" /></p>
					<p><input type="text" id="phone_mask_2" name="tel" class="form-control telMask" placeholder="Ваш телефон"
							required /></p>

					<input type="hidden" id="g-recaptcha-response-callback" name="g-recaptcha-response">
					<button type="submit" class="btn btn-danger" style="width: 100%">Отправить</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End callback modal -->

<!-- Modal Want This -->
<div class="modal fade" id="want-this" tabindex="-1" aria-labelledby="modalOrderLabel-2" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalOrderLabel-2">Оставить заявку</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order-2.php">
					<p>
						<input type="text" name="name" class="form-control" placeholder="Ваше имя" />
					</p>
					<p>
						<input type="text" id="phone_mask_6" name="tel" class="form-control telMask" placeholder="Ваш телефон"
							required />
					</p>

					<input type="hidden" id="g-recaptcha-response-order-modal" name="g-recaptcha-response">
					<button type="submit" class="btn btn-danger" style="width: 100%">Отправить</button>
				</form>
			</div>
		</div>
	</div>
</div>


<!-- Modal order 2 -->
<div class="modal fade" id="order2" tabindex="-1" aria-labelledby="modalOrder2Label" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalOrder2Label">
					Рассчитать стоимость шкафа
				</h5>
				<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post" action="<?php echo get_stylesheet_directory_uri(); ?>/mails/order.php">
					<p>
						<input type="text" name="name" class="form-control" placeholder="Ваше имя" />
					</p>
					<p>
						<input type="text" id="phone_mask_7" name="tel" class="form-control telMask" placeholder="Ваш телефон"
							required />
					</p>
					<input type="hidden" id="g-recaptcha-response-calculate" name="g-recaptcha-response">
					<button type="submit" class="btn btn-danger" style="width: 100%">Отправить</button>
				</form>
			</div>
		</div>
	</div>
</div>



<!-- Показываем сообщение об успешной отправки -->
<div style="display: <?php echo $display; ?>;" onclick="f1();">
	<!-- Присваиваем свойству display значение переменной $display -->
	<div id="background-msg" style="display: <?php echo $display; ?>;"></div> <!-- Показываем background -->
	<!-- Показываем сообщение об успешной отправке данных -->
	<div id="message">
		<?php echo $_SESSION['recaptcha'];
		unset($_SESSION['recaptcha']); ?>
	</div>
</div>


<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>


<!-- Tooltips -->
<script>
	const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
	const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
</script>


<!-- Загрузка изображений с приоритетом
<script>
	if ("loading" in HTMLImageElement.prototype) {
		const images = document.querySelectorAll('img[loading="lazy"]');
		images.forEach((img) => {
			img.src = img.dataset.src;
		});
	} else {
		// Dynamically import the LazySizes library
		const script = document.createElement("script");
		script.src = "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js";
		document.body.appendChild(script);
	}
</script> -->


<!-- New telephone number mask -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/inputmask.min.js"></script>
<script>
	var telMask = document.getElementsByClassName("telMask");
	var im = new Inputmask("+7(999)999-99-99");
	im.mask(telMask);
</script>


<script>
	/* Убираем сообщение об успешной отправки */
	function f1() {
		document.getElementById("background-msg").style.display = "none";
		document.getElementById("message").style.display = "none";
	}
</script>


<!-- jQuery -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery-1.5.1.min.js"></script>


<!-- script js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>


<!-- Quiz JS -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/quiz.js"></script>


<!-- Menu -->
<script>vyezjalo();</script>


<script src='https://www.google.com/recaptcha/api.js?render=6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn'></script>
<script>
	grecaptcha.ready(function () {
		grecaptcha.execute('6LdV1IcUAAAAADRQAhpGL8dVj5_t0nZDPh9m_0tn', { action: 'action_name' }).then(function (token) {
			// В боке Home
			if (document.getElementById('g-recaptcha-response-order-1-home')) {
				document.getElementById('g-recaptcha-response-order-1-home').value = token;
			}
			// В обычном блоке
			if (document.getElementById('g-recaptcha-response-order-2')) {
				document.getElementById('g-recaptcha-response-order-2').value = token;
			}

			if (document.getElementById('g-recaptcha-response-order-3-with-mail')) {
				document.getElementById('g-recaptcha-response-order-3-with-mail').value = token;
			}

			if (document.getElementById('g-recaptcha-response-callback')) {
				document.getElementById('g-recaptcha-response-callback').value = token;
			}

			if (document.getElementById('g-recaptcha-response-order-modal')) {
				document.getElementById('g-recaptcha-response-order-modal').value = token;
			}

			if (document.getElementById('g-recaptcha-response-calculate')) {
				document.getElementById('g-recaptcha-response-calculate').value = token;
			}

            if (document.getElementById('g-recaptcha-response-calculatePriceWithoutDownload')) {
				document.getElementById('g-recaptcha-response-calculatePriceWithoutDownload').value = token;
			}
		});
	});
</script>



<?php if ($counter_body = get_theme_mod('mytheme_counter_body')): ?>
	<!-- Код счетчика (body) -->
	<?php echo $counter_body; ?>
<?php endif; ?>


</body>

</html>