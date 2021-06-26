<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php require 'head.php' ?>
    <!-- CSS -->
    <link rel="stylesheet" href="../../public/css/styles-produtos.css">

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
                    <?php if( array_key_exists('filtro', $_GET) ): ?>
                        <?= $_GET['filtro'] ?>
                    <?php else:?>
                        Categorias
                    <?php endif; ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php if( !empty($categorias) ): ?>
                            <?php foreach ($categorias as $categoria) : ?>
                                <a class="dropdown-item" href="/produtos?filtro=<?= $categoria->nome ?>"><?= $categoria->nome ?></a>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p> Nenhuma categoria foi encontrada </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>


            <!-- Barra de Busca -->
            <div class="col-md-6 d-flex justify-content-center">
                <form class="form-inline my-2 my-lg-0 justify-content-center" action="/produtos" method="GET">
                    <input class="form-control mr-sm-2" type="search" name="busca" <?php if(array_key_exists('busca', $_GET)) echo 'value="' . "{$_GET['busca']}" . '"'; ?> placeholder="Pesquisar" aria-label="Pesquisar">
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
                                            <img class="card-img-top img-produto" src="../../public/img/produtos/<?= $produto->imagem ?>" alt="Imagem <?= $produto->nome ?>">
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
                <div class="container d-flex justify-content-center mt-auto mb-auto">
                    <p>Nenhum Produto encontrado :(</p>
                </div>
                <?php endif; ?>
            </div>




            <!-- Paginação -->
            <nav aria-label="Navegação de página exemplo" class="d-flex justify-content-center">
                <ul class="pagination">
                    <?php if( array_key_exists('pagina', $_GET) && $_GET['pagina'] > 1 ): ?>
                        <li class="page-item">
                            <a class="page-link pag-ancora" href="/produtos?pagina=<?= $_GET['pagina']-1?><?php require 'paginacao-link.php'?>" aria-label="Anterior">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Anterior</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php for($i=0; $i<$num_paginas; $i++): ?>
                        <li class="page-item">
                            <a class="page-link pag-ancora" href="/produtos?pagina=<?= $i+1?><?php require 'paginacao-link.php'?>"><?= $i+1 ?>
                            </a>
                        </li>
                    <?php endfor; ?>
                    <?php if( array_key_exists('pagina', $_GET) && $_GET['pagina'] < $num_paginas ): ?>
                        <li class="page-item">
                            <a class="page-link pag-ancora" href="/produtos?pagina=<?= ($_GET['pagina']+1)?><?php require 'paginacao-link.php'?>" aria-label="Posterior">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Posterior</span>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>


        </div>


        <?php require 'footer.php' ?>


</body>

</html>