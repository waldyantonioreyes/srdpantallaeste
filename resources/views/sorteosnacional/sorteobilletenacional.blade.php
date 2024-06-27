@extends('layout.app')

@section('title', 'Billete Nacional')

@section('content')


    <div class="card text-dark bg-light mb-3" style="max-width: 100rem; margin-top:30px;">
        <div class="card-header text-white fw-bold fs-5" style="background-color:#2e47a5 !important">Billete Nacional
            (Domingos 6:00 PM)</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="card tarjeta-loteriabillete">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/billetesdomingo.jpeg') }}"
                                style="width:250px !important; margin-top:1px;" class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos">
                                <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($fechasorteosnacional->created_at)->format('Y-m-d') == $fechaResultado)
                                    <!-- bolos -->
                                    <div class="row" style="margin-left:5px;">
                                        <div class="col">
                                            <span class="label">1ro</span>
                                            <span class="rectangulobillete mb-2">{{ $sorteosnacional->num1 }}</span>
                                        </div>

                                        <div class="col" style="margin-left:-20px;">
                                            <span class="label">2do</span>
                                            <span class="rectangulobillete mb-2">{{ $sorteosnacional->num2 }}</span>
                                        </div>

                                        <div class="col" style="margin-left:-20px;">
                                            <span class="label">3ro</span>
                                            <span class="rectangulobillete mb-2">{{ $sorteosnacional->num3 }}</span>
                                        </div>

                                        <div class="col" style="margin-left:-15px; margin-top:-3px">
                                            <span class="label">Fr</span>
                                            <br>
                                            <span class="bolo">{{ $sorteosnacional->num4 }}</span>
                                        </div>
                                    </div>
                                    <!-- Fin bolos -->
                                @else
                                    <!-- bolos -->
                                    <div class="row" style="margin-left:5px;">
                                        <div class="col">
                                            <span class="label">1ro</span>
                                            <span
                                                class="rectangulobillete-noactualizado mb-2">{{ $sorteosnacional->num1 }}</span>
                                        </div>

                                        <div class="col" style="margin-left:-20px;">
                                            <span class="label">2do</span>
                                            <span
                                                class="rectangulobillete-noactualizado mb-2">{{ $sorteosnacional->num2 }}</span>
                                        </div>

                                        <div class="col" style="margin-left:-20px;">
                                            <span class="label">3ro</span>
                                            <span
                                                class="rectangulobillete-noactualizado mb-2">{{ $sorteosnacional->num3 }}</span>
                                        </div>

                                        <div class="col" style="margin-left:-15px; margin-top:-3px">
                                            <span class="label">Fr</span>
                                            <br>
                                            <span class="bolo">{{ $sorteosnacional->num4 }}</span>
                                        </div>
                                    </div>
                                    <!-- Fin bolos -->
                                @endif
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechasorteosnacional->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body">
                            <img src="{{ asset('img/lotopoolkinglottery.jpeg') }}" class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                @foreach ($lotopoolking730 as $lotopoolking73)
                                    <span class="bolo">{{ $lotopoolking73 }}</span>
                                @endforeach
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechalotopoolking730->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div> --}}



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
