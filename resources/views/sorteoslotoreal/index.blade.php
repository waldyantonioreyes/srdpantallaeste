@extends('layout.app')

@section('title', 'Más Sorteos - Loto Real')

@section('content')





    <div class="card text-dark bg-light mb-3" style="max-width: 100rem; margin-top:30px">
        <div class="card-header bg-success text-white fw-bold fs-5" style="background-color:#2e47a5 !important">Sorteos Loto
            Real</div>


        <div class="card-body">
            <div class="row">


                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/lotopoolreal.png') }}" class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                 <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($fechapoolreal->created_at)->format('Y-m-d') == $fechaResultado)                    
                                <!-- bolos -->
                                    @foreach ($lotopoolreal as $lotopoolrea)
                                        <span class="bolo">{{ $lotopoolrea }}</span>
                                     @endforeach
                                <!-- Fin bolos -->
                                @else
                                <!-- bolos -->
                                    @foreach ($lotopoolreal as $lotopoolrea)
                                        <span class="bolo-noactualizado">{{ $lotopoolrea }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @endif  
                               
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechapoolreal->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div> 
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/pega4real.png') }}"
                                style="width:190px !important; margin-top:50px; margin-bottom:20px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                 <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($fechapega4real->created_at)->format('Y-m-d') == $fechaResultado)                    
                                <!-- bolos -->
                                    @foreach ($pega4real as $pega4rea)
                                        <span class="bolo">{{ $pega4rea }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @else
                                <!-- bolos -->
                                    @foreach ($pega4real as $pega4rea)
                                        <span class="bolo-noactualizado">{{ $pega4rea }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @endif  
                               
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechapega4real->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                

                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/nuevayolreal.png') }}"
                                style="width:190px !important; margin-top:50px; margin-bottom:22px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">                           
                            <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                            @if (Carbon\Carbon::parse($fechanuevayolreal->created_at)->format('Y-m-d') == $fechaResultado)                    
                            <!-- bolos -->
                                
                                <?php
                    
                                $logo = '';

                                $manzana = $nuevayolreal->extra;
                                
                                switch ($manzana) {
                                    case '1':
                                        $logo = 'img/manzanaverde.png';
                                        break;
                                    case '2':
                                        $logo = 'img/manzanaroja.png';
                                        break;
                                    case '3':
                                        $logo = 'img/manzanaamarilla.png';
                                        break;
                                    
                                }
                                ?>

                                <span class="bolo">{{ $nuevayolreal->num1 }}</span>
                                <span class="bolo">{{ $nuevayolreal->num2 }}</span>
                                <span class="bolo">{{ $nuevayolreal->num3 }}</span>
                                <img src="{{$logo}}" alt="" style="width: 33px; margin-bottom: 6px">
                            <!-- Fin bolos -->
                            @else
                            <!-- bolos -->

                            <?php
                
                            $logo = '';

                            $manzana = $nuevayolreal->extra;
                            
                            switch ($manzana) {
                                case '1':
                                    $logo = 'img/manzanaverde.png';
                                    break;
                                case '2':
                                    $logo = 'img/manzanaroja.png';
                                    break;
                                case '3':
                                    $logo = 'img/manzanaamarilla.png';
                                    break;
                                 
                            }
                            ?>

                            <span class="bolo-noactualizado">{{ $nuevayolreal->num1 }}</span>
                            <span class="bolo-noactualizado">{{ $nuevayolreal->num2 }}</span>
                            <span class="bolo-noactualizado">{{ $nuevayolreal->num3 }}</span>
                            <img src="{{$logo}}" alt="" style="width: 33px; margin-bottom: 6px">
                            <!-- Fin bolos -->
                            @endif  
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechanuevayolreal->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/tufechareal.png') }}"
                                style="width:155px !important; margin-top:50px; margin-bottom:22px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                 <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($fechatufechareal->created_at)->format('Y-m-d') == $fechaResultado)                    
                                <!-- bolos -->
                                    @foreach ($tufechareal as $tufecharea)
                                        <span class="bolo">{{ $tufecharea }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @else
                                <!-- bolos -->
                                    @foreach ($tufechareal as $tufecharea)
                                         <span class="bolo-noactualizado">{{ $tufecharea }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @endif  
                               
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechatufechareal->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

{{-- LOTO REAL  --}}
                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body text-center">
                            <img src="{{ asset('img/lotoreal1.png') }}" class="card-img-top" alt="Lotería Logo" style="width:170px !important;">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                 <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($fechalotorealsorteo->created_at)->format('Y-m-d') == $fechaResultado)                    
                                <!-- bolos -->
                                    @foreach ($lotorealsorteo as $lotorealsorteos)
                                        <span class="bolorojo">{{ $lotorealsorteos }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @else
                                <!-- bolos -->
                                @foreach ($lotorealsorteo as $lotorealsorteos)
                                    <span class="bolo-noactualizado">{{ $lotorealsorteos }}</span>
                                @endforeach
                                <!-- Fin bolos -->
                                @endif  
                                
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechalotorealsorteo->created_at)->format('d/m/Y') }}</p>
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
