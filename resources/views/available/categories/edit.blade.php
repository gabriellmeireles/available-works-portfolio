{{--
|---------------------------------------------------------------------------
|  EDIT MODAL
|---------------------------------------------------------------------------
--}}
<div class="modal fade" id="categoryEdit" tabindex="-1" aria-labelledby="categoryEdit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar | Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" action="" method="POST" enctype="multipart/form-data" class="mb-15" data-aos="fade-down" data-aos-delay="150">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}" placeholder="Nome da Categoria" required="required">
                        <label for="name">Nome da Categoria</label>
                    </div>

                    <div class="mb-3">
                        <input type="file" name="image" id="image" value="" class="form-control">
                    </div>

                    <div class="form-floating">
                        <select class="form-select" name="status" id="status" aria-label="Status da Categoria" required="required">
                            <option value="" disabled selected>Escolher</option>
                            <option value="1" {{ $category->status == 1 ? 'selected' : '' }}>Ativo</option>
                            <option value="0" {{ $category->status == 0 ? 'selected' : '' }}>Inativo</option>
                        </select>
                        <label for="status">Status</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <div class="col-sm-6"><button type="submit" class="btn btn-success w-100">Editar</button></div>
                </div>
            </form>
        </div>
    </div>
</div>