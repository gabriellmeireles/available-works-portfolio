{{--
|---------------------------------------------------------------------------
|  CREATE MODAL
|---------------------------------------------------------------------------
--}}
<div class="modal fade" id="categoryCreate" tabindex="-1" aria-labelledby="categoryCreate" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Adicionar | Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data" class="mb-15" data-aos="fade-down" data-aos-delay="150">
                @csrf
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Nome da Categoria">
                        <label for="floatingInput">Nome da Categoria</label>
                    </div>

                    <div class="mb-3">
                        <input type="file" name="image"  class="form-control" required="required">
                    </div>

                    <div class="form-floating">
                        <select class="form-select" name="status" id="floatingSelect" aria-label="Status da Categoria">
                            <option value="" disabled selected>Escolher</option>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                        <label for="floatingSelect">Status</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <div class="col-sm-6"><button type="submit" class="btn btn-action-1 w-100">Cadastrar</button></div>
                </div>
            </form>
        </div>
    </div>
</div>