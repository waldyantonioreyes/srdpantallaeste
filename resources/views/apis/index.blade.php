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
                        Generar Token API
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('apis.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="input1">Nombre del Cliente/Empresa</label>
                                    <input type="text" class="form-control" id="input1"
                                        placeholder="Nombre del Cliente/Empresa" name="asignedto" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="input2">IP del Servidor</label>
                                    <input type="text" class="form-control" id="input2"
                                        placeholder="Ejemplo: 192.168.10.15" name="ip" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="select1">Estatus</label>
                                    <div class="input-group">
                                        <select class="form-control" id="select1" name="estatus" required>
                                            <option value="activo">Activo</option>
                                            <option value="inactivo">Inactivo</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-success">Generar API</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header bg-grey">
                        Gestionar Apis

                    </div>


                    <div class="card-body">

                        <!-- Form Busqueda -->
                        <form action="" method="GET" class="form-inline my-2 my-lg-0">

                            @csrf

                            <input class="form-control mr-sm-2" placeholder="Buscar Usuario" name="q">
                            <button type="submit" class="btn btn-primary my-2 my-sm-0">Buscar Cliente</button>

                        </form>
                        <table class="table text-center mt-3">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Asignado a</th>
                                    <th>Token Api</th>
                                    <th>IP del Cliente</th>
                                    <th>Estatus</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($apis as $api)
                                    <tr>
                                        <td>{{ $api->id }}</td>
                                        <td>{{ $api->asignedto }}</td>
                                        <td>{{ $api->token }}</td>
                                        <td>{{ $api->ip }}</td>
                                        <td>{{ $api->estatus }}</td>

                                        <td>


                                            <div class="d-inline-block">
                                                <!-- Botón para eliminar -->
                                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                                    data-target="#modal-delete-{{ $api->id }}">
                                                    Eliminar
                                                </button>
                                            </div>

                                            <div class="d-inline-block">
                                                <!-- Botón para editar -->
                                                <form class="form-inline" action="{{ route('apis.edit', $api->id) }}"
                                                    method="GET">
                                                    <button type="submit" class="btn btn-primary btn-md">
                                                        Editar
                                                    </button>
                                                </form>
                                            </div>




                                        </td>
                                    </tr>
                                    @include('apis.destroy')
                                @endforeach

                                <!-- Agrega más filas según sea necesario -->
                            </tbody>
                        </table>
                        {{ $apis->links() }}
                        <p>Mostrando {{ $apis->count() }} Usuarios</p>

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
