<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Mr. Assis - Administrativo </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
 <body>
    
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow position-static">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">
            <img src="img/Mr. Assis.png" alt="Logo Mr. Assis" class="img-fluid ">
        </a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar position-static">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Produtos
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Usuários
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Categorias
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Usuários</h1>
          </div>

          <h2>Listagem Usuários</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Número</th>
                  <th class = "tabela-usuario">Nome</th>
                  <th>Visualizar </th>
                  <th>Editar</th>
                  <th>Deletar</th>
                </tr>
              </thead>
            <tbody>
              <?php foreach ($usuarios as $usuario) : ?>
                
                <?php require 'modaldelete.php' ?>
                <?php require 'modaledit.php' ?>
                <?php require 'modaldadosusuario.php' ?>

                <tr>
                    <td><?= $usuario->id ?></td>
                    <td class="tabela-usuario"><?= $usuario->nome ?></td>
                    <td><input type="image"  data-toggle="modal" data-target=".bd-example-modal-lg" <?= $usuario->id ?> src="https://img.icons8.com/material-outlined/24/000000/data-configuration.png"></input></td>
                    <td><input type="image"  data-toggle="modal" data-target="#modaledit <?= $usuario->id ?>" src="https://img.icons8.com/windows/32/000000/file-configuration.png"></input></td>
                    <td><input type="image" data-toggle="modal" data-target=".modal-delete" <?= $usuario->id ?> src="https://img.icons8.com/offices/30/000000/delete-sign.png"></input> </td>
                </tr>
               <?php endforeach; ?>
              </tbody>
            </table>
          </div>

          <h2>Criar Usuário</h2>
          <form action="usuarios/create" method="POST">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="tex" name="email" class="form-control" id="inputEmail4" placeholder="e-mail" required>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Senha</label>
                <input type="password" name="senha" class="form-control" id="inputPassword4" placeholder="Senha" required>
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Nome</label>
              <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Nome Completo" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Foto</label>
              <form>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Adicione a foto do usuário</label>
                  <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1">
                </div>
              </form>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
