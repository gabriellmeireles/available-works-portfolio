{{--
|---------------------------------------------------------------------------
|  EDIT MODAL
|---------------------------------------------------------------------------
--}}
<div class="modal fade" id="workEdit" tabindex="-1" aria-labelledby="workEdit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar | Obra</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" action="" method="POST" enctype="multipart/form-data" data-aos="fade-down" data-aos-delay="150">
                @csrf
                @method('PUT')
                <div class="modal-body">

                    <input type="hidden" name="serie_id" value="{{ $serie->id }}">
                    <input type="hidden" name="artist_id" value="{{ $serie->artist->id }}">
                    
                    <div class="form-check form-switch form-check-reverse mb-4">
                        <input class="form-check-input form-control" style="line-height: 5.5em !important;" name="cover_image" type="checkbox" role="switch" id="cover_image">
                        <label class="form-check-label pt-1" for="cover_image">Imagem de Capa</label>
                    </div>

                    <div class="mb-3">
                        <input type="file" name="image" id="image"  class="form-control form-control-lg">
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Título da Obra" required="required">
                        <label for="title">Título</label>
                    </div>

                    <div class="form-floating mb-3">
                        <select class="form-select" name="technique_id" id="technique_id" aria-label="Técnica" required="required">
                            <option value="" disabled selected>Escolher</option>
                            @foreach ($techniques as $technique)
                                <option value="{{ $technique->id }}">{{ $technique->acronym }}</option>
                            @endforeach
                            
                        </select>
                        <label for="technique_id">Técnica</label>
                    </div>

                                        
                    <div class="row g-3 mb-3">
                        <div class="col-6">
                            <div class="form-floating input-group">
                                <input type="number" name="width" id="width" class="form-control" placeholder="Largura" maxlength="3">
                                <label for="width">Largura</label>
                                <span class="input-group-text">cm</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating input-group">
                                <input type="number" name="height" id="height" class="form-control" placeholder="Altura">
                                <label for="height">Altura</label>
                                <span class="input-group-text">cm</span>
                            </div>
                          </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="number" name="produced" id="produced" class="form-control" placeholder="Ano" maxlength="2">
                                <label for="produced">Qtd Produzida</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="number" name="edition" id="edition" class="form-control" placeholder="Valor" maxlength="2">
                                <label for="edition">Nº Edição</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="number" name="year" id="year" class="form-control" placeholder="Ano" maxlength="4">
                                <label for="year">Ano</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating">
                                <input type="number" name="price" id="price" class="form-control" placeholder="Valor" maxlength="5">
                                <label for="price">Valor</label>
                            </div>
                        </div>
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