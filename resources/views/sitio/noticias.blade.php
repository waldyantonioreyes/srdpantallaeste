@extends('layout.app')

@section('title', 'Inicio')

@section('content')


    <!--Titulo Principal -->
    <div class="row">


        <div class="position-relative">


            <div class="publicidad-1 position-absolute top-0 end-0 mt-4">

                <img src="{{ asset('img/ad.png') }}" alt="" class="mt-4">

            </div>
            <!-- End Card -->
        </div>

        <div class="col-sm-12 col-md-12 col-lg-9 mt-4">

            <h1 class="texto-noticias-negro col-md-12 text-sm mb-4">Noticias relevantes de todo mundo sobre <span
                    class="texto-noticias-verde text-sm">loterías
                </span> y sus ventajas
            </h1>
            <!--Fin Titulo Principal -->



        </div>

        <!--Texto Noticias -->
        <div class="col-sm-12 col-lg-10">

            @foreach ($noticias as $noticia)
                <div class="row mt-2">
                    <div class="col-md-4">
                        <img src="{{ $noticia->imagen }}" class="img-fluid mt-2" alt="Imagen de la noticia">
                    </div>
                    <div class="col-md-8">
                        <h4>{{ $noticia->titulo }}</h4>
                        <p>{{ $noticia->texto }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="invisible" style="height:200px;"></div>



@endsection
