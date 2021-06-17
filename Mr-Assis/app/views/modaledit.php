<!-- Modal -->
<div class="modal fade " id="modaledit <?= $usuario->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="/usuarios/edit" method="POST">
            <div class="form-group">
                <div class="form-group">
                <label for="exampleInputPassword1">Nome</label>
                <input type="nome" class="form-control" id="exampleInputPassword1" name="nome" placeholder="<?= $usuario->nome ?>" required>
            </div> 
            <div>
                <label for="exampleInputEmail1">Endereço de email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="<?= $usuario->email ?>" required>
                <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
           </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="<?= $usuario->senha ?>" required>
          </div> 
          
          <div class="form-group">
            <label for="foto-usuario-input">Adicione a foto do usuario</label>
            <input type="file" class="form-control-file" name="imagem" id="fotousuario" required>
          </div>
            
        <input type="hidden" name="id" value="<?= $usuario->id ?>">
      
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            <button type="button" class="btn btn-primary">Salvar mudanças</button>
        </div>
    
    </form>
    </div>
  </div>
</div>