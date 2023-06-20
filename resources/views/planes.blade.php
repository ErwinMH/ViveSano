@extends('layouts.app')

@section('content')



<div class="plato" id="plato">
    <div class="container">
        <div class="row">
            <div class="section-title">
                <h1>Planes de ejercicio</h1>
                <p class="small text-uppercase">Genera rutinas de ejercicio</p>
            </div>

        </div>
    </div>

    
<form action="{{ route('rutina.sendMessage') }}" method="post">
    @csrf
  <div class="form-dieta">

    <input type="text" name="message" placeholder="genera una rutina de ejercicio para principiantes" id="message" class="form-control" />
    <button type="submit" class="btn btn-warning">Enviar</button>
  </div>
</form>

@if(isset($answer))
    <div>
        <textarea name="respuesta" id="" cols="40" rows="20" disabled>{{ $answer }}</textarea>
    </div>
@endif
</div>

@endsection