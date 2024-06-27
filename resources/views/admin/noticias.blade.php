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
                        Gestión de Noticias
                    </div>
                    <div class="card-body">

                        <h2>Crear Noticia</h2>
                        <form method="post" action="{{ route('noticias.store') }}">

                            @csrf

                            <div class="form-group">
                                <label for="titulo">Título de la Noticia</label>
                                <input type="text" class="form-control" id="titulo"
                                    placeholder="Ingrese el título de la noticia" name="titulo">
                            </div>
                            <div class="form-group">
                                <label for="imagen">URL de la Imagen</label>
                                <input type="text" class="form-control" id="imagen"
                                    placeholder="Ingrese la URL de la imagen" name="imagen">
                            </div>
                            <div class="form-group">
                                <label for="parrafo">Párrafo de la Noticia</label>
                                <textarea class="form-control" id="parrafo" rows="5" placeholder="Ingrese el párrafo de la noticia"
                                    name="texto"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>


                    </div>
                </div>


            </div>


        </div>


        <div class="row">
            <div class="col mt-4">
                <div class="card">
                    <div class="card-header bg-grey">
                        Editar Noticias
                    </div>
                    <div class="card-body">


                        <div class="card-body" style="margin-top: -0.5rem !important;">


                            @if (count($noticias) == 0)
                                <p class="text-center">No hay noticias para mostrar</p>
                            @else
                                <table class="table text-center">

                                    <thead class="thead-dark">

                                        <tr>
                                            <th>ID</th>
                                            <th>Titulo</th>
                                            <th>Acción</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($noticias as $noticia)
                                            <tr>
                                                <td>{{ $noticia->id }}</td>
                                                <td>{{ $noticia->titulo }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-primary btn-md"
                                                        data-toggle="modal" data-target="#modal-edit-{{ $noticia->id }}">
                                                        Editar
                                                    </button>

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                                        data-target="#modal-delete-{{ $noticia->id }}">
                                                        Eliminar
                                                    </button>

                                                </td>
                                            </tr>

                                            @include('admin.noticiaedit')
                                            @include('admin.noticiasdestroy')
                                        @endforeach
                            @endif
                            </tbody>
                            </table>
                            {{ $noticias->links() }}
                            <p>Mostrando {{ $noticias->count() }} Resultados</p>

                            <!-- Fin Tabla Productos -->


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
