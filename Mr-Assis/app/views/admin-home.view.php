<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require 'link-navbar-adm.php' ?>
    <link rel="stylesheet" href="../../public/css/stylesadministrativa.css">
    <title> Mr. Assis - Administrativo </title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/410c009f17.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php require 'navbar-adm.php' ?>

    <main class="d-flex align-items-start justify-content-around flex-wrap ">
        

                <div class="card ml-auto mr-auto mb-2 pt-3" style="width: 18rem;">
                <i class="fas fa-users icones-admin"></i>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title align-self-center">Usuários</h5>
                        <div class="align-self-center">
                            <a href="/admin/usuarios" class="btn btn-primary align-self-center">Visitar</a>
                        </div>
                    </div>
                </div>

                <div class="card ml-auto mr-auto mb-2 pt-3" style="width: 18rem;">
                <i class="fas fa-boxes icones-admin"></i>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title align-self-center">Produtos</h5>
                        <div class="align-self-center">
                            <a href="/admin/produtos" class="btn btn-primary align-self-center">Visitar</a>
                        </div>
                    </div>
                </div>

                <div class="card ml-auto mr-auto mb-2 pt-3" style="width: 18rem;">
                <i class="fas fa-filter icones-admin"></i>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title align-self-center">Categorias</h5>
                        <div class="align-self-center">
                            <a href="/admin/categorias" class="btn btn-primary align-self-center">Visitar</a>
                        </div>
                    </div>
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