<!--Modal:Edit-->

<div class="modal fade bd-example-modal-lg " id="modal-edit<?= $produto->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          
          <div class="modal-content modal-conteudo p-3">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Editar Produto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form action="/admin/editar-produto" method="POST">

                <div class="form-group">
                  <label for="nome-produto-input">Nome Produto</label>
                  <input class="form-control" id="nome-produto-input" name="nome" value="<?= $produto->nome ?>" required>
                </div>

                <div class="form-group">
                    <label for="preco-produto-input">Preço</label>
                    <input class="form-control" id="preco-produto-input" name="preco" value="<?= $produto->preco ?>" required>
                </div>

                <div class="form-group">
                  <label for="categoria-produto-input">Categoria</label>
                  <input type="text" name="categoria" class="form-control" name="categoria" id="categoria-produto-input" value="<?= $produto->categoria ?>" required>
                </div>

                <div class="form-group">
                  <label for="input-quantidade-edit">Quantidade</label>
                  <input type="number" name="quantidade" class="form-control" id="input-quantidade-edit" value="<?= $produto->quantidade ?>" required>
                </div>

                <div class="form-group">
                  <label for="descricao-produto-input">Descrição</label>
                  <textarea class="form-control" id="descricao-produto-input" name="descricao" rows="3" placeholder="<?= $produto->descricao ?>" required></textarea>
                </div>
                
                <div class="form-group">
                  <label for="imagem-produto-input">Adicione uma foto do Produto</label>
                  <input type="file" class="form-control-file" name="imagem" id="imagem-produto-input" required>
                </div>

                <input type="hidden" name="id" value="<?= $produto->id ?>">

              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar mudanças</button>
                
              </div>
            </form>
          </div>
        </div>
    </div>