@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@foreach ($tokenLotteries as $tokenLotterie1s)
@endforeach
<div style="display: flex;">
    <h1 style="margin-right: 10px;">Cantidad de lotería asignada a {{ $tokenLotterie1s->asignedto }} : {{ $cantidad }}</h1>
    @if ($cantidad != $loteriasCount)
        <form action="{{ route('tokenlottery.edit', $tokenLotterie1s->token_id) }}" method="GET" style="margin-left: 10px;">
        @csrf
        <button type="submit" class="btn btn-warning">Asignar más loterías a {{ $tokenLotterie1s->asignedto }}</button>
    </form>
    @endif
    
</div>


@stop

@section('content')
    <!-- Mensaje Actualizado correctamente-->
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="hideAlert()">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <script>
        function hideAlert() {
            var alert = document.querySelector('.alert');
            alert.style.opacity = 0;
            setTimeout(function() {
                alert.style.display = 'none';
            }, 500);
        }

        // Ocultar automáticamente el mensaje después de 3 segundos solo si no se cierra manualmente
        var alert = document.querySelector('.alert');
        setTimeout(function() {
            if (alert.style.display !== 'none') {
                hideAlert();
            }
        }, 3000);
    </script>
@endif

    <table class="table table-striped table-hover" id='example' name='example'>
        <thead class="thead">
            <tr>
                {{-- <th>Asignado a</th> --}}
                <th>Loterias</th>
                <th>Acciones</th> <!-- Agregamos esta columna para las acciones -->
            </tr>
        </thead>
        <tbody>
            @foreach ($tokenLotteries as $tokenLotteries)
                <tr>
                    
                    {{-- <td> {{ $tokenLotteries->asignedto }}</td> --}}
                    <td> {{ $tokenLotteries->descripcion}}</td>
                    <td>
                       
                        <!-- Formulario para eliminar -->
                        <form action="{{ route('tokenlottery.destroy', $tokenLotteries->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>

                    
                </tr>
            @endforeach
        </tbody>
    </table>
 

   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!'); 
    </script>
      
@stop





