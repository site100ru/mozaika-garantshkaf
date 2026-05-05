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
			
			$headers = "From: info@garantshkaf.ru\r\n";
			$headers .= "Reply-To: info@garantshkaf.ru\r\n";
			$headers .= "Return-Path: info@garantshkaf.ru\r\n";
			$headers .= "CC: info@garantshkaf.ru\r\n";
			$headers .= "BCC: info@garantshkaf.ru\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";
			
			// mail( "garantshkaf@mail.ru, vasilyev-r@mail.ru",
			// "Заказ обратного звонка с сайта гарантшкаф.рф.", "Потенциальный клиент ".$name." просит рассчитать Вас стоимость шкафа и перезвонить Вас на номер " . $tel, $headers 
			// );

			mail( "sidorov-vv3@mail.ru", 
			"Заказ обратного звонка с сайта гарантшкаф.рф.", "Потенциальный клиент ".$name." просит рассчитать Вас стоимость шкафа и перезвонить Вас на номер " . $tel, $headers 
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