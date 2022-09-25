<?php

include('conectar.php');

global $conecta;


$SensorT1 = $_POST['SensorT1'];
$SensorT2 = $_POST['SensorT2'];
$SensorT3 = $_POST['SensorT3'];
$SensorT4 = $_POST['SensorT4'];
$SensorT5 = $_POST['SensorT5'];
$SensorT6 = $_POST['SensorT6'];
$SensorT7 = $_POST['SensorT7'];

$SensorT8 = $_POST['SensorT8'];
$SensorT9 = $_POST['SensorT9'];
$SensorT10 = $_POST['SensorT10'];


mysqli_query($conecta,"INSERT INTO `datos`(`id`, `fecha`, `SensorT1`, `SensorT2`, `SensorT3`, `SensorT4`, `SensorT5`, `SensorT6`, `SensorT7`, `SensorT8`, `SensorT9`, `SensorT10`) VALUES (NULL,current_timestamp(),'$SensorT1','$SensorT2','$SensorT3','$SensorT4','$SensorT5', '$SensorT6', '$SensorT7', '$SensorT8', '$SensorT9', '$SensorT10');");

mysqli_query($conecta,"UPDATE `tanque1` SET `SensorT1`='$SensorT1' WHERE 1");
mysqli_query($conecta,"UPDATE `tanque2` SET `SensorT2`='$SensorT2' WHERE 1");
mysqli_query($conecta,"UPDATE `tanque3` SET `SensorT3`='$SensorT3' WHERE 1");
mysqli_query($conecta,"UPDATE `tanque4` SET `SensorT4`='$SensorT4' WHERE 1");
mysqli_query($conecta,"UPDATE `tanque5` SET `SensorT5`='$SensorT5' WHERE 1");
mysqli_query($conecta,"UPDATE `tanque6` SET `SensorT6`='$SensorT6' WHERE 1");
mysqli_query($conecta,"UPDATE `tanque7` SET `SensorT7`='$SensorT7' WHERE 1");
mysqli_query($conecta,"UPDATE `tanque8` SET `SensorT8`='$SensorT8' WHERE 1");
mysqli_query($conecta,"UPDATE `tanque9` SET `SensorT9`='$SensorT9' WHERE 1");
mysqli_query($conecta,"UPDATE `tanque10` SET `SensorT10`='$SensorT10' WHERE 1");

$tanque1 = mysqli_query($conecta,"SELECT * FROM `tanque1`");
$tanque2 = mysqli_query($conecta,"SELECT * FROM `tanque2`");
$tanque3 = mysqli_query($conecta,"SELECT * FROM `tanque3`");
$tanque4 = mysqli_query($conecta,"SELECT * FROM `tanque4`");
$tanque5 = mysqli_query($conecta,"SELECT * FROM `tanque5`");
$tanque6 = mysqli_query($conecta,"SELECT * FROM `tanque6`");
$tanque7 = mysqli_query($conecta,"SELECT * FROM `tanque7`");
$tanque8 = mysqli_query($conecta,"SELECT * FROM `tanque8`");
$tanque9 = mysqli_query($conecta,"SELECT * FROM `tanque9`");
$tanque10 = mysqli_query($conecta,"SELECT * FROM `tanque10`");

////////////////////////////////////////////////////////////////////////////////////////
while($row = mysqli_fetch_array($tanque1)){
    $serie1 = $row['serie'];
    $min1 = $row['minimo'];
    $sensor1 = $row['SensorT1'];
    $max1 = $row['maximo'];
    $alarma1 = $row['Alarma'];
}


if($max1 <= $sensor1 && $alarma1){

    include('AlarmaT1/mail_T1_max.php');
    include('AlarmaT1/telegram_T1_max.php');
    mysqli_query($conecta,"UPDATE `tanque1` SET `Alarma`='0' WHERE 1");

    echo "Se activo alarma max Tanque1";

    
}else if($min1 >= $sensor1 && $alarma1){

    include('AlarmaT1/mail_T1_min.php');
    include('AlarmaT1/telegram_T1_min.php');
    echo "Se activo alarma min Tanque1";
    mysqli_query($conecta,"UPDATE `tanque1` SET `Alarma`='0' WHERE 1");
 
}

