<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto Serfinanza</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/home.css">
  <!-- https://icons.getbootstrap.com/ -->
</head>

<body>

  <div class="container mt-3">
    <div class="row justify-content-md-center">
      <div class="col-md-12">
        <p class="text-center"><span>SER</span>FINANZA </p>
        <h2 class="text-center mt-3">CONTACTOS</h2>
        <a href="./"><i class="bi bi-house"></i></a>
        <hr class="mb-3">
      </div>


      <div class="col-md-4 mb-3">
        <h3 class="text-center">Nuevo contacto</h3>
        <form method="POST" action="action.php">
          <input type="text" name="metodo" value="1" hidden>
          <div class="mb-3">
            <label class="form-label">Nombre completo</label>
            <input type="text" class="form-control" name="nombre" required>
          </div>
          <?php
          
          function llenarSelect(){
            $url = 'http://country.io/names.json';
            $json = file_get_contents($url);
            $array = json_decode($json, true);
            $html='';
            foreach ($array as $id => $nombre)
              $html.= "<option value=".$nombre.">".$nombre."</option>";
            return $html;
          }

          ?>
          <div class="mb-3">
            <label for="Sexo">Pais</label>
            <select class="form-select" name="pais" id="pais" required>
            <?php print_r(llenarSelect()); ?>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Celular</label>
            <input type="number" name="celular" maxlength="10" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo" required>
          </div>

          <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" class="btn  btn btn-primary mt-3 mb-2">
              Registrar Contacto
              <i class="bi bi-arrow-right-circle"></i>
            </button>
          </div>

        </form>
      </div>



      <?php
      include('config.php');
      $sql   = ("SELECT * FROM contacto ORDER BY id ASC");
      $query = mysqli_query($con, $sql);
      $total = mysqli_num_rows($query);

      ?>
      <div class="col-md-8">
        <h3 class="text-center">Lista de <?php echo '(' . $total . ')'; ?></h3>
        <div class="row">
          <div class="col-md-12 p-2">
            <div class="table-responsive">
              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Celular</th>
                    <th scope="col">Correo</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $conteo=1;
                  while ($data = mysqli_fetch_array($query)) { ?>
                    <tr>
                      <td><?php echo $conteo++ ?></td>
                      <td><?php echo $data['Nombre']; ?></td>
                      <td><?php echo $data['Pais']; ?></td>
                      <td><?php echo $data['Celular']; ?></td>
                      <td><?php echo $data['Correo']; ?></td>

                    </tr>
                  <?php } ?>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <?php
  include('mensajes.php');
  ?>

  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
    $(function() {
      $('.toast').toast('show');
    });
  </script>

</body>

</html>