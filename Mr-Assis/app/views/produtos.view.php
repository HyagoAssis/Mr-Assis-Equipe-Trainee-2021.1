<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="../../public/css/styles-produtos.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/410c009f17.js" crossorigin="anonymous"></script>
    <?php require 'links-navbar.php' ?>

    <title>Produtos - Mr. Assis</title>
</head>

<body>

    <?php require 'navbar.view.php' ?>

    <div class="container mt-2 ">
        <div class="row ">

            <!-- Filtros -->

            <!-- Dropdown -->
            <div class="col-md-6 d-flex justify-content-center ">
                <div class="dropdown my-2 my-lg-0">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php if( array_key_exists('categoria', $_GET) ): ?>
                        <?= $_GET['categoria'] ?>
                    <?php else:?>
                        Categorias
                    <?php endif; ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php if( !empty($categorias) ): ?>
                            <?php foreach ($categorias as $categoria) : ?>
                                <a class="dropdown-item" href="/produtos/filtro?categoria=<?= $categoria->nome ?>"><?= $categoria->nome ?></a>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p> Nenhuma categoria foi encontrada </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>


            <!-- Barra de Busca -->
            <div class="col-md-6 d-flex justify-content-center">
                <form class="form-inline my-2 my-lg-0 justify-content-center" action="/produtos/busca" method="GET">
                    <input class="form-control mr-sm-2" type="search" name="busca" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0 botao-busca" type="submit" ">Pesquisar</button>
                    </form>
                </div>
            

        </div>
        <div class=" row d-flex justify-content-center produtos">
                
                        <!-- Cards -->
                <?php if( !empty($produtos) ): ?>
                        <?php foreach ($produtos as $produto) : ?>
                            <div class="card m-4" style="width: 18rem;">
                                <form action="/produto" method="GET">
                                    <input type="hidden" value="<?= $produto->id ?>" name="id">
                                    <button class="btn btn-link-produto" type="submit">
                                        <div class="zoom">
                                            <img class="card-img-top img-produto" src="../../public/img/<?= $produto->imagem ?>" alt="Imagem <?= $produto->nome ?>">
                                        </div>
                                    </button>
                                </form>
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
                                    <form action="/produto" method="GET">
                                        <input type="hidden" value="<?= $produto->id ?>" name="id">
                                        <button class="btn btn-primary btn-block btn-rounded" type="submit">Vizualizar</button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                <?php else: ?>
                <div class="container d-flex justify-content-center mt-5 mb-5">
                    <p>Nenhum Produto encontrado :(</p>
                </div>
                <?php endif; ?>
            </div>




            <!-- Paginação -->
            <nav aria-label="Navegação de página exemplo" class="d-flex justify-content-center">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link pag-ancora" href="#" aria-label="Anterior">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Anterior</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link pag-ancora" href="#">1</a></li>
                    <li class="page-item"><a class="page-link pag-ancora" href="#">2</a></li>
                    <li class="page-item"><a class="page-link pag-ancora" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link pag-ancora" href="#" aria-label="Próximo">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </li>
                </ul>
            </nav>


        </div>


        <?php require 'footer.php' ?>


        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>