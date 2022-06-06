
<?php
#Archivo de  conexion de la base de datos
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'oacc_crud'
) or die(mysqli_error($mysqli));

?>