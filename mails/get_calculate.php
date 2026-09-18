<?php
	
	session_start();
	$win = "true";
	
	// Если прикреплённые файлы слишком большие для сервера, он отбрасывает всю форму целиком:
	// и поля, и файлы приходят пустыми. Без этой проверки заявка молча бы не отправилась,
	// поэтому сообщаем клиенту, в чём дело.
	if ( empty( $_POST ) && !empty( $_SERVER['CONTENT_LENGTH'] ) ) {
		$_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p class="text-light">Прикреплённые файлы слишком большие. Уменьшите их размер или прикрепите меньше файлов и повторите попытку.</p>';
		header("Location: ".$_SERVER['HTTP_REFERER']);
		exit();
	}
	
	/* Если существует переменная POST, то
	if ( $_POST ) {
		// Отправляем данные в Google
		function getCaptcha($SecretKey){
			$Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
			$Return = json_decode($Response);
			return $Return;
		}*/
		
		/* Принимаем данные обратно
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		// Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
		if ( $Return->success == true && $Return->score > .1 ) { */
	
			$name = $_POST['name'];
			$tel = $_POST['tel'];
			$mes = $_POST['mes'];
			if ( isset( $_POST['email'] ) ) { $email = $_POST['email']; } else { $email = ''; }

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
			
			//garantshkaf@mail.ru, vasilyev-r@mail.ru
			$to 	 = 'garantshkaf@mail.ru, vasilyev-r@mail.ru';
			$from 	 = 'info@garantshkaf.ru';
			$subject = 'Заявка на расчет стоимости с сайта garantshkaf.ru';
			 
			
			// Не более 10 МБ на один файл
			$max_file_size = 10 * 1024 * 1024;

			// Но если хостинг разрешает загружать файлы меньшего размера, лимитом считаем его —
			// чтобы в сообщении клиенту была указана реальная цифра.
			// Настройка записывается как «2M», «512K», «1G» — переводим её в байты.
			$server_limit = trim( ini_get( 'upload_max_filesize' ) );
			$server_limit_bytes = (int) $server_limit;
			switch ( strtoupper( substr( $server_limit, -1 ) ) ) {
				// break не нужен: для «G» умножаем трижды, для «M» — дважды, для «K» — один раз
				case 'G': $server_limit_bytes *= 1024;
				case 'M': $server_limit_bytes *= 1024;
				case 'K': $server_limit_bytes *= 1024;
			}
			if ( $server_limit_bytes > 0 && $server_limit_bytes < $max_file_size ) {
				$max_file_size = $server_limit_bytes;
			}
			$max_file_size_mb = round( $max_file_size / 1024 / 1024, 1 );

			// Какие файлы можно прикреплять: расширение => тип файла для письма.
			// Формат определяем по расширению, а не по типу, который присылает браузер:
			// разные телефоны и браузеры присылают для одного и того же фото разные типы
			// (image/jpg, image/heic, application/octet-stream), и хорошие файлы отбраковывались.
			$allowed_types = array(
				'jpg'  => 'image/jpeg',
				'jpeg' => 'image/jpeg',
				'png'  => 'image/png',
				'pdf'  => 'application/pdf',
				'heic' => 'image/heic',
				'heif' => 'image/heif',
			);
			
			// Проверяем каждый прикреплённый файл и собираем подходящие в список
			$attachments = array();
			
			if ( isset( $_FILES['file']['name'] ) && is_array( $_FILES['file']['name'] ) ) {
				foreach ( $_FILES['file']['name'] as $key => $file_name ) {
					$file_error = $_FILES['file']['error'][$key];
					
					// Файл не выбран — пропускаем
					if ( $file_error == UPLOAD_ERR_NO_FILE ) {
						continue;
					}
					
					$file_ext   = strtolower( pathinfo( $file_name, PATHINFO_EXTENSION ) );
					$safe_name  = htmlspecialchars( $file_name );
					$file_problem = '';
					
					if ( !isset( $allowed_types[$file_ext] ) ) {
						// Неподходящий формат
						$file_problem = 'Файл «' . $safe_name . '» в неподходящем формате. Можно прикреплять файлы .jpg, .jpeg, .png, .pdf или .heic.';
					} elseif ( $file_error == UPLOAD_ERR_INI_SIZE || $file_error == UPLOAD_ERR_FORM_SIZE || $_FILES['file']['size'][$key] > $max_file_size ) {
						// Файл больше нашего лимита или лимита сервера
						$file_problem = 'Файл «' . $safe_name . '» слишком большой. Размер одного файла — не более ' . $max_file_size_mb . ' МБ.';
					} elseif ( $file_error != UPLOAD_ERR_OK || !is_uploaded_file( $_FILES['file']['tmp_name'][$key] ) ) {
						// Файл не дошёл до сервера (обрыв связи и т.п.)
						$file_problem = 'Не удалось загрузить файл «' . $safe_name . '». Пожалуйста, попробуйте ещё раз.';
					}
					
					// С файлом проблема — заявку не отправляем и объясняем клиенту причину
					if ( $file_problem ) {
						$_SESSION['win'] = 1;
						$_SESSION['recaptcha'] = '<p class="text-light">' . $file_problem . '</p>';
						header("Location: ".$_SERVER['HTTP_REFERER']);
						exit();
					}
					
					$attachments[] = array(
						'name' => $file_name,
						'type' => $allowed_types[$file_ext],
						'path' => $_FILES['file']['tmp_name'][$key],
					);
				}
			}
			
			// Если есть подходящие файлы, то отправляем письмо с вложениями
			if ( $attachments ) {
				
				$EOL = "\r\n"; // ограничитель строк, некоторые почтовые сервера требуют \n - подобрать опытным путём
				$boundary     = "--".md5(uniqid(time()));  // любая строка, которой не будет ниже в потоке данных.
				
				$subject= '=?utf-8?B?' . base64_encode($subject) . '?=';

				$headers    = "MIME-Version: 1.0;$EOL";   
				$headers   .= "Content-Type: multipart/mixed; boundary=\"$boundary\"$EOL";  
				$headers   .= "From: $from\r\n";

				$message    = "
					<strong>Имя:</strong> ".$name."<br><br>
					<strong>Телефон:</strong> ".$tel."<br><br>
					<strong>Email:</strong> ".$email."<br><br>
					<strong>Сообщение:</strong> ".$mes."<br><br>
					<strong>В прикрепленных файлах находятся изображения изделия или схематично нарисованный рисунок!</strong><br><br>
				";
				
				$multipart  = "--$boundary$EOL";   
				$multipart .= "Content-Type: text/html; charset=utf-8$EOL";   
				$multipart .= "Content-Transfer-Encoding: base64$EOL";   
				$multipart .= $EOL; // раздел между заголовками и телом html-части 
				$multipart .= chunk_split(base64_encode($message));   

				#начало вставки файлов

				foreach ( $attachments as $attachment ) {
					// Имя файла кодируем, чтобы русские буквы в названии не ломали письмо
					$NameFile = '=?utf-8?B?' . base64_encode( $attachment['name'] ) . '?=';
					$File = file_get_contents( $attachment['path'] );
					$multipart .= "$EOL--$boundary$EOL";   
					$multipart .= "Content-Type: {$attachment['type']}; name=\"$NameFile\"$EOL";   
					$multipart .= "Content-Transfer-Encoding: base64$EOL";   
					$multipart .= "Content-Disposition: attachment; filename=\"$NameFile\"$EOL";   
					$multipart .= $EOL; // раздел между заголовками и телом прикрепленного файла 
					$multipart .= chunk_split(base64_encode($File));
				}

				#>>конец вставки файлов

				$multipart .= "$EOL--$boundary--$EOL";

				mail( $to, $subject, $multipart, $headers );
			
			} else {
				
				// Если загруженных файлов нет, то отправляем этим способом
				
				$headers  = "MIME-Version: 1.0\r\n";
				$headers .= "From: $from\r\n";
				$headers .= "Content-type: text/html; charset=utf-8\r\n";
				
				$message  = "
					<strong>Имя:</strong> ".$name."<br><br>
					<strong>Телефон:</strong> ".$tel."<br><br>
					<strong>Email:</strong> ".$email."<br><br>
					<strong>Сообщение:</strong> ".$mes."<br><br>
				";
				
				mail( $to, $subject, $message, $headers );
				
			}
			
			
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «ГАРАНТШКАФ». Мы ответим Вам в&#160;ближайшее время.</p>';
			
			header("Location: ".$_SERVER['HTTP_REFERER']);
			
		/*} else {
			// Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
		}*/
	/*}*/
	
?>