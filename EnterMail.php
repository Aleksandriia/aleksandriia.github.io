<?php
/* Отображение ошибок */
ini_set('display_errors','Off');

$emailpodpiska = $_POST['emailpodpiska'];

/* Функция преобразует все символы */
$emailpodpiska = htmlspecialchars($emailpodpiska);

/* Функция декодирует url */
$emailpodpiska = urldecode($emailpodpiska);

/* Функция удаления пробелов с начала и конца строки, если таковые имеются */
$emailpodpiska = trim($emailpodpiska);

/* Проверка работоспособности */
echo "Почта: ";
echo $emailpodpiska;
echo "<br>";

/* Отправка данных на почтовый сервис */
if (mail("alex-021505@mail.ru", "Подписка на рассылку", "Подписка на рассылку сайта любителей садоводства."." E-mail: ".$emailpodpiska,"From: alex-s-ka@mail.ru \r\n"))
 {     echo "Подписка успешно оформлена";
} else {
    echo "При подписке на рассылку возникли ошибки";
}
?>