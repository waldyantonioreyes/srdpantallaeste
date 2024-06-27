@extends('layoutlogin.app')

@section('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8 mt-4">
                <div class="logo text-center mb-4 mt-3 offset-1 mr-1">
                    <img src="{{ asset('img/logosorteos.png') }}" style="width:250px;" class="card-img-top" alt="Lotería Logo">
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf


                    <div class="row mb-3">

                        <label for="email" class="col-md-4 form col-form-label text-md-end">{{ __('Email') }}</label>

                        <div class="col-md-5">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email"
                                autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                        <div class="col-md-5">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="Contraseña">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordarme') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary col-7">
                                {{ __('Iniciar Sesión') }}
                            </button>

                            @if (Route::has('password.request'))
                                <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            {{ __('Olvidaste tu contraseña?') }}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </a>-->
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<script>
    function alertainicio() {
        Swal.fire({
            title: "Advertencia!",
            text: "Estás accediendo al entorno en tiempo real, los resultados publicados saldrán al aire de inmediato. Verifica cada acción que realices para mantener la integridad.",
            icon: "warning",
            showCancelButton: false,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Entiendo y Acepto!"
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: "De Acuerdo!",
                    text: "Aceptaste los términos. Ingresa tu usuario y contraseña.",
                    icon: "success"
                });
            }
        });

    }

    //window.onload = alertainicio;
</script>
