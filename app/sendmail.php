<?php

$to = 'ssavelevdenchikk@gmail.com';
$from = trim($_POST['email']);
$phone = $_POST['tel'];

$name = $_POST['message'];
$message = "Запрос на консультацию";
$message = urldecode($message);
$message = trim($message);



$headers = "name: $name \n" . "From: $from" . "\r\n" . "phone: $phone";

if(mail($to, $message, $headers )){
    echo 'Письмо отправлено';
} else {
    echo 'Письмо не отправлено';
}
?>