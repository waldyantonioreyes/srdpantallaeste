<!-- Modal -->

<div class="modal fade" id="modal-edit-{{ $noticia->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">

        <form action="{{ route('noticias.update', $noticia->id) }}" method="post">

            @csrf
            @method('PUT')

            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Noticia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">


                    <div class="col mb-3">
                        <label for="validationDefault05">Título de la Noticia</label>
                        <input type="text" class="form-control" id="validationDefault05"
                            value="{{ $noticia->titulo }}" name="titulo" required>
                    </div>


                    <div class="col mb-3">
                        <label for="validationDefault05">URL Imagen</label>
                        <input type="text" class="form-control" id="validationDefault05"
                            value="{{ $noticia->imagen }}" name="imagen" required>
                    </div>

                    <div class="form-group">
                        <label for="parrafo">Párrafo de la Noticia</label>
                        <textarea class="form-control" id="parrafo" rows="5" placeholder="Ingrese el párrafo de la noticia"
                            name="texto">{{ $noticia->texto }}</textarea>
                    </div>



                </div>
                <div class="form-row">
                    <div class="col text-center mt-3">
                        <a href="{{ route('noticias.index') }}" class="btn btn-danger col-4 mb-3">Cancel</a>
                        <button type="submit" class="btn btn-primary col-4 mb-3">Actualizar</button>
                    </div>

                </div>

            </div>

    </div>
    </form>
</div>
</div>
