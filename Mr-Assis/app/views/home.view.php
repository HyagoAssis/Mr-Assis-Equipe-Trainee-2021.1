<!doctype html>
<html lang="pt-br">

<head>
  <?php require 'head.php' ?>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../../public/css/styles-home.css" media="screen" />
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
          <a href="/produto?id=<?= $produto->id ?>" class="btn btn-primary btn-block btn-rounded">Vizualizar</a>
        </div>
      </div>
      <?php $contador++; ?>
    <?php endforeach; ?>
  </div>
  <!--Slide ultimos produtos adicionados-->

  <!-- footer -->
  <?php require 'footer.php' ?>
</body>

</html>