{{--
|---------------------------------------------------------------------------
|  CREATE MODAL
|---------------------------------------------------------------------------
--}}
<div class="modal fade" id="artistCreate" tabindex="-1" aria-labelledby="artistCreate" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModalLabel">Adicionar | Artista</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('artist.store') }}" method="POST" enctype="multipart/form-data" class="mb-15" data-aos="fade-down" data-aos-delay="150">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <input type="file" name="photo"  class="form-control">
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Nome Completo" required="required">
                        <label for="full_name">Nome Completo</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="artistic_name" class="form-control" id="artistic_name" placeholder="Nome Artistico" required="required">
                        <label for="artistic_name">Nome Artistico</label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
                        <label for="email">Email</label>
                    </div>

                    <div class="form-floating">
                        <select class="form-select" name="status" id="floatingSelect" aria-label="Status da Categoria" required="required">
                            <option value="" disabled selected>Escolher</option>
                            <option value="1">Ativo</option>
                            <option value="0">Inativo</option>
                        </select>
                        <label for="floatingSelect">Status</label>
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