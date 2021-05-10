<?
$recepient = 'artemik306space@gmail.com'
$siteName = 'КУШАЛДОС ПТИЧКА'

$name = trin($_POST['name']);
$message = 'Имя: $name ';

$pagetitle = 'Заявка с сайта \"$siteName\"';

mail($recepient, $pagetitle , $message,  "Content-type: text/plain; chairset=\"UTF-8\"\n From: $recepient");
?>
