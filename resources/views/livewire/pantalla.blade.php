<div wire:poll.1000ms>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
      integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css"
    />

    <!-- Styles -->
    <link href="estilospantalla.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/estilospantalla.css') }}"  />
    <title>Pantalla - Sorteos RD</title>
   
    
  </head>




 <div class="contenedor" style="background-color: {{ $configuracion->headercolor }};">
  {{-- <div style="background-color: {{ $configuracion->headercolor }};">
    aqui probando el color para el header de la pantalla
    <h1>Nombre de la banca: {{ $configuracion->bankname }}</h1>
</div> --}}
      <div class="flare0">
        <img src="{{ asset('img/flare1.png') }}" alt="" >
      </div>
      <div class="flare1">
        <img src="{{ asset('img/flare2.png') }}" alt="">
      </div>

      <div class="flare6">
        <img src="{{ asset('img/flare6.png') }}" alt="">
      </div>

      <div class="flare7">
        <img src="{{ asset('img/flare6.png') }}" alt="">
      </div>

      <div class="flare3">
        <img src="{{ asset('img/flare3.png') }}" alt="">
      </div>

      <div class="flare8">
        <img src="{{ asset('img/flare6.png') }}" alt="">
      </div>
{{-- nombre de la banca desde la base de datos --}}
      <div class="nombre-banca">
        <div class="texto-banca">{{ $configuracion->bankname }}</div>
      </div>

      <div class="loterias1">
        <div class="loteria-contenedor-single">
          <div class="datos-loteria">
            <div class="logo-loteria">
              <img
                src="{{ asset('img/lotoreal.png') }}"
                alt=""
                style="width: 5vw !important; margin-left: 2.5vw"
              />
            </div>

            <div class="resultados-dobles">
              <div class="resultados-singles">
                <div
                  class="bolito-single d-flex justify-content-center align-items-center"
                >
                
           
            
                  <div class="numero">{{ $real12pm->num1 }}</div>
                </div>

                <div
                  class="bolito-single d-flex justify-content-center align-items-center"
                >
                  <div class="numero"> {{ $real12pm->num2 }}</div>
                </div>

                <div
                  class="bolito-single d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $real12pm->num3 }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="loteria-contenedor-multiple">
          <div class="datos-loteria">
            <div class="logo-loteria">
              <img src="{{ asset('img/loterianacional.png') }}" alt="" />
            </div>

            <div class="resultados-dobles">
              <div class="resultados">
                <div
                
            
            
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $nacional230pm->num1 }}</div>
                </div>

                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $nacional230pm->num2 }}</div>
                </div>

                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $nacional230pm->num3 }}</div>
                </div>
              </div>

              <div class="resultados">
                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                
                
                  <div class="numero">{{ $nacional850pm->num1 }}</div>
                </div>

                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $nacional850pm->num2 }}</div>
                </div>

                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $nacional850pm->num3 }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="loteria-contenedor-single">
          <div class="datos-loteria">
            <div class="logo-loteria">
              <img
                src="{{ asset('img/leidsa.png') }}"
                alt=""
                style="width: 5vw !important; margin-left: 2.5vw"
              />
            </div>

            <div class="resultados-dobles">
              <div class="resultados-singles">
                <div
                  class="bolito-single d-flex justify-content-center align-items-center"
                >
                {{-- leidsa 3 55 --}}
                
            
           
                  <div class="numero">{{ $leidsa->num1}}</div>
                </div>

                <div
                  class="bolito-single d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $leidsa->num2 }}</div>
                </div>

                <div
                  class="bolito-single d-flex justify-content-center align-items-center"
                >
                  <div class="numero"> {{ $leidsa->num3 }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="loteria-contenedor-multiple">
          <div class="datos-loteria">
            <div class="logo-loteria">
              <img src="{{ asset('img/primera.png') }}" alt="" style="width: 10vw" />
            </div>

            <div class="resultados-dobles">
              <div class="resultados">
                
            
            
                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $primera12pm->num1}}</div>
                </div>

                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $primera12pm->num2 }}</div>
                </div>

                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $primera12pm->num3 }}</div>
                </div>
              </div>

              <div class="resultados">
                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                
            
            
                
                  <div class="numero">{{ $primera8pm->num1}}</div>
                </div>

                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $primera8pm->num2 }}</div>
                </div>

                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $primera8pm->num3 }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="loteria-contenedor-multiple">
          <div class="datos-loteria">
            <div class="logo-loteria">
              <img src="{{ asset('img/lasuerte.png') }}" alt="" style="width: 10vw" />
            </div>

            <div class="resultados-dobles">
              <div class="resultados">
                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                
            
            
                  <div class="numero">{{ $lasuerte1230pm->num1}}</div>
                </div>

                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $lasuerte1230pm->num2 }}</div>
                </div>

                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $lasuerte1230pm->num3 }}</div>
                </div>
              </div>

              <div class="resultados">
                <div
                
                
                
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $lasuerte6pm->num1 }}</div>
                </div>

                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $lasuerte6pm->num2 }}</div>
                </div>

                <div
                  class="bolito d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $lasuerte6pm->num3 }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="loteria-contenedor-single">
          <div class="datos-loteria">
            <div class="logo-loteria">
              <img
                src="{{ asset('img/loteka.png') }}"
                alt=""
                style="width: 7vw !important; margin-left: 2vw"
              />
            </div>

            <div class="resultados-dobles">
              <div class="resultados-singles">
                <div
                  class="bolito-single d-flex justify-content-center align-items-center"
                >
                
                
                
                  <div class="numero">{{ $loteka->num1 }}</div>
                </div>

                <div
                  class="bolito-single d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $loteka->num2 }}</div>
                </div>

                <div
                  class="bolito-single d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $loteka->num3 }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="loteria-contenedor-single-noshadow">
          <div class="datos-loteria">
            <div class="logo-loteria">
              <img
                src="{{ asset('img/lotedom.png') }}"
                alt=""
                style="width: 9vw !important; margin-left: 1vw"
              />
            </div>

            <div class="resultados-dobles">
              <div class="resultados-singles">
                <div
                  class="bolito-single d-flex justify-content-center align-items-center"
                >
                
                  <div class="numero">{{ $lotedom->num1 }}</div>
                </div>

                <div
                  class="bolito-single d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $lotedom->num2 }}</div>
                </div>

                <div
                  class="bolito-single d-flex justify-content-center align-items-center"
                >
                  <div class="numero">{{ $lotedom->num3 }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<!-- resources/views/livewire/image-slider.blade.php -->

{{-- <div class="slideshow slider-container">
  <div class="slider">
      @foreach($imagenes as $index => $image)
          <div class="slide" style="background-image: url('{{ asset('storage/'.$image->url) }}');"></div>
      @endforeach
  </div>
</div>

<style>
.slider-container {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.slider {
  display: flex;
  width: 100%;
  animation: slide 15s infinite;
}

.slide {
  min-width: 100%;
  height: 400px;
  background-size: cover;
  background-position: center;
}

@keyframes slide {
  0% { transform: translateX(0); }
  20% { transform: translateX(0); }
  25% { transform: translateX(-100%); }
  45% { transform: translateX(-100%); }
  50% { transform: translateX(-200%); }
  70% { transform: translateX(-200%); }
  75% { transform: translateX(-300%); }
  95% { transform: translateX(-300%); }
  100% { transform: translateX(0); }
}

.carousel-control-prev, .carousel-control-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  z-index: 1;
  background: rgba(0, 0, 0, 0.5);
  color: white;
  padding: 10px;
  border-radius: 50%;
}

.carousel-control-prev {
  left: 10px;
}

.carousel-control-next {
  right: 10px;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const slides = document.querySelectorAll('.slide');
  let currentIndex = 0;

  setInterval(() => {
      slides[currentIndex].classList.remove('active');
      currentIndex = (currentIndex + 1) % slides.length;
      slides[currentIndex].classList.add('active');
  }, 4000);
});
</script> --}}

