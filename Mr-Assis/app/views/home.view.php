<!doctype html>
<html lang="pt-br">

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../public/img/icons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../public/img/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../public/img/icons/favicon-16x16.png">
  <link rel="manifest" href="img/icons/site.webmanifest">

  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../../public/css/styles-home.css" media="screen" />

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!-- Fonte -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

  <!-- Font Aws -->
  <script src="https://kit.fontawesome.com/410c009f17.js" crossorigin="anonymous"></script>


  <?php require 'links-navbar.php' ?>

  <title>Home - Mr. Assis</title>
</head>

<body>

  <?php require 'navbar.view.php' ?>

  <!--Slide de Fotos principal-->
  <div id="slideFotos" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#slideFotos" data-slide-to="0" class="active"></li>
      <li data-target="#slideFotos" data-slide-to="1"></li>
      <li data-target="#slideFotos" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="../../public/img/fotoLoja.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../../public/img/fotoLoja2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="../../public/img/fotoLoja3.jpg"
          alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#slideFotos" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slideFotos" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--Slide de Fotos principal-->

  <!--Slide ultimos produtos adicionados-->
  <div class='ofertas'>
    
    <h1> Produtos em destaque </h1>
    <div class='row d-flex justify-content-center flex-wrap Lista'>
      
      <?php $contador = 0; ?>
      <?php foreach($produtos as $produto): ?>
      <?php if( $contador == 4){ break; } ?>
      <div class="card m-4" style="width: 15rem;">
        <div class="zoom">
          <a href="/produto?id=<?= $produto->id ?>"><img class="card-img-top" src="../../public/img/produtos/<?= $produto->imagem ?>"
              alt="Imagem <?= $produto->nome ?>"></a>
        </div>
        <div class="card-body ">
          <h5 class="card-title"><?= $produto->nome ?></h5>
          <div class="row ">
            <div class="col-md-8">
              Preço: <?= $produto->preco ?>
            </div>
            <div class="col-md-4">
              <i class="fas fa-box-open"></i> <?= $produto->quantidade ?>
            </div>
          </div>
        </div>

        <div class="card-footer">
          <a href="/produtos?id<?= $produto->id ?>" class="btn btn-primary btn-block btn-rounded">Vizualizar</a>
        </div>
      </div>
      <?php $contador++; ?>
    <?php endforeach; ?>
  </div>
  <!--Slide ultimos produtos adicionados-->

  <!-- footer -->
  <?php require 'footer.php' ?>

  <!-- Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <!-- Ion Icons -->
  <script src="https://unpkg.com/ionicons@5.5.1/dist/ionicons.js"></script>
</body>

</html>