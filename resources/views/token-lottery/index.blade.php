@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    {{-- <h1>Dashboard</h1>  <a href="{{ route('tokenlottery.create') }}" class="btn btn-primary ">Asignar loteria</a> --}}
    <div class="d-flex justify-content-between align-items-center">
        <h1>Dashboard</h1>
        @if ($cantidadTokens_api != $tokenLotterieCantidad)
            <a href="{{ route('tokenlottery.create') }}" class="btn btn-warning">Asignar loteria</a>
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
                <th>Asignado a</th>
                <th>Acciones</th> <!-- Agregamos esta columna para las acciones -->
            </tr>
        </thead>
        <tbody>
            @foreach ($tokenLotteries as $tokenLotteries)
                <tr>
                    {{-- {{ $tokenLotteries }} --}}
                    
                    <td> {{ $tokenLotteries->asignedto }}</td>
                    <td>
                        <!-- Botón de editar -->
                        <a href="{{ route('tokenlottery.show', $tokenLotteries->asignedto) }}" class="btn btn-primary">Editar</a>
                        
                        
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





