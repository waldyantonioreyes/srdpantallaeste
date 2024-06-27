@extends('layout.app')

@section('title', 'Inicio')
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
@section('content')



    {{-- <div class="row col-md-9 mt-1" id="marquesina">
        <div class="text-center">
            <h6 style="font-size: 1rem;" class="mb-2">Resultados Anteriores</h6>
        </div>
        <marquee loop="5" behavior="" direction=""
            style="border-bottom: 1px solid transparent; background-image: linear-gradient(to right, white, #fafafa, #fafafa, white); padding-bottom: 5px; padding-top: 5px; border-top: 1px solid transparent;
            background-image: linear-gradient(to right, white, #fafafa, #fafafa, white);">
            <div class="row">

                <div class=" col-md-3">
                    <div class="text-center">
                        <div class="fw-bold" style="color:rgb(46,71,165); font-size: 1rem;">REAL 12:55 PM <span
                                class="text-muted fw-light">|</span><span style="color:rgb(201,97,0);">
                                {{ $real12anterior->num1 }} {{ $real12anterior->num2 }} {{ $real12anterior->num3 }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="text-center">
                        <h6 class="fw-bold" style="color:rgb(46,71,165); font-size: 1rem;">NACIONAL 2:30 PM <span
                                class="text-muted fw-light">|</span><span style="color:rgb(201,97,0)">
                                {{ $nacionalanterior->num1 }} {{ $nacionalanterior->num2 }}
                                {{ $nacionalanterior->num3 }}</span></h6>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="text-center">
                        <h6 class="fw-bold" style="color:rgb(46,71,165); font-size: 1rem;">LEIDSA 8:55 PM <span
                                class="text-muted fw-light">|</span><span style="color:rgb(201,97,0)">
                                {{ $leidsaanterior->num1 }} {{ $leidsaanterior->num2 }} {{ $leidsaanterior->num3 }}</span>
                        </h6>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="text-center">
                        <h6 class="fw-bold" style="color:rgb(46,71,165); font-size: 1rem;">PRIMERA 12:00 PM <span
                                class="text-muted" fw-light>|</span><span style="color:rgb(201,97,0)">
                                {{ $primeraanterior->num1 }} {{ $primeraanterior->num2 }}
                                {{ $primeraanterior->num3 }}</span>
                        </h6>
                    </div>
                </div>

            </div>
        </marquee>
    </div> --}}

    <!-- TEST GIT -->

    <div class="row col-md-9 mt-1" id="marquesina">
        <div class="text-center">
            <h6 style="font-size: 1rem;" class="mb-2">Resultados Anteriores</h6>
        </div>
        <marquee loop="5" behavior="" direction=""
            style="border-bottom: 1px solid transparent; background-image: linear-gradient(to right, white, #fafafa, #fafafa, white); padding-bottom: 5px; padding-top: 5px; border-top: 1px solid transparent;
            background-image: linear-gradient(to right, white, #fafafa, #fafafa, white);">
            <div class="row">

                <div class=" col-md-3">
                    <div class="text-center">
                        <div class="fw-bold" style="color:rgb(46,71,165); font-size: 1rem;">REAL 12:55 PM <span
                                class="text-muted fw-light">|</span><span style="color:rgb(201,97,0);">
                                {{ $real12anterior->num1 }} {{ $real12anterior->num2 }} {{ $real12anterior->num3 }}</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="text-center">
                        <h6 class="fw-bold" style="color:rgb(46,71,165); font-size: 1rem;">NACIONAL 2:30 PM <span
                                class="text-muted fw-light">|</span><span style="color:rgb(201,97,0)">
                                {{ $nacionalanterior->num1 }} {{ $nacionalanterior->num2 }}
                                {{ $nacionalanterior->num3 }}</span></h6>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="text-center">
                        <h6 class="fw-bold" style="color:rgb(46,71,165); font-size: 1rem;">LEIDSA 8:55 PM <span
                                class="text-muted fw-light">|</span><span style="color:rgb(201,97,0)">
                                {{ $leidsaanterior->num1 }} {{ $leidsaanterior->num2 }} {{ $leidsaanterior->num3 }}</span>
                        </h6>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="text-center">
                        <h6 class="fw-bold" style="color:rgb(46,71,165); font-size: 1rem;">PRIMERA 12:00 PM <span
                                class="text-muted" fw-light>|</span><span style="color:rgb(201,97,0)">
                                {{ $primeraanterior->num1 }} {{ $primeraanterior->num2 }}
                                {{ $primeraanterior->num3 }}</span>
                        </h6>
                    </div>
                </div>

            </div>
        </marquee>
    </div>


    <!--Titulo Principal -->
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-9 mt-4">
            <h1 class="texto-cabecera-negro text-sm mb-0">Ve resultados <span class="texto-cabecera-verde text-sm">al
                    instante
                </span> las 24 horas del día con Sorteos RD
            </h1>
            <!--Fin Titulo Principal -->

            <!--Texto Secundario -->
            <p class="texto-secundario text-muted col-sm-12 col-md-12 col-lg-11">Dale seguimiento a todas las loterías del
                mundo con resultados al instante de forma segura y confiable aumentando la oportunidad de cumplir tus
                sueños!.
            </p>
            <!--Fin Texto Secundario -->
        </div>

        <div class="col-sm-12 col-md-12 col-lg-3"><img src="{{ asset('img/graficobolosmonedas.png') }}" alt=""
                class="grafico-bolos-monedas w-240 hide-on-med">
        </div>
    </div>



    <div class="position-relative">


        <div class="publicidad-1 position-absolute top-0 end-0">

            <img src="{{ asset('img/ad.png') }}" alt="">

        </div>
        <!-- End Card -->
    </div>

    @foreach ($real12pm as $real12)
    @endforeach
    @foreach ($nacional230pm as $nacional230)
    @endforeach
    @foreach ($nacional850pm as $nacional850)
    @endforeach
    @foreach ($king1230pm as $king1230)
    @endforeach
    @foreach ($king730pm as $king730)
    @endforeach
    @foreach ($leidsa as $leids)
    @endforeach
    @foreach ($lotedom as $lotedo)
    @endforeach
    @foreach ($quinielalotedom as $quinielalotedo)
    @endforeach

    @foreach ($primera12pm as $primera12)
    @endforeach
    @foreach ($primera8pm as $primera8)
    @endforeach
    @foreach ($loteka as $lotek)
    @endforeach
    @foreach ($lasuerte1230pm as $lasuerte1230)
    @endforeach
    @foreach ($lasuerte6pm as $lasuerte6)
    @endforeach
    @foreach ($newyork230pm as $newyork230)
    @endforeach
    @foreach ($newyork1030pm as $newyork1030)
    @endforeach
    @foreach ($florida130pm as $florida130)
    @endforeach
    @foreach ($florida940pm as $florida940)
    @endforeach


    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
    @if (Carbon\Carbon::parse($real12->created_at)->format('Y-m-d') == $fechaResultado)
        <!-- bolos -->

        <!-- Colocar aqui codigo de los bolos actualizados -->

        <!-- Fin bolos -->
    @else
        <!-- bolos -->

        <!-- Colocar aqui codigo de los bolos no actualizados -->

        <!-- Fin bolos -->
    @endif




    <!--Cards Resultados Loterias -->
    <div class="row col-sm-12 col-md-10 col-lg-9  justify-content-center">


        <!-- Card Loto Real 12:55 PM-->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 380px; !important">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>Lotería Real</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    brightness_high
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cuerpo text-center">

                    <div><img src="{{ asset('img/lotoreal.png') }}" alt="" class="logo-loteria mt-4"></div>

                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>

                    @if (Carbon\Carbon::parse($real12->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $real12->num1 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $real12->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $real12->num3 }}</div>
                            </div>

                        </div>

                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $real12->num1 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $real12->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $real12->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif


                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($real12->created_at)->format('d/m/Y') }}</p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">12:55 PM</p>

                    @if ($veinticuatroreal)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge parpadeo texto-conteo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="contador"></div>
                    @endif

                    <a href="{{ route('realsorteos') }}" class="btn btn-sm btn-green" style="margin-top:5px;">Ver
                        más
                        Sorteos</a>
                </div>

            </div>

        </div>
        <!-- End Card -->



        <!-- Card Loteria Nacional 2:30 PM-->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 380px; !important">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>Lotería Nacional</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    brightness_high
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/ganamas.png') }}" alt="" class="logo-loteria2 mt-1">
                    </div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>


                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($nacional230->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $nacional230->num1 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $nacional230->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $nacional230->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->

                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $nacional230->num1 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $nacional230->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $nacional230->num3 }}</div>
                            </div>

                        </div>

                        <!-- Fin bolos -->
                    @endif



                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($nacional230->created_at)->format('d/m/Y') }}</p>
                    </p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">2:30 PM</p>


                    @if ($veinticuatronacional)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="nacional230"></div>
                    @endif
                    <!--<a href="#" class="btn btn-sm btn-purple" style="margin-top:-18px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Resultados</a>-->
                    <a href="{{ route('nacionalsorteos') }}" class="btn btn-sm btn-green" style="margin-top: 5px;">Ver
                        más
                        Sorteos</a>
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card Loteria Nacional 8:50 PM-->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 380px; !important">
                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>Lotería Nacional</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    dark_mode
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cuerpo text-center">

                    <div><img src="{{ asset('img/loterianacional.png') }}" alt="" class="logo-loteria mt-4">
                    </div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>


                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($nacional850->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $nacional850->num1 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $nacional850->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $nacional850->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $nacional850->num1 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $nacional850->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $nacional850->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif

                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($nacional850->created_at)->format('d/m/Y') }}</p>
                    </p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">8:50 PM</p>

                    @if ($veinticuatronacional850)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="nacional850"></div>
                    @endif

                    <a href= "{{ route('billetesnacional.index') }}" class="btn btn-sm btn-green"
                        style="margin-top: 5px;">Ver más Resultados</a>
                    {{-- <!--<a href="#" class="btn btn-sm btn-green" style="margin-top:-0.5px;">Ver más 
                                                                                                                                                                    Sorteos</a>--> --}}
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 380px; !important">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>King Lottery</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    brightness_high
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/kinglottery.png') }}" alt="" class="logo-loteria mt-4"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>
                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($king1230->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->

                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $king1230->num1_partial }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $king1230->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $king1230->num3 }}</div>
                            </div>

                        </div>

                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->


                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $king1230->num1_partial }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $king1230->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $king1230->num3 }}</div>
                            </div>

                        </div>

                        <!-- Fin bolos -->
                    @endif

                    <!-- Fin bolos -->

                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($king1230->created_at)->format('d/m/Y') }}</p>
                    </p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">12:30 PM</p>
                    @if ($veinticuatroking1230)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                             <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="king1230"></div>
                    @endif
                    <!--<a href="#" class="btn btn-sm btn-purple" style="margin-top:-18px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Resultados</a>-->
                    <a href="{{ route('resultadosKingLottery') }}" class="btn btn-sm btn-green"
                        style="margin-top: 5px;">Ver más
                        Sorteos</a>
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 380px; !important">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>King Lottery</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    dark_mode
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/kinglottery.png') }}" alt="" class="logo-loteria mt-4"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>

                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($king730->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->


                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $king730->num1_partial }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $king730->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $king730->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->

                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $king730->num1_partial }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $king730->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $king730->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->

                        <!-- Fin bolos -->
                    @endif


                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($king730->created_at)->format('d/m/Y') }}</p>
                    </p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">7:30 PM</p>
                    @if ($veinticuatroking730)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="king730"></div>
                    @endif

                    <a href="{{ route('resultadosKingLotterynoche') }}" class="btn btn-sm btn-green"
                        style="margin-top: 5px;">Ver más
                        Sorteos</a>
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 380px; !important">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>Leidsa</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    dark_mode
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/leidsa.png') }}" alt="" class="logo-loteria mt-4"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>
                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($leids->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $leids->num1 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $leids->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $leids->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $leids->num1 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $leids->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $leids->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif

                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($leids->created_at)->format('d/m/Y') }}</p>
                    </p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">8:55PM Lun/Sab. Dom. 3:55PM
                    </p>
                    @if ($veinticuatroleids)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="leids"></div>
                    @endif
                    <!--<a href="#" class="btn btn-sm btn-purple" style="margin-top:-18px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Resultados</a>-->
                    <a href="{{ route('sorteosleidsa') }}" class="btn btn-sm btn-green" style="margin-top: 5px;">Ver
                        más
                        Sorteos</a>
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 380px; !important">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>Lotedom</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    brightness_high
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/lotedom.png') }}" alt="" class="logo-loteria mt-4"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>

                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($fechaquinielalotedom->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $quinielalotedom->num1 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $quinielalotedom->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $quinielalotedom->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $quinielalotedom->num1 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $quinielalotedom->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $quinielalotedom->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif

                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($fechaquinielalotedom->created_at)->format('d/m/Y') }}</p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">5:55PM
                    </p>
                    @if ($veinticuatrofechaquinielalotedom)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="fechaquinielalotedom1"></div>
                    @endif
                    <!-- <a href="#" class="btn btn-sm btn-purple" style="margin-top:-18px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Resultados</a>-->
                    <a href="{{ route('sorteoslotedom') }}" class="btn btn-sm btn-green" style="margin-top: 5px;">Ver
                        más
                        Sorteos</a>
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 340px; !important">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>La Primera</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    brightness_high
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/primera.png') }}" alt="" class="logo-loteria mt-4"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>
                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($primera12->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $primera12->num1 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $primera12->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $primera12->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $primera12->num1 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $primera12->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $primera12->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif

                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($primera12->created_at)->format('d/m/Y') }}</p>
                    </p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">12:00 PM</p>
                    @if ($veinticuatroprimera12)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="primera12"></div>
                    @endif
                    <!--<a href="#" class="btn btn-sm btn-purple" style="margin-top:-18px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Resultados</a>-->
                    <!--<a href="#" class="btn btn-sm btn-green" style="margin-top:-0.5px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Sorteos</a>-->
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 380px; !important">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>La Primera</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    dark_mode
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/primera.png') }}" alt="" class="logo-loteria mt-4"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>

                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($primera8->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $primera8->num1 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $primera8->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $primera8->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $primera8->num1 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $primera8->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $primera8->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif


                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($primera8->created_at)->format('d/m/Y') }}</p>
                    </p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">8:00 PM</p>
                    @if ($veinticuatroprimera8)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="primera8"></div>
                    @endif
                    <!--  <a href="#" class="btn btn-sm btn-purple" style="margin-top:-18px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Resultados</a> -->
                    <a href="{{ route('resultadosprimera') }}" class="btn btn-sm btn-green" style="margin-top: 5px;">Ver
                        más
                        Sorteos</a>
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>Loteka</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    dark_mode
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/loteka.png') }}" alt="" class="logo-loteria mt-4"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>

                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($lotek->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lotek->num1 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lotek->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lotek->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lotek->num1 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lotek->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lotek->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif


                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($lotek->created_at)->format('d/m/Y') }}</p>
                    </p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">7:55PM
                    </p>

                    @if ($veinticuatrolotek)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="lotek"></div>
                    @endif
                    <!-- <a href="#" class="btn btn-sm btn-purple" style="margin-top:-18px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Resultados</a> -->
                    <a href="{{ route('resultadosloteka') }}" class="btn btn-sm btn-green" style="margin-top: 5px;">Ver
                        más
                        Sorteos</a>
                </div>

            </div>

        </div>
        <!-- End Card -->


        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 330px; !important">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>La Suerte</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    brightness_high
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/lasuerte.png') }}" alt="" class="logo-loteria"
                            style="margin-top:45px;"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem; margin-top:30px;">Resultados</p>


                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($lasuerte1230->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lasuerte1230->num1 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lasuerte1230->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lasuerte1230->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lasuerte1230->num1 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lasuerte1230->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lasuerte1230->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif


                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($lasuerte1230->created_at)->format('d/m/Y') }}</p>
                    </p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">12:30PM
                    </p>
                    @if ($veinticuatrolasuerte1230)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="lasuerte1230"></div>
                    @endif
                    <!-- <a href="#" class="btn btn-sm btn-purple" style="margin-top:20px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Resultados</a> -->

                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 340px;">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>La Suerte</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    dark_mode
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/lasuerte.png') }}" alt="" class="logo-loteria"
                            style="margin-top:45px;"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>


                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($lasuerte6->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lasuerte6->num1 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lasuerte6->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lasuerte6->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lasuerte6->num1 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lasuerte6->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $lasuerte6->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif


                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($lasuerte6->created_at)->format('d/m/Y') }}</p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">6:00 PM</p>

                    @if ($veinticuatrolasuerte6)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="lasuerte6"></div>
                    @endif
                    <!-- <a href="#" class="btn btn-sm btn-purple" style="margin-top:-18px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             Resultados</a>-->
                    <!--<a href="#" class="btn btn-sm btn-green" style="margin-top:-0.5px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Sorteos</a>-->
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 340px;">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>New York Lottery</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    brightness_high
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cuerpo text-center">

                    <div><img src="{{ asset('img/newyork.png') }}" alt="" class="logo-loteria mt-4"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>

                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($newyork230->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $newyork230->num1_partial }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $newyork230->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $newyork230->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $newyork230->num1_partial }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $newyork230->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $newyork230->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif

                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($newyork230->created_at)->format('d/m/Y') }}</p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">2:30 PM</p>

                    @if ($veinticuatronewyork230)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="newyork230"></div>
                    @endif
                    <!-- <a href="#" class="btn btn-sm btn-purple" style="margin-top:-18px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Resultados</a>-->
                    <!--<a href="#" class="btn btn-sm btn-green" style="margin-top:-0.5px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Sorteos</a>-->
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 340px;">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>New York Lottery</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    dark_mode
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/newyork.png') }}" alt="" class="logo-loteria mt-4"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>


                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($newyork1030->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $newyork1030->num1_partial }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $newyork1030->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $newyork1030->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $newyork1030->num1_partial }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $newyork1030->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $newyork1030->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif




                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($newyork1030->created_at)->format('d/m/Y') }}</p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">10:30PM</p>

                    @if ($veinticuatronewyork1030)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo  parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="newyork1030"></div>
                    @endif
                    <!--<a href="#" class="btn btn-sm btn-purple" style="margin-top:-18px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Resultados</a>-->
                    <!--<a href="#" class="btn btn-sm btn-green" style="margin-top:-0.5px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Sorteos</a>-->
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 340px;">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>Florida Lottery</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    brightness_high
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/florida.png') }}" alt="" class="logo-loteria mt-4"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>


                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($florida130->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $florida130->num1_partial}}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $florida130->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $florida130->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $florida130->num1_partial}}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $florida130->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $florida130->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif





                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($florida130->created_at)->format('d/m/Y') }}</p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;"> 1:30PM
                    </p>

                    @if ($veinticuatroflorida130)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="florida130"></div>
                    @endif
                    <!--<a href="#" class="btn btn-sm btn-purple" style="margin-top:-18px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Resultados</a>-->
                    <!--<a href="#" class="btn btn-sm btn-green" style="margin-top:-0.5px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Sorteos</a>-->
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 340px;">

                <div class="card-titulo">
                    <div class="row" style="margin-left:1px;">
                        <div class="col-8">
                            <!-- Contenido del primer div -->
                            <div class="text-nowrap p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <h6>Florida Lottery</h6>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Contenido del segundo div -->
                            <div class="p-2"> <!-- Agregado 'p-2' para añadir un pequeño relleno -->
                                <span class="material-symbols-outlined">
                                    dark_mode
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/florida.png') }}" alt="" class="logo-loteria mt-4"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>

                    <!-- CODIGO A REUTILIZAR PARA EL ESTATUS DE LOS BOLOS ACTUALIZADOS Y NO ACTUALIZADOS-->
                    @if (Carbon\Carbon::parse($florida940->created_at)->format('Y-m-d') == $fechaResultado)
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $florida940->num1_partial }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $florida940->num2 }}</div>
                            </div>

                            <div class="bolito d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $florida940->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @else
                        <!-- bolos -->
                        <div class="bolos-resultados d-flex justify-content-center">
                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $florida940->num1_partial }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $florida940->num2 }}</div>
                            </div>

                            <div class="bolito-noactualizado d-flex justify-content-center align-items-center">
                                <div class="numero">{{ $florida940->num3 }}</div>
                            </div>

                        </div>
                        <!-- Fin bolos -->
                    @endif

                    <p class="fw-bold mt-2" style="font-size:0.9rem;">
                        {{ Carbon\Carbon::parse($florida940->created_at)->format('d/m/Y') }}</p>
                    <p class="text-muted" style="margin-top:-18px; font-size:0.9rem;">10:50 PM
                    </p>
                    @if ($veinticuatroflorida940)
                        <h6 style="margin-top: -10px">Próximo Sorteo</h6>
                        <div class="badge texto-conteo  parpadeo conteoregresivo" id="">
                            <div class="preloader-container">
                                <div class="preloader"></div>
                            </div>
                            <a href="" style="color:white">Actualizando...</a></div>
                    @else
                        <h6 style="margin-top: -10px">Próximo sorteo</h6>
                        <div class="badge texto-conteo conteoregresivo" id="florida940"></div>
                    @endif
                    <!-- <a href="#" class="btn btn-sm btn-purple" style="margin-top:-18px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                Resultados</a>-->
                    <!-- <a href="#" class="btn btn-sm btn-green" style="margin-top:-0.5px;">Ver más
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    Sorteos</a>-->
                </div>

            </div>

        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="col lotterycards">
            <div class="lottery-card mb-3 shadow" style="height: 220px !important">

                <div class="card-titulo text-center d-flex justify-content-center align-items-center">
                    <h6 class="mt-2">Anguilla Lottery</h6>
                </div>
                <div class="cuerpo text-center">


                    <div><img src="{{ asset('img/anguila.png') }}" alt="" class="logo-loteria mt-4"></div>
                    <p class="no-sorteos text-muted mt-2" style="font-size:0.9rem">Resultados</p>

                    <!-- bolos                                                                                                                                                                                                                                           <div class="bolos-resultados d-flex justify-content-center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        FIN-->


                    <p class="text-muted" style="margin-top:50px; font-size:0.9rem;">
                    </p>

                    <a href="{{ route('sorteosanguila') }}" class="btn btn-sm btn-green" style="margin-top:-30px;">Ver
                        más
                        Sorteos</a>

                </div>

            </div>


        </div>
        <!-- End Card -->

        <!-- Publicidad -->

    </div>

    
        <style>
            /* Estilos del preloader */
            .preloader {
                display: inline-block;
                width: 20px;
                height: 20px;
                border: 4px solid rgba(255, 255, 255, 0.3);
                border-radius: 50%;
                border-top-color: #fff;
                animation: girar 1s linear infinite;
            }
          
            /* Estilos del contenedor */
            .badge.parpadeo {
                background-color: rgb(190, 60, 60); /* Color de fondo rojo claro */
                padding: 5px; /* Agregamos un poco de espacio alrededor del texto */
                display: inline-block; /* Asegura que el contenedor solo ocupe el espacio necesario */
            }
            
            /* Estilos del preloader dentro del contenedor */
            .preloader-container {
                display: inline-block;
                vertical-align: middle; /* Alinea verticalmente el preloader con el texto */
                margin-right: 5px; /* Espacio entre el preloader y el texto */
            }
            
            /* Animación para girar el preloader */
            @keyframes girar {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
            </style>

@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/luxon/2.0.1/luxon.min.js"></script>
{{-- incluyendo el archovo proximo sorteo para lo del contador regresvo  --}}
{{-- <script src="{{ asset('js/contador.js') }}"></script> --}}



<script>
    // Función para refrescar la página
    function refrescarPagina() {
        location.reload(); // Recarga la página
    }
    
    // Llama a la función para refrescar cada 5 minutos (300,000 milisegundos)
    setInterval(refrescarPagina, 40000);
    </script>

     {{-- estilo para el parpadeo cuando el bolo este actualizado --}}
    <style>
        @keyframes parpadeo {
        0% { background-color: transparent; }
        50% { background-color: rgb(190, 60, 60); }
        100% { background-color: transparent; }
    }
    </style>


<script>
    
    function iniciarContador(horaCreacion, elementoContador) {
        var proximaHora = luxon.DateTime.fromFormat(horaCreacion, 'HH:mm:ss', {
            zone: 'America/Santo_Domingo'
        });

        var intervalo = setInterval(function() {
            var ahora = luxon.DateTime.now().setZone('America/Santo_Domingo');

            if (ahora > proximaHora) {
                proximaHora = proximaHora.plus({
                    days: 1
                });
            }

            var diferencia = proximaHora.diff(ahora, ['days', 'hours', 'minutes', 'seconds']);

            // Convertir los segundos a cadena y luego obtener solo la parte entera
            var segundosEnteros = diferencia.seconds.toString().split('.')[0];
            diferencia.seconds = parseInt(segundosEnteros);

            var contadorTexto = '';

            if (diferencia.days > 0) {
                contadorTexto += diferencia.days + "d ";
            }
            if (diferencia.hours > 0) {
                contadorTexto += diferencia.hours + "h ";
            }
            if (diferencia.minutes > 0) {
                contadorTexto += diferencia.minutes + "m ";
            }
            if (diferencia.seconds > 0) {
                contadorTexto += parseInt(diferencia.seconds) + "s ";
            }
            document.getElementById(elementoContador).innerHTML = contadorTexto;


            
            if ((diferencia.hours === 23) && (parseInt(diferencia.minutes) > 55)) {
                clearInterval(intervalo);
                // Actualizar la página
                // location.reload();
                document.getElementById(elementoContador).innerHTML = 'Actualizado';
                  // Actualizar el texto y el color del letrero
                var elementos = document.querySelectorAll(".conteoregresivo");
                elementos.forEach(function(elemento) {
                    if (elemento.innerHTML.trim() === 'Actualizado') { // Trim para eliminar espacios en blanco alrededor del texto
                        elemento.style.backgroundColor = "rgb(190, 60, 60)"; // Cambiar el color de fondo a amarillo
                        elemento.style.animation = "parpadeo 1s infinite"; // Aplicar la animación de parpadeo
    
                    }
                });
                    }

            // location.reload();
            // Verificar si la diferencia es cero para detener el intervalo
// }

        }, 1000);

        return intervalo;
    }



    // Ejemplo de uso
    // var intervalo = iniciarContador('23:22:00', 'contador', 10, 10 ); // Empieza a contar desde las 10:00:00

    // //CODIGO PARA LA LOTERIA REAL PARA LAS 12 
    iniciarContador("{{ date('H:i:s', strtotime($real12->created_at)) }}", "contador");

    // CODIGO PARA LA NACIONAL DE LAS 2 30
    iniciarContador("{{ date('H:i:s', strtotime($nacional230->created_at)) }}", "nacional230");

    // // CODIGO PARA LA NACIONAL DE LAS 8 50
    iniciarContador("{{ date('H:i:s', strtotime($nacional850->created_at)) }}", "nacional850");

    // // CODIGO PARA King lotery 12 30
    iniciarContador("{{ date('H:i:s', strtotime($king1230->created_at)) }}", "king1230");

    // // CODIGO PARA King lotery 7 30
    iniciarContador("{{ date('H:i:s', strtotime($king730->created_at)) }}", "king730");

    // // CODIGO PARA leidsa
    iniciarContador("{{ date('H:i:s', strtotime($leids->created_at)) }}", "leids");

    // // CODIGO PARA quiniela lotedom
    iniciarContador("{{ date('H:i:s', strtotime($fechaquinielalotedom->created_at)) }}", "fechaquinielalotedom1");




    // // CODIGO PARA primera12
    iniciarContador("{{ date('H:i:s', strtotime($primera12->created_at)) }}", "primera12");

    // // CODIGO PARA primera8
    iniciarContador("{{ date('H:i:s', strtotime($primera8->created_at)) }}", "primera8");

    // // CODIGO PARA LOTEKA 
    iniciarContador("{{ date('H:i:s', strtotime($lotek->created_at)) }}", "lotek");

    // // CODIGO PARA LA SUERTE 
    iniciarContador("{{ date('H:i:s', strtotime($lasuerte1230->created_at)) }}", "lasuerte1230");

    // // CODIGO PARA LA SUERTE 6
    iniciarContador("{{ date('H:i:s', strtotime($lasuerte6->created_at)) }}", "lasuerte6");

    // // CODIGO PARA newyork 2 30
    iniciarContador("{{ date('H:i:s', strtotime($newyork230->created_at)) }}", "newyork230");

    // // CODIGO PARA newyork 10 30
    iniciarContador("{{ date('H:i:s', strtotime($newyork1030->created_at)) }}", "newyork1030");

    // // CODIGO PARA florida 1 30
    iniciarContador("{{ date('H:i:s', strtotime($florida130->created_at)) }}", "florida130");

    // // CODIGO PARA dlorida 9 40
    iniciarContador("{{ date('H:i:s', strtotime($florida940->created_at)) }}", "florida940");
</script>
