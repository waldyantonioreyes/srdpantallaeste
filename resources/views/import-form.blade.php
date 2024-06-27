@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')





    <div class="container col-12">

        <div class="row">
            <div class="col mt-4">
                <div class="card">
                    <div class="card-header bg-grey">
                        Cargar Resultados Anteriores
                    </div>
                    <div class="card-body">

                        <h2> Para cargar resultados anteriores, agregue los datos en un Excel y guardelo en formato CSV</h2>

                        <form action="/importar-resultados" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="archivo">
                            <button type="submit">Importar</button>
                        </form>



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
