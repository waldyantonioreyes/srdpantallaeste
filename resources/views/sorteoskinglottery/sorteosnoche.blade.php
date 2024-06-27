@extends('layout.app')

@section('title', 'Más Sorteos - Loto Real')

@section('content')


    <div class="card text-dark bg-light mb-3" style="max-width: 100rem; margin-top:30px;">
        <div class="card-header text-white fw-bold fs-5" style="background-color:#2e47a5 !important">Sorteos King Lottery (Noche)</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card tarjeta-loteria">
                        <div class="card-body">
                            <img src="{{ asset('img/philipsburg.jpeg') }}"
                                style="width:250px !important; margin-top:1px; margin-left:-10px;"
                                class="card-img-top" alt="Lotería Logo">
                            <h5 class="card-title text-center">Resultados</h5>
                            <p class="card-text bolos text-center">
                                @foreach ($quinielakinglotterynoche as $quinielakinglotterynoch)
                                    <span class="rectangulo">{{ $quinielakinglotterynoch }}</span>
                                @endforeach
                            </p>
                            <p class="card-text fw-bold text-center">
                                {{ Carbon\Carbon::parse( $fechaquinielakinglotterynoche->created_at)->format('d/m/Y') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
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
