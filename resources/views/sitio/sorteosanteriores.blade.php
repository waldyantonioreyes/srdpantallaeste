@extends('layout.app')

@section('title', 'Sorteos Anteriores')

@section('content')



    @foreach ($resultadosloterias as $resultadosloteria)
    @endforeach
    



    <div class="card col-md-12 d-flex justify-content-center align-items-center text-dark bg-light mb-3"
        style="margin-top:30px">
        <div class="card-header col-md-12 bg-success text-white fw-bold fs-5" style="background-color:#2e47a5 !important">
            Resultados Anteriores</div>

        <form action="{{ route('resultadosloteriasanteriores.index') }}" method="GET" class="form-inline my-2 my-lg-0">
            @csrf

            <div class="row mt-3">
                <div class="col-md-6">
                    <input id="datepicker" class="form-control" name="fecha" placeholder="Introducir Fecha" required />
                    <script>
                        $('#datepicker').datepicker({
                            uiLibrary: 'bootstrap5',
                            format: 'yyyy-mm-dd' // Formato de fecha deseado
                        });
                    </script>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <select class="form-select" aria-label="Default select example" name="q" id="mySelect"
                            required>
                            <option value="" selected>Seleccionar Lotería</option>
                            @foreach ($resultadosloterias as $resultadosloteria)
                                <option value="{{ $resultadosloteria->id }}">{{ $resultadosloteria->descripcion }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary ml-2">Consultar</button>
                    </div>
                </div>

            </div>
        </form>



        <div class="card-body">
            <div class="row">
               
                <?php
                
                $logo = '';
                
                switch ($q) {
                    case '1':
                        $logo = 'img/lotoreal.png';
                        break;
                    case '2':
                        $logo = 'img/ganamas.png';
                        break;
                    case '3':
                        $logo = 'img/loterianacional.png';
                        break;
                
                    case '4':
                        $logo = 'img/kinglottery.png';
                        break;
                
                    case '5':
                        $logo = 'img/kinglottery.png';
                        break;
                
                    case '6':
                        $logo = 'img/leidsa.png';
                        break;
                
                    case '7':
                        $logo = 'img/lotedom.png';
                        break;
                
                    case '8':
                        $logo = 'img/primera.png';
                        break;
                
                    case '9':
                        $logo = 'img/primera.png';
                        break;
                
                    case '10':
                        $logo = 'img/loteka.png';
                        break;
                
                    case '11':
                        $logo = 'img/lasuerte.png';
                        break;
                
                    case '12':
                        $logo = 'img/lasuerte.png';
                        break;
                
                    case '13':
                        $logo = 'img/newyork.png';
                        break;
                
                    case '14':
                        $logo = 'img/newyork.png';
                        break;
                
                    case '15':
                        $logo = 'img/florida.png';
                        break;
                
                    case '16':
                        $logo = 'img/florida.png';
                        break;
                
                    case '18':
                        $logo = 'img/lotopoolreal.png';
                        break;
                
                    case '19':
                        $logo = 'img/pega4real.png';
                        break;
                
                    case '21':
                        $logo = 'img/lotoreal.png';
                        break;
                
                    case '22':
                        $logo = 'img/nuevayolreal.png';
                        break;
                
                    case '23':
                        $logo = 'img/tufechareal.png';
                        break;
                
                    case '24':
                        $logo = 'img/juegamaspega.png';
                        break;
                
                    case '29':
                        $logo = 'img/quemaito.png';
                        break;
                
                    case '30':
                        $logo = 'img/superpale.png';
                        break;
                
                    case '22':
                        $logo = 'img/nuevayolreal.png';
                        break;
                
                    case '31':
                        $logo = 'img/agarra4.png';
                        break;
                
                    case '32':
                        $logo = 'img/pega3mas.png';
                        break;
                
                    case '33':
                        $logo = 'img/lotopool.png';
                        break;
                
                    case '34':
                        $logo = 'img/superkino.png';
                        break;
                
                    case '35':
                        $logo = 'img/loto.png';
                        break;
                
                    case '36':
                        $logo = 'img/quinielalotedom.png';
                        break;
                
                    case '37':
                        $logo = 'img/loteria.png';
                        break;
                
                    case '39':
                        $logo = 'img/megachance.png';
                        break;
                
                    case '40':
                        $logo = 'img/repartidera.png';
                        break;
                
                    case '41':
                        $logo = 'img/quinielaloteka.png';
                        break;
                
                    case '42':
                        $logo = 'img/toca3.png';
                        break;
                
                    case '43':
                        $logo = 'img/quinielakinglottery.png';
                        break;
                
                    case $q >= '46' && $q <= '69':
                        $logo = 'img/anguila.png';
                        break;
                
                    // nuevo
                
                    case '71':
                        $logo = 'img/lotopoolkinglottery.jpeg';
                        break;
                    //
                
                    case '72':
                        $logo = 'img/lotopoolkinglottery.jpeg';
                        break;
                    //
                
                    case '73':
                        $logo = 'img/lotoreal1.png';
                        break;
                    //                      nuevo
                    case '74':
                        $logo = 'img/billetesdomingo.jpeg';
                        break;
                
                    default:
                        $logo = 'img/lotoreal.png';
                }
                ?>

                @if (empty($loteria))
                    <p class="text-center">Mostrando 0 Resultados</p>
                    
                @elseif ($q == 74)
                    {{-- agregue esto de aqui en adelante para que si la es el billete me imprima esta tarjeta que es del billete --}}
                    <div class="col-md-12 col-sm-12">
                        <div class="card tarjeta-loteria">
                            <div class="card-body">
                                <img src="{{ asset('img/billetesdomingo.jpeg') }}"
                                    style="width:250px !important; margin-top:1px; margin-left:-10px;" class="card-img-top"
                                    alt="Lotería Logo">
                                <h5 class="card-title text-center">Resultados de la {{ $lot->tanda }}</h5>
                                <p class="card-text bolos text-center">
                                    <span class="label" style="margin-top: 5px; margin-right: 40px">1ro</span>
                                    <span class="label" style="margin-top: 5px; margin-right: 30px">2do</span>
                                    <span class="label" style="margin-top: 5px; margin-left: 10px">3ro</span>
                                    <span class="label" style="margin-top: 5px; margin-left: 40px">Fr</span>
                                    <br>
                                    <span class="rectangulo">{{ $loteria->num1 }}</span>
                                    <span class="rectangulo">{{ $loteria->num2 }}</span>
                                    <span class="rectangulo">{{ $loteria->num3 }}</span>
                                    <span class="bolo">{{ $loteria->num4 }}</span>


                                </p>
                                <p class="card-text fw-bold text-center">
                                    {{ Carbon\Carbon::parse($fecha)->format('d/m/Y') }}</p>
                            </div>
                        </div>
                    </div>
                @elseif ($q == 43)
                    <div class="col-md-12 col-sm-6">
                        <div style="width:300px !important" class="card tarjeta-loteria text-center">
                            <div class="card-body">
                                <img src="{{ asset('img/philipsburg.jpeg') }}" class="card-img-top" alt="Lotería Logo"
                                    style="max-width: 230px; margin-bottom:6px;">
                                <h5 class="card-title text-center">Resultados de la {{ $lot->tanda }}</h5>
                                <p class="card-text bolos text-center">
                                    <span class="rectangulo">{{ $loteria->num1 }}</span>
                                    <span class="rectangulo">{{ $loteria->num2 }}</span>
                                    <span class="rectangulo">{{ $loteria->num3 }}</span>

                                </p>
                                <p class="card-text fw-bold text-center">
                                    {{ Carbon\Carbon::parse($fecha)->format('d/m/Y') }}</p>

                                <!--<p class="card-text fw-bold text-center">
                                                               Sorteo: {{ Carbon\Carbon::parse($hora->created_at)->format('g:00 A') }}
                                                               </p>-->
                            </div>
                        </div>
                    </div>
                @elseif ($q == 70)
                    <div class="col-md-12 col-sm-6">
                        <div style="width:300px !important" class="card tarjeta-loteria text-center">
                            <div class="card-body">
                                <img src="{{ asset('img/philipsburg.jpeg') }}" class="card-img-top" alt="Lotería Logo"
                                    style="max-width: 230px; margin-bottom:6px;">
                                <h5 class="card-title text-center">Resultados de la {{ $lot->tanda }}</h5>
                                <p class="card-text bolos text-center">
                                    <span class="rectangulo">{{ $loteria->num1 }}</span>
                                    <span class="rectangulo">{{ $loteria->num2 }}</span>
                                    <span class="rectangulo">{{ $loteria->num3 }}</span>

                                </p>
                                <p class="card-text fw-bold text-center">
                                    {{ Carbon\Carbon::parse($fecha)->format('d/m/Y') }}</p>

                                <!--<p class="card-text fw-bold text-center">
                                                               Sorteo: {{ Carbon\Carbon::parse($hora->created_at)->format('g:00 A') }}
                                                               </p>-->
                            </div>
                        </div>
                    </div>
                @elseif ($q == 38)
                    <div class="col-md-12 col-sm-6">
                        <div style="width:300px !important" class="card tarjeta-loteria text-center">
                            <div class="card-body">
                                <img src="{{ asset('img/lottoloteka.png') }}" class="card-img-top" alt="Lotería Logo"
                                    style="max-width: 230px; margin-bottom:6px;">
                                <h5 class="card-title text-center">Resultados de la {{ $lot->tanda }}</h5>
                                <p class="card-text bolos text-center">
                                    <span class="bolo mb-2">{{ $loteria->num1 }}</span>
                                    <span class="bolo mb-2">{{ $loteria->num2 }}</span>
                                    <span class="bolo mb-2">{{ $loteria->num3 }}</span>
                                    <span class="bolo mb-2">{{ $loteria->num4 }}</span>
                                    <span class="bolo mb-2">{{ $loteria->num5 }}</span>
                                    <span class="bolo mb-2">{{ $loteria->num6 }}</span>
                                    <span class="bolorojo mb-2">{{ $loteria->num7 }}</span>
                                    <span class="boloamarillo mb-2">{{ $loteria->num8 }}</span>

                                </p>
                                <p class="card-text fw-bold text-center">
                                    {{ Carbon\Carbon::parse($fecha)->format('d/m/Y') }}</p>

                                <!--<p class="card-text fw-bold text-center">
                                                                                   Sorteo: {{ Carbon\Carbon::parse($hora->created_at)->format('g:00 A') }}
                                                                                   </p>-->
                            </div>
                        </div>
                    </div>
                @elseif ($q == 37)
                    <div class="col-md-12 col-sm-6">
                        <div style="width:300px !important" class="card tarjeta-loteria text-center">
                            <div class="card-body">
                                <img src="{{ asset('img/loto5mas.png') }}" class="card-img-top" alt="Lotería Logo"
                                    style="max-width: 230px; margin-bottom:6px;">
                                <h5 class="card-title text-center">Resultados de la {{ $lot->tanda }}</h5>
                                <p class="card-text bolos text-center">
                                    <span class="bolo mb-1">{{ $loteria->num1 }}</span>
                                    <span class="bolo mb-1">{{ $loteria->num2 }}</span>
                                    <span class="bolo mb-1">{{ $loteria->num3 }}</span>
                                    <span class="bolo mb-1">{{ $loteria->num4 }}</span>
                                    <span class="bolo mb-1">{{ $loteria->num5 }}</span>
                                    <span class="bolo mb-1 boloazul">{{ $loteria->num6 }}</span>

                                </p>
                                <p class="card-text fw-bold text-center">
                                    {{ Carbon\Carbon::parse($fecha)->format('d/m/Y') }}</p>

                                <!--<p class="card-text fw-bold text-center">
                                                                                   Sorteo: {{ Carbon\Carbon::parse($hora->created_at)->format('g:00 A') }}
                                                                                   </p>-->
                            </div>
                        </div>
                    </div>
                @elseif ($q == 35)
                    <div class="col-md-12 col-sm-6">
                        <div style="width:300px !important" class="card tarjeta-loteria text-center">
                            <div class="card-body">
                                <img src="{{ asset('img/loto.png') }}" class="card-img-top" alt="Lotería Logo"
                                    style="max-width: 230px; margin-bottom:6px;">
                                <h5 class="card-title text-center">Resultados de la {{ $lot->tanda }}</h5>
                                <p class="card-text bolos text-center">
                                    <span class="bolo mb-1">{{ $loteria->num1 }}</span>
                                    <span class="bolo mb-1">{{ $loteria->num2 }}</span>
                                    <span class="bolo mb-1">{{ $loteria->num3 }}</span>
                                    <span class="bolo mb-1">{{ $loteria->num4 }}</span>
                                    <span class="bolo mb-1">{{ $loteria->num5 }}</span>
                                    <span class="bolo mb-1">{{ $loteria->num6 }}</span>
                                    <span class="boloazul mb-1">{{ $loteria->num7 }}</span>
                                    <span class="bolorojo mb-1">{{ $loteria->num8 }}</span>

                                </p>
                                <p class="card-text fw-bold text-center">
                                    {{ Carbon\Carbon::parse($fecha)->format('d/m/Y') }}</p>

                                <!--<p class="card-text fw-bold text-center">
                                                                                   Sorteo: {{ Carbon\Carbon::parse($hora->created_at)->format('g:00 A') }}
                                                                                   </p>-->
                            </div>
                        </div>
                    </div>
                @elseif ($q == 29)
                    <div class="col-md-12 col-sm-6">
                        <div style="width:300px !important" class="card tarjeta-loteria text-center">
                            <div class="card-body">
                                <img src="{{ asset('img/quemaito.png') }}" class="card-img-top" alt="Lotería Logo"
                                    style="max-width: 230px; margin-bottom:6px;">
                                <h5 class="card-title text-center">Resultados de la {{ $lot->tanda }}</h5>
                                <p class="card-text bolos text-center">
                                    <span class="bolorojo">{{ $loteria->num1 }}</span>

                                </p>
                                <p class="card-text fw-bold text-center">
                                    {{ Carbon\Carbon::parse($fecha)->format('d/m/Y') }}</p>

                                <!--<p class="card-text fw-bold text-center">
                                                                                   Sorteo: {{ Carbon\Carbon::parse($hora->created_at)->format('g:00 A') }}
                                                                                   </p>-->
                            </div>
                        </div>
                    </div>
                @else
              
                    <div class="col-md-12 col-sm-6">
                        <div style="width:300px !important" class="card tarjeta-loteria text-center">
                            <div class="card-body">
                                <img src="{{ asset($logo) }}" class="card-img-top" alt="Lotería Logo"
                                    style="max-width: 230px; margin-bottom:6px;">
                                <h5 class="card-title text-center">Resultados de la {{ $lot->tanda }}</h5>
                                <p class="card-text bolos text-center">
                                    

                                    @if ($loteria != null && $q != '73'){{-- aqui agregue el and si la loteria es lotoreal para que me imprima los bolos rojos  --}}
                                        @foreach ($loteria as $loteri)
                                            @if ($loteri != null)
                                                <span class="bolo">{{ $loteri }}</span>
                                            @endif
                                        @endforeach
                                    @else
                                        <span class="bolorojo">{{ $loteria->num1 }}</span>
                                        <span class="bolorojo">{{ $loteria->num2 }}</span>
                                        <span class="bolorojo">{{ $loteria->num3 }}</span>
                                        <span class="bolorojo">{{ $loteria->num4 }}</span>
                                        <span class="bolorojo">{{ $loteria->num5 }}</span>
                                        <span class="bolorojo">{{ $loteria->num6 }}</span>
                                    @endif



                                </p>
                                <p class="card-text fw-bold text-center">
                                    {{ $lot->timeday }}
                                </p>
                                <p class="card-text fw-bold text-center">
                                    {{ Carbon\Carbon::parse($fecha)->format('d/m/Y') }}</p>

                                <!--<p class="card-text fw-bold text-center">
                                                                                                                                                                                                                                    Sorteo: {{ Carbon\Carbon::parse($hora->created_at)->format('g:00 A') }}
                                                                                                                                                                                                                                </p>-->
                            </div>
                        </div>
                    </div>


                    <!-- Aquí van las otras 3 tarjetas -->
                @endif


            </div>
            <div class="row">
                <!-- Aquí van las otras 4 filas de tarjetas -->
            </div>
        </div>
    </div>




    <div class="col">

        <div class="" style="height: 500px;"></div>

    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


@endsection
