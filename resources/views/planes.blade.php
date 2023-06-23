@extends('layouts.app')

@section('content')



<div class="plato" id="plato">
  <style>
    .py-4 {
    padding-top: 0 !important;
    padding-bottom: 1.5rem !important;
  }

  </style>

    <div class="container">
        <div class="row">
            <div class="section-title">
                <h1>Planes de ejercicio</h1>
                <p class="small text-uppercase">Genera una rutina de ejercicios especificando tu edad y <br> si padeces de alguna discapacidad</p>
            </div>

        </div>
    </div>

    
<form action="{{ route('rutina.sendMessage') }}" method="post">
    @csrf
  <div class="form-planes">
    <input type="text" name="message" placeholder="tengo 17 años, genera una rutina de ejercicio tomando en cuenta que tengo asma" id="message" class="form-control" />
    <button type="submit" class="btn btn-warning">Enviar</button>
  </div>
</form>

@if(isset($answer))
    <div>
        <textarea name="respuesta" id="" cols="40" rows="20" disabled>{{ $answer }}</textarea>
    </div>
@endif
</div>

    
<section class="footer">
  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #0a4275;">
    <!-- Grid container -->
    <div class="container p-4 mt-5">
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