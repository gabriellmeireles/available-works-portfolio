{{--
|---------------------------------------------------------------------------
|  EDIT MODAL
|---------------------------------------------------------------------------
--}}
<div class="modal fade" id="techniqueEdit" tabindex="-1" aria-labelledby="techniqueEdit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar | Técnica</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" action="" method="POST" enctype="multipart/form-data" class="mb-15" data-aos="fade-down" data-aos-delay="150">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="name" value="{{ $technique->name }}" placeholder="Nome da Técnica" required="required">
                        <label for="name">Nome da Técnica</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" name="acronym" class="form-control" id="acronym" value="{{ $technique->acronym }}" placeholder="Acrônimo" required="required">
                        <label for="name">Acrônimo</label>
                    </div>

                    <div class="form-floating">
                        <select class="form-select" name="status" id="status" aria-label="Status da Técnica" required="required">
                            <option value="" disabled selected>Escolher</option>
                            <option value="1" {{ $technique->status == 1 ? 'selected' : '' }}>Ativo</option>
                            <option value="0" {{ $technique->status == 0 ? 'selected' : '' }}>Inativo</option>
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