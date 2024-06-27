<!-- Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear nuevo usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true close-btn">×</span>
                </button>
            </div>
           <div class="modal-body">
				<form>
            <div class="form-group">
                <label for="name">Nombre(s) y Apellidos</label>
                <input wire:model="name" type="text" class="form-control" id="name" placeholder="Nombre(s) y Apellidos">@error('name') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input wire:model="email" type="text" class="form-control" id="email" placeholder="Email">@error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">Contraseña</label>

                <div class="col-md-6">
                    <input id="password" wire:model="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirmar Contraseña</label>

                <div class="col-md-6">
                    <input wire:model="password_confirmation" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="token"></label>
                <input wire:model="token" type="text" class="form-control" id="token" placeholder="Token">@error('token') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="two_factor_secret"></label>
                <input wire:model="two_factor_secret" type="text" class="form-control" id="two_factor_secret" placeholder="Two Factor Secret">@error('two_factor_secret') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="two_factor_recovery_codes"></label>
                <input wire:model="two_factor_recovery_codes" type="text" class="form-control" id="two_factor_recovery_codes" placeholder="Two Factor Recovery Codes">@error('two_factor_recovery_codes') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="two_factor_confirmed_at"></label>
                <input wire:model="two_factor_confirmed_at" type="text" class="form-control" id="two_factor_confirmed_at" placeholder="Two Factor Confirmed At">@error('two_factor_confirmed_at') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="type"></label>
                <input wire:model="type" type="text" class="form-control" id="type" placeholder="Type">@error('type') <span class="error text-danger">{{ $message }}</span> @enderror
            </div> --}}

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
            </div>
        </div>
    </div>
</div>
