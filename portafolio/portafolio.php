<?php include("cabecera.php"); ?>
<?php include("conexion.php"); ?>
<?php

if ($_POST) {
  //print_r($_POST);
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];

  $fecha = new DateTime();
  $imagen = $fecha->getTimestamp() . "_" . $_FILES['archivo']['name'];

  $imagen_temporal = $_FILES['archivo']['tmp_name'];

  move_uploaded_file($imagen_temporal, "imagenes/" . $imagen);



  $objConexion = new conexion();
  $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL,'$nombre', '$imagen', '$descripcion');";
  $id = $objConexion->ejecutar($sql); //devuelve id pero no lo uso
  header("location:portafolio.php");
}

if ($_GET) {
  $id = $_GET['borrar'];
  $objConexion = new conexion();

  $imagen = $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=" . $id);

  unlink("imagenes/" . $imagen[0]['imagen']);

  $sql = "DELETE FROM `proyectos` WHERE `proyectos`.`id` =" . $id;
  $objConexion->ejecutar($sql);
  # code...
}

$objConexion = new conexion();
$proyectos = $objConexion->consultar("SELECT * FROM `proyectos`");

//print_r($proyectos);
?>



<br />

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          Datos del proyecto
        </div>
        <div class="card-body">
          <form action="portafolio.php" method="post" enctype="multipart/form-data">
            <!-- <enctype archivos -->

            Nombre del proyecto: <input required class="form-control" type="text" name="nombre" id="">
            <br />
            Imagen del proyecto: <input required class="form-control" type="file" name="archivo" id="">
            <br />

            Descripcion:
            <textarea required class="form-control" name="descripcion" id="" rows="3"></textarea>

            <input class="btn btn-success" type="submit" value="Enviar proyecto">

          </form>
        </div>
        <div class="card-footer text-muted">
          Footer
        </div>
      </div>

    </div>
    <div class="col-md-6">
      <div class="table-responsive">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Imagen</th>
              <th scope="col">Descipcion</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($proyectos as $proyecto) {  ?>
              <tr class="">
                <td><?php echo $proyecto['id']; ?> </td>
                <td><?php echo $proyecto['nombre']; ?></td>
                <td><img width="100" src="imagenes/<?php echo $proyecto['imagen'] ?>" alt=""></td>

                <td><?php echo $proyecto['descripcion']; ?></td>
                <td> <a name="" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a> </td>
              </tr>
            <?php }  ?>

          </tbody>
        </table>
      </div>
    </div>

  </div>
</div>





Hola, soy el portafolio
<?php include("pie.php"); ?>