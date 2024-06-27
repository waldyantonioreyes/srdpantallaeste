<!-- Sorteo -->
<div class="sorteo-info">
    <h5 class="card-title">{{ $titulo }}</h5>

    <div class="text-center col-lg-8">
        <div class="row">

            <div class="col">
                <div class="logo-sorteoinfo"><img src="{{ asset('img/' . $imagen) }}" alt=""
                        style="width:150px; margin-top:-10px; margin-left:20px;"></div>
            </div>

            <div class="col">
                <div class="card-resultado">
                    <h5 class="text-center mt-2">Resultados</h5>
                    <!-- bolos -->
                    <div class="bolos-resultados d-flex mx-4" style="margin-left:30px !important;">
                        @foreach (json_decode($numeros) as $numero)
                            <div class="col">
                                <div class="bolito d-flex justify-content-center align-items-center">
                                    <div class="numero">{{ $numero }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- Fin bolos -->

                <p class="text-muted mt-2 text-center" style="font-size:0.9rem;">
                    {{ $fecha }}</p>
            </div>
        </div>
    </div>
</div>
<!-- Fin Sorteo -->
