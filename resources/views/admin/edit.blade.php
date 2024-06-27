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
                        Editar Resultados
                    </div>
                    <div class="card-body">

                        <div class="container">
                            <form method="post"
                                action="{{ route('resultadosanteriores.update', $resultados_loterias->id) }}">
                                @method('PUT')
                                @csrf


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input1">Resultado 1</label>
                                        <input type="text" class="form-control" id="input1"
                                            value="{{ $resultados_loterias->num1 }}" name="num1" min="0"
                                            max="99" maxlength="6" pattern="\d+" title="Solo se permiten números"
                                            {{ $resultados_loterias->num1 ?? 'disabled' }}>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input2">Resultado 2</label>
                                        <input type="text" class="form-control" id="input2"
                                            value="{{ $resultados_loterias->num2 }}" name="num2" min="0"
                                            max="99" maxlength="6" pattern="\d+" title="Solo se permiten números"
                                            {{ $resultados_loterias->num2 ?? 'disabled' }}>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 3</label>
                                        <input type="text" class="form-control" id="input3"
                                            value="{{ $resultados_loterias->num3 }}" name="num3" min="0"
                                            max="99" maxlength="6" pattern="\d+" title="Solo se permiten números"
                                            {{ $resultados_loterias->num3 ?? 'disabled' }}>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 4</label>
                                        <input type="text" class="form-control" id="input4"
                                            value="{{ $resultados_loterias->num4 }}" name="num4" min="0"
                                            max="99" maxlength="6" pattern="\d+" title="Solo se permiten números"
                                            {{ $resultados_loterias->num4 ?? 'disabled' }}>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 5</label>
                                        <input type="text" class="form-control" id="input5"
                                            value="{{ $resultados_loterias->num5 }}" name="num5" min="0"
                                            max="99" maxlength="6" pattern="\d+" title="Solo se permiten números"
                                            {{ $resultados_loterias->num5 ?? 'disabled' }}>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 6</label>
                                        <input type="text" class="form-control" id="input6"
                                            value="{{ $resultados_loterias->num6 }}" name="num6" min="0"
                                            max="99" maxlength="6" pattern="\d+" title="Solo se permiten números"
                                            {{ $resultados_loterias->num6 ?? 'disabled' }}>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 7</label>
                                        <input type="text" class="form-control" id="input7"
                                            value="{{ $resultados_loterias->num7 }}" name="num7" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num7 ?? 'disabled' }}>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 8</label>
                                        <input type="text" class="form-control" id="input8"
                                            value="{{ $resultados_loterias->num8 }}" name="num8" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num8 ?? 'disabled' }}>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 9</label>
                                        <input type="text" class="form-control" id="input9"
                                            value="{{ $resultados_loterias->num9 }}" name="num9" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num9 ?? 'disabled' }}>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 10</label>
                                        <input type="text" class="form-control" id="input10"
                                            value="{{ $resultados_loterias->num10 }}" name="num10" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num10 ?? 'disabled' }}>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Campo 11</label>
                                        <input type="text" class="form-control" id="input11"
                                            value="{{ $resultados_loterias->num11 }}" name="num11" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num11 ?? 'disabled' }}>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Campo 12</label>
                                        <input type="text" class="form-control" id="input12"
                                            value="{{ $resultados_loterias->num12 }}" name="num12" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num12 ?? 'disabled' }}>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 13</label>
                                        <input type="text" class="form-control" id="input13"
                                            value="{{ $resultados_loterias->num13 }}" name="num13" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num13 ?? 'disabled' }}>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 14</label>
                                        <input type="text" class="form-control" id="input14"
                                            value="{{ $resultados_loterias->num14 }}" name="num14" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num14 ?? 'disabled' }}>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 15</label>
                                        <input type="text" class="form-control" id="input15"
                                            value="{{ $resultados_loterias->num15 }}" name="num15" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num15 ?? 'disabled' }}>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 16</label>
                                        <input type="text" class="form-control" id="input16"
                                            value="{{ $resultados_loterias->num16 }}" name="num16" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num16 ?? 'disabled' }}>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 17</label>
                                        <input type="text" class="form-control" id="input17"
                                            value="{{ $resultados_loterias->num17 }}" name="num17" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num17 ?? 'disabled' }}>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 18</label>
                                        <input type="text" class="form-control" id="input18"
                                            value="{{ $resultados_loterias->num18 }}" name="num18" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num18 ?? 'disabled' }}>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="input3">Resultado 19</label>
                                        <input type="text" class="form-control" id="input19"
                                            value="{{ $resultados_loterias->num19 }}" name="num19" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num19 ?? 'disabled' }}>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="input4">Resultado 20</label>
                                        <input type="text" class="form-control" id="input20"
                                            value="{{ $resultados_loterias->num20 }}" name="num20" min="0"
                                            max="99" maxlength="6" pattern="\d+"
                                            title="Solo se permiten números"
                                            {{ $resultados_loterias->num20 ?? 'disabled' }}>
                                    </div>
                                </div>

                                <div class="btns form-row justify-content-center">

                                    <button type="submit" class="btn btn-primary col-4 mr-3">Actualizar</button>
                                    <a href="{{ route('resultadosanteriores.index') }}"
                                        class="btn btn-danger col-4">Cancelar</a>

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
