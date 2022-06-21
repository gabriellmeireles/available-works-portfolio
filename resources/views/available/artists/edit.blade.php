{{--
|---------------------------------------------------------------------------
|  EDIT MODAL
|---------------------------------------------------------------------------
--}}
<div class="modal fade" id="artistEdit" tabindex="-1" aria-labelledby="artistEdit" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Editar | Artista</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editForm" action="" method="POST" enctype="multipart/form-data" class="mb-15" data-aos="fade-down" data-aos-delay="150">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="file" name="photo"  class="form-control">
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" name="full_name" class="form-control" id="full_name" value="{{ $artist->full_name}}" placeholder="Nome Completo" required="required">
                        <label for="full_name">Nome Completo</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="artistic_name" class="form-control" id="artistic_name" value="{{ $artist->artistic_name}}" placeholder="Nome Artistico" required="required">
                        <label for="artistic_name">Nome Artistico</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ $artist->email}}" required="required">
                        <label for="email">Email</label>
                    </div>

                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Sobre o Artista" name="about" id="about" value="{{ $artist->about}}" style="height: 8em" maxlength="" ></textarea>
                        <label for="email">Sobre o Artista</label>
                    </div>

                    <div class="form-floating">
                        <select class="form-select" name="status" id="status" aria-label="Status do Artista" required="required">
                            <option value="" disabled selected>Escolher</option>
                            <option value="1" {{ $artist->status == 1 ? 'selected' : '' }}>Ativo</option>
                            <option value="0" {{ $artist->status == 0 ? 'selected' : '' }}>Inativo</option>
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