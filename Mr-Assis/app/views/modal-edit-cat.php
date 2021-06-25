<!-- Modal -->
<div class="modal fade" id="edite<?= $categoria->id?>"tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar nome categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/categorias/edit" method="POST">
            <div class="form-group">
              <label for="formGroupExampleInput"></label>
              <input type="text" value="<?=$categoria->nome?>"class="form-control" id="formGroupExampleInput" name="name" >
              <input type="hidden" value="<?=$categoria->id?>" name='id'>
            </div>          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-primary">Salvar mudanças</button>
          </form>
        </div>
      </div>
    </div>
  </div>
