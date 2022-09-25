<?php
//////////////////////////////////////////////
include('conectar.php');

global $conecta;

$tanque = mysqli_query($conecta,"SELECT * FROM `tanque6`");

while($row = mysqli_fetch_array($tanque)){
    $serie = $row['serie'];
    $min = $row['minimo'];
    $sensor = $row['SensorT6'];
    $max3 = $row['maximo'];
}
/////////////////////////////////////////////
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('America/Argentina/Cordoba');
$t1 = date('l jS \of F Y h:i:s A'); //Fecha actual
$token = "5303523100:AAHDlofVLbSelU5g_hqUqzE6HUozljJFbg0";

$datos = [
    'chat_id' => '-1001737644697',
    #'chat_id' => '@el_canal si va dirigido a un canal',
    'text' => "El día:$t1, la temperatura del sensor S1:$sensor °C del $serie superó el rango máximo establecido Máx:$max °C. Nota: Recuerde volver a activar la alarma!!!",
    'parse_mode' => 'Markdown' #formato del mensaje
];
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot" . $token . "/sendMessage");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_POSTFIELDS, $datos);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$r_array = json_decode(curl_exec($ch), true);

curl_close($ch);
if ($r_array['ok'] == 1) {
    echo "Mensaje enviado.";
} else {
    echo "Mensaje no enviado.";
    print_r($r_array);
}