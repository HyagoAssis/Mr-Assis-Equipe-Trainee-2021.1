<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="dadosusuario<?= $usuario->id ?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class = "container">
              <h1>Dados do Usuário</h1>
          <form>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $usuario->nome ?>" >
                </div>
              </div>
              <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $usuario->email ?>" >
                </div>
              </div>
              <div class="form-group row" >
                <label for="staticEmail" class="col-sm-2 col-form-label">Senha</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $usuario->senha ?>">
                </div>
              </div>
              <div class="form-group row" src="../../public/img/<?= $usuario->foto ?>" alt="Foto" value="<?= $usuario->foto ?>">
                <label for="staticEmail" class="col-sm-2 col-form-label">Foto</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?= $usuario->foto ?>">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
              </div>
          </form>
        </div>
    </div>
  </div>
</div> 

    
