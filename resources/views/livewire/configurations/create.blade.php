<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Configuration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            {{-- <div class="form-group" style="display: none;">
                <label for="user_id"></label>
                <input wire:model="user_id" type="text" class="form-control" id="user_id" placeholder="User Id">@error('user_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div> --}}

            {{-- <div class="form-group">
                <label for="user_id">Seleccionar usuario</label>
                <select wire:model="user_id" class="form-control" id="user_id">
                    <option value="">Selecciona un usuario</option>
                    @foreach($usuarios as $usuario)
                        <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                    @endforeach
                </select>
                @error('user_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div> --}}
            
            
            <div class="form-group">
                <label for="bankname">Nombre del Banquero(a)</label>
                <input wire:model="bankname" type="text" class="form-control" id="bankname" placeholder="Bankname">@error('bankname') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="headercolor">Color Para la Pantalla</label>
                <input wire:model="headercolor" type="color" class="form-control" id="headercolor" placeholder="Headercolor">@error('headercolor') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
         
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
