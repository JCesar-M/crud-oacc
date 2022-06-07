<?php

include('db.php');


if (isset($_POST['title'])) {
    echo "Guardando";
  $title = $_POST['title'];
  $description = $_POST['description'];

  $query = "INSERT INTO films(title, description) VALUES ('$title', '$description')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

<<<<<<< HEAD
  $_SESSION['message'] = 'Películas guardadas con éxito!!';
  $_SESSION['message_type'] = 'success';
=======
  $_SESSION['message'] = 'La pelicula se guardo Satisfactoriamente !!!';
  $_SESSION['message_type'] = 'excelente';
>>>>>>> b142a4b36907ad6026dd508bb21b0fd753642e07
  header('Location: index.php');

}else{
  echo "Rechazado";
}

?>