<?php
	
	session_start();
	$win = "true";
	
	if ( $_POST ) {
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}
		
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		if ( $Return->success == true && $Return->score > .1 ) {
	
			$name    = $_POST['name'];
			$tel     = $_POST['tel'];
			$mes     = $_POST['mes'];
			$product = $_POST['product'];

			$headers = "From: info@garantshkaf.ru\r\n";
			$headers .= "Reply-To: info@garantshkaf.ru\r\n";
			$headers .= "Return-Path: info@garantshkaf.ru\r\n";
			$headers .= "CC: info@garantshkaf.ru\r\n";
			$headers .= "BCC: info@garantshkaf.ru\r\n";
			$headers .= "Content-type: text/html; charset=utf-8\r\n";

			mail( "garantshkaf@mail.ru, vasilyev-r@mail.ru", "Расчёт стоимости с сайта гарантшкаф.рф.", 
				"Объект: " . $product . "\n" .
				"Потенциальный клиент: " . $name . "\n" .
				"Телефон: " . $tel . "\n" .
				"Сообщение: " . $mes,
				$headers
			);
			
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «ГАРАНТШКАФ». Мы ответим Вам в&#160;ближайшее время.</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
			
		} else {
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}
	}
?>