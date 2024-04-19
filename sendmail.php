<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "inksv@ukr.net"; // Ваш почтовый адрес
    $subject = $_POST["subject"]; // Тема письма
    $message = $_POST["message"]; // Текст сообщения
    $headers = "From: " . $_POST["email"] . "\r\n"; // Адрес отправителя

    // Отправка письма
    if (mail($to, $subject, $message, $headers)) {
        echo "Письмо успешно отправлено";
    } else {
        echo "Ошибка при отправке письма";
    }
}
?>
