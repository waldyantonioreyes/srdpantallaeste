@extends('layout.app')

@section('title', 'Más Sorteos - Loto Real')

@section('content')

<style>
    /* Estilos para el círculo naranja con texto blanco */
.circulo-naranja {
    display: inline-block;
    background-color: rgb(255, 140, 9); /* Color de fondo naranja */
    color: white; /* Color del texto blanco */
    width: 40px; /* Ancho del círculo */
    height: 40px; /* Altura del círculo */
    border-radius: 50%; /* Dar forma de círculo */
    text-align: center; /* Centrar el texto verticalmente */
    line-height: 40px; /* Centrar el texto verticalmente */
    margin-right: 5px; /* Espacio entre círculos (ajusta según sea necesario) */
}

.circulo-azul {
    display: inline-block;
    background-color: rgba(0,121,192); /* Color de fondo naranja */
    color: white; /* Color del texto blanco */
    width: 40px; /* Ancho del círculo */
    height: 40px; /* Altura del círculo */
    border-radius: 50%; /* Dar forma de círculo */
    text-align: center; /* Centrar el texto verticalmente */
    line-height: 40px; /* Centrar el texto verticalmente */
    margin-right: 5px; /* Espacio entre círculos (ajusta según sea necesario) */
}

@media (max-width: 768px) {
    .circulo-naranja {
        display: inline-block;
        background-color: orange; /* Color de fondo naranja */
        color: white; /* Color del texto blanco */
        width: 27px; /* Ancho del círculo (ajusta según sea necesario) */
        height: 27px; /* Altura del círculo (ajusta según sea necesario) */
        border-radius: 50%; /* Dar forma de círculo */
        text-align: center; /* Centrar el texto verticalmente */
        line-height: 27px; /* Centrar el texto verticalmente */
        margin-right: 5px; /* Espacio entre círculos (ajusta según sea necesario) */
        margin-bottom: 5px; /* Espacio vertical entre los círculos (ajusta según sea necesario) */
        font-size: 12px; /* Tamaño de fuente (ajusta según sea necesario) */
    }

    .circulo-azul {
        display: inline-block;
        background-color: rgba(0,121,192); /* Color de fondo naranja */
        color: white; /* Color del texto blanco */
        width: 27px; /* Ancho del círculo (ajusta según sea necesario) */
        height: 27px; /* Altura del círculo (ajusta según sea necesario) */
        border-radius: 50%; /* Dar forma de círculo */
        text-align: center; /* Centrar el texto verticalmente */
        line-height: 27px; /* Centrar el texto verticalmente */
        margin-right: 5px; /* Espacio entre círculos (ajusta según sea necesario) */
        margin-bottom: 5px; /* Espacio vertical entre los círculos (ajusta según sea necesario) */
        font-size: 12px; /* Tamaño de fuente (ajusta según sea necesario) */
    }
}


</style>

    <div class="card text-center" style="margin-top:100px">
        <div class="card-header text-light" style="background-color:#2e47a5 !important">
           
            <div class="logo"><img src="{{ asset('img/anguila.png') }}" alt="" style="width: 150px;"></div>
        </div>
        <div class="card-body">

            <div class="row">
                <table class="table table-hover">
                    <thead class="text-light" style="background-color:#2e47a5 !important">
                        <tr>
                            <th>Horarios</th>
                            <th>Quinielas</th>
                            <!--<th>Cuarteta</th>-->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($anguila as $anguil)
                            <tr>

                                <td class="fw-bold">{{ Carbon\Carbon::parse($anguil->created_at)->setTimezone('-00:00')->format('d/m/Y') }} {{$anguil->timeday}}</td>
                                <!--<td class="fw-bold">{{ Carbon\Carbon::parse($anguil->created_at)->setTimezone('-00:00')->format('d/m/Y g:00 A') }}</td>-->
                                
                                <td class="fw-bold">                                   
                                    <div class="d-flex justify-content-center align-items-center">
                                        <div class="circulo-naranja" style="font-size: 1rem">{{ $anguil->num1 }}</div>
                                        <div class="circulo-naranja" style="font-size: 1rem">{{ $anguil->num2 }}</div>
                                        <div class="circulo-naranja" style="font-size: 1rem">{{ $anguil->num3 }}</div>
                                    </div>
                                   
                                </td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
                
                
                {{ $anguila->links() }}
                

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
