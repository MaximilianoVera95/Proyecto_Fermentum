<?php

include('conectar.php');

global $conecta;


$serie = $_POST['serie'];
$maximo = $_POST['maximo'];
$minimo = $_POST['minimo'];
$Alarma = $_POST['Alarma'];

mysqli_query($conecta,"UPDATE `tanque1` SET `fecha`=current_timestamp(),`minimo`='$minimo',`maximo`='$maximo',`Alarma`='$Alarma' WHERE `serie`='$serie'");
mysqli_query($conecta,"UPDATE `tanque2` SET `fecha`=current_timestamp(),`minimo`='$minimo',`maximo`='$maximo',`Alarma`='$Alarma' WHERE `serie`='$serie'");
mysqli_query($conecta,"UPDATE `tanque3` SET `fecha`=current_timestamp(),`minimo`='$minimo',`maximo`='$maximo',`Alarma`='$Alarma' WHERE `serie`='$serie'");
mysqli_query($conecta,"UPDATE `tanque4` SET `fecha`=current_timestamp(),`minimo`='$minimo',`maximo`='$maximo',`Alarma`='$Alarma' WHERE `serie`='$serie'");
mysqli_query($conecta,"UPDATE `tanque5` SET `fecha`=current_timestamp(),`minimo`='$minimo',`maximo`='$maximo',`Alarma`='$Alarma' WHERE `serie`='$serie'");
mysqli_query($conecta,"UPDATE `tanque6` SET `fecha`=current_timestamp(),`minimo`='$minimo',`maximo`='$maximo',`Alarma`='$Alarma' WHERE `serie`='$serie'");
mysqli_query($conecta,"UPDATE `tanque7` SET `fecha`=current_timestamp(),`minimo`='$minimo',`maximo`='$maximo',`Alarma`='$Alarma' WHERE `serie`='$serie'");

mysqli_query($conecta,"UPDATE `tanque8` SET `fecha`=current_timestamp(),`minimo`='$minimo',`maximo`='$maximo',`Alarma`='$Alarma' WHERE `serie`='$serie'");
mysqli_query($conecta,"UPDATE `tanque9` SET `fecha`=current_timestamp(),`minimo`='$minimo',`maximo`='$maximo',`Alarma`='$Alarma' WHERE `serie`='$serie'");
mysqli_query($conecta,"UPDATE `tanque10` SET `fecha`=current_timestamp(),`minimo`='$minimo',`maximo`='$maximo',`Alarma`='$Alarma' WHERE `serie`='$serie'");

mysqli_close($conecta);

echo "<script>alert('Se envió los datos ingresados'); window.location='rango.php'</script>";

?>
