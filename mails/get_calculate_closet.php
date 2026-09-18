<?php
	session_start();
	$win = "true";
			
	$answer1 = $_POST['answer1'];
	$answer2 = $_POST['answer2'];
	$answer3 = $_POST['answer3'];	
	$answer4 = $_POST['answer4'];	
	$answer5 = $_POST['answer5'];	
	$answer6 = $_POST['answer6'];	
	$name = $_POST['name'];	
	$phone = $_POST['phone'];

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
	if ( !is_string( $phone ) || !preg_match( '/^\+7\(\d{3}\)\d{3}-\d{2}-\d{2}\z/', $phone ) ) {
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
	
	/* Проверям что заполнено поле с телефоном */
	if ( $_POST['phone'] AND $_POST['answer6'] ) {
		// Если поле с телефоно заполненно
		//garantshkaf@mail.ru, vasilyev-r@mail.ru
		mail( "garantshkaf@mail.ru, vasilyev-r@mail.ru", "Заявка с Квиза с сайта garantshkaf.ru", "
			Имя: " . $name ."<br><br>
			Телефон: " . $phone ."<br><br>
			Тип мебели: " . $answer1 ."<br><br>
			Тип шкафа: " . $answer2 ."<br><br>
			Материал фасада: " . $answer3 ."<br><br>
			Ширина: " . $answer4 ."<br><br>
			Количество дверей: " . $answer5 ."<br><br>
			Желаемый подарок: " . $answer6,
			$headers
		); 	
		$_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение на Мебельную фабрику «ГАРАНТШКАФ». Мы все рассчитаем и вернемся к Вам в&#160;ближайшее время.</p>';
		header("Location: ".$_SERVER['HTTP_REFERER']);
	} else {
		// Если поле с телефоно НЕ заполненно
		$_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p class="text-light">Обязательное поле с номером телефона не заполненно! Пожалуйста, повторите попытку и заполенте поле с номером телефона.</p>';
		header("Location: ".$_SERVER['HTTP_REFERER']);
	}
?>