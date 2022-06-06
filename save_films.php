<?php

include('db.php');


if (isset($_POST['save_films'])) {
    echo "Guardando";



  $title = $_POST['title'];
  $description = $_POST['description'];



  $query = "INSERT INTO films(title, description) VALUES ('$title', '$description')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Films Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}else{

  echo "Rechazado";
}

?>