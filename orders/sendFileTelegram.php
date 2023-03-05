<?php
function orderSendTelegram() {

$token = "5846743462:AAF6YX48hdJnD7xJfA-65E2RqW5z6B-0d1o";

$arrayQuery = array(
    'chat_id' => 1037461400,
    'caption' => 'Ваш заказ на дверь',
    'document' => curl_file_create(__DIR__ . '/file.pdf', 'file.pdf', 'test.pdf')
);		

$ch = curl_init('https://api.telegram.org/bot'. $token .'/sendDocument');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $arrayQuery);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);
print_r(curl_file_create(__DIR__ . '/test.pdf', 'test.pdf', 'test.pdf'));
$res = curl_exec($ch);
curl_close($ch);
}
?>



