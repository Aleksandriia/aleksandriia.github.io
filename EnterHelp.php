<?php
/* Отображение ошибок */
ini_set('display_errors','On');

$fio = $_POST['fio'];
$email = $_POST['email'];
$textproblem = $_POST['textproblem'];

/* Функция преобразует все символы */
$fio = htmlspecialchars($fio);
$email = htmlspecialchars($email);
$textproblem = htmlspecialchars($textproblem);

/* Функция декодирует url */
$fio = urldecode($fio);
$email = urldecode($email);
$textproblem = urldecode($textproblem);

/* Функция удаления пробелов с начала и конца строки, если таковые имеются */

$fio = trim($fio);
$email = trim($email);
$textproblem = trim($textproblem);


/* Проверка работоспособности */
echo "Имя: ";
echo $fio;
echo "<br>";
echo "Почта: ";
echo $email;
echo "<br>";
echo "Сообщение: ";
echo $textproblem;
echo "<br>";

/* Отправка данных на почтовый сервис */
if (mail("alex-021505@mail.ru", "Помогите!", "Сообщение о проблеме на сайте любителей садоводства". " ФИО: ".$fio.". E-mail: ".$email." Текст проблемы: ".$textproblem,"From: alex-s-ka@mail.ru \r\n"))
 {     echo "Сообщение успешно отправлено";
} else {
    echo "При отправке сообщения возникли ошибки";
}
?>