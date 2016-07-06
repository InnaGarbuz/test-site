<?php

$to = "inna.garbuz.1996@mail.ru";
$tema = "Тестовое задание";
$message = Имя пользователя$_POST['name'];
$message = Телефон $_POST['telephone'];

mail($to, $tema, $message);
?>