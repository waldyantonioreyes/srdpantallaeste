@extends('layout.app')

@section('title', 'Más Sorteos - Loto Real')

@section('content')


    <div class="card text-dark bg-light mb-3" style="max-width: 100rem; margin-top:30px">
        <div class="card-header bg-success text-white fw-bold fs-5" style="background-color:#2e47a5 !important">Sorteos
            Lotería Nacional ( Tarde )</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body">
                            <img src="{{ asset('img/pegamasjuegamas.png') }}"
                                style="width:190px !important; margin-top:20px; margin-left:45px; margin-bottom:22px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                                @if (Carbon\Carbon::parse($fechajuegapega->created_at)->format('Y-m-d') == $fechaResultado)
                                    <!-- bolos -->

                                    <span class="boloazul2">{{ $juegapega->num1 }}</span>
                                    <span class="boloazul2">{{ $juegapega->num2 }}</span>
                                    <span class="bolorojo">{{ $juegapega->num3 }}</span>
                                    <span class="bolorojo">{{ $juegapega->num4 }}</span>
                                    <span class="boloblanco">{{ $juegapega->num5 }}</span>


                                    <!-- Fin bolos -->
                                @else
                                    <!-- bolos -->
                                    @foreach ($juegapega as $juegapeg)
                                        <span class="bolo-noactualizado">{{ $juegapeg }}</span>
                                    @endforeach
                                    <!-- Fin bolos -->
                                @endif

                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse($fechajuegapega->created_at)->format('d/m/Y') }}</p>
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
