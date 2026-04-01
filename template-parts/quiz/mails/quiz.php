<?php
session_start();
$win = "true";

$answer1 = isset($_POST['form-answer-1']) ? $_POST['form-answer-1'] : '';
$answer2 = isset($_POST['form-answer-2']) ? $_POST['form-answer-2'] : '';
$answer3 = isset($_POST['form-answer-3']) ? $_POST['form-answer-3'] : '';
$answer4 = isset($_POST['form-answer-4']) ? $_POST['form-answer-4'] : '';
$answer5 = isset($_POST['form-answer-5']) ? $_POST['form-answer-5'] : '';
$answer6 = isset($_POST['form-answer-6']) ? $_POST['form-answer-6'] : '';

$answer2 = $_POST['form-answer-2'];
$answer3 = $_POST['form-answer-3'];
$answer4 = $_POST['form-answer-4'];
$answer5 = $_POST['form-answer-5'];
$answer6 = $_POST['form-answer-6'];

// Способы связи (чекбоксы)
$answer7_1 = isset($_POST['form-answer-7-1']) ? $_POST['form-answer-7-1'] : '';
$answer7_2 = isset($_POST['form-answer-7-2']) ? $_POST['form-answer-7-2'] : '';
$answer7_3 = isset($_POST['form-answer-7-3']) ? $_POST['form-answer-7-3'] : '';
$answer7_4 = isset($_POST['form-answer-7-4']) ? $_POST['form-answer-7-4'] : '';

// Собираем способы связи в одну строку
$contact_methods = array();
if ($answer7_1) $contact_methods[] = $answer7_1;
if ($answer7_2) $contact_methods[] = $answer7_2;
if ($answer7_3) $contact_methods[] = $answer7_3;
if ($answer7_4) $contact_methods[] = $answer7_4;
$answer7 = !empty($contact_methods) ? implode(', ', $contact_methods) : 'Не выбрано';

$name = $_POST['form-name'];
$phone = $_POST['form-phone'];

$headers = "From: info@garantshkaf.ru\r\n";
$headers .= "Reply-To: info@garantshkaf.ru\r\n";
$headers .= "Return-Path: info@garantshkaf.ru\r\n";
$headers .= "CC: info@garantshkaf.ru\r\n";
$headers .= "BCC: info@garantshkaf.ru\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";

/* Проверяем что заполнено поле с телефоном */
if ($_POST) {
    // Отправляем данные в Google
    function getCaptcha($SecretKey)
    {
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdV1IcUAAAAABnQ0mXIp5Yh7tLEcAXzdqG6rx9Y&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
    // Если поле с телефоном заполнено
    mail(
        "garantshkaf@mail.ru, vasilyev-r@mail.ru",
        "Заявка с Квиза с сайта garantshkaf.ru",
        "
			Имя: " . $name . "<br><br>
			Телефон: " . $phone . "<br><br>
			Способы связи: " . $answer7 . "<br><br>
            Тип мебели: " . ($answer1 ?: 'Не указано') . "<br><br>
			Тип конструкции: " . $answer2 . "<br><br>
			Материал фасада: " . $answer3 . "<br><br>
			Ширина шкафа: " . $answer4 . "<br><br>
			Количество дверей: " . $answer5 . "<br><br>
			Специальное предложение: " . $answer6,
        $headers
    );
    $_SESSION['win'] = 1;
    $_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в компанию «ГАРАНТШКАФ». Мы ответим Вам в&#160;ближайшее время.</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
    // Если поле с телефоном НЕ заполнено
    $_SESSION['win'] = 1;
    $_SESSION['recaptcha'] = '<p class="text-light"><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
    header("Location: " . $_SERVER['HTTP_REFERER']);
}
