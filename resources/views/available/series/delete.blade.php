{{--
|---------------------------------------------------------------------------
|  DELETE MODAL
|---------------------------------------------------------------------------
--}}
<div class="modal fade" id="serieSoftDelete" tabindex="-1" aria-labelledby="serieSoftDelete" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Deletar | Série</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="softDeleteForm" action="" method="POST"> {{-- o action vem do modal-functions.js --}}
                @csrf
                @method('delete')
                <div class="modal-body">
                    Tem certeza que deja deletar a Série <strong><span id='serieName'></span></strong>? {{-- O valor do ID vem da view index e é setada pelo modal-functions.js 'categoryName' --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <div class="col-sm-6"><button type="submit" class="btn btn-primary w-100">Deletar</button></div>
                </div>
            </form>
        </div>
    </div>
</div>