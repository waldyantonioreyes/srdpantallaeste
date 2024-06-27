@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')


    <!-- Mensaje Actualizado correctamente-->
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <script>
                window.onload = function() {
                    setTimeout(function() {
                        var alert = document.querySelector('.alert');
                        alert.style.opacity = 0;
                        setTimeout(function() {
                            alert.style.display = 'none';
                        }, 500);
                    }, 3000);
                };
            </script>
        </div>
    @endif

    <div class="container col-12">

        <div class="row">
            <div class="col mt-4">
                <div class="card">
                    <div class="card-header bg-grey">
                        Gestionar Resultados Anteriores
                    </div>


                    <div class="card-body">

                        <!-- Form Busqueda -->
                        <form action="" method="GET" class="form-inline my-2 my-lg-0">

                            @csrf

                            <input class="form-control mr-sm-2" placeholder="Buscar Loteria / Sorteo" name="q">
                            <button type="submit" class="btn btn-primary my-2 my-sm-0">Buscar</button>

                        </form>
                        <table class="table text-center mt-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Loteria/Sorteo</th>
                                    <th>Fecha Actualización</th>
                                    <th>Actualizo</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($resultados_loterias as $resultados_loteria)
                                    <tr>

                                        <td>{{ $resultados_loteria->id }}</td>
                                        <td>{{ $resultados_loteria->descripcion }}</td>
                                        <td>{{ $resultados_loteria->created_at }}</td>
                                        <td>{{ $resultados_loteria->actualizo }}</td>

                                        <td>
                                            <a href="{{ route('resultadosanteriores.edit', $resultados_loteria->id) }}"
                                                class="btn btn-warning btn-md">Editar</a>

                                        </td>
                                    </tr>
                                @endforeach

                                <!-- Agrega más filas según sea necesario -->
                            </tbody>
                        </table>
                        {{ $resultados_loterias->links() }}
                        <p>Mostrando {{ $resultados_loterias->count() }} Resultados</p>

                    </div>
                </div>


            </div>


        </div>
    </div>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>

    <script>
        function pasarDatos(id) {
            const formEle = document.getElementById(id)
            const inputs = formEle.querySelectorAll(".form-control")


            for (let i = 0; i < inputs.length; i++) {
                const _input = inputs[i];
                document.getElementById("modal-" + _input.name).innerHTML = _input.value
            }

            document.getElementById("modal-submit").setAttribute("form", id);

        }
    </script>


@stop
