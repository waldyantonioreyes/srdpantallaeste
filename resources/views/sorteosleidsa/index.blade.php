@extends('layout.app')

@section('title', 'Más Sorteos - Loto Real')

@section('content')


    <div class="card text-dark bg-light mb-3" style="max-width: 100rem; margin-top:30px">
        <div class="card-header bg-success text-white fw-bold fs-5" style="background-color:#2e47a5 !important">Sorteos Leidsa
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body">
                            <img src="{{ asset('img/pega3mas.png') }}"
                                style="width:230px !important; margin-top:30px; margin-left:20px; margin-bottom:42px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                 <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($fechapega3mas->created_at)->format('Y-m-d') == $fechaResultado)                    
                                <!-- bolos -->
                                    @foreach ($pega3mas as $pega3ma)
                                        <span class="bolo">{{ $pega3ma }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @else
                                <!-- bolos -->
                                    @foreach ($pega3mas as $pega3ma)
                                        <span class="bolo-noactualizado">{{ $pega3ma }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @endif  
                                
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechapega3mas->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body">
                            <img src="{{ asset('img/lotopool.png') }}"
                                style="width:250px !important; margin-top:35px; margin-left:15px; margin-bottom:0px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center mt-3 mb-2">Resultados</h5>
                            <p class="card-text bolos text-center">
                                 <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($fechalotopool->created_at)->format('Y-m-d') == $fechaResultado)                    
                                <!-- bolos -->
                                    @foreach ($lotopool as $lotopoo)
                                        <span class="bolo">{{ $lotopoo }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @else
                                <!-- bolos -->
                                    @foreach ($lotopool as $lotopoo)
                                        <span class="bolo-noactualizado">{{ $lotopoo }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @endif  
                           
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechalotopool->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body">
                            <img src="{{ asset('img/superkino.png') }}"
                                style="width:200px !important; margin-top:20px; margin-left:40px; margin-bottom:0px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center mt-3">Resultados</h5>
                            <p class="card-text bolos text-center">
                                 <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($fechasuperkinotv->created_at)->format('Y-m-d') == $fechaResultado)                    
                                <!-- bolos -->
                                    @foreach ($superkinotv as $superkinot)
                                        <span class="bolo mb-1 mt-1" style="margin-left: 3px;">{{ $superkinot }}</span>
                                    @endforeach
                                <!-- Fin bolos -->
                                @else
                                <!-- bolos -->
                                @foreach ($superkinotv as $superkinot)
                                    <span class="bolo-noactualizado mb-1 mt-1" style="margin-left: 3px;">{{ $superkinot }}</span>
                                @endforeach
                                <!-- Fin bolos -->
                                @endif  
                                
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechasuperkinotv->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body">
                            <img src="{{ asset('img/loto.png') }}"
                                style="width:150px !important; margin-top:20px; margin-left:59px; margin-bottom:0px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                 <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($fechasuperlotomas->created_at)->format('Y-m-d') == $fechaResultado)                    
                                <!-- bolos -->
                                 <span class="bolo mb-1">{{ $superlotomas->num1 }}</span>
                                <span class="bolo mb-1">{{ $superlotomas->num2 }}</span>
                                <span class="bolo mb-1">{{ $superlotomas->num3 }}</span>
                                <span class="bolo mb-1">{{ $superlotomas->num4 }}</span>
                                <span class="bolo mb-1">{{ $superlotomas->num5 }}</span>
                                <span class="bolo mb-1">{{ $superlotomas->num6 }}</span>
                                <span class="boloazul mb-1">{{ $superlotomas->num7 }}</span>
                                <span class="bolorojo mb-1">{{ $superlotomas->num8 }}</span>

                                <!-- Fin bolos -->
                                @else
                                <!-- bolos -->
                                <span class="bolo-noactualizado mb-1">{{ $superlotomas->num1 }}</span>
                                <span class="bolo-noactualizado mb-1">{{ $superlotomas->num2 }}</span>
                                <span class="bolo-noactualizado mb-1">{{ $superlotomas->num3 }}</span>
                                <span class="bolo-noactualizado mb-1">{{ $superlotomas->num4 }}</span>
                                <span class="bolo-noactualizado mb-1">{{ $superlotomas->num5 }}</span>
                                <span class="bolo-noactualizado mb-1">{{ $superlotomas->num6 }}</span>
                                <span class="boloazul mb-1">{{ $superlotomas->num7 }}</span>
                                <span class="bolorojo mb-1">{{ $superlotomas->num8 }}</span>

                                <!-- Fin bolos -->
                                @endif  
                                
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechasuperlotomas->created_at)->format('d/m/Y') }}</p>
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
