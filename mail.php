<?php
$to = "mikkyhost@gmail.com"; // адрес куда отправлять письмо
$subject = "Отправка формы с сайта такого-то"; // заголовок письма
$redirect = "https://wcms.space"; // адрес страницы, на которую нужно перейти после отправки письма

foreach($_POST as $key => $value)
{ $fields .= $key.": ".$value." \r\n"; }
$message = $subject." \r\n".$fields;
$headers  = "Content-type:  text/plain; charset=utf-8 \r\n";
mail($to, $subject, $message, $headers);
header('Location: '.$redirect);
?>
