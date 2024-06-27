<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Image</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
                    {{-- para mostrar una alerte mientras se carga la imagen --}}
                    <div wire:loading wire:target="url" class="alert alert-danger" role="alert">
                        Cargando imagen. por favor espere...
                      </div>
{{-- para mostrar la imagen desde los archivos temporales --}}
                    @if ($url)
                        <div class="form-group">
                            <img src="{{ $url->temporaryUrl() }}" width="450" height="200" alt="">
                        </div>
                        
                    @endif

            {{-- <div class="form-group">
                <label for="user_id"></label>
                <input wire:model="user_id" type="text" class="form-control" id="user_id" placeholder="User Id">@error('user_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div> --}}
            <div class="form-group">
                <label for="url">Selecciona una Imagen</label>
                <input wire:model="url" type="file" class="form-control" id="url" placeholder="Url">@error('url') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="time">Tiempo de visualización</label>
                <input wire:model="time" type="text" class="form-control" id="time" placeholder="Time">@error('time') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="url" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
