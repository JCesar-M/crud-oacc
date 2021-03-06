<?php include("db.php"); ?>

<?php include('includes/header.php'); ?>

<link rel="stylesheet" href="/estilos.css">


<main class="container p-4 fondo">
  <div class="row">
    <div class="col-md-4">
      <!-- MESSAGES -->

      <?php if (isset($_SESSION['message'])) { ?>
      <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php session_unset(); } ?>

      <!-- ADD TASK FORM -->

      <div class="card style="width: 18rem; ">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> <a button href="/Recursos/HASH.txt" type="button" class="btn btn-info" download="hash">Hash</button> </a></li>
          <li class="list-group-item"> <a button href="/Recursos/crud-oacc.zip" type="button" class="btn btn-info" download="Descargar">Descargar .zip</button> </a></li>
          <li class="list-group-item"> <a href="https://github.com/JCesar-M/crud-oacc" class="link-warning">ENLACE DEL PROYECTO</a>       </li>
        </ul>
      </div>
      
      <div class="card card-body">
        <form action="save_films.php" method="POST">
          <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Título de la película" autofocus>
          </div>
          <div class="form-group">
            <textarea name="description" rows="2" class="form-control" placeholder="Descripción de la película"></textarea>
          </div>
          <input type="submit" name="save_task" class="btn btn-success btn-block" value="Guardar">
        </form>
      </div>
    </div>
    <div class="col-md-8">
      <table class="table table-bordered tabla">
        <thead>
          <tr>
            <th>Título</th>
            <th>Descripción</th>
            <th>Creación</th>
            <th>Acción</th>
          </tr>
        </thead>
        <tbody>

          <?php
          $query = "SELECT * FROM films";
          $result_tasks = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($result_tasks)) { ?>
          <tr>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                <i class="fas fa-marker"></i>
              </a>
              <a href="delete_films.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                <i class="far fa-trash-alt"></i>
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  

</main>

<?php include('includes/footer.php'); ?>
