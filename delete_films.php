<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM films WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Pelicula eliminada Exitosamente !!!';
  $_SESSION['message_type'] = 'CUIDADO !!!';
  header('Location: index.php');
}

?>