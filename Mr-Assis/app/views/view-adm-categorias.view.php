<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../../../favicon.ico">
  <title>Mr. Assis - Administrativo </title>
  <link rel="apple-touch-icon" sizes="180x180" href="img/favicon.ico">
  <?php require 'link-navbar-adm.php'?>
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
  <link rel="manifest" href="img/site.webmanifest">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <!-- Custom styles for this template -->
  <link href="../../public/css/categorias.css" rel="stylesheet">
</head>

<body>
  <?php require 'navbar-adm.php' ?>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="mb-4">
      <h2>Criar Categoria</h2>
      <form action="/categorias/create" method="POST">
        <div class="form-group">
          <label for="inputAddress">Nome Categoria</label>
          <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Nome Categoria" required>
        </div>
        <button type="submit" class="btn btn-primary">Criar</button>
      </form>
    </div>

  

    <h2>Categorias</h2>
    <div class="table-responsive">
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th class="categoriaid">#</th>
            <th class="categorianame">Categoria</th>
            <th class="categoriaeditar">Editar</th>
            <th class="categoriadeletar">Deletar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($categorias as $categoria) : ?>
            <?php require 'modal-delete-cat.php' ?>
            <?php require 'modal-edit-cat.php' ?>
            <tr>
              <td class="id"><?= $categoria->id ?> </td>
              <td class="name"><?= $categoria->name ?> </td>
              <td class="categoriaeditar"><input type="image" data-toggle="modal" data-target="#edite<?= $categoria->id ?>" src="https://img.icons8.com/windows/32/000000/file-configuration.png"></input></td>      
              <td class="categoriadeletar"><input type="image" data-toggle="modal" data-target="#delete<?= $categoria->id ?>" src="https://img.icons8.com/offices/30/000000/delete-sign.png"></input></td>           
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </main>


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  <!-- Icons -->
  <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
  <script>
    feather.replace()
  </script>

</body>

</html>