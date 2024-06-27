@extends('layout.app')

@section('title', 'Más Sorteos - Loto Real')

@section('content')


    <div class="card text-dark bg-light mb-3" style="max-width: 100rem; margin-top:30px">
        <div class="card-header bg-success text-white fw-bold fs-5" style="background-color:#2e47a5 !important">Sorteos Loteka
            (Noche)
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/lottoloteka.png') }}"
                                style="width:190px !important; margin-top:20px; margin-bottom:22px;" class="card-img-top"
                                alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">

                                <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($lotoloteka->created_at)->format('Y-m-d') == $fechaResultado)
                                    <span class="bolo mb-2">{{ $lotoloteka->num1 }}</span>
                                    <span class="bolo mb-2">{{ $lotoloteka->num2 }}</span>
                                    <span class="bolo mb-2">{{ $lotoloteka->num3 }}</span>
                                    <span class="bolo mb-2">{{ $lotoloteka->num4 }}</span>
                                    <span class="bolo mb-2">{{ $lotoloteka->num5 }}</span>
                                    <span class="bolo mb-2">{{ $lotoloteka->num6 }}</span>
                                    <span class="bolorojo mb-2">{{ $lotoloteka->num7 }}</span>
                                    <span class="boloamarillo mb-2">{{ $lotoloteka->num8 }}</span>
                                @else
                                    <span class="bolo-noactualizado mb-2">{{ $lotoloteka->num1 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $lotoloteka->num2 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $lotoloteka->num3 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $lotoloteka->num4 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $lotoloteka->num5 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $lotoloteka->num6 }}</span>
                                    <span class="bolorojo mb-2">{{ $lotoloteka->num7 }}</span>
                                    <span class="boloamarillo mb-2">{{ $lotoloteka->num8 }}</span>
                                @endif

                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechalotoloteka->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/megachance.png') }}"
                                style="width:190px !important; margin-top:20px; margin-bottom:22px;" class="card-img-top"
                                alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">

                                <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($megachance->created_at)->format('Y-m-d') == $fechaResultado)
                                    <span class="bolo mb-2">{{ $megachance->num1 }}</span>
                                    <span class="bolo mb-2">{{ $megachance->num2 }}</span>
                                    <span class="bolo mb-2">{{ $megachance->num3 }}</span>
                                    <span class="bolo mb-2">{{ $megachance->num4 }}</span>
                                    <span class="bolo mb-2">{{ $megachance->num5 }}</span>
                                @else
                                    <span class="bolo-noactualizado mb-2">{{ $megachance->num1 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $megachance->num2 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $megachance->num3 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $megachance->num4 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $megachance->num5 }}</span>
                                @endif

                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechamegachance->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/repartidera.png') }}"
                                style="width:190px !important; margin-top:20px;margin-bottom:22px;" class="card-img-top"
                                alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">

                                <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($repartidera->created_at)->format('Y-m-d') == $fechaResultado)
                                    <span class="bolo mb-2">{{ $repartidera->num1 }}</span>
                                @else
                                    <span class="bolo-noactualizado mb-2">{{ $repartidera->num1 }}</span>
                                @endif

                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fecharepartidera->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/quinielaloteka.png') }}"
                                style="width:190px !important; margin-top:20px; margin-bottom:22px;" class="card-img-top"
                                alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">

                                <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($quinielaloteka->created_at)->format('Y-m-d') == $fechaResultado)
                                    <span class="bolo mb-2">{{ $quinielaloteka->num1 }}</span>
                                    <span class="bolo mb-2">{{ $quinielaloteka->num2 }}</span>
                                    <span class="bolo mb-2">{{ $quinielaloteka->num3 }}</span>
                                @else
                                    <span class="bolo-noactualizado mb-2">{{ $quinielaloteka->num1 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $quinielaloteka->num2 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $quinielaloteka->num3 }}</span>
                                @endif

                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechaquinielaloteka->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/toca3.png') }}"
                                style="width:190px !important; margin-top:20px; margin-bottom:22px;" class="card-img-top"
                                alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">

                                <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($toca3->created_at)->format('Y-m-d') == $fechaResultado)
                                    <span class="bolo mb-2">{{ $toca3->num1 }}</span>
                                    <span class="bolo mb-2">{{ $toca3->num2 }}</span>
                                    <span class="bolo mb-2">{{ $toca3->num3 }}</span>
                                @else
                                    <span class="bolo-noactualizado mb-2">{{ $toca3->num1 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $toca3->num2 }}</span>
                                    <span class="bolo-noactualizado mb-2">{{ $toca3->num3 }}</span>
                                @endif

                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechatoca3->created_at)->format('d/m/Y') }}</p>
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
