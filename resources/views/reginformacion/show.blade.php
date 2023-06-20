@extends('layouts.app')

@section('template_title')
    {{ $reginformacion->name ?? "{{ __('Show') Reginformacion" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reginformacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reginformacions.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre Completo:</strong>
                            {{ $reginformacion->nombre_completo }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $reginformacion->email }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nacimiento:</strong>
                            {{ $reginformacion->fecha_nacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Peso Kg:</strong>
                            {{ $reginformacion->peso_kg }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $reginformacion->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Enfermedades:</strong>
                            {{ $reginformacion->enfermedades }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo De Cuerpo:</strong>
                            {{ $reginformacion->tipo_de_cuerpo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
