{{--
|---------------------------------------------------------------------------
|  CREATE MODAL
|---------------------------------------------------------------------------
--}}
<div class="modal fade" id="serieCreate" tabindex="-1" aria-labelledby="serieCreate" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Adicionar | Série</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('serie.store') }}" method="POST" enctype="multipart/form-data" class="mb-15" data-aos="fade-down" data-aos-delay="150">
                @csrf
                <div class="modal-body">
                    <input type="hidden" name="artist_id" value="{{ $artist }}">

                    <div class="form-floating mb-3">
                        <select class="form-select" name="category_id" id="category_id" aria-label="Categoria" required="required">
                            <option value="" disabled selected>Escolher</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option> 
                                @endforeach
                        </select>
                        <label for="category_id">Categoria</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nome da Série" required="required">
                        <label for="name">Nome da Série</label>
                    </div>

                    <div class="form-floating">
                        <select class="form-select" name="status" id="status" aria-label="Status da Série" required="required">
                            <option value="" disabled selected>Escolher</option>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                        <label for="status">Status</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <div class="col-sm-6"><button type="submit" class="btn btn-success w-100">Cadastrar</button></div>
                </div>
            </form>
        </div>
    </div>
</div>