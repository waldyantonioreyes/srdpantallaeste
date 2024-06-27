@extends('layout.app')

@section('title', 'Más Sorteos - Loto Real')

@section('content')



<div class="card text-center" style="margin-top:100px">
    <div class="card-header text-light" style="background-color:#2e47a5 !important">
        <b>Resultados Loterías Anguilla</b>
    </div>
    <div class="card-body">

        <div class="row">
            <table class="table  table-hover">
                <thead class="text-light" style="background-color:#2e47a5 !important">
                    <tr>
                        <th scope="col">Lotería</th>
                        <th scope="col">Bolo 1</th>
                        <th scope="col">Bolo 2</th>
                        <th scope="col">Bolo 3</th>
                        <th scope="col">Bolo 4</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>

                    </tr>
                </thead>
                <tbody>

                    @foreach ($anguilla as $anguill)
                    <tr>
                        <td>{{ $anguill->descripcion }}</td>
                        <td>{{ $anguill->num1 }}</td>
                        <td>{{ $anguill->num2 }}</td>
                        <td>{{ $anguill->num3 }}</td>
                        <td>{{ $anguill->num4 }}</td>
                        <td> {{ Carbon\Carbon::parse($anguill->created_at)->format('d/m/Y') }}</td>
                        <td> {{ Carbon\Carbon::parse($anguill->created_at)->format('g:00 A') }}</td>


                    </tr>
                    @endforeach


                </tbody>
            </table>
            {{ $anguilla->links() }}

        </div>


    </div>
    <div class="card-footer text-muted">

    </div>
</div>



<!-- <div class="card text-dark bg-light mb-3" style="max-width: 100rem; margin-top:30px">
                                                                    <div class="card-header bg-success text-white fw-bold fs-5" style="background-color:#2e47a5 !important">Sorteos Loto
                                                                    Real</div>



                                                                    <div class="card-body">
                                                                    <div class="row">




                                                                    <div class="col-md-3 col-sm-6">
                                                                    <div class="card tarjeta-loteria">
                                                                    <div class="card-body">
                                                                    <img src="{{ asset('img/anguila.png') }}" class="card-img-top" alt="Lotería Logo"
                                                                        style="width:200px !important; margin-top:10px; margin-left:30px; margin-bottom:20px;">
                                                                    <h5 class="card-title text-center">Resultados</h5>
                                                                    <p class="card-text bolos text-center">
                                                                        @foreach ($anguillalottery as $anguillalotter)
    <span class="bolo">{{ $anguillalotter }}</span>
    @endforeach
                                                                    </p>
                                                                    <p class="card-text fw-bold text-center">
                                                                        {{ Carbon\Carbon::parse($fechaanguillalottery->created_at)->format('d/m/Y') }}</p>

                                                                    <p class="card-text fw-bold text-center">
                                                                        Sorteo: {{ Carbon\Carbon::parse($fechaanguillalottery->created_at)->format('g:00 A') }}</p>

                                                                    </div>
                                                                    </div>
                                                                    </div>

                                                                    <div class="col-md-3 col-sm-6">
                                                                    <div class="card tarjeta-loteria">
                                                                    <div class="card-body">
                                                                    <img src="{{ asset('img/cuarteta.jpg') }}"
                                                                        style="width:260px !important; margin-top:30px; margin-left:10px; margin-bottom:20px;"
                                                                        class="card-img-top" alt="Lotería Logo">
                                                                    <h5 class="card-title text-center">Resultados</h5>
                                                                    <p class="card-text bolos text-center">
                                                                        @foreach ($anguillacuarteta as $anguillacuartet)
    <span class="bolo">{{ $anguillacuartet }}</span>
    @endforeach
                                                                    </p>
                                                                    <p class="card-text fw-bold text-center">
                                                                        {{ Carbon\Carbon::parse($fechaanguillacuarteta->created_at)->format('d/m/Y') }}</p>
                                                                    <p class="card-text fw-bold text-center">
                                                                        Sorteo: {{ Carbon\Carbon::parse($fechaanguillacuarteta->created_at)->format('g:00 A') }}</p>
                                                                    </div>
                                                                    </div>
                                                                    </div>








                                                                    </div>

                                                                    </div>
                                                                    </div>-->




<div class="col">

    <div class="" style="height: 250px"></div>

</div>





@endsection