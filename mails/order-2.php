<?php
	
	session_start();
	$win = "true";
	
	// Если существует переменная POST, то
	if ( $_POST ) {
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}
		
		/* Принимаем данные обратно */
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		// Если вероятность робота более 0.1, то считаем отправителя человеком и выполняем отправку почты
		if ( $Return->success == true && $Return->score > .1 ) {
	
			$name = $_POST['name'];
			$tel = $_POST['tel'];	

			// Проверяем, что телефон введён точно по маске +7(999)999-99-99.
			// Если номер не дописан или записан в другом виде — заявку не отправляем.
			//
			// Как читать шаблон ниже:
			//   ^        — номер должен начинаться сразу, без лишних символов впереди
			//   \+       — знак плюс (обратная косая черта «\» нужна, чтобы плюс
			//              считался обычным символом, а не командой шаблона)
			//   7        — цифра семь (маска на сайте всегда подставляет именно её)
			//   \(       — открывающая скобка (косая черта — по той же причине, что у плюса)
			//   \d{3}    — три цифры (код оператора)
			//   \)       — закрывающая скобка
			//   \d{3}    — три цифры
			//   -        — дефис
			//   \d{2}    — две цифры
			//   -        — дефис
			//   \d{2}    — две цифры
			//   \z       — на этом номер заканчивается, после него ничего быть не должно
			//
			// is_string() проверяет, что телефон пришёл обычным текстом.
			// Без неё поддельная отправка формы могла бы вызвать ошибку на сайте.
			if ( !is_string( $tel ) || !preg_match( '/^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}\z/', $tel ) ) {
				// Номер заполнен не полностью — заявка не отправляется
				header("Location: ".$_SERVER['HTTP_REFERER']);
				exit;
			}
			
			$headers = "From: info@garantshkaf.ru\r\n";
			$headers .= "Reply-To: info@garantshkaf.ru\r\n";
			$headers .= "Return-Path: info@garantshkaf.ru\r\n";
			$headers .= "CC: info@garantshkaf.ru\r\n";
			$headers .= "BCC: info@garantshkaf.ru\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			
			//garantshkaf@mail.ru, vasilyev-r@mail.ru
			mail( "sidorov-vv3@mail.ru", 
			"Заявка с сайта garantshkaf.ru.", "Потенциальный клиент ".$name." просит рассчитать Вас стоимость шкафа и перезвонить на номер " . $tel, $headers 
			);

			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light">Спасибо, что Вы обратились именно к нам. Мы свяжемся с Вами в ближайшее время.</p>';
			
			header("Location: ".$_SERVER['HTTP_REFERER']);
			
		} else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}
	}
?>