<div class="modal fade" id="create_producto" tabindex="-1" aria-labelledby="createProducto" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nueva Categoria</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="inputEmail4">Nombre</label>
            <input type="email" class="form-control" id="nombre">
          </div>
          <div class="form-group">
            <label for="inputPassword4">Descripción</label>
            <textarea class="form-control" id="descripcion" placeholder="Ingresar una descripción del producto"></textarea>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Unidad de medida</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">Categoria</label>
              <select id="inputState" class="form-control">
                <option selected>--- Seleccione ---</option>
                <option>...</option>
              </select>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Registrar</button>
      </div>
    </div>
  </div>
</div>