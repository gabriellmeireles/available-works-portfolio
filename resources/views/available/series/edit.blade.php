{{--
|---------------------------------------------------------------------------
|  EDIT MODAL
|---------------------------------------------------------------------------
--}}
<div class="modal fade" id="serieEdit" tabindex="-1" aria-labelledby="serieEdit" aria-hidden="true">
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
                        <select class="form-select" name="artist_id" id="artist_id" aria-label="Artista" readonly>
                            <option value="{{ $serie->artist_id }}" selected>{{ $serie->artist->artistic_name }}</option>
                        </select>
                        <label for="artist_id">Artista</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" name="category_id" id="category_id" aria-label="Categoria" required="required">
                            <option value="" disabled selected>Escolher</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{$category->id == $serie->category_id ? 'selected' : ''}}>{{ $category->name }}</option> 
                                @endforeach
                        </select>
                        <label for="category_id">Categoria</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="name" class="form-control" id="name" value="{{ $serie->name }}" placeholder="Nome da Série" required="required">
                        <label for="name">Nome da Série</label>
                    </div>

                    <div class="form-floating">
                        <select class="form-select" name="status" id="status" aria-label="Status da Categoria" required="required">
                            <option value="" disabled selected>Escolher</option>
                            <option value="1" {{ $serie->status == 1 ? 'selected' : '' }}>Ativo</option>
                            <option value="0" {{ $serie->status == 0 ? 'selected' : '' }}>Inativo</option>
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