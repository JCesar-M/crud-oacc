<?php
session_start();

$conn = mysqli_connect(
  '3.128.57.57',
  'root',
  'A12345678',
  'oacc_crud',
  3306
) or die(mysqli_error($mysqli));

?>