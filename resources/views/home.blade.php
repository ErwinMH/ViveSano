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
            <h1>VIVESANO</h1>
            <h4>Aprende a bsansksn</h4>
            <div class="botones">
            <button type="button" class="boton"><span></span>Sobre nosotros</button>
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
                        <img src="" alt="sobre-mi">
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


    <section class="develop" id="develop">
      <div class="container">
        <div class="row">
          <div class="section-title">
              <h1>ytct</h1>
              <p class="small text-uppercase">Lo tre bacano</p>
          </div>
      </div>
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="/img/2.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Cricri</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Profaj</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
          <div class="card">
            <img class="card-img-top" src="..." alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Erwin</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="services" id="services">
      <div class="container">
        <div class="row">
          <div class="section-title">
              <h1>ytct</h1>
              <p class="small text-uppercase">Lo tre bacano</p>
          </div>
      </div>

          <div class="card-deck">
          
            <div class="card">
              <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title">Dietas</h3>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <a href="{{ url('dietas')}}" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="..." alt="Card image cap">
              <div class="card-body">
                <h3 class="card-title">Planes de ejercicio</h3>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <a href="{{ url('planes')}}" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





  </div>
</div>
</section>
@endsection
