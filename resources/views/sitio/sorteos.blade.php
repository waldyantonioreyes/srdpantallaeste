@extends('layout.app')

@section('title', 'Inicio')

@section('content')


    <div class="row">

        <div class="position-relative">

            <div class="publicidad-1 position-absolute top-0 end-0 mt-4" style="margin-top: 60px !important;">

                <img src="{{ asset('img/ad.png') }}" alt="" class="mt-4">

            </div>
            <!-- End Card -->
        </div>
        <div class="col mt-4">

            <div class="envivo-header d-flex align-items-center">
                <h1 class="loterias-envivo">LOTERÍAS EN VIVO</h1>

                <div class="record-dot"></div>
            </div>


            <div>
                <iframe class="video-vivo" width="635" height="416" src="https://www.youtube.com/embed/KwC9tZqzJ7c">
                </iframe>
            </div>
            <!--Texto Secundario -->
            <p class="texto-secundario text-muted col-sm-12 col-md-12 col-lg-11">Dale seguimiento a todas las loterías
                del
                mundo con resultados al instante de forma segura y confiable.
            </p>
            <!--Fin Texto Secundario -->

        </div>

        <div class="col mt-4">

            <h1 class="texto-sorteos-negro text-sm mb-0">Ve resultados <span class="texto-sorteos-verde text-sm">al
                    instante
                </span> las 24 horas del día con Sorteos RD
            </h1>

            <!--Texto Secundario -->
            <p class="texto-secundario text-muted col-sm-12 col-md-12 col-lg-11">Dale seguimiento a todas las loterías
                del
                mundo con resultados al instante de forma segura y confiable.
            </p>
            <!--Fin Texto Secundario -->

        </div>

        <div class="col-sm-12 col-md-12 col-lg-3"><img src="" alt=""
                class="grafico-bolos-monedas w-240 hide-on-med">
        </div>

    </div>




    <div class="col">

        <div class="" style="height: 250px"></div>

    </div>



@endsection
