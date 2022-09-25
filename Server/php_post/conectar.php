<?php
$conecta = mysqli_connect("localhost","root","");
mysqli_select_db($conecta,"cerveceria");
mysqli_query($conecta,"SET NAMES 'utf8'");
?>