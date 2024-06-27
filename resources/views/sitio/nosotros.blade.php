@extends('layout.app')

@section('title', 'Inicio')

@section('content')


    <!--Titulo Principal -->
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-9 mt-4">
            <h1 class="texto-cabecera-negro text-sm mb-0">Ve resultados <span class="texto-cabecera-verde text-sm">al instante
                </span> las 24 horas del día con Sorteos RD
            </h1>
            <!--Fin Titulo Principal -->

            <!--Texto Secundario -->
            <p class="texto-secundario text-muted col-sm-12 col-md-12 col-lg-11">Dale seguimiento a todas las loterías del
                mundo con resultados al instante de forma segura y confiable aumentando la oportunidad de cumplir tus
                sueños!.
            </p>
            <br>
            <!--Fin Texto Secundario -->
        </div>

        <div class="col-sm-12 col-md-12 col-lg-3"><img src="{{ asset('img/logosorteos.png') }}" alt=""
                class="grafico-bolos-monedas hide-on-med" style="width: 270px; margin-top:60px;">
        </div>
    </div>


    <div class="position-relative">


        <div class="publicidad-1 position-absolute top-0 end-0" style="margin-top: -20px">

            <img src="{{ asset('img/ad.png') }}" alt="">

        </div>
        <!-- End Card -->
    </div>

    <!-- Loterias que se muestran -->
    <div class="row">
        <div class="col-sm-10 col-md-10 col-lg-12">
            <!--Texto Secundario -->
            <p class="texto-secundario text-muted col-sm-10 col-md-12 col-lg-10" style="margin-top: -20px">Sorteos RD es una
                página web que se
                especializa en resultados de loterías de la República Dominicana y Estados Unidos. Estamos establecidos y
                orgullosamente sirviendo desde Noviembre del año 2015, dando resultados positivos, creando oportunidades y
                llevando suerte a todos nuestros suscriptores.
            </p>

            <div class="row g-0 position-relative">
                <div class="col-sm-4 col-md-6 col-lg-4 mb-md-0 p-md-4">
                    <img src="{{ asset('img/laptop.png') }}" class="w-100" alt="...">
                </div>
                <div class="col-md-6 p-4 ps-md-0">
                    <h5 class="mt-0">Listado de loterías que se muestran</h5>

                    <ul>
                        <li>-Loteria Real | 1 Sorteos</li>
                        <li>-Loteria Nacional | 2 Sorteos</li>
                        <li>-King Lottery | 2 Sorteos</li>
                        <li>-Leidsa | 1 Sorteo</li>
                        <li>-Lotedom | 1 Sorteo</li>
                        <li>-La Primera | 2 Sorteo</li>
                        <li>-Loteka | 1 Sorteo</li>
                        <li>-La Suerte Dominicana | 2 Sorteos</li>
                        <li>-New York Lottery | 2 Sorteo</li>
                        <li>-Florida Lottery | 2 Sorteo</li>

                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- Mision y valores -->
    <div class="row">

        <div class="col">

            <h5 class="fw-bold mt-4">Visión</h5>
            <p class="texto-secundario text-muted col-sm-10 col-md-12 col-lg-9">
                Visión de Sorteos RD Ser líderes facilitadores en el seguimiento de las loterías a nivel mundial, sirviendo
                a cada momento a nuestros fieles seguidores y el público de nuevo ingreso que deposita la confianza en
                nuestro servicio Misión inmediata Promover la confianza en las loterías Dominicanas y de todo el mundo,
                entregando resultados de crecimiento positivo para aquellos que le dan el correcto uso a nuestra plataforma
                Valores Estamos comprometivos con la verdad y la transparencia en cada servicio que ofrecemos
            </p>

            <h5 class="fw-bold mt-4">Misión</h5>
            <p class="texto-secundario text-muted col-sm-10 col-md-12 col-lg-9">
                Visión de Sorteos RD Ser líderes facilitadores en el seguimiento de las loterías a nivel mundial, sirviendo
                a cada momento a nuestros fieles seguidores y el público de nuevo ingreso que deposita la confianza en
                nuestro servicio Misión inmediata Promover la confianza en las loterías Dominicanas y de todo el mundo,
                entregando resultados de crecimiento positivo para aquellos que le dan el correcto uso a nuestra plataforma
                Valores Estamos comprometivos con la verdad y la transparencia en cada servicio que ofrecemos
            </p>

            <h5 class="fw-bold mt-4">Valores</h5>
            <p class="texto-secundario text-muted col-sm-10 col-md-12 col-lg-9 mb-4">
                Visión de Sorteos RD Ser líderes facilitadores en el seguimiento de las loterías a nivel mundial, sirviendo
                a cada momento a nuestros fieles seguidores y el público de nuevo ingreso que deposita la confianza en
                nuestro servicio Misión inmediata Promover la confianza en las loterías Dominicanas y de todo el mundo,
                entregando resultados de crecimiento positivo para aquellos que le dan el correcto uso a nuestra plataforma
                Valores Estamos comprometivos con la verdad y la transparencia en cada servicio que ofrecemos
            </p>
        </div>
    </div>


    <!-- Publicidad -->

    </div>


@endsection
