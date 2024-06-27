@extends('layout.app')

@section('title', 'Inicio')

@section('content')


    <?php
    if (isset($_POST['name'])) {
        if (!isset($_POST['g-recaptcha-response']) || empty($_POST['g-recaptcha-response'])) {
            echo 'reCAPTHCA verification failed, please try again.';
        } else {
            $secret = '6LeFMZ8pAAAAAFpNbfN1GcAvUi2W33lK34XSMi58';
    
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
            $response = json_decode($response);
    
            if ($response->success) {
                // What happens when the CAPTCHA was entered incorrectly
                echo 'Successful login.';
            } else {
                // Your code here to handle a successful verification
                echo 'reCAPTHCA verification failed, please try again.';
            }
        }
    }
    ?>


    <div class="position-relative">


        <div class="publicidad-1 position-absolute top-0 end-0" style="margin-top: 50px;">

            <img src="{{ asset('img/ad.png') }}" alt="">

        </div>
        <!-- End Card -->



    </div>



    <!--Titulo Principal -->
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-9 mt-4">
            <h1 class="texto-cabecera-negro text-sm mb-0">Ve resultados <span class="texto-cabecera-verde text-sm">al instante
                </span> las 24 horas del día con Sorteos RD
            </h1>
            <!--Fin Titulo Principal -->

            <!--Texto Secundario -->
            <p class="texto-secundario text-muted col-sm-12 col-md-12 col-lg-11">Llena nuestro formulario digital y cuéntanos
                sobre tu experiencia con nosotros, dudas, aclaraciones, negocios,
                o cualquier otra duda sobre nuestros servicios.
            </p>

            <!--Fin Texto Secundario -->
        </div>


    </div>


    <!-- Formulario de contacto-->
    @if (session('success'))
        <div id="success-message" class="alert alert-success col-3" style="display: none;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-9">
            <form method="POST" action="/contacto" id="myForm" class="myFormClass">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre Completo</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre"
                        placeholder="Nombre" minlength="3" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" minlength="3" name="email" placeholder="nombre@gmail.com"
                        id="exampleInputEmail1" required>
                </div>

                <div class="mb-3">
                    <label for="titulo" class="form-label">Título del Mensaje</label>
                    <input type="text" class="form-control" id="titulo" minlength="3" name="titulo" required>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" minlength="10" rows="3"
                        name="mensaje"></textarea required>
                                                                                    </div>
                                                                                   
                                                                                    <div class="g-recaptcha" data-sitekey="6LeFMZ8pAAAAAGMmCckdNwVX6o93zpuY-Sxkp69h"></div>
                                                                                    <button type="submit" class="btn btn-primary" name="enviar">Enviar</button>
                                                                                
                                                                            </form>
                                                                        </div>

                                                                    </div>

                                                                    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                                                <script>
                                                                    document.addEventListener('DOMContentLoaded', function() {
                                                                        var form = document.querySelector('.myFormClass');
                                                                        var errorContainer = document.querySelector('.recaptcha-error-container');

                                                                        form.addEventListener('submit', function(event) {
                                                                            var response = grecaptcha.getResponse();

                                                                            if (response.length === 0) {
                                                                                event.preventDefault();
                                                                                showError('Por favor, complete el reCAPTCHA antes de enviar el formulario.');
                                                                            }
                                                                        });

                                                                        function showError(message) {
                                                                            // Crear un elemento de error y mostrar el mensaje
                                                                            var errorElement = document.createElement('div');
                                                                            errorElement.className = 'alert alert-danger';
                                                                            errorElement.textContent = message;

                                                                            // Eliminar mensajes de error antiguos si existen
                                                                            while (errorContainer.firstChild) {
                                                                                errorContainer.removeChild(errorContainer.firstChild);
                                                                            }

                                                                            // Agregar el nuevo mensaje de error al contenedor
                                                                            errorContainer.appendChild(errorElement);
                                                                        }
                                                                    });
                                                                </script>

                                                                <style>
                                                                    .recaptcha-error-container {
                                                                        margin-top: 10px;
                                                                        max-width: 400px;
                                                                    }


                                                                    .small-error-message {
                                                                        font-size: 80%;
                                                                        width: 100px;
                                                                    }

                                                                </style>

                                                                <div class="recaptcha-error-container"></div>

                                                                   

                                                                    <div class="invisible" style="height:200px;"></div>

                                                                    <!--Fin formulario contacto -->




                                                                    </div>

                                                                    <script>
                                                                        // Función para mostrar el mensaje de éxito y ocultarlo después de 5 segundos
                                                                        function showSuccessMessage() {
                                                                            var successMessage = document.getElementById('success-message');
                                                                            if (successMessage) {
                                                                                successMessage.style.display = 'block';
                                                                                setTimeout(function() {
                                                                                    successMessage.style.display = 'none';
                                                                                }, 5000); // 5000 milisegundos = 5 segundos
                                                                            }
                                                                        }

                                                                        // Llama a la función para mostrar el mensaje de éxito
                                                                        showSuccessMessage();
                                                                    </script>
@endsection
