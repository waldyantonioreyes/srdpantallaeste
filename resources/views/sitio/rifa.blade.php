@extends('layout.app')

@section('title', 'Trivia')

@section('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
            <h1 class="texto-cabecera-negro text-sm mb-2" style="font-size: 40px;">Participa en nuestra trivia con motivo del
                día de las<span style="font-size: 40px;" class="texto-cabecera-verde text-sm">
                    Madres</span> y podrás ser ganador de uno de los 20 premios de <span class="texto-cabecera-verde"
                    style="font-size: 40px;">RD$2,000</span> en efectivo!
            </h1>
            <!--Fin Titulo Principal -->

            <!--Texto Secundario -->
            <p class="texto-secundario col-sm-12 col-md-12 col-lg-11" style="font-size: 1rem;">Registrate utilizando nuestro
                formulario digital, guarda tu número de participante
                y suscribete a nuestro canal de Youtube para completar la trivia y ya estás participando!
            </p>

            <!--Fin Texto Secundario -->
        </div>

    </div>




    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="card col-md-9 col-sm-12">
                <h5 class="card-header">Formulario</h5>
                <div class="card-body">
                    <p class="card-text">Introduce los datos requeridos y ya estarás participando.</p>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('trivias.store') }}" method="post" id="myForm">

                        @csrf

                        <div class="mb-3">
                            {{-- <label for="exampleInputEmail1" class="form-label">Nombre y Apellido</label> --}}
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="nombre" placeholder="Nombre y Apellido" required>
                        </div>

                        <div class="mb-3">
                            {{-- <label for="exampleInputPassword1" class="form-label">Teléfono</label> --}}
                            <input type="text" class="form-control" id="exampleInputPassword1" name="telefono"
                                maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                placeholder="Teléfono" required>
                        </div>

                        <div class="mb-3">
                            {{-- <label for="exampleInputPassword1" class="form-label">Cédula</label> --}}
                            <input type="text" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                class="form-control" maxlength="11" id="exampleInputPassword1" name="cedula"
                                placeholder="Cédula" required>
                        </div>

                        <div class="mb-3">
                            {{-- <label for="exampleInputPassword1" class="form-label">País</label> --}}
                            <select class="form-select" aria-label="Default select example" name="pais" id="countySel"
                                required>
                                <option selected>Seleccione su país de la lista</option>

                            </select>
                        </div>

                        <div class="mb-3">
                            {{-- <label for="exampleInputPassword1" class="form-label">Ciudad</label> --}}
                            <select class="form-select" name="ciudad" aria-label="Default select example" id="stateSel"
                                required>
                                <option selected>Seleccione su ciudad de la lista</option>

                            </select>
                        </div>

                        <div class="mb-3" hidden>
                            <label for="exampleInputPassword1" class="form-label">Distrito</label>
                            <select class="form-select" aria-label="Default select example" id="districtSel">
                                <option selected>Seleccione su ciudad de la lista</option>

                            </select>
                        </div>


                        <button type="submit" class="btn btn-success">Participar</button>
                    </form>

                    @if (Session::has('mensaje'))
                        <script>
                            swal({
                                title: "Registro Completado!",
                                text: "{!! Session::get('mensaje') !!}. Guarde su número de participante el cuál es: {!! Session::get('numperoparticipante') !!}",
                                icon: "success",
                                buttons: {
                                    confirm: {
                                        text: "Aceptar y Visitar Canal de YouTube",
                                        value: true,
                                        visible: true,
                                        className: "btn btn-success", // Clase para el estilo del botón
                                        closeModal: true
                                    }
                                }
                            }).then((value) => {
                                if (value) {
                                    window.open("https://www.youtube.com/@sorteosrd", "_blank");
                                }
                            });
                        </script>

                        <style>
                            /* Estilo para centrar el botón */
                            .swal-button-container {
                                display: flex;
                                justify-content: center;
                            }
                        </style>
                    @endif


                </div>
            </div>


        </div>

    </div>

    </div>


@endsection


<script>
    // Ocultar el mensaje después de 5 segundos
    setTimeout(function() {
        document.getElementById('mensaje').style.display = 'none';
    }, 6000); // 5000 milisegundos = 5 segundos
</script>
