<?
$email = $_POST['email'];
$name = $_POST['name'];
$subject = "=?utf-8?B?" .base64_encode("Сообщение с сайта")."?=";
$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset= UTF-8\r\n";
$success = mail("artemik306space@gmail.com", $subject, $message, $headers);
echo $success;
?>
