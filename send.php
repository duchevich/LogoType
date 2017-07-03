<?php

if($_POST){
	$msg_box = "";
	$to = 'info@lexonblitz.ru';
	if($_POST['name'] != "" && $_POST['phone'] != "" && $_POST['email'] != ""){
		$name =  substr(trim(urldecode(htmlspecialchars($_POST['name']))), 0, 50);
		$phone = substr(trim(urldecode(htmlspecialchars($_POST['phone']))), 0, 30);
		$email = substr(trim(urldecode(htmlspecialchars($_POST['email']))), 0, 50);		
		
		$message  = "Имя пользователя: " . $name . "<br/>";
		$message .= "Телефон пользователя: " . $phone . "<br/>";
        $message .= "E-mail пользователя: " . $email . "<br/>";
        send_mail($message);
	}
}
header("Location: index.html");


function send_mail($message){
	$mail_to = "info@lexonblitz.ru"; 
	$subject = "Письмо с формы обратной связи сайта LogoType";
	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
	$headers .= "From: Тестовое письмо <no-reply@test.com>\r\n"; // от кого письмо
	mail($mail_to, $subject, $message, $headers);
}










?>