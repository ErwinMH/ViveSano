@extends('layouts.app')

@section('content')

<section class="Inicio" id="inicio">
  <style>
    .py-4 {
    padding-top: 0 !important;
    padding-bottom: 1.5rem !important;
  }

  </style>
  
    <div class="banner">
        <div class="contenido">
            <h1>VIVE<span>SANO</span></h1>
            <h4>Cuida tu salud y vive una vida saludable</h4>
            <div class="botones">
              <a href="{{ url('#servicios')}}"><button type="button" class="boton"><span></span>Servicios</button></a>
        </div>
        </div>
        
    </div>

    
    
      <!-- Start About-->
      <section class="sobre-mi" id="sobre-mi">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h1>Sobre nosotros</h1>
                    <p class="small text-uppercase">Que ofrecemos</p>
                </div>
            </div>
            <div class="row">
                <div class="sobre-content">
                    <div class="row">
                     <div class="img">
                        <img src="/img/logo.jpg" alt="sobre-mi">
                    </div>
                              <div class="text">
                                      <h4>¿Quiénes Somos?</h4>
                                      
                                      <p>Somos una aplicacion que engloba ambitos como alimentacion y el ejercicio. 
                                        Contamos información verídica, datos y profesionales en el area de la salud con los cuales podra contactarse. 
                                        Ofrecemos un servicio totalmente gratuito.
                                      </p>
                                      <div class="info">
                                        
                                          <div class="list">
                                             <label><a href="">Planes de ejercicio</a></label>
                                          </div>
                                          <div class="list">
                                             <label><a href="">Recetas / Dietas</a></label>
                                         </div>
                                        
                                          
                                    </div>
                              </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- End About-->



      
      <!-- Start services-->

    <section class="services" id="services">
      <div class="container">
        <div class="row">
          <div class="section-title" name="servicios" id="servicios">
              <h1 class="serviciosh1">Servicios</h1>
              <p class="small text-uppercase">Ofrecemos</p>
          </div>
      </div>

          <div class="card-deck">
          
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Dietas</h3>
                <p class="card-text">Según tus necesidades .</p>
                <a href="{{ url('dietas')}}" class="btn btn-primary">Ver mas...</a>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Planes de ejercicio</h3>
                <p class="card-text">Según tus necesidades, genera tu rutina de ejercicio.</p>
                <a href="{{ url('planes')}}" class="btn btn-primary">Ver mas..</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

      <!-- End services-->


      <!-- Start profesionales-->

      <section class="profesional" id="profesional">
        <div class="container">
          <div class="row">
            <div class="section-title" name="servicios" id="servicios">
                <h1>Profesionales</h1>
                <p class="small text-uppercase">Conctactate con nuestros profesionales y consulta con ellos cualquier duda </p>
            </div>

            <div class="container text-center">
          <div class="container mt-3">
              <div class="row">
                  <div class="col-md-3">
                      <div class="bg-white p-3 text-center rounded box">
                          <h5 class="mt-3 name">Sally Perez</h5><span class="work d-block">Nutriologa</span>
                          <div class="mt-4 about"><span>¡Contacta y pregunta lo que quieras saber!</span></div>
                          <div class="mt-4">
                              <a href="{{ url('contactSally')}}"><h6 class="v-profile">Contactar</h6></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="bg-white p-3 text-center rounded box">
                        <h5 class="mt-3 name">Emma Rivers</h5><span class="work d-block">Nutricionista</span>
                        <div class="mt-4 about"><span>¡Contacta y pregunta lo que quieras saber!</span></div>
                          <div class="mt-4">
                            <a href="{{ url('contactSally')}}"><h6 class="v-profile">Contactar</h6></a>
                          </div>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="bg-white p-3 text-center rounded box">
                        <h5 class="mt-3 name">Daniel Roma</h5><span class="work d-block">Coach</span>
                        <div class="mt-4 about"><span>¡Contacta y pregunta lo que quieras saber!</span></div>
                          <div class="mt-4">
                            <a href="{{ url('contactSally')}}"><h6 class="v-profile">Contactar</h6></a>
                          </div>
                      </div>
                  </div>
                  
              </div>
          </div>            

        </div>

        </div>
      </section>
      

    
      
      <!-- End profesionales-->



      <!-- Start creadores-->

    <section class="develop" id="develop">
      <div class="container">
        <div class="row">
          <div class="section-title">
              <h1>Creadores</h1>
              <p class="small text-uppercase">Desarrolladores de la aplicacion</p>
          </div>
      </div>
        <div class="card-deck">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Crismely Valerio</h5>
              <p class="card-text">Encargada de páginas web, cooperó con desarrollo de programación.</p>
              <p class="card-text"><small class="text-muted">Desarrolladora</small></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Brenda Azcona</h5>
              <p class="card-text">Encargada de base de datos, cooperó con desarrollo de programación.</p>
              <p class="card-text"><small class="text-muted">Desarrolladora</small></p>
            </div>
          </div>
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Erwin Martinez</h5>
              <p class="card-text">Encargado de desarrollo de programación.</p>
              <p class="card-text"><small class="text-muted">Desarrollador</small></p>
            </div>
          </div>
        </div>
      </div>
    </section>

      <!-- End creadores-->







  </div>
</div>
</section>

    
<section class="footer">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: CTA -->
      <section class="boton-footer">
        <p class="d-flex justify-content-center align-items-center">
        
          <a href="{{ url('register')}}"><button type="button" class="btn btn-outline-light btn-rounded">
            Registrate!
          </button>
        </p>
      </section>
      <!-- Section: CTA -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</section>
@endsection


