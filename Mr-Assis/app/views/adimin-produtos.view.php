<?php require 'navbar-adm.php' ?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Produtos</h1>
          </div>

          <h2>Lista Produtos</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Código</th>
                  <th class="tabela-nome-produto">Nome</th>
                  <th>Visualizar </th>
                  <th>Editar </th>
                  <th>Deletar </th>
                  
                </tr>
              </thead>
              <tbody>
              <?php if( !empty($produtos) ): ?>

                <?php foreach ($produtos as $produto) :?>

                  <!-- modal delete -->
                  <?php require 'modal-delete.php' ?>

                  <!-- modal vizualizar -->
                  <?php require 'modal-view.php' ?>

                  <!-- modal edit -->
                  <?php require 'modal-edit.php' ?>


                <tr>
                    <td><?= $produto->id ?></td>
                    <td class="tabela-nome-produto"><?= $produto->nome ?></td>
                    <td><input type="image"  data-toggle="modal" data-target="#modal-detalhes<?= $produto->id ?>" src="https://img.icons8.com/material-outlined/24/000000/data-configuration.png"></td>
                     <td><input type="image"  data-toggle="modal" data-target="#modal-edit<?= $produto->id ?>" src="https://img.icons8.com/windows/32/000000/file-configuration.png"></input></td>
                    <td><input type = "image" data-toggle="modal" data-target="#delete<?=$produto->id ?>" src="https://img.icons8.com/offices/30/000000/delete-sign.png"></input></td>
                </tr>
                <?php endforeach; ?>



              </tbody>
            </table>
                <?php else: ?>
                  <div class="container d-flex justify-content-center mt-5 mb-5">
                      <p>Nenhum Produto encontrado :(</p>
                  </div>
                <?php endif; ?>
          </div>

          <h2>Criar Produto</h2>
          <form action="/admin/criar-produto" method="POST" >
            <div class="form-group">
              <label for="inputAddress">Nome</label>
              <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Nome Produto" required>
            </div>
            <div class="row">
              <div class="form-group col-md-4">
                <label for="exampleFormControlInput2">Preço</label>
                <input type="text" name="preco" class="form-control" id="exampleFormControlInput2" placeholder="00.00" required>
              </div>
              <div class="form-group col-md-4">
                <label for="exampleFormControlInput3">Categoria</label>
                <input type="text" name="categoria" class="form-control" id="exampleFormControlInput3" placeholder="Nome Categoria" required>
              </div>
              <div class="form-group col-md-4">
                <label for="input-quantidade">Quantidade</label>
                <input type="number" name="quantidade" class="form-control" id="input-quantidade" placeholder="Quantidade de produtos" required>
              </div>
            </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Decrição</label>
            <textarea class="form-control" name="descricao" id="exampleFormControlTextarea1" rows="3" required></textarea>
          </div>
            <div class="form-group">
              <label for="exampleFormControlFile1">Foto</label>
              <input type="file" name="imagem"class="form-control-file" id="exampleFormControlFile1" required>
            </div>
            <button type="submit" class="btn btn-primary">Criar</button>
          </form>


        </main>
      </div>
    </div>

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
