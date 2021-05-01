<?php
if (trim($_POST['mfbPhone']) == '') {
	echo 'false';
}
else {
	$txtname = trim($_POST['mfbName']);
	$txtemail = trim($_POST['mfbMail']);
	$txtphone = trim($_POST['mfbPhone']);

	// от кого
	$fromMail = $txtemail;
	// Сюда введите Ваш email
	$emailTo = 'jaremigor@gmail.com';

	$subject = 'Обратная связь';
	$subject = '=?utf-8?b?' . base64_encode($subject) . '?=';
	$headers = 'From: Пример формы<$fromMail>\n';
	$headers .= 'Content-type: text/plain; charset="utf-8"\r\n';
	$headers .= 'MIME-Version: 1.0\r\n';
	$headers .= 'Date: ' . date('D, d M Y h:i:s O') . '\r\n';
	// тело письма
	$body = 'Получено письмо с сайта ' . $site . ' \n\nИмя: ' . $txtname.'\nТелефон: ' . $txtphone.'\ne-mail: ' . $txtemail;
	$send = mail($emailTo, $subject, $body, $headers);
	if($send == 'true')
	{
		echo 'Message sent';
	}
	else
	{
		echo 'Something went wrong';
	}
}
?>
