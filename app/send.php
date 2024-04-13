<?php

$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];


$name = htmlspecialchars($name);
$email = htmlspecialchars($name);
$tel = htmlspecialchars($name);

$name =urldecode($name);
$email = urldecode($name);
$tel = urldecode($name);

$name = trim($name);
$email = trim($name);
$tel = trim($name);


    if(mail('ssavelevdenchikk@gmail.com',
    'Запрос на консультацию',
    "Имя: ".$name."\n".
    "Почта: ".$email."\n".
    "Телефон: ".$tel."\n",
    "From: pisya.ru \r\n")
    ) {
        echo('Письмо успешно отправлено');
    }
    else {
        echo('Есть ошибки проверьте данные');
    }
?>