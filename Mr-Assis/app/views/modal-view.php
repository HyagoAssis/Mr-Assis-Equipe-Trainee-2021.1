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


            <img class="modal-img" src="../../public/img/<?= $produto->imagem ?>" id="foto-view" alt="Foto <?= $produto->nome ?>">
            <div class="row">
              <div class="col-md-12">
                <h2 class="modal-titulo"><?= $produto->nome ?></h2>
              </div>
              <div class="col-md-6">
                <h4>Quantidade</h3>
                <p><?= $produto->quantidade ?></p>
              </div>
              <div class="col-md-6">
                <h4>Categoria</h3>
                <p><?= $produto->categoria ?></p>
              </div>
              <div class="col-md-6">
                <h4>Preço</h3>
                <p>R$: <?= $produto->preco ?></p>
              </div>
              <div class="col-md-12">
                <h4>Descrição</h3>
                <p><?= $produto->descricao ?></p>
              </div>
            </div>


          </div>
        </div>
      </div>