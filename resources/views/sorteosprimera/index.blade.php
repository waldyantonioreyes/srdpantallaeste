@extends('layout.app')

@section('title', 'Más Sorteos - Loto Real')

@section('content')


    <div class="card text-dark bg-light mb-3" style="max-width: 100rem; margin-top:30px">
        <div class="card-header bg-success text-white fw-bold fs-5" style="background-color:#2e47a5 !important">Sorteos La
            Primera (Noche)</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body">
                            <img src="{{ asset('img/loto5mas.png') }}"
                                style="width:190px !important; margin-top:20px; margin-left:45px; margin-bottom:22px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">

                                <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($loto5mas->created_at)->format('Y-m-d') == $fechaResultado)
                                    <span class="bolo mb-1">{{ $loto5mas->num1 }}</span>
                                    <span class="bolo mb-1">{{ $loto5mas->num2 }}</span>
                                    <span class="bolo mb-1">{{ $loto5mas->num3 }}</span>
                                    <span class="bolo mb-1">{{ $loto5mas->num4 }}</span>
                                    <span class="bolo mb-1">{{ $loto5mas->num5 }}</span>
                                    <span class="bolo mb-1 boloazul">{{ $loto5mas->num6 }}</span>
                                @else
                                    <span class="bolo-noactualizado mb-1">{{ $loto5mas->num1 }}</span>
                                    <span class="bolo-noactualizado mb-1">{{ $loto5mas->num2 }}</span>
                                    <span class="bolo-noactualizado mb-1">{{ $loto5mas->num3 }}</span>
                                    <span class="bolo-noactualizado mb-1">{{ $loto5mas->num4 }}</span>
                                    <span class="bolo-noactualizado mb-1">{{ $loto5mas->num5 }}</span>
                                    <span class="bolo mb-1 boloazul">{{ $loto5mas->num6 }}</span>
                                @endif


                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechaloto5mas->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>




                <!-- Aquí van las otras 3 tarjetas -->

            </div>
            <div class="row">
                <!-- Aquí van las otras 4 filas de tarjetas -->
            </div>
        </div>
    </div>




    <div class="col">

        <div class="" style="height: 250px"></div>

    </div>



@endsection