usleep(500);
////////////////////////////////////////////////////////////////////////////////////////
while($row1 = mysqli_fetch_array($tanque2)){
    $serie2 = $row1['serie'];
    $min2 = $row1['minimo'];
    $sensor2 = $row1['SensorT2'];
    $max2 = $row1['maximo'];
    $alarma2 = $row1['Alarma'];
}


if($max2 <= $sensor2 && $alarma2){

    include('AlarmaT2/mail_T2_max.php');
    include('AlarmaT2/telegram_T2_max.php');
    mysqli_query($conecta,"UPDATE `tanque2` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma max Tanque2";

    
}else if($min2 >= $sensor2 && $alarma2){

    include('AlarmaT2/mail_T2_min.php');
    include('AlarmaT2/telegram_T2_min.php');
    mysqli_query($conecta,"UPDATE `tanque2` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma min Tanque2";
    
}

usleep(500);
////////////////////////////////////////////////////////////////////////////////////////
while($row2 = mysqli_fetch_array($tanque3)){
    $serie3 = $row2['serie'];
    $min3 = $row2['minimo'];
    $sensor3 = $row2['SensorT3'];
    $max3 = $row2['maximo'];
    $alarma3 = $row2['Alarma'];
}


if($max3 <= $sensor3 && $alarma3){

    include('AlarmaT3/mail_T3_max.php');
    include('AlarmaT3/telegram_T3_max.php');
    mysqli_query($conecta,"UPDATE `tanque3` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma max Tanque3";
    
}else if($min3 >= $sensor3 && $alarma3){

    include('AlarmaT3/mail_T3_min.php');
    include('AlarmaT3/telegram_T3_min.php');
    mysqli_query($conecta,"UPDATE `tanque3` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma min Tanque3";
    
}

usleep(500);
////////////////////////////////////////////////////////////////////////////////////////
while($row4 = mysqli_fetch_array($tanque4)){
    $serie4 = $row4['serie'];
    $min4 = $row4['minimo'];
    $sensor4 = $row4['SensorT4'];
    $max4 = $row4['maximo'];
    $alarma4 = $row4['Alarma'];
}


if($max4 <= $sensor4 && $alarma4){

    include('AlarmaT4/mail_T4_max.php');
    include('AlarmaT4/telegram_T4_max.php');
    mysqli_query($conecta,"UPDATE `tanque4` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma max Tanque4";
    
}else if($min4 >= $sensor4 && $alarma4){

    include('AlarmaT4/mail_T4_min.php');
    include('AlarmaT4/telegram_T4_min.php');
    mysqli_query($conecta,"UPDATE `tanque4` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma min Tanque4";
    
}

usleep(500);
////////////////////////////////////////////////////////////////////////////////////////
while($row5 = mysqli_fetch_array($tanque5)){
    $serie5 = $row5['serie'];
    $min5 = $row5['minimo'];
    $sensor5 = $row5['SensorT5'];
    $max5 = $row5['maximo'];
    $alarma5 = $row5['Alarma'];
}


if($max5 <= $sensor5 && $alarma5){

    include('AlarmaT5/mail_T5_max.php');
    include('AlarmaT5/telegram_T5_max.php');
    mysqli_query($conecta,"UPDATE `tanque5` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma max Tanque5";
    
}else if($min5 >= $sensor5 && $alarma5){

    include('AlarmaT5/mail_T5_min.php');
    include('AlarmaT5/telegram_T5_min.php');
    mysqli_query($conecta,"UPDATE `tanque5` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma min Tanque5";
    
}

usleep(500);
////////////////////////////////////////////////////////////////////////////////////////
while($row6 = mysqli_fetch_array($tanque6)){
    $serie6 = $row6['serie'];
    $min6 = $row6['minimo'];
    $sensor6 = $row6['SensorT6'];
    $max6 = $row6['maximo'];
    $alarma6 = $row6['Alarma'];
}


if($max6 <= $sensor6 && $alarma6){

    include('AlarmaT6/mail_T6_max.php');
    include('AlarmaT6/telegram_T6_max.php');
    mysqli_query($conecta,"UPDATE `tanque6` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma max Tanque6";
    
}else if($min6 >= $sensor6 && $alarma6){

    include('AlarmaT6/mail_T6_min.php');
    include('AlarmaT6/telegram_T6_min.php');
    mysqli_query($conecta,"UPDATE `tanque6` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma min Tanque6";
    
}

usleep(500);
////////////////////////////////////////////////////////////////////////////////////////
while($row7 = mysqli_fetch_array($tanque7)){
    $serie7 = $row7['serie'];
    $min7 = $row7['minimo'];
    $sensor7 = $row7['SensorT7'];
    $max7 = $row7['maximo'];
    $alarma7 = $row7['Alarma'];
}


if($max7 <= $sensor7 && $alarma7){

    include('AlarmaT7/mail_T7_max.php');
    include('AlarmaT7/telegram_T7_max.php');
    mysqli_query($conecta,"UPDATE `tanque7` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma max Tanque7";
    
}else if($min7 >= $sensor7 && $alarma7){

    include('AlarmaT7/mail_T7_min.php');
    include('AlarmaT7/telegram_T7_min.php');
    mysqli_query($conecta,"UPDATE `tanque7` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma min Tanque7";
    
}

usleep(500);
////////////////////////////////////////////////////////////////////////////////////////
while($row8 = mysqli_fetch_array($tanque8)){
    $serie8 = $row8['serie'];
    $min8 = $row8['minimo'];
    $sensor8 = $row8['SensorT8'];
    $max8 = $row8['maximo'];
    $alarma8 = $row8['Alarma'];
}


if($max8 <= $sensor8 && $alarma8){

    include('AlarmaT8/mail_T8_max.php');
    include('AlarmaT8/telegram_T8_max.php');
    mysqli_query($conecta,"UPDATE `tanque8` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma max Tanque8";
    
}else if($min8 >= $sensor8 && $alarma8){

    include('AlarmaT8/mail_T8_min.php');
    include('AlarmaT8/telegram_T8_min.php');
    mysqli_query($conecta,"UPDATE `tanque8` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma min Tanque8";
    
}

usleep(500);
////////////////////////////////////////////////////////////////////////////////////////
while($row9 = mysqli_fetch_array($tanque9)){
    $serie9 = $row9['serie'];
    $min9 = $row9['minimo'];
    $sensor9 = $row9['SensorT9'];
    $max9 = $row9['maximo'];
    $alarma9 = $row9['Alarma'];
}


if($max9 <= $sensor9 && $alarma9){

    include('AlarmaT9/mail_T9_max.php');
    include('AlarmaT9/telegram_T9_max.php');
    mysqli_query($conecta,"UPDATE `tanque9` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma max Tanque9";
    
}else if($min9 >= $sensor9 && $alarma9){

    include('AlarmaT9/mail_T9_min.php');
    include('AlarmaT9/telegram_T9_min.php');
    mysqli_query($conecta,"UPDATE `tanque9` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma min Tanque9";
    
}

usleep(500);
////////////////////////////////////////////////////////////////////////////////////////
while($row10 = mysqli_fetch_array($tanque10)){
    $serie10 = $row10['serie'];
    $min10 = $row10['minimo'];
    $sensor10 = $row10['SensorT10'];
    $max10 = $row10['maximo'];
    $alarma10 = $row10['Alarma'];
}


if($max10 <= $sensor10 && $alarma10){

    include('AlarmaT10/mail_T10_max.php');
    include('AlarmaT10/telegram_T10_max.php');
    mysqli_query($conecta,"UPDATE `tanque10` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma max Tanque10";
    
}else if($min10 >= $sensor10 && $alarma10){

    include('AlarmaT10/mail_T10_min.php');
    include('AlarmaT10/telegram_T10_min.php');
    mysqli_query($conecta,"UPDATE `tanque10` SET `Alarma`='0' WHERE 1");
    echo "Se activo alarma min Tanque10";
    
}

usleep(500);


mysqli_close($conecta);

?>