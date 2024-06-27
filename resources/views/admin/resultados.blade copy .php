@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

    <style>
        .form-control {
            width: 55px !important;
        }
    </style>

    <SCRIPT TYPE="text/javascript">
        <!--
        var downStrokeField;

        function autojump(fieldName, nextFieldName, fakeMaxLength) {
            var myForm = document.forms[document.forms.length - 1];
            var myField = myForm.elements[fieldName];
            myField.nextField = myForm.elements[nextFieldName];
            if (myField.maxLength == null)
                myField.maxLength = fakeMaxLength;
            myField.onkeydown = autojump_keyDown;
            myField.onkeyup = autojump_keyUp;
        }

        function autojump_keyDown() {
            this.beforeLength = this.value.length;
            downStrokeField = this;
        }

        function autojump_keyUp() {
            if (
                (this == downStrokeField) &&
                (this.value.length > this.beforeLength) &&
                (this.value.length >= this.maxLength)
            )
                this.nextField.focus();
            downStrokeField = null;
        }
        //
        -->
    </SCRIPT>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="container col-12">

        <button class="btn btn-success" onclick="confirmarRegistro()">TEST CONFIRMAR REGISTRO</button>

        <!-- Modal -->
        <div class="modal fade" id="loterias-modal" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-danger" id="staticBackdropLabel">
                            Advertencia
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center">Está seguro de querer actualizar los
                            siguientes números?</p>

                        <h2 class="text-center"> <span id="modal-num1"></span>
                            <span id="modal-num2"></span>
                            <span id="modal-num3"></span>
                            <span id="modal-num4"></span>
                            <span id="modal-num5"></span>
                            <span id="modal-num6"></span>
                            <span id="modal-num7"></span>
                            <span id="modal-num8"></span>
                            <span id="modal-num9"></span>
                            <span id="modal-num10"></span>
                            <span id="modal-num11"></span>
                            <span id="modal-num12"></span>
                            <span id="modal-num13"></span>
                            <span id="modal-num14"></span>
                            <span id="modal-num15"></span>
                            <span id="modal-num16"></span>
                            <span id="modal-num17"></span>
                            <span id="modal-num18"></span>
                            <span id="modal-num19"></span>
                            <span id="modal-num20"></span>

                        </h2>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="modal-submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col mt-4">

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



                <!-- Card Actualización de Resultados-->
                <div class="card">
                    <h5 class="card-header bg-dark">Actualizar Resultados</h5>
                    <div class="card-body">


                        <div class="accordion" id="accordionExample">

                            <!-- Loteria Real acordion inicio -->
                            <div class="card">
                                <div class="card-header bg-info" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left text-light" type="button"
                                            data-toggle="collapse" data-target="#LotoReal" aria-expanded="true"
                                            aria-controls="LotoReal">
                                            Lotería Real
                                        </button>
                                    </h2>
                                </div>

                                <div id="LotoReal" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">

                                        <!--Formulario Loto Real Sorteo 12:55 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h6 class="mb-3">Lotería Real, Sorteo 12:55 PM</h6>



                                            <h5 class="mb-3">Quiniela Real</h5>

                                            <form class="form-inline" method="post" action="{{ route('real12pm.store') }}"
                                                id="real12pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_real12pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_real12pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_real12pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('real12pm')"
                                                    id="miBoton" {{ $estatus_real12pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>


                                        <!--Formulario Loto Pool Real Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">LotoPool Real</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('lotopoolreal.store') }}" id="lotopoolreal">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_lotopoolreal->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_lotopoolreal->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_lotopoolreal->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num4"
                                                        required {{ $estatus_lotopoolreal->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('lotopoolreal')"
                                                    id="miBoton" {{ $estatus_lotopoolreal->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Pega 4 Real Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Pega 4 Real</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('pega4real.store') }}" id="pega4real">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_pega4real->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_pega4real->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_pega4real->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num4"
                                                        required {{ $estatus_pega4real->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('pega4real')"
                                                    id="miBoton" {{ $estatus_pega4real->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->


                                        <hr>

                                        <!--Formulario Nueva Yol Real Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Nueva Yol Real</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('nuevayolreal.store') }}" id="nuevayolreal">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_nuevayolreal->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_nuevayolreal->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_nuevayolreal->estatus }}>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="inlineRadio1"
                                                        value="1" name="extra" required
                                                        {{ $estatus_nuevayolreal->estatus }}>
                                                    <label class="form-check-label" for="inlineRadio1">Verde</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="inlineRadio2"
                                                        value="2" name="extra" required
                                                        {{ $estatus_nuevayolreal->estatus }}>
                                                    <label class="form-check-label" for="inlineRadio2">Roja</label>
                                                </div>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" id="inlineRadio2"
                                                        value="3" name="extra" required
                                                        {{ $estatus_nuevayolreal->estatus }}>
                                                    <label class="form-check-label" for="inlineRadio2">Amarilla</label>
                                                </div>



                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('nuevayolreal')"
                                                    id="miBoton" {{ $estatus_nuevayolreal->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>

                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Tu Fecha Real Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Tu Fecha Real</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('tufechareal.store') }}" id="tufechareal">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_tufechareal->estatus }}>
                                                </div>


                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary mt-1" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('tufechareal')"
                                                    id="miBoton" {{ $estatus_tufechareal->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>


                                        </div>
                                        <!--Fin formulario -->
                                        <hr>
                                        {{-- NUEVO CODIGO PARA EL SORTEO DEL LOTO REAL 20/02/3024 --}}

                                        <!--Formulario Loto Pool Real Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Loto Real</h5>


                                            <form class="form-inline" method="post"
                                                action="{{ route('lotosorteoreal.store') }}" id="lotosorteoreal">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_lotoreal->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_lotoreal->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_lotoreal->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num4"
                                                        required {{ $estatus_lotoreal->estatus }}>
                                                </div>

                                                <div class="form-group mt-2">
                                                    <label for="input3" class="mr-3">Resultado 5:</label>
                                                    <input type="text" class="form-control mr-3" id="input5"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num5"
                                                        required {{ $estatus_lotoreal->estatus }}>
                                                </div>

                                                <div class="form-group mt-2">
                                                    <label for="input3" class="mr-3">Resultado 6:</label>
                                                    <input type="text" class="form-control mr-3" id="input6"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num6"
                                                        required {{ $estatus_lotoreal->estatus }}>
                                                </div>


                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('lotosorteoreal')"
                                                    id="miBoton" {{ $estatus_lotoreal->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                                autojump('input4', 'input5', 2);
                                                autojump('input5', 'input6', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>
                                        <!--Fin formulario -->


                                    </div>
                                </div>
                            </div>
                            <!-- Loteria Fin -->

                            <!-- Loteria Nacional acordion inicio -->
                            <div class="card">
                                <div class="card-header bg-secondary" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left text-light" type="button"
                                            data-toggle="collapse" data-target="#LoteriaNacional" aria-expanded="true"
                                            aria-controls="LoteriaNacional">
                                            Lotería Nacional
                                        </button>
                                    </h2>
                                </div>

                                <div id="LoteriaNacional" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">

                                        <!--Formulario Loteria Nacional Sorteo 2:30 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Lotería Nacional, Sorteo 2:30 PM</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('nacional230pm.store') }}" id="nacional230pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_nacional230->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_nacional230->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_nacional230->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('nacional230pm')"
                                                    id="miBoton" {{ $estatus_nacional230->estatus }}>
                                                    Actualizar
                                                </button>



                                            </form>

                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Loteria Nacional Sorteo 2:30 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Lotería Nacional, Sorteo 8:50 PM</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('nacional850pm.store') }}" id="nacional850pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_nacional850pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_nacional850pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_nacional850pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('nacional850pm')"
                                                    id="miBoton" {{ $estatus_nacional850pm->estatus }}>
                                                    Actualizar
                                                </button>



                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Loteria Nacional Sorteo 2:30 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Juega + Pega +</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('juegamas.store') }}" id="juegamas">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_juegapega->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_juegapega->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_juegapega->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num4"
                                                        required {{ $estatus_juegapega->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 5:</label>
                                                    <input type="text" class="form-control mr-3" id="input5"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num5"
                                                        required {{ $estatus_juegapega->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('juegamas')"
                                                    id="miBoton" {{ $estatus_juegapega->estatus }}>
                                                    Actualizar
                                                </button>



                                            </form>

                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                                autojump('input4', 'input5', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>
                                        {{-- DESDE AQUI CODIGO PARA EL BILLETE DE LOTERIA DE LOS DOMINGOS --}}

                                        <!--Formulario Loteria Nacional Sorteo 2:30 PM Actualización-->
                                        <div class="sorteo mb-6">
                                            <h5 class="mb-3">Billetes Domingo</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('billetesnacional.store') }}" id="billetesnacional">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3 col-7" id="input1"
                                                        placeholder="00" min="0" max="9999999" maxlength="9"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_sorteobilletenacional->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2</label>
                                                    <input type="text" class="form-control mr-3 col-7" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="9"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_sorteobilletenacional->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3 col-7" id="input3"
                                                        placeholder="00" min="0" max="9999999" maxlength="9"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_sorteobilletenacional->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Fracción:</label>
                                                    <br>
                                                    <input type="text" class="form-control col-7" id="input4"
                                                        placeholder="00" min="0" max="9999999" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num4"
                                                        required {{ $estatus_sorteobilletenacional->estatus }}>
                                                </div>




                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary mt-3" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('billetesnacional')"
                                                    id="miBoton" {{ $estatus_sorteobilletenacional->estatus }}>
                                                    Actualizar
                                                </button>



                                            </form>

                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                    </div>
                                </div>
                            </div>
                            <!-- Loteria Fin -->


                            <!-- King Lottery acordion inicio -->
                            <div class="card">
                                <div class="card-header bg-info" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left text-light" type="button"
                                            data-toggle="collapse" data-target="#KingLottery" aria-expanded="true"
                                            aria-controls="KingLottery">
                                            King Lottery
                                        </button>
                                    </h2>
                                </div>

                                <div id="KingLottery" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">

                                        <!--Formulario King Lottery Sorteo 12:30 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">King Lottery, Sorteo 12:30 PM</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('king1230pm.store') }}" id="king1230pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="000" min="0" max="99" maxlength="3"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_kinglottery1230pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_kinglottery1230pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_kinglottery1230pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('king1230pm')"
                                                    id="miBoton" {{ $estatus_kinglottery1230pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>

                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario King Lottery Sorteo 7:30 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">King Lottery, Sorteo 7:30 PM</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('king730pm.store') }}" id="king730pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="000" min="0" max="99" maxlength="3"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_kinglottery730pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_kinglottery730pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_kinglottery730pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('king730pm')"
                                                    id="miBoton" {{ $estatus_kinglottery730pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>

                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Philisburg King Lottery Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Philisburg King Lottery 12:30 PM</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('quinielaking.store') }}" id="quinielaking">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99" maxlength="4"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_quinielakinglottery->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="4"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_quinielakinglottery->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="4"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_quinielakinglottery->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('quinielaking')"
                                                    id="miBoton" {{ $estatus_quinielakinglottery->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>

                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                                autojump('input4', 'input5', 2);
                                                autojump('input5', 'input6', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Formulario Philisburg King Lottery 7:30 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Philisburg King Lottery 7:30 PM</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('quinielaking730.store') }}" id="quinielaking730">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99" maxlength="4"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_quinielakinglottery730->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="4"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_quinielakinglottery730->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="4"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_quinielakinglottery730->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('quinielaking730')"
                                                    id="miBoton" {{ $estatus_quinielakinglottery730->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>

                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                                autojump('input4', 'input5', 2);
                                                autojump('input5', 'input6', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Formulario Loto Pool King Lottery 12:30 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Loto Pool King Lottery 12:30 PM</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('lotopoolking1230.store') }}" id="lotopoolking1230">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num1"
                                                        required {{ $estatus_lotopoolking1230pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num2"
                                                        required {{ $estatus_lotopoolking1230pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num3"
                                                        required {{ $estatus_lotopoolking1230pm->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99" maxlength="2"
                                                        pattern="\d+" title="Solo se permiten números" name="num4"
                                                        required {{ $estatus_lotopoolking1230pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('lotopoolking1230')"
                                                    id="miBoton" {{ $estatus_lotopoolking1230pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>

                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                                autojump('input4', 'input5', 2);
                                                autojump('input5', 'input6', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Formulario Loto Pool King Lottery 7:30 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Loto Pool King Lottery 7:30 PM</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('lotopoolking730.store') }}" id="lotopoolking730">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal"
                                                    onclick="pasarDatos('lotopoolking730')" id="miBoton">
                                                    Actualizar
                                                </button>


                                            </form>

                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                                autojump('input4', 'input5', 2);
                                                autojump('input5', 'input6', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->


                                    </div>
                                </div>
                            </div>
                            <!-- Loteria Fin -->


                            <!-- Loteria Leidsa acordion inicio -->
                            <div class="card">
                                <div class="card-header bg-secondary" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left text-light" type="button"
                                            data-toggle="collapse" data-target="#Leidsa" aria-expanded="true"
                                            aria-controls="Leidsa">
                                            Leidsa
                                        </button>
                                    </h2>
                                </div>

                                <div id="Leidsa" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">

                                        <!--Formulario Leidsa Sorteo 8:55PM Lun/Sab - Los Domingos 3:55PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Leidsa, Sorteo 8:55PM Lun/Sab - Los Domingos 3:55PM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('leidsa.store') }}" id="leidsa">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_leidsa->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_leidsa->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_leidsa->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('leidsa')"
                                                    id="miBoton" {{ $estatus_leidsa->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>

                                        </div>
                                        <!--Fin formulario -->


                                        <hr>

                                        <!--Formulario Pega 3 Mas - Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Pega 3 Mas
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('pegatres.store') }}" id="pegatres">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_pega3mas->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_pega3mas->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_pega3mas->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('pegatres')"
                                                    id="miBoton" {{ $estatus_pega3mas->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>


                                        <!--Formulario Loto Pool Leidsa - Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Loto Pool
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('lotopool.store') }}" id="lotopool">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_lotopool->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_lotopool->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_lotopool->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_lotopool->estatus }}>
                                                </div>

                                                <div class="form-group mt-2">
                                                    <label for="input3" class="mr-3">Resultado 5:</label>
                                                    <input type="text" class="form-control mr-3" id="input5"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num5" required {{ $estatus_lotopool->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('lotopool')"
                                                    id="miBoton" {{ $estatus_lotopool->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>

                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                                autojump('input4', 'input5', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Super Kino TV - Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Super Kino TV
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('superkino.store') }}" id="superkino">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">R1:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input1" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num1" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">R2:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input2" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num2" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">R3:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input3" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num3" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">R4:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input4" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num4" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">R5:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input5" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num5" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">R6:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input6" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num6" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">R7:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input7" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num7" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">R8:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input8" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num8" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">R9:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input9" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num9" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">R10:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input10" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num10" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">R11:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input11" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num11" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">R12:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input12" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num12" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">R13:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input13" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num13" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">R14:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input14" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num14" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">R15:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input15" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num15" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">R16:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input16" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num16" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">R17:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input17" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num17" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">R18:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input18" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num18" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">R19:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input19" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num19" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">R20:</label>
                                                    <input type="text" class="form-control mr-3 mb-1"
                                                        id="input20" placeholder="00" min="0"
                                                        max="99" maxlength="2" pattern="\d+"
                                                        title="Solo se permiten números" name="num20" required
                                                        {{ $estatus_superkinotv->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('superkino')"
                                                    id="miBoton" {{ $estatus_superkinotv->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                                autojump('input4', 'input5', 2);
                                                autojump('input5', 'input6', 2);
                                                autojump('input6', 'input7', 2);
                                                autojump('input7', 'input8', 2);
                                                autojump('input8', 'input9', 2);
                                                autojump('input9', 'input10', 2);
                                                autojump('input10', 'input11', 2);
                                                autojump('input11', 'input12', 2);
                                                autojump('input12', 'input13', 2);
                                                autojump('input13', 'input14', 2);
                                                autojump('input14', 'input15', 2);
                                                autojump('input15', 'input16', 2);
                                                autojump('input16', 'input17', 2);
                                                autojump('input17', 'input18', 2);
                                                autojump('input18', 'input19', 2);
                                                autojump('input19', 'input20', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Super Loto Mas - Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Super Loto Mas
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('superlotomas.store') }}" id="superlotomas">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_superlotomas->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_superlotomas->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_superlotomas->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_superlotomas->estatus }}>
                                                </div>

                                                <div class="form-group mt-2">
                                                    <label for="input3" class="mr-3">Resultado 5:</label>
                                                    <input type="text" class="form-control mr-3" id="input5"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num5" required {{ $estatus_superlotomas->estatus }}>
                                                </div>

                                                <div class="form-group mt-2">
                                                    <label for="input3" class="mr-3">Resultado 6:</label>
                                                    <input type="text" class="form-control mr-3" id="input6"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num6" required {{ $estatus_superlotomas->estatus }}>
                                                </div>

                                                <div class="form-group mt-2">
                                                    <label for="input3" class="mr-3">Resultado 7:</label>
                                                    <input type="text" class="form-control mr-3" id="input7"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num7" required {{ $estatus_superlotomas->estatus }}>
                                                </div>

                                                <div class="form-group mt-2">
                                                    <label for="input3" class="mr-3">Resultado 8:</label>
                                                    <input type="text" class="form-control mr-3" id="input8"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num8" required {{ $estatus_superlotomas->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('superlotomas')"
                                                    id="miBoton" {{ $estatus_superlotomas->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                                autojump('input4', 'input5', 2);
                                                autojump('input5', 'input6', 2);
                                                autojump('input6', 'input7', 2);
                                                autojump('input7', 'input8', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>



                                    </div>
                                </div>
                            </div>
                            <!-- Loteria Fin -->


                            <!-- Lotedom acordion inicio -->
                            <div class="card">
                                <div class="card-header bg-info" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left text-light" type="button"
                                            data-toggle="collapse" data-target="#LoteDom" aria-expanded="true"
                                            aria-controls="LoteDom">
                                            LoteDom
                                        </button>
                                    </h2>
                                </div>

                                <div id="LoteDom" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">

                                        <!--
                                            <div class="sorteo mb-4">
                                                <h5 class="mb-3">Lotedom, Sorteo 1:55PM Lun/Dom
                                                </h5>

                                                <form class="form-inline" method="post"
                                                    action="{{ route('lotedom.store') }}" id="lotedom">

                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="input1" class="mr-3">Resultado 1:</label>
                                                        <input type="text" class="form-control mr-3" id="input1"
                                                            placeholder="00" min="0" max="99"
                                                            maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                            name="num1" required {{ $estatus_lotedom155->estatus }}>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input2" class="mr-3">Resultado 2:</label>
                                                        <input type="text" class="form-control mr-3" id="input2"
                                                            placeholder="00" min="0" max="99"
                                                            maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                            name="num2" required {{ $estatus_lotedom155->estatus }}>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="input3" class="mr-3">Resultado 3:</label>
                                                        <input type="text" class="form-control mr-3" id="input3"
                                                            placeholder="00" min="0" max="99"
                                                            maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                            name="num3" required {{ $estatus_lotedom155->estatus }}>
                                                    </div>

                                                    
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#loterias-modal" onclick="pasarDatos('lotedom')"
                                                        id="miBoton" {{ $estatus_lotedom155->estatus }}>
                                                        Actualizar
                                                    </button>


                                                </form>
                                            </div>
                                           

                                            <hr>
                                        -->
                                        <!--Formulario Quemaito Mayor - Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Quemaito Mayor
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('quemaitomayor.store') }}" id="quemaitomayor">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_quemaitomayor->estatus }}>
                                                </div>


                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('quemaitomayor')"
                                                    id="miBoton" {{ $estatus_quemaitomayor->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                            </SCRIPT>

                                        </div>
                                        <!--Fin formulario -->

                                        <hr>
                                        <!--
                                           
                                            <div class="sorteo mb-4">
                                                <h5 class="mb-3">Super Pale Lotedom
                                                </h5>

                                                <form class="form-inline" method="post"
                                                    action="{{ route('superpalelotedom.store') }}" id="superpalelotedom">

                                                    @csrf

                                                    <div class="form-group">
                                                        <label for="input1" class="mr-3">Resultado 1:</label>
                                                        <input type="text" class="form-control mr-3" id="input1"
                                                            placeholder="00" min="0" max="99"
                                                            maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                            name="num1" required
                                                            {{ $estatus_superpalelotedom->estatus }}>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="input1" class="mr-3">Resultado 2:</label>
                                                        <input type="text" class="form-control mr-3" id="input2"
                                                            placeholder="00" min="0" max="99"
                                                            maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                            name="num2" required
                                                            {{ $estatus_superpalelotedom->estatus }}>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="input1" class="mr-3">Resultado 3:</label>
                                                        <input type="text" class="form-control mr-3" id="input3"
                                                            placeholder="00" min="0" max="99"
                                                            maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                            name="num3" required
                                                            {{ $estatus_superpalelotedom->estatus }}>
                                                    </div>


                                                   
                                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#loterias-modal"
                                                        onclick="pasarDatos('superpalelotedom')" id="miBoton"
                                                        {{ $estatus_superpalelotedom->estatus }}>
                                                        Actualizar
                                                    </button>


                                                </form>
                                            </div>
                                          

                                            <hr>
                                        -->



                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Agarra 4
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('agarra4.store') }}" id="agarra4">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_agarra4->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_agarra4->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_agarra4->estatus }}>
                                                </div>


                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_agarra4->estatus }}>
                                                </div>



                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('agarra4')"
                                                    id="miBoton" {{ $estatus_agarra4->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                        </div>


                                        <hr>


                                        <!--Formulario Quiniela Lotedom - Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Quiniela Lotedom
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('quinielalotedom.store') }}" id="quinielalotedom">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_quinielalotedom->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_quinielalotedom->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_quinielalotedom->estatus }}>
                                                </div>


                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal"
                                                    onclick="pasarDatos('quinielalotedom')" id="miBoton"
                                                    {{ $estatus_quinielalotedom->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>

                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                    </div>
                                </div>
                            </div>
                            <!-- Loteria Fin -->


                            <!-- Loteria La Primera acordion inicio -->
                            <div class="card">
                                <div class="card-header bg-secondary" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left text-light" type="button"
                                            data-toggle="collapse" data-target="#LaPrimera" aria-expanded="true"
                                            aria-controls="LaPrimera">
                                            La Primera
                                        </button>
                                    </h2>
                                </div>

                                <div id="LaPrimera" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">

                                        <!--Formulario Primera Sorteo 12:00 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">La Primera, Sorteo 12:00PM Lun/Dom
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('primera12pm.store') }}" id="primera12pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_primera12pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_primera12pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_primera12pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('primera12pm')"
                                                    id="miBoton" {{ $estatus_primera12pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Primera Sorteo 8:00 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">La Primera, Sorteo 8:00PM Lun/Dom
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('primera8pm.store') }}" id="primera8pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_primera8pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_primera8pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_primera8pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('primera8pm')"
                                                    id="miBoton" {{ $estatus_primera8pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Loto 5 mas Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Loto 5 Mas Primera
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('loto5mas.store') }}" id="loto5mas">

                                                @csrf

                                                <div class="form-group mb-3">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_loto5->estatus }}>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_loto5->estatus }}>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_loto5->estatus }}>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_loto5->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 5:</label>
                                                    <input type="text" class="form-control mr-3" id="input5"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num5" required {{ $estatus_loto5->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 6:</label>
                                                    <input type="text" class="form-control mr-3" id="input6"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num6" required {{ $estatus_loto5->estatus }}>
                                                </div>


                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('loto5mas')"
                                                    id="miBoton" {{ $estatus_loto5->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                                autojump('input4', 'input5', 2);
                                                autojump('input5', 'input6', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                    </div>
                                </div>
                            </div>
                            <!-- Loteria Fin -->




                            <!-- Loteka acordion inicio -->
                            <div class="card">
                                <div class="card-header bg-info" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left text-light" type="button"
                                            data-toggle="collapse" data-target="#Loteka" aria-expanded="true"
                                            aria-controls="Loteka">
                                            Loteka
                                        </button>
                                    </h2>
                                </div>

                                <div id="Loteka" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">

                                        <!--Formulario Loteka Sorteo 7:55 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Loteka, Sorteo 7:55PM Lun/Dom
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('loteka755pm.store') }}" id="loteka755pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_loteka755pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_loteka755pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_loteka755pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('loteka755pm')"
                                                    id="miBoton" {{ $estatus_loteka755pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Loto Loteka  Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Loto Loteka
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('lotoloteka.store') }}" id="lotoloteka">

                                                @csrf

                                                <div class="form-group mb-3">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_lotoloteka->estatus }}>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_lotoloteka->estatus }}>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_lotoloteka->estatus }}>
                                                </div>

                                                <div class="form-group mb-3">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_lotoloteka->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 5:</label>
                                                    <input type="text" class="form-control mr-3" id="input5"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num5" required {{ $estatus_lotoloteka->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 6:</label>
                                                    <input type="text" class="form-control mr-3" id="input6"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num6" required {{ $estatus_lotoloteka->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 7:</label>
                                                    <input type="text" class="form-control mr-3" id="input7"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num7" required {{ $estatus_lotoloteka->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 8:</label>
                                                    <input type="text" class="form-control mr-3" id="input8"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num8" required {{ $estatus_lotoloteka->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('lotoloteka')"
                                                    id="miBoton" {{ $estatus_lotoloteka->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                                autojump('input4', 'input5', 2);
                                                autojump('input5', 'input6', 2);
                                                autojump('input6', 'input7', 2);
                                                autojump('input7', 'input8', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->
                                        <hr>

                                        <!--Formulario Mega Chance  Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Mega Chance
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('megachance.store') }}" id="megachance">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_megachance->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_megachance->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_megachance->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_megachance->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 5:</label>
                                                    <input type="text" class="form-control mr-3" id="input5"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num5" required {{ $estatus_megachance->estatus }}>
                                                </div>


                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('megachance')"
                                                    id="miBoton" {{ $estatus_megachance->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                                autojump('input4', 'input5', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Repartidera Mega Chance  Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Repartidera Mega Chance
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('repartidera.store') }}" id="repartidera">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_repartidera->estatus }}>
                                                </div>


                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('repartidera')"
                                                    id="miBoton" {{ $estatus_repartidera->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>

                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Quiniela Loteka  Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Quiniela Loteka
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('quinielaloteka.store') }}" id="quinielaloteka">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_quinielaloteka->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_quinielaloteka->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_quinielaloteka->estatus }}>
                                                </div>


                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('quinielaloteka')"
                                                    id="miBoton" {{ $estatus_quinielaloteka->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario Toca 3  Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Toca 3
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('toca3.store') }}" id="toca3">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_toca3->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_toca3->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_toca3->estatus }}>
                                                </div>


                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('toca3')"
                                                    id="miBoton" {{ $estatus_toca3->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->


                                    </div>
                                </div>
                            </div>
                            <!-- Loteria Fin -->



                            <!-- La Suerte Dominicana acordion inicio -->
                            <div class="card">
                                <div class="card-header bg-secondary" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left text-light" type="button"
                                            data-toggle="collapse" data-target="#LaSuerte" aria-expanded="true"
                                            aria-controls="LaSuerte">
                                            La Suerte Dominicana
                                        </button>
                                    </h2>
                                </div>

                                <div id="LaSuerte" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">

                                        <!--Formulario La Suerte Dominicana Sorteo 12:30 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">La Suerte Dominicana, Sorteo 12:30PM Lun/Dom
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('lasuerte1230pm.store') }}" id="lasuerte1230pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_lasuerte1230pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_lasuerte1230pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_lasuerte1230pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('lasuerte1230pm')"
                                                    id="miBoton" {{ $estatus_lasuerte1230pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>
                                        <!--Formulario La Suerte Dominicana Sorteo 6:00 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">La Suerte Dominicana, Sorteo 6:00PM Lun/Dom
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('lasuerte6pm.store') }}" id="lasuerte6pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_lasuerte6pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_lasuerte6pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_lasuerte6pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('lasuerte6pm')"
                                                    id="miBoton" {{ $estatus_lasuerte6pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                    </div>
                                </div>
                            </div>
                            <!-- Loteria Fin -->


                            <!-- New York Lottery acordion inicio -->
                            <div class="card">
                                <div class="card-header bg-info" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left text-light" type="button"
                                            data-toggle="collapse" data-target="#NewYork" aria-expanded="true"
                                            aria-controls="NewYork">
                                            New York Lottery
                                        </button>
                                    </h2>
                                </div>

                                <div id="NewYork" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">

                                        <!--Formulario New York Lottery Sorteo 2:30 PM Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">New York Lottery, Sorteo 2:30 PM</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('newyork230pm.store') }}" id="newyork230pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_newyork230pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_newyork230pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_newyork230pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('newyork230pm')"
                                                    id="miBoton" {{ $estatus_newyork230pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>

                                        <!--Formulario New York Lottery Sorteo 10:30PM Lun/Dom Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">New York Lottery, Sorteo 10:30PM Lun/Dom</h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('newyork1030pm.store') }}" id="newyork1030pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_newyork1030pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_newyork1030pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_newyork1030pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('newyork1030pm')"
                                                    id="miBoton" {{ $estatus_newyork1030pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                    </div>
                                </div>
                            </div>
                            <!-- Loteria Fin -->


                            <!-- Florida Lottery acordion inicio -->
                            <div class="card">
                                <div class="card-header bg-secondary" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left text-light" type="button"
                                            data-toggle="collapse" data-target="#Florida" aria-expanded="true"
                                            aria-controls="Florida">
                                            Florida Lottery
                                        </button>
                                    </h2>
                                </div>

                                <div id="Florida" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">

                                        <!--Formulario Florida Lottery Sorteo 1:30PM Lun/Dom Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Florida Lottery, Sorteo 1:30PM Lun/Dom
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('florida130pm.store') }}" id="florida130pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_florida130pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_florida130pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_florida130pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('florida130pm')"
                                                    id="miBoton" {{ $estatus_florida130pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                        </div>
                                        <!--Fin formulario -->
                                        <SCRIPT TYPE="text/javascript">
                                            autojump('input1', 'input2', 2);
                                            autojump('input2', 'input3', 2);
                                        </SCRIPT>

                                        <hr>

                                        <!--Formulario Florida Lottery Sorteo 1:30PM Lun/Dom Actualización-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Florida Lottery, Sorteo 9:40PM Lun/Dom
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('florida940pm.store') }}" id="florida940pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_florida940pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_florida940pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_florida940pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('florida940pm')"
                                                    id="miBoton" {{ $estatus_florida940pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                    </div>
                                </div>
                            </div>
                            <!-- Loteria Fin -->

                            <!-- Anguilla acordion inicio -->
                            <div class="card">
                                <div class="card-header bg-info" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-block text-left text-light" type="button"
                                            data-toggle="collapse" data-target="#Anguilla" aria-expanded="true"
                                            aria-controls="Anguilla">
                                            Anguilla
                                        </button>
                                    </h2>
                                </div>

                                <div id="Anguilla" class="collapse" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">

                                        <!--Anguila 9AM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 9:00 AM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila9am') }}" id="anguila9am">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila9am->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila9am->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila9am->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila9am')"
                                                    id="miBoton" {{ $estatus_anguila9am->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->


                                        <!--Anguila 10AM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 10:00 AM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila10am') }}" id="anguila10am">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila10am->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila10am->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila10am->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila10am')"
                                                    id="miBoton" {{ $estatus_anguila10am->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->


                                        <!--Anguila 11AM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 11:00 AM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila11am') }}" id="anguila11am">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila11am->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila11am->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila11am->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila11am')"
                                                    id="miBoton" {{ $estatus_anguila11am->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Anguila 12 PM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 12:00 PM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila12pm') }}" id="anguila12pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila12pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila12pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila12pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila12pm')"
                                                    id="miBoton" {{ $estatus_anguila12pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Anguila 1 PM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 1:00 PM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila1pm') }}" id="anguila1pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila1pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila1pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila1pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila1pm')"
                                                    id="miBoton" {{ $estatus_anguila1pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Anguila 2 PM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 2:00 PM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila2pm') }}" id="anguila2pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila2pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila2pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila2pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila2pm')"
                                                    id="miBoton" {{ $estatus_anguila2pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Anguila 3 PM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 3:00 PM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila3pm') }}" id="anguila3pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila3pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila3pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila3pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila3pm')"
                                                    id="miBoton" {{ $estatus_anguila3pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Anguila 4 PM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 4:00 PM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila4pm') }}" id="anguila4pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila4pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila4pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila4pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila4pm')"
                                                    id="miBoton" {{ $estatus_anguila4pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->


                                        <!--Anguila 5 PM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 5:00 PM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila5pm') }}" id="anguila5pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila5pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila5pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila5pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila5pm')"
                                                    id="miBoton" {{ $estatus_anguila5pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Anguila 6 PM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 6:00 PM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila6pm') }}" id="anguila6pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila6pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila6pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila6pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila6pm')"
                                                    id="miBoton" {{ $estatus_anguila6pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Anguila 7 PM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 7:00 PM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila7pm') }}" id="anguila7pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila7pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila7pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila7pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila7pm')"
                                                    id="miBoton" {{ $estatus_anguila7pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Anguila 8 PM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 8:00 PM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila8pm') }}" id="anguila8pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila8pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila8pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila8pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila8pm')"
                                                    id="miBoton" {{ $estatus_anguila8pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Anguila 9 PM-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Anguilla Lottery 9:00 PM
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguila9pm') }}" id="anguila9pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_anguila9pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_anguila9pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_anguila9pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguila9pm')"
                                                    id="miBoton" {{ $estatus_anguila9pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <hr>




                                        <!--******************************************************************************************-->

                                        <h4 class="bg-warning">Resultados - Anguila Cuarteta</h4>

                                        <!--Formulario Cuarteta 9am-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 9:00 AM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac9am') }}" id="anguilac9am">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta9am->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta9am->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta9am->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta9am->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac9am')"
                                                    id="miBoton" {{ $estatus_cuarteta9am->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->


                                        <!--Formulario Cuarteta 10am-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 10:00 AM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac10am') }}" id="anguilac10am">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta10am->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta10am->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta10am->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta10am->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac10am')"
                                                    id="miBoton" {{ $estatus_cuarteta10am->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->



                                        <!--Formulario Cuarteta 11am-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 11:00 AM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac11am') }}" id="anguilac11am">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta11am->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta11am->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta11am->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta11am->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac11am')"
                                                    id="miBoton" {{ $estatus_cuarteta11am->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->


                                        <!--Formulario Cuarteta 12pm-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 12:00 PM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac12pm') }}" id="anguilac12pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta12pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta12pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta12pm->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta12pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac12pm')"
                                                    id="miBoton" {{ $estatus_cuarteta12pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Formulario Cuarteta 1pm-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 1:00 PM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac1pm') }}" id="anguilac1pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta1pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta1pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta1pm->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta1pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac1pm')"
                                                    id="miBoton" {{ $estatus_cuarteta1pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Formulario Cuarteta 2pm-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 2:00 PM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac2pm') }}" id="anguilac2pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta2pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta2pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta2pm->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta2pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac2pm')"
                                                    id="miBoton" {{ $estatus_cuarteta2pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->


                                        <!--Formulario Cuarteta 3pm-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 3:00 PM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac3pm') }}" id="anguilac3pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta3pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta3pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta3pm->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta3pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac3pm')"
                                                    id="miBoton" {{ $estatus_cuarteta3pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Formulario Cuarteta 4pm-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 4:00 PM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac4pm') }}" id="anguilac4pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta4pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta4pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta4pm->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta4pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac4pm')"
                                                    id="miBoton" {{ $estatus_cuarteta4pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Formulario Cuarteta 5pm-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 5:00 PM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac5pm') }}" id="anguilac5pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta5pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta5pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta5pm->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta5pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac5pm')"
                                                    id="miBoton" {{ $estatus_cuarteta5pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Formulario Cuarteta 6pm-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 6:00 PM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac6pm') }}" id="anguilac6pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta6pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta6pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta6pm->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta6pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac6pm')"
                                                    id="miBoton" {{ $estatus_cuarteta6pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->


                                        <!--Formulario Cuarteta 7pm-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 7:00 PM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac7pm') }}" id="anguilac7pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta7pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta7pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta7pm->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta7pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac7pm')"
                                                    id="miBoton" {{ $estatus_cuarteta7pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Formulario Cuarteta 8pm-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 8:00 PM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac8pm') }}" id="anguilac8pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta8pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta8pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta8pm->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta8pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac8pm')"
                                                    id="miBoton" {{ $estatus_cuarteta8pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->

                                        <!--Formulario Cuarteta 9pm-->
                                        <div class="sorteo mb-4">
                                            <h5 class="mb-3">Cuarteta - Anguilla Lottery 9:00 PM.
                                            </h5>

                                            <form class="form-inline" method="post"
                                                action="{{ route('anguila.anguilac9pm') }}" id="anguilac9pm">

                                                @csrf

                                                <div class="form-group">
                                                    <label for="input1" class="mr-3">Resultado 1:</label>
                                                    <input type="text" class="form-control mr-3" id="input1"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num1" required {{ $estatus_cuarteta9pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input2" class="mr-3">Resultado 2:</label>
                                                    <input type="text" class="form-control mr-3" id="input2"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num2" required {{ $estatus_cuarteta9pm->estatus }}>
                                                </div>
                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 3:</label>
                                                    <input type="text" class="form-control mr-3" id="input3"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num3" required {{ $estatus_cuarteta9pm->estatus }}>
                                                </div>

                                                <div class="form-group">
                                                    <label for="input3" class="mr-3">Resultado 4:</label>
                                                    <input type="text" class="form-control mr-3" id="input4"
                                                        placeholder="00" min="0" max="99"
                                                        maxlength="2" pattern="\d+" title="Solo se permiten números"
                                                        name="num4" required {{ $estatus_cuarteta9pm->estatus }}>
                                                </div>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#loterias-modal" onclick="pasarDatos('anguilac9pm')"
                                                    id="miBoton" {{ $estatus_cuarteta9pm->estatus }}>
                                                    Actualizar
                                                </button>


                                            </form>
                                            <SCRIPT TYPE="text/javascript">
                                                autojump('input1', 'input2', 2);
                                                autojump('input2', 'input3', 2);
                                                autojump('input3', 'input4', 2);
                                            </SCRIPT>
                                        </div>
                                        <!--Fin formulario -->



                                        <!--<form method="post" action="{{ route('estatus.update') }}">
                                                @csrf
                    
                                                <button type="submit" id="modal-submit" class="btn btn-warning">Habilitar
                                                    Formularios Anguilla</button>
                    
                                            </form>-->
                                        <SCRIPT TYPE="text/javascript">
                                            autojump('input1', 'input2', 2);
                                            autojump('input2', 'input3', 2);
                                            autojump('input3', 'input4', 2);
                                        </SCRIPT>
                                    </div>
                                </div>
                            </div>
                            <!-- Loteria Fin -->


                        </div>


                        <form method="post" action="{{ route('estatus.update') }}">
                            @csrf

                            <button type="submit" id="modal-submit" class="btn btn-primary">Habilitar
                                Formularios</button>

                        </form>

                    </div>
                </div>
                <!--Card Fin Actualizacion Resultados-->
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


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirmarRegistro() {

            Swal.fire({
                title: 'Error!',
                text: 'Do you want to continue',
                icon: 'error',
                confirmButtonText: 'Cool'
            })


        }
    </script>



@stop
