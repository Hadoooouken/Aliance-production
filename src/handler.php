<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

// echo "Привет, <b>" . $user_name . "</b>" . "!<br>Твой номер: <b>" . $user_phone . "</b>";


$token = '8248286660:AAGrJKLM7G01QcNF1z8zInbmooCZkdM4QPI';
$chat_id = '-5184594866';

$formData = array(
    "Клиент: " => $user_name,
    "Телефон: " => $user_phone
);

$text = "";

foreach ($formData as $key => $value) {
    $text .= $key . "<b>" . urlencode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

if ($sendToTelegram) {
    echo "Success";
} else {
    echo "Error";
}
