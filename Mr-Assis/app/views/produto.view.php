<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="../../public/css/styles-view-um-produto.css">

    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/410c009f17.js" crossorigin="anonymous"></script>

    
    <title>Mr. Assis - <?= $produto[0]->nome ?> </title>
</head>
<body>
          
    <div class="container">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb caminho">
              <li class="breadcrumb-item "><a href="/produtos" class="text-white">Produtos</a></li>
              <li class="breadcrumb-item active text-white-50" aria-current="page"> <?= $produto[0]->nome ?> </li>
          </ol>
      </nav>
    </div>

    <div class="container conteudo pt-3 pb-3">
        <div class="row mb-5 ">
            <div class="col-md-4">
                    <img class="img-produto" src="../../public/img/<?= $produto[0]->imagem ?>" alt="Foto <?= $produto[0]->nome ?>">
            </div>
            <div class="col-md-8 pl-4 pr-4">
                <div class="row mb-4 ">
                    <h1><?= $produto[0]->nome ?></h1>
                </div>
                <div class="row d-flex justify-content-between">
                    <div class="col-sm-6 mb-3 pl-0">
                        <h2>R$ <?= $produto[0]->preco ?></h2>
                    </div>
                    <div class="col-sm-6 mb-3 pl-0">
                        <h2><i class="fas fa-box-open"></i> <?= $produto[0]->quantidade ?></h2>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="row">
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



    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>