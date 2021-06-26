<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php require 'head.php' ?>
    <!-- CSS -->
    <link rel="stylesheet" href="../../public/css/styles-view-um-produto.css">

    <?php if(!empty($produto)): ?>
    
    <title>Mr. Assis - <?= $produto[0]->nome ?> </title>
</head>
<body>
    <?php require 'navbar.view.php' ?>      
      <nav aria-label="breadcrumb ">
          <ol class="breadcrumb caminho">
              <li class="breadcrumb-item "><a href="/produtos" class="text-white">Produtos</a></li>
              <li class="breadcrumb-item active text-white-50" aria-current="page"> <?= $produto[0]->nome ?> </li>
          </ol>
      </nav>

    <div class="container conteudo pt-3 pb-3">
        <div class="row mb-5 ">
            <div class="col-md-4">
                    <img class="img-produto" src="../../public/img/produtos/<?= $produto[0]->imagem ?>" alt="Foto <?= $produto[0]->nome ?>">
            </div>
            <div class="col-md-8 pl-4 pr-4 ">
                <div class="row mb-4 texto">
                    <h1><?= $produto[0]->nome ?></h1>
                </div>
                <div class="row d-flex justify-content-between texto">
                    <div class="col-sm-6 mb-3 pl-0">
                        <h2>R$ <?= $produto[0]->preco ?></h2>
                    </div>
                    <div class="col-sm-5 mb-3 pl-0 texto">
                        <h2><i class="fas fa-box-open"></i> <?= $produto[0]->quantidade ?></h2>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row produto">
            <div class="col-md-12">
                <div class="accordion" id="accordionExample">
                    <div class="card barras">
                      <div class="card-header barras-header" id="headingOne">
                        <h5 class="mb-0">
                          <button class="btn btn-link " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Descrição
                          </button>
                        </h5>
                      </div>
                
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                          <?= $produto[0]->descricao ?>
                        </div>
                      </div>
                    </div>
                    
                      <div class="card barras">
                        <div class="card-header barras-header" id="headingThree">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Categoria
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="xadrez">
                              <p><?= $produto[0]->categoria ?></p>
                            </div>
                          </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <?php else: ?>
      <title>Mr. Assis - Produto não Encontrado </title>
    </head>
    <body>
      <?php require 'navbar.view.php' ?>
      <div class="container d-flex justify-content-center mt-5 mb-5 produto">
        <p class="mt-auto mb-auto">Nenhum Produto encontrado :(</p>
      </div>
      <?php endif; ?>
      
      <?php require 'footer.php' ?>
    
</body>
</html>