<div class="slideshow slider-container">
  <div class="slider">
      @foreach($imagenes as $index => $image)
          <div class="slide slide-{{ $index }}" style="background-image: url('{{ asset('storage/'.$image->url) }}');"></div>
      @endforeach
  </div>
</div>

<style>
.slider-container {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.slider {
  position: relative;
  width: 100%;
  height: 400px;
}

.slide {
  position: absolute;
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  opacity: 0;
  animation-duration: 10s;
  animation-timing-function: ease-in-out;
  animation-iteration-count: infinite;
}

@keyframes fadeInOut {
  0%, 45%, 100% { opacity: 0; }
  5%, 40% { opacity: 1; }
}

@keyframes slideLeft {
  0%, 45%, 100% { opacity: 0; transform: translateX(100%); }
  5%, 40% { opacity: 1; transform: translateX(0); }
}

@keyframes zoomInOut {
  0%, 45%, 100% { opacity: 0; transform: scale(1); }
  5%, 40% { opacity: 1; transform: scale(1.1); }
}

@keyframes rotateInOut {
  0%, 45%, 100% { opacity: 0; transform: rotate(0deg); }
  5%, 40% { opacity: 1; transform: rotate(360deg); }
}

/* Add more keyframes if needed */

.slide-0 {
  animation-name: fadeInOut;
}

.slide-1 {
  animation-name: slideLeft;
  animation-delay: 2s;
}

.slide-2 {
  animation-name: zoomInOut;
  animation-delay: 4s;
}

.slide-3 {
  animation-name: rotateInOut;
  animation-delay: 6s;
}
.slide-4 {
  animation-name: rotateInOut;
  animation-delay: 6s;
}
.slide-5 {
  animation-name: zoomInOut;
  animation-delay: 4s;
}
/* Add more animations if needed */
</style>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const slides = document.querySelectorAll('.slide');
  slides.forEach((slide, index) => {
    slide.style.animationDelay = `${index * 2}s`;
  });
});
</script>


      {{-- <div class="slideshow">
        <div
            id="carouselExampleFade"
            class="carousel slide carousel-fade"
            data-ride="carousel"
            data-interval="4000"
        >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                @foreach($imagenes as $index => $image)
                    <li data-target="#carouselExampleFade" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            
            <div class="carousel-inner">
                @foreach($imagenes as $index => $image)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/'.$image->url) }}" class="d-block w-100" alt="Descripción de la imagen" />
                    </div>
                @endforeach
            </div>
    
            <!-- Controls -->
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> --}}
    

      {{-- <div class="slideshow">
        <div
            id="carouselExampleFade"
            class="carousel slide carousel-fade"
            data-ride="carousel"
            data-interval="5000"
        >
            <div class="carousel-inner">
                @foreach($imagenes as $index => $image)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img src="{{ asset('storage/'.$image->url) }}" class="d-block w-100" alt="Descripción de la imagen" />
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}
    

      {{-- <div class="slideshow">
        <div
          id="carouselExampleFade"
          class="carousel slide carousel-fade"
          data-ride="carousel"
          data-interval="5000"
        >
        
          <div class="carousel-inner">
           
            <div class="carousel-item active">
              <img src="{{ asset('img/img.jpg') }}" class="d-block w-100" alt="Imagen 1" />
            </div>
              @foreach($imagenes as $image)
                  <div class="carousel-item">
                      <img src="{{ asset('storage/'.$image->url) }}" class="d-block w-100" alt="Descripción de la imagen" />
                  </div>
               @endforeach 
          </div>
        </div>
      </div> --}}

      <div class="loterias3">
        <img src="{{ asset('img/logosorteos.png') }}"  alt="" class="logo-loterias3" />

        <div class="texto-loterias3 text-center">
          <h1>
            <b>RESULTADOS MANEJADOS POR SORTEOS RD</b>
          </h1>
        </div>
      </div>
      <div class="loterias2">3</div>
      <div class="loterias4">
        <marquee loop="5" behavior="" direction="">
          <div class="d-flex justify-content-around">
            <div class="text-center">
              <h6
                class="font-weight-bolder"
                style="color: rgb(46, 71, 165); font-size: 2.4vh"
              >
                NACIONAL 2:30 PM <span class="">|</span
                ><span style="color: rgb(201, 97, 0); margin-right: 20px">
                  05 44 85</span
                >
              </h6>
            </div>

            <div class="text-center">
              <h6
                class="font-weight-bolder"
                style="color: rgb(46, 71, 165); font-size: 2.4vh"
              >
                LEIDSA 8:55 PM <span class="">|</span
                ><span style="color: rgb(201, 97, 0); margin-right: 20px">
                  25 34 55</span
                >
              </h6>
            </div>

            <div class="text-center">
              <h6
                class="font-weight-bolder"
                style="color: rgb(46, 71, 165); font-size: 2.4vh"
              >
                PRIMERA 12:00 PM <span class="">|</span
                ><span style="color: rgb(201, 97, 0); margin-right: 20px">
                  15 95 23</span
                >
              </h6>
            </div>

            <div class="text-center">
              <h6
                class="font-weight-bolder"
                style="color: rgb(46, 71, 165); font-size: 2.4vh"
              >
                LOTEKA 12:00 PM <span class="">|</span
                ><span style="color: rgb(201, 97, 0); margin-right: 20px">
                  15 95 23</span
                >
              </h6>
            </div>
          </div>
        </marquee>
      </div>
      <div class="fecha-hora">
        <div class="recuadro-rojo text-nowrap">Viernes 19 Abril, 2024</div>
        <div class="hora">12:49 PM</div>
      </div>
      <div class="bg-whitebottom"></div>

      <div class="bg-complementario">
        <div class="combustibles-divisas" style="margin-left: 7vw">
          <img src="{{ asset('img/dolar.png') }}" alt="" class="logo-divisa" />

          <div class="titulos">
            <div class="titulo1 ml-2">Compra</div>
            <div class="titulo2 ml-2">Venta</div>
          </div>
           
              

          <div class="valores">
            <div class="valor1 ml-2 mt-1">{{ $dollar->buy}}</div>
            <div class="valor2 ml-2">{{ $dollar->sell }}</div>
          </div>
        </div>

        <div class="combustibles-divisas">
          <img src="{{ asset('img/gasolina.png') }}" alt="" class="logo-divisa" />

          <div class="titulos">
            <div class="titulo1 ml-2">Premium</div>
            <div class="titulo2 ml-2">Regular</div>
          </div>

          <div class="valores">
            <div class="valor1 ml-2 mt-1">{{ $gasolina->type }}</div>
            <div class="valor2 ml-2">{{ $gasolina->price }}</div>
          </div>
        </div>

        <div class="combustibles-divisas">
          <img src="{{ asset('img/glp.png') }}" alt="" class="logo-divisa" />

          <div class="titulos">
            <div class="titulo1 ml-2">Premium</div>
            {{-- <div class="titulo2 ml-2">Regular</div> --}}
          </div>

          <div class="valores">
            <div class="valor1 ml-2 mt-1">{{ $glp->type }}</div>
            {{-- <div class="valor2 ml-2">60.65</div> --}}
          </div>
        </div>

        <div class="logo-sorteosrd">
          <img src="{{ asset('img/logosorteos.png') }}" alt="" />
        </div>
      </div>
    </div>

  


</div>


