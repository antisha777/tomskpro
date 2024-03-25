<?php

$name = $_POST['name'];
$phone = $_POST['phone'];

$token = "6100938726:AAEqC4vv4aa3T8eDNf-C5Vp3CBsSx4fOyUs";
$chat_id = "-1001547500277";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo ('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
} else {
  echo ('Что-то пошло не так. Попробуйте отправить форму ещё раз.');
}
?>