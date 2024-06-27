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
                        Modificar Resultados Anteriores
                    </div>
                    <div class="card-body">

                        <div class="container">
                            <form method="post"
                                action="{{ route('resultadosanteriores.update', $resultados_loteria->id) }}">
                                @method('PUT')
                                @csrf


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input1">Resultado 1</label>
                                        <input type="text" class="form-control" id="input1"
                                            value="{{ $resultados_loterias->num1 }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input2">Resultado 2</label>
                                        <input type="text" class="form-control" id="input2"
                                            value="{{ $resultados_loterias->num2 }}">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 3</label>
                                        <input type="text" class="form-control" id="input3"
                                            value="{{ $resultados_loterias->num3 }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 4</label>
                                        <input type="text" class="form-control" id="input4"
                                            value="{{ $resultados_loterias->num4 }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 5</label>
                                        <input type="text" class="form-control" id="input5"
                                            value="{{ $resultados_loterias->num5 }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 6</label>
                                        <input type="text" class="form-control" id="input6"
                                            value="{{ $resultados_loterias->num6 }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 7</label>
                                        <input type="text" class="form-control" id="input7"
                                            value="{{ $resultados_loterias->num7 }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 8</label>
                                        <input type="text" class="form-control" id="input8"
                                            value="{{ $resultados_loterias->num8 }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 9</label>
                                        <input type="text" class="form-control" id="input9"
                                            value="{{ $resultados_loterias->num9 }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 10</label>
                                        <input type="text" class="form-control" id="input10"
                                            value="{{ $resultados_loterias->num10 }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Campo 11</label>
                                        <input type="text" class="form-control" id="input11"
                                            value="{{ $resultados_loterias->num11 }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Campo 12</label>
                                        <input type="text" class="form-control" id="input12"
                                            value="{{ $resultados_loterias->num12 }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 13</label>
                                        <input type="text" class="form-control" id="input13"
                                            value="{{ $resultados_loterias->num13 }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 14</label>
                                        <input type="text" class="form-control" id="input14"
                                            value="{{ $resultados_loterias->num14 }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 15</label>
                                        <input type="text" class="form-control" id="input15"
                                            value="{{ $resultados_loterias->num15 }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 16</label>
                                        <input type="text" class="form-control" id="input16"
                                            value="{{ $resultados_loterias->num16 }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 17</label>
                                        <input type="text" class="form-control" id="input17"
                                            value="{{ $resultados_loterias->num17 }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 18</label>
                                        <input type="text" class="form-control" id="input18"
                                            value="{{ $resultados_loterias->num18 }}">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 19</label>
                                        <input type="text" class="form-control" id="input19"
                                            value="{{ $resultados_loterias->num19 }}">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 20</label>
                                        <input type="text" class="form-control" id="input20"
                                            value="{{ $resultados_loterias->num20 }}">
                                    </div>
                                </div>

                                <div class="btns form-row justify-content-center">

                                    <button type="submit" class="btn btn-primary col-4 mr-3">Actualizar</button>
                                    <a href="" class="btn btn-danger col-4">Cancelar</a>

                                </div>


                            </form>
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
