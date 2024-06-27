
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
<div class="card">
    <h5 class="card-header bg-dark"> Asignar Loterias a Cliente de API</h5>
    <div class="card-body">

      <form method="post" action="{{ route('tokenlottery.store') }}">
        @csrf
      
        <div class="form-group">
            <label for="token_id"><h5>Seleccione el Cliente API</h5></label>
            <select class="form-control" id="token_id" name="token_id" required>
                <option value="">Seleccione una opción</option> <!-- Agregamos un valor vacío para que no se seleccione automáticamente -->
                @foreach($tokens as $token)
                    <option value="{{ $token->id }}">{{ $token->asignedto }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <h5>Seleccione las loterias</h5>
            <div class="mb-2">
                <!-- Agrega un botón para seleccionar todo o deseleccionar todo -->
                <button class="btn btn-success" type="button" id="seleccionarTodo">Seleccionar Todo</button>
            </div>
            <div id="lotterias" style="border: 2px solid rgb(46,71,165); border-radius: 10px; padding: 10px; p-5">
                <div class="row">
                @foreach ($loterias as $option)
                <div class="form-check col-md-4">
                    <input class="form-check-input" type="checkbox" id="lottery_{{ $option->id }}" name="lotterias[]" value="{{ $option->id }}">
                    <label class="form-check-label" for="lottery_{{ $option->id }}">{{ $option->descripcion }}</label>
                </div>
                @endforeach
            </div>
            </div>
        </div>
    
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
    

    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
        document.addEventListener('DOMContentLoaded', function() {
    const btnSeleccionarTodo = document.getElementById('seleccionarTodo');
    const checkboxes = document.querySelectorAll('.form-check-input');

    // Función para cambiar el estado de todos los checkboxes
    btnSeleccionarTodo.addEventListener('click', function() {
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = !checkbox.checked;
        });
    });
});

    </script>
@stop