<!-- Modals delete -->
<div class="modal fade modal-delete" id="delete<?= $usuario->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
          <!--Content-->
          <div class="modal-content text-center">
              <!--Header-->
              <div class="modal-header d-flex justify-content-center">
                  <p class="heading">Tem certeza?</p>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>

              <!--Body-->
              <div class="modal-body">

                  <img src="https://img.icons8.com/offices/30/000000/delete-sign.png">

              </div>

              <!--Footer-->
              <div class="modal-footer flex-center">
                  <form action="/admin/delete" method="POST">
                    <input type="hidden" value="<?= $usuario->id ?>" name="id">
                    <button type="submit" class="btn  btn-outline-danger">Sim</button>
                  </form>
                  <a type="button" class="btn  btn-danger waves-effect" data-dismiss="modal">Não</a>
              </div>
          </div>
          <!--/.Content-->
      </div>
  </div>