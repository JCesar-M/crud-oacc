<?php

include("db.php");

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "DELETE FROM films WHERE id = $id";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

<<<<<<< HEAD
  $_SESSION['message'] = 'Películas eliminadas con éxito!!!';
  $_SESSION['message_type'] = 'danger';
=======
  $_SESSION['message'] = 'Pelicula eliminada Exitosamente !!!';
  $_SESSION['message_type'] = 'CUIDADO !!!';
>>>>>>> b142a4b36907ad6026dd508bb21b0fd753642e07
  header('Location: index.php');
}

?>