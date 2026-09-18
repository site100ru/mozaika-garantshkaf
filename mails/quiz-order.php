<?php
	
	session_start();
	$win = "true";

	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];

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

	$answer1 = $_SESSION['answer1'];
	$answer2_1 = $_SESSION['answer2-1'];
	$answer2_2 = $_SESSION['answer2-2'];
	$answer2_3 = $_SESSION['answer2-3'];
	$answer2_4 = $_SESSION['answer2-4'];
	$answer3 = $_SESSION['answer3'];

	$mail .= "Имя клиента: ".$name."\n\n";
	$mail .= "Телефон клиента: ".$tel."\n\n";
	$mail .= "Email клиента: ".$email."\n\n";
	$mail .= "Тип шкафа: ".$answer1."\n\n";
	$mail .= "Длина: ".$answer2_1."\n\n";
	$mail .= "Ширина: ".$answer2_2."\n\n";
	$mail .= "Высота: ".$answer2_3."\n\n";
	$mail .= "Глубина: ".$answer2_4."\n\n";
	$mail .= "Количество дверей: ".$answer3."\n\n";

	$headers = "From: info@garantshkaf.ru\r\n";
	$headers .= "Reply-To: info@garantshkaf.ru\r\n";
	$headers .= "Return-Path: info@garantshkaf.ru\r\n";
	$headers .= "Content-type: text/plain; charset=utf-8\r\n";

	/* Send mails */
	//garantshkaf@mail.ru, vasilyev-r@mail.ru
	mail( "garantshkaf@mail.ru, vasilyev-r@mail.ru", "Заявка на расчет шкафа с сайта garantshkaf.ru.", $mail, $headers );

	$_SESSION['win'] = 1;
	$_SESSION['recaptcha'] = '<p>Спасибо, что Вы обратились именно к нам. Мы свяжемся с Вами в ближайшее время.</p>';
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>