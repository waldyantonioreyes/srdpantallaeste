<div >
  
    <div class="row">
        <div class="col-3"></div>
            <div class="card mt-5" style="width: 50rem;">
                <div class="card-header" style="background-color: {{ $headercolor ?? '#FFFFFF' }};">
                    Configuraciones 
                </div>
                
                  <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">id del usuario</label>
                    <div class="col-sm-10">
                      <input wire:model="user_id" type="text" class="form-control" >
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">Nombre del Banquero</label>
                    <div class="col-sm-10">
                      <input whire:model="bankname" name="bankname" type="text" class="form-control" >
                    </div>
                  </div>

                  <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label">color</label>
                    <div class="col-sm-10">
                      <input whire:model="headercolor" type="text" class="form-control" >
                    </div>
                  </div>

                  <button wire:click="store" type="button" class="btn btn-success">Guardar</button>  
   
            </div>
            </div>

   
    
</div>
