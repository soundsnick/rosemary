<?php
  if($_POST['phone'] && $_POST['phone'] != '' && $_POST['name'] && $_POST['name'] != ''){
    $to  = "<soundsnick@gmail.com>";

    $subject = "Мишки";

    $message = $_POST['phone'].':'.$_POST['name'];

    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Mishki Roze <support@rosemary.kz>\r\n";
    $headers .= "Bcc: support@rosemary.kz\r\n";
    mail($to, $subject, $message, $headers);
    echo 'Спасибо. Мы с вами свяжемся';
  }
  else{
    echo 'Ошибка, форма заполнена неправильно';
  }




 ?>
