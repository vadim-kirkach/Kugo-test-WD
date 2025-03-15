<?php
$user_email = htmlspecialchars($_POST['useremail']);

$token = "7663068155:AAEiSXvyK52eoP6bIgwkfoXS3NZZDrq7bhk";
$chat_id = "-4692080401";

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$user_email}", "r");

if ($sendToTelegram) {
  echo "Success";
} else {
  echo "Error";
}

echo "Привет, " . $user_email;
