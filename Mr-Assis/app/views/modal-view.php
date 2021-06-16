<!-- Modal - detalhes  -->
    
<div class="modal fade bd-example-modal-lg " id="modal-detalhes<?= $produto->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          
          <div class="modal-content modal-conteudo p-3">
            
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Visualizar Produto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>


            <img class="modal-img" src="../../public/img/<?= $produto->imagem ?>" alt="Foto <?= $produto->nome ?>">
            <h2 class="modal-titulo"><?= $produto->nome ?></h2>
            <h3>Quantidade</h3>
            <p><?= $produto->quantidade ?></p>
            <h3>Descrição</h3>
            <p><?= $produto->descricao ?></p>
            <h3>Preço</h3>
            <p>R$: <?= $produto->preco ?></p>
            <h3>Categoria</h3>
            <p><?= $produto->categoria ?></p>


          </div>
        </div>
      </div>