<?
if (array_key_exists('mobFF', $_POST)) {
   $to = 'brezdina@ukr.net';
   $subject = 'Заказ консультации с сайта afgankazan'/* .$_SERVER['HTTP_REFERER'] */;
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Имя: ".$_POST['nameFF']."\nТелефон: ".$_POST['mobFF']."\n\nIP: ".$_SERVER['REMOTE_ADDR'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date_default_timezone_set('europe/kiev') ."\r\n";
   mail($to, $subject, $message, $headers);
   echo $_POST['nameFF'];
}
?>
