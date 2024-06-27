@extends('layout.app')

@section('title', 'Más Sorteos - Loto Real')

@section('content')


    <div class="card text-dark bg-light mb-3" style="max-width: 100rem; margin-top:30px">
        <div class="card-header bg-success text-white fw-bold fs-5" style="background-color:#2e47a5 !important">Sorteos
            LoteDom (Tarde)</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body">
                            <img src="{{ asset('img/quemaito.png') }}"
                                style="width:190px !important; margin-top:20px; margin-left:45px; margin-bottom:22px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                 <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($fechaquemaitomayor->created_at)->format('Y-m-d') == $fechaResultado)                    
                                <!-- bolos -->
                                    @foreach ($quemaitomayor as $quemaitomayo)
                                        <span class="bolorojo">{{ $quemaitomayo }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @else
                                <!-- bolos -->
                                    @foreach ($quemaitomayor as $quemaitomayo)
                                        <span class="bolo-noactualizado">{{ $quemaitomayo }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @endif  
                                
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechaquemaitomayor->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                <!--<div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body">
                            <img src="{{ asset('img/superpale.png') }}"
                                style="width:159px !important; margin-top:20px; margin-left:57px; margin-bottom:22px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                @foreach ($superpale as $superpal)
                                    <span class="bolo">{{ $superpal }}</span>
                                @endforeach
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechasuperpale->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>-->

                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body">
                            <img src="{{ asset('img/agarra4.png') }}"
                                style="width:180px !important; margin-top:25px; margin-left:50px; margin-bottom:22px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                 <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($fechaagarra4->created_at)->format('Y-m-d') == $fechaResultado)                    
                                <!-- bolos -->
                                    <span class="bolo">{{ $agarra4->num1 }}</span>
                                    <span class="bolo">{{ $agarra4->num2 }}</span>
                                    <span class="bolo">{{ $agarra4->num3 }}</span>
                                    <span class="bolorojo">{{ $agarra4->num4 }}</span>
                                <!-- Fin bolos -->
                                @else
                                <!-- bolos -->
                                    <span class="bolo-noactualizado">{{ $agarra4->num1 }}</span>
                                    <span class="bolo-noactualizado">{{ $agarra4->num2 }}</span>
                                    <span class="bolo-noactualizado">{{ $agarra4->num3 }}</span>
                                    <span class="bolorojo">{{ $agarra4->num4 }}</span>
                                <!-- Fin bolos -->
                                @endif  
                                
                               
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechaagarra4->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                <!--
                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body">
                            <img src="{{ asset('img/quinielalotedom.png') }}"
                                style="width:200px !important; margin-top:20px; margin-left:40px; margin-bottom:22px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                @foreach ($quinielalotedom as $quinielalotedo)
                                    <span class="bolo">{{ $quinielalotedo }}</span>
                                @endforeach
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechaquinielalotedom->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>
            -->


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
