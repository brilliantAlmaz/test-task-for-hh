<?

echo $_POST['name'];
echo $_POST['email'];
echo $_POST['message'];

?>



<?php
$htmlMessage = "<div>
Пользователь
<b>
	" . $_POST['name'] . "
</b> хочет чтобы вы написали ему на почту: " . $_POST["email"] . "
</div>
<div>" . $_POST['message'] . "</div>";




?>

<?php

session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer/src/Exception.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer/src/PHPMailer.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);


$mail->isSMTP();
$mail->Host = 'smtp.yandex.ru';
$mail->SMTPAuth = true;
$mail->Username = 'botmailerbrilliantalmaz';
$mail->Password = 'joxxdvqrgtflrtaa';
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;
$mail->setFrom('botmailerbrilliantalmaz@yandex.ru', 'Рассылка');
$mail->CharSet = "utf-8";
$mail->addAddress('mewlalabla@gmail.com');

$mail->isHTML(true);
$mail->Subject = '=?UTF-8?B?' . base64_encode('Пользователь оставил заявку') . '?=';
$mail->Body = $htmlMessage;

$mail->send();

?>