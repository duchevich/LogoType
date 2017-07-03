<?php


if($_POST){
	$msg_box = ""; 
    $errors = array();
	
	if($_POST['name'] == "")    $errors[] = "Поле 'Ваше имя' не заполнено!";
    if($_POST['phone'] == "") $errors[] = "Поле 'Текст сообщения' не заполнено!";
    if($_POST['email'] == "")   $errors[] = "Поле 'Ваш e-mail' не заполнено!";
	
	$name =  substr(trim(urldecode(htmlspecialchars($_POST['name']))), 0, 50);
	$phone = substr(trim(urldecode(htmlspecialchars($_POST['phone']))), 0, 30);
	$email = substr(trim(urldecode(htmlspecialchars($_POST['email']))), 0, 50);				   
	
	mail("info@lexonblitz.ru", "Заявка с сайта LogoType", "Имя: ".$name.". E-mail: ".$email ,"From: example2@mail.ru \r\n");
	 
	
	
	
	
}
/*ini_set('display_errors',1);
error_reporting(E_ALL);
	$msg_box = ""; // в этой переменной будем хранить сообщения формы
    $errors = array(); // контейнер для ошибок

    // проверяем корректность полей
    if($_POST['name'] == "")    $errors[] = "Поле 'Ваше имя' не заполнено!";
    if($_POST['phone'] == "") $errors[] = "Поле 'Текст сообщения' не заполнено!";
    if($_POST['email'] == "")   $errors[] = "Поле 'Ваш e-mail' не заполнено!";
    
 	$name = trim(urldecode(htmlspecialchars($_POST['name']))); 
 	$phone = trim(urldecode(htmlspecialchars($_POST['phone'])));
 	$email = trim(urldecode(htmlspecialchars($_POST['email'])));

 	echo $name . '<br>';
 	echo $phone . '<br>';
 	echo $email . '<br>';

    // если форма без ошибок
    if(empty($errors)){     
        // собираем данные из формы
        $message  = "Имя пользователя: " . $name . "<br/>";

        $message .= "E-mail пользователя: " . $email . "<br/>";
        $message .= "Текст письма: " . $phone;      
        send_mail($message); // отправим письмо
        // выведем сообщение об успехе
        $msg_box = "<span style='color: green;'>Сообщение успешно отправлено!</span>";
    }else{
        // если были ошибки, то выводим их
        $msg_box = "";
        foreach($errors as $one_error){
            $msg_box .= "<span style='color: red;'>$one_error</span><br/>";
        }
    }
 
    // делаем ответ на клиентскую часть в формате JSON
    echo json_encode(array('result' => $msg_box));
     
     
    // функция отправки письма
    function send_mail($message){
        // почта, на которую придет письмо
        $mail_to = "my@mail.ru"; 
        // тема письма
        $subject = "Письмо с обратной связи";
         
        // заголовок письма
        $headers= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
        $headers .= "From: Тестовое письмо <no-reply@test.com>\r\n"; // от кого письмо
         
        // отправляем письмо 
        mail($mail_to, $subject, $message, $headers);
    }

*/










?>