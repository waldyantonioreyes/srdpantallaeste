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
                <!-- Tarjeta Contenedora de la tabla -->

                <div class="card">
                    <div class="card-header">
                        <h5 class="ml-2">Gestionar Participantes</h5>
                        <div class="container-fluid mt-2">
                            <div class="row">
                                <div class="col">

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body" style="margin-top: -0.5rem !important;">

                        <table class="table table-light table-striped" id="example" name="example">
                            <thead class="thead-white">
                                <tr>
                                    <th scope="col">Nombre y Apellido</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Cedula</th>
                                    <th scope="col">Ciudad</th>
                                    <th scope="col">Pais</th>
                                    <th scope="col">Numero Participante</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($participantes as $participante)
                                    <tr>
                                        <td> {{ $participante->nombre }} </td>
                                        <td> {{ $participante->telefono }} </td>
                                        <td> {{ $participante->cedula }} </td>
                                        <td> {{ $participante->ciudad }} </td>
                                        <td> {{ $participante->pais }} </td>
                                        <td> {{ $participante->numparticipante }} </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
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
        $(document).ready(function() {
            $(".loader").fadeOut("slow");
            var table = $('#example').DataTable({
                orderCellsTop: true,
                fixedHeader: true,
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            })
            //Creamos una fila en el head de la tabla y lo clonamos para cada columna
            $('#example thead tr').clone(true).appendTo('#example thead');

            $('#example thead tr:eq(1) th').each(function(i) {
                var title = $(this).text(); //es el nombre de la columna
                $(this).html('<input type="text" placeholder="Buscar...' + title + '" />');

                $('input', this).on('keyup change', function() {
                    if (table.column(i).search() !== this.value) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });
            });
        });
    </script>

@stop
