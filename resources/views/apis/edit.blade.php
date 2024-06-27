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
                        Generar API
                    </div>

                    <div class="card-body">

                        <form method="post" action="{{ route('apis.update', $apitoken->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="input1">Nombre del Cliente/Empresa</label>
                                    <input type="text" class="form-control" id="input1"
                                        placeholder="Nombre del Cliente/Empresa" name="asignedto"
                                        value="{{ $apitoken->asignedto }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="input2">IP del Servidor</label>
                                    <input type="text" class="form-control" id="input2"
                                        placeholder="Ejemplo: 192.168.10.15" name="ip" value="{{ $apitoken->ip }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="select1">Estatus</label>
                                    <div class="input-group">
                                        <select class="form-control" id="select1" name="estatus"
                                            value="{{ $apitoken->estatus }}">
                                            <option value="activo">Activo</option>
                                            <option value="inactivo">Inactivo</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-success">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <a href="{{ route('apis.index') }}" class="btn btn-primary">Regresar</a>


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
