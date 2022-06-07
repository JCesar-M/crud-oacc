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

  $_SESSION['message'] = 'La pelicula se guardo Satisfactoriamente!!!';
  $_SESSION['message_type'] = 'success';

=======
  $_SESSION['message'] = 'Pelicula Guardada Satisfactoriamente';
  $_SESSION['message_type'] = 'Excelente !!!';
>>>>>>> ErikGalindo
  header('Location: index.php');

}else{
  echo "Rechazado";
}

?>