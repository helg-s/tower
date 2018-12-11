<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
// преобразует все символы, которые пользователь попытается добавить в форму
$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$message = htmlspecialchars($message);

 // декодирует url, если пользователь попытается его добавить в форму
$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$message = urldecode($message);

 // удалим пробелы с начала и конца строки, если таковые имеются
$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$message = trim($message);
// На случай если какая-то строка письма длиннее 70 символов мы используем wordwrap()
$message = wordwrap($message, 70, "\r\n");


// echo $name;
// echo "<br>";
// echo $email;
// echo "<br>";
// echo $phone;
// echo "<br>";
// echo $message;

mail("helgus@bk.ru", "Заявка с сайта" , "ФИО:". $name . "E-mail: ". $email . "Телефон:" . $phone . "Сообщение: " . $message);

if (mail("helgus@bk.ru", "Заявка с сайта", "ФИО:". $name . "E-mail: ". $email . "Телефон:" . $phone . "Сообщение: " . $message))
 {     echo "Cообщение успешно отправлено"; 
} 
else { 
    echo "При отправке сообщения возникли ошибки";
}
?>